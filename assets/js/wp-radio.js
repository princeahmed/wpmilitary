(function ($) {
  const app = {
    init: () => {


      app.testimonialCarousel();


      $('.count-number').counterUp({delay: 10, time: 3000});

      $(document).on('click', '.client-single', app.handleTestimonial);
      $(window).scroll(app.navbarSticky);
    },

    navbarSticky: () => {
      const $stickyMenu = $('#header-nav');
      const scrollTop = $(window).scrollTop();
      if (scrollTop > 40) {
        $($stickyMenu).addClass('is-sticky');
      } else {
        $($stickyMenu).removeClass('is-sticky');
      }
    },

    handleTestimonial: function (e) {
      e.preventDefault();

      const active = $(this).hasClass('active');

      const parent = $(this).parents('.testi-wrap');

      if (!active) {
        var activeBlock = parent.find('.client-single.active');

        var currentPos = $(this).attr('data-position');

        var newPos = activeBlock.attr('data-position');

        activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
        activeBlock.attr('data-position', currentPos);

        $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
        $(this).attr('data-position', newPos);

      }
    },

    testimonialCarousel: () => {
      $('.testimonial-items').owlCarousel({
        items:1,
        loop: true,
        smartSpeed: 500,
        responsiveClass: true,
        nav: false,
        dots: true,
        dotsContainer: ".owl-thumbs",
        autoplay: false,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        responsive: {
          0: {
            items: 1,
            margin: 30,
          },
          480: {
            items: 1,
            margin: 30,
          },
          992: {
            items: 1,
            margin: 30,
          }
        }
      });
    }

  };

  $(document).ready(app.init);

})(jQuery);

