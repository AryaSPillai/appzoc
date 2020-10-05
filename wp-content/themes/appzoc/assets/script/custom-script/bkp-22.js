// Constants
let screenWidth = $(document).width();
let containerWidth = $('.container').width();

// Right Aligned Slider
$(window).on('load resize', function (e) {
    sliderNegativeRight()
});

function sliderNegativeRight() {
    if (screenWidth > 767) {

        let diffContainer = ((screenWidth - containerWidth) / 2) * -1;
        $('.js-negative-spacing').css("margin-right", diffContainer);
    }
}
// Right Aligned Slider

// Window Scroll Header
$(window).on('load scroll', function () {
    let scrollpos = $(window).scrollTop();
    let navHeight = $('.navbar').height();
    if (scrollpos > navHeight) {
        $('.navbar').addClass('nav-scrolled');
        $('.fixed-qk-button ').addClass('visible ');
    }
    else {
        $('.navbar').removeClass('nav-scrolled');
        $('.fixed-qk-button ').removeClass('visible ');
    }

});
// Window Scroll Header END

// Counter
$(function () {
    var $animCounter = $('.hm-about-us');
    var $window = $(window);
    $window.scroll(function () {
        if ($animCounter.is(":in-viewport")) {
            $('.counter-value').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
            });
        }
    });
});
// Counter END


// DOM Ready
$(document).ready(function () {
    // Awwards Carousel
    $('.js-awwards-slider').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1200,
        nav: false,
        loop: true,
        dots: true,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 3,
            },
            1024: {
                items: 3,
            }
        }
    });
    // Awwards Carousel END

    // About Us Slider
    $('.js-about-slider').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1200,
        nav: false,
        loop: true,
        dots: false,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 2,
            },
            1024: {
                items: 2,
            }
        }
    });
    let navNextEl = document.getElementById('js-next-el');
    let navPrevEl = document.getElementById('js-prev-el');
    $(navNextEl).click(function () {
        $('.js-about-slider').trigger('next.owl.carousel');
    });

    $(navPrevEl).click(function () {
        $('.js-about-slider').trigger('prev.owl.carousel');
    });
    // About Us Slider End


    // Team Carousel About
    $('.js-team-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1200,
        nav: false,
        loop: true,
        mouseDrag: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dotsContainer: '#customDots',
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });
    let navNextSlide = document.getElementById('js-nxt-el');
    let navPrevSlide = document.getElementById('js-prv-el');
    $(navNextSlide).click(function () {
        $('.js-team-carousel').trigger('next.owl.carousel');
    });

    $(navPrevSlide).click(function () {
        $('.js-team-carousel').trigger('prev.owl.carousel');
    });
    // Team Carousel About END

    // Project Slider
    $('.js-project-slider').owlCarousel({
        autoplay: false,
        autoplayTimeout: 4000,
        smartSpeed: 1200,
        nav: false,
        loop: true,
        dots: true,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 2,
            },
            1024: {
                items: 2,
            }
        }
    });
    let navNext = document.getElementById('js-next-slide');
    let navPrev = document.getElementById('js-prev-slide')
    $(navNext).click(function () {
        $('.js-project-slider').trigger('next.owl.carousel');
    });

    $(navPrev).click(function () {
        $('.js-project-slider').trigger('prev.owl.carousel');
    });
    //Project Slider END

    // Slider JS Appscreen
    $('.js-app-screen').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            768: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
    // Slider JS Appscreen END

    // Marquee
    $('.marquee-left').marquee({
        duration: 20000,
        delayBeforeStart: 0,
        duplicated: true,
        gap: 60,
    });
    $('.marquee-right').marquee({
        duration: 20000,
        delayBeforeStart: 0,
        direction: 'right',
        duplicated: true,
        gap: 60,
    });
    // Marquee END

    // AOS Animation   
    AOS.init(
        {
            easing: 'ease-out-back',
            duration: 1000,
            once: true,
        }
    );
    // AOS Animation END

    // Contact Page
    $('.js-input').keyup(function () {
        if ($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });
    $('#buttonFileInput').click(function (e) {
        e.preventDefault();
        let disabledInput = document.getElementById('fileInputEl');
        disabledInput.click();
    });
    // Contact Page END


    // Barba JS
    $(document).ready(function () {
        function delay(n) {
            n = n || 2500;
            return new Promise((done) => {
                setTimeout(() => {
                    done();
                }, n);
            });
        }

        function pageTransition() {
            var tl = gsap.timeline();
            tl
                .to('.control-num', 0.5, {
                    x: -100,
                    autoAlpha: 0
                })
                .to(".js-slider-block", {
                    duration: 1.2,
                    opacity: 0,
                    y: '-100px',
                    ease: "Expo.easeInOut",
                });

            tl.set(".js-slider-block", { opacity: 1 });
        }

        function contentAnimation() {

            installMediaQueryWatcher("(min-width: 768px)", function (matches) {

                var tl = gsap.timeline();
                if (matches) {
                    TweenLite.set('.sub-page-banner .intro-title', {
                        x: 200
                    });
                    tl.to(".hero-banner", 2,
                        {
                            ease: "Power0.easeNone",
                            css:
                            {
                                width: "100%"
                            }
                        }
                    ).to('.sub-page-banner .intro-title', 0.5, {
                        x: 0,
                        ease: "Power0.easeNone",
                    }, "-=1")
                        .from('.project-info-wrapper', 0.5, {
                            autoAlpha: 0
                        })

                } else {
                    TweenLite.set('.sub-page-banner .intro-title', {
                        x: 0
                    });
                }
            });

            function installMediaQueryWatcher(mediaQuery, layoutChangedCallback) {
                var mql = window.matchMedia(mediaQuery);
                mql.addListener(function (e) { return layoutChangedCallback(e.matches); });
                layoutChangedCallback(mql.matches);
            }



        }

        $(function () {
            barba.init({
                sync: true,
                namespace: "view-case-page",
                transitions: [
                    {
                        async leave(data) {
                            const done = this.async();
                            pageTransition();
                            await delay(1000);
                            done();
                        },

                        async enter(data) {
                            contentAnimation();
                        },

                        async once(data) {
                            contentAnimation();
                        },
                    },
                ],
            });
        });
    });
    // Barba JS END


});
// DOM Ready END
