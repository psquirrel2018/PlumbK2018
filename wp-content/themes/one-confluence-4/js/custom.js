/*!
 * One Confluence - WordPress Theme
 *
 */

/* Open when someone clicks on the span element
function openNav() {
    document.getElementById("myNav").style.width = "auto";
};*/

/* Close when someone clicks on the "x" symbol inside the overlay
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
};*/

;(function($, window, ScrollReveal, undefined){
    window.scrollReveal = new ScrollReveal({

    });

    // Carousels

    $("#team .owl-carousel").owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-chevron-left fa-2x"></i> ','<i class="fa fa-chevron-right fa-2x"></i>']
    });


    /**
     * Check a href for an anchor. If exists, and in document, scroll to it.
     * If href argument ommited, assumes context (this) is HTML Element,
     * which will be the case when invoked by jQuery after an event
     */
    function scroll_if_anchor(href) {
        href = typeof(href) == "string" ? href : $(this).attr("href");

        // You could easily calculate this dynamically if you prefer
        var fromTop = 200;

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

    // Mean-menu
    $('#menu .nav-menu').meanmenu({
        meanScreenWidth: "991"
    });
    // Mean-menu
    $('#menu_sub .nav-menu').meanmenu({
        meanScreenWidth: "991"
    });

    if ($(window).width() < 480) {
        $('header').addClass('stuck');
    } else {

    }

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
     /* ------------------------------------
    $("a[href='#page-top']").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        //        $("html, body").animate({scrollTop: 0}, {duration: 1000});
        return false;
    });

    $('.parallax-window').parallax({imageSrc: 'http://knssandbox.com/pks4/wp-content/uploads/2017/03/concreteWall-ladder-st2.jpg'});*/

// When our page loads, check to see if it contains and anchor
    scroll_if_anchor(window.location.hash);

// Intercept all anchor clicks

    $("body").on("click", "a", scroll_if_anchor);

    var makeHeaderBlockFixedDown = new Waypoint({

            element: document.getElementById('header'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'down') {
                    $('#header').removeClass('unstuck').addClass('stuck');
                }
                else {
                    /*$('#titleblock').css('position','fixed');*/
                }
            },
            offset: '0'
        }
    );

    var makeHeaderBlockRelativeUp = new Waypoint({

            element: document.getElementById('purpose'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'up') {
                    $('#header').removeClass('stuck').addClass('unstuck');
                }
                else {
                    /*$('#titleblock').css('position','fixed');*/
                }
            },
            offset: '-130'
        }
    );


    var makeTitleblockRelative = new Waypoint({

            element: document.getElementById('solutions'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'down') {
                    $('#titleblock').removeClass('titleblocks-fixed').addClass('titleblocks-rel');
                }
                else {
                    $('#titleblock').css({

                    });
                }
            },
            offset: 'bottom-in-view' /*-270*/
        }
    );

    var fixTitleblockBottom = new Waypoint({

            element: document.getElementById('contact'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'up') {
                    $('#titleblock').removeClass('titleblocks-rel').addClass('titleblocks-fixed');
                }
                else {
                    $('#titleblock').css({

                    });
                }
            },
            offset: 'bottom-in-view'
        }
    );


    var changeHeaderClassDown = new Waypoint({
            element: document.getElementById('purpose-bottom'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'down') {
                    $('#pnav').addClass('white-bg');
                }
                else {
                    $('#titleblock').css({

                    });
                }
            },
            offset: 'bottom-in-view'
        }
    );

    var changeHeaderClassUp = new Waypoint({
            element: document.getElementById('book-end'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'up') {
                    $('#pnav').removeClass('white-bg');
                }
                else {
                    $('#titleblock').css({

                    });
                }
            },
            offset: 'bottom-in-view'
        }
    );
    /* var fixTitleblockUp = new Waypoint({

            element: document.getElementById('solutions'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'up') {
                    $('#titleblock').css({
                        'position':'fixed',

                    });
                }
                else {
                    $('#titleblock').css('position','relative');
                }
            },
            offset: 'bottom-in-view'
        }
    );*/

    var passionWaypointDown = new Waypoint({

            element: document.getElementById('passion'),
            handler: function(direction) {
                if (direction === 'down') {
                    $('.js-tag').html($('#passion').data('title'));
                }
            },
            offset: '0'
        }
    );

    var passionWaypointUp = new Waypoint({

            element: document.getElementById('passion'),
            handler: function(direction) {
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
            handler: function(direction) {
                if (direction === 'down') {
                    $('.js-tag').html($('#art').data('title'));
                }
            },
            offset: '200'
        }
    );

    var waypointUp = new Waypoint({

            element: document.getElementById('art'),
            handler: function(direction) {
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
            handler: function(direction) {
                if (direction === 'down') {
                    $('.js-tag').html($('#science').data('title'));
                }
            },
            offset: '50%'
        }
    );

    var scienceWaypointUp = new Waypoint({
            element: document.getElementById('science'),
            handler: function(direction) {
                if (direction === 'up') {
                    $('.js-tag').html($('#science').data('title'));
                }
            },
            offset: '5%'
        }
    );

    var creativeWaypoint = new Waypoint({
        offset: $(window).height()/2,
        element: document.getElementById('creative'),
        handler: function(direction) {
            $('.js-tag').html($('#creative').data('title'));
        }
    });

    var creativeWaypointUp = new Waypoint({
            element: document.getElementById('creative'),
            handler: function(direction) {
                if (direction === 'up') {
                    $('.js-tag').html($('#creative').data('title'));
                }
            },
            offset: '5%'
        }
    );

    var teamWaypoint = new Waypoint({
        offset: $(window).height()/2,
        element: document.getElementById('team'),
        handler: function(direction) {
            $('.js-tag').html($('#team').data('title'));
        }
    });

    var teamWaypointUp = new Waypoint({
            element: document.getElementById('team'),
            handler: function(direction) {
                if (direction === 'up') {
                    $('.js-tag').html($('#team').data('title'));
                }
            },
            offset: '5%'
        }
    );

    var solutionsWaypoint = new Waypoint({
        offset: $(window).height()/2,
        element: document.getElementById('solutions'),
        handler: function(direction) {
            $('.js-tag').html($('#solutions').data('title'));
        }
    });

    var solutionsWaypointUp = new Waypoint({
            element: document.getElementById('team'),
            handler: function(direction) {
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
        handler: function(direction) {
            $('.js-tag').html($('#purpose').data('title'));
        },
        offset: 'bottom-in-view'
    });

    var purposeWaypointUp = new Waypoint({
            element: document.getElementById('solutions'),
            handler: function(direction) {
                if (direction === 'up') {
                    $('.js-tag').html($('#solutions').data('title'));
                }
            },
            offset: '5%'
        }
    );

    var waypointContactDown = new Waypoint({

            element: document.getElementById('purpose-bottom'),
            handler: function(direction) {
                //if (direction === 'down') {
                    $('.dropline').toggleClass('current');
                //}
            },
            offset: 'bottom-in-view'
        }
    );

}(jQuery, window, ScrollReveal));







