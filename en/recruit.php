<?php require_once('./Connections/connect2data.php');
require_once 'paginator.class.php';

$work = $DB->row("SELECT * FROM data_set WHERE d_class1='recruit' AND d_sort!=0 AND d_active=1 ORDER BY d_sort ASC, d_date DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'RECRUIT';
    $menu = 'RECRUIT';
    $number = '06';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>
    <div class="recruitWrap menu-pin">
        <div class="recruit-top">
            <div class="head-area">
                <div class="head-1">
                    <div class="en top show-for-large">We Want</div>
                    <div class="en top hide-for-large">We</div>
                </div>
                <div class="head-1-2 hide-for-large">
                    <div class="en">Want</div>
                </div>
                <div class="head-2">
                    <div class="en bottom">
                        <div class="note show-for-large">RECRUIT</div>
                        YOU!
                    </div>
                </div>
                <div class="note hide-for-large">RECRUIT</div>
                <div class="bear show-for-large"><img src="./images/recruit-bear.svg"></div>
            </div>
            <div class="recruitList">
                <div class="title">
                    Clear Promotion Pathway <br>Transparent Pay Progression
                </div>
                <div class="article-area">
                    <div class="top flex-container">
                        <div>Operations<br>Management <br class="hide-for-large">Type</div>
                        <div>Job Title</div>
                        <div class="two medium-short uk mobile-little">USA/<br class="hide-for-large">Europe/UK<br>Base Salary<span class="little"> (USD)</span></div>
                        <div class="two medium-short mobile-little">Asia-Pac<br>Base Salary<span class="little"> (USD)</span></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">Managing <br>Single Store</div>
                        <div>Store Manager</div>
                        <div class="medium-short"><?= $work['d_data1']; ?></div>
                        <div class="medium-short"><?= $work['d_data5']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">Managing <br>Multiple Stores</div>
                        <div>Area Manager</div>
                        <div class="medium-short"><?= $work['d_data2']; ?></div>
                        <div class="medium-short"><?= $work['d_data6']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">Managing <br>Multiple Territories</div>
                        <div>Operations Manager</div>
                        <div class="medium-short"><?= $work['d_data3']; ?></div>
                        <div class="medium-short"><?= $work['d_data7']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">Managing <br>Multiple Territories</div>
                        <div>Operations Director/COO</div>
                        <div class="medium-short"><?= $work['d_data4']; ?></div>
                        <div class="medium-short"><?= $work['d_data8']; ?></div>
                    </div>
                </div>
                <div class="note">
                    <!-- The following salary matrix represents each job position and its corresponding base salary in USD*. <br>
                    Expats are entitled to additional operations bonuses, housing allowance, location allowance**, <br>
                    home travel allowance, tax rebate, annual health check-up, medical insurance, KOI gifts, etc.<br>
                    *Actual salary payout will be processed in local currency.<br>
                    ** Monthly location allowance of +USD400 applicable to the following posting countries: HK/Macao, Japan, Singapore, UAE, Australia, Korea -->
                    KOI Group reserves the right, at our sole discretion, to change, <br>modify or otherwise alter the salary scale and benefits package at any time.<br>
                    The salary scale in the table represents the basic monthly salary (shown in USD).<br>
                    Additional benefits include operations bonuses, housing allowances, regional allowances, home traveling allowances, tax subsidies, health checkup subsidies, medical insurance, annual gifts, and so on.
                </div>
            </div>
            <div class="recruit-otherList">
                <div class="title">
                    Targeting Global Talents <br>Comprehensive Salary Benefits
                </div>
                <ul class="articleList">
                    <li>● Competitive salary in international job markets</li>
                    <li>● Operations bonuses</li>
                    <li>● Medical insurance</li>
                    <li>
                        ● Allowances
                        <div class="note">Location allowance / housing allowance / Home travel allowance / Tax rebate / Annual health check-up</div>
                    </li>
                    <li>
                        ● Paid Leave
                        <div class="note">
                            Annual leave: 10-30 days <br>
                            Other paid leave: sick leave, marriage leave, maternity leave, pregnancy checkup leave, paternity leave, compassionate leave.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="recruit-middleList show-for-large">
            <section data-where="0">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-1.jpg)">
                </figure>
            </section>
            <section data-where="1">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-2.jpg)">
                </figure>
            </section>
        </div>
        <div class="recruit-middleList hide-for-large show-for-medium">
            <section data-where="0">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-1-tablet.jpg)">
                </figure>
            </section>
            <section data-where="1">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-2-tablet.jpg)">
                </figure>
            </section>
        </div>
        <div class="recruit-middleList hide-for-medium">
            <section data-where="0">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-1-mobile.jpg)">
                </figure>
            </section>
            <section data-where="1">
                <figure class="sec-bg" style="background-image: url(./images/recruit-bg-2-mobile.jpg)">
                </figure>
            </section>
        </div>
        <div class="apply-area">
            <div class="head-area hide-for-large">
                <div class="head-1">
                    <div class="en top">
                        <div class="quote">“</div>Apply
                    </div>
                </div>
                <div class="head-2">
                    <div class="en bottom">
                        NOW!<div class="quote">”</div>
                        <div class="ch">
                            We come from different places, <br>
                            and we bring together diverse cultures; <br>
                            tea is the common language that unites us here.
                        </div>
                    </div>
                </div>
            </div>
            <div class="apply-fancy">
                <div class="fancy-inner">
                    <div class="top-area">
                        <div class="title">Apply NOW！</div>
                        <div class="content">
                            To ensure successful submission of your resume, <br>
                            please select only 1 application portal from below. <br>
                            DO NOT send your resume to both portals.<br>
                            Thank you.
                        </div>
                    </div>
                    <ul class="applyList">
                        <li>
                            <a href="https://www.104.com.tw/company/1a2x6bmbm1">
                                <div class="title">Job post on 104 portal</div>
                                <div class="arrow">
                                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="29.31" height="25.51" viewBox="0 0 29.31 25.51">
                                        <g id="c" data-name="圖層 4">
                                            <g>
                                                <line class="e" y1="12.76" x2="26.26" y2="12.76" />
                                                <path class="d" d="M8.93,24.93c-.38-.59-.2-1.37,.39-1.75L25.68,12.76,9.32,2.34c-.59-.38-.77-1.16-.39-1.75,.38-.59,1.17-.76,1.75-.39L28.72,11.69c.36,.23,.59,.64,.59,1.07s-.22,.84-.59,1.07L10.68,25.31c-.21,.13-.45,.2-.68,.2-.42,0-.83-.21-1.07-.59Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="note">Please send your resume to Global Recruitment Team</div>
                                <div class="title">globalcareers<br class="hide-for-large">@koicafe.com </div>
                                <div class="arrow">
                                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="29.31" height="25.51" viewBox="0 0 29.31 25.51">
                                        <g id="c" data-name="圖層 4">
                                            <g>
                                                <line class="e" y1="12.76" x2="26.26" y2="12.76" />
                                                <path class="d" d="M8.93,24.93c-.38-.59-.2-1.37,.39-1.75L25.68,12.76,9.32,2.34c-.59-.38-.77-1.16-.39-1.75,.38-.59,1.17-.76,1.75-.39L28.72,11.69c.36,.23,.59,.64,.59,1.07s-.22,.84-.59,1.07L10.68,25.31c-.21,.13-.45,.2-.68,.2-.42,0-.83-.21-1.07-.59Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="head-area show-for-large">
                <div class="head-1">
                    <div class="en top">“Apply</div>
                </div>
                <div class="head-2">
                    <div class="en bottom">NOW!”
                        <div class="ch">
                            We come from different places, and we bring together diverse cultures; <br>
                            tea is the common language that unites us here.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'menu-link.php'; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>

<script>
    if (window.device == 'desktop') {
        let $tl_title = gsap.timeline({
                paused: true,
            })
            .to(".recruit-top .head-area .en.top", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            }).to(".recruit-top .head-area .en.bottom", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            }, '<0.25')


        gsap.delayedCall(1, function() {
            $tl_title.play();
        });
    } else {
        let $tl_title_mobile = gsap.timeline({
                paused: true,
            })
            .to(".recruit-top .head-1 .en", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            })
            .to(".recruit-top .head-1-2 .en", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            }, '<0.25')
            .to(".recruit-top .head-2 .en", {
                duration: 1,
                y: 0,
                rotation: 0,
                ease: Power2.easeOut,
            }, '<0.25')
        gsap.delayedCall(1, function() {
            $tl_title_mobile.play();
        });


    }





    let $tl_apply = gsap.timeline({
            paused: true,
        })
        .to(".apply-area .head-area .en.top", {
            duration: 1,
            y: -25,
            rotation: 0,
            ease: Power2.easeOut,
        }).to(".apply-area .head-area .en.bottom", {
            duration: 1,
            y: 0,
            rotation: 0,
            ease: Power2.easeOut,
        }, '<0.25')


    ScrollTrigger.create({
        trigger: '.apply-area',
        // toggleActions: "play none none none",
        start: "5% 25%",
        end: "80% 25%",
        // markers: true,
        onEnter: () => {
            $('.apply-fancy').addClass('is-show');
            $tl_apply.play();

        },
        onLeave: () => {
            $('.apply-fancy').removeClass('is-show');
        },
        onEnterBack: () => {
            $('.apply-fancy').addClass('is-show');
        },
        onLeaveBack: () => {
            $('.apply-fancy').removeClass('is-show');
        }
    });

    gsap.timeline()
        .to('.apply-fancy .fancy-inner', {
            scrollTrigger: {
                toggleActions: "play pause resume reverse",
                trigger: ".apply-area",
                start: "15% 25%",
                end: "25% 25%",
                scrub: 1,
                // markers: true,
            },
            y: 0,
            opacity: 1,
        })
        .to('.apply-fancy .fancy-inner .top-area', {
            scrollTrigger: {
                toggleActions: "play pause resume reverse",
                trigger: ".apply-area",
                start: "20% 25%",
                end: "35% 25%",
                scrub: 1,
                // markers: true,
            },
            y: 0,
            opacity: 1,
        })
        .to('.apply-fancy .fancy-inner .applyList li:first-child', {
            scrollTrigger: {
                toggleActions: "play pause resume reverse",
                trigger: ".apply-area",
                start: "25% 25%",
                end: "35% 25%",
                scrub: 1,
                // markers: true,
            },
            // stagger:0.2,
            y: 0,
            opacity: 1,
        })
        .to('.apply-fancy .fancy-inner .applyList li:last-child', {
            scrollTrigger: {
                toggleActions: "play pause resume reverse",
                trigger: ".apply-area",
                start: "30% 25%",
                end: "40% 25%",
                scrub: 1,
                // markers: true,
            },
            // delay: 0.5,
            y: 0,
            opacity: 1,
        })
    // if (window.device == 'desktop') {
    //     ScrollTrigger.create({
    //         toggleActions: "play pause resume reverse", //重覆觸發
    //         trigger: ".menu-link",
    //         endTrigger: ".recruitWrap",
    //         start: "top 78.5%",
    //         end: "100% 100%",
    //         scrub: 1,
    //         pin: true,
    //         // markers: true,
    //     });
    // } else {
    //     ScrollTrigger.create({
    //         toggleActions: "play pause resume reverse", //重覆觸發
    //         trigger: ".menu-link",
    //         endTrigger: ".recruitWrap",
    //         start: "top 73%",
    //         end: "100% 100%",
    //         scrub: 1,
    //         pin: true,
    //         // markers: true,
    //     });
    // }

    $('.menu-mobileWrap .recruit').addClass('current');
</script>