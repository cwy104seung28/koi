<?php
require_once '../Connections/connect2data.php';
require_once 'paginator.class.php';

$work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE c_parent='newsC' AND c_id=d_class2 AND d_class1='news' AND d_data1='yes' AND d_id=file_d_id AND file_type='newsTopCover' AND d_active_en=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC");

$drink = $DB->query("SELECT * FROM class_set, file_set WHERE c_parent='ourteaC' AND c_id=file_c_id AND file_type='ourteaIndexCover' AND c_data1='yes' AND c_active_en=1 ORDER BY c_sort ASC");
$ran = rand(1, 3);
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <?php $now = 'HOME';
    $menu = 'INDEX';
    $number = '01';
    ?>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="indexWrap-outter">
        <div class="indexWrap index-menu-pin">
            <div class="index-top-banner">
                <?php include 'random-video.php'; ?>
                <div class="top-text" id="horizontalWrap">
                    <img class="show-for-large" src="./images/index-koi-the.svg" alt="">
                    <div class="text-o-outter show-for-large">
                        <div class="text-o">
                            <?php if ($ran == 1) : ?>
                                <!-- 拿杯子 -->
                                <div class="pic"><img src="./images/index-circle-o-1.png"></div>
                            <?php elseif ($ran == 2) : ?>
                                <!-- 拿袋子 -->
                                <div class="pic"><img src="./images/index-circle-o-2.png"></div>
                            <?php else : ?>
                                <!-- 樹影 -->
                                <div class="pic"><img src="./images/index-circle-o-3.png"></div>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php if ($ran == 1) : ?>
                        <!-- 拿杯子 -->
                        <img class="hide-for-large" src="./images/index-koi-the-mobile-1.png">
                    <?php elseif ($ran == 2) : ?>
                        <!-- 拿袋子 -->
                        <img class="hide-for-large" src="./images/index-koi-the-mobile-2.png">
                    <?php else : ?>
                        <!-- 樹影 -->
                        <img class="hide-for-large" src="./images/index-koi-the-mobile-3.png">
                    <?php endif ?>
                </div>
                <!-- <div class="top-text hide-for-large">
                    <img src="./images/index-koi-the-mobile.png">
                </div> -->
                <div class="scroll show-for-large">
                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="170.03" height="80.69" viewBox="0 0 170.03 80.69">
                        </defs>
                        <g id="c" data-name="layout">
                            <g>
                                <path class="e" d="M3.56,80.69c-1.15-.67-2.03-1.56-2.64-2.67-.61-1.11-.92-2.38-.92-3.81s.31-2.7,.92-3.82c.61-1.12,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                <path class="e" d="M13.24,77.82c-.78,0-1.54-.15-2.27-.46-.73-.31-1.37-.74-1.93-1.3l.9-1.04c.53,.52,1.08,.91,1.63,1.16,.56,.25,1.14,.38,1.74,.38,.48,0,.89-.07,1.25-.2,.36-.13,.64-.33,.83-.58,.2-.25,.29-.54,.29-.85,0-.44-.15-.77-.46-1.01-.31-.23-.82-.41-1.53-.53l-1.64-.27c-.9-.16-1.57-.45-2.01-.87s-.67-.98-.67-1.68c0-.56,.15-1.05,.45-1.48,.3-.42,.72-.75,1.27-.99,.55-.23,1.18-.35,1.9-.35s1.41,.11,2.09,.34,1.3,.56,1.85,.99l-.81,1.12c-1.05-.8-2.12-1.2-3.21-1.2-.43,0-.8,.06-1.12,.18s-.56,.29-.74,.51c-.18,.22-.27,.47-.27,.76,0,.4,.14,.71,.41,.92,.27,.21,.72,.36,1.34,.46l1.58,.27c1.04,.17,1.8,.47,2.28,.91,.48,.44,.73,1.04,.73,1.81,0,.6-.16,1.12-.49,1.58s-.78,.8-1.37,1.06-1.27,.38-2.04,.38Z" />
                                <path class="e" d="M22.46,77.81c-.68,0-1.3-.16-1.86-.49-.56-.33-1-.77-1.32-1.33-.32-.56-.48-1.18-.48-1.88s.16-1.31,.49-1.87c.33-.55,.77-1,1.32-1.33,.56-.33,1.17-.5,1.85-.5,.54,0,1.06,.1,1.56,.31s.93,.5,1.29,.87l-.87,.97c-.27-.3-.57-.52-.91-.67s-.69-.22-1.05-.22c-.43,0-.82,.11-1.17,.32-.35,.21-.63,.51-.83,.88-.21,.37-.31,.79-.31,1.25s.1,.87,.31,1.25c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33,.36,0,.7-.07,1.02-.22,.32-.14,.62-.36,.9-.64l.85,.9c-.37,.38-.81,.68-1.29,.88-.49,.21-1,.31-1.53,.31Z" />
                                <path class="e" d="M27.03,77.68v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79,.33-.19,.71-.29,1.13-.29,.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.77,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                <path class="e" d="M35.84,77.82c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33,.35-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.31,.78-.31,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                <path class="e" d="M41.51,77.68v-9.8l1.4-.27v10.07h-1.4Z" />
                                <path class="e" d="M45.19,77.68v-9.8l1.4-.27v10.07h-1.4Z" />
                                <path class="e" d="M55.48,77.81c-.69,0-1.22-.16-1.58-.48-.36-.32-.55-.79-.55-1.41v-4.19h-1.51v-1.18h1.51v-1.82l1.39-.34v2.16h2.1v1.18h-2.1v3.86c0,.36,.08,.62,.24,.78,.16,.15,.43,.23,.81,.23,.2,0,.37-.01,.52-.04,.15-.03,.32-.07,.5-.13v1.18c-.19,.07-.4,.11-.65,.15-.25,.03-.47,.05-.68,.05Z" />
                                <path class="e" d="M61.77,77.82c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33,.35-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.31,.78-.31,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                <path class="e" d="M74.41,77.81c-.7,0-1.33-.16-1.9-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85,.75-1,1.29-1.33c.54-.33,1.14-.5,1.81-.5s1.25,.17,1.76,.5,.92,.78,1.23,1.34c.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.35,0,.68-.05,1-.16,.32-.11,.59-.26,.81-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                <path class="e" d="M78.34,77.68l2.77-3.65-2.66-3.47h1.64l1.83,2.44,1.83-2.44h1.58l-2.63,3.46,2.8,3.67h-1.64l-1.97-2.63-1.97,2.63h-1.58Z" />
                                <path class="e" d="M87.01,80.54v-9.98h1.39v.69c.6-.53,1.33-.8,2.18-.8,.67,0,1.28,.16,1.83,.49,.55,.33,.98,.77,1.29,1.32,.32,.55,.48,1.17,.48,1.86s-.16,1.31-.48,1.87c-.32,.56-.76,1-1.3,1.32s-1.16,.49-1.84,.49c-.39,0-.77-.06-1.13-.19-.36-.13-.7-.31-1.01-.54v3.47h-1.4Zm3.39-3.96c.46,0,.87-.11,1.23-.32s.65-.51,.86-.88c.21-.37,.32-.79,.32-1.25s-.11-.89-.32-1.26c-.21-.37-.5-.67-.86-.88-.36-.21-.77-.32-1.23-.32-.4,0-.77,.07-1.12,.22-.35,.15-.64,.36-.87,.63v3.22c.23,.26,.52,.47,.88,.62s.72,.22,1.11,.22Z" />
                                <path class="e" d="M96.14,77.68v-9.8l1.4-.27v10.07h-1.4Z" />
                                <path class="e" d="M103.21,77.82c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33,.35-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.31,.78-.31,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                <path class="e" d="M108.88,77.68v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79,.33-.19,.71-.29,1.13-.29,.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.77,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                <path class="e" d="M117.71,77.81c-.7,0-1.33-.16-1.9-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85,.75-1,1.29-1.33c.54-.33,1.14-.5,1.81-.5s1.25,.17,1.76,.5,.92,.78,1.23,1.34c.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.35,0,.68-.05,1-.16,.32-.11,.59-.26,.81-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                <path class="e" d="M126.5,77.68v-7.13h1.4v.69c.53-.55,1.2-.83,2-.83,.49,0,.92,.11,1.29,.32,.38,.21,.68,.5,.9,.87,.3-.39,.65-.69,1.05-.89,.4-.2,.85-.3,1.36-.3,.53,0,1,.12,1.39,.35,.4,.23,.71,.56,.94,.98,.23,.42,.34,.91,.34,1.46v4.48h-1.4v-4.24c0-.56-.15-1-.44-1.32-.29-.32-.69-.48-1.2-.48-.35,0-.66,.08-.94,.24-.28,.16-.52,.4-.73,.73,.02,.09,.03,.19,.04,.29,0,.1,.01,.21,.01,.31v4.48h-1.39v-4.24c0-.56-.15-1-.44-1.32-.29-.32-.69-.48-1.2-.48-.34,0-.64,.07-.91,.22-.27,.14-.5,.36-.7,.65v5.18h-1.4Z" />
                                <path class="e" d="M142.81,77.82c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33,.35-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.31,.78-.31,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                <path class="e" d="M148.48,77.68v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79,.33-.19,.71-.29,1.13-.29,.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.77,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                <path class="e" d="M157.31,77.81c-.7,0-1.33-.16-1.9-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85,.75-1,1.29-1.33c.54-.33,1.14-.5,1.81-.5s1.25,.17,1.76,.5,.92,.78,1.23,1.34c.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.35,0,.68-.05,1-.16,.32-.11,.59-.26,.81-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                <path class="e" d="M166.47,67.67c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31s.77-2.05,.77-3.28-.26-2.3-.77-3.27-1.25-1.73-2.21-2.3l.76-.91Z" />
                            </g>
                            <g class="arrow">
                                <line class="d" x1="26.38" x2="26.38" y2="31.07" />
                                <path class="e" d="M11.98,10.57c.7-.45,1.63-.24,2.07,.46l12.33,19.36,12.33-19.36c.45-.7,1.37-.91,2.07-.46,.7,.45,.9,1.38,.46,2.07l-13.59,21.34c-.28,.43-.75,.69-1.27,.69s-.99-.26-1.27-.69L11.52,12.64c-.16-.25-.23-.53-.23-.81,0-.5,.25-.98,.69-1.27Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="scroll hide-for-large">
                    <img src="./images/index-scroll-mobile.svg" alt="">
                </div>
                <div class="note show-for-large">
                    Happiness is to share special moments with friends.
                    A celebration, a date or just a relaxing break in the day, there is always a reason to get together
                    around a
                    cup of KOI tea. KOI brings joy to the world. Freshly brewed tea and flavorful ingredients, prepared
                    with
                    passion are the key to KOI’s authentic taste and the reason why people come back again and again.
                </div>
                <div class="note hide-for-large">
                    Happiness is to share special moments with friends.
                    A celebration, a date or just a relaxing break in the day, there is always a reason to get together
                    around a cup of KOI tea. KOI brings joy to the world. Freshly brewed tea and flavorful ingredients,
                    prepared with passion are the key to KOI’s authentic taste and the reason why people come back again
                    and again.
                </div>
            </div>
            <div class="no-light">
                <div class="index-text-area">
                    <div class="inner-text">
                        <ul class="bg-text-area">
                            <li class="marquee-1">
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                            </li>
                            <li class="marquee-2">
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                            </li>
                            <li class="marquee-3">
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                            </li>
                            <li class="marquee-1">
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                            </li>
                            <li class="marquee-4">
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                            </li>
                            <li class="marquee-2">
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                            </li>
                            <li class="marquee-3">
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                            </li>
                            <li class="marquee-1">
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                            </li>
                            <li class="marquee-3">
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-1.svg" alt=""></div>
                            </li>
                            <li class="marquee-2">
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-2.svg" alt=""></div>
                            </li>
                            <li class="marquee-1">
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-3.svg" alt=""></div>
                            </li>
                            <li class="marquee-4">
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-4.svg" alt=""></div>
                            </li>
                            <li class="marquee-2">
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-5.svg" alt=""></div>
                            </li>
                            <li class="marquee-2">
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-6.svg" alt=""></div>
                            </li>
                            <li class="marquee-1">
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-7.svg" alt=""></div>
                            </li>
                            <li class="marquee-3">
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                                <div><img src="./images/index-bg-text-8.svg" alt=""></div>
                            </li>
                        </ul>
                        <ul class="bottom-text show-for-large marquee-2">
                            <li><img src="./images/index-text-marquee.svg" alt=""></li>
                            <li><img src="./images/index-text-marquee.svg" alt=""></li>
                        </ul>
                        <div class="bottom-textWrap hide-for-large">
                            <ul class="bottom-text marquee-2">
                                <li><img src="./images/index-text-marquee.svg" alt=""></li>
                                <li><img src="./images/index-text-marquee.svg" alt=""></li>
                            </ul>
                        </div>
                        <div class="center-pic" data-move='{"item": 22, "sec": 1}'></div>
                        <div class="center-circle show-for-large"></div>
                        <div class="center-circleWrap hide-for-large">
                            <div class="center-circle"></div>
                        </div>
                    </div>
                </div>
                <div class="index-feature-box hide-for-large">
                    <div class="index-feature-inner flex-container align-justify">
                        <ul class="feature-bgList flex-container align-justify left">
                            <li class="down">
                                <ul class="dot">
                                    <li class="is-sticky">
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="featureList up">
                            <li class="green">
                                <div class="dot">
                                    <img src="./video/tea-video.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/tea-video.gif">
                                </div>
                                <div class="inner flex-container align-middle">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        FRAGRANCE<br>
                                        OF TEA LEAVES</div>
                                    <!-- <div class="ch">
                                        浓郁茶香
                                    </div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/tea-video.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/tea-video.gif">
                                </div>
                            </li>
                        </ul>
                        <ul class="feature-bgList flex-container align-justify right">
                            <li class="down">
                                <ul class="dot">
                                    <li class="is-sticky">
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="index-feature">
                    <div class="index-feature-inner flex-container align-justify">
                        <ul class="feature-bgList flex-container align-justify left">
                            <li class="up show-for-large">
                                <ul class="dot">
                                    <li>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                    </li>
                                    <li>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                    </li>
                                    <li>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>

                                    </li>
                                    <li class="is-sticky">
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="down">
                                <ul class="dot">
                                    <li class="is-top">
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                    </li>
                                    <li>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                    </li>
                                    <li>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                    </li>
                                    <li class="is-sticky">
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="featureList up show-for-large">
                            <li class="green">
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        FRAGRANCE<br>
                                        OF TEA LEAVES</div>
                                    <!-- <div class="ch">
                                        浓郁茶香
                                    </div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                            </li>
                            <li class="orange">
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        HEART-WARMING<br>
                                        SERVICE
                                    </div>
                                    <!-- <div class="ch">
                                        热情服务
                                    </div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                            </li>
                            <li class="blue">
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        THE SOUND<br>
                                        OF SHAKING
                                    </div>
                                    <!-- <div class="ch">跳动冰块</div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                            </li>
                            <li class="yellow is-sticky">
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="en">
                                            DELICIOUS<br>
                                            GOLDEN BUBBLE
                                        </span>
                                        <!-- <span class="ch">美味珍珠</span> -->
                                    </div>
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                            </li>
                        </ul>
                        <ul class="featureList up hide-for-large">
                            <li class="green">
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        FRAGRANCE<br>
                                        OF TEA LEAVES</div>
                                    <!-- <div class="ch">
                                        浓郁茶香
                                    </div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/1.gif">
                                </div>
                            </li>
                            <li class="orange">
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        HEART-WARMING<br>
                                        SERVICE
                                    </div>
                                    <!-- <div class="ch">
                                        热情服务
                                    </div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/2.gif">
                                </div>
                            </li>
                            <li class="blue">
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div class="en">
                                        THE SOUND<br>
                                        OF SHAKING
                                    </div>
                                    <!-- <div class="ch">跳动冰块</div> -->
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/3-2.gif">
                                </div>
                            </li>
                            <li class="yellow is-sticky">
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                                <div class="inner">
                                    <div class="deco top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="248.6" height="28.06" viewBox="0 0 248.6 28.06">
                                            <path class="a" d="M2.61,17.6a2.43,2.43,0,0,0,2,2c30.77,5.2,73.47,8.42,120.67,8.42C171.83,28.06,213.4,25,244,20a2.44,2.44,0,0,0,2-2l2.59-15.87a1.47,1.47,0,0,0-1.7-1.7C216.05,5.66,173,9,125.28,9,76.58,9,32.68,5.52,1.73,0A1.47,1.47,0,0,0,0,1.71Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="en">
                                            DELICIOUS<br>
                                            GOLDEN BUBBLE
                                        </span>
                                        <!-- <span class="ch">美味珍珠</span> -->
                                    </div>
                                    <div class="deco bottom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="162.7" height="31.07" viewBox="0 0 162.7 31.07">
                                            <path class="a" d="M0,1.72,2.79,18.54a2.45,2.45,0,0,0,1.7,2c22.4,6.87,49.18,10.56,76.82,10.56s54.45-3.72,76.85-10.6a2.46,2.46,0,0,0,1.7-2l2.82-16.79a1.47,1.47,0,0,0-1.9-1.65c-23,7.42-50.59,11.45-79.47,11.45S24.91,7.61,1.93.08A1.47,1.47,0,0,0,0,1.72Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                                <div class="dot">
                                    <img src="./video/4.gif">
                                </div>
                            </li>
                        </ul>
                        <ul class="feature-bgList flex-container align-justify right">
                            <li class="down">
                                <ul class="dot">
                                    <li class="is-top">
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                        <div><img src="./images/index-feature-pic-4-1.png"></div>
                                    </li>
                                    <li>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                        <div><img src="./images/index-feature-pic-3-2.png"></div>
                                    </li>
                                    <li>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                        <div><img src="./images/index-feature-pic-2-2.png"></div>
                                    </li>
                                    <li class="is-sticky">
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                        <div><img src="./images/index-feature-pic-1-2.png"></div>
                                    </li>

                                </ul>
                            </li>
                            <li class="up show-for-large">
                                <ul class="dot">
                                    <li>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                        <div><img src="./video/1.gif"></div>
                                    </li>
                                    <li>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                        <div><img src="./video/2.gif"></div>
                                    </li>
                                    <li>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>
                                        <div><img src="./video/3-2.gif"></div>

                                    </li>
                                    <li class="is-sticky">
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                        <div><img src="./video/4.gif"></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="index-drink">
                    <div class="drink-inner">
                        <div class="drink-animation">
                            <div class="innerWrap">
                                <div class="bg">
                                    <div class="note">
                                        OUR<br>
                                        RECOMMENDATION
                                    </div>
                                    <div class="en">
                                        PEACH GREEN TEA<br>
                                        BLACK TEA MACCHIATO
                                    </div>
                                    <div class="ch-flex flex-container align-center-middle">
                                        <div class="ch left style-2">BLACK TEA MACCHIATO</div>
                                        <div class="ch">PEACH GREEN TEA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-area" id="scene">
                                <div class="milk-1" data-depth="-5">
                                    <div class="inner"><img src="./images/index-milk-1.png">
                                    </div>

                                </div>
                                <div class="milk-2" data-depth="-2">
                                    <div class="inner"><img src="./images/index-milk-2.png">
                                    </div>
                                </div>
                                <div class="peach-1" data-depth="-2.3">
                                    <div class="inner"><img src="./images/index-peach-1.png">
                                    </div>
                                </div>
                                <div class="peach-2" data-depth="-3.5">
                                    <div class="inner"><img src="./images/index-peach-2.png">
                                    </div>
                                </div>
                                <div class="grass-1" data-depth="-4.8">
                                    <div class="inner"><img src="./images/index-grass-1.png">
                                    </div>
                                </div>
                                <div class="grass-2" data-depth="-5">
                                    <div class="inner"><img src="./images/index-grass-2.png">
                                    </div>
                                </div>
                                <div class="tea-1" data-depth="-4.4">
                                    <div class="inner"><img src="./images/index-tea-1.png">
                                    </div>
                                </div>
                                <div class="tea-2" data-depth="-4.5">
                                    <div class="inner"><img src="./images/index-tea-2.png">
                                    </div>
                                </div>
                                <div class="drink-3" data-depth="-2">
                                    <div class="inner"><img src="./images/index-drink-3.png">
                                    </div>
                                </div>
                                <div class="drink-4" data-depth="-2.2">
                                    <div class="inner"><img src="./images/index-drink-4.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="drink-outter" data-r='{"opacity": 0, "y": 50, "stagger": 0.1}'>
                        <div class="head-area">
                            <div class="deco top">
                                <svg id="_層_2" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="114.89" height="12.97" viewBox="0 0 114.89 12.97">
                                    <g id="_計" data-name="設計">
                                        <path class="cls-1" d="M1.21,8.14c.08,.48,.45,.86,.93,.94,14.22,2.4,33.95,3.89,55.76,3.89,21.51,0,40.73-1.43,54.85-3.74,.48-.08,.86-.46,.93-.94l1.19-7.34c.08-.46-.32-.86-.78-.78-14.25,2.45-34.16,3.97-56.2,3.97S15.1,2.55,.8,.01C.33-.07-.07,.33,0,.79l1.2,7.34Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="overflow">
                                <div class="en">DRINK</div>
                            </div>
                            <div class="deco bottom">
                                <svg id="_層_2" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="75.19" height="14.36" viewBox="0 0 75.19 14.36">
                                    <g id="_計" data-name="設計">
                                        <path class="cls-1" d="M0,.8l1.28,7.78c.07,.43,.37,.78,.79,.91,10.35,3.17,22.73,4.88,35.5,4.88s25.16-1.72,35.51-4.9c.41-.13,.72-.48,.79-.91l1.3-7.76c.08-.51-.39-.92-.88-.76-10.62,3.43-23.38,5.29-36.72,5.29S11.51,3.51,.89,.04C.4-.12-.07,.29,0,.8Z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <ul class="drinksList" id="drinkHorizontal">
                            <?php foreach ($drink as $drink_row) : ?>
                                <?php $drinkIcon = $DB->row("SELECT * FROM class_set, file_set WHERE c_parent='ourteaC' AND c_id=? AND c_id=file_c_id AND file_type='file' AND c_data1='yes' AND c_active=1 ORDER BY c_sort ASC", [$drink_row['c_id']]); ?>

                                <li>
                                    <a href="./ourtea.php#<?= $drink_row['c_id'] ?>">
                                        <div class="pic-area" style="background: url('../<?= $drink_row['file_link1'] ?>') center/cover no-repeat;">
                                            <div class="circle">
                                                <div class="view-more hide-for-xlarge">
                                                    <img src="./images/view-more.svg">
                                                </div>
                                                <img src="../<?= $drink_row['file_link1'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="article-area flex-container">
                                            <?php if ($drinkIcon['file_link1'] != '') : ?>
                                                <div class="icon"><img src="../<?= $drinkIcon['file_link1'] ?>" alt=""></div>
                                            <?php endif ?>
                                            <div class="ch"><?= $drink_row['c_title_en'] ?></div>
                                            <div class="en">(<?= $drink_row['c_title'] ?>)</div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="index-news" data-r='{"opacity": 0, "y": 50, "stagger": 0.1}'>
                    <div class="head-area">
                        <div class="deco top">
                            <svg id="_層_2" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="114.89" height="12.97" viewBox="0 0 114.89 12.97">
                                <g id="_計" data-name="設計">
                                    <path class="cls-1" d="M1.21,8.14c.08,.48,.45,.86,.93,.94,14.22,2.4,33.95,3.89,55.76,3.89,21.51,0,40.73-1.43,54.85-3.74,.48-.08,.86-.46,.93-.94l1.19-7.34c.08-.46-.32-.86-.78-.78-14.25,2.45-34.16,3.97-56.2,3.97S15.1,2.55,.8,.01C.33-.07-.07,.33,0,.79l1.2,7.34Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="overflow">
                            <div class="en">NEWS</div>
                        </div>
                        <div class="deco bottom">
                            <svg id="_層_2" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="75.19" height="14.36" viewBox="0 0 75.19 14.36">
                                <g id="_計" data-name="設計">
                                    <path class="cls-1" d="M0,.8l1.28,7.78c.07,.43,.37,.78,.79,.91,10.35,3.17,22.73,4.88,35.5,4.88s25.16-1.72,35.51-4.9c.41-.13,.72-.48,.79-.91l1.3-7.76c.08-.51-.39-.92-.88-.76-10.62,3.43-23.38,5.29-36.72,5.29S11.51,3.51,.89,.04C.4-.12-.07,.29,0,.8Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <ul class="top-newsList">
                        <?php foreach ($work as $row) : ?>
                            <li>
                                <a href="./news_detail.php?id=<?= $row['d_id'] ?>" class="flex-container">
                                    <div class="pic"><img src="../<?= $row['file_link1'] ?>" alt=""></div>
                                    <div class="article-area">
                                        <div class="cat hide-for-large"><?= $row['c_title'] ?></div>
                                        <div class="date">(<?= date("F d, Y", strtotime($row['d_date'])) ?>)</div>
                                        <div class="title">
                                            <?= $row['d_title_en'] ?>
                                        </div>
                                        <div class="more">
                                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="53.45" height="53.02" viewBox="0 0 53.45 53.02">
                                                <g id="c" data-name="layout">
                                                    <g>
                                                        <path class="e" d="M3.56,53.02c-1.15-.67-2.03-1.56-2.64-2.67-.61-1.11-.92-2.38-.92-3.81s.31-2.7,.92-3.82c.61-1.12,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27c.51,.97,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                                        <path class="e" d="M10.29,39.7h1.86l1.89,5.21c.24,.69,.45,1.39,.69,2.09h.07c.24-.7,.43-1.4,.67-2.09l1.86-5.21h1.88v10.31h-1.51v-5.1c0-.92,.13-2.25,.21-3.19h-.06l-.83,2.38-1.79,4.92h-1.01l-1.81-4.92-.81-2.38h-.06c.07,.94,.2,2.27,.2,3.19v5.1h-1.46v-10.31Z" />
                                                        <path class="e" d="M21.85,46.18c0-2.58,1.72-4.06,3.63-4.06s3.63,1.49,3.63,4.06-1.72,4.02-3.63,4.02-3.63-1.47-3.63-4.02Zm5.6,0c0-1.64-.76-2.73-1.98-2.73s-1.96,1.09-1.96,2.73,.76,2.7,1.96,2.7,1.98-1.08,1.98-2.7Z" />
                                                        <path class="e" d="M31.63,42.31h1.32l.13,1.39h.04c.55-.99,1.36-1.58,2.18-1.58,.38,0,.63,.06,.87,.17l-.29,1.4c-.27-.08-.46-.13-.77-.13-.63,0-1.39,.43-1.88,1.65v4.8h-1.6v-7.7Z" />
                                                        <path class="e" d="M37.28,46.18c0-2.51,1.71-4.06,3.52-4.06,2.04,0,3.14,1.47,3.14,3.66,0,.31-.03,.63-.07,.81h-5c.13,1.47,1.05,2.35,2.38,2.35,.69,0,1.28-.21,1.84-.58l.56,1.02c-.71,.48-1.6,.81-2.61,.81-2.09,0-3.75-1.48-3.75-4.02Zm5.27-.7c0-1.33-.6-2.1-1.72-2.1-.97,0-1.82,.74-1.97,2.1h3.7Z" />
                                                        <path class="e" d="M49.89,40c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31,.51-.96,.77-2.05,.77-3.28s-.26-2.3-.77-3.27c-.51-.97-1.25-1.73-2.21-2.3l.76-.91Z" />
                                                    </g>
                                                    <g class="arrow">
                                                        <line class="d" y1="15.09" x2="31.07" y2="15.09" />
                                                        <path class="e" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.39,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07C11.01,0,11.95-.21,12.64,.23l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php include 'menu-link.php'; ?>
        <?php include 'footer.php'; ?>
    </div>
</body>
<?php include 'script.php'; ?>
<?php include 'home-script.php'; ?>

</html>