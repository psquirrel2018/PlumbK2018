
jQuery(function(){

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

    /*$("a.myLinkClass").click(function(e){
        e.preventDefault();
        //do something..
    });*/

    /*function goToByScroll(id){
        $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
    }*/

//triggerElement
/*var textAnimation = new ScrollMagic.Scene({
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

/*var borderAnimation1 = new ScrollMagic.Scene({
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
    */

/*jQuery('#scrollspy-progress').find('a').click(function(event) {
    event.preventDefault();
    var elem_id = $(this).attr('href');
    var move_to = $(elem_id).offset().top;
    $('html, body').animate({ scrollTop: move_to }, 800);
});*/

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

});