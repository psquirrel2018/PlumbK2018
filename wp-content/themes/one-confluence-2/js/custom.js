/*!
 * One Confluence - WordPress Theme
 *
 */
/* homepage svg animation */
initAnimation({
    time : 5, // sec., timing of pendulum swing
    wrtng: 2, // sec.
    blck : "#animation" // point to SVG id
});

;(function($, window, ScrollReveal, undefined){
    window.scrollReveal = new ScrollReveal({

    });
    scrollReveal.reveal($('.intro', '#welcome').get(0), {
        delay    : 200,
        duration    : 1600,
        distance : '800px',
        easing   : 'ease-in-out',
        rotate   : { z: 10 },
        scale    : 1.7
    });
    scrollReveal.reveal($('.text-overlay', '#art').get(0), {
        //            'bottom', 'left', 'top', 'right'
        origin      : 'bottom',

//            Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
        distance    : '280px',

//            Time in milliseconds.
        duration    : 1600,
        delay       : 400,

//            Starting angles in degrees, will transition from these values to 0 in all axes.
        rotate      : { x: 0, y: 0, z: 0 },

//            Starting opacity value, before transitioning to the computed opacity.
        opacity     : 0,

//            Starting scale value, will transition from this value to 1
        scale       : 0.9,

//            Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        easing      : 'cubic-bezier(0.6, 0.2, 0.1, 1)',

//            true/false to control reveal animations on mobile.
        mobile      : true,

//            true:  reveals occur every time elements become visible
//            false: reveals occur once as elements become visible
        reset       : false,

//            'always' — delay for all reveal animations
//            'once'   — delay only the first time reveals occur
//            'onload' - delay only for animations triggered by first load
        useDelay    : 'always',

//            Change when an element is considered in the viewport. The default value
//            of 0.20 means 20% of an element must be visible for its reveal to occur.
        viewFactor  : 0.2,

//            Pixel values that alter the container boundaries.
//            e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
//            --
//            Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
        viewOffset  : { top: 200, right: 0, bottom: 0, left: 0 },
    });
    scrollReveal.reveal($('.text-overlay', '#science').get(0), {
        //            'bottom', 'left', 'top', 'right'
        origin      : 'bottom',

//            Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
        distance    : '280px',

//            Time in milliseconds.
        duration    : 1600,
        delay       : 400,

//            Starting angles in degrees, will transition from these values to 0 in all axes.
        rotate      : { x: 0, y: 0, z: 0 },

//            Starting opacity value, before transitioning to the computed opacity.
        opacity     : 0,

//            Starting scale value, will transition from this value to 1
        scale       : 0.9,

//            Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        easing      : 'cubic-bezier(0.6, 0.2, 0.1, 1)',

//            true/false to control reveal animations on mobile.
        mobile      : true,

//            true:  reveals occur every time elements become visible
//            false: reveals occur once as elements become visible
        reset       : false,

//            'always' — delay for all reveal animations
//            'once'   — delay only the first time reveals occur
//            'onload' - delay only for animations triggered by first load
        useDelay    : 'always',

//            Change when an element is considered in the viewport. The default value
//            of 0.20 means 20% of an element must be visible for its reveal to occur.
        viewFactor  : 0.6,

//            Pixel values that alter the container boundaries.
//            e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
//            --
//            Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
        viewOffset  : { top: 200, right: 0, bottom: 0, left: 0 },
    });
    scrollReveal.reveal($('.text-overlay', '#creative').get(0), {
        //            'bottom', 'left', 'top', 'right'
        origin      : 'bottom',

//            Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
        distance    : '280px',

//            Time in milliseconds.
        duration    : 1600,
        delay       : 1200,

//            Starting angles in degrees, will transition from these values to 0 in all axes.
        rotate      : { x: 0, y: 0, z: 0 },

//            Starting opacity value, before transitioning to the computed opacity.
        opacity     : 0,

//            Starting scale value, will transition from this value to 1
        scale       : 0.9,

//            Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        easing      : 'cubic-bezier(0.6, 0.2, 0.1, 1)',

//            true/false to control reveal animations on mobile.
        mobile      : true,

//            true:  reveals occur every time elements become visible
//            false: reveals occur once as elements become visible
        reset       : false,

//            'always' — delay for all reveal animations
//            'once'   — delay only the first time reveals occur
//            'onload' - delay only for animations triggered by first load
        useDelay    : 'always',

//            Change when an element is considered in the viewport. The default value
//            of 0.20 means 20% of an element must be visible for its reveal to occur.
        viewFactor  : 0.6,

//            Pixel values that alter the container boundaries.
//            e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
//            --
//            Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
        viewOffset  : { top: 200, right: 0, bottom: 0, left: 0 },
    });

    scrollReveal.reveal($('.text-overlay', '#team').get(0), {
        //            'bottom', 'left', 'top', 'right'
        origin      : 'bottom',

//            Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
        distance    : '280px',

//            Time in milliseconds.
        duration    : 1600,
        delay       : 1200,

//            Starting angles in degrees, will transition from these values to 0 in all axes.
        rotate      : { x: 0, y: 0, z: 0 },

//            Starting opacity value, before transitioning to the computed opacity.
        opacity     : 0,

//            Starting scale value, will transition from this value to 1
        scale       : 0.9,

//            Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        easing      : 'cubic-bezier(0.6, 0.2, 0.1, 1)',

//            true/false to control reveal animations on mobile.
        mobile      : true,

//            true:  reveals occur every time elements become visible
//            false: reveals occur once as elements become visible
        reset       : false,

//            'always' — delay for all reveal animations
//            'once'   — delay only the first time reveals occur
//            'onload' - delay only for animations triggered by first load
        useDelay    : 'always',

//            Change when an element is considered in the viewport. The default value
//            of 0.20 means 20% of an element must be visible for its reveal to occur.
        viewFactor  : 0.6,

//            Pixel values that alter the container boundaries.
//            e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
//            --
//            Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
        viewOffset  : { top: 200, right: 0, bottom: 0, left: 0 },
    });

    scrollReveal.reveal($('.text-overlay', '#solutions').get(0), {
        //            'bottom', 'left', 'top', 'right'
        origin      : 'bottom',

//            Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
        distance    : '280px',

//            Time in milliseconds.
        duration    : 1600,
        delay       : 1200,

//            Starting angles in degrees, will transition from these values to 0 in all axes.
        rotate      : { x: 0, y: 0, z: 0 },

//            Starting opacity value, before transitioning to the computed opacity.
        opacity     : 0,

//            Starting scale value, will transition from this value to 1
        scale       : 0.9,

//            Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
        easing      : 'cubic-bezier(0.6, 0.2, 0.1, 1)',

//            true/false to control reveal animations on mobile.
        mobile      : true,

//            true:  reveals occur every time elements become visible
//            false: reveals occur once as elements become visible
        reset       : false,

//            'always' — delay for all reveal animations
//            'once'   — delay only the first time reveals occur
//            'onload' - delay only for animations triggered by first load
        useDelay    : 'always',

//            Change when an element is considered in the viewport. The default value
//            of 0.20 means 20% of an element must be visible for its reveal to occur.
        viewFactor  : 0.6,

//            Pixel values that alter the container boundaries.
//            e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
//            --
//            Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
        viewOffset  : { top: 200, right: 0, bottom: 0, left: 0 },
    });

    $(document).ready(function() {

        $(window).scroll(function () {
            //if you hard code, then use console
            //.log to determine when you want the
            //nav bar to stick.
            console.log($(window).scrollTop())
            if ($(window).scrollTop() > 800) {
                $('#header').addClass('navbar-fixed-top');
            }
            if ($(window).scrollTop() < 281) {
                $('#header').removeClass('navbar-fixed-top');
            }
        });
    });


    $(document).ready(function ($) {


        $('body').css('padding-top', function () {
            if ($(window).width() > 991) {
                return $('.header').outerHeight();
            } else {
                return '0';
            }
        });


        /*$('.header').css({'top': stickyTop});         */

        //Menu-top bar show/hide animation
        $('.top_strip').addClass('top_strip_visible');
        $('.toggle_strip').click(function () {
            var target = $('#home');
            if (target.is(':visible')) {
                target.slideUp('slow', function () {
                    $('.top_strip').removeClass('top_strip_visible');
                    $('body').animate({
                        'padding-top': $('.header').outerHeight()
                    }, 1000);
                    $('.toggle_strip').animate({
                        top: '17px'
                    }, 1000);

                });
            } else {
                target.slideDown('slow', function () {
                    $('.top_strip').addClass('top_strip_visible');
                    $('body').animate({
                        'padding-top': $('.header').outerHeight()
                    }, 1000);
                    $('.toggle_strip').animate({
                        top: '55px'
                    }, 1000);

                });
            }
        });

    // Mean-menu
        $('#menu .nav-menu').meanmenu({
            meanScreenWidth: "991"
        });
    // Mean-menu
        $('#menu_sub .nav-menu').meanmenu({
            meanScreenWidth: "991"
        });

        if ($(window).width() < 991) {
            $('.mean-nav #one_menu').onePageNav();
        } else {
            $('#one_menu').onePageNav();
        }
        $(window).resize(On_Resize);

        $('ul.sf-menu').superfish();

        //Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.main-menu'
        });
    //Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function () {
            $('.navbar-toggle:visible').click();
        });

        /*  Scroll to top
         /* ------------------------------------ */
        $("a[href='#page-top']").click(function () {
            $("html, body").animate({scrollTop: 0}, "slow");
    //        $("html, body").animate({scrollTop: 0}, {duration: 1000});
            return false;
        });

    /* Slit Slider Init
        $(function () {
            var Page = (function () {
                var $navArrows = $('#nav-arrows'),
                        $nav = $('#nav-dots > span'),
                        slitslider = $('#slider').slitslider({
                    onBeforeChange: function (slide, pos) {
                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');
                    }
                }),
                        init = function () {
                            initEvents();
                        },
                        initEvents = function () {
                            // add navigation events
                            $navArrows.children(':last').on('click', function () {
                                slitslider.next();
                                return false;
                            });
                            $navArrows.children(':first').on('click', function () {
                                slitslider.previous();
                                return false;
                            });
                            $nav.each(function (i) {
                                $(this).on('click', function (event) {
                                    var $dot = $(this);
                                    if (!slitslider.isActive()) {
                                        $nav.removeClass('nav-dot-current');
                                        $dot.addClass('nav-dot-current');
                                    }
                                    slitslider.jump(i + 1);
                                    return false;
                                });
                            });
                        };
                return {init: init};
            })();
            Page.init();
        });*/


    });

    function On_Resize() {
        $('body').css('padding-top', function () {
            if ($(window).width() > 991) {
                return $('.header').outerHeight();
            } else {
                return '0';
            }
        });
        if ($("#wpadminbar").length) {
            if ($(window).width() < 765) {
                stickyTop = 46;
            } else {
                stickyTop = 32;
            }
        }
        else {
            stickyTop = 0;
        }

        $('.header').css({'top': stickyTop});

        if ($(window).width() < 991) {
            $('.mean-nav #onepage_menu').onePageNav();
        } else {
            $('#onepage_menu').onePageNav();
        }
    }



    // Carousels

    $("#team .owl-carousel").owlCarousel({
        items: 1,
        margin: 0,
        loop: false,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-arrow-left fa-2x"></i>','<i class="fa fa-arrow-right fa-2x"></i>']
    });

    /**
     * Check a href for an anchor. If exists, and in document, scroll to it.
     * If href argument ommited, assumes context (this) is HTML Element,
     * which will be the case when invoked by jQuery after an event
     */
    function scroll_if_anchor(href) {
        href = typeof(href) == "string" ? href : $(this).attr("href");

        // You could easily calculate this dynamically if you prefer
        var fromTop = 175;

        // If our Href points to a valid, non-empty anchor, and is on the same page (e.g. #foo)
        // Legacy jQuery and IE7 may have issues: http://stackoverflow.com/q/1593174
        if(href.indexOf("#") == 0  && href != '#myModal') {
            var $target = $(href);

            // Older browser without pushState might flicker here, as they momentarily
            // jump to the wrong position (IE < 10)
            if($target.length) {
                $('html, body').animate({ scrollTop: $target.offset().top - fromTop });
                if(history && "pushState" in history) {
                    history.pushState({}, document.title, window.location.pathname + href);
                    return false;
                }
            }
        }
    }

// When our page loads, check to see if it contains and anchor
    scroll_if_anchor(window.location.hash);

// Intercept all anchor clicks
    $("body").on("click", "a", scroll_if_anchor);


}(jQuery, window, ScrollReveal));




//Masonry javascript for auto-adjust position of homepage-blogs

//    $(window).resize(function_masonary);
//});

/*function function_masonary() {
    if (jQuery(window).width() > 991) {
        $('.homepage_blogs').masonry({
            itemSelector: '.post_item_wrapper'

        });
        $('.homepage_blogs > div').each(function () {
            $(this).css('position', 'absolute');
        });
    } else {
        $('.homepage_blogs').removeAttr('data-masonry');
        $('.homepage_blogs > div').each(function () {
            $(this).css('position', 'static');
        });
    }
}
jQuery(window).load(function () {
    function_masonary();
    var headerHeight;
    jQuery('.current').removeClass('current');
    jQuery('#onepage_menu a[href$="' + window.location.hash + '"]').parent('li').addClass('current');
    if (jQuery(window).width() >= 751) {
        headerHeight = jQuery('.header').outerHeight();
    } else {
        headerHeight = 0;
    }
    if ($("#wpadminbar").length) {
        if ($(window).width() < 765) {
            stickyTop = 46;
        } else {
            stickyTop = 32;
        }
    }
    else {
        stickyTop = 0;
    }
    if (location.pathname.replace(/^\//, '') == window.location.pathname.replace(/^\//, '') && location.hostname == window.location.hostname) {
        var target = jQuery(window.location.hash);
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top - headerHeight + 10 - stickyTop
            }, {
                duration: 2000,
                easing: 'linear'
            });
            return false;
        }
    }
});*/



