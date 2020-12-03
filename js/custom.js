(function ($) {
  "use strict";

  var review = $('.room_hotels');
  if (review.length) {
    review.owlCarousel({
      items: 3,
      loop: true,
      dots: false,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
          nav: false
        }
      }
    });
  }
//
// $(".room_small>img").click(function(){
//
//     to.owl
//
//     ;})
  var room_select = $(".room_small>img");

  for (let i = 0; i<room_select.length; i++){
    $(room_select[i]).click(function(){
    review.trigger('to.owl.carousel',[i,300]);
    })
  }

// Go to the next item
$('.slick-next').click(function() {
    review.trigger('next.owl.carousel');
})
// Go to the previous item
$('.slick-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    review.trigger('prev.owl.carousel');
})

var client = $('.client_review_slider');
  if (client.length) {
    client.owlCarousel({
      items: 3,
      loop: true,
      dots: false,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: [
        '<i class="ti-angle-left"></i>',
        '<i class="ti-angle-right"></i>'
      ],
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        576: {
          items: 2,
          nav: false
        },
        768: {
          items: 2,
          nav: false

        },
        991: {
          items: 3,
          nav: true
        }
      }
    });
  }


  var event = $('.event_slider');
  if (event.length) {
    event.owlCarousel({
      items: 1,
      loop: true,
      dots: false,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: [
        '<i class="ti-angle-left"></i>',
        '<i class="ti-angle-right"></i>'
      ],
      responsive: {
        0: {
          nav: false
        },
        600: {
          nav: false
        },
        991: {
          nav: true
        }
      }
    });
  }
  
  var nc_select = $('.nc_select');
  if(nc_select.length){
    nc_select.niceSelect();
  }

  $('#datepicker_1').datepicker();
  $('#datepicker_2').datepicker();  
  $('#datepicker_3').datepicker();
  $('#datepicker_4').datepicker();  
  $('#datepicker_5').datepicker();
  $('#datepicker_6').datepicker();

  $('.gallery_img').magnificPopup({
    type: 'image',
    gallery:{
      enabled:true
    }
  });

  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu_iner').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu_iner').removeClass('menu_fixed animated fadeInDown');
    }
  });


 //------- Mailchimp js --------//  
function mailChimp() {
  $('#mc_embed_signup').find('form').ajaxChimp();
}
mailChimp();


}(jQuery));