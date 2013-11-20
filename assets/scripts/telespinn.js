(function() {
  $(window).on({
    'ready resize': function () {
      $('.position-vertical').each(function() {
        var self =  $(this);
        var selfHeight = self.height();
        var parent = self.parent();
        var parentHeight = parent.height();
        var offsetTop = (parentHeight - selfHeight);
            offsetTop = (self.attr('id') == 'top-text') ? (offsetTop - 15) : offsetTop;
            offsetTop = (offsetTop / 2);
            offsetTop = Math.floor(offsetTop);

        self.css('top', offsetTop);
      });

      $('#navigation a').each(function() {
        var path = location.pathname;
        var link = $('#navigation a[href="' + path + '"');

        if(link) {
          $('#navigation a').removeClass('active');
          link.addClass('active');
        }
      });
    },
    'scroll': function () {
      var self = $(this);
      var navigationBar = $('#navigation');
      var scrollThreshold = (self.height() - 60);
      var scrollPosition = self.scrollTop();
      var timer = 0;

      if(navigationBar.hasClass('locked-to-top')) {
        self.off('scroll');

        return false;
      }

      if(timer) {
        clearTimeout(timer);
      }

      timer = setTimeout(function () {
        if(scrollPosition >= scrollThreshold) {
          navigationBar.addClass('pinned-to-top');
        } else {
          navigationBar.removeClass('pinned-to-top');
        }
      }, 100);
    }
  });

  $('.scroll-past-top').on('click', function() {
    $('html, body').animate({
      scrollTop: ($(window).height() - 60)
    }, 500);
  });
})();
