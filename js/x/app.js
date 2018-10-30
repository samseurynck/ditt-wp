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

    // ditt.display();

    $('.collection_block_content_item, .footer_block_right').each(function() {
      $(this).backstretch($(this).attr('data-image-src'), {
        fade: 200
      });
    })


    // show/hide options for collection page
    $('.item_block_right_viewoptions').click(function() {
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
