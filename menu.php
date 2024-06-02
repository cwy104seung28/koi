<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_level=1 AND c_active=1 ORDER BY c_sort ASC");

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
            <?php foreach ($cat as $row) : ?>
                <li class="menu-inner">
                    <div class="inner flex-container align-justify">
                        <div class="title">
                            <div class="en"><?= $row['c_title_en'] ?></div>
                            <div class="ch"><?= $row['c_title'] ?></div>
                        </div>
                        <ul class="linkList">
                            <?php $work = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='menu' AND d_class2=? AND d_id=file_d_id AND file_type='file' AND d_active=1 ORDER BY d_sort ASC, d_date DESC", [$row['c_id']]); ?>
                            <?php foreach ($work as $row2) : ?>
                                <li>
                                    <a href="<?= $row2['file_link1'] ?>" target="_blank" class="flex-container align-middle">
                                        <div class="store"><?= $row2['d_title'] ?></div>
                                        <div class="arrow">
                                            <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="34.68" height="30.19" viewBox="0 0 34.68 30.19">
                                                <g id="c" data-name="設計">
                                                    <g>
                                                        <line class="e" y1="15.09" x2="31.07" y2="15.09" />
                                                        <path class="d" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.39,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="68.26" height="37.28" viewBox="0 0 68.26 37.28">
                                                <g id="c" data-name="設計">
                                                    <g>
                                                        <path class="f" d="M3.16,37.28c-.9-.53-1.59-1.23-2.07-2.1s-.72-1.87-.72-2.99,.24-2.12,.72-3c.48-.88,1.17-1.57,2.07-2.1l.59,.7c-.76,.46-1.33,1.06-1.74,1.82s-.6,1.61-.6,2.57,.2,1.81,.6,2.57c.4,.76,.98,1.36,1.74,1.81l-.59,.72Z" />
                                                        <path class="f" d="M8.16,34.92v-7.7h2.72c.58,0,1.11,.1,1.61,.29,.49,.19,.92,.46,1.29,.81,.37,.34,.65,.75,.86,1.22s.31,.98,.31,1.53-.1,1.07-.3,1.53c-.2,.47-.49,.87-.85,1.22-.37,.34-.8,.61-1.29,.81s-1.03,.29-1.61,.29h-2.72Zm1.15-1.03h1.58c.4,0,.78-.07,1.12-.21s.65-.34,.91-.59c.26-.25,.46-.55,.6-.89,.14-.34,.21-.71,.21-1.12s-.07-.77-.21-1.11c-.14-.34-.34-.64-.6-.9-.26-.25-.56-.45-.91-.59s-.72-.21-1.12-.21h-1.58v5.63Z" />
                                                        <path class="f" d="M19.18,35.03c-.54,0-1.04-.13-1.48-.38-.44-.26-.79-.6-1.05-1.04s-.38-.93-.38-1.47,.13-1.03,.38-1.47,.61-.79,1.05-1.05c.44-.26,.94-.39,1.48-.39s1.05,.13,1.49,.39c.44,.26,.79,.61,1.04,1.05s.38,.93,.38,1.47-.13,1.03-.38,1.47-.6,.79-1.04,1.04c-.44,.26-.93,.38-1.49,.38Zm0-.97c.34,0,.66-.09,.94-.26,.28-.17,.5-.4,.66-.7,.16-.29,.24-.62,.24-.99s-.08-.68-.25-.97-.38-.52-.66-.7c-.27-.18-.58-.26-.93-.26s-.65,.09-.93,.26c-.28,.18-.5,.41-.66,.7s-.25,.61-.25,.97,.08,.7,.24,.99,.38,.53,.66,.7c.28,.17,.59,.26,.93,.26Z" />
                                                        <path class="f" d="M24.58,34.92l-1.56-5.6h1.07l1.09,4.11,1.28-4.11h.95l1.28,4.11,1.09-4.11h1.03l-1.57,5.6h-1.06l-1.25-4.1-1.27,4.1h-1.07Z" />
                                                        <path class="f" d="M32.07,34.92v-5.6h1.1v.57c.43-.45,.99-.68,1.68-.68,.43,0,.81,.09,1.14,.27,.33,.18,.58,.44,.77,.77,.19,.33,.28,.71,.28,1.14v3.52h-1.1v-3.33c0-.44-.12-.79-.37-1.04s-.59-.38-1.03-.38c-.29,0-.56,.06-.79,.19s-.43,.3-.58,.54v4.03h-1.1Z" />
                                                        <path class="f" d="M38.8,34.92v-7.7l1.1-.21v7.91h-1.1Z" />
                                                        <path class="f" d="M44.35,35.03c-.54,0-1.04-.13-1.48-.38-.44-.26-.79-.6-1.05-1.04s-.38-.93-.38-1.47,.13-1.03,.38-1.47,.61-.79,1.05-1.05c.44-.26,.94-.39,1.48-.39s1.05,.13,1.49,.39c.44,.26,.79,.61,1.04,1.05s.38,.93,.38,1.47-.13,1.03-.38,1.47-.6,.79-1.04,1.04c-.44,.26-.93,.38-1.49,.38Zm0-.97c.34,0,.66-.09,.94-.26,.28-.17,.5-.4,.66-.7,.16-.29,.24-.62,.24-.99s-.08-.68-.25-.97-.38-.52-.66-.7c-.27-.18-.58-.26-.93-.26s-.65,.09-.93,.26c-.28,.18-.5,.41-.66,.7s-.25,.61-.25,.97,.08,.7,.24,.99,.38,.53,.66,.7c.28,.17,.59,.26,.93,.26Z" />
                                                        <path class="f" d="M50.63,35.02c-.4,0-.76-.07-1.07-.21-.31-.14-.55-.34-.73-.6s-.26-.55-.26-.89c0-.53,.2-.94,.6-1.25s.96-.46,1.66-.46c.55,0,1.06,.11,1.53,.32v-.59c0-.4-.12-.7-.35-.9-.23-.2-.57-.3-1.02-.3-.26,0-.52,.04-.8,.12-.28,.08-.59,.2-.94,.36l-.41-.83c.42-.2,.82-.34,1.19-.43s.74-.14,1.11-.14c.73,0,1.29,.17,1.69,.52,.4,.34,.6,.84,.6,1.47v3.72h-1.08v-.48c-.25,.2-.52,.34-.8,.44-.29,.1-.6,.14-.94,.14Zm-1-1.73c0,.27,.12,.49,.35,.66,.23,.17,.53,.25,.91,.25,.29,0,.56-.04,.81-.13,.25-.09,.47-.22,.68-.41v-.95c-.21-.12-.43-.21-.67-.27-.23-.05-.49-.08-.78-.08-.4,0-.72,.08-.95,.25-.23,.17-.35,.39-.35,.68Z" />
                                                        <path class="f" d="M57.78,35.01c-.52,0-1-.13-1.43-.38s-.77-.6-1.02-1.04c-.25-.44-.37-.93-.37-1.47s.13-1.03,.38-1.46,.6-.78,1.03-1.03c.43-.26,.91-.39,1.44-.39,.31,0,.6,.05,.89,.14s.55,.23,.79,.42v-2.57l1.1-.21v7.91h-1.09v-.54c-.48,.42-1.05,.63-1.72,.63Zm.14-.96c.32,0,.62-.06,.89-.18,.27-.12,.49-.29,.68-.51v-2.52c-.18-.21-.41-.37-.68-.49-.27-.12-.56-.18-.89-.18-.35,0-.67,.08-.96,.25-.29,.17-.51,.4-.68,.69-.17,.29-.25,.62-.25,.98s.08,.7,.25,.99c.17,.29,.4,.53,.68,.7s.6,.26,.96,.26Z" />
                                                        <path class="f" d="M65.46,27.05c.9,.53,1.59,1.23,2.07,2.1,.48,.87,.72,1.87,.72,2.99s-.24,2.12-.72,3c-.48,.88-1.17,1.57-2.07,2.1l-.59-.7c.76-.46,1.33-1.06,1.74-1.82,.4-.75,.6-1.61,.6-2.57s-.2-1.81-.6-2.57c-.4-.76-.98-1.36-1.74-1.81l.59-.72Z" />
                                                    </g>
                                                    <g>
                                                        <line class="e" y1="10.06" x2="22.28" y2="10.06" />
                                                        <path class="d" d="M8.61,19.66c-.3-.46-.16-1.08,.31-1.38l12.9-8.22L8.92,1.84c-.47-.3-.61-.92-.31-1.38,.3-.46,.92-.6,1.38-.31l14.23,9.06c.29,.18,.46,.5,.46,.84s-.18,.66-.46,.84l-14.23,9.06c-.17,.11-.35,.16-.54,.16-.33,0-.65-.16-.85-.46Z" />
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
                <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="54.15" height="47.14" viewBox="0 0 54.15 47.14">
                    <g id="c" data-name="設計">
                        <g>
                            <rect class="d" y="21.22" width="48.52" height="4.68" />
                            <path class="d" d="M16.5,46.05c-.7-1.09-.37-2.54,.72-3.23l30.23-19.25L17.22,4.31c-1.09-.7-1.42-2.15-.72-3.23s2.15-1.4,3.24-.72L53.07,21.59c.67,.43,1.08,1.18,1.08,1.98s-.41,1.55-1.08,1.98L19.74,46.77c-.39,.25-.83,.37-1.26,.37-.77,0-1.53-.38-1.98-1.08Z" />
                        </g>
                    </g>
                </svg>
                <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="38.68" height="33.67" viewBox="0 0 38.68 33.67">
                    <g id="c" data-name="設計">
                        <g>
                            <rect class="d" y="15.16" width="34.66" height="3.35" />
                            <path class="d" d="M11.79,32.9c-.5-.78-.26-1.81,.52-2.31l21.59-13.75L12.3,3.08c-.78-.5-1.01-1.53-.52-2.31s1.54-1,2.31-.51l23.81,15.16c.48,.31,.77,.84,.77,1.41s-.29,1.1-.77,1.41l-23.81,15.16c-.28,.18-.59,.26-.9,.26-.55,0-1.09-.27-1.42-.77Z" />
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



    gsap.delayedCall(1, function() {
        $tl_menu.play();
    });
</script>