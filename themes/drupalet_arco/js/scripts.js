jQuery(function() {

    "use strict";

    var wind = jQuery(window);



    // scrollIt
    jQuery.scrollIt({
      upKey: 38,                // key code to navigate to the next section
      downKey: 40,              // key code to navigate to the previous section
      easing: 'swing',          // the easing function for animation
      scrollTime: 600,          // how long (in ms) the animation takes
      activeClass: 'active',    // class given to the active nav element
      onPageChange: null,       // function(pageIndex) that is called when page is changed
      topOffset: -80            // offste (in px) for fixed top navigation
    });



    // navbar scrolling background
    wind.on("scroll",function () {

        var bodyScroll = wind.scrollTop(),
            navbar = jQuery(".navbar"),
            logo = jQuery(".navbar .logo> img");
		var logo_dark = jQuery(".logo-b").attr("data-logo-dark");
		var logo_light = jQuery(".logo-b").attr("data-logo-light");
        if(bodyScroll > 100){

            navbar.addClass("nav-scroll");
            logo.attr('src', logo_dark);

        }else{

            navbar.removeClass("nav-scroll");
            logo.attr('src', logo_light);
        }
    });


    // close navbar-collapse when a  clicked
    jQuery(".navbar-nav a").on('click', function () {
        jQuery(".navbar-collapse").removeClass("show");
    });



    // progress bar
    wind.on('scroll', function () {
        jQuery(".skill-progress .progres").each(function () {
            var bottom_of_object = 
            jQuery(this).offset().top + jQuery(this).outerHeight();
            var bottom_of_window = 
            jQuery(window).scrollTop() + jQuery(window).height();
            var myVal = jQuery(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                jQuery(this).css({
                  width : myVal
                });
            }
        });
    });


    jQuery(document).ready(function () {
        var hash = window.location.hash;

        if(hash !== ""){

            jQuery('a[href="'+hash+'"]').addClass('current')
            // jQuery('.' + hash).addClass('current');
        }
        
    });



    // sections background image from data background
    var pageSection = jQuery(".bg-img, section");
    pageSection.each(function(indx){
        
        if (jQuery(this).attr("data-background")){
            jQuery(this).css("background-image", "url(" + jQuery(this).data("background") + ")");
        }
    });


    // === owl-carousel === //

    // Testimonials owlCarousel
    jQuery('.carousel-single .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin: 0,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
    });

    // Clients owlCarousel
    jQuery('.clients .owl-carousel').owlCarousel({
        loop:true,
        margin: 60,
        mouseDrag:true,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                autoplay:true,
            },
            600:{
                items:3,
                autoplay:true,
            },
            1000:{
                items:6,
                autoplay:false,
            }
        }
    });

    // === End owl-carousel === //


    // magnificPopup
    jQuery('.gallery').magnificPopup({
        delegate: '.popimg',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    // YouTubePopUp
    jQuery("a.vid").YouTubePopUp();


    // countUp
    jQuery('.numbers .count').countUp({
        delay: 10,
        time: 1500
    });


    // accordion
    jQuery(".accordion").on("click",".title", function () {

        jQuery(this).next().slideDown();

        jQuery(".accordion-info").not(jQuery(this).next()).slideUp();

    });

    jQuery(".accordion").on("click",".item", function () {

        jQuery(this).addClass("active").siblings().removeClass("active");

    });


});


// === window When Loading === //

jQuery(window).on("load",function (){

    var wind = jQuery(window);
    // var carousel = jQuery(".slick").slick();

    // Preloader
    jQuery(".loading").fadeOut(500);


    // stellar
    //wind.stellar();


    // isotope
    jQuery('.gallery').isotope({
      // options
      itemSelector: '.items'
    });

    // jQuery('.home-gallery').isotope({
    //     // options
    //     itemSelector: '.home-card',
    //     resizable: false,
    // });

    var $gallery = jQuery('.gallery').isotope({
      // options
    });

    // var $homegallery = jQuery('.home-gallery').isotope({
    //     // options
    //   });

    // filter items on button click
    jQuery('.filtering').on( 'click', 'span', function() {

        var filterValue = jQuery(this).attr('data-filter');
        // carousel.slickPause();

        $gallery.isotope({ filter: filterValue });
        // $homegallery.isotope({ filter: filterValue });

    });

    jQuery('.filtering').on( 'click', 'span', function() {

        jQuery(this).addClass('active').siblings().removeClass('active');

    });


    // contact form validator
    jQuery('#contact-form').validator();

    jQuery('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: jQuery(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        jQuery('#contact-form').find('.messages').html(alertBox);
                        jQuery('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });

});


// Slider 
jQuery(document).ready(function() {

    var owl = jQuery('.header .owl-carousel');


    // Slider owlCarousel
    jQuery('.slider .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        margin: 0,
        autoplay:true,
        smartSpeed:500
    });

    // Slider owlCarousel
    jQuery('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        margin: 0,
        autoplay:true,
        smartSpeed:500,
        animateOut: 'fadeOut'
    });

    owl.on('changed.owl.carousel', function(event) {
        var item = event.item.index - 2;     // Position of the current item
        jQuery('h4').removeClass('animated fadeInLeft');
        jQuery('h1').removeClass('animated fadeInRight');
        jQuery('p').removeClass('animated fadeInUp');
        jQuery('.butn').removeClass('animated zoomIn');
        jQuery('.owl-item').not('.cloned').eq(item).find('h4').addClass('animated fadeInLeft');
        jQuery('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInRight');
        jQuery('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        jQuery('.owl-item').not('.cloned').eq(item).find('.butn').addClass('animated zoomIn');
    });

    jQuery('.carousel-item', '.multi-item-carousel').each(function(){
        var next = jQuery(this).next();
        if (! next.length) {
          next = jQuery(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo(jQuery(this));
    }).each(function(){
        var prev = jQuery(this).prev();
        if (! prev.length) {
            prev = jQuery(this).siblings(':last');
        }
        prev.children(':nth-last-child(2)').clone().prependTo(jQuery(this));
    });

});
