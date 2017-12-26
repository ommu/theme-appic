$(document).ready(function(){

	"use strict";

	new WOW().init();

	/* =================================
	LOADER 
	=================================== */
	$(".loader").delay(1200).fadeOut();
    $(".animationload").delay(1200).fadeOut("slow");
	

	/* =================================
	NAVBAR 
	=================================== */
	jQuery(window).scroll(function () {
		var top = jQuery(document).scrollTop();
		var batas = jQuery(window).height();
		var header = jQuery('#header');

		if ( top > 300 ) {
			$('.navbar-main').addClass('stiky');
		}else {
			$('.navbar-main').removeClass('stiky'); 
		}
	});
	

	/* =================================
	BANNER ROTATOR IMAGE 
	=================================== */
	$('#slides').superslides({
		animation: "fade",
		slide_speed: 800,
		autoplay: false,		
		pagination: true,
		hashchange: false,
		scrollable: true,
		
	});


    // add animate.css class(es) to the elements to be animated
    function setAnimation ( _elem, _InOut ) {
      // Store all animationend event name in a string.
      // cf animate.css documentation
      var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

      _elem.each ( function () {
        var $elem = $(this);
        var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

        $elem.addClass($animationType).one(animationEndEvent, function () {
          $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
        });
      });
    }


	$('#slides').on('animating.slides', function() {
	  	var currentSlide = $('#slides').data('superslides').current; //Get the index number of the current slide
		var $this = $('.slides-container .banner-slide').eq(currentSlide);
		var $elemsToanim = $this.find("[data-animation-in]");
		setAnimation ($elemsToanim, 'in');
	});


	/* =================================
	COUNTER
	=================================== */
	$('.counter').counterUp({
        delay: 10,
        time: 1000
    });


	/* =================================
	VIDEO
	=================================== */
    var video = $('.video-wrap');
    if (video.length) {
      $(".overlay-image").on("click", function(){
        $(this).addClass("hide");
        $("#video-frame")[0].src += "&autoplay=1";
      });
    }


	/* =================================
	OWL
	=================================== */
	var banner = $("#banner-slides");
	banner.owlCarousel({
		items: 1,
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
	});

	var info = $("#info-slides");
	info.owlCarousel({
		items: 1,
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
		margin: 30,
	});		
	
	var screenshots = $("#owl-screenshots");
	screenshots.owlCarousel({
		items: 4,
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
		margin: 30,
		nav: false,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],		
		dots: true,	
		responsive:{
			0:{
				items:2,
				margin: 15
			},
			1000:{
				items:4
			}
		},		
	});	

	var slide = $("#slide-image");
	slide.owlCarousel({
		items: 1,
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
	});
	
	var testimony2 = $("#testimony2");
	testimony2.owlCarousel({
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
		items : 2,
		//nav: true,
		//navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: true,
		responsive:{
			0:{
				items:1
			},
			1000:{
				items:2
			}
		},		
	});

	var popularPost = $("#popular-post");
	popularPost.owlCarousel({
		items: 1,
		autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 600,
		autoplayHoverPause: true,
		loop: true,
		margin: 10,
	});


	/* =================================
	FAQ
	=================================== */	
	$(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
	    if (e.type=='show'){
	      $(this).addClass('active');
	    }else{
	      $(this).removeClass('active');
	    }
  	});  
	

	/* =================================
	jQuery.YoutubeBackground
	=================================== */
	$(window).load(function() {
		'use strict';
		var ini =  $(this);
		var currentheight =  ini.height();
		if(currentheight >= 600){
			$('#video').YTPlayer({
				fitToBackground: true,
				videoId: 'iGpuQ0ioPrM'
			});			
		}else{
			$('#video').addClass('solid-bg');
		}
	}); 


	/* =================================
	SCROLL TO
	=================================== */
	$('a[href^="#"]').on('click', function(event) {
	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top
	        }, 1000);
	    }
	});


	/* =================================
	MAGNIFIC POPUP
	=================================== */
	$('.popup-image').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '';
			}
		}
	});

	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

	$('.popup-modal').magnificPopup({
		type:'inline',
		zoom:{enabled: true, duration: 300},
		callbacks: {
		open: function() {
			$('html').css('margin-right', 0);
			}
		}
	});

  	$('.info-1').on("mouseenter", function(e){
        $('.info-image .circle-1').addClass('circle-animation')
    });
    $('.info-1').on("mouseleave", function(e){
        $('.info-image .circle-1').removeClass('circle-animation')
    });
    $('.info-2').on("mouseenter", function(e){
        $('.info-image .circle-2').addClass('circle-animation')
    });
    $('.info-2').on("mouseleave", function(e){
        $('.info-image .circle-2').removeClass('circle-animation')
    });
    $('.info-3').on("mouseenter", function(e){
        $('.info-image .circle-3').addClass('circle-animation')
    });
    $('.info-3').on("mouseleave", function(e){
        $('.info-image .circle-3').removeClass('circle-animation')
    });
    $('.info-4').on("mouseenter", function(e){
        $('.info-image .circle-4').addClass('circle-animation')
    });
    $('.info-4').on("mouseleave", function(e){
        $('.info-image .circle-4').removeClass('circle-animation')
    });

	/* =================================
	WORDS ANIMATIONS
	=================================== */
	// set animation timing
	  var animationDelay = 3500,
	      // loading bar effect
	      barAnimationDelay = 3800,
	      barWaiting = barAnimationDelay - 3000, // 3s is the duration of the transition on the loading bar - set in CSS
	      // letters effect
	      lettersDelay = 50;

	  initHeadline();

	  function initHeadline() {
	    // insert <i> element for each letter of a changing word
	    singleLetters($('.cd-headline.letters').find('b'));
	    // initialise headline animation
	    animateHeadline($('.cd-headline'));
	  }

	  function singleLetters($words) {
	    $words.each(function() {
	      var word = $(this),
	          letters = word.text().split(''),
	          selected = word.hasClass('is-visible');
	      for (i in letters) {
	        if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
	        letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
	      }
	      var newLetters = letters.join('');
	      word.html(newLetters);
	    });
	  }

	  function animateHeadline($headlines) {
	    var duration = animationDelay;
	    $headlines.each(function() {
	      var headline = $(this);
	      var spanWrapper = headline.find('.cd-words-wrapper'),
	          newWidth = spanWrapper.width() + 5;
	      spanWrapper.css('width', newWidth);
	      if(headline.hasClass('loading-bar')) {
	        duration = barAnimationDelay;
	        spanWrapper.css('width', '');
	        setTimeout(function(){ spanWrapper.addClass('is-loading') }, barWaiting);
	      };
	      //trigger animation
	      setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
	    });
	  }

	  function hideWord($word) {
	    var nextWord = takeNext($word);
	    if($word.parents('.cd-headline').hasClass('letters')) {
	      var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
	      hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
	      showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
	    } else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
	      $word.parents('.cd-words-wrapper').removeClass('is-loading');
	      switchWord($word, nextWord);
	      setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
	      setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
	    } else {
	      switchWord($word, nextWord);
	      setTimeout(function(){ hideWord(nextWord) }, animationDelay);
	    }
	  }

	  function hideLetter($letter, $word, $bool, $duration) {
	    $letter.removeClass('in').addClass('out');
	    if(!$letter.is(':last-child')) {
	      setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);
	    } else if($bool) {
	      setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
	    }
	    if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
	      var nextWord = takeNext($word);
	      switchWord($word, nextWord);
	    }
	  }

	  function showLetter($letter, $word, $bool, $duration) {
	    $letter.addClass('in').removeClass('out');
	    if(!$letter.is(':last-child')) {
	      setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration);
	    } else {
	      if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
	    }
	  }

	  function takeNext($word) {
	    return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	  }

	  function takePrev($word) {
	    return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	  }

	  function switchWord($oldWord, $newWord) {
	    $oldWord.removeClass('is-visible').addClass('is-hidden');
	    $newWord.removeClass('is-hidden').addClass('is-visible');
	  }

});