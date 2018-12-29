$(document).ready(function() {
  ditt.init();
  console.log('ditt.init')
});

// Just in case the #main content hasn't been fully loaded
$(window).load(function() {
  console.log('ditt.display')

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

    // BACKSTRETCH
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

    // SCROLLING FOR HEADERS
    $('.nav_block_right .nav_block_right_submenu li a[href*="#"]').on('click', function (e) {
      console.log("clicked")
      // only executes if the target hash has a length of non-zero (to be sure it exists)
      if ( $(e.target.hash).length ) {
        console.log("has length")
        // prevents the default action of <a>, which is to take the browser to a new URL
        e.preventDefault();

        $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
        }, 500, 'easeOutSine');
        console.log("scrolling")
      };
    });
  },

  resize: function() {

    console.log('Resizing...');

    ditt.display();

  },

  display: function() {

    console.log('Displaying...');

  }


};
