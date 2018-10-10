$(document).ready(function() {
  ditt.init();
});


// Just in case the #main content hasn't been fully loaded
$(window).load(function() {
  ditt.display();
});

$(window).resize(function() {
  ditt.resize();
});

var ditt = {

  spacing: 20,
  init: function() {

    console.log('Initializing...')

    ditt.display();

    $('.collection_block_content_item').each(function() {
      $(this).backstretch($(this).attr('data-image-src'), {
        fade: 200
      });
    })
  },


  resize: function() {

    console.log('Resizing...')

    ditt.display();

  },

  display: function() {

    console.log('Displaying...');


}


};
