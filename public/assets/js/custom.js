// ========================== Menu Toggle JS ==========================
// Menu Js
$('ul.slimmenu').slimmenu({
    resizeWidth: '1024',
    collapserTitle: 'MENU',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: '&raquo;'
});


$(document).ready(function () {
  $('.collapse-button').on('click', function () {
    $('body').toggleClass('body-fixed');
    $('.collapse-button').toggleClass('open');
    $('.slimmenu').toggleClass('show-nav');
  });
});


// ========================== On Scroll Add Class JS ==========================
$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
       $('.top-main-hdr').addClass('sticky-header');
    } else {
       $('.top-main-hdr').removeClass('sticky-header');
    }
});



// Owl Carousel Js
$(document).ready(function () {
	$('#explore_destination').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
    dots: false,
    autoplay: true,
    smartSpeed: 2000,
    autoplayTimeout: 7000,
    autoplayHoverPause: false, // Disable pause on hover
    responsive: {
      0: {
          items: 1
      },
      480: {
          items: 1
      },
      576: {
          items: 2
      },
      768: {
          items: 3
      },
      1200: {
          items: 4
      },
      1600: {
          items: 5
      }
    }
  });
});



// ========================== One Page Click Smooth Scroll JS ==========================
$('a[href*="#"]:not([href="#"]):not([href="#show"]):not([href="#hide"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 300);
      return false;
    }
  }
});

setTimeout(()=>{
  // uses HTML5 history API to manipulate the location bar
  history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
}, 5);