(function() {
  var d = $(document);
  var w = $(window);
  var headerScroll = $('.header-scroll');

  function positionHeaderText() {
    var w = $(window);
    var headerText = $('#header-text');
    var headerTextOffset = (w.height() - headerText.height()) / 2;

    headerText.css('top', headerTextOffset);
  }

  function scrollPastHeader() {
    var container = $("#container");

    $('html, body').animate({
      scrollTo: container.offset().top
    }, 500);
    
    return false;
  }

  function toogleNavigationBar() {
    var w = $(window);
    var container = $("#container");
    var navigationBar = $('#navigation');
    var scrollDelay = 100;
    var scrollLimit = (container.offset().top - 10)
    var scrollPosition = w.scrollTop();
    var timer = 0;

    if(timer) {
      clearTimeout(timer);
    }

    timer = setTimeout(function() {
      if(scrollPosition >= scrollLimit) {
        navigationBar.slideDown(100);
      } else {
        navigationBar.hide();
      }
    }, scrollDelay);
  }

  d.on('ready', positionHeaderText);
  w.on('resize', positionHeaderText);
  w.on('scroll', toogleNavigationBar);
  headerScroll.on('click', scrollPastHeader);
})();
