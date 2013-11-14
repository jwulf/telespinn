(function() {
  $(window).on({
    'ready resize': function () {
      $('.position-vertical').each(function() {
        var self =  $(this);
        var selfHeight = self.height();
        var parent = self.parent();
        var parentHeight = parent.height();
        var offsetTop = ((parentHeight - selfHeight) / 2);

        self.css('top', offsetTop);
      });
    },
    'scroll': function () {
      var self = $(this);
      var navigationBar = $('#navigation').not('.locked');
      var scrollThreshold = (self.height() - 10 - 50);
      var scrollPosition = self.scrollTop();
      var timer = 0;

      if(!navigationBar) {
        return false;
      }

      if(timer) {
        clearTimeout(timer);
      }

      timer = setTimeout(function () {
        if(scrollPosition >= scrollThreshold) {
          navigationBar.addClass('pinned');
        } else {
          navigationBar.removeClass('pinned');
        }
      }, 100);
    }
  });

  $('.scroll-past-top').on('click', function() {
    $('html, body').animate({
      scrollTop: ($(window).height() - 10 - 50)
    }, 500);
  });
})();
