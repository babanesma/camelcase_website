"use strict";
var winWidth, winHeight, winScroll, counters = false;


/**/
/* msieversion */
/**/
function msieversion()
{
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");
	if( msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./) )
		return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
	else
		return false;
}


/**/
/* google map */
/**/
function init_map()
{
	var coordLat = 29.9929388;
	var coordLng = 30.961495;
	var point = new google.maps.LatLng(coordLat,coordLng);
	var center = new google.maps.LatLng(coordLat,coordLng);
	
	var mapOptions = {	
		zoom: 15,
		center: center,
		scrollwheel: false,
		disableDefaultUI: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
  var image = 'images/gmap_default.png';
  var beachMarker = new google.maps.Marker({
  	map: map,
  	position: point
  });
}


/**/
/* on scroll */
/**/
jQuery(window).scroll(function()
{
	winScroll = jQuery(this).scrollTop();
	if( winScroll > jQuery('#page-header-top').outerHeight() )
	{
		jQuery('#page-header-bottom').addClass('fixed');
	}
	else
	{
		jQuery('#page-header-bottom').removeClass('fixed');		
	}
	
	if( counters )
		return false;
	if( jQuery('#block-counters').length == 0 )
		return false;
	if( winScroll + winHeight > jQuery('#block-counters').offset().top )
	{
		counters = true;
		jQuery('#block-counters .counter').counter();
	}
});


/**/
/* on resize */
/**/
jQuery(window).resize(function()
{
	winWidth = jQuery(window).width();
	winHeight = jQuery(window).height();
});


/**/
/* on document load */
/**/
jQuery(function()
{
	winWidth = jQuery(window).width();
	winHeight = jQuery(window).height();
	
	
	/**/
	/* parallax */
	/**/
	jQuery('.page-content-section-parallaxed').each(function()
	{
		var $bgobj = jQuery(this);
		jQuery(window).scroll(function()
		{
			if( winScroll + winHeight > $bgobj.offset().top )
			{
				var yPos = -((winScroll + winHeight - $bgobj.offset().top) / $bgobj.data('speed'));
				$bgobj.css({backgroundPosition: '50% '+ yPos + 'px'});
			}
		});
	});	
	
	
	/**/
	/* fancybox */
	/**/
	jQuery(".fancybox").fancybox();
	
	
	/**/
	/* main search */
	/**/
	jQuery('#main-search').on('click', 'button', function()
	{
		jQuery('#main-search').toggleClass('active');
		if( jQuery('#main-search').hasClass('active') && !msieversion() )
		{
			jQuery('#main-search input').focus();
		}
	});
	
	
	/**/
	/* main nav */
	/**/
	jQuery('#main-nav').on('click', 'a', function()
	{
		if( winWidth < 768 )
		{
			if( jQuery(this).next('ul').length )
			{
				jQuery(this).next('ul').slideToggle('fast');
				return false;
			}
			if( jQuery(this).next('div').length )
			{
				jQuery(this).next('div').slideToggle('fast');
				return false;
			}
		}
	});
	
	
	/**/
	/* scroll nav */
	/**/
	jQuery('#scroll-nav, #scroll-footer').on('click', 'a', function()
	{
		var topPos = 0;
		if( winWidth < 768 )
		{
			var topPos = jQuery(jQuery(this).attr('href')).offset().top;
		}
		else
		{
			var topPos = jQuery(jQuery(this).attr('href')).offset().top - jQuery('#page-header-bottom').height();			
		}
		jQuery('html, body').stop().animate({scrollTop: topPos});
		
		return false;
	});
	jQuery('#scroll-nav a, #scroll-footer a').each(function()
	{
		var $aobj = jQuery(this);
		jQuery(window).scroll(function()
		{
			if( winScroll + 1 > jQuery($aobj.attr('href')).offset().top - 80 )
			{
				$aobj.parent().addClass('active').siblings().removeClass('active');
			}
		});
	});
	
	
	/**/
	/* slider */
	/**/
	/*
	jQuery('#slider-revolution').revolution(
	{
		dottedOverlay:"none",
		delay:16000,
		startwidth:1170,
		startheight:500,
		hideThumbs:200,
		
		thumbWidth:100,
		thumbHeight:50,
		thumbAmount:5,
		
		navigationType:"bullet",
		navigationArrows:"solo",
		navigationStyle:"preview1",
		
		touchenabled:"on",
		onHoverStop:"on",
		
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
								
		parallax:"mouse",
		parallaxBgFreeze:"on",
		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
								
		keyboardNavigation:"off",
		
		navigationHAlign:"center",
		navigationVAlign:"bottom",
		navigationHOffset:0,
		navigationVOffset:20,
		
		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,
		
		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,
				
		shadow:0,
		fullWidth:"on",
		fullScreen:"off",
		
		spinner:"spinner4",
		
		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		
		shuffle:"off",
		
		autoHeight:"off",						
		forceFullWidth:"off",
		
		hideThumbsOnMobile:"off",
		hideNavDelayOnMobile:1500,						
		hideBulletsOnMobile:"off",
		hideArrowsOnMobile:"off",
		hideThumbsUnderResolution:0,
		
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		startWithSlide:0,
		videoJsPath:"rs-plugin/videojs/",
		fullScreenOffsetContainer: ""	
	});
	*/
	
	/**/
	/* accordion */
	/**/
	jQuery('.accordion .active').next().show();
	jQuery('.accordion').on('click', 'dt', function()
	{
		if(jQuery(this).hasClass('active')) { 
			jQuery(this).toggleClass('active').siblings('dt').removeClass('active');
			jQuery(this).siblings('dd').slideUp('fast');
		} else {
			jQuery(this).toggleClass('active').siblings('dt').removeClass('active');
			jQuery(this).siblings('dd').slideUp('fast');
			jQuery(this).next().stop().slideDown('fast');
		}
	});
	
	
	/**/
	/* countdown */
	/**/
	var today = new Date();
	jQuery('#countdown').countdown({
		until: new Date(today.getFullYear(), today.getMonth() + 4, today.getDate() + 10),
		format: 'ODHMS',
		layout: '<ul><li><div><span>{onn}</span>{ol}</div></li><li><div><span>{dnn}</span>{dl}</div></li><li><div><span>{hnn}</span>{hl}</div></li><li><div><span>{mnn}</span>{ml}</div></li><li><div><span>{snn}</span>{sl}</div></li></ul>'
	});
	
	
	/**/
	/* owl slideshow */
	/**/
	jQuery(".owl-slideshow").owlCarousel({
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
		pagination: false,
		singleItem: true,
		autoHeight: true
	});
	jQuery(".owl-slideshow-2").owlCarousel({
		singleItem: true,
		autoHeight: true,
		transitionStyle: 'fadeUp'
	});
	
	
	/**/
	/* about 2 */
	/**/
	jQuery('.block-about-2').each(function()
	{
		var $obj = jQuery(this);
		jQuery(window).scroll(function()
		{
			if( winScroll + winHeight > $obj.offset().top )
			{
				$obj.find('.bar').each(function()
				{
					jQuery(this).css('width', jQuery(this).data('value'));
				});
			}
		});
	});
	
	
	/**/
	/* recent works */
	/**/
	jQuery('.block-recent-works').imagesLoaded(function()
	{
		jQuery('.block-recent-works ol li').on('click', function()
		{
			jQuery('.block-recent-works ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-recent-works ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item-small'
	    }
	  });
	});
	
	/**/
	/* recent works 2 */
	/**/
  jQuery('.block-recent-works-2 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-2 .carousel').owlCarousel(
		{
			items: 5,
			itemsDesktop: [1199,4],
			itemsDesktopSmall: [980,3],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
	
	/**/
	/* recent works 3 */
	/**/
  jQuery('.block-recent-works-3 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-3 .carousel').owlCarousel(
		{
			items: 3,
			itemsDesktop: [1199,3],
			itemsDesktopSmall: [980,2],
			itemsTablet: [767,2],
			itemsMobile: [479,1]
		});
	});
	
	/**/
	/* recent works 4 */
	/**/
  jQuery('.block-recent-works-4 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-4 .carousel').owlCarousel(
		{
			items: 3,
			itemsDesktop: [1199,3],
			itemsDesktopSmall: [980,2],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
	
	/**/
	/* recent works 5 */
	/**/
  jQuery('.block-recent-works-5 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-5 .carousel').owlCarousel(
		{
			items: 4,
			itemsDesktop: [1199,4],
			itemsDesktopSmall: [980,3],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
	
	/**/
	/* recent works 6 */
	/**/
  jQuery('.block-recent-works-6 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-6 .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* recent works 7 */
	/**/
  jQuery('.block-recent-works-7 .carousel').imagesLoaded(function()
	{
		jQuery('.block-recent-works-7 .carousel').owlCarousel(
		{
			items: 4,
			itemsDesktop: [1199,4],
			itemsDesktopSmall: [980,3],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
	
	/**/
	/* portfolio */
	/**/
	jQuery('.block-portfolio').imagesLoaded(function()
	{
		jQuery('.block-portfolio ol li').on('click', function()
		{
			jQuery('.block-portfolio ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio 2 */
	/**/
	jQuery('.block-portfolio-2').imagesLoaded(function()
	{
		jQuery('.block-portfolio-2 ol li').on('click', function()
		{
			jQuery('.block-portfolio-2 ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio-2 ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio 3 */
	/**/
	jQuery('.block-portfolio-3').imagesLoaded(function()
	{
		jQuery('.block-portfolio-3 ol li').on('click', function()
		{
			jQuery('.block-portfolio-3 ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio-3 ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio 5 */
	/**/
	jQuery('.block-portfolio-5').imagesLoaded(function()
	{
		jQuery('.block-portfolio-5 ol li').on('click', function()
		{
			jQuery('.block-portfolio-5 ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio-5 ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio 6 */
	/**/
	jQuery('.block-portfolio-6').imagesLoaded(function()
	{
		jQuery('.block-portfolio-6 ol li').on('click', function()
		{
			jQuery('.block-portfolio-6 ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio-6 ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio 7 */
	/**/
	jQuery('.block-portfolio-7').imagesLoaded(function()
	{
		jQuery('.block-portfolio-7 ol li').on('click', function()
		{
			jQuery('.block-portfolio-7 ul').isotope(
			{
				filter: jQuery(this).attr('data-filter')
			});
			jQuery(this).addClass('active').siblings().removeClass('active');
		});
		jQuery('.block-portfolio-7 ul').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
	    }
	  });
	});
	
	/**/
	/* portfolio details */
	/**/
  jQuery('.block-portfolio-details .carousel').imagesLoaded(function()
	{
		jQuery('.block-portfolio-details .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true			
		});
	});
	
	
	/**/
	/* mission */
	/**/
	jQuery('#block-mission .years').on('click', 'a', function()
	{
		jQuery(this).addClass('active').siblings().removeClass('active');
		jQuery(jQuery(this).attr('href')).addClass('active').siblings('.year').removeClass('active');
		
		return false;
	});
  
  
  /**/
	/* benefits */
	/**/
  jQuery('.block-benefits-2').on('click', '.tabs a', function()
	{
		jQuery(this).parent().addClass('active').siblings().removeClass('active');
		jQuery(jQuery(this).attr('href')).addClass('active').siblings('ul').removeClass('active');
		return false;
	});
	
	
	/**/
	/* clients */
	/**/
	jQuery('.block-clients .carousel').imagesLoaded(function()
	{
		jQuery('.block-clients .carousel').owlCarousel(
		{
			items: 4,
			itemsDesktopSmall: [980,3],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
  
  
  /**/
	/* services */
	/**/
  jQuery('.block-services-7').on('click', '.carousel a', function()
	{
		jQuery('.block-services-7 .carousel a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(jQuery(this).attr('href')).addClass('active').siblings('.info').removeClass('active');
		return false;
	});
	jQuery('.block-services-7 .carousel').owlCarousel(
	{
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
		pagination: false,
		singleItem: true,
		autoHeight: true
	});
	
	
	/**/
	/* testimonials */
	/**/
	/*jQuery('.block-testimonials .carousel').imagesLoaded(function()
	{
		jQuery('.block-testimonials .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			singleItem: true,
			autoHeight: true
		});
	});*/
	
	/**/
	/* testimonials 2 */
	/**/
	jQuery('.block-testimonials-2 .carousel').imagesLoaded(function()
	{
		jQuery('.block-testimonials-2 .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-double-left">', '<i class="fa fa-angle-double-right">'],
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* testimonials 3 */
	/**/
	/*jQuery('.block-testimonials-3 .carousel').imagesLoaded(function()
	{
		jQuery('.block-testimonials-3 .carousel').owlCarousel(
		{
			singleItem: true,
			autoHeight: true
		});
	});*/
	
	/**/
	/* testimonials 4 */
	/**/
	jQuery('.block-testimonials-4 .carousel').imagesLoaded(function()
	{
		jQuery('.block-testimonials-4 .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	
	/**/
	/* team */
	/**/
	jQuery('.block-team .carousel').imagesLoaded(function()
	{
		jQuery('.block-team .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* team 2 */
	/**/
	jQuery('.block-team-2 .carousel').imagesLoaded(function()
	{
		jQuery('.block-team-2 .carousel').owlCarousel(
		{
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* team 3 */
	/**/
	jQuery('.block-team-3 .carousel').imagesLoaded(function()
	{
		jQuery('.block-team-3 .carousel').owlCarousel(
		{
			items: 4,
			itemsDesktopSmall: [980,3],
			itemsTablet: [767,2],
			itemsMobile: [479,1],
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false
		});
	});
	
	
	/**/
	/* skills */
	/**/
	jQuery('.block-skills, .block-skills-2').each(function()
	{
		var $obj = jQuery(this);
		jQuery(window).scroll(function()
		{
			if( winScroll + winHeight > $obj.offset().top )
			{
				$obj.find('.bar div').each(function()
				{
					jQuery(this).css('width', jQuery(this).data('value'));
				});
			}
		});
	});
	
	
	/**/
	/* capabilities */
	/**/
	jQuery('.block-capabilities input').knob({
		width: 150,
		height: 150,
		thickness: .07,
		fgColor: '#2d3e50',
		displayInput: false
	});
	
	/**/
	/* capabilities 2 */
	/**/
	jQuery('.block-capabilities-2 input').knob({
		width: 134,
		height: 134,
		thickness: 1,
		fgColor: '#2d3e50',
		bgColor: '#ffffff',
		displayInput: false
	});
		
	
	/**/
	/* catalog grid */
	/**/
	jQuery('.block-catalog-grid .carousel').imagesLoaded(function()
	{
		jQuery('.block-catalog-grid .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* catalog list */
	/**/
	jQuery('.block-catalog-list .carousel').imagesLoaded(function()
	{
		jQuery('.block-catalog-list .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* product info */
	/**/
	jQuery('.block-product-info .carousel').imagesLoaded(function()
	{
		jQuery('.block-product-info .carousel').owlCarousel(
		{
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
			pagination: false,
			singleItem: true,
			autoHeight: true
		});
	});
	
	/**/
	/* product tabs */
	/**/
	jQuery('.block-product-tabs .head').on('click', 'a', function()
	{
		jQuery(this).addClass('active').siblings().removeClass('active');
		jQuery(jQuery(this).attr('href')).addClass('active').siblings('.cont').removeClass('active');
		return false;
	});
	
	
	/**/
	/* price filter */
	/**/
	jQuery('#price-filter').slider({
		range: true,
		min: 0,
		max: 999,
		values: [0, 600],
		slide: function(event, ui)
		{
			jQuery('#price-filter-value-1').text(ui.values[0]);
			jQuery('#price-filter-value-2').text(ui.values[1]);
		}
	});
	
	
	/**/
	/* contacts */
	/**/
	jQuery('.block-contacts').on('click', 'ul li', function()
	{
		jQuery(this).addClass('active').siblings().removeClass('active');
		jQuery(this).parent().next().find('li').eq(jQuery(this).index()).addClass('active').siblings().removeClass('active');
	});
	
	
	/**/
	/* feedback */
	/**/
	jQuery('#block-feedback').validate({		
		submitHandler: function(form)
		{
			jQuery(form).ajaxSubmit(
			{
				beforeSend: function()
				{
					jQuery(form).find('button[type="submit"]').attr('disabled', true);
				},
				success: function()
				{
					jQuery(form).addClass('submitted');
				}
			});
		}
	});
	
	
	/**/
	/* google map */
	/**/
	if( document.getElementById('google-map') )
	{
		var script = document.createElement('script');
	 	script.type = 'text/javascript';
	 	script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=init_map';
//	 	document.body.appendChild(script);
                jQuery('body').prepend(script);
 	}
	
	
	//Video
	var videoRatio = 1.777;
	jQuery('.art_video').each(function(){
		var $this = jQuery(this);
		$this.find('iframe').width($this.width()).height($this.width()/videoRatio);
	});
	jQuery(window).bind('resize', function(){
		jQuery('.art_video').each(function(){
			var $this = jQuery(this);
			$this.find('iframe').width($this.width()).height($this.width()/videoRatio);
		});
	})
});


/**/
/* on window load */
/**/
jQuery(window).load(function()
{	
	setTimeout(function()
	{
		jQuery('body').addClass('ready');
	}, 100);
});

jQuery(document).ready( function() {
	jQuery('#edit-range-from').attr('disabled', true);
	jQuery('#edit-range-to').attr('disabled', true);
});