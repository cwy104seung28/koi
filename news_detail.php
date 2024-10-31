<?php
require_once 'Connections/connect2data.php';

// $catAll = $DB->query("SELECT * FROM class_set WHERE c_parent='newsC' AND c_active=1 ORDER BY c_sort ASC");

$work = $DB->row("SELECT * FROM class_set, data_set WHERE d_class1='news' AND d_id=? AND c_id=d_class2 AND d_active=1", [$_GET['id']]);

$work_pic = $DB->row("SELECT * FROM file_set WHERE file_d_id=? AND file_type='newsInnerCover'", [$_GET['id']]);

// $cat = $DB->row("SELECT * FROM class_set WHERE c_parent='newsC' AND c_id=? AND c_active=1 ORDER BY c_sort ASC", [$work['d_class2']]);
// $allwork = $DB->query("SELECT d_id FROM data_set, file_set, class_set WHERE d_class1='news' AND d_class2=c_id AND d_id=file_d_id AND file_type='newsCover' AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, c_sort ASC");
// $oneDimensionalArray = array_map('current', $allwork);
// $element = $work['d_id'];
// $count = count($oneDimensionalArray);

// $current_index = array_search($element, $oneDimensionalArray);

// $prev = $allwork[($current_index - 1 + $count) % $count];
// $next = $allwork[($current_index + 1 + $count) % $count];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'NEWS';
    $menu = 'NEWS';
    $number = '04';
    ?>
    <?php include 'html_head.php'; ?>
    <title> <?= $work['d_title'] ?> | KOI</title>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>
    <div class="newsDetailWrap menu-pin">
        <div class="banner-area">
            <div class="head-area">
                <div class="info-area">
                    <div class="cat"><?= $work['c_title'] ?></div>
                    <div class="date">(<?= date("F d, Y", strtotime($work['d_date'])) ?>)</div>
                </div>
                <div class="title">
                    <?= $work['d_title'] ?>
                </div>
            </div>
            <div class="banner">
                <?php if ($work['d_data4']) : ?>
                    <iframe width="560" height="315" src="<?= $work['d_data4'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <?php else : ?>
                    <?php if ($work_pic['file_link1']) : ?>
                        <img src="<?= $work_pic['file_link1'] ?>">
                    <?php endif ?>
                <?php endif ?>
            </div>
        </div>
        <div class="detailWrap">
            <div class="detail-area">
                <!-- 在这个充满变革的时刻，我们迎来了全新的商标转换——Part3：舞动新活力。这不仅是一个符号的更新，更是我们对于无尽创新的承诺。与以往的风格不同，我们带来的不仅仅是一杯饮料，更是一种崭新的体验。这是一场独一无二的视觉盛宴，仿佛在舞台上跳跃的音符，燃点起店里每一位顾客心中的热情。这次的转变，象征着我们对于品质和创意的不懈追求。每一滴滴的饮品都是用心调制，搭配着新商标的精致外观，带给您的不仅仅是味蕾的愉悦，更是对于生活的热情。商标转换
                Part3：舞动新活力，让我们一同奏响崭新的旋律，品味这独一无二的手摇饮料店新时代。在这个充满变革的时刻，我们迎来了全新的商标转换——Part3：舞动新活力。这不仅是一个符号的更新，更是我们对于无尽创新的承诺。与以往的风格不同，我们带来的不仅仅是一杯饮料，更是一种崭新的体验。这是一场独一无二的视觉盛宴，仿佛在舞台上跳跃的音符，燃点起店里每一位顾客心中的热情。这次的转变，象征着我们对于品质和创意的不懈追求。每一滴滴的饮品都是用心调制，搭配着新商标的精致外观，带给您的不仅仅是味蕾的愉悦，更是对于生活的热情。商标转换
                Part3：舞动新活力，让我们一同奏响崭新的旋律，品味这独一无二的手摇饮料店新时代。在这个充满变革的时刻，我们迎来了全新的商标转换——Part3：舞动新活力。这不仅是一个符号的更新，更是我们对于无尽创新的承诺。与以往的风格不同，我们带来的不仅仅是一杯饮料，更是一种崭新的体验。这是一场独一无二的视觉盛宴，仿佛在舞台上跳跃的音符，燃点起店里每一位顾客心中的热情。这次的转变，象征着我们对于品质和创意的不懈追求。每一滴滴的饮品都是用心调制，搭配着新商标的精致外观，带给您的不仅仅是味蕾的愉悦，更是对于生活的热情。商标转换
                Part3：舞动新活力，让我们一同奏响崭新的旋律，品味这独一无二的手摇饮料店新时代。在这个充满变革的时刻，我们迎来了全新的商标转换——Part3：舞动新活力。这不仅是一个符号的更新，更是我们对于无尽创新的承诺。与以往的风格不同，我们带来的不仅仅是一杯饮料，更是一种崭新的体验。这是一场独一无二的视觉盛宴，仿佛在舞台上跳跃的音符，燃点起店里每一位顾客心中的热情。更是一种崭新的体验。这是一场独一无二的视觉盛宴，仿佛在舞台上跳跃的音符，燃点起店里每一位顾客心中的热情。
                <div class="pic">
                    <img src="./images/news-detail-inner-pic.jpg" alt="">
                </div> -->
                <?= $work['d_content'] ?>
            </div>
            <div class="other-area flex-container align-justify">
                <a href="./news.php">
                    <div class="back">
                        <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="90" height="74.44" viewBox="0 0 90 74.44">
                            <g id="c" data-name="layout">
                                <g>
                                    <g>
                                        <path class="d" d="M4.63,74.44c-1.48-.86-2.61-2.01-3.39-3.44-.79-1.43-1.18-3.06-1.18-4.9s.39-3.47,1.18-4.91c.79-1.43,1.92-2.58,3.39-3.43l.97,1.15c-1.24,.75-2.18,1.73-2.84,2.97s-.99,2.64-.99,4.21,.33,2.96,.99,4.2,1.61,2.23,2.84,2.96l-.97,1.17Z" />
                                        <path class="d" d="M13.29,57.31h4.11c2.72,0,4.68,.86,4.68,3.26,0,1.26-.7,2.47-1.89,2.86v.09c1.51,.32,2.61,1.35,2.61,3.15,0,2.63-2.14,3.89-5.08,3.89h-4.43v-13.25Zm3.87,5.53c2.02,0,2.86-.76,2.86-2,0-1.39-.94-1.91-2.81-1.91h-1.84v3.91h1.78Zm.32,6.09c2.07,0,3.26-.74,3.26-2.36,0-1.49-1.15-2.14-3.26-2.14h-2.11v4.5h2.11Z" />
                                        <path class="d" d="M25.35,67.94c0-2.12,1.8-3.22,5.92-3.67-.02-1.15-.43-2.16-1.89-2.16-1.04,0-2.02,.47-2.86,1.01l-.77-1.4c1.03-.65,2.41-1.3,4-1.3,2.47,0,3.6,1.57,3.6,4.2v5.96h-1.69l-.18-1.13h-.05c-.9,.77-1.96,1.37-3.15,1.37-1.71,0-2.92-1.12-2.92-2.86Zm5.92,.07v-2.43c-2.93,.36-3.92,1.1-3.92,2.21,0,.97,.67,1.37,1.55,1.37s1.57-.41,2.38-1.15Z" />
                                        <path class="d" d="M36.39,65.63c0-3.31,2.29-5.22,4.9-5.22,1.26,0,2.18,.5,2.9,1.13l-1.03,1.35c-.54-.49-1.1-.77-1.78-.77-1.66,0-2.84,1.4-2.84,3.51s1.13,3.48,2.79,3.48c.83,0,1.57-.4,2.16-.9l.85,1.37c-.9,.81-2.07,1.22-3.21,1.22-2.68,0-4.74-1.89-4.74-5.17Z" />
                                        <path class="d" d="M47.2,56.22h2.02v9.25h.05l3.89-4.81h2.29l-3.37,4.02,3.75,5.89h-2.25l-2.68-4.48-1.67,1.93v2.56h-2.02v-14.35Z" />
                                        <path class="d" d="M62.9,57.7c1.48,.86,2.61,2.01,3.39,3.44,.79,1.43,1.18,3.06,1.18,4.9s-.39,3.47-1.18,4.91-1.92,2.58-3.39,3.43l-.97-1.15c1.24-.75,2.18-1.73,2.84-2.97,.66-1.24,.99-2.64,.99-4.21s-.33-2.96-.99-4.2c-.66-1.24-1.61-2.23-2.84-2.96l.97-1.17Z" />
                                    </g>
                                    <g class="arrow">
                                        <rect class="d" x="5.63" y="21.23" width="48.52" height="4.68" />
                                        <path class="d" d="M37.65,1.08c.7,1.09,.37,2.54-.72,3.23L6.7,23.57l30.23,19.25c1.09,.7,1.42,2.15,.72,3.23s-2.15,1.4-3.24,.72L1.08,25.55c-.67-.43-1.08-1.18-1.08-1.98s.41-1.55,1.08-1.98L34.41,.37c.39-.25,.83-.37,1.26-.37,.77,0,1.53,.38,1.98,1.08Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <img class="hide-for-large" src="./images/news-back-mobile.svg" alt="">
                    </div>
                </a>
                <div class="share-area show-for-large">
                    <div class="title">(Share)</div>
                    <ul class="shareList flex-container align-middle">
                        <li>
                            <a href="javascript:;">
                                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="36.26" height="36.01" viewBox="0 0 36.26 36.01">
                                    <g id="c" data-name="layout">
                                        <path class="d" d="M36.02,8.21C35.84,3.47,32.75,.19,27.99,.08,21.39-.06,14.76,.01,8.14,.07c-1.52,.01-3,.46-4.32,1.29C1.32,2.94,.31,5.38,.19,8.18,.05,12.23-.01,16.28,0,20.33c.01,2.84,.03,5.7,.35,8.53,.38,3.37,2.23,5.75,5.63,6.59,1.51,.38,3.11,.55,4.67,.55,5.72,.03,11.43,0,17.14-.12,4.85-.1,8.05-3.35,8.23-8.17,.1-3.24,.16-6.47,.25-9.69-.09-3.28-.13-6.54-.25-9.81ZM18.08,29.34c-6.27,0-11.39-5.14-11.36-11.4,.01-6.25,5.15-11.36,11.42-11.35,6.22,.03,11.33,5.14,11.33,11.38s-5.12,11.39-11.39,11.38ZM29.82,9.24c-1.47-.01-2.58-1.16-2.57-2.67,0-1.52,1.16-2.64,2.7-2.63,1.47,.01,2.6,1.19,2.6,2.68-.01,1.51-1.18,2.61-2.73,2.61Zm-11.69,1.36c-4.06,0-7.39,3.31-7.4,7.34,0,4.06,3.32,7.39,7.37,7.39s7.36-3.32,7.36-7.39-3.32-7.34-7.33-7.34Z" />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="35.02" height="35" viewBox="0 0 35.02 35">
                                    <g id="c" data-name="layout">
                                        <path class="d" d="M17.5,0C7.84,0,0,7.84,0,17.5s7.84,17.51,17.5,17.51,17.52-7.84,17.52-17.51S27.17,0,17.5,0Zm-.78,25.16c-1.32,1.19-2.71,1.15-2.71,1.15-3.75-.03-4.18-3.23-4.18-3.23-.37-2.08,.86-3.47,.86-3.47l4.01-4.21c.74-.67,1.74-.92,1.74-.92,2.45-.69,3.98,.96,3.98,.96,.57,.68,.1,1.37,.1,1.37-.77,.9-1.61,.19-1.61,.19-1.53-1.19-2.85,.07-2.85,.07l-3.63,3.84c-.05,.08-.31,.5-.31,.5-.75,2.14,1.2,2.68,1.2,2.68,1.29,.17,1.95-.57,1.95-.57l2.03-2.14c1.69,.97,2.84,.23,2.84,.23l-3.42,3.55Zm9.31-9.69l-4.11,4.12c-.75,.64-1.76,.88-1.76,.88-2.47,.62-3.96-1.06-3.96-1.06-.56-.69-.06-1.38-.06-1.38,.8-.87,1.61-.15,1.61-.15,1.5,1.24,2.85,0,2.85,0l3.73-3.76c.05-.07,.32-.49,.32-.49,.8-2.12-1.13-2.7-1.13-2.7-1.29-.21-1.96,.52-1.96,.52l-2.08,2.09c-1.54-.93-2.67-.39-2.82-.31l3.48-3.45c1.35-1.16,2.75-1.09,2.75-1.09,3.74,.12,4.11,3.33,4.11,3.33,.32,2.09-.95,3.45-.95,3.45Z" />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="37.73" height="36.5" viewBox="0 0 37.73 36.5">
                                    <g id="c" data-name="layout">
                                        <path class="d" d="M34.58,7.13S23.9-6.04,7.28,3.42c0,0-10.1,5.85-6.51,17.17,0,0,3.21,8.75,14.45,10.26,0,0,3.19,.12,2.07,3.42-1.12,3.29,1.57,1.97,1.57,1.97,0,0,9.87-4.73,15.71-12.32,5.85-7.56,2.16-14.13,0-16.79ZM11.3,20.92h-3.98c-.44,0-.8-.36-.8-.8v-7.47c0-.51,.41-.9,.91-.9s.9,.39,.9,.9v6.43c0,.07,.04,.12,.12,.12h2.84c.46,0,.86,.39,.86,.87s-.39,.86-.86,.86Zm3.64-.58c0,.49-.41,.9-.9,.9s-.9-.41-.9-.9v-7.7c0-.49,.41-.88,.9-.88s.9,.39,.9,.88v7.7Zm9.08-.32c0,.67-.55,1.22-1.23,1.22-.32,0-.61-.16-.8-.44l-3.63-5.57c-.04-.07-.15-.04-.15,.03v5.08c0,.49-.41,.9-.9,.9s-.91-.41-.91-.9v-7.34c0-.7,.57-1.25,1.26-1.25,.3,0,.58,.15,.74,.39l3.66,5.63c.04,.07,.15,.04,.15-.03v-5.09c0-.51,.41-.9,.9-.9s.91,.39,.91,.9v7.37Zm3.48-4.45h2.71c.48,0,.87,.39,.87,.87s-.39,.87-.87,.87h-2.71s-.07,.03-.07,.09v1.74s.03,.09,.07,.09h2.7c.48,0,.89,.39,.89,.88s-.41,.89-.89,.89h-3.8c-.42,0-.77-.35-.77-.77v-7.57c0-.42,.35-.77,.77-.77h3.8c.48,0,.89,.39,.89,.89s-.41,.88-.89,.88h-2.7s-.07,.04-.07,.09v1.74c0,.06,.03,.09,.07,.09Z" />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="19.26" height="36.5" viewBox="0 0 19.26 36.5">
                                    <g id="c" data-name="layout">
                                        <path class="d" d="M19.26,.77c-.03,1.6,0,3.17,0,4.74q0,.64-.64,.64c-1.38,.03-2.72,0-4.07,.13-1.12,.1-1.86,.87-1.92,1.99-.1,1.67-.06,3.33-.1,5,0,0,.03,.03,.1,.13h6.31c.03,.13,.03,.19,.03,.26-.26,1.99-.51,3.94-.77,5.93-.03,.32-.22,.35-.48,.35h-5.16v16.57H5.64V20.41c.03-.42-.13-.48-.48-.48H.51c-.38,0-.51-.06-.51-.45v-5.64c0-.38,.13-.51,.48-.48H5.09c.16,0,.35-.03,.54-.03v-.77c.06-2.05-.13-4.1,.22-6.12,.42-2.21,1.51-4.01,3.43-5.19,1.41-.87,2.95-1.25,4.58-1.25s3.24,.16,4.84,.19c.42,.03,.58,.16,.54,.58Z" />
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
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
    ScrollTrigger.create({
        trigger: ".menu-pin",
        toggleActions: "play pause resume reverse", //重覆觸發
        start: "top 80%",
        end: "bottom 80%",
        // markers: true,
        onEnter() {
            $(".menu-link").addClass("is-show");
        },
        onLeave() {
            $('.menu-link').removeClass('is-show');
        },
        onEnterBack() {
            $(".menu-link").addClass("is-show");
        },
        onLeaveBack() {
            $(".menu-link").removeClass("is-show");
        },
    });



    $('iframe').css('width', '100%')

    $(window).on("resize", function() {
        $("iframe").each(function(i, el) {
            var _ratio = $(el).attr('height') / $(el).attr('width')
            $(el).css({
                height: $(el).width() * _ratio
            })
        })
    }).trigger("resize")

    $('.menu-mobileWrap .news').addClass('current');
</script>