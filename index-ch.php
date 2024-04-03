<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <?php $now = 'INDEX';
    $menu = 'INDEX';
    $number = '01';
    ?>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="index-top-banner">
        <div class="top-text" id="horizontalWrap">
            <img src="./images/index-koi-the.svg" alt="">
            <div class="text-o-outter">
                <div class="text-o">
                    <div class="pic"><img src="./images/index-circle-o.png" alt=""></div>
                </div>
            </div>

        </div>
        <div class="scroll"><img src="./images/index-scroll.svg" alt=""></div>
        <div class="note">
            Happiness is to share special moments with friends.
            A celebration, a date or just a relaxing break in the day, there is always a reason to get together around a cup of KOI tea. KOI brings joy to the world. Freshly brewed tea and flavorful ingredients, prepared with passion are the key to KOI’s authentic taste and the reason why people come back again and again.
        </div>
    </div>
    <div class="menu-link">
        <a href="./menu.php">
            <img src="./images/menu-link.svg" alt="">
        </a>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>
<script>
    // $('nav').addClass('is-move')
    $(document).ready(function() {
        window.onbeforeunload = function() {
            //刷新后页面自动回到顶部
            document.documentElement.scrollTop = 0; //ie下
            document.body.scrollTop = 0; //非ie
        }
        gsap.delayedCall(0.3, function() {
            $("html").addClass("is-lock")
        });

        gsap.delayedCall(6, function() {
            $("html").removeClass("is-lock")
        });
    })
    $('footer').addClass('is-orange')
    let $tl_preload = gsap.timeline({
            paused: false,
        })
        .to(".index-preload .logo", {
            duration: 0.75,
            opacity: 1,
            ease: Power1.easeIn,
        })
        .add('logo')
        .to(".index-preload .logo", {
            delay: 2,
            duration: 1,
            y: '-400',
            scale: 1.5,
            ease: Power1.easeIn,
        }, 'logo')
        .to(".index-top-banner", {
            delay: 2,
            duration: 1,
            y: 0,
            ease: Power1.easeIn,
        }, 'logo')
        .to("nav", {
            className: "+=flex-container align-justify"
        })
        .to(".index-top-banner .top-text", {
            duration: 1.5,
            x: 0,
            ease: Power1.easeIn,
        }, '<0.25')

    // gsap.delayedCall(2.5, function() {
    //     $('nav').removeClass('is-move')
    // });
    gsap.delayedCall(5.5, function() {
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
                gsap.to(el, {
                    scrollTrigger: {
                        toggleActions: "play pause resume reverse",
                        trigger: "#horizontalWrap",
                        start: "top 0%",
                        end: `+=${_x}`,
                        pin: ".index-top-banner",
                        pinSpace: false,
                        scrub: true,
                        markers: true,
                        // onUpdate: (self) => {
                        //     let $about = $(".index-top-banner #horizontalWrap")
                        //     let m = $(window).width() / 2
                        //     $about.children().each(function(i, el) {
                        //         let x = $(el).offset().left
                        //         if (x - m <= 0) {
                        //             $(el).addClass("current").siblings().removeClass("current")
                        //         }
                        //     })
                        // }
                    },
                    x: -_x,
                    ease: 'none'
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
                });
            }
        }
        horizonHandler('.index-top-banner .top-text');
        $('.text-o-outter').css('animation', 'circle-rotate 15s linear infinite');
    });


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
                        trigger: "#horizontalWrap",
                        start: "top 0%",
                        end: `+=${_x}`,
                        pin: ".index-top-banner",
                        pinSpace: false,
                        scrub: true,
                        markers: true,

                    },
                    x: -_x,
                    ease: 'none'
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
                });
                ScrollTrigger.create({
                    toggleActions: "play pause resume reverse",
                    trigger: ".text-o",
                    start: "top 0%",
                    end: `+=${_x}`,
                    rotate: `${_x/10}`,
                    scrub: true,
                    // markers: true,
                    // animation: $tl,
                })
            }
</script>