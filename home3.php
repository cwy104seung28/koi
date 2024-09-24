<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

$work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE c_parent='newsC' AND c_id=d_class2 AND d_class1='news' AND d_data1='yes' AND d_id=file_d_id AND file_type='newsTopCover' AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC");

$drink = $DB->query("SELECT * FROM class_set, file_set WHERE c_parent='ourteaC' AND c_id=file_c_id AND file_type='ourteaIndexCover' AND c_data1='yes' AND c_active=1 ORDER BY c_sort ASC");
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
                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="79.71" height="68.42" viewBox="0 0 79.71 68.42">
                        <g id="c" data-name="圖層 1">
                            <g class="arrow">
                                <rect class="d" x="12.09" width="2.67" height="27.63" />
                                <path class="d" d="M.62,9.4c.62-.4,1.45-.21,1.84,.41L13.42,27.02,24.39,9.81c.4-.62,1.22-.81,1.84-.41s.8,1.23,.41,1.84L14.55,30.22c-.24,.38-.67,.62-1.13,.62s-.88-.23-1.13-.62L.21,11.24c-.14-.22-.21-.47-.21-.72,0-.44,.22-.87,.62-1.13Z" />
                            </g>
                            <g>
                                <path class="d" d="M3.74,68.42c-1.21-.71-2.13-1.64-2.78-2.81C.32,64.44,0,63.1,0,61.6s.32-2.84,.96-4.01c.64-1.17,1.57-2.11,2.78-2.81l.8,.94c-1.01,.61-1.79,1.42-2.33,2.43s-.81,2.16-.81,3.45,.27,2.42,.81,3.44,1.32,1.82,2.33,2.42l-.8,.96Z" />
                                <path class="d" d="M22.7,64.91c0,.72-.16,1.09-.68,1.27-.53,.18-1.43,.19-2.75,.19-.06-.31-.24-.83-.4-1.12,1.06,.04,2.08,.04,2.39,.03,.27-.02,.35-.09,.35-.37v-8.4H11.98v9.86h-1.08v-10.92h4.02c.37-.8,.75-1.81,.94-2.56l1.34,.24c-.32,.78-.71,1.62-1.08,2.33h6.57v9.46Zm-7.79-1.61v1.05h-1v-5.89h5.72v4.85h-4.71Zm0-3.86v2.87h3.7v-2.87h-3.7Z" />
                                <path class="d" d="M32.45,55.1v2.62l.19-.22c1.75,.84,4.07,2.17,5.23,3.05l-.77,.99c-1-.82-2.98-2.03-4.66-2.93v7.75h-1.16v-11.25h-5.63v-1.09h13.01v1.09h-6.22Z" />
                                <path class="d" d="M43.35,59.52c-.56-.44-1.65-1.13-2.5-1.61l.63-.77c.82,.43,1.96,1.09,2.52,1.52l-.65,.85Zm-2.02,5.92c.66-1.09,1.58-2.98,2.27-4.6l.85,.65c-.6,1.5-1.43,3.29-2.14,4.61l-.99-.66Zm2.9-9.71c-.56-.53-1.74-1.34-2.64-1.89l.68-.74c.88,.53,2.06,1.3,2.67,1.8l-.71,.82Zm9.91,1.69v2.48h-1.05v-1.59h-7.56v1.59h-1.02v-2.48h1.53v-3.96h6.54v3.96h1.55Zm-1.46,7.85c0,.54-.12,.8-.53,.96-.4,.16-1.06,.16-2.11,.16-.04-.26-.16-.63-.31-.9,.75,.03,1.44,.03,1.64,.03,.21-.01,.27-.07,.27-.25v-1.86c-1.53,.34-3.08,.71-4.3,.97l-.34-.88c1.19-.22,2.93-.57,4.64-.93v-2.37h-4.67v1.41c0,1.46-.21,3.48-1.3,4.88-.18-.19-.62-.52-.85-.62,1-1.27,1.12-2.99,1.12-4.26v-2.3h6.75v5.95Zm-5.63-7.85h1.72v-2.09h2.78v-.99h-4.51v3.08Zm.72,3.52c1.15,.12,2.62,.44,3.4,.78l-.34,.78c-.78-.34-2.24-.71-3.4-.85l.34-.71Zm3.79-4.88h-1.87v1.36h1.87v-1.36Z" />
                                <path class="d" d="M62.15,64.26c-.07-.27-.16-.6-.27-.96-4.07,.9-4.6,1.06-4.94,1.27v-.06s-.01,.03-.01,.04c-.04-.22-.22-.74-.34-1.02,.24-.06,.43-.46,.66-1,.21-.49,.82-2.21,1.19-3.92h-2.03v-1h6.44v1h-3.27c-.38,1.55-.93,3.17-1.5,4.49l3.49-.74c-.27-.75-.56-1.55-.85-2.24l.9-.25c.57,1.31,1.22,3.04,1.5,4.07l-.97,.31Zm.46-9.15h-5.66v-.99h5.66v.99Zm6.85,1.19s-.01,.4-.01,.55c-.19,6.03-.37,8.1-.87,8.75-.31,.38-.59,.5-1.06,.56-.46,.04-1.25,.03-2.03-.01-.03-.32-.15-.77-.34-1.08,.82,.07,1.59,.07,1.92,.07,.25,.01,.41-.03,.56-.22,.38-.43,.59-2.36,.75-7.57h-2.2c-.21,3.62-.82,6.95-2.98,9.02-.19-.27-.57-.63-.85-.8,1.99-1.83,2.58-4.88,2.75-8.22h-2.05v-1.05h2.09c.04-1.03,.04-2.09,.04-3.14h1.08c0,1.05-.01,2.11-.04,3.14h3.24Z" />
                                <path class="d" d="M75.97,54.72c1.21,.71,2.13,1.64,2.78,2.81,.64,1.17,.96,2.5,.96,4.01s-.32,2.84-.96,4.01c-.64,1.17-1.57,2.11-2.78,2.81l-.8-.94c1.01-.61,1.79-1.42,2.33-2.43s.81-2.16,.81-3.45-.27-2.42-.81-3.44-1.32-1.82-2.33-2.42l.8-.96Z" />
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
                                    <div class="ch">
                                        浓郁茶香
                                    </div>
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
                                    <div class="ch">
                                        浓郁茶香
                                    </div>
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
                                    <div class="ch">
                                        热情服务
                                    </div>
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
                                    <div class="ch">跳动冰块</div>
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
                                        <span class="ch">美味珍珠</span>
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
                                    <div class="ch">
                                        浓郁茶香
                                    </div>
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
                                    <div class="ch">
                                        热情服务
                                    </div>
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
                                    <div class="ch">跳动冰块</div>
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
                                        <span class="ch">美味珍珠</span>
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
                                        RECOMMAND
                                    </div>
                                    <div class="en">
                                        PEACH GREEN TEA<br>
                                        BLACK TEA MACCHIATO
                                    </div>
                                    <div class="ch-flex flex-container align-center-middle">
                                        <div class="ch left">红茶玛奇朵</div>
                                        <div class="ch">水蜜桃绿茶</div>
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
                                        <div class="pic-area" style="background: url('<?= $drink_row['file_link1'] ?>') center/cover no-repeat;">
                                            <div class="circle">
                                                <div class="view-more hide-for-xlarge">
                                                    <img src="./images/view-more.svg">
                                                </div>
                                                <img src="<?= $drink_row['file_link1'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="article-area flex-container">
                                            <?php if ($drinkIcon['file_link1'] != '') : ?>
                                                <div class="icon"><img src="<?= $drinkIcon['file_link1'] ?>" alt=""></div>
                                            <?php endif ?>
                                            <div class="ch"><?= $drink_row['c_title'] ?></div>
                                            <div class="en">(<?= $drink_row['c_title_en'] ?>)</div>
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
                                    <div class="pic"><img src="<?= $row['file_link1'] ?>" alt=""></div>
                                    <div class="article-area">
                                        <div class="cat hide-for-large"><?= $row['c_title'] ?></div>
                                        <div class="date">(<?= date("F d, Y", strtotime($row['d_date'])) ?>)</div>
                                        <div class="title">
                                            <?= $row['d_title'] ?>
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

</html>
<?php include 'home-script.php'; ?>