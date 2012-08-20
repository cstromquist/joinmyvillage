<?php
	$chapter = isset($_GET['chapter']) ? $_GET['chapter'] : 1;
?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Join My Village</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	<meta property="og:title" content="Join My Village :: Maya's Story" />
	<meta property="og:site_name" content="join my village, empower women, getting women out of poverty" />
	<meta property="og:description" content="Meet Join My Village, a unique online initiative working through CARE to lift women and girls out of poverty in India and Malawi through education and community initiatives...to empower women and girls to strengthen themselves, their families, their communities-and the world." />
	<meta property="og:url" content="http://jmv.local/?chapter=<?php echo $chapter ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="/img/facebook.jpeg" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/story.css">
	<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="css/ipad.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modals.css">
    <script src="js/vendor/modernizr-2.6.1.min.js"></script>
</head>
<body>
	<!--[if lt IE 9]>
        <p class="chromeframe">You are using an outdated browser for this site. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

	<!-- BEGIN MODALS -->
	<!-- ENTRY MODAL -->
	<div id="modal-entry" class="modal modal-info">
		<div class="entry-header">
			<div class="jmv-logo">JOIN MY VILLAGE</div>
			<div class="social-media">
				<div id="facebook" class="share"><div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div></div>
				<div id="twitter" class="share"><a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out Join My Village!">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
			</div>
		</div>
		<div id="maya-welcome"></div>
		<div id="welcome-content">
		<h1>HELLO!</h1>
		<p>A new school year is underway in the U.S. and Canada. If you're reading this, you&mdash;or your children&mdash;are probably in school this fall.</p>
		<p>But 60 million girls in developing nations worldwide are not in school. Denied education and access to resources, they are doomed to an endless cycle of poverty, with no chance to shape their own future.</p>
		<p>Maya respresents one of these girls. She might live in Malawi, or perhaps India. She wants the chance to go to school.</p>
		<h2>YOU CAN HELP</h2>
		<p>By watching and liking May's story, you'll unlock donations to Join My Village, an initiative of General Mills, Merck and CARE International that supports projects in India and Malawi to educate and empower girls like Maya&mdash;turning the tide not just for them, but for our planet.</p>
		<a href="#" class="button">TO FIND OUT HOW, TAKE A LOOK</a>
		</div>
		<div class="modal-footer"></div>
	</div>
	<!-- ENTRY MODAL -->
	<!-- END MODAL -->
	<div id="modal-end" class="modal modal-info">
		<div class="entry-header">
			<div class="jmv-logo"><p>JOIN MY VILLAGE</p></div>
			<div class="social-media">
				<div id="facebook" class="share"><div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></div>
				<div id="twitter" class="share"><a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out Join My Village!">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
			</div>
		</div>
		<div id="family"><img src="img/family.png" /></div>
		<div id="thank-you">
			<h1>THANK YOU!</h1>
			<p>Thanks to Join My Village, and YOU, Maya gets her VSLA loan! Her familyís standard of living improves each year! Every day, Join My Village makes a difference in the lives of thousands of girls and women in Malawi and India. Through education, Maya and girls like her are able to develop the skills they need to succeed. To prosper. To be healthy.</p>
			<p>Creating new generations of educated girls, who will send their girls to school too.</p>
			<p>And so on...</p>
		</div>
		<div id="contribute">
			<h3>HELP MORE GIRLS LIKE MAYA</h3>
			<p>Every time you share or like a page on joinmyvillage.com, money is donated to CARE by General Mills and Merck to support women and girls in Malawi and India.</p>
			<h2>CONTRIBUTE TO JOIN MY VILLAGE</h2>
			<p>Your contribution will be matched by General Mills and Merck dollar for dollar*...so we can provide twice as much support to women and girls in Malawi and India.</p>
			<a href="#" class="button">CONTRIBUTE NOW</a>
		</div>
		<div class="modal-footer">
			<div class="modal-footer-copy">* General Mills will donate up to $1.5 million by December 31, 2012 to CARE.</div>
		</div>
	</div>
	<!-- END MODALS -->
	
	<!-- BEGIN CONTAINER -->
	<div id="container">
		<div id="header">
			<div class="jmv-logo"><p>JOIN MY VILLAGE</p></div>
			<div class="social-media">
				<div id="facebook" class="share"><div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></div>
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
					<img src="img/loading.gif" />
					<p></p>
				</div>
			</div>
			<div id="likes-modal" class="modal-end layer-level-100">
				<div class="modal-banner"></div>
				<div class="modal-content">
					<p id="intro"></p>
					<div class="like-message"></div>
					<div class="facebook-like"><div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></div>
					<div class="modal-divider"></div>
					<div id="info">
						<p class="like-count-total">When <span class="like-count"></span> likes are reached, <span class="next-chapter-message"></span></p>
						<div id="percentage-bar" class="percentage-bar">
							<div id="percentage" class="percentage"></div>
						</div>
						<div class="likes-min">0 LIKES</div>
						<div class="likes-remaining"><span class="like-count"></span> LIKES TO GO!</div>
					</div>
					<div id="thanks"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="maya" class="x0">
				<div id="stars" class="stars"></div>
				<div id="keyboard" class="keyboard"></div>
			</div>
			<!-- BEGIN CHAPTER 1 -->
			<div id="chapter-1" class="chapter">
				<div id="title-chapter-1" class="title"><h1>CHAPTER 1</h1>
				<h2>A CHANCE<br />AT SCHOOL</h2></div>
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Maya is a girl who lives with her family in an impoverished village.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>The family makes a subsistence living with a few animals and a garden plot.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>Already by age 8, Maya is helping her family by tending to the animals and working in the fields.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>It is hard work. It is what girls growing up in her village are expected to do. But Maya knows there is another path.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-5" class="box">
					<div class="box-content">
						<p>Maya's brothers go to primary school, but Maya doesn't have that chance. Her culture doesn't support girls going to school.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="cloud-1" class="cloud-large layer-level-96"></div>
				<div id="cloud-2" class="cloud-large layer-level-96"></div>
				<div id="cloud-3" class="cloud-large layer-level-96"></div>
				<div id="cloud-4" class="cloud-small layer-level-96"></div>
				<div id="cloud-5" class="cloud-large layer-level-96"></div>
				<div id="tree-1" class="tree-medium layer-level-99 x0"></div>
				<div id="grass-1" class="grass-small layer-level-98 x0"></div>
				<div id="tree-2" class="tree-large layer-level-99 x0"></div>
				<div id="mother-1" class="mother layer-level-99 x0"></div>
				<div id="father-1" class="father layer-level-99 x0"></div>
				<div id="bush-1" class="bush-large layer-level-98 x0"></div>
				<div id="house-1" class="house layer-level-97 x0"></div>
				<div id="goat-1" class="goat layer-level-97 x0"></div>
				<div id="grass-2" class="grass-large layer-level-96 x0"></div>
				<div id="tree-3" class="tree-small layer-level-97"></div>
				<div id="field-1" class="field layer-level-98 x0"></div>
				<div id="crop-1" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-2" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-3" class="crop layer-level-99 x0"><img src="img/crop.png" /></div>
				<div id="crop-4" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-5" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="flag-1" class="flag layer-level-97 x0">
					<div id="learn-more" class="learn-more"></div>
				</div>
				<div id="grass-3" class="grass-small layer-level-100 x0"></div>
				<div id="girl-1" class="girl-bucket layer-level-100"></div>
				<div id="girl-2" class="girl-with-goat-1 layer-level-100"></div>
				<div id="tree-4" class="tree-small layer-level-99"></div>
				<div id="bush-2" class="bush-large layer-level-101 x0"></div>
				<div id="grass-4" class="grass-large layer-level-100 x0"></div>
				<div id="boy-1" class="boy-1 layer-level-100"></div>
				<div id="boy-2" class="boy-2 layer-level-100"></div>
				<div id="boy-3" class="boy-3 layer-level-100"></div>
				<div id="flag-2" class="flag layer-level-97 x0"></div>
				<div id="bush-3" class="bush-large layer-level-101 x0"></div>
				<div id="flag-3" class="flag layer-level-97 x0"></div>
				<div id="grass-5" class="grass-large layer-level-99 x0"></div>
			</div>
			<!-- END CHAPTER 1 -->
			<!-- BEGIN CHAPTER 2 -->
			<div id="chapter-2" class="chapter">
				<div id="title-chapter-2" class="title"><h1>CHAPTER 2</h1>
				<h2>GIRLS NEED<br />TEACHERS</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Thanks to Join My Village, Maya has the chance to go to school!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>Girls haven't been to primary school very much. They are shy around boys and men.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>Maya needs female teachers to tell her she deserves to learn...and who understand what it's like to be a girl.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>And parents, fearing for their daughters' security, hesitate to send them to schools without female teachers.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-1" class="cloud-small layer-level-96"></div>
				<div id="cloud-2" class="cloud-large layer-level-96"></div>
				<div id="cloud-3" class="cloud-large layer-level-96"></div>
				<div id="grass-1" class="grass-large layer-level-99 x0"></div>
				<div id="tree-1" class="tree-small layer-level-98 "></div>
				<div id="sign-1" class="sign-school layer-level-98 x0"></div>
				<div id="bush-1" class="bush-large layer-level-98 x0"></div>
				<div id="grass-2" class="grass-small layer-level-97 x0"></div>
				<div id="school-1" class="school-front layer-level-102 x0"></div>
				<div id="school-2" class="school-back layer-level-98 x0"></div>
				<div id="door-1" class="house-door layer-level-102 x0"></div>
				<div id="school-boy-1" class="school-boy-1 layer-level-98 x0"></div>
				<div id="school-boy-2" class="school-boy-2 layer-level-98 x0"></div>
				<div id="school-boy-3" class="school-boy-1 layer-level-98 x0"></div>
				<div id="school-boy-4" class="school-boy-2 layer-level-98 x0"></div>
				<div id="teacher-1" class="teacher-male layer-level-98 x0"></div>
				<div id="bush-2" class="bush-small layer-level-99 x0"></div>
				<div id="grass-3" class="grass-medium layer-level-98 x0"></div>
				<div id="flag-1" class="flag layer-level-97 "></div>
				<div id="tree-2" class="tree-medium layer-level-97 "></div>
				<div id="bush-3" class="bush-large layer-level-102 x0"></div>
				<div id="grass-4" class="grass-small layer-level-99 x0"></div>
				<div id="tree-3" class="tree-large layer-level-98 "></div>
				<div id="flag-2" class="flag layer-level-98 "></div>
				<div id="bridge-1" class="bridge layer-level-102 x0"></div>
				<div id="bridge-bg-1" class="bridge-bg-front layer-level-100 x0"></div>
				<div id="bridge-bg-2" class="bridge-bg-back layer-level-98 x0"></div>
				<div id="water-front-1" class="water-front layer-level-99 x0"></div>
				<div id="water-back-1" class="water-back layer-level-98 x0"></div>
				<div id="bush-4" class="bush-small layer-level-99 x0"></div>
				<div id="grass-5" class="grass-large layer-level-98 x0"></div>
				<div id="bubble-1" class="bubble-supplies layer-level-98 "></div>
				<div id="teacher-2" class="teacher-female layer-level-100 x0"></div>
				<div id="house-1" class="house layer-level-98 x0"></div>
				<div id="parachute-1" class="parachute layer-level-97 "><img src="img/parachute.png" /></div>
				<div id="parachute-2" class="parachute layer-level-97 "><img src="img/parachute.png" /></div>
				<div id="parachute-3" class="parachute layer-level-97 "><img src="img/parachute.png" /></div>
			</div>
			<!-- END CHAPTER 2 -->
			<!-- BEGIN CHAPTER 3 -->
			<div id="chapter-3" class="chapter">
				<div id="title-chapter-3" class="title"><h1>CHAPTER 3</h1>
				<h2>STAYING IN<br />SCHOOL</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Join My Village received enough likes to bring teachers and supplies to Maya's primary school!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>Maya has finished primary school. She knows how to read and write and do math. She's made friends and feels good about herself.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>At age 12, Maya is still a girl. But in the eyes of her family and culture, she is a woman, ready for marriage...and children...unless she is able to stay in school.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>Going to secondary school means having choices. It means a chance to become a nurse, teacher, police officer, or pilot.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-5" class="box">
					<div class="box-content">
						<p>Buy Maya knows that secondary school costs money&mdash;money her family doesn't have.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-1" class="cloud-small layer-level-96"></div>
				<div id="cloud-2" class="cloud-large layer-level-96"></div>
				<div id="cloud-3" class="cloud-small layer-level-96"></div>
				<div id="cloud-4" class="cloud-large layer-level-96"></div>
				<div id="tree-1" class="tree-small layer-level-96"></div>
				<div id="bush-1" class="bush-large layer-level-96 x0"></div>
				<div id="sign-1" class="sign-school layer-level-97 x0"></div>
				<div id="books-1" class="books-1 layer-level-98 x0"></div>
				<div id="teacher-1" class="teacher-female layer-level-98 x0"></div>
				<div id="house-1" class="house layer-level-98 x0"></div>
				<div id="house-2" class="house-front layer-level-102 x0"></div>
				<div id="books-2" class="books-2 layer-level-99 x0"></div>
				<div id="parachute-1" class="layer-level-98"><img src="img/parachute.png" /></div>
				<div id="grass-1" class="grass-medium layer-level-98 x0"></div>
				<div id="tree-2" class="tree-small layer-level-97"></div>
				<div id="flag-1" class="flag layer-level-97"></div>
				<div id="bubble-1" class="bubble-marriage layer-level-98"></div>
				<div id="man-1" class="man-1 layer-level-99 x0"></div>
				<div id="mother-1" class="mother layer-level-98 x0"></div>
				<div id="father-1" class="father layer-level-98 x0"></div>
				<div id="bubble-2" class="bubble-baby layer-level-98"></div>
				<div id="bush-2" class="bush-small layer-level-102 x0"></div>
				<div id="grass-2" class="grass-small layer-level-98 x0"></div>
				<div id="plane-1" class="plane layer-level-98"></div>
				<div id="nurse-1" class="nurse layer-level-99 x0"></div>
				<div id="police-1" class="police layer-level-99 x0"></div>
				<div id="tree-3" class="tree-medium layer-level-97"></div>
				<div id="bush-3" class="bush-large layer-level-102 x0"></div>
				<div id="grass-3" class="grass-medium layer-level-99 x0"></div>
				<div id="tree-4" class="tree-money layer-level-102 x0"></div>
				<div id="flag-2" class="flag layer-level-98"></div>
				<div id="grass-4" class="grass-small layer-level-99 x0"></div>
				<div id="tree-5" class="tree-small layer-level-98"></div>
			</div>
			<!-- END CHAPTER 3 -->
			<!-- BEGIN CHAPTER 4 -->
			<div id="chapter-4" class="chapter">
				<div id="title-chapter-4" class="title"><h1>CHAPTER 4</h1>
				<h2>BECOMING<br />A MENTOR</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Yay! Enough likes means Maya got a scholarship to Secondary School!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>Maya is active in school and excited about sitting for her exams&mdash;the equivalent of graduating from high school&mdash;a rarity for girls in her corner of the world.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>Being away at boarding school has changed Maya. She is confident and independent. It's time to return to her village and consider what she wants to do next.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>First though, she will spend time mentoring the younger girls in her village and talk with their families to help them understand why educating their daughters is important.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-1" class="cloud-small layer-level-96"></div>
				<div id="cloud-2" class="cloud-large layer-level-96"></div>
				<div id="cloud-3" class="cloud-small layer-level-96"></div>
				<div id="cloud-4" class="cloud-large layer-level-96"></div>
				<div id="flag-1" class="flag layer-level-98 x0"></div>
				<div id="bush-1" class="bush-small layer-level-102 x0"></div>
				<div id="grass-2" class="grass-small layer-level-98 x0"></div>
				<div id="sign-1" class="sign-school-secondary layer-level-99 x0"></div>
				<div id="school-1" class="school-front layer-level-102 x0"></div>
				<div id="school-2" class="school-back layer-level-98 x0"></div>
				<div id="door-1" class="house-door layer-level-102 x0"></div>
				<div id="school-girl-1" class="school-girl-1 layer-level-98 x0"></div>
				<div id="school-girl-2" class="school-girl-2 layer-level-98 x0"></div>
				<div id="school-girl-3" class="school-girl-1 layer-level-98 x0"></div>
				<div id="school-girl-4" class="school-girl-2 layer-level-98 x0"></div>
				<div id="teacher-1" class="teacher-female layer-level-99 x0"></div>
				<div id="grass-3" class="grass-small layer-level-97 x0"></div>
				<div id="bush-2" class="bush-small layer-level-98 x0"></div>
				<div id="sign-2" class="sign-village layer-level-99 x0"></div>
				<div id="grass-4" class="grass-small layer-level-97 x0"></div>
				<div id="tree-1" class="tree-small layer-level-96"></div>
				<div id="girl-1" class="girl-2 layer-level-98"></div>
				<div id="girl-2" class="girl-3 layer-level-98"></div>
				<div id="girl-3" class="girl-4 layer-level-98"></div>
				<div id="girl-4" class="girl-1 layer-level-98"></div>
				<div id="flag-2" class="flag layer-level-96"></div>
				<div id="bush-3" class="bush-large layer-level-98 x0"></div>
				<div id="girl-6" class="girl-9 layer-level-99"></div>
				<div id="field-1" class="field layer-level-98 x0"></div>
				<div id="crop-1" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-2" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-3" class="crop layer-level-99 x0"><img src="img/crop.png" /></div>
				<div id="crop-4" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-5" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="girl-5" class="girl-with-goat-2 layer-level-99"></div>
				<div id="grass-5" class="grass-large layer-level-99 x0"></div>
				<div id="house-1" class="house layer-level-100 x0"></div>
			</div>
			<!-- END CHAPTER 4 -->
			<!-- BEGIN CHAPTER 5 -->
			<div id="chapter-5" class="chapter">
				<div id="title-chapter-5" class="title"><h1>CHAPTER 5</h1>
				<h2>CHOOSING<br />MARRIAGE<br />AND FAMILY</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Through Join My Village, Maya has been able to mentor all of her village's young girls!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>Going to school has helped Maya in many ways. Beyond learning and developing her skills, it has given her the time to grow up before marrying and having children.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>Maya feels fortunate that she can choose whom she will marry, and when she will start a family. Girls who don't stay in school aren't so lucky.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>But she knows that many girls and women still die in childbirth or complications related to pregnancy.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-1" class="cloud-small layer-level-96"></div>
				<div id="cloud-2" class="cloud-large layer-level-96"></div>
				<div id="cloud-3" class="cloud-small layer-level-96"></div>
				<div id="cloud-4" class="cloud-large layer-level-96"></div>
				<div id="cloud-5" class="cloud-small layer-level-96"></div>
				<div id="girl-1" class="girl-4 layer-level-99">
					<div id="stars" class="stars"></div>
				</div>
				<div id="bush-1" class="bush-large layer-level-99 x0"></div>
				<div id="grass-1" class="grass-small layer-level-97 x0"></div>
				<div id="girl-2" class="girl-with-goat-2 layer-level-97 x0">
					<div id="stars" class="stars"></div>
				</div>
				<div id="house-1" class="house-small layer-level-97 x0"></div>
				<div id="tree-1" class="tree-small layer-level-96"></div>
				<div id="man-1" class="man-1 layer-level-98 x0"></div>
				<div id="man-2" class="man-2 layer-level-98 x0"></div>
				<div id="man-3" class="man-3 layer-level-99 x0"></div>
				<div id="field-1" class="field layer-level-98 x0"></div>
				<div id="crop-1" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-2" class="crop layer-level-99"><img src="img/crop.png" /></div>
				<div id="crop-3" class="crop layer-level-99 x0"><img src="img/crop.png" /></div>
				<div id="house-2" class="house layer-level-98 x0"></div>
				<div id="door-1" class="house-door layer-level-102 x0"></div>
				<div id="flag-1" class="flag layer-level-98 x0"></div>
				<div id="bush-2" class="bush-small layer-level-98 x0"></div>
				<div id="grass-2" class="grass-small layer-level-99 x0"></div>
				<div id="tree-2" class="tree-medium layer-level-102 x0"></div>
				<div id="clinic-1" class="medical-clinic layer-level-99 x0"></div>
				<div id="woman-1" class="woman-pregnant-1 layer-level-99 x0"></div>
				<div id="woman-2" class="woman-pregnant-2 layer-level-99 x0"></div>
				<div id="woman-3" class="woman-pregnant-3 layer-level-99 x0"></div>
				<div id="nurse-1" class="nurse layer-level-99 x0"></div>
				<div id="grass-3" class="grass-medium layer-level-98 x0"></div>
				<div id="rip-1" class="tombstone-l layer-level-99 x0"></div>
				<div id="rip-2" class="tombstone-s layer-level-97"></div>
				<div id="rip-3" class="tombstone-m layer-level-98"></div>
				<div id="flag-2" class="flag layer-level-97"></div>
				<div id="bush-3" class="bush-large layer-level-102 x0"></div>
				<!--div id="grass-4" class="grass-small layer-level-98 x0"></div-->
			</div>
			<!-- END CHAPTER 5 -->
			<!-- BEGIN CHAPTER 6 -->
			<div id="chapter-6" class="chapter">
				<div id="title-chapter-6" class="title"><h1>CHAPTER 6</h1>
				<h2>WOMEN<br />HELPING WOMEN</h2></div>
				<!-- BEGIN BOXES -->
				<div id="box-1" class="box">
					<div class="box-content">
						<p>Join My Village's efforts to improve prenatal care have succeeded! Maya has started a healthy family!</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-2" class="box">
					<div class="box-content">
						<p>Armed with an education, Maya is able to provide a better life for her family. She has started a small clothing business in the village market.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-3" class="box">
					<div class="box-content">
						<p>Maya would like to expand her business, so she joins her village's women&ndash;owned Village Savings and Loan Association, or VSLA.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-4" class="box">
					<div class="box-content">
						<p>VSLAs allow women to save and lend money collectively, so they become a bank for each other.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<div id="box-5" class="box">
					<div class="box-content">
						<p>VSLAs act as a bridge out of poverty for women in Maya's village. As women start businesses, they continue to mentor and inspire younger girls.</p>
					</div>
					<div class="box-footer"></div>
				</div>
				<!-- END BOXES -->
				<div id="cloud-1" class="cloud-small layer-level-96"></div>
				<div id="cloud-2" class="cloud-small layer-level-96"></div>
				<div id="cloud-3" class="cloud-small layer-level-96"></div>
				<div id="cloud-4" class="cloud-large layer-level-96"></div>
				<div id="cloud-5" class="cloud-small layer-level-96"></div>
				<div id="grass-1" class="grass-small layer-level-98 x0"></div>
				<div id="tree-1" class="tree-small layer-level-97 "></div>
				<div id="bush-1" class="bush-large layer-level-99 x0"></div>
				<div id="field-1" class="field layer-level-98 x0"></div>
				<div id="crop-1" class="crop layer-level-98 "><img src="img/crop.png" /></div>
				<div id="girl-1" class="girl-with-goat-2 layer-level-98 "></div>
				<div id="crop-2" class="crop layer-level-98 "><img src="img/crop.png" /></div>
				<div id="crop-3" class="crop layer-level-98 x0"><img src="img/crop.png" /></div>
				<div id="girl-2" class="girl-bucket layer-level-98 "></div>
				<div id="crop-4" class="crop layer-level-98 "><img src="img/crop.png" /></div>
				<div id="crop-5" class="crop layer-level-98 "><img src="img/crop.png" /></div>
				<div id="sign-1" class="sign-market layer-level-98 x0"></div>
				<div id="shop-maya" class="shop-maya layer-level-102 x0"></div>
				<div id="shop-maya-sign" class="shop-maya-sign layer-level-101 x0"></div>
				<div id="grass-2" class="grass-small layer-level-98 x0"></div>
				<div id="shop-1" class="shop-1 layer-level-98 "></div>
				<div id="bush-2" class="bush-small layer-level-97 x0"></div>
				<div id="grass-3" class="grass-small layer-level-98 x0"></div>
				<div id="shop-2" class="shop-2 layer-level-98 "></div>
				<div id="tree-2" class="tree-medium layer-level-98 x0"></div>
				<div id="woman-1" class="woman-money-1 layer-level-98 x0"></div>
				<div id="woman-2" class="woman-money-2 layer-level-98 x0"></div>
				<div id="bush-3" class="bush-large layer-level-98 x0"></div>
				<div id="flag-1" class="flag layer-level-97 x0"></div>
				<div id="bridge-1" class="bridge layer-level-102 x0"></div>
				<div id="bridge-bg-1" class="bridge-bg-front layer-level-100 x0"></div>
				<div id="bridge-bg-2" class="bridge-bg-back layer-level-98 x0"></div>
				<div id="water-front-1" class="water-front layer-level-99 x0"></div>
				<div id="water-back-1" class="water-back layer-level-98 x0"></div>
				<div id="grass-4" class="grass-tiny layer-level-98 x0"></div>
				<div id="flag-2" class="flag layer-level-97 x0"></div>
				<div id="bush-4" class="bush-large layer-level-99 x0"></div>
				<div id="grass-5" class="grass-small layer-level-98 x0"></div>
				<div id="shop-3" class="shop-3 layer-level-98 "></div>
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
    <script type="text/javascript" src="js/vendor/jquery.fbjlike.1.4.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.float.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.simplemodal-1.4.2.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>
