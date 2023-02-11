(function (jQuery) {
    "use strict";

    // Sticky Navbar
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 40) {
            jQuery('.navbar').addClass('sticky-top');
        } else {
            jQuery('.navbar').removeClass('sticky-top');
        }
    });
    
    // Dropdown on mouse hover
    jQuery(document).ready(function () {
        function toggleNavbarMethod() {
            if (jQuery(window).width() > 992) {
                jQuery('.navbar .dropdown').on('mouseover', function () {
                    jQuery('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    jQuery('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                jQuery('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        jQuery(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.back-to-top').fadeIn('slow');
        } else {
            jQuery('.back-to-top').fadeOut('slow');
        }
    });
    jQuery('.back-to-top').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    jQuery(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        nav : true,
        loop: true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ]
    });
   
})(jQuery);

(function (jQuery) {
    function initOwlCarousel() {
        jQuery('.owl-carousel').owlCarousel();
    }
    jQuery(document).ready(function () {
      initOwlCarousel();
    });
  })(jQuery);

