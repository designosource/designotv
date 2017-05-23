// NAVIGATION
$(document).ready(function() {
    // Animations
    /*TweenMax.to($('nav'), .8, {marginTop: '0', opacity: '1'});

     setTimeout(function(){
     TweenMax.to($('.team__items'), .8, {marginLeft: '0'});
     }, 50);*/

    // Nav
    $('.click').on('click', function() {
        if(!$(this).hasClass('active')) {
            $(this).toggleClass('active').siblings().removeClass('active');
        }
    });

    $('.wrap-programma').unslider({
        autoplay: true,
        delay: 5000,
        speed: 1000,
        arrows: {
          //  Unslider default behaviour
          prev: '<a class="unslider-arrow prev">Previous slide</a>',
          next: '<a class="unslider-arrow next">Next slide</a>',
        }
    });
});

// SMOOTH SCROLL
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        return false;
      }
    }
  });
});



$('audio, video').mediaelementplayer({
        success: function(player, node) {
        
          // Optional
            // $(player).closest('.mejs__container').attr('lang', mejs.i18n.language());
            
            // $('html').attr('lang', mejs.i18n.language());
            
            // More code
        }
    });
