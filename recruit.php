<?php require_once('./Connections/connect2data.php');
require_once 'Connections/connect2data.php';
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
                    升迁透明化 · 薪资再跳升
                </div>
                <div class="article-area">
                    <div class="top flex-container">
                        <div>营运<br class="hide-for-large">管理类型</div>
                        <div>职称</div>
                        <div>英美歐区<br class="hide-for-xxlarge">基本薪资<span class="little">(USD)</span></div>
                        <div>亚太区<br class="hide-for-xxlarge">基本薪资<span class="little">(USD)</span></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">单店管理</div>
                        <div>店经理</div>
                        <div><?= $work['d_data1']; ?></div>
                        <div><?= $work['d_data5']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">多店管理</div>
                        <div>区域经理</div>
                        <div><?= $work['d_data2']; ?></div>
                        <div><?= $work['d_data6']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">单国域管理</div>
                        <div>营运经理</div>
                        <div><?= $work['d_data3']; ?></div>
                        <div><?= $work['d_data7']; ?></div>
                    </div>
                    <div class="content flex-container">
                        <div class="name">多国域管理</div>
                        <div>营运总监/营运长</div>
                        <div><?= $work['d_data4']; ?></div>
                        <div><?= $work['d_data8']; ?></div>
                    </div>
                </div>
                <div class="note">
                    表格薪资级距数额为基本月薪(美金呈现)，<br>
                    额外提供营运奖金、住宿津贴、地区津贴、返乡津贴、税务补贴、健检补助、医疗保险、年节礼品…等。
                </div>
            </div>
            <div class="recruit-otherList">
                <div class="title">
                    薪酬国际化 · 配套更完善
                </div>
                <ul class="articleList">
                    <li>● 国际化薪资</li>
                    <li>● 营运奖金</li>
                    <li>● 医疗保险</li>
                    <li>
                        ● 各式津贴
                        <div class="note">地区津贴 / 住宿津贴 / 返乡津贴 / 税务补贴 / 健检补助</div>
                    </li>
                    <li>
                        ● 假期福利
                        <div class="note">
                            特休假10-30天<br>
                            其他有薪假: 病假、婚假、产假、产检假、陪产假、丧假
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
                            我们来自不同地方<br>
                            我们激荡不同文化<br>
                            茶饮是我们凝聚在此的共同语言
                        </div>
                    </div>
                </div>
            </div>
            <div class="apply-fancy">
                <div class="fancy-inner">
                    <div class="top-area">
                        <div class="title">履历投递 </div>
                        <div class="content">
                            为确保履历投递成功，<br class="hide-for-large">下列应征管道请择一投递履历，<br>
                            切勿重复投递履历，谢谢。
                        </div>
                    </div>
                    <ul class="applyList">
                        <li>
                            <a href="https://www.104.com.tw/company/1a2x6bmbm1">
                                <div class="title">104招募连结</div>
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
                                <div class="note">Email直接投递履历连结</div>
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
                            我们来自不同地方，我们激荡不同文化；<br>
                            茶饮是我们凝聚在此的共同语言
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