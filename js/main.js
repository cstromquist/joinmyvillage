/**
* @package main.js
*/

/**
* Join My Village Story - Provides functionality to transition user through the Join My Village story.
*
* 
* @author Chris Stromquist <chris@esolutionswebservices.com> @cstromquist
*
* $Id: main.js 43 2009-05-15 19:28:53Z chris $
* @version 1.0
*
* @copyright (C) 2012 by Chris Stromquist - eSolutions Web Services
*/

'use strict';

var Config = {
	uuid: function(a,b){for(b=a='';a++<36;b+=a*51&52?(a^15?8^Math.random()*(a^20?16:4):4).toString(16):'-');return b},
	root_url: document.domain,
	subdirectory: '/storyofmaya/',
	sub_url: '?chapter=',
	getUrl: function() {
		return this.root_url + this.subdirectory;
	}
};

var Story = {
	chapters: 7,
	chapter_open_status: {1:false, 2:false, 3:false, 4:false, 5:false, 6:false, 7:false},
	chapter_close_status: {1:false, 2:false, 3:false, 4:false, 5:false, 6:false, 7:false},
	current_chapter: null,
	next_chapter: null,
	init: function() {
		this.current_chapter = this.getChapter();
		this.next_chapter = this.current_chapter + 1;
		this.openStory();
		if(this.current_chapter == 7)
			$('.fb-like').fbjlike({buttonWidth: 100});
	},
	openStory: function(showModal) {
		if(!$.cookie('current_chapter') || showModal == true) {
			Scroll.preventScrolling();
			var modal = $('#modal-entry');
			modal.fadeIn('slow');
			modal.modal({
				position: ["20%","30%"],
				onClose: function (dialog) {
				dialog.data.animate({left:'-=2000px'}, 2000, function () {
					dialog.overlay.slideUp(1200, function () {
						Scroll.enableScrolling();
						$.modal.close(); // must call this!
					});
				});
				Story.begin();
			}});
		} else {
			Story.begin();
		}
	},
	begin: function() {
		Story.bindFixedElements();
		this.setWidth();
		$.cookie('current_chapter', this.current_chapter, { expires: 7 });
		this.openChapter();
		//window.location.hash('#chapter-' + this.current_chapter);
	},
	end: function() {
		var modal = $('#modal-end');
		modal.fadeIn('slow');
		modal.modal();
	},
	bindFixedElements: function() {
		var lastScroll = 0;
		$(window).bind('scroll', function() {
			$('#header .social-media').css('top', 35-$(window).scrollTop() + 'px');
			$('#header .jmv-logo').css('top', 20-$(window).scrollTop() + 'px');
		});
	},
	getChapter: function() {
		var param = decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
		var chapter = null;
		if(param != 'null' && !isNaN(Number(param))) {
			chapter = param;
		} else if(chapter = $.cookie('current_chapter')) {
			if(isNaN(chapter))
				chapter = 1;
			else
				chapter = Number(chapter);
		} else {
			chapter = 1;
		}
		if(chapter > Story.chapters)
			chapter = 1;
		return chapter;
	},
	getChapterWidth: function ( chapter ) {
		var width = Number($('#chapter-' + chapter).width());
		return width;
	},
	chapterStartPoint: function( chapter ) {
		var total = 0;
		for(var i=1; i<chapter; i++) {
			total += this.getChapterWidth(i);
		}
		return total;
	},
	openNextChapter: function () {
		this.current_chapter = this.current_chapter + 1;
		$.cookie('current_chapter', this.current_chapter);
		this.openChapter();
	},
	redirectToNextChapter: function() {
		var next_chapter = this.current_chapter + 1;
		window.location.href = 'http://' + Config.root_url + Config.subdirectory + Config.sub_url + next_chapter;
	},
	openChapter: function() {
		// if the chapter has already been opened, we can stop here.
		if(this.chapter_open_status[this.current_chapter]) {
			return;
		} else {
			// if not, just set the open status to true.
			this.chapter_open_status[this.current_chapter] = true
		}
		if(this.current_chapter != this.chapters)
			LikesModal.init(this.current_chapter);
		this.setWidth(this.current_chapter);
		// open all chapters before this one
		for(var i=1; i<=Story.current_chapter; i++) {
			$('#chapter-' + i).delay(300).fadeIn(1000);
		}
		//scroll to chapter, then open it
		this.scrollToChapter();
	},
	closeChapter: function(chapter) {
		this.chapter_close_status[chapter] = true;
	},
	setWidth: function( chapter ) {
		var width = 0;
		for(var i=1; i<=chapter; i++) {
			width += this.getChapterWidth(i);
		}
		this.width = width;
		$('#footer').css('width', this.width + 'px');
		$('#container').css('width', this.width + 'px');
		$('#story').css('width', this.width + 'px');
	},
	scrollToChapter: function() {
		$('html, body').stop().animate({
            scrollLeft: Story.chapterStartPoint(Story.current_chapter)
        }, 3000, function() {
        	// open chapter after scrolling user!
        	Story[Story.current_chapter].open();
        	Boxes.init();
			Flags.setup();
        });
	},
	preload: function() {	
		$('#loading-container').show();
		$('#container').hide();
		$('#loading-container').delay(1000).fadeOut(800);
		$('#container').delay(1000).fadeIn(1600);
	},
	animateObject: function( object, delay, speed ) {
		$(object).
  		delay(delay).
  		animate({opacity:1,bottom:'0px'},speed);
	},
	/**********************************
	 * BEGIN CHAPTER OBJECTS
	 * Controls each chapter's behaviors
	 **********************************/
	// Chapter 1
	1: {
		open: function() {
			this.animate();
			this.bindScrollPoints();
			Maya.enter('child');
			Boxes.show(1,1); //slide in the first box
			$('#flag-1').click(function(){
				$('#learn-more').hide();
			});
		},
		animate: function() {
			//Story.animateObject('#tree-1', 2400, 800);
			//Story.animateObject('#hill-1', 2800, 800);
			
			// cloud animations
			$("#cloud-1").
		    animate({left:'+=-600px', opacity:0.0}, 27000).
		    animate({left:'+=600px'},0).
		    animate({opacity:0.8},3000);
		    
		    this.blinkKeyboard();
		    this.blinkLearnMore();
		},
		blinkKeyboard: function() {
			if($('#keyboard').css('display') != 'none') {
				$('#keyboard').
					animate({opacity: 1}, 1500).
					animate({opacity: 0}, 1500, Story[1].blinkKeyboard);
			}
		},
		blinkLearnMore: function() {
			$('#learn-more').
				animate({opacity: 1}, 1500).
				animate({opacity: 0}, 1500, Story[1].blinkLearnMore);
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
				if (Maya.xPosition() > 400) {
					$('#keyboard').hide();
				}
		    	if (Maya.xPosition() > 2000 && Maya.xPosition() < 3000) {
		    		Animations.animateCrops(1);
		    	}
		    	if (Maya.xPosition() > 2400 && Maya.xPosition() < 3000) {
		    		Animations.animateCrops(1);
		    	}
		    	if (Maya.xPosition() > 2800 && Maya.xPosition() < 3300) {
		    		$('#girl-1').animate({bottom: '110px'}, 3500);
		    	}
		    	if (Maya.xPosition() > 3800 && Maya.xPosition() < 4000) {
		    		$('#boy-1').animate({bottom: '110px'}, 4500);
					$('#boy-2').animate({bottom: '120px'}, 4000);
		    	}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 2
	2: {
		open: function() {
			Maya.enter('child');
			this.bindScrollPoints();
			Animations.water_position = $('#chapter-2 #water-front-1').position().left;
			Animations.chapter = 2; 
			Animations.animateWater();
			this.animateParachutes();
		},
		animateParachutes: function() {
			if(Story.current_chapter == 2) {
				// float parachutes
				$('#chapter-2 #parachute-1').
					animate({top:'200px'}, 2500, 'linear').
					animate({top:'120px'}, 2500, 'linear', Story[2].animateParachutes);
				$('#chapter-2 #parachute-2').
					animate({left:'-=50px'}, 3500, 'linear').
					animate({left:'+=50px'}, 3500, 'linear');
				$('#chapter-2 #parachute-3').
					animate({top:'+=50px'}, 4500, 'linear').
					animate({top:'-=50px'}, 4500, 'linear');
			}
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
				var bubble = $('#chapter-2 #bubble-1');
				if (Maya.xPosition() > Story.chapterStartPoint(2) + 4400 && bubble.css('opacity') == 0) {
		    		bubble.animate({opacity:1}, 1000);
		    	}
		  });
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 3
	3: {
		plane_flown: false,
		money_tree_shown: false,
		open: function() {
			Maya.enter('child');
			this.animate();
			this.bindScrollPoints();
		},
		animate: function() {
			this.animateParachutes();
		},
		animateParachutes: function() {
			if(Story.current_chapter == 3) {
				// float parachutes
				$('#chapter-3 #parachute-1').
					animate({top:'+=200px'}, 5500, 'linear').
					animate({top:'-=200px'}, 5500, 'linear', Story[3].animateParachutes);
			}
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
		    	if (Maya.xPosition() > Story.chapterStartPoint(3) + 1450 && Maya.current_life_stage == 'child') {
		    		Maya.lifeTransition('teen'); // Maya becomes a teenager
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(3) + 2000) {
		    		$('#chapter-3 #bubble-1').
		    			animate({opacity:1}, 1000).
		    			delay(3000).
		    			fadeOut(4000)
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(3) + 2100) {
		    		$('#chapter-3 #bubble-2').
		    			animate({opacity:1}, 1000).
		    			delay(3000).
		    			fadeOut(4000)
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(3) + 2300 && Story[3].plane_flown != true) {
		    		$("#plane-1").animate({left: '+=600px'}, 2000)
		    		Story[3].plane_flown = true;
		    		Animations.animatePlane();
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(3) + 2900 && Story[3].money_tree_shown != true) {
		    		//FIXME: Add the money tree animation
		    	}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 4
	4: {
		open: function() {
			Maya.enter('teen');
			this.animate();
			this.bindScrollPoints();
		},
		animate: function() {
			
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
		    	if (Maya.xPosition() > Story.chapterStartPoint(5)-1500 && Maya.xPosition() < Story.chapterStartPoint(5)-1200) {
		    		Animations.animateCrops(4);
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(4) + 2400 && Maya.current_life_stage == 'teen') {
		    		Maya.lifeTransition('woman'); // Maya becomes a woman
		    	}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 5
	5: {
		man_chosen: false,
		open: function() {
			Maya.enter('woman');
			this.animate();
			this.bindScrollPoints();
		},
		animate: function() {
			var stars = $('#girl-1 #stars');
			stars.css({bottom: '50px'});
			stars.animate({opacity:1}, 2000).animate({opacity:0}, 2000);
			
			var stars = $('#girl-2 #stars');
			stars.css({bottom: '50px'});
			stars.animate({opacity:1}, 2000).animate({opacity:0}, 2000);
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
		    	if (Maya.xPosition() > Story.chapterStartPoint(5)+1200 && Maya.xPosition() < Story.chapterStartPoint(5)+2000) {
		    		Animations.animateCrops(5);
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(5) + 1900 && Maya.current_life_stage == 'woman') {
		    		Maya.lifeTransition('pregnant'); // Maya becomes pregnant
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(5) + 1300 && Story[5].man_chosen != true) {
		    		var chosen_man = $('#chapter-5 #man-3');
		    		chosen_man.removeClass('man-3').addClass('husband-animation').animate({left: '+=650px'}, 4000)
		    		Story[5].man_chosen = true;
		    		
		    	}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 6
	6: {
		open: function() {
			Maya.enter('mother', true);
			this.bindScrollPoints();
			this.animate();
		},
		animate: function() {
			Animations.water_position = $('#chapter-6 #water-front-1').position().left;
			Animations.chapter = 6; 
			Animations.animateWater();
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
		    	if (Maya.xPosition() > Story.chapterStartPoint(6)+400 && Maya.xPosition() < Story.chapterStartPoint(6)+1200) {
		    		Animations.animateCrops(6);
		    	}
		    	if (Maya.xPosition() > Story.chapterStartPoint(6) + 200 && Maya.current_life_stage == 'pregnant') {
		    		Maya.lifeTransition('mother'); // Maya enters motherhood
		    	}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	// Chapter 7
	7: {
		end: false,
		open: function() {
			Maya.enter('woman', false);
			this.bindScrollPoints();
		},
		animate: function() {
			
		},
		bindScrollPoints: function() {
			$(window).bind('scroll', function() {
				if(Maya.xPosition() >= Story.chapterStartPoint(7) + 2980 && Story[7].end == false) {
					Maya.pause_animation = true;
					$('#maya').css('background-position', 0);
					$('#maya').removeClass('maya-woman').addClass('maya-animation').animate({left: '+=350px'}, 4000, function() {
						$(this).fadeOut();
					})
		    		Story[7].end = true;
				}
	    	});
		},
		close: function() {
			//Maya.exit();
		}
	},
	
	/*********************
	 * END CHAPTER OBJECTS
	 *********************/
};


/**************************
 * Facebook Like controller
 **************************/
var Likes = {
	count: null,
	remaining: null,
	limit: null,
	chapter: null,
	//chapter_like_limits: {1:300, 2:300, 3:300, 4:300, 5:300, 6:300},
	init: function() {
		this.chapter = Story.current_chapter;
		this.bindFacebookLike();
		this.setLimit();
		$.get('config.php?setting=use_fb', function(data) {
			if(data == 1) {
				Likes.getFbCounts();
			} else {
				Likes.getLocalCounts();
			}
		}, 'json');
	},
	setLimit: function() {
		$.get('likes.php?chapter=' + this.chapter, function(data) {
			Likes.limit = data.limit;
		}, 'json');
	},
	getLocalCounts: function() {
		$.get('likes.php?chapter=' + this.chapter, function(data) {
			Likes.count = data.count;
			Likes.remaining = data.limit < data.count ? 0 : (data.limit - data.count);
			Likes.displayCounts();
			Likes.displayPercentageBar();
		}, 'json');
	},
	bindFacebookLike: function() {
		$('.facebook-like').fbjlike({
			buttonWidth: 100,
		  	siteTitle:'Join My Village - Story of Maya',
		  	onlike:function(response){
		  		Likes.recordLike();
		  		LikesModal.showThanks();
		  	},
		  	onunlike:function(response){
		  		//Likes.updateCounts();
		  	},
		  	lang:'en_US'
		});
	},
	recordLike: function() {
		$.post('likes.php',{chapter: this.chapter}, function(data) {
			Likes.getCounts();
		});
	},
	getFbCounts: function(callback) {
		var url = Config.getUrl();
		if(Story.current_chapter > 1) {
			url += Config.sub_url + Story.current_chapter;
		}
		var query = 'http://graph.facebook.com/fql?q=SELECT url, normalized_url, share_count, like_count, comment_count, total_count, commentsbox_count, comments_fbid, click_count FROM link_stat WHERE url="' + url + '"';
		//console.log(query);
		$.getJSON(query, function(data) {
			Likes.count = data.data[0].like_count;
			Likes.remaining = Likes.limit - Likes.count;
			Likes.displayCounts();
			Likes.displayPercentageBar();
		});
	},
	displayCounts: function() {
		$('#likes-modal .likes-count span.count').text(Likes.count);
		$('#likes-modal .likes-remaining span.like-count').text(Likes.remaining);
		$('#likes-modal .like-count-total span.like-count').text(Likes.limit);
		if(Likes.count != 1) {
			$('#likes-modal .likes-count span.plural').text('S');
		} else {
			$('#likes-modal .likes-count span.plural').text('');
		}
		if(Likes.remaining != 1) {
			$('#likes-modal .likes-remaining span.plural').text('S');
		} else {
			$('#likes-modal .likes-remaining span.plural').text('');
		}
	},	
	displayPercentageBar: function() {
		var percentage = (Likes.count / Likes.limit) * 100;
		$('#likes-modal #percentage-bar #percentage').animate({width: percentage + '%'}, 4000);
	},
	isLimitReached: function() {
		if(this.count >= this.limit) {
			return true;
		} else {
			return false;
		}
	}
}

/***********************************************
 * Likes modal object
 * Controls where the Like should be displayed 
 * (ie at the end of the next available chapter)
 ***********************************************/
var LikesModal = {
	chapter: null,
	content: [
		// Chapter 1
		{
			intro: 'Going to school is important...it is the only way Maya will ever be able to help herself, and her family.',
			like_message: 'TO HELP MAYA GO TO SCHOOL, LIKE THIS POST',
			next_chapter_message: 'Maya will be off to school, and Chapter Two will be revealed. Stay Tuned!',
			position: 4732
		},
		// Chapter 2
		{
			intro: 'Female teachers are reluctant to come to rural villages...they need a safe place to live.',
			like_message: 'TO HELP TEACHERS AND SUPPLIES GET TO MAYA\'S VILLAGE, LIKE THIS POST',
			next_chapter_message: 'Maya\'s school will open, and Chapter Three will be revealed. Stay tuned!',
			position: 5297
		},
		// Chapter 3
		{
			intro: 'Most secondary schools are boarding schools. Maya needs a scholarship to cover her expenses.',
			like_message: 'TO HELP MAYA EARN SCHOLARSHIP FUNDS, LIKE THIS POST',
			next_chapter_message: 'Maya will get her scholarship, and Chapter Four will be revealed. Stay tuned!',
			position: 4845
		},
		// Chapter 4
		{
			intro: 'Maya needs to talk with the younger girls in her village on the importance of an education.',
			like_message: 'TO HELP MAYA MENTOR YOUNGER GIRLS IN THE VILLAGE, LIKE THIS POST',
			next_chapter_message: 'all the girls will be mentored, and Chapter Five will be revealed.  Stay tuned!',
			position: 3909
		},
		// Chapter 5
		{
			intro: 'Medical professionals are needed to help Maya understand her body\'s needs and show her husband how to care for her.',
			like_message: 'TO HELP ENSURE GOOD PRENATAL CARE FOR MAYA, LIKE THIS POST',
			next_chapter_message: 'Maya will have her baby, and Chapter Six will be revealed. Stay tuned!',
			position: 4159
		},
		// Chapter 6
		{
			intro: 'As Maya\'s skill and business grow, she will earn respect and earn a chance to take a leadership position in her community.',
			like_message: 'TO HELP MAYA BORROW MONEY FROM THE VSLA, LIKE THIS POST.',
			next_chapter_message: 'Maya will receive a loan, and our story\'s ending will be revealed. Stay tuned!',
			position: 4261
		},
	],
	init: function( chapter ) {
		Likes.init();
		this.modal = $('#likes-modal');
		this.chapter = chapter;
		this.show();
	},
	show: function() {
		$('#likes-modal #intro').html(this.content[this.chapter-1].intro);
		$('#likes-modal .like-message').html(this.content[this.chapter-1].like_message);
		$('#likes-modal .next-chapter-message').html(this.content[this.chapter-1].next_chapter_message);
		$('#likes-modal .modal-banner').css('background-image', 'url(img/milestone_' + this.chapter + '.png)');
		this.modal.css('left', Story.chapterStartPoint(this.chapter)+this.content[this.chapter-1].position);
		this.modal.animate({opacity: 1}, 2000);
	},
	showThanks: function() {
		var next_chapter = Story.next_chapter;
		$('#likes-modal #info').fadeOut(1000, function() {
			if(Likes.isLimitReached()) {
				$('#likes-modal #thanks #congrats a#continue').attr('href', '/?chapter=' + Story.next_chapter);
				$('#likes-modal #thanks #congrats').fadeIn(1000);
			} else {
				$('#likes-modal #thanks #message').fadeIn(1000);
			}
		});
	},
	hide: function() {
		this.modal.animate({opacity: 0}, 2000);
	}
	
}


/***********************
 * Scroll control object
 ***********************/
var Scroll = {
	preventScrolling: function() {
		// lock scroll position, but retain settings for later
		var scrollPosition = [
			self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
			self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
		];
		var html = $('html'); // it would make more sense to apply this to body, but IE7 won't have that
		html.data('scroll-position', scrollPosition);
		html.data('previous-overflow', html.css('overflow'));
		html.css('overflow', 'hidden');
		window.scrollTo(scrollPosition[0], scrollPosition[1]);
	},
	enableScrolling: function() {
		// un-lock scroll position
		var html = $('html');
		var scrollPosition = html.data('scroll-position');
		html.css('overflow', html.data('previous-overflow'));
		window.scrollTo(scrollPosition[0], scrollPosition[1])
	},
	scroll: function() {
		window.scrollBy(50,0);
		scrollDelay = setTimeout('Story.scroll()',100); // scrolls every 100 milliseconds
	},
	stopScroll: function() {
    	clearTimeout(scrollDelay);
	}
}

/********************************
 * Flags object that controls all 
 * the flag modal functionality
 *******************************/
var Flags = {
	x: 0,
	/*********************************************
	 * The content array is set up based on number 
	 * of chapters and flags in each chapter.  We 
	 * access the content based on chapter/flag 
	 * (e.g. this.content[2][2] for content in Chapter 2, Flag 2)
	 **********************************************/
	content: [
		// Chapter 1
		[ 
			'Meet <a href="http://www.joinmyvillage.com" target="_blank">Join My Village</a>, a unique online intiative working through CARE to lift women and girls out of poverty in India and Malawi through education and community initiatives...to empower women and girls to strengthen themselves, their families, their communities&mdash;and the world.',
			'Education is a birthright for all children. But only 1 out of 3 girls graduates from primary school in developing countries, leaving them stuck in a <a href="http://joinmyvillage.com/what-is-jmv" target="_blank">cycle of poverty.</a>',
			'<a href="http://joinmyvillage.com/how-it-works" target="_blank">Our support model is a little different</a>. It involves action on your part. Each Facebook post you like and every click on our website releases $1 from General Mills and Merck to fund the important work of empowering girls through CARE.'
		],
		// Chapter 2
		[
			'In India, Join My Village supports an accelerated learning program, called <a href="http://joinmyvillage.com/project/accelerated-learning" target="_blank">Udaan</a>, targeting older girls who have not completed primary school. The program brings them up to a fifth-grade level in just 11 months—and 95% go onto secondary school or college.',
			'Join My Village is working in Malawi to build <a href="http://joinmyvillage.com/project/primary-school-support" target="_blank">new teacher housing</a> that will bring more female teachers to rural villages—bringing more mentors and reducing class size.'
		],
		// Chapter 3
		[
			'In India, Join My Village supports <a href="http://joinmyvillage.com/project/kgbv-school-support" target="_blank">KGBV schools—upper primary schools for girls</a> that help them prepare for secondary school while gaining important social skills including working in groups, problem solving, critical thinking, persistence in the face of difficulty and respect for others and themselves.',
			'Join My Village has provided over 800 <a href="http://joinmyvillage.com/project/scholarships" target="_blank">secondary boarding school scholarships</a> in Malawi to help more girls get higher education.'
		],
		// Chapter 4
		[
			'In India, with help from Join My Village, secondary school girls have started a <a href="http://joinmyvillage.com/blog-post/a-bond-thicker-than-blood" target="_blank">leadership program called Kishori Samooh</a> to make a positive difference in their communities.',
			'In Malawi, Join My Village has provided <a href="http://www.joinmyvillage.com/blog-post/making-the-impossible-possible" target="_blank">mentoring to over 250 girls</a> in secondary schools to encourage them to continue their education.'
		],
		// Chapter 5
		[
			'<a href="http://joinmyvillage.com/project/maternal-health" target="_blank">Maternal mortality is a global tragedy</a>. Every day nearly 1,000 expectant mothers die; 98 percent of them in poor countries.',
			'India has the highest number of maternal deaths in the world. Join My Village supports <a href="http://joinmyvillage.com/blog-post/motherhood-is-to-be-cherished" target="_blank">maternal and newborn health programs</a> in 1,000 villages in Uttar Pradesh, helping women deliver and raise healthier families.'
		],
		// Chapter 6
		[
			'For every $1 invested in a woman, <a href="http://joinmyvillage.com/blog-post/the-power-of-being-a-vsla-member" target="_blank">she will put 80% towards her family’s health</a>, education and well-being.',
			'Join My Village has helped to create <a href="http://joinmyvillage.com/project/vsla" target="_blank">over 50 women-owned VSLAs</a> in Malawi, lending out over $60,000 to start small businesses.'
		]
	],
	setup: function() {
		for(var i=1; i<=6; i++) {
			for(var j=1; j<=this.content[i-1].length; j++) {
				this.setupClick(i,j);
			}
		}
	},
	setupClick: function(chapter, index) {
		$('#chapter-' + chapter + ' #flag-' + index).click(function() {
			var chapter = $(this).parent().attr('id').substr(8,9);
			var flag_num = this.id.substr(5,6);
			Flags.x = $(this).position().left;
			//$('#jmv-modal').css('left', x - 200);
			$('#jmv-modal .modal-content p').html(Flags.content[chapter-1][flag_num-1]);
			$('#jmv-modal .modal-content img').attr('src', 'img/jmv_banners/c' + chapter + '_f' + flag_num + '.jpg');
			//$('#jmv-modal').fadeIn('slow');
			$('#jmv-modal').modal({
				position: ["20%","35%"],
				closeHTML: '<a class="modal-close"></a>',
				closeClass: 'modal-close'
				
			});

			$(window).bind('scroll', function() {
				if (Maya.xPosition() > Flags.x) {
					$('#modal-overlay').fadeOut(500);
					$('#modal-container').fadeOut(500, function() {
						$.modal.close();
					});
				}
			});
		});
	},
}

/*****************************
 * Boxes object that controls 
 * box behaviors in Story
 *****************************/
var Boxes = {
	init: function() {
		this.bindScroll();
	},
	bindScroll: function() {
		$(window).bind('scroll', function() {
			// if the chapter is closed, then the user has already gone through this chapter, so we don't need to do this again and show the boxes.
			if(!Story.chapter_close_status[Story.current_chapter]) {
				// show boxes from the current chapter.
				Boxes.showBoxes(Story.current_chapter);
				// we want to show the boxes of all previous chapters as well
				Boxes.showPreviousChapterBoxes(Story.current_chapter);
			}
		});
	},
	show: function( chapter, box_num ) {
		var box = $('#chapter-' + chapter + ' #box-' + box_num);
		if(box.attr('enabled'))
			return;
		var p = box.css('bottom');
		box.css({bottom: '+=100px'});
		box.animate({bottom: p, opacity: 1}, 1000);
		box.attr('enabled', true);
	},
	xPosition: function ( box ) {
		return box.position().left;
	},
	yPosition: function ( box ) {
		return box.position().top;
	},
	showBoxes: function( chapter ) {
		var boxes = $('#chapter-' + chapter + ' .box').length;
		for(var i=1; i<=boxes; i++) {
			var box = $('#chapter-' + chapter + ' #box-' + i);
			if (Maya.xPosition() > this.xPosition( box ) - 450) {
				Boxes.show(chapter, i);
			}
		}
	},
	showPreviousChapterBoxes: function( chapter ) {
		for(var i=1; i<chapter; i++) {
			this.showBoxes(i);
		}
	}
}

/******************************
 * Maya object
 * Controls all Maya's behaviors
 * throughout the story
 ******************************/
var Maya = {
	bg_points: null,
	pause_animation: false,
	current_life_stage: 'child', // Maya starts life as a child
	lifeTransition: function( lifestage ) {
		var maya = $('#maya');
		var bg_pos = null;
		switch(lifestage) {
			case 'child':
				var bp_pos = -5;
				this.bg_points = ['-5px', '-72px', '-144px', '-216px','-286px'];
			break;
			case 'teen':
				bg_pos = 8;
				this.bg_points = ['0px', '-81px', '-162px', '-243px', '-323px'];
			break;
			case 'woman':
				bg_pos = -8;
				this.bg_points = ['-8px', '-93px', '-185px', '-279px', '-372px'];
			break;
			case 'pregnant':
				bg_pos = -5;
				this.bg_points = ['-5px', '-56px', '-109px'];
			break;
			case 'mother':
				bg_pos = -8;
				this.bg_points = ['-8px', '-89px', '-180px', '-273px', '-372px'];
			break;
			default:
				
			break;
		}
		if(this.current_life_stage != lifestage) {
			this.pause_animation = true;
			this.celebrate(bg_pos, lifestage);
		} else {
			this.setBg(bg_pos, lifestage);
		}
		this.current_life_stage = lifestage;
	},
	celebrate: function(bg_pos, lifestage) { // Boom.  Show some sparkly stars to celebrate a life transition.
		var stars = $('#maya #stars');
		// first fade out the old Maya, then fade in the new Maya with the stars
		$('#maya').fadeOut(300, function() {
			Maya.setBg(bg_pos, lifestage)
			$(this).fadeIn(300);
			stars.css({bottom: '50px'});
			stars.animate({opacity:1}, 1000).animate({opacity:0}, 1000);
			Maya.pause_animation = false;
		})
	},
	setBg: function(bg_pos, lifestage) {
		$('#maya').css('background-position', bg_pos + 'px');
		$('#maya').removeClass('maya-' + this.current_life_stage).addClass('maya-' + lifestage);
	},
	animate: function() {
		$(window).bind('scroll', function() {
			if(Maya.pause_animation == false) {
				var yPos = $('#footer').position().top;
				$('#maya').css('bottom', 100-$(window).scrollTop() + 'px');
				var xPos = $(window).scrollLeft();
				// set up Maya to animate every 100 pixels
				var increment = 100;
				var x10Pos = Math.floor(xPos/increment)*increment;
				if (x10Pos/increment % 4 == 0 && Maya.bg_points.length >= 4) {
			    	$('#maya').css('background-position', Maya.bg_points[4]);
			   	}
			   	if (((x10Pos/increment) + 1) % 4 == 0) {
			    	$('#maya').css('background-position', Maya.bg_points[3]);
			   	}
			   	if ((x10Pos/increment + 2) % 4 == 0) {
			    	$('#maya').css('background-position', Maya.bg_points[2]);
			   	}
			   	if ((x10Pos/increment + 3) % 4 == 0) {
			    	$('#maya').css('background-position', Maya.bg_points[1]);
			   	}
			}
		})
	},
	enter: function( lifestage, celebrate ) {
		if(!celebrate)
			this.current_life_stage = lifestage; // don't celebrate when entering a chapter, unless specified
		this.lifeTransition(lifestage);
		$('#maya').fadeIn(1400, function() {
			Maya.animate();
		});
	},
	exit: function() {
		$('#maya').animate({left: '+500px'}, 2000);
	},
	xPosition: function() {
		return $('#maya').position().left;
	}
}

/*******************
 * Animations object
 * Controls animations
 * throughout story
 *******************/
var Animations = {
	water_position: null,
	chapter: null,
	animateCrops: function( chapter ) {
		$('#chapter-' + chapter + ' #crop-1 img').animate({width:35,height:53}, 1000);
		$('#chapter-' + chapter + ' #crop-2 img').delay(200).animate({width:40,height:61}, 1000);
		$('#chapter-' + chapter + ' #crop-3 img').delay(1200).animate({width:55,height:84}, 1000);
		$('#chapter-' + chapter + ' #crop-4 img').delay(800).animate({width:45,height:69}, 1000);
		$('#chapter-' + chapter + ' #crop-5 img').delay(400).animate({width:50,height:76}, 1000);
	},
	animateWater: function() {
		var start = Animations.water_position;
		var end = start - 30;
		$('#chapter-' + Animations.chapter + ' #water-front-1').
	      animate({opacity:0.9, left: start + 'px'},800,'linear').
	      animate({opacity:0.92, left: end + 'px'},800,'linear', Animations.animateWater);
	    $('#chapter-' + Animations.chapter + ' #water-back-1').
	      animate({opacity:0.9, left: end + 'px'},800,'linear').
	      animate({opacity:0.92, left: start + 'px'},800,'linear');
	},
	animatePlane: function() {
		$('#plane-1').
			animate({bottom:'574px'}, 1400, 'linear').
			animate({bottom:'514px'}, 1400, 'linear', Animations.animatePlane)
	}
}

/*********************
 * Initialize Story
 *********************/
jQuery(function( $ ) {
	Story.init();
});
