jQuery(document).ready(function () {
    'use strict';


    /* Progress Tracker */
    jQuery('body').progressTracker({

        // Allows for navigating between content sections
        linking: true,

        // "constant" = always visiable
        // "hover" = shows on mouse hover
        tooltip: "hover",

        // The number specified is added to the default value at which the tracker changes to the next section.
        positiveTolerance: 0,

        // The number specified is subtracted from the default value at which the tracker changes to the next section.
        negativeTolerance: 0,

        // Only displays the progress tracker when the user is between the top of the first section and the bottom of the last;
        // It is only shown when the tracker sections are in view.
        // Specify false if you want the tracker to always show.
        displayWhenActive: false,

        // Specify the value (in pixels) that you wish the progress tracker to be hidden when it is below that.
        disableBelow: 0,

        // Specifies what the plugin takes into account when deciding when to switch to the next section.
        // "tracker" or "viewport"
        tracking: "viewport"

    });

    /* Contact Form */
    $(function() {

        // Get the form.
        var form = $('#ajax-contact');

        // Get the messages div.
        var formMessages = $('#form-messages');

        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(formMessages).removeClass('alert alert-danger');
                    $(formMessages).addClass('alert alert-success');

                    // Set the message text.
                    $(formMessages).text(response);

                    // Clear the form.
                    $('#name').val('');
                    $('#email').val('');
                    $('#message').val('');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    $(formMessages).removeClass('alert alert-success');
                    $(formMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });

        });

    });

    /* Soft Scroll */
    $('ul.sf-menu, ul.icon-list').find('a').click(function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var $anchor = $(target).offset();
        $('body').stop().animate({
            scrollTop: $anchor.top
        }, 'slow');
    });

    /* Magnific Popup */

    jQuery('.gallery-item').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });


    jQuery(window).load(function () {

        /* Preloader */
        $('#preloader').fadeOut('slow',function(){$(this).remove();});

        /* Sticky Header */
        jQuery(".sticky-header").sticky({topSpacing: 0});

    });


    /* Off-Canvas Menu */

    (function() {

        var bodyEl = document.body,
            content = document.querySelector( '.content-wrap' ),
            openbtn = document.getElementById( 'open-button' ),
            closebtn = document.getElementById( 'close-button' ),
            isOpen = false;

        function init() {
            initEvents();
        }

        function initEvents() {
            openbtn.addEventListener( 'click', toggleMenu );
            if( closebtn ) {
                closebtn.addEventListener( 'click', toggleMenu );
            }

            // close the menu element if the target it´s not the menu element or one of its descendants..
            content.addEventListener( 'click', function(ev) {
                var target = ev.target;
                if( isOpen && target !== openbtn ) {
                    toggleMenu();
                }
            } );
        }

        function toggleMenu() {
            if( isOpen ) {
                classie.remove( bodyEl, 'show-menu' );
            }
            else {
                classie.add( bodyEl, 'show-menu' );
            }
            isOpen = !isOpen;
        }

        init();

    })();

    /* Stellar Parallax */

    jQuery(document).ready(function() {
        react_to_window();
    });

    var stellarActivated = false;

    jQuery(window).resize(function() {
        react_to_window();
    });

    function react_to_window() {
        if (jQuery(window).width() <= 1024) {
            if (stellarActivated == true) {
                jQuery(window).data('plugin_stellar').destroy();
                stellarActivated = false;
            }
        } else {
            if (stellarActivated == false) {

                jQuery.stellar({
                    horizontalScrolling: false,
                    responsive: true,
                    horizontalOffset: 0,
                    verticalOffset: 0,
                    scrollProperty: 'scroll',
                    parallaxBackgrounds: true
                });

                jQuery(window).data('plugin_stellar').init();
                stellarActivated = true;
            }
        }
    }

    /* Back to top */

    jQuery("#back-top").hide();

    jQuery(window).scroll(function () {
         if ($(this).scrollTop() > 100) {
             $('#back-top').fadeIn();
         } else {
             $('#back-top').fadeOut();
         }
    });

    jQuery('#back-top a').click(function () {
         $('body,html').animate({
             scrollTop: 0
         }, 600);
         return false;
    });

    /* Circle Progress */
    function animateElements() {
        $('.progressbar').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle').attr('data-percent');
            var percentage = parseInt(percent, 10) / parseInt(100, 10);
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle').circleProgress({
                    startAngle: -Math.PI / 2,
                    value: percent / 100,
                    thickness: 8,
                    fill: {
                        color: '#E84855'
                    }
                }).on('circle-animation-progress', function (event, progress, stepValue) {
                    $(this).find('div').text((stepValue*100).toFixed(1) + "%");
                }).stop();
            }
        });
    }

    // Show animated elements
    animateElements();
    $(window).scroll(animateElements);

    /* Animated Counter */

    jQuery('.count-container span').counterUp({
        delay: 10, // the delay time in ms
        time: 3000 // the speed time in ms
    });

    /* Google Analytics */

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    //ga('create', 'UA-40696437-12', 'auto');
    //ga('send', 'pageview');

    /* Google map Toggle */

    var gmapIsReady = false;

    jQuery('.gm-toggle-link').click(function() {
        if (!gmapIsReady) {
            initGmap();
        }
        jQuery('#gm-panel').slideToggle('slow');
    });

});








