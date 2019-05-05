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
    $('.bstretchMe, .collection_block_content_item, .maak_announcement_img, .gallery_block_gallery_img').each(function() {
      $(this).backstretch($(this).attr('data-image-src'), {
        fade: 200
      });
    })

    var clicked = false;

    $('.item_block_left').each(function() {

      var imgArrayString = $(this).data('image-array');
      var imgArray = imgArrayString.split(',');
      var heroImage = imgArray[0];

      console.log(imgArray);

        // originally goes here
        // $(this).backstretch(imgArray, {fade: 200, duration: 1000});

        // displays first image in the array instead
        $(this).backstretch(heroImage, {fade: 200});

    })

    var instance = $(".item_block_left").data("backstretch");

    // COLLECTIE PAGE TOGGLES
    $('.item_block_right_viewoptions').click(function() {

      clicked = !clicked;

      var isVisible = $( "#showOptions" ).is( ":visible" );
      var isHidden = $( "#showOptions" ).is( ":hidden" );

      $(this)
        .find('#showOptions').toggle();

      $(this)
        .find('#hideOptions').toggle();

        $("#showOptions:visible").css('display', 'inline-block');
        $("#hideOptions:visible").css('display', 'inline-block');

      $(this)
        .closest('.item_block_right')
        .toggleClass('item_block_right_selected');

        $(this)
          .closest('.item_block_right')
            .find('.item_block_right_details')
              .slideToggle(function() {
          instance.resize();
        });

        $(this)
          .toggleClass('item_block_right_viewoptions_selected');

      $('.block').toggleClass(function() {

      });

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

    var $bImage = '.banner_image';
    var $thatthat = '.catalog_content_banner';

    $($thatthat).on('mouseover', function(event){
      $($thatthat).not($(this)).find($bImage).addClass('non_hover');
      $($thatthat).not($(this)).find('.banner_title').css( "color", "#98838A" );
    });

    $($thatthat).on('mouseout', function(){
      $($thatthat).not($(this)).delay(5000).find($bImage).removeClass('non_hover');
      $($thatthat).not($(this)).delay(5000).find('.banner_title').css( "color", "black" );
    });



  },

  resize: function() {

    ditt.display();

  },

  display: function() {

  }


};
