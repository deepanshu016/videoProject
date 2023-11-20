(function($) {
	
	"use strict";


    // Back to top
    $.scrollUp({
        scrollText: '<i class="fa fa-long-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

	
    //js code for mobile menu toggle
   $(".menu-toggle").on("click", function() {
       $(this).toggleClass("is-active");
   });



    
    //portfolio filtering

    var $portfolio = $('.portfolio');
    if ($.fn.imagesLoaded && $portfolio.length > 0) {
        imagesLoaded($portfolio, function () {
            $portfolio.isotope({
                itemSelector: '.portfolio-item',
                filter: '*'
            });
            $(window).trigger("resize");
        });
    }

    $('.portfolio-filter').on('click', 'a', function (e) {
        e.preventDefault();
        $(this).parent().addClass('active').siblings().removeClass('active');
        var filterValue = $(this).attr('data-filter');
        $portfolio.isotope({filter: filterValue});
    });

    
    // Portfolio popup

    $(".portfolio-gallery").each(function () {
        $(this).find(".popup-gallery").magnificPopup({
            type: "image",
            gallery: {
                enabled: true
            }
        });
    }); 

    $('.video-popup').magnificPopup({
        type: 'iframe',
    });


    // Main Slider
    $('.main-content-slider').owlCarousel({
        loop:true,
        dots: false,
        nav: true,
        autoplay: false,
        mouseDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            576:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    // Date Picker
    $( function() {
        $( "#datepicker" ).datepicker();
    });



    //Counter-JS
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });


    // Preloader Js
    $(window).on('load', function(){
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });


    // Wow js active
    // new WOW().init(); 


    // Full Screen Search
    $(".search-btn").on('click', function(){
        $(".search-full").removeClass("close");
        $(".search-full").addClass("open");
    })

    $(".search-close").on('click', function(){
        $(".search-full").removeClass("open");
        $(".search-full").addClass("close");
    })
    

    // Right Sticky Wapper
    if($(".right-sticky-wapper").length){
        $("a.right-sticky-trigger").on("click",function(e){
        $(this).parent(".right-sticky-wapper").toggleClass("active");
        return false;
    });
    }

    
    // Nice Select
    $('.select-bar').niceSelect();
    

    // Popular items Slider
    $('.popular-items').owlCarousel({
        loop:true,
        dots: false,
        nav: true,
        autoplay: false,
        mouseDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 5000,
        smartSpeed: 500,
        margin: 10,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
            },
            576:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });


    // popular-item-2 Slider
    $('.popular-item-2').owlCarousel({
        loop:true,
        dots: false,
        nav: true,
        autoplay: false,
        mouseDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 5000,
        smartSpeed: 500,
        margin: 10,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
            },
            576:{
                items:3
            },
            1000:{
                items:7
            }
        }
    });

    // popular-items-hover Slider
    $('.popular-items-hover').owlCarousel({
        loop:true,
        dots: false,
        nav: true,
        autoplay: false,
        mouseDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 5000,
        smartSpeed: 500,
        margin: 10,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
            },
            576:{
                items:4
            },
            1000:{
                items:8
            }
        }
    });


    
    // Full Account modal
    $(".account-btn").on('click', function(){
        $(".account-full").removeClass("close");
        $(".account-full").addClass("open");
    })

    $(".account-close").on('click', function(){
        $(".account-full").removeClass("open");
        $(".account-full").addClass("close");
    })
    


    //Faq area Accordion
	$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

	$('.accordion a').on( 'click',function(j) {
		var dropDown = $(this).closest('li').find('p');

		$(this).closest('.accordion').find('p').not(dropDown).slideUp();

		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).closest('.accordion').find('a.active').removeClass('active');
			$(this).addClass('active');
		}

		dropDown.stop(false, true).slideToggle();

		j.preventDefault();
	});

	
})(jQuery);