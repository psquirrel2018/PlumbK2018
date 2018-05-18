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

    /*$('#header').waypoint('sticky', {
        direction: 'down',
        handler: function(direction) {
            console.log(direction);
            if (direction === 'down') {
                $('#header').removeClass('unstuck').addClass('stuck');
            }
            else {
                $('#titleblock').css({

                });
            }
        }
    });

    $('#header').waypoint('sticky', {
        direction: 'down',
        handler: function(direction) {
            alert(direction);
        }
    });*/

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

    // Carousels

    $("#team .owl-carousel").owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-caret-left fa-2x"></i> ','<i class="fa fa-caret-right fa-2x"></i>']
    });

    $("#gallery .owl-carousel").owlCarousel({
        items: 4,
        margin: 60,
        autoWidth:false,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-caret-left fa-2x"></i> ','<i class="fa fa-caret-right fa-2x"></i>']
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

    /*$("a.myLinkClass").click(function(e){
        e.preventDefault();
        //do something..
    });*/

    /*function goToByScroll(id){
        $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
    }*/


    //  Start Waypoint.js triggers.

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

    var makeHeaderBlockRelativeUp = new Waypoint({

            element: document.getElementById('purpose'),
            handler: function(direction) {
                console.log(direction);
                if (direction === 'up') {
                    $('#header').removeClass('stuck').addClass('unstuck');
                }
                else {
                    $('#titleblock').css('position','fixed');
                }
            },
            offset: '-130'
        }
    );


    /*var makeTitleblockRelative = new Waypoint({

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
            offset: 'bottom-in-view'
        }
    );*/

    /*var fixTitleblockBottom = new Waypoint({

            element: document.getElementById('name'),
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
    );*/


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

    /*var changeHeaderClassUp = new Waypoint({
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
    );*/

     var fixTitleblockUp = new Waypoint({

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
    );

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

    /*var waypointContactDown = new Waypoint({

            element: document.getElementById('purpose-bottom'),
            handler: function(direction) {
                if (direction === 'down') {
                    $('.dropline').toggleClass('current');
                }
            },
            offset: 'bottom-in-view'
        }
    );*/

}(jQuery, window, ScrollReveal));

jQuery(function(){
    //objects are always in curly brackets
    //var controller = new ScrollMagic.Controller({
    //    container:'body',
    //   addIndicators:true
    //});

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

    //triggerElement
    var textAnimation = new ScrollMagic.Scene({
        triggerElement:'#trigger1',
        duration: 20
    })
    //add tween
        .setTween(".tween1", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);


    var textFade = new ScrollMagic.Scene({
        triggerElement:'#fadeOut1',
        duration: 20
    })
    //add tween
        .setTween(".tween1", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation2 = new ScrollMagic.Scene({
        triggerElement:'#trigger2',
        duration: 20
    })
    //add tween
        .setTween(".tween2", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade2 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut2',
        duration: 20
    })
    //add tween
        .setTween(".tween2", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation3 = new ScrollMagic.Scene({
        triggerElement:'#trigger3',
        duration: 20
    })
    //add tween
        .setTween(".tween3", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "3 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade3 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut3',
        duration: 20
    })
    //add tween
        .setTween(".tween3", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "3 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    // Start Paragraph 2

    var textAnimation4 = new ScrollMagic.Scene({
        triggerElement:'#trigger4',
        duration: 20
    })
    //add tween
        .setTween(".tween4", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "4 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var pbAnimation4 = new ScrollMagic.Scene({
        triggerElement:'#pbTrigger',
        duration: 20
    })
    //add tween
        .setTween(".tween-pb", 0.5, {opacity:'1.0'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "4 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var etAnimation11 = new ScrollMagic.Scene({
        triggerElement:'#etTrigger',
        duration: 20
    })
    //add tween
        .setTween(".tween-et", 0.5, {opacity:'1.0'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "et (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade4 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut4',
        duration: 20
    })
    //add tween
        .setTween(".tween4", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "4 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation5 = new ScrollMagic.Scene({
        triggerElement:'#trigger5',
        duration: 20
    })
    //add tween
        .setTween(".tween5", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade5 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut5',
        duration: 20
    })
    //add tween
        .setTween(".tween5", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation6 = new ScrollMagic.Scene({
        triggerElement:'#trigger6',
        duration: 20
    })
    //add tween
        .setTween(".tween6", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade6 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut6',
        duration: 20
    })
    //add tween
        .setTween(".tween6", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);


    // Start Paragraph3


    var textAnimation7 = new ScrollMagic.Scene({
        triggerElement:'#trigger7',
        duration: 20
    })
    //add tween
        .setTween(".tween7", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "4 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade7 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut7',
        duration: 20
    })
    //add tween
        .setTween(".tween7", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "4 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation8 = new ScrollMagic.Scene({
        triggerElement:'#trigger8',
        duration: 20
    })
    //add tween
        .setTween(".tween8", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade8 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut8',
        duration: 20
    })
    //add tween
        .setTween(".tween8", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "8 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textAnimation9 = new ScrollMagic.Scene({
        triggerElement:'#trigger9',
        duration: 20
    })
    //add tween
        .setTween(".tween9", 0.5, {color:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "9 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var textFade9 = new ScrollMagic.Scene({
        triggerElement:'#fadeOut9',
        duration: 20
    })
    //add tween
        .setTween(".tween9", 0.5, {color:'#cccccc'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "6 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    // Signature Tween
    /*var signatureAnimation10 = new ScrollMagic.Scene({
        triggerElement:'#trigger10'
    })
    //add tween
        .setTween(".wian-signature", 0.5, {opacity:'1.0'}) // trigger a TweenMax.to tween
        .addIndicators({name: "10 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);*/

    /*var textFade9 = new ScrollMagic.Scene({
     triggerElement:'#fadeOut10'
     })
     //add tween
     .setTween(".wian-signature", 0.5, {opacity:'0.25'}) // trigger a TweenMax.to tween
     .addIndicators({name: "10 (duration: 0)"}) // add indicators (requires plugin)
     .addTo(controller);*/
    //methods always start with a lower class letter

    var borderAnimation1 = new ScrollMagic.Scene({
        triggerElement:'#border1'
    })
    //add tween
        //document.getElementById("myDiv").style.borderColor = "red";
        .setTween(".border-left1", 0.5, {borderColor:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "10 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var borderAnimation2 = new ScrollMagic.Scene({
        triggerElement:'#border2'
    })
    //add tween
        .setTween(".border-left2", 0.5, {borderColor:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "10 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var borderAnimation3 = new ScrollMagic.Scene({
        triggerElement:'#border3'
    })
    //add tween
        .setTween(".border-left3", 0.5, {borderColor:'#000000'}) // trigger a TweenMax.to tween
        //.addIndicators({name: "10 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

    var bottomPbTrigger = new ScrollMagic.Scene({
        triggerElement:'#pbTrigger2'
    })
    //add tween
        .setTween(".pb-container", 1.0, {opacity:'1.0'}) // trigger a TweenMax.to tween
       //.addIndicators({name: "pb bottom (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

});

/*jQuery('#scrollspy-progress').find('a').click(function(event) {
    event.preventDefault();
    var elem_id = $(this).attr('href');
    var move_to = $(elem_id).offset().top;
    $('html, body').animate({ scrollTop: move_to }, 800);
});*/
