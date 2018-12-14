/*!
 * One Confluence - WordPress Theme
 *
 */


;(function($, window, ScrollReveal, undefined){
    window.scrollReveal = new ScrollReveal({
    });

    var sticky = new Waypoint.Sticky({
        element: $('#header')[0]
    })

    var makeHeaderBlockFixedDown = new Waypoint({

            element: document.getElementById('header'),
            enabled: true, //here is the modified line
            handler: function(direction) {
                console.log(direction);
                if (direction === 'down') {
                    $('#header').removeClass('unstuck').addClass('stuck');
                }
                else {
                    $('#titleblock').css({
                    });
                }
            },
            offset: '0'
        }
    );



    /* Init Flickity - Homepage slider */
    $('.main-carousel').flickity({
        // options
        autoPlay: true,
        //fullscreen: true,
        lazyLoad: 1,
        cellAlign: 'left',
        wrapAround: true,
        contain: true
    });

    /* Magnific Popup */

    $('.gallery-item').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        gallery: { enabled:true }
        // other options
    });

    $('.projectGalleryItem').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        gallery: { enabled:true }
        // other options
    });



    // Carousels

    $("#team .owl-carousel").owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-caret-left fa-2x"></i><span class="next-prev hidden-sm hidden-xs">Previous</span> ','<span class="next-prev hidden-sm hidden-xs">Next</span><i class="fa fa-caret-right fa-2x"></i>']
    });

    $("#gallery .owl-carousel").owlCarousel({
        //items: 4,
        margin: 30,
        //autoWidth:false,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-caret-left fa-2x"></i> ','<i class="fa fa-caret-right fa-2x"></i>'],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:4,
                nav:true
            }
        }
    });

    /**
     * Check a href for an anchor. If exists, and in document, scroll to it.
     * If href argument ommited, assumes context (this) is HTML Element,
     * which will be the case when invoked by jQuery after an event
     */
    function scroll_if_anchor(href) {
        href = typeof(href) == "string" ? href : $(this).attr("href");

        // You could easily calculate this dynamically if you prefer
        var fromTop = 0;

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

    //Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.main-menu'
    });

    /*  Scroll to top
    ------------------------------------ */
    $("a[href='#page-top']").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        //        $("html, body").animate({scrollTop: 0}, {duration: 1000});
        return false;
    });

    //$('.parallax-window').parallax({imageSrc: 'http://plumbk.dev/wp-content/uploads/2016/09/CTA_background.jpg', position:'top left'});
    //We removed parallax in version 4 because the WHW content needed to be placed over the CTA background at the bottom just right and Parallax was proving difficult
    //to position the background image just the way we wanted.

// When our page loads, check to see if it contains and anchor
    scroll_if_anchor(window.location.hash);

// Intercept all anchor clicks

    $("body").on("click", "a", scroll_if_anchor);

    //  Start Waypoint.js triggers.

    if(!$('body').hasClass('page-template-blog-post-template-php')) {


        var makeHeaderBlockFixedDown = new Waypoint({

                element: document.getElementById('header'),
                enabled: true, //here is the modified line
                handler: function (direction) {
                    console.log(direction);
                    if (direction === 'down') {
                        $('#header').removeClass('unstuck').addClass('stuck');
                    }
                    else {
                        $('#titleblock').css({});
                    }
                },
                offset: '0'
            }
        );

        var makeHeaderBlockRelativeUp = new Waypoint({

                element: document.getElementById('purpose'),
                handler: function (direction) {
                    console.log(direction);
                    if (direction === 'up') {
                        $('#header').removeClass('stuck').addClass('unstuck');
                    }
                    else {
                        $('#titleblock').css('position', 'fixed');
                    }
                },
                offset: '-130'
            }
        );

        var changeHeaderClassDown = new Waypoint({
                element: document.getElementById('purpose-bottom'),
                handler: function (direction) {
                    console.log(direction);
                    if (direction === 'down') {
                        $('#pnav').addClass('white-bg');
                    }
                    else {
                        $('#titleblock').css({});
                    }
                },
                offset: 'bottom-in-view'
            }
        );

        var fixTitleblockUp = new Waypoint({

                element: document.getElementById('solutions'),
                handler: function (direction) {
                    console.log(direction);
                    if (direction === 'up') {
                        $('#titleblock').css({
                            'position': 'fixed',

                        });
                    }
                    else {
                        $('#titleblock').css('position', 'relative');
                    }
                },
                offset: 'bottom-in-view'
            }
        );

        var passionWaypointDown = new Waypoint({

                element: document.getElementById('passion'),
                handler: function (direction) {
                    if (direction === 'down') {
                        $('.js-tag').html($('#passion').data('title'));
                    }
                },
                offset: '0'
            }
        );

        var passionWaypointUp = new Waypoint({

                element: document.getElementById('passion'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#passion').data('title'));
                    }
                },
                offset: '200'
            }
        );

        /*var waypoint = new Waypoint({
                offset: (   ( $(window).height() / 2 ) - ( $('#art').height() / 2 )   ),
                element: document.getElementById('art'),
                handler: function(direction) {
                        $('.js-tag').html($('#art').data('title'));
                    }
            });*/

        var waypointArtDown = new Waypoint({

                element: document.getElementById('art'),
                handler: function (direction) {
                    if (direction === 'down') {
                        $('.js-tag').html($('#art').data('title'));
                    }
                },
                offset: '200'
            }
        );

        var waypointUp = new Waypoint({

                element: document.getElementById('art'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#art').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        /*var scienceWaypoint = new Waypoint({
            offset: $(window).height()/4,
            element: document.getElementById('science'),
            handler: function(direction) {
                $('.js-tag').html($('#science').data('title'));
            }
        });*/

        var waypointScienceDown = new Waypoint({

                element: document.getElementById('science'),
                handler: function (direction) {
                    if (direction === 'down') {
                        $('.js-tag').html($('#science').data('title'));
                    }
                },
                offset: '50%'
            }
        );

        var scienceWaypointUp = new Waypoint({
                element: document.getElementById('science'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#science').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        var creativeWaypoint = new Waypoint({
            offset: $(window).height() / 2,
            element: document.getElementById('creative'),
            handler: function (direction) {
                $('.js-tag').html($('#creative').data('title'));
            }
        });

        var creativeWaypointUp = new Waypoint({
                element: document.getElementById('creative'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#creative').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        var teamWaypoint = new Waypoint({
            offset: $(window).height() / 2,
            element: document.getElementById('team'),
            handler: function (direction) {
                $('.js-tag').html($('#team').data('title'));
            }
        });

        var teamWaypointUp = new Waypoint({
                element: document.getElementById('team'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#team').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        var solutionsWaypoint = new Waypoint({
            offset: $(window).height() / 2,
            element: document.getElementById('solutions'),
            handler: function (direction) {
                $('.js-tag').html($('#solutions').data('title'));
            }
        });

        var solutionsWaypointUp = new Waypoint({
                element: document.getElementById('team'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#team').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        var purposeWaypoint = new Waypoint({
            //offset: $(window).height()/2,
            element: document.getElementById('purpose'),
            handler: function (direction) {
                $('.js-tag').html($('#purpose').data('title'));
            },
            offset: 'bottom-in-view'
        });

        var purposeWaypointUp = new Waypoint({
                element: document.getElementById('solutions'),
                handler: function (direction) {
                    if (direction === 'up') {
                        $('.js-tag').html($('#solutions').data('title'));
                    }
                },
                offset: '5%'
            }
        );

        jQuery(function(){

            // passing options

            var controller = new ScrollMagic.Controller({loglevel: 3});

            // art image
            var artTrigger = new ScrollMagic.Scene({
                triggerElement:'#triggerArt',
                duration: 200
            })
                .setTween(".desaturate", 0.5, {filter:'grayscale(0)'}) // trigger a TweenMax.to tween
                //.addIndicators({name: "art (duration: 0)"}) // add indicators (requires plugin)
                .addTo(controller);

            var artTrigger = new ScrollMagic.Scene({
                triggerElement:'#triggerScience',
                duration: 150
            })
                .setTween(".desaturate2", 0.5, {filter:'grayscale(0)'}) // trigger a TweenMax.to tween
                //.addIndicators({name: "science (duration: 0)"}) // add indicators (requires plugin)
                .addTo(controller);

            var artTrigger = new ScrollMagic.Scene({
                triggerElement:'#triggerCreative',
                duration: 150
            })
                .setTween(".desaturate3", 0.5, {filter:'grayscale(0)'}) // trigger a TweenMax.to tween
                //.addIndicators({name: "creative (duration: 0)"}) // add indicators (requires plugin)
                .addTo(controller);

            var artTrigger = new ScrollMagic.Scene({
                triggerElement:'#triggerSolutions',
                duration: 100
            })
                .setTween(".desaturate4", 0.5, {filter:'grayscale(0)'}) // trigger a TweenMax.to tween
                //.addIndicators({name: "solutions (duration: 0)"}) // add indicators (requires plugin)
                .addTo(controller);

            //triggerElement
            var headerAnimation = new ScrollMagic.Scene({
                triggerElement:'#trigger-header',
                duration: 20
            })
            //add tween
                .setTween(".wian-header", 0.5, {opacity:'1.0'}) // trigger a TweenMax.to tween
                //.addIndicators({name: "header (duration: 0)"}) // add indicators (requires plugin)
                .addTo(controller);

        });
    }

}(jQuery, window, ScrollReveal));


