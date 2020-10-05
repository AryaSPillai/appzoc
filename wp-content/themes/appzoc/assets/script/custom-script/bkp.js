// Constants
let screenWidth = $(document).width();
let containerWidth = $('.container').width();

$(document).ready(function () {

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
                nextEl: '.js-swiper-button-next',
                prevEl: '.js-swiper-button-prev',
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
    parallaxSliderLarge = new Swiper('.js-parallax-slider', parallaxLargeOptions);
    $(window).on('resize', function () {
        parallaxSliderLarge.update();
        // parallaxSliderLarge.destroy();
        // parallaxSliderLarge = new Swiper('.js-parallax-slider', parallaxLargeOptions);
    });
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
            grab:true,
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
    parallaxSliderSmall = new Swiper('.js-parallax-thumb', parallaxSmallOptions);
    $(window).on('resize', function () {
        //parallaxSliderSmall.update();
        //parallaxSliderSmall.destroy();
        //parallaxSliderSmall = new Swiper('.js-parallax-thumb', parallaxSmallOptions);
    });

    // Slider Controls
    parallaxSliderLarge.controller.control = parallaxSliderSmall;
    parallaxSliderSmall.controller.control = parallaxSliderLarge;
    // Slider Control END

    // Next Slide on click small Slider
    parallaxSliderSmall.on('click', function (swiper, event) {
        parallaxSliderSmall.slideNext();
        // parallaxSliderSmall.autoplay.start();
    });
    // Next Slide on click small Slider END
    // Slider Actions


    // Slider Count 
    let totalCount = parallaxSliderLarge.slides.length;;
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

    function delay(n) {
        n = n || 2000
        // Keep official documentation wording, done -> resolve
        // and make it more concise
        return new Promise(resolve => {
            setTimeout(resolve, n)
        })
    }

    const loadingScreen = document.querySelector('.loading-screen');
    const mainNavigation = document.querySelector('.main-navigation');

    function pageTransitionIn() {

        return gsap
            .to(loadingScreen, { duration: .5, scaleY: 1, transformOrigin: 'bottom left' })
    }

    function pageTransitionOut(container) {

        return gsap
            .timeline({ delay: 1 })
            .add('start')
            .to(loadingScreen, {
                duration: 0.5,
                scaleY: 0,
                skewX: 0,
                transformOrigin: 'top left',
                ease: 'power1.out'
            }, 'start')
            .call(contentAnimation, [container], 'start')
    }


    function contentAnimation(container) {
        $(container.querySelector('.green-heading-bg')).addClass('show')
        return gsap
            .timeline()
            .from(container.querySelector('.is-animated'), {
                duration: 0.5,
                translateY: 10,
                opacity: 0,
                stagger: 0.4
            })
            .from(mainNavigation, { duration: .5, translateY: -10, opacity: 0 })
    }

    $(function () {
        barba.init({
            transitions: [{
                async leave(data) {
                    await pageTransitionIn()
                    data.current.container.remove()
                },

                async enter(data) {
                    await pageTransitionOut(data.next.container)
                },

                async once(data) {
                    await contentAnimation(data.next.container);
                }
            }]
        });
    });
});


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


// Counter About Page
$(function () {
    var $counterAnim = $('.pg-about-awwards');
    var $window = $(window);
    $window.scroll(function () {
        if ($counterAnim.is(":in-viewport")) {
            $('.js-counter').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-incr');
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
// Counter About Page END
