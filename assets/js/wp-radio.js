(function ($) {
  const app = {
    init: () => {

      $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
        delay: 10,
        time: 2000
      });

      $(document).on('click', '.client-single', app.handleTestimonial);
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
    }

  };

  $(document).ready(app.init);

})(jQuery);

