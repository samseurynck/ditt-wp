$(document).ready(function() {
  ditt.init();
  console.log('ditt.init')
});

// Just in case the #main content hasn't been fully loaded
$(window).load(function() {
  console.log('ditt.display window load')

  ditt.display();

});

$(window).resize(function() {
  ditt.resize();
  console.log('resize')
});

var ditt = {

  spacing: 20,
  init: function() {

    // ditt.display();

    $('.bstretchMe, .item_block_left, .gallery_block_gallery_img').each(function() {
      $(this).backstretch($(this).attr('data-image-src'), {
        fade: 200
      });
      console.log("backstretchin'")
    })

    // show/hide options for collection page. uses 'closest' to grab closest elements
    $('.item_block_right_viewoptions').click(function() {
      console.log("opties click")
      $(this).closest('.item_block_right').find('.item_block_right_details').toggle("slow");
      $(this).closest('.item_block_right').toggleClass( "item_block_right_selected" );
      $(this).toggleClass('item_block_right_viewoptions_selected');
    });

  },

  resize: function() {

    console.log('Resizing...')

    ditt.display();

  },

  display: function() {

    console.log('Displaying...');

  }


};
