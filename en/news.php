<?php
require_once '../Connections/connect2data.php';
require_once 'paginator.class.php';

$ryder_cat = (isset($_GET['c'])) ? $_GET['c'] : 0;
date_default_timezone_set('Asia/Taipei');

if ($ryder_cat == 0) {
    $sort = 'd_date DESC';
    $cat = $DB->query("SELECT * FROM class_set WHERE c_parent='newsC' AND c_active_en=1 ORDER BY c_sort ASC");
    $work_top = $DB->row("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND d_data5='yes' AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT 1");
    $work_top_pic = $DB->row("SELECT * FROM file_set WHERE file_d_id=? AND file_type='newsTopCover' LIMIT 1", [$work_top['d_id']]);

    // $cat_top = $DB->row("SELECT * FROM class_set, data_set, file_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND d_id=file_d_id AND file_type='newsCover' AND d_class2=? AND d_sort=0 AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT 1", [$ryder_cat]);

    //page start
    $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $maxItem = 5;
    $limit = ($page - 1) * $maxItem;

    // 拿來計算全部有幾則
    $workTotal = $DB->query("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND (d_class2=? || $ryder_cat=0) AND d_data5='no' AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat]);
    $pageTotalCount = count($workTotal);
    $totalpage = ceil($pageTotalCount / $maxItem);

    //使用
    $work = $DB->query("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND (d_class2=? || $ryder_cat=0) AND d_data5='no' AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT ?, ?", [$ryder_cat, $limit, $maxItem]);

    $pages = new Paginator;
    $pages->items_total = $pageTotalCount;
    $pages->items_per_page = $maxItem;
    $pages->paginate();
} else {
    $sort = 'd_sort ASC';
    $now_cat = $DB->row("SELECT * FROM class_set WHERE c_parent='newsC' AND c_id=? AND c_active_en=1 LIMIT 1", [$ryder_cat]);

    $cat = $DB->query("SELECT * FROM class_set WHERE c_parent='newsC' AND c_active_en=1 ORDER BY c_sort ASC");
    // $work_top = $DB->row("SELECT * FROM class_set, data_set, file_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND d_id=file_d_id AND file_type='newsCover' AND d_class6='yes' AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT 1");
    $cat_top = $DB->row("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND d_class2=? AND d_sort=0 AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT 1", [$ryder_cat]);
    $cat_top_pic = $DB->row("SELECT * FROM file_set WHERE file_d_id=? AND file_type='newsTopCover' LIMIT 1", [$cat_top['d_id']]);

    //page start
    $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $maxItem = 5;
    $limit = ($page - 1) * $maxItem;

    // 拿來計算全部有幾則
    $workTotal = $DB->query("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND (d_class2=? || $ryder_cat=0) AND d_sort!=0 AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat]);
    $pageTotalCount = count($workTotal);
    $totalpage = ceil($pageTotalCount / $maxItem);

    //使用
    $work = $DB->query("SELECT * FROM class_set, data_set WHERE d_class1='news' AND c_parent='newsC' AND c_id=d_class2 AND (d_class2=? || $ryder_cat=0) AND d_sort!=0 AND d_active_en=1 AND c_active_en=1 ORDER BY d_sort ASC, d_date DESC LIMIT ?, ?", [$ryder_cat, $limit, $maxItem]);

    $pages = new Paginator;
    $pages->items_total = $pageTotalCount;
    $pages->items_per_page = $maxItem;
    $pages->paginate();
}


//page end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'NEWS';
    $menu = 'NEWS';
    $number = '04';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>
    <div class="newsWrap menu-pin">
        <div class="head-area">
            <div class="en">NEWS</div>
        </div>
        <?php if ($ryder_cat == 0) : ?>
            <div class="top-news">
                <a href="./news_detail.php?id=<?= $work_top['d_id'] ?>" class="flex-container align-middle align-justify">
                    <div class="pic-area hide-for-large">
                        <div class="cat"><?= $work_top['c_title'] ?></div>
                        <div class="date">(<?= date("F d, Y", strtotime($work_top['d_date'])) ?>)</div>
                        <div class="more hide-for-large">
                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="34.67" height="30.18" viewBox="0 0 34.67 30.18">
                                <g id="c" data-name="layout">
                                    <g class='arrow'>
                                        <line class="d" y1="15.09" x2="31.07" y2="15.09" />
                                        <path class="e" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.38,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07C11.01,0,11.95-.21,12.64,.23l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="article-area">
                        <div class="title">
                            <?= $work_top['d_title_en'] ?>
                        </div>
                        <div class="more show-for-large">
                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="54" height="53.02" viewBox="0 0 54 53.02">
                                <g id="c" data-name="layout">
                                    <g class="">
                                        <path class="e" d="M3.56,53.02c-1.15-.67-2.03-1.56-2.64-2.67C.31,49.24,0,47.97,0,46.54s.31-2.7,.92-3.82c.61-1.12,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                        <path class="e" d="M10.29,39.7h1.86l1.89,5.21c.24,.69,.45,1.39,.69,2.09h.07c.24-.7,.43-1.4,.67-2.09l1.86-5.21h1.88v10.31h-1.51v-5.1c0-.92,.13-2.25,.21-3.19h-.06l-.83,2.38-1.79,4.92h-1.01l-1.81-4.92-.81-2.38h-.06c.07,.94,.2,2.27,.2,3.19v5.1h-1.46v-10.31Z" />
                                        <path class="e" d="M21.85,46.18c0-2.58,1.72-4.06,3.63-4.06s3.63,1.49,3.63,4.06-1.72,4.02-3.63,4.02-3.63-1.47-3.63-4.02Zm5.6,0c0-1.64-.76-2.73-1.98-2.73s-1.96,1.09-1.96,2.73,.76,2.7,1.96,2.7,1.98-1.08,1.98-2.7Z" />
                                        <path class="e" d="M31.63,42.31h1.32l.13,1.39h.04c.55-.99,1.36-1.58,2.19-1.58,.38,0,.63,.06,.87,.17l-.29,1.4c-.27-.08-.46-.13-.77-.13-.63,0-1.39,.43-1.88,1.65v4.8h-1.6v-7.7Z" />
                                        <path class="e" d="M37.28,46.18c0-2.51,1.71-4.06,3.52-4.06,2.04,0,3.14,1.47,3.14,3.66,0,.31-.03,.63-.07,.81h-5c.13,1.47,1.05,2.35,2.38,2.35,.69,0,1.27-.21,1.83-.58l.56,1.02c-.71,.48-1.6,.81-2.61,.81-2.09,0-3.75-1.48-3.75-4.02Zm5.27-.7c0-1.33-.6-2.1-1.72-2.1-.97,0-1.82,.74-1.98,2.1h3.7Z" />
                                        <path class="e" d="M49.9,40c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31s.77-2.05,.77-3.28-.26-2.3-.77-3.27-1.25-1.73-2.21-2.3l.76-.91Z" />
                                    </g>
                                    <g class='arrow'>
                                        <line class="d" y1="15.09" x2="31.07" y2="15.09" />
                                        <path class="e" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.38,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07C11.01,0,11.95-.21,12.64,.23l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="pic-area">
                        <div class="cat show-for-large"><?= $work_top['c_title'] ?></div>
                        <div class="date show-for-large">(<?= date("F d, Y", strtotime($work_top['d_date'])) ?>)</div>
                        <div class="pic">
                            <?php if ($work_top_pic['file_link1']) : ?>
                                <img src="../<?= $work_top_pic['file_link1'] ?>">
                            <?php else : ?>
                                <img src="./images/news-top-init.jpg">
                            <?php endif ?>
                        </div>

                    </div>
                </a>
            </div>
        <?php else : ?>
            <div class="top-news">
                <a href="./news_detail.php?id=<?= $cat_top['d_id'] ?>" class="flex-container align-middle align-justify">
                    <div class="pic-area hide-for-large">
                        <div class="cat"><?= $work_top['c_title'] ?></div>
                        <div class="date">(<?= date("F d, Y", strtotime($work_top['d_date'])) ?>)</div>
                        <div class="more hide-for-large">
                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="34.67" height="30.18" viewBox="0 0 34.67 30.18">
                                <g id="c" data-name="layout">
                                    <g class='arrow'>
                                        <line class="d" y1="15.09" x2="31.07" y2="15.09" />
                                        <path class="e" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.38,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07C11.01,0,11.95-.21,12.64,.23l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="article-area">
                        <div class="title">
                            <?= $cat_top['d_title_en'] ?>
                        </div>
                        <div class="more show-for-large">
                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="54" height="53.02" viewBox="0 0 54 53.02">
                                <g id="c" data-name="layout">
                                    <g class="">
                                        <path class="e" d="M3.56,53.02c-1.15-.67-2.03-1.56-2.64-2.67C.31,49.24,0,47.97,0,46.54s.31-2.7,.92-3.82c.61-1.12,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                        <path class="e" d="M10.29,39.7h1.86l1.89,5.21c.24,.69,.45,1.39,.69,2.09h.07c.24-.7,.43-1.4,.67-2.09l1.86-5.21h1.88v10.31h-1.51v-5.1c0-.92,.13-2.25,.21-3.19h-.06l-.83,2.38-1.79,4.92h-1.01l-1.81-4.92-.81-2.38h-.06c.07,.94,.2,2.27,.2,3.19v5.1h-1.46v-10.31Z" />
                                        <path class="e" d="M21.85,46.18c0-2.58,1.72-4.06,3.63-4.06s3.63,1.49,3.63,4.06-1.72,4.02-3.63,4.02-3.63-1.47-3.63-4.02Zm5.6,0c0-1.64-.76-2.73-1.98-2.73s-1.96,1.09-1.96,2.73,.76,2.7,1.96,2.7,1.98-1.08,1.98-2.7Z" />
                                        <path class="e" d="M31.63,42.31h1.32l.13,1.39h.04c.55-.99,1.36-1.58,2.19-1.58,.38,0,.63,.06,.87,.17l-.29,1.4c-.27-.08-.46-.13-.77-.13-.63,0-1.39,.43-1.88,1.65v4.8h-1.6v-7.7Z" />
                                        <path class="e" d="M37.28,46.18c0-2.51,1.71-4.06,3.52-4.06,2.04,0,3.14,1.47,3.14,3.66,0,.31-.03,.63-.07,.81h-5c.13,1.47,1.05,2.35,2.38,2.35,.69,0,1.27-.21,1.83-.58l.56,1.02c-.71,.48-1.6,.81-2.61,.81-2.09,0-3.75-1.48-3.75-4.02Zm5.27-.7c0-1.33-.6-2.1-1.72-2.1-.97,0-1.82,.74-1.98,2.1h3.7Z" />
                                        <path class="e" d="M49.9,40c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31s.77-2.05,.77-3.28-.26-2.3-.77-3.27-1.25-1.73-2.21-2.3l.76-.91Z" />
                                    </g>
                                    <g class='arrow'>
                                        <line class="d" y1="15.09" x2="31.07" y2="15.09" />
                                        <path class="e" d="M10.57,29.49c-.45-.7-.24-1.63,.46-2.07L30.38,15.09,11.03,2.76c-.7-.45-.91-1.37-.46-2.07C11.01,0,11.95-.21,12.64,.23l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L12.64,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="pic-area">
                        <div class="cat show-for-large"><?= $cat_top['c_title'] ?></div>
                        <div class="date show-for-large">(<?= date("F d, Y", strtotime($cat_top['d_date'])) ?>)</div>
                        <div class="pic">
                            <?php if ($cat_top_pic['file_link1']) : ?>
                                <img src="../<?= $cat_top_pic['file_link1'] ?>">
                            <?php else : ?>
                                <img src="./images/news-top-init.jpg">
                            <?php endif ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif ?>
        <div class="newsListWrap">
            <div class="news-inner flex-container">
                <ul class="newsCatList">
                    <li class="<?php if (isset($ryder_cat) && $ryder_cat == '0') : ?>current<?php endif ?>">
                        <a href="./news.php" class="flex-container align-middle">
                            <div class="dot"></div>
                            <div class="title">
                                ALL
                            </div>
                        </a>
                    </li>
                    <?php foreach ($cat as $newsC) : ?>
                        <li class="<?php if (isset($ryder_cat) && $ryder_cat == $newsC['c_id']) : ?>current<?php endif ?>">
                            <a href="./news.php?c=<?= $newsC['c_id'] ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title"> <?= $newsC['c_title'] ?></div>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul class="newsList">
                    <?php foreach ($work as $row) : ?>
                        <?php if (strtotime($row['d_date']) <= time()) : ?>
                            <?php $pic = $DB->row("SELECT * FROM file_set WHERE file_d_id=?", [$row['d_id']]); ?>
                            <li class="flex-container align-middle">
                                <a href="./news_detail.php?id=<?= $row['d_id'] ?>" class="flex-container align-middle">
                                    <div class="flex-container align-justify align-middle hide-for-large" style="width: 100%; margin-bottom: 14px;">
                                        <div class="top-area">
                                            <div class="cat"><?= $row['c_title'] ?></div>
                                            <div class="date">(<?= date("F d, Y", strtotime($row['d_date'])) ?>)</div>
                                            <div class="title hide-for-large show-for-medium">
                                                <?= $row['d_title_en'] ?>
                                            </div>
                                        </div>
                                        <div class="pic">
                                            <?php if ($pic['file_link1']) : ?>
                                                <img src="../<?= $pic['file_link1'] ?>" alt="">
                                            <?php else : ?>
                                                <img src="./images/news-init.jpg">
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="top-area show-for-large">
                                        <div class="cat"><?= $row['c_title'] ?></div>
                                        <div class="date">(<?= date("F d, Y", strtotime($row['d_date'])) ?>)</div>
                                    </div>
                                    <div class="title show-for-large">
                                        <?= $row['d_title_en'] ?>
                                    </div>
                                    <div class="title hide-for-medium">
                                        <?= $row['d_title_en'] ?>
                                    </div>

                                    <div class="pic show-for-large">
                                        <?php if ($pic['file_link1']) : ?>
                                            <img src="../<?= $pic['file_link1'] ?>" alt="">
                                        <?php else : ?>
                                            <img src="./images/news-init.jpg">
                                        <?php endif ?>
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
            <ul class="news-page flex-container align-center-middle">
                <?php echo $pages->display_pages(); ?>
            </ul>
        </div>
        <?php include 'menu-link.php'; ?>

    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>

<script>
    let $tl_title = gsap.timeline({
            paused: true,
        })
        .to(".head-area .en", {
            duration: 1,
            y: 0,
            rotation: 0,
            ease: Power2.easeOut,
        })

    gsap.delayedCall(1, function() {
        $tl_title.play();
    });
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

    $('.menu-mobileWrap .news').addClass('current');
</script>