<?php $num = rand(1000, 1000000) * rand(100, 10000); ?>
<?php $config = unserialize(file_get_contents('config')); ?>
<?php $chapter = $_GET['chapter'] ? $_GET['chapter'] : 1; ?>
<?php $subdir = '/storyofmaya/'; ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $config['site_title'] ?></title>
    <meta name="description" content="<?php echo $config['site_title'] ?>">
    <meta name="viewport" content="width=device-width">
	<link rel="canonical" href="http://<?php echo $_SERVER['SERVER_NAME'] . $subdir ?><?php if($chapter != 1): ?>?chapter=<?php echo $chapter ?><?php endif ?>"/>
	<meta property="fb:app_id" content="461563293883641" />
	<meta property="og:title" content="<?php echo $config['site_title'] ?>" />
	<meta property="og:site_name" content="join my village, empower women, getting women out of poverty" />
	<meta property="og:description" content="<?php echo $config['site_description'] ?>" />
	<meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME'] . $subdir ?><?php if($chapter != 1): ?>?chapter=<?php echo $chapter ?><?php endif ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'] . $subdir ?>img/JMV_BTS_<?php echo $chapter ?>.gif" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/story.css">
	<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="css/ipad.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modals.css">
    <script src="js/vendor/modernizr-2.6.1.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<!--[if lt IE 9]>
        <p class="chromeframe">You are using an outdated browser for this site. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

	<!-- BEGIN MODALS -->
	<!-- ENTRY MODAL -->
	<div id="modal-entry" class="modal modal-start-end">
		<div class="banner"></div>
		<div class="modal-content">
			<div class="content-left">
				<p>A new school year is underway for many countries around the world. It is a time filled with excitement, nervousness and hope.</p>
				<p>But 60 million girls in developing nations worldwide are not in school. Denied education and access to resources, they are doomed to an endless cycle of poverty, with no chance to shape their own future.</p>
				<p>Maya respresents one of these girls. She might live in Malawi, or perhaps India. She wants the chance to go to school.</p>
			</div>
			<div class="content-right">
				<h1>YOU CAN HELP</h1>
					<p>By watching and liking Maya's story, you'll unlock donations to Join My Village, an initiative of General Mills, Merck/MSD and CARE USA that supports projects in India and Malawi to educate and empower girls like Maya&mdash;turning the tide not just for them, but for our planet.</p>
					<a href="#" class="button">TAKE A LOOK</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- ENTRY MODAL -->
	
	<!-- BEGIN CONTAINER -->
	<div id="container">
		<div id="header">
			<div class="jmv-logo"><p>JOIN MY VILLAGE</p></div>
			<div class="social-media">
				<div id="facebook" class="share"><fb:like href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/storyofmaya/" send="false" layout="button_count" width="100" show_faces="false"></fb:like></div>
				<div id="twitter" class="share"><a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out Join My Village!">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
			</div>
		</div>
		<!-- BEGIN MAIN AREA -->
		<div id="story">
			<div id="jmv-modal" class="modal">
				<div class="modal-icon"></div>
				<div class="modal-content">
					<h2>JOIN MY VILLAGE CONNECTION</h2>
					<img src="img/loading.gif" alt="Loading..." />
					<div id="video"></div>
					<p></p>
				</div>
			</div>
			<div id="likes-modal" class="modal-end layer-level-100">
				<div class="modal-banner"></div>
				<div class="modal-content">
					<p id="intro"></p>
					<div class="like-message"></div>
					<div class="facebook-like-wrapper"><div class="facebook-like"><fb:like send="false" layout="button_count" width="50" show_faces="false"></fb:like></div></div>
					<div class="clear"></div>
					<div class="modal-divider"></div>
					<div id="info">
						<p class="like-count-total">When <span class="like-count"></span> likes are reached, <span class="next-chapter-message"></span></p>
						<div id="percentage-bar" class="percentage-bar">
							<div id="percentage" class="percentage"></div>
						</div>
						<div class="likes-count"><span class="count">0</span> LIKE<span class="plural"></span></div>
						<div class="likes-remaining"><span class="like-count"></span> LIKE<span class="plural"></span> TO GO!</div>
					</div>
					<div id="thanks">
						<div id="congrats">
							<h3>CONGRATULATIONS</h3>
							<p>You've unlocked the next chapter!</p>
							<a class="button" id="continue">CONTINUE MAYA'S STORY</a>
						</div>
						<div id="message">
							<h3>THANK YOU!</h3>
							<p><a href="http://www.facebook.com/joinmyvillage" target="_blank">Follow us</a> on Facebook to find out when the next chapter has been released.</p>
							<p>Visit <a href="http://www.joinmyvillage.com" target="_blank">joinmyvillage.com</a> to see more stories from India and Malawi.</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="maya" class="x0">
				<div id="stars" class="stars"></div>
				<div id="instructions" class="keyboard"><span>USE THE ARROW<br />KEYS TO MOVE MAYA</span></div>
			</div>
			<!-- BEGIN CHAPTER 1 -->
			<div id="chapter-1" class="chapter">
				<div id="title-chapter-1" class="title"><h1>CHAPTER 1</h1>
				<h2>A CHANCE<br />AT SCHOOL</h2></div>
				<div id="box-11" class="box">
					<div class="box-content">
						<p>Maya is a girl who lives with her family in an impoverished village.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-12" class="box">
					<div class="box-content">
						<p>The family makes a subsistence living with a few animals and a garden plot.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-13" class="box">
					<div class="box-content">
						<p>By age 8, Maya is already helping her family by tending to the animals and working in the fields.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-14" class="box">
					<div class="box-content">
						<p>It is hard work. It is what girls growing up in her village are expected to do. But Maya knows there is another path.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-15" class="box">
					<div class="box-content">
						<p>Maya's brothers go to primary school, but Maya doesn't have that chance. Her community doesn't support girls going to school.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="cloud-11" class="cloud-large layer-level-96"></div>
				<div id="cloud-12" class="cloud-large layer-level-96"></div>
				<div id="cloud-13" class="cloud-large layer-level-96"></div>
				<div id="cloud-14" class="cloud-small layer-level-96"></div>
				<div id="cloud-15" class="cloud-large layer-level-96"></div>
				<div id="tree-11" class="tree-medium layer-level-99 x0"></div>
				<div id="grass-11" class="grass-small layer-level-98 x0"></div>
				<div id="tree-12" class="tree-large layer-level-99 x0"></div>
				<div id="mother-11" class="mother layer-level-99 x0"></div>
				<div id="father-11" class="father layer-level-99 x0"></div>
				<div id="bush-11" class="bush-large layer-level-98 x0"></div>
				<div id="house-11" class="house layer-level-97 x0"></div>
				<div id="goat-11" class="goat layer-level-97 x0"></div>
				<div id="goat-12" class="goat-s layer-level-97 x0"></div>
				<div id="grass-12" class="grass-large layer-level-96 x0"></div>
				<div id="tree-13" class="tree-small layer-level-97"></div>
				<div id="field-11" class="field layer-level-98 x0"></div>
				<div id="crop-11" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-12" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-13" class="crop layer-level-99 x0"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-14" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-15" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="flag-11" class="flag layer-level-97 x0">
					<div id="learn-more" class="learn-more"></div>
				</div>
				<div id="grass-13" class="grass-small layer-level-100 x0"></div>
				<div id="girl-11" class="girl-bucket layer-level-100"></div>
				<div id="girl-12" class="girl-with-goat-1 layer-level-100"></div>
				<div id="tree-14" class="tree-small layer-level-99"></div>
				<div id="bush-12" class="bush-large layer-level-101 x0"></div>
				<div id="grass-14" class="grass-large layer-level-100 x0"></div>
				<div id="boy-11" class="boy-1 layer-level-100"></div>
				<div id="boy-12" class="boy-2 layer-level-100"></div>
				<div id="boy-13" class="boy-3 layer-level-100"></div>
				<div id="flag-12" class="flag layer-level-97 x0"></div>
				<div id="bush-13" class="bush-large layer-level-101 x0"></div>
				<div id="flag-13" class="flag layer-level-97 x0"></div>
				<div id="grass-15" class="grass-large layer-level-99 x0"></div>
			</div>
			<!-- END CHAPTER 1 -->
			<!-- BEGIN CHAPTER 2 -->
			<div id="chapter-2" class="chapter">
				<div id="title-chapter-2" class="title"><h1>CHAPTER 2</h1>
				<h2>GIRLS NEED<br />TEACHERS</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-21" class="box">
					<div class="box-content">
						<p>Thanks to Join My Village, Maya has the chance to go to school!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-22" class="box">
					<div class="box-content">
						<p>Girls haven't been to primary school very much. They are shy around boys and men.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-23" class="box">
					<div class="box-content">
						<p>Maya needs female teachers to tell her she deserves to learn...and who understand what it's like to be a girl.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-24" class="box">
					<div class="box-content">
						<p>And parents, fearing for their daughters' security, hesitate to send them to schools without female teachers.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-21" class="cloud-small layer-level-96"></div>
				<div id="cloud-22" class="cloud-large layer-level-96"></div>
				<div id="cloud-23" class="cloud-large layer-level-96"></div>
				<div id="grass-21" class="grass-large layer-level-99 x0"></div>
				<div id="tree-21" class="tree-small layer-level-98 "></div>
				<div id="sign-21" class="sign-school layer-level-98 x0"></div>
				<div id="bush-21" class="bush-large layer-level-98 x0"></div>
				<div id="grass-22" class="grass-small layer-level-97 x0"></div>
				<div id="school-21" class="school-front layer-level-102 x0"></div>
				<div id="school-22" class="school-back layer-level-98 x0"></div>
				<div id="door-21" class="house-door layer-level-102 x0"></div>
				<div id="school-boy-21" class="school-boy-1 layer-level-98 x0"></div>
				<div id="school-boy-22" class="school-boy-2 layer-level-98 x0"></div>
				<div id="school-boy-23" class="school-boy-1 layer-level-98 x0"></div>
				<div id="school-boy-24" class="school-boy-2 layer-level-98 x0"></div>
				<div id="teacher-21" class="teacher-male layer-level-98 x0"></div>
				<div id="bush-22" class="bush-small layer-level-99 x0"></div>
				<div id="grass-23" class="grass-medium layer-level-98 x0"></div>
				<div id="flag-21" class="flag layer-level-97 "></div>
				<div id="tree-22" class="tree-medium layer-level-97 "></div>
				<div id="bush-23" class="bush-large layer-level-102 x0"></div>
				<div id="grass-24" class="grass-small layer-level-99 x0"></div>
				<div id="tree-23" class="tree-large layer-level-98 "></div>
				<div id="flag-22" class="flag layer-level-98 "></div>
				<div id="bridge-21" class="bridge layer-level-102 x0"></div>
				<div id="bridge-bg-21" class="bridge-bg-front layer-level-100 x0"></div>
				<div id="bridge-bg-22" class="bridge-bg-back layer-level-98 x0"></div>
				<div id="water-front-21" class="water-front layer-level-99 x0"></div>
				<div id="water-back-21" class="water-back layer-level-98 x0"></div>
				<div id="bush-24" class="bush-small layer-level-99 x0"></div>
				<div id="grass-25" class="grass-large layer-level-98 x0"></div>
				<div id="bubble-21" class="bubble-supplies layer-level-98 "></div>
				<div id="teacher-22" class="teacher-female layer-level-100 x0"></div>
				<div id="house-21" class="house layer-level-98 x0"></div>
				<div id="parachute-21" class="parachute layer-level-97 "><img src="img/parachute.png" alt="Parachute 1" /></div>
				<div id="parachute-22" class="parachute layer-level-97 "><img src="img/parachute.png" alt="Parachute 2" /></div>
				<div id="parachute-23" class="parachute layer-level-97 "><img src="img/parachute.png" alt="Parachute 3" /></div>
			</div>
			<!-- END CHAPTER 2 -->
			<!-- BEGIN CHAPTER 3 -->
			<div id="chapter-3" class="chapter">
				<div id="title-chapter-3" class="title"><h1>CHAPTER 3</h1>
				<h2>STAYING IN<br />SCHOOL</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-31" class="box">
					<div class="box-content">
						<p>Join My Village received enough likes to bring teachers and supplies to Maya's primary school!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-32" class="box">
					<div class="box-content">
						<p>Maya has finished primary school. She knows how to read and write and do math. She's made friends and feels good about herself.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-33" class="box">
					<div class="box-content">
						<p>At age 12, Maya is still a girl. But in the eyes of her family and culture, she is a woman, ready for marriage...and children...unless she is able to stay in school.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-34" class="box">
					<div class="box-content">
						<p>Going to secondary school means having choices. It means a chance to become something &mdash; maybe a nurse, teacher, police officer, or pilot.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-35" class="box">
					<div class="box-content">
						<p>But Maya knows that secondary school costs money&mdash;money her family doesn't have.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-31" class="cloud-small layer-level-96"></div>
				<div id="cloud-32" class="cloud-large layer-level-96"></div>
				<div id="cloud-33" class="cloud-small layer-level-96"></div>
				<div id="cloud-34" class="cloud-large layer-level-96"></div>
				<div id="tree-31" class="tree-small layer-level-96"></div>
				<div id="bush-31" class="bush-large layer-level-96 x0"></div>
				<div id="sign-31" class="sign-school layer-level-97 x0"></div>
				<div id="books-31" class="books-1 layer-level-98 x0"></div>
				<div id="teacher-31" class="teacher-female layer-level-98 x0"></div>
				<div id="house-31" class="house layer-level-98 x0"></div>
				<div id="house-32" class="house-front layer-level-102 x0"></div>
				<div id="books-32" class="books-2 layer-level-99 x0"></div>
				<div id="parachute-31" class="layer-level-98"><img src="img/parachute.png" alt="Parachute" /></div>
				<div id="grass-31" class="grass-medium layer-level-98 x0"></div>
				<div id="tree-32" class="tree-small layer-level-97"></div>
				<div id="flag-31" class="flag layer-level-97"></div>
				<div id="bubble-31" class="bubble-marriage layer-level-98"></div>
				<div id="man-31" class="man-1 layer-level-99 x0"></div>
				<div id="mother-31" class="mother layer-level-98 x0"></div>
				<div id="father-31" class="father layer-level-98 x0"></div>
				<div id="bubble-32" class="bubble-baby layer-level-98"></div>
				<div id="bush-32" class="bush-small layer-level-102 x0"></div>
				<div id="grass-32" class="grass-small layer-level-98 x0"></div>
				<div id="plane-31" class="plane layer-level-98"></div>
				<div id="nurse-31" class="nurse layer-level-99 x0"></div>
				<div id="police-31" class="police layer-level-99 x0"></div>
				<div id="tree-33" class="tree-medium layer-level-97"></div>
				<div id="bush-33" class="bush-large layer-level-102 x0"></div>
				<div id="grass-33" class="grass-medium layer-level-99 x0"></div>
				<div id="tree-34" class="tree-money-start layer-level-102 x0">
					<img src="" alt="Money tree" />
				</div>
				<div id="flag-32" class="flag layer-level-98"></div>
				<div id="grass-34" class="grass-small layer-level-99 x0"></div>
				<div id="tree-35" class="tree-small layer-level-98"></div>
			</div>
			<!-- END CHAPTER 3 -->
			<!-- BEGIN CHAPTER 4 -->
			<div id="chapter-4" class="chapter">
				<div id="title-chapter-4" class="title"><h1>CHAPTER 4</h1>
				<h2>BECOMING<br />A MENTOR</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-41" class="box">
					<div class="box-content">
						<p>Enough likes means Maya received a scholarship to secondary school!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-42" class="box">
					<div class="box-content">
						<p>Maya is active in school and excited about sitting for her exams&mdash;the equivalent of graduating from high school&mdash;a rarity for girls in her corner of the world.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-43" class="box">
					<div class="box-content">
						<p>Being away at boarding school has changed Maya. She is confident and independent. It's time to return to her village and consider what she wants to do next.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-44" class="box">
					<div class="box-content">
						<p>First though, she will spend time mentoring the younger girls in her village and talk with their families to help them understand why educating their daughters is important.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-41" class="cloud-small layer-level-96"></div>
				<div id="cloud-42" class="cloud-large layer-level-96"></div>
				<div id="cloud-43" class="cloud-small layer-level-96"></div>
				<div id="cloud-44" class="cloud-large layer-level-96"></div>
				<div id="flag-41" class="flag layer-level-98 x0"></div>
				<div id="bush-41" class="bush-small layer-level-102 x0"></div>
				<div id="grass-42" class="grass-small layer-level-98 x0"></div>
				<div id="sign-41" class="sign-school-secondary layer-level-99 x0"></div>
				<div id="school-41" class="school-front layer-level-102 x0"></div>
				<div id="school-42" class="school-back layer-level-98 x0"></div>
				<div id="door-41" class="house-door layer-level-102 x0"></div>
				<div id="school-girl-41" class="school-girl-1 layer-level-98 x0"></div>
				<div id="school-girl-42" class="school-girl-2 layer-level-98 x0"></div>
				<div id="school-girl-43" class="school-girl-1 layer-level-98 x0"></div>
				<div id="school-girl-44" class="school-girl-2 layer-level-98 x0"></div>
				<div id="teacher-41" class="teacher-female layer-level-99 x0"></div>
				<div id="grass-43" class="grass-small layer-level-97 x0"></div>
				<div id="bush-42" class="bush-small layer-level-98 x0"></div>
				<div id="sign-42" class="sign-village layer-level-99 x0"></div>
				<div id="grass-44" class="grass-small layer-level-97 x0"></div>
				<div id="tree-41" class="tree-small layer-level-96"></div>
				<div id="girl-41" class="girl-2 layer-level-98"></div>
				<div id="girl-42" class="girl-3 layer-level-98"></div>
				<div id="girl-43" class="girl-4 layer-level-98"></div>
				<div id="girl-44" class="girl-1 layer-level-98"></div>
				<div id="flag-42" class="flag layer-level-96"></div>
				<div id="bush-43" class="bush-large layer-level-98 x0"></div>
				<div id="girl-46" class="girl-9 layer-level-99"></div>
				<div id="field-41" class="field layer-level-98 x0"></div>
				<div id="crop-41" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-42" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 2" /></div>
				<div id="crop-43" class="crop layer-level-99 x0"><img src="img/crop.png" alt="Crop 3" /></div>
				<div id="crop-44" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 4" /></div>
				<div id="crop-45" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 5" /></div>
				<div id="girl-45" class="girl-with-goat-2 layer-level-99"></div>
				<div id="grass-45" class="grass-large layer-level-99 x0"></div>
				<div id="house-41" class="house layer-level-100 x0"></div>
			</div>
			<!-- END CHAPTER 4 -->
			<!-- BEGIN CHAPTER 5 -->
			<div id="chapter-5" class="chapter">
				<div id="title-chapter-5" class="title"><h1>CHAPTER 5</h1>
				<h2>CHOOSING<br />MARRIAGE<br />AND FAMILY</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-51" class="box">
					<div class="box-content">
						<p>Through Join My Village, Maya has been able to mentor all of her village's young girls!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-52" class="box">
					<div class="box-content">
						<p>Going to school has helped Maya in many ways. Beyond learning and developing her skills, it has given her the time to grow up before marrying and having children.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-53" class="box">
					<div class="box-content">
						<p>Maya feels fortunate that she can choose whom she will marry, and when she will start a family. Girls who don't stay in school aren't so lucky.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-54" class="box">
					<div class="box-content">
						<p>But she knows that many girls and women still die in childbirth or complications related to pregnancy.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-51" class="cloud-small layer-level-96"></div>
				<div id="cloud-52" class="cloud-large layer-level-96"></div>
				<div id="cloud-53" class="cloud-small layer-level-96"></div>
				<div id="cloud-54" class="cloud-large layer-level-96"></div>
				<div id="cloud-55" class="cloud-small layer-level-96"></div>
				<div id="girl-51" class="girl-4 layer-level-99">
					<div id="stars51" class="stars"></div>
				</div>
				<div id="bush-51" class="bush-large layer-level-99 x0"></div>
				<div id="grass-51" class="grass-small layer-level-97 x0"></div>
				<div id="girl-52" class="girl-with-goat-2 layer-level-97 x0">
					<div id="stars52" class="stars"></div>
				</div>
				<div id="house-51" class="house-small layer-level-97 x0"></div>
				<div id="tree-51" class="tree-small layer-level-96"></div>
				<div id="man-51" class="man-1 layer-level-98 x0"></div>
				<div id="man-52" class="man-2 layer-level-98 x0"></div>
				<div id="man-53" class="man-3 layer-level-99 x0"></div>
				<div id="field-51" class="field layer-level-98 x0"></div>
				<div id="crop-51" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="crop-52" class="crop layer-level-99"><img src="img/crop.png" alt="Crop 2" /></div>
				<div id="crop-53" class="crop layer-level-99 x0"><img src="img/crop.png" alt="Crop 3" /></div>
				<div id="house-52" class="house layer-level-98 x0"></div>
				<div id="house-52-mask" class="house-mask layer-level-102 x0"></div>
				<div id="door-51" class="house-door layer-level-102 x0"></div>
				<div id="flag-51" class="flag layer-level-98 x0"></div>
				<div id="bush-52" class="bush-small layer-level-98 x0"></div>
				<div id="grass-52" class="grass-small layer-level-99 x0"></div>
				<div id="tree-52" class="tree-medium layer-level-102 x0"></div>
				<div id="clinic-51" class="medical-clinic layer-level-99 x0"></div>
				<div id="clinic-sign-51" class="medical-clinic-sign layer-level-98 x0"></div>
				<div id="woman-51" class="woman-pregnant-1 layer-level-99 x0"></div>
				<div id="woman-52" class="woman-pregnant-2 layer-level-99 x0"></div>
				<div id="woman-53" class="woman-pregnant-3 layer-level-99 x0"></div>
				<div id="nurse-51" class="nurse layer-level-99 x0"></div>
				<div id="grass-53" class="grass-medium layer-level-98 x0"></div>
				<div id="rip-51" class="tombstone-l layer-level-99 x0"></div>
				<div id="rip-52" class="tombstone-s layer-level-97"></div>
				<div id="rip-53" class="tombstone-m layer-level-98"></div>
				<div id="flag-52" class="flag layer-level-97"></div>
				<div id="bush-53" class="bush-large layer-level-102 x0"></div>
				<!--div id="grass-4" class="grass-small layer-level-98 x0"></div-->
			</div>
			<!-- END CHAPTER 5 -->
			<!-- BEGIN CHAPTER 6 -->
			<div id="chapter-6" class="chapter">
				<div id="title-chapter-6" class="title"><h1>CHAPTER 6</h1>
				<h2>WOMEN<br />HELPING WOMEN</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-61" class="box">
					<div class="box-content">
						<p>Join My Village's efforts to improve prenatal care have succeeded! Maya has started a healthy family!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-62" class="box">
					<div class="box-content">
						<p>Armed with an education, Maya is able to provide a better life for her family. She has started a small clothing business in the village market.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-63" class="box">
					<div class="box-content">
						<p>Maya would like to expand her business, so she joins her village's women&ndash;owned Village Savings and Loan Association, or VSLA.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-64" class="box">
					<div class="box-content">
						<p>VSLAs allow women to save and lend money collectively, so they become a bank for each other.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-65" class="box">
					<div class="box-content">
						<p>VSLAs act as a bridge out of poverty for women in Maya's village. As women start businesses, they continue to mentor and inspire younger girls.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-61" class="cloud-small layer-level-96"></div>
				<div id="cloud-62" class="cloud-small layer-level-96"></div>
				<div id="cloud-63" class="cloud-small layer-level-96"></div>
				<div id="cloud-64" class="cloud-large layer-level-96"></div>
				<div id="cloud-65" class="cloud-small layer-level-96"></div>
				<div id="grass-61" class="grass-small layer-level-98 x0"></div>
				<div id="tree-61" class="tree-small layer-level-97 "></div>
				<div id="bush-61" class="bush-large layer-level-99 x0"></div>
				<div id="field-61" class="field layer-level-98 x0"></div>
				<div id="crop-61" class="crop layer-level-98 "><img src="img/crop.png" alt="Crop 1" /></div>
				<div id="girl-61" class="girl-with-goat-2 layer-level-98 "></div>
				<div id="crop-62" class="crop layer-level-98 "><img src="img/crop.png" alt="Crop 2" /></div>
				<div id="crop-63" class="crop layer-level-98 x0"><img src="img/crop.png" alt="Crop 3" /></div>
				<div id="girl-62" class="girl-bucket layer-level-98 "></div>
				<div id="crop-64" class="crop layer-level-98 "><img src="img/crop.png" alt="Crop 4" /></div>
				<div id="crop-65" class="crop layer-level-98 "><img src="img/crop.png" alt="Crop 5" /></div>
				<div id="sign-61" class="sign-market layer-level-98 x0"></div>
				<div id="shop-maya" class="shop-maya layer-level-102 x0"></div>
				<div id="shop-maya-sign" class="shop-maya-sign layer-level-101 x0"></div>
				<div id="grass-62" class="grass-small layer-level-98 x0"></div>
				<div id="shop-61" class="shop-1 layer-level-98 "></div>
				<div id="bush-62" class="bush-small layer-level-97 x0"></div>
				<div id="grass-63" class="grass-small layer-level-98 x0"></div>
				<div id="shop-62" class="shop-2 layer-level-98 "></div>
				<div id="tree-62" class="tree-medium layer-level-98 x0"></div>
				<div id="woman-61" class="woman-money-1 layer-level-98 x0"></div>
				<div id="woman-62" class="woman-money-2 layer-level-98 x0"></div>
				<div id="bush-63" class="bush-large layer-level-98 x0"></div>
				<div id="flag-61" class="flag layer-level-97 x0"></div>
				<div id="bridge-61" class="bridge layer-level-102 x0"></div>
				<div id="bridge-bg-61" class="bridge-bg-front layer-level-100 x0"></div>
				<div id="bridge-bg-62" class="bridge-bg-back layer-level-98 x0"></div>
				<div id="water-front-61" class="water-front layer-level-99 x0"></div>
				<div id="water-back-61" class="water-back layer-level-98 x0"></div>
				<div id="grass-64" class="grass-tiny layer-level-98 x0"></div>
				<div id="flag-62" class="flag layer-level-97 x0"></div>
				<div id="bush-64" class="bush-large layer-level-99 x0"></div>
				<div id="grass-65" class="grass-small layer-level-98 x0"></div>
				<div id="shop-63" class="shop-3 layer-level-98 "></div>
			</div>
			<!-- END CHAPTER 6 -->
			<!-- BEGIN CHAPTER 7 -->
			<div id="chapter-7" class="chapter">
				<div id="title-chapter-7" class="title"><h1>ENDPOINT</h1>
				<h2>COMING<br />FULL CIRCLE</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-71" class="box">
					<div class="box-content">
						<p>Thanks to Join My Village, and YOU, Maya gets her VSLA loan! Her family's standard of living improves each year!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-72" class="box">
					<div class="box-content">
						<p>Every day, Join My Village makes a difference in the lives of thousands of girls and women in Malawi and India.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-73" class="box">
					<div class="box-content">
						<p>Through education, Maya and girls like her are able to develop the skills they need to succeed. To be healthy. To prosper.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-74" class="box">
					<div class="box-content">
						<p>Creating new generations of educated girls, who will send their girls to school. And so on...</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-71" class="cloud-small layer-level-96 x0"></div>
				<div id="cloud-72" class="cloud-large layer-level-96"></div>
				<div id="cloud-73" class="cloud-small layer-level-96"></div>
				<div id="cloud-74" class="cloud-small layer-level-96"></div>
				<div id="cloud-75" class="cloud-small layer-level-96"></div>
				<div id="tree-71" class="tree-small layer-level-96 x0"></div>
				<div id="tree-72" class="tree-large layer-level-99 x0"></div>
				<div id="tree-73" class="tree-small layer-level-96 x0"></div>
				<div id="tree-74" class="tree-large layer-level-99 x0"></div>
				<div id="tree-75" class="tree-small layer-level-96 x0"></div>
				<div id="tree-76" class="tree-large layer-level-99 x0"></div>
				<div id="bush-71" class="bush-large layer-level-99 x0"></div>
				<div id="bush-72" class="bush-small layer-level-99 x0"></div>
				<div id="bush-73" class="bush-large layer-level-99 x0"></div>
				<div id="bush-74" class="bush-large layer-level-99 x0"></div>
				<div id="bush-75" class="bush-large layer-level-99 x0"></div>
				<div id="grass-71" class="grass-small layer-level-98 x0"></div>
				<div id="grass-72" class="grass-small layer-level-98 x0"></div>
				<div id="grass-73" class="grass-small layer-level-98 x0"></div>
				<div id="grass-74" class="grass-small layer-level-98 x0"></div>
				<div id="grass-75" class="grass-small layer-level-98 x0"></div>
				<div id="grass-76" class="grass-small layer-level-99 x0"></div>
				<div id="girl-71" class="girl-5 layer-level-98"></div>
				<div id="girl-72" class="girl-6 layer-level-98"></div>
				<div id="girl-73" class="girl-2 layer-level-98"></div>
				<div id="girl-74" class="girl-8 layer-level-98"></div>
				<div id="girl-75" class="girl-9 layer-level-98"></div>
				<div id="woman-71" class="woman-1 layer-level-98 x0"></div>
				<div id="woman-72" class="woman-2 layer-level-99 x0"></div>
				<div id="sign-71" class="layer-level-99">
					<img src="img/sign_secondarySchool.png" alt="Secondary School" />
				</div>
				<div id="house-71" class="house-small layer-level-99"></div>
				<div id="house-72" class="house layer-level-99 x0"></div>
				<div id="house-72-mask" class="house-mask layer-level-102 x0"></div>
				<div id="books-71" class="books-2 layer-level-99"></div>
				
				<div id="husband" class="husband layer-level-99 x0"></div>
				<div id="daughter" class="daughter layer-level-99 x0"></div>
				<div id="maya-end" class="maya-end layer-level-99 x0"></div>
				<div id="modal-end" class="modal-start-end">
					<div class="banner"></div>
					<div class="modal-content">
						<div class="content-left">
							<h1>HELP MORE<br />GIRLS LIKE MAYA</h1>
							<p>Every time you share or like a page on <a href="http://www.joinmyvillage.com" target="_blank">joinmyvillage.com</a>, money is donated to CARE by General Mills and Merck/MSD to support women and girls in Malawi and India.</p>
							<div class="footer">
								<div class="modal-footer-copy">* General Mills and Merck will donate up to $1.5 million by December 31, 2012 to CARE.</div>
							</div>
						</div>
						<div class="content-right">
							<h1>CONTRIBUTE TO<br />JOIN MY VILLAGE</h1>
							<p>Your contribution will be matched by General Mills and Merck/MSD dollar for dollar*...so we can provide twice as much support to women and girls in Malawi and India.</p>
							<a href="https://my.care.org/site/Donation2?df_id=10640&10640.donation=form1&utm_source=MayaStory&utm_medium=MayaStory&utm_campaign=MayaStory" class="button">CONTRIBUTE NOW</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<!-- END CHAPTER 6 -->
		</div>
		<!-- END MAIN AREA -->
		
		<!-- BEGIN FOOTER -->
		<div id="footer">
			
		</div>
		<!-- END FOOTER -->
	</div>
	<!-- END CONTAINER -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/vendor/jquery.float.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js?id=<?php echo $num ?>"></script>
    <script type="text/javascript" src="js/vendor/jquery.simplemodal-1.4.2.js"></script>
	<script>
		window.fbAsyncInit = function() {
          FB.init({
            appId      : '<?php echo $config['fb_app_id'] ?>', // App ID
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
          FB.Event.subscribe('edge.create',
		    function(response) {
		    	//console.log('Liked: ' + response);
		    	Likes.processLike();
		    });
		  FB.Event.subscribe('edge.remove', function(response) {
		    	//console.log('Unliked: ' + response);
		    	Likes.processLike();
			});
		  FB.getLoginStatus(function(response){
	        	Likes.fbApiInit = true;
			});
			/*********************
			 * Initialize Story
			 *********************/
			jQuery(function( $ ) {
				//console.log('initializing story...');
				Story.init();
			});
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
	</script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','<?php echo $config['ga_id'] ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>
