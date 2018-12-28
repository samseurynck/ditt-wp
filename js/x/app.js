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
    // $('.nav_block_right_submenu li a').click(function() {
    //   var $this = $(this);
    //   var $navId = $this.attr('id');
    //   console.log($navId);
    //
    //   $(window).scrollTo('$navId)', 300, {
    //     axis:'y',
    //     easing:'easeOutSine',
    //     interrupt: true
    //   });
    // });

    // SCROLLING FOR HEADERS v1
    // $('.nav_block_right_submenu li a').on('click', function (el) {
    //   el.preventDefault();
    //
    //   var $this = $(this);
    //   var $navId = $this.attr('id');
    //   console.log($navId);
    //
    //   $('html, body').animate({
    //     scrollTop: $('#($navId)').offset().top
    //   }, 500, 'linear');
    // });

    // SCROLLING FOR HEADERS v2
    $('.nav_block_right_submenu li a[href*="#"]').on('click', function (e) {
      if ( $(e.target.hash).length ) {
        e.preventDefault();
        console.log($(this).attr('href'));

        $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
        }, 500, 'easeOutSine');
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
