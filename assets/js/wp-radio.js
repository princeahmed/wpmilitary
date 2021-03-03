import './components/testimonials';

(function ($) {
  const app = {
    init: () => {
      //$('.count-number').counterUp({delay: 10, time: 3000});

      $(window).scroll(app.navbarSticky);

      $(document).on('click', '.pricing-tab-menu .nav-link', app.handlePricingTable)
    },

    handlePricingTable: function (e) {
      e.preventDefault();

      $('.pricing-tab-menu .nav-link').removeClass('active');
      $(this).addClass('active');

      const target = $(this).data('target');

      $('.pricing-table').removeClass('annual lifetime').addClass(target);

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

  };

  $(document).ready(app.init);

})(jQuery);

