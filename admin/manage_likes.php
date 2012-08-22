<?php
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
		if(file_put_contents($dir,serialize($data))) {
			// success
		}	
	}
	$message = "Like limits successfully saved.";
}
$a = array();
for($i=0; $i<7; $i++) {
	$dir = "../likes_data/chapter_".($i+1);
	$data = unserialize(file_get_contents($dir));
	$a[$i]['count'] = $data['count'];
	$a[$i]['limit'] = $data['limit'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Story of Maya Likes Admin</title>
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

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
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
          <a class="brand" href="manage_likes.php">Likes Summary</a>
        </div>
      </div>
    </div>

    <div class="container">
    	<?php if($message): ?>
    		<div class="alert alert-success"><?php echo $message; ?></div>
    	<?php endif; ?>
		<?php if($chapter): ?>
      	<h1>CHAPTER <?php echo $chapter ?></h1>
      	<?php else: ?>
      	<h1>Likes Summary</h1>
      	<?php endif; ?>
      	<form method="post" action="<?php echo $PHP_SELF ?>">
     	 <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Likes Count</th>
              <th>Likes Remaining</th>
              <th>Limit</th>
            </tr>
          </thead>
          <tbody>
          	<?php for($i=0; $i<6; $i++): ?>
            <tr>
              <td><?php echo ($i+1); ?></td>
              <td><?php echo $a[$i]['count']; ?></td>
              <td><?php echo ($a[$i]['limit'] - $a[$i]['count']) ?></td>
              <td><input name="chapter[]" class="span1" type="text" value="<?php echo $a[$i]['limit'] ?>"></td>
            </tr>
            <?php endfor; ?>
          </tbody>
        </table>
        <button type="submit" class="btn btn-success">Save New Limits</button>
        </form>		
    </div> <!-- /container -->

  </body>
</html>
