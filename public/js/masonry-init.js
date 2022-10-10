$('.grid').imagesLoaded( {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    fitwidth: true,
  },
  function() {
    $('.grid').masonry();
  }
);