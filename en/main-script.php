<script>
    $('.menu-mobileWrap .index').addClass('current');
    $('.menu-link').removeClass('is-show');
    $(document).ready(function() {
        window.onbeforeunload = function() {
            //刷新后页面自动回到顶部
            document.documentElement.scrollTop = 0; //ie下
            document.body.scrollTop = 0; //非ie
        }
        $("html").addClass("is-lock")
    })
    $('.menuWrap').addClass("is-not-hover")
    $('.menu-mobileWrap').addClass("is-not-hover")
    $('footer').addClass('is-light-orange')

    let $tl_preload = gsap.timeline({
            paused: true,
        })
        .to(".index-top-banner", {
            duration: 1.5,
            y: 0,
            ease: Power2.easeOut,
        }, 'logo')
        .to("nav", {
            className: "+=not-clip flex-container align-justify"
        }, '<0.65')
        .to(".index-top-banner .top-text", {
            duration: 1.5,
            x: 0,
            ease: Power3.easeOut,
        }, '<0.5')
        .from(".menu-link", {
            duration: 0.5,
            opacity: 0,
            ease: Power2.easeOut,
        })
        .to(".menu-link", {
            opacity: 1,
        })
        .to(".menu-link", {
            duration: 0,
            className: "+=menu-link is-show"
        })




    function indexAnimation() {
        $("html").removeClass("is-lock")
        $('nav').removeClass('not-clip')
        $('.hamburger').addClass('is-click')
        if (window.device == 'desktop') {
            $('.menuWrap').removeClass("is-not-hover")
        } else {
            $('.menu-mobileWrap').removeClass("is-not-hover")
        }

        var _r = <?php echo $ran; ?>

        if (_r == 1) {

            let _x = $(".top-text#horizontalWrap").outerWidth(true) - $(window).width()
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".no-light",
                start: `top+=${_x} top`,
                end: `top+=${_x} top`,
                // markers: true,
                onEnter() {
                    $('.now-page').removeClass("is-light")
                    // $('.logo').removeClass("is-light")
                    $('.menuWrap').removeClass("is-light")
                },
                // onLeave() {
                //     $('.index-feature-box').removeClass('is-not-show');
                // },
                onLeaveBack() {
                    $('.now-page').addClass("is-light")
                    // $('.logo').addClass("is-light")
                    $('.menuWrap').addClass("is-light")
                }
            });
        }


        function horizonHandler(el) {
            let _x = $(el).outerWidth(true) - $(window).width()
            console.log(_x);
            let storenum = {
                n: 1
            }
            const $tl = gsap.timeline({
                paused: false,
            })
            if (_x > 0) {
                gsap.timeline().to(el, {
                    scrollTrigger: {
                        toggleActions: "play pause resume reverse",
                        trigger: "#horizontalWrap",
                        start: "top 0%",
                        end: `+=${_x}`,
                        pin: ".index-top-banner",
                        pinSpace: false,
                        scrub: true,
                        // markers: true,
                    },
                    x: -_x,
                    ease: 'none'
                }).to(".text-o", {
                    scrollTrigger: {
                        toggleActions: "play pause resume reverse",
                        trigger: "#horizontalWrap",
                        start: "top 0%",
                        end: `+=${_x}`,
                        pin: ".index-top-banner",
                        pinSpace: false,
                        scrub: 1,
                    },
                    rotation: 100,
                })
                ScrollTrigger.create({
                    toggleActions: "play pause resume reverse",
                    trigger: "#horizontalWrap",
                    start: "top 0%",
                    end: `+=${_x}`,
                    pinSpace: false,
                    scrub: true,
                    // markers: true,
                    // animation: $tl,
                })
            }
        }
        horizonHandler('.index-top-banner .top-text');
        if (window.device == 'desktop') {
            var _p = $('.center-pic').data("move")
            _p.repeatDelay = (_p.repeatDelay != undefined) ? _p.repeatDelay : 0
            gsap.timeline({
                scrollTrigger: {
                    toggleActions: "play pause resume reverse",
                    trigger: ".index-text-area",
                    start: "top 0%",
                    end: "50% 0%",
                    scrub: 1,
                    // markers: true,
                },
            }).to('.center-pic', {
                // duration: _p.sec,
                backgroundPosition: "0 100%",
                ease: SteppedEase.config(_p.item),
                repeat: 0,
                // y: 100, 
                // rotation: 120,
            }).to(".center-circle", {
                scrollTrigger: {
                    toggleActions: "play pause resume reverse",
                    trigger: ".index-text-area",
                    start: "60% 80%",
                    end: "80% 80%",
                    scrub: 1,
                    // markers: true,
                },
                scale: 6.5,
            })
            // const $tl_drink_box = gsap.timeline({
            //         paused: false,
            //     }).to('.index-feature-box .up div', {
            //         scale: 1,
            //     })
            //     .to('.index-feature-box .down div', {
            //         scale: 1,
            //     }, '<0')
            // ScrollTrigger.create({
            //     toggleActions: "play pause resume reverse",
            //     trigger: ".index-feature-box",
            //     start: "5% 0%",
            //     end: "50% 0%",
            //     scrub: 1,
            //     // markers: true,
            //     animation: $tl_drink_box,
            // })
            // ScrollTrigger.create({
            //     toggleActions: "play pause resume reverse",
            //     trigger: ".index-feature",
            //     start: "5% 0%",
            //     end: "90% 0%",
            //     // markers: true,
            //     onEnter() {
            //         $('.index-feature-box').addClass('is-not-show');
            //         $('.index-feature').addClass('is-show');
            //     },
            //     // onLeave() {
            //     //     $('.index-feature-box').removeClass('is-not-show');
            //     // },
            //     onEnterBack() {
            //         $('.index-feature-box').addClass('is-not-show');
            //         $('.index-feature').addClass('is-show');
            //     },
            //     onLeaveBack() {
            //         $('.index-feature-box').removeClass('is-not-show');
            //         $('.index-feature').removeClass('is-show');
            //     }
            // });
            // ================四大理念電腦版===================
            const $tl_drink4 = gsap.timeline({
                    paused: false,
                }).fromTo('.index-feature .up div', {
                    scale: 1,
                }, {
                    scale: 0,
                })
                .fromTo('.index-feature .down div', {
                    scale: 1,
                }, {
                    scale: 0,
                }, '<0')
            const $tl_drink3 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '-200vh'
                }, {
                    y: '-300vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-100vh'
                }, {
                    y: '0%'
                }, "<0")
            const $tl_drink2 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '-100vh'
                }, {
                    y: '-200vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-200vh'
                }, {
                    y: '-100vh'
                }, "<0")
            const $tl_drink1 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '0'
                }, {
                    y: '-100vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-300vh'
                }, {
                    y: '-200vh'
                }, "<0")
            const $tl_drink0 = gsap.timeline({
                    paused: false,
                }).fromTo('.index-feature .up div', {
                    scale: 0,
                }, {
                    scale: 1,
                })
                .fromTo('.index-feature .down div', {
                    scale: 0,
                }, {
                    scale: 1,
                }, '<0')
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "70% 0%",
                end: "75% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink4,
            })
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "59% 0%",
                end: "60% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink3,
            })
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "39% 0%",
                end: "40% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink2,
            })
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "19% 0%",
                end: "20% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink1,
            })
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "5% 0%",
                end: "10% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink0,
            })
        } else {
            var _p = $('.center-pic').data("move")
            _p.repeatDelay = (_p.repeatDelay != undefined) ? _p.repeatDelay : 0
            gsap.timeline({
                scrollTrigger: {
                    toggleActions: "play pause resume reverse",
                    trigger: ".index-text-area",
                    start: "top 0%",
                    end: "50% 0%",
                    scrub: 1,
                    // markers: true,
                },
            }).to('.center-pic', {
                // duration: _p.sec,
                backgroundPosition: "0 100%",
                ease: SteppedEase.config(_p.item),
                repeat: 0,
                // y: 100, 
                // rotation: 120,
            }).to(".center-circle", {
                scrollTrigger: {
                    toggleActions: "play pause resume reverse",
                    trigger: ".index-text-area",
                    start: "60% center",
                    end: "80% center",
                    scrub: 1,
                    // markers: true,
                },
                scale: 5,
            })
            // ================四大理念手機版==================
            //順序要倒過來不然有北七BUG
            // if ($(this).width() > 640) {

            // }
            const $tl_drink_box = gsap.timeline({
                    paused: false,
                }).to('.index-feature-box .up div', {
                    scale: 1,
                })
                .to('.index-feature-box .down div', {
                    scale: 1,
                }, '<0')
            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature-box",
                start: "10% 0%",
                end: "25% 0%",
                scrub: 1,
                // markers: true,
                animation: $tl_drink_box,
            })


            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "0% 0%",
                end: "90% 0%",
                // markers: true,
                onEnter() {
                    $('.index-feature-box').addClass('is-not-show');
                    $('.index-feature').addClass('is-show');
                },
                // onLeave() {
                //     $('.index-feature-box').removeClass('is-not-show');
                // },
                onEnterBack() {
                    $('.index-feature-box').addClass('is-not-show');
                    $('.index-feature').addClass('is-show');
                },
                onLeaveBack() {
                    $('.index-feature-box').removeClass('is-not-show');
                    $('.index-feature').removeClass('is-show');
                }
            });

            //順序要倒過來不然有北七BUG

            const $tl_drink4 = gsap.timeline({
                paused: true,
            }).add('small').to('.index-feature .up div', {
                scale: 0,
            }, 'small').to('.index-feature .down div', {
                scale: 0,
            }, 'small')

            const $tl_drink3 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '-200vh'
                }, {
                    y: '-300vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-100vh'
                }, {
                    y: '0%'
                }, "<0")

            const $tl_drink2 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '-100vh'
                }, {
                    y: '-200vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-200vh'
                }, {
                    y: '-100vh'
                }, "<0")



            const $tl_drink1 = gsap.timeline({
                    paused: false,
                })
                .fromTo('.index-feature .up', {
                    y: '0'
                }, {
                    y: '-100vh'
                })
                .fromTo('.index-feature .down', {
                    y: '-300vh'
                }, {
                    y: '-200vh'
                }, "<0")




            // ScrollTrigger.create({
            //     toggleActions: "play pause resume reverse",
            //     trigger: ".index-feature",
            //     start: "5% 0%",
            //     end: "15% 0%",
            //     scrub: true,
            //     // markers: true,
            //     animation: $tl_drink0,
            // })

            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "0% 0%",
                end: "10% 0%",
                scrub: true,
                // markers: true,
                animation: $tl_drink1,
            })


            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "20% 0%",
                end: "30% 0%",
                scrub: true,
                // markers: true,
                animation: $tl_drink2,
            })

            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "40% 0%",
                end: "50% 0%",
                scrub: true,
                // markers: true,
                animation: $tl_drink3,
            })

            ScrollTrigger.create({
                toggleActions: "play pause resume reverse",
                trigger: ".index-feature",
                start: "70% 0%",
                end: "75% 0%",
                scrub: true,
                // markers: true,
                animation: $tl_drink4,
            })
        }
        ScrollTrigger.create({
            // toggleActions: "play resume resume resume",
            trigger: ".index-drink",
            start: "10% center",
            end: "bottom center",
            // markers: true,
            // animation: $tl_drink,
            // scrub: 1,
            onEnter() {
                $('.index-drink .bg .note').addClass('is-show');
                $('.index-drink .bg .en').addClass('is-show');
                $('.index-drink .bg .ch').addClass('is-show');
                $('.index-drink .items-area div').addClass('is-show');
            },
            onLeave() {
                $('.index-drink .bg .note').removeClass('is-show');
                $('.index-drink .bg .en').removeClass('is-show');
                $('.index-drink .bg .ch').removeClass('is-show');
                $('.index-drink .items-area div').removeClass('is-show');
            },
            onEnterBack() {
                $('.index-drink .bg .note').addClass('is-show');
                $('.index-drink .bg .en').addClass('is-show');
                $('.index-drink .bg .ch').addClass('is-show');
                $('.index-drink .items-area div').addClass('is-show');
            },
            onLeaveBack() {
                $('.index-drink .bg .note').removeClass('is-show');
                $('.index-drink .bg .en').removeClass('is-show');
                $('.index-drink .bg .ch').removeClass('is-show');
                $('.index-drink .items-area div').removeClass('is-show');
            }
        })

        function drinkHorizon(el) {
            let _x = $(el).outerWidth(true) - $(window).width()
            console.log(_x);
            let storenum = {
                n: 1
            }
            const $tl = gsap.timeline({
                paused: false,
            })
            if (_x > 0) {
                gsap.to(el, {
                    scrollTrigger: {
                        toggleActions: "play pause resume reverse",
                        trigger: "#drinkHorizontal",
                        start: "top 30%",
                        end: `+=${_x}`,
                        pin: ".drink-outter",
                        pinSpace: false,
                        scrub: true,
                        // markers: true,
                        onUpdate: (self) => {
                            if (window.device == 'mobile') {
                                let $drink = $("#drinkHorizontal")
                                let m = $(window).width() / 2
                                $drink.children().each(function(i, el) {
                                    let x = $(el).offset().left
                                    // if (x - m <= 0) {
                                    //     $(el).addClass("current").siblings().removeClass("current")
                                    // }
                                    console.log(x);
                                    if (x < 150) {
                                        $(el).children().find('.circle').css('transform', `rotate(${x / 10 - 15}deg)`)
                                    }
                                })
                            }
                        }
                    },
                    x: -_x,
                    ease: 'none'
                })
            }
        }
        drinkHorizon('.drinksList');
        $('.drinksList li .pic-area').each(function(i, el) {
            if (window.device == 'desktop') {
                var $tl_circle = gsap.timeline({
                        paused: true,
                    })
                    .to($(this).children('.circle'), {
                        duration: 10,
                        rotation: 360,
                        ease: 'none',
                        repeat: -1,
                        repeatDelay: 0.05,
                    })
                $(el).hover(function() {
                    $tl_circle.play();
                }, function() {
                    $tl_circle.reverse();
                });
            }
        })
        // ScrollTrigger.create({
        //     toggleActions: "play resume resume resume", //重覆觸發
        //     trigger: ".menu-link",
        //     endTrigger: ".indexWrap",
        //     start: "top 78.5%",
        //     end: "100% 100%",
        //     scrub: true,
        //     pin: true,
        //     // markers: true,
        // });
        let $tl_drink = gsap.timeline({
                paused: true,
            })
            .to(".drink-outter .overflow .en", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            })
        ScrollTrigger.create({
            toggleActions: "play resume resume resume", //重覆觸發
            trigger: ".drink-outter .head-area",
            start: "top 80%",
            end: "bottom 80%",
            animation: $tl_drink,
            // markers: true,
        });
        let $tl_news = gsap.timeline({
                paused: true,
            })
            .to(".index-news .overflow .en", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            })
        ScrollTrigger.create({
            toggleActions: "play pause resume reverse", //重覆觸發
            trigger: ".index-news",
            start: "top 80%",
            end: "bottom 80%",
            animation: $tl_news,
            // markers: true,
        });
        $('.top-newsList').slick({
            dots: true,
            prevArrow: false,
            nextArrow: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            // autoplay: true,
            // autoplaySpeed: 5000,
            // vertical: true,
            // verticalSwiping: true,
            // arrows: false,
        });
        // $('.top-newsList').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        //     console.log(nextSlide);
        //     $(`.triangle .triangle-${nextSlide + 1}`).addClass('is-show').siblings().removeClass('is-show');
        // });
        var dotNums = document.querySelectorAll(".slick-dots button");

        function removeText(item) {
            item.innerHTML = ""; // or put the text you need inside quotes
        }
        dotNums.forEach(removeText);
        if (window.device == 'desktop') {
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene);
        }
        ScrollTrigger.create({
            trigger: ".index-menu-pin",
            toggleActions: "play pause resume reverse", //重覆觸發
            start: "top 80%",
            end: "bottom 80%",
            // markers: true,
            onEnter() {
                $(".menu-link").addClass("is-show");
                $(".menu-link").css("opacity", '1')
            },
            onLeave() {
                $('.menu-link').removeClass('is-show');
                $(".menu-link").css("opacity", '0')
            },
            onEnterBack() {
                $(".menu-link").addClass("is-show");
                $(".menu-link").css("opacity", '1')
            },
            onLeaveBack() {
                $(".menu-link").removeClass("is-show");
                $(".menu-link").css("opacity", '0')
            },
        });
    }

    var skip = document.getElementById('skip');
    let isClicked = false;

    gsap.delayedCall(1, function() {
        $("nav").removeClass("is-not-show")
    })

    gsap.delayedCall(2, function() {
        $(".skip").addClass("is-show")
    })
    gsap.delayedCall(3, function() {
        $(".indexWrap-outter").removeClass("is-not-show")
    })
    skip.addEventListener('click', () => {
        isClicked = true;
        $('.index-preload').addClass('is-not-show')
        $(".indexWrap-outter").removeClass("is-not-show")
        gsap.delayedCall(0.75, function() {
            $tl_preload.play();
        })
        gsap.delayedCall(1, function() {
            $('.index-preload').addClass('not-show')
            if (window.device == 'mobile') {
                $('nav .bg').removeClass('is-move')
                $('nav').removeClass('not-clip')
            }
        })
        gsap.delayedCall(4, function() {
            indexAnimation();
        })
        gsap.delayedCall(3, function() {
            $('body').addClass('is-light-orange')
            $('.index-preload').addClass('down')
        })

    });

    gsap.delayedCall(3, function() {
        if (isClicked == false) {
            $('.index-preload').addClass('down')
        }
    })

    gsap.delayedCall(5.5, function() {
        if (isClicked == false) {
            $tl_preload.play();
            gsap.delayedCall(2.5, function() {
                $('body').addClass('is-light-orange')
                $('.index-preload').addClass('not-show')

                if (window.device == 'mobile') {
                    $('nav .bg').removeClass('is-move')
                    $('nav').removeClass('not-clip')
                }
            })
            gsap.delayedCall(3.5, function() {
                indexAnimation()
            });
        }

    })
    // if (document.getElementById('skip').clicked == true) {
</script>