function inits() {
    AOS.init({
        duration: 1000,
        easing: 'ease',
        once: true
    });
}
function counterInit() {
    // Counter
    $(function () {
        var $animCounter = $('.hm-about-us');
        var $window = $(window);
        $window.on('load resize scroll', function () {
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
}




function fakeDomReady() {

    Splitting();

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
        $window.on('load resize scroll', function () {
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


    // AOS Anim
    AOS.init({
        duration: 1000,
        easing: 'ease',
        once: true
    });
    // AOS Anim END

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

    // Home Banner Parallax Effects
    var parallaxSliderLarge,
        parallaxLargeOptions = {
            spaceBetween: 0,
            observer: true,
            observeParents: true,
            speed: 1000,
            parallax: true,
            centeredSlides: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.custom-pagination',
                type: 'progressbar',
                progressbarOpposite: 'true',
            },
            on: {
                init: function () {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        $(swiper.slides[i])
                            .find('.img-container')
                            .attr({
                                'data-swiper-parallax': 0.75 * swiper.width,
                                'data-swiper-paralalx-opacity': 0.5,
                            });

                        $(swiper.slides[i])
                            .find('.title')
                            .attr('data-swiper-parallax', 0.65 * swiper.width);
                        $(swiper.slides[i])
                            .find('.description')
                            .attr('data-swiper-parallax', 0.5 * swiper.width);
                    }
                },
                resize: function () {
                    this.update();
                }
            },
        };
    // Init Slider
    let sliderWrapBig = document.querySelector('.js-parallax-slider');
    parallaxSliderLarge = new Swiper(sliderWrapBig, parallaxLargeOptions);

    var parallaxSliderSmall,
        parallaxSmallOptions = {
            speed: 1000,
            parallax: true,
            spaceBetween: 0,
            centeredSlides: true,
            slidesPerView: 'auto',
            touchRatio: 0.2,
            slideToClickedSlide: true,
            slidesPerView: '1',
            observer: true,
            observeParents: true,
            centeredSlides: true,
            grab: true,
            on: {
                init: function () {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        $(swiper.slides[i])
                            .find('.img-container')
                            .attr({
                                'data-swiper-parallax': 0.75 * swiper.width,
                                'data-swiper-paralalx-opacity': 0.5
                            });

                        $(swiper.slides[i])
                            .find('.title')
                            .attr('data-swiper-parallax', 0.65 * swiper.width);
                        $(swiper.slides[i])
                            .find('.description')
                            .attr('data-swiper-parallax', 0.5 * swiper.width);
                    }
                },
                resize: function () {
                    this.update();
                }
            },
        };

    // Init Slider
    let sliderWrapSmall = document.querySelector('.js-parallax-thumb');
    parallaxSliderSmall = new Swiper(sliderWrapSmall, parallaxSmallOptions);

    if ($(".swiper-container")[0]) {
        // Slider Count 
        let totalCount = parallaxSliderLarge.slides.length;
        let activeSlide = 1;
        $('.js-total-slide').text('0' + totalCount);
        $('.js-active-count').text('0' + activeSlide);
        $('.control-num .sup').text('0' + activeSlide);
        // Slider Count END
        parallaxSliderLarge.on('slideChange', function (swiper) {
            // Slider Count
            let activeIndex = swiper.activeIndex + 1;
            $('.js-active-count').text('0' + activeIndex);
            $('.control-num .sup').text('0' + activeIndex);
            // Slider Count END

            // Slider Caption
            var swiper = this;
            var slideID = $(parallaxSliderLarge.slides[parallaxSliderLarge.activeIndex]).attr("data-tab");
            $('.slider-dat').removeClass('current');
            $('.slider-dat').each(function () {
                if ($(this).attr('id') === slideID) {
                    $(this).addClass('current');
                }
            });
            // Slider Caption END      
        });

        // Slider Caption
        var sizes1 = $(parallaxSliderLarge.slides[parallaxSliderLarge.activeIndex]).attr("data-tab");
        $('.slider-dat').removeClass('current');
        $('.slider-dat').each(function () {
            if ($(this).attr('id') === sizes1) {
                $(this).addClass('current');
            }
        })
        // Slider Caption

        // Next Slide on click small Slider
        parallaxSliderSmall.on('click', function (swiper, event) {
            parallaxSliderSmall.slideNext();
        });
        // Next Slide on click small Slider END

        // Slider Controls

        parallaxSliderLarge.controller.control = parallaxSliderSmall;
        parallaxSliderSmall.controller.control = parallaxSliderLarge;

        // Slider Control END
    }

}




$(document).ready(function () {

    fakeDomReady();

    function delay(n) {
        n = n || 2500;
        return new Promise((done) => {
            setTimeout(() => {
                done();
            }, n);
        });
    }

    function pageTransition() {
        console.log('pageLeave');
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
                TweenLite.set(".sub-page-banner .overlay-image", {
                    opacity: 0
                });
                tl.to(".hero-banner", 1,
                    {
                        ease: "Power0.easeNone",
                        //transformOrigin: 'left center',
                        css:
                        {
                            width: "100%"
                        }
                    }
                ).to('.sub-page-banner .intro-title', 0.5, {
                    x: 0,
                    ease: "Power0.easeNone",
                    duration: 1,
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

    function contentAnimationStat() {

        installMediaQueryWatcher("(min-width: 768px)", function (matches) {

            var tl = gsap.timeline();
            if (matches) {
                TweenLite.set('.hero-banner', {
                    css: {
                        width: '100%'
                    }
                });
                TweenLite.set('.sub-page-banner .overlay-image', {
                    autoAlpha: 1
                });
                tl
                    .to('.sub-page-banner .overlay-image', {
                        y: '100%'
                    })
                    .from('.sub-page-banner .intro-title', 0.5, {
                        autoAlpha: 0,
                        ease: Power3.easeOut,
                        duration: 1,
                    })
                    .from('.project-info-wrapper', 0.5, {
                        autoAlpha: 0
                    })

            } else {

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
                        fakeDomReady();
                    },

                    async once(data) {
                        contentAnimationStat();
                    },
                },
            ],
        });

        barba.hooks.afterOnce(() => {
            inits();
        });

        barba.hooks.after(() => {
            inits();
        });
    });
});