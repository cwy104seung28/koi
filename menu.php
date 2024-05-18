<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_active=1 ORDER BY c_sort ASC");

//page end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'MENU';
    $menu = 'OUR TEA';
    $number = '03';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>

    <div class="menuListWrap">
        <div class="head-area">
            <div class="en">MENU</div>
        </div>
        <ul class="menuList">
            <?php foreach ($cat as $row): ?>
                <li class="menu-inner">
                    <div class="inner flex-container align-justify">
                        <div class="title">
                            <div class="en"><?= $row['c_title_en'] ?></div>
                            <div class="ch"><?= $row['c_title'] ?></div>
                        </div>
                        <ul class="linkList">
                            <?php $work = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='menu' AND d_class2=? AND d_id=file_d_id AND file_type='file' AND d_active=1 ORDER BY d_sort ASC, d_date DESC",[$row['c_id']]); ?>
                            <?php foreach ($work as $row2): ?>
                                <li>
                                    <a href="<?= $row2['file_link1'] ?>" target="_blank" class="flex-container align-middle">
                                        <div class="store"><?= $row2['d_title'] ?></div>
                                        <div class="arrow">
                                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="34.68"
                                                height="30.19" viewBox="0 0 34.68 30.19">
                                                <g id="c" data-name="設計">
                                                    <g>
                                                        <line class="e" y1="15.09" x2="31.07" y2="15.09" />
                                                        <path class="d"
                                                            d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.39,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
        <div class="back">
            <a href="./ourtea.php" class="flex-container align-middle">
                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="54.15" height="47.14"
                    viewBox="0 0 54.15 47.14">
                    <g id="c" data-name="設計">
                        <g>
                            <rect class="d" y="21.22" width="48.52" height="4.68" />
                            <path class="d"
                                d="M16.5,46.05c-.7-1.09-.37-2.54,.72-3.23l30.23-19.25L17.22,4.31c-1.09-.7-1.42-2.15-.72-3.23s2.15-1.4,3.24-.72L53.07,21.59c.67,.43,1.08,1.18,1.08,1.98s-.41,1.55-1.08,1.98L19.74,46.77c-.39,.25-.83,.37-1.26,.37-.77,0-1.53-.38-1.98-1.08Z" />
                        </g>
                    </g>
                </svg>
                <div class="text">OUR TEA</div>
            </a>
        </div>
        <div class="menu-link">
            <div class="circle">
                <div class="menu"><img src="./images/m-menu.svg" alt=""></div>
                <div class="store"><img src="./images/m-store.svg" alt=""></div>
            </div>
            <div class="hover-link">
                <div class="menu"><a href="./menu.php"><img src="./images/m-hover-menu.svg" alt=""></a></div>
                <div class="store"><a href="./store.php"><img src="./images/m-hover-store.svg" alt=""></a></div>
            </div>
            <div class="bear">
                <div class="drink"><img src="./images/b-drink-menu.svg" alt=""></div>
                <div class="big-body"><img src="./images/b-big-body.svg" alt=""></div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>


</html>
<script>
    ScrollTrigger.create({
        toggleActions: "play pause resume reverse", //重覆觸發
        trigger: ".menu-link",
        endTrigger: ".menuListWrap",
        start: "top 72%",
        end: "bottom 72%",
        scrub: 1,
        pin: true,
        // markers: true,
    });

    let $tl_menu = gsap.timeline({
        paused: true,
    })
        .to(CSSRulePlugin.getRule(".menuListWrap .head-area::after"), {
            duration: 1,
            width: '100%',
            ease: Power3.easeOut,
        })
        .to(".head-area .en", {
            duration: 0.75,
            y: 0,
            rotation: 0,
            ease: Power2.easeOut,
        }, '<0.5')
        .to(".menuList", {
            duration: 1,
            y: 0,
            opacity: 1,
            ease: Power2.easeOut,
        })
    // .to(CSSRulePlugin.getRule(".menuListWrap .menuList .menu-inner::after"), {
    //     duration: 1,
    //     width: '100%',
    //     stagger: 0.3,
    //     ease: Power3.easeOut,
    // })
    // .to(".menuList>li .inner", {
    //     duration: 1.5,
    //     y: 0,
    //     rotation: 0,
    //     stagger: 0.1,
    //     ease: Power2.easeOut,
    // }, '<0')



    gsap.delayedCall(1, function () {
        $tl_menu.play();
    });
</script>