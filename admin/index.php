<?php

$domain = $_SERVER['SERVER_NAME'] . "/";
$subdir = "storyofmaya/";
$url = $domain . $subdir;

$data = array(
			"count" => 0,
			"limit" => 0
				);
$chapter = $_GET['chapter'];
$dir = "../likes_data/chapter_" . $chapter;  //make sure to put it bellow what the server can reach.
if($_POST) {
	for($i=0; $i<6; $i++) {
		$dir = "../likes_data/chapter_".($i+1);
		$data = unserialize(file_get_contents($dir));
		$data['limit'] = $_POST['chapter'][$i];
		file_put_contents($dir,serialize($data));	
	}
	// now save remote/local settings
	$config = $_POST['config'];
	$file = "../config";
	file_put_contents($file,serialize($config));
	$message = "Settings successfully saved.";
}
$a = array();
for($i=0; $i<6; $i++) {
	$dir = "../likes_data/chapter_".($i+1);
	$data = unserialize(file_get_contents($dir));
	$a[$i]['count'] = $data['count'];
	$a[$i]['limit'] = $data['limit'];
	
	// get facebook data
	$chapter = $i+1;
	$u = $url;
	if ($chapter > 1)
		$u .= '?chapter=' . $chapter;
	$fburl = 'http://graph.facebook.com/fql?q=SELECT%20url,%20normalized_url,%20share_count,%20like_count,%20comment_count,%20total_count,%20commentsbox_count,%20comments_fbid,%20click_count%20FROM%20link_stat%20WHERE%20url=%22'.$u.'%22';
	$json = file_get_contents($fburl);
	$fb = json_decode($json);
	$a[$i]['fb'] = $fb->data[0]->like_count;
}

$config_file = "../config";
$config = unserialize(file_get_contents($config_file)); 
 
function get_data($url)
{
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Story of Maya Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Maya's Story Admin</a>
        </div>
      </div>
    </div>

    <div class="container">
    	<?php if($message): ?>
    		<div class="alert alert-success"><?php echo $message; ?></div>
    	<?php endif; ?>
      	<h1>Likes Summary - <?php if($config['use_fb']): ?>using Facebook Data<?php else: ?>using Local Data<?php endif ?></h1>
      	<p>Welcome. Here, you can update your settings for Maya's story.  At any time, you can set the limit count for any chapter.  The counts will update dynamically.</p>
      	<form method="post" action="<?php echo $PHP_SELF ?>">
     	 <table class="table table-hover">
          <thead>
            <tr>
              <th>Chapter #</th>
              <th>Local Likes Count</th>
              <th>Facebook Likes Count</th>
              <th>Likes Remaining</th>
              <th>Limit</th>
            </tr>
          </thead>
          <tbody>
          	<?php for($i=0; $i<6; $i++): ?>
          	<?php if($config['use_fb']): ?>
          	<?php $remaining = $a[$i]['limit'] < $a[$i]['fb'] ? 0 : $a[$i]['limit'] - $a[$i]['fb']; ?>
          	<?php else: ?>
          	<?php $remaining = $a[$i]['limit'] < $a[$i]['count'] ? 0 : $a[$i]['limit'] - $a[$i]['count']; ?>	
          	<?php endif; ?>
            <tr<?php if($remaining == 0): ?> class="alert-success"<?php endif; ?>>
              <td><?php echo ($i+1); ?></td>
              <td><?php echo $a[$i]['count']; ?></td>
              <td><?php echo $a[$i]['fb']; ?></td>
              <td><?php echo $remaining ?></td>
              <td><input name="chapter[]" class="span1" type="text" value="<?php echo $a[$i]['limit'] ?>"></td>
            </tr>
            <?php endfor; ?>
          </tbody>
        </table>
        <legend>Data Source</legend>
	        <p>Set where you want your like data to pull from.  If you want to pull all Like data from Facebook, simply select that option and click Update.</p>
	        <label class="radio">
	          <input type="radio" name="config[use_fb]" id="optionsRadios2" value="1" <?php if ($config['use_fb']): ?>checked="checked"<?php endif; ?>>
		      Get Like Data from Facebook
	        </label>
	        <label class="radio">
	          <input type="radio" name="config[use_fb]" id="optionsRadios2" value="0" <?php if (!$config['use_fb']): ?>checked="checked"<?php endif; ?>>
		      Use Local Like Data
	        </label>
	        <p>Note: Anytime a user clicks Like, the data will be saved locally regardless of where you have chosen the Facebook or Local option.</p>
	    <legend>Settings</legend>
		  	<label>Google Analytics ID</label>
		  	<input type="text" name="config[ga_id]" placeholder="UA-XXXXX-X" value="<?php echo $config['ga_id']; ?>">
		  	<label>Facebook App ID</label>
		  	<input type="text" name="config[fb_app_id]" placeholder="XXXXXXXXXXXX" value="<?php echo $config['fb_app_id']; ?>">
        	<div class="form-actions">
			  <button type="submit" class="btn btn-primary">Save changes</button>
			</div>
        </form>	
    </div> <!-- /container -->

  </body>
</html>
