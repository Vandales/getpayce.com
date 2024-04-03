$(document).ready(function () {

var headerHeight = $('header').innerHeight();
window.headerHeight = headerHeight

/* Hamburger click */

$('.hamburger').click(function(){

    if ($('#header-nav').css('display') == 'none') {

        $(this).parent().find('nav').slideDown(300).css({
            'top': headerHeight
        });
        $(this).find('svg').replaceWith('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.6667 2.68331L21.3167 0.333313L12 9.64998L2.68337 0.333313L0.333374 2.68331L9.65004 12L0.333374 21.3166L2.68337 23.6666L12 14.35L21.3167 23.6666L23.6667 21.3166L14.35 12L23.6667 2.68331Z" fill="#1C2228"/></svg>');

    } else{

        $(this).parent().find('nav').slideUp(300);
        $(this).find('svg').replaceWith('<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 20H30V16.6667H0V20ZM0 11.6667H30V8.33333H0V11.6667ZM0 0V3.33333H30V0H0Z" fill="#1C2228"/></svg>');

    }

});

/* Header animation */

var scrollPos = 0;
$(window).scroll(function(){
   var st = $(this).scrollTop();
   if (st > scrollPos){
     $('header').css({
        'position': 'relative',
        'top': '',
        'left': ''
    });
   } else {
     $('header').css({
        'position': 'fixed',
        'top': 0,
        'left': 0
    });
   }
   scrollPos = st;
   if (scrollPos == 0) {
        $('header').css({
        'position': 'relative',
        'top': '',
        'left': ''
    });
   } else {
    
   }
});

/* Top menu link click */

$('#top-menu a').click(function(){

    if($(window).width() <= 1024 ) {

        $('#header-nav').slideUp(300);
        $(this).closest('header').find('svg').replaceWith('<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 20H30V16.6667H0V20ZM0 11.6667H30V8.33333H0V11.6667ZM0 0V3.33333H30V0H0Z" fill="#1C2228"/></svg>');

    } else {

    }

});



/* Slow scrolling*/

$(function(){
    $("a[href^='#']").click(function(){

        var _href = $(this).attr("href");

        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;

    });
});

/* Animation */

$('.fadeBottom').viewportChecker({
    classToAdd: 'fadeBottom--animation', 
    classToAddForFullView: '', 
    classToRemove: '', 
    removeClassAfterAnimation: false,
    invertBottomOffset: true, 
    repeat: false,
    callbackFunction: function(elem, action){}, 
    scrollHorizontal: false,
});
$('.fadeIn').viewportChecker({
    classToAdd: 'fadeIn--animation', 
    classToAddForFullView: '', 
    classToRemove: '', 
    removeClassAfterAnimation: false,
    invertBottomOffset: true, 
    repeat: false,
    callbackFunction: function(elem, action){}, 
    scrollHorizontal: false,
});

/* Image height */

if ($(window).width() >= 769 ) {

    $('.third--screen .right').height(function(){

        return $(this).width() / 0.99;

    });

    $('.fifth-screen .right').height(function(){

        return $(this).width() / 1.15;

    });

    $('.schedule-demo .right').height(function(){

        return $(this).width() / 0.75;

    });

} else {

}

if ($(window).width() <= 768 ) {


    $('.third--screen .left .image').height(function(){

        return $(this).width() / 0.97;

    });

    $('.fifth-screen .left .image').height(function(){

        return $(this).width() / 1.146;

    });

} else {

}

/* Resize */

$(window).resize(function(){

/* Nav on desktop */

    if ($(window).width() >= 1025) {

        $('nav').css('display', 'flex');

    } else {

        $('nav').css('display', 'none')

    }

/* Image height resize*/

    if ($(window).width() >= 769 ) {

        $('.third--screen .right').height(function(){

            return $(this).width() / 0.99;

        });

        $('.fifth-screen .right').height(function(){

            return $(this).width() / 1.15;

        });

        $('.schedule-demo .right').height(function(){

            return $(this).width() / 0.75;

        });

    } else {
        
    }

    if ($(window).width() <= 768 ) {


        $('.third--screen .left .image').height(function(){

            return $(this).width() / 0.97;

        });

        $('.fifth-screen .left .image').height(function(){

            return $(this).width() / 1.146;

        });

    } else {

    }
});

});