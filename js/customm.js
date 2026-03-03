;
(function($) {
    "use strict"
    var nav_offset_top = $('header').height() + 50;

    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
})(jQuery)

$( document ).ready(function() {
    $("#form1_enquiry").validationEngine();

        $("#form1_submit").click(function (e) {
            var valid = $("#form1_enquiry").validationEngine('validate');
         
            if (valid == true) {
				e.preventDefault();
				$('#form1_submit').prop('disabled',true);
				//return true;
            } 
        });
});

//recruiters-slider
$("#faculty-slider").owlCarousel({
        //autoPlay: 5000, //Set AutoPlay to 5 seconds
        autoplay: true,
        //smartSpeed: 2000, // Default is 250
        items: 4, //Set Testimonial items
        loop: false,
        margin: 10,
        singleItem: true,
        touchDrag: true,
        mouseDrag: true,
        pagination: false,
        nav: false,
        dots: false,
        navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            dots: true,
        },
        480:{
            items:1,
            dots: true,
        },
        568:{
            items:2,
            dots: true,
        },
        600:{
            items:2,
           dots: true,
        },
        667:{
            items:2,
            dots: true,
           
        },
        1000:{
            items:4
        }
    }   
        
    });