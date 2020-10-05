document.addEventListener("DOMContentLoaded", function (event) {


    window.addEventListener("load", function (e) {
        // Navbar Toggle
const toggleMenu = document.querySelector('.js-menu-toggle');
const navWrapper = document.querySelector('.js-menu-wrapper');
let navTimeline = new TimelineMax({ paused: true });
navTimeline.to(navWrapper, 1.0, { yPercent: 100, })
    .staggerFrom('.js-stagger', 0.7,
        {
            autoAlpha: 0, ease: Sine.easeOut
        }, 0.4, 0.8)
    .reverse();

$(toggleMenu).click(function (e) {
 
    e.preventDefault();
    $(this).toggleClass('is-active');
    $('.navbar').toggleClass('is-active');
    $('html').toggleClass('no-scroll');
    navTimeline.reversed(!navTimeline.reversed());

});
// Navbar Toggle END





$(document).ready(function () {
    navNumbers();


    // show hovered li stuff
    $('.js-main-menu').on('mouseover', 'li', function () {
        showTarget($(this));
    });

    // show default .active li stuff
    $('.js-main-menu').on('mouseleave', backToDefault);

    // change active list item
    $('.js-main-menu').on('click', 'li', function () {
        changeActive($(this));
    });
});


// give the list items numbers
function navNumbers() {
    var sum = $('.js-main-menu li').length;
    var i = 1;
    var x = 0;

    $('.showcase-menu li').each(function () {
        $(this).attr('data-target', x);
        x++;
    });

    $('.js-main-menu li').each(function () {
        var number = ('0' + i).slice(-2);
        var numberElement = '<div class="number"><span>' + number + '</span></div>';
        $(this).prepend(numberElement);
        $(this).attr('data-target', i);
        i++;
    });
}
// show the hovered list item stuff
function showTarget(e) {
    $('.js-main-menu li').removeClass('hover');

    var target = $(e).attr('data-target');
    var showcaseHeight = $('.showcase-menu').outerHeight();

    showcaseHeight = (showcaseHeight * target) * -1;

    $('.showcase-menu').css({
        top: showcaseHeight
    });

    $(e).addClass('hover');
}

// show the list item stuff of .active
function backToDefault() {
    $('.js-main-menu li').removeClass('hover');

    var activeItem = $('.js-main-menu li.active');
    var target = activeItem.attr('data-target');
    var showcaseHeight = $('.showcase-menu').outerHeight();

    showcaseHeight = (showcaseHeight * target) * -1;

    $('.showcase-menu').css({
        top: showcaseHeight
    });

    activeItem.addClass('hover');
}


// change active list item
function changeActive(e) {
    $('.js-main-menu li').removeClass('active');
    $(e).addClass('active');
}






const items = document.querySelectorAll('.latest-projects-list .item')

items.forEach((el) => {
    const image = el.querySelector('.image-preview img ')

    el.addEventListener('mouseenter', (e) => {
        gsap.to(image, { autoAlpha: 1, ease: Power1.easeOut })
    })

    el.addEventListener('mouseleave', (e) => {
        gsap.to(image, { autoAlpha: 0, ease: Power1.easeOut })
    })

    el.addEventListener('mousemove', (e) => {
        gsap.set(image, {
            x: e.offsetX - 200,
            ease: Power1.easeOut
        })
    })
})
















//     // Scrollmagic
//     var controller = new ScrollMagic.Controller();

//     $(".portfolo-container").each(function () {
//         //Create Timeline
//         var tl = new TimelineMax();
//         tl.defaultEase = Power0.easeNone;
//         let parentDiv = $(this).find(".theme-backgroud"),
//             fade = $(this).find('.fadeAnim'),
//             popularImg = $(this).find('.bg-layer'),
//             bigCaption = $(this).find('.caption '),
//             shortNote = $(this).find('.details ');

//         // Animation
//         tl.from(parentDiv, 0.2,
//             {
//                 width: "0px",
//                 autoAlpha: 0,
//                 ease: Bounce.easeOuteaseOut,
//                 // ease: Power0.easeNone,
//             }, 0.5)
//         // .from(fade, 1.5,
//         //     {
//         //         autoAlpha: 0,
//         //         ease: Power2.easeIn,
//         //     })
//         // .from(bigCaption, 0.5, {
//         //     y: '-20%'
//         // }, '-=1')
//         // .from(shortNote, 0.5, {
//         //     y: '-20%'
//         // }, '-=1')

//         // .from(popularImg, 0.5,
//         //     {
//         //         ease: Power2.easeIn,
//         //         autoAlpha: 0
//         //     }, '-=1');


//         // Animation END

//         // Scroll Magic Function 

//         var scene = new ScrollMagic.Scene({
//             triggerElement: this,
//             triggerHook: 0.9,
//             reverse: false,
//         })
//             .setTween(tl)
//             .addIndicators(
//                 {
//                     colorTrigger: 'blue',
//                     name: 'profileAnim'
//                 }
//             )
//             .addTo(controller);

//         // Scroll Magic Function END
//     });
// });





    }, false);

});