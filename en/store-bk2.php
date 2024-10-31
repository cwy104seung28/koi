<?php
require_once '../Connections/connect2data.php';
require_once 'paginator.class.php';

$ryder_cat = (isset($_GET['c'])) ? $_GET['c'] : 0;
$ryder_cat_sub = (isset($_GET['s'])) ? $_GET['s'] : 0;
$ryder_cat_brand = (isset($_GET['b'])) ? $_GET['b'] : 0;


$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_level=1 AND c_active=1 ORDER BY c_sort ASC");


//page start
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$maxItem = 9;
$limit = ($page - 1) * $maxItem;

// 拿來計算全部有幾則

// $cat_one = $DB->row("SELECT * FROM class_set WHERE c_parent='storeC' AND c_active=1 AND c_id=?", [$ryder_cat]);
$cat_now = $ryder_cat;

$sub_one = $DB->row("SELECT * FROM class_set WHERE c_parent='storeC' AND c_active=1 AND c_id=? AND c_link=?", [$ryder_cat_sub, $ryder_cat]);
$sub_now = $sub_one['c_id'];

$workTotal = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND (d_data5=? || $ryder_cat_brand = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub, $ryder_cat_brand]);
$pageTotalCount = count($workTotal);
$totalpage = ceil($pageTotalCount / $maxItem);

$work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND (d_data5=? || $ryder_cat_brand = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC LIMIT ?, ?", [$ryder_cat, $ryder_cat_sub, $ryder_cat_brand, $limit, $maxItem]);

$pages = new Paginator;
$pages->items_total = $pageTotalCount;
$pages->items_per_page = $maxItem;
$pages->paginate();
// echo $ryder_cat;
// echo '<br>';
// echo $ryder_cat_brand;
// foreach ($work as $row) {
//     echo $row['d_data5'] . ',';
// }

//koi的判斷
$work_koi = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_data5=1 AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC LIMIT ?, ?", [$ryder_cat, $ryder_cat_sub, $limit, $maxItem]);
$work_express = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_data5=2 AND d_id=file_d_id AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);
$work_fifty = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_data5=3 AND d_id=file_d_id AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);
$work_cafe = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_data5=4 AND d_id=file_d_id AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);
$work_plus = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_data5=5 AND d_id=file_d_id AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);

$check1 = 0;
$check2 = 0;
$check3 = 0;
$check4 = 0;
$check5 = 0;


foreach ($work_koi as $row1) {
    if ($row1['d_id'] == '') {
        $check1 = 0;
    } else {
        $check1 = 1;
    }
}
foreach ($work_express as $row2) {
    if ($row2['d_id'] == '') {
        $check2 = 0;
    } else {
        $check2 = 1;
    }
}
foreach ($work_fifty as $row3) {
    if ($row3['d_id'] == '') {
        $check3 = 0;
    } else {
        $check3 = 1;
    }
}
foreach ($work_cafe as $row4) {
    if ($row4['d_id'] == '') {
        $check4 = 0;
    } else {
        $check4 = 1;
    }
}
foreach ($work_plus as $row5) {
    if ($row5['d_id'] == '') {
        $check5 = 0;
    } else {
        $check5 = 1;
    }
}

$num = $DB->row("SELECT * FROM data_set WHERE d_class1='storeNum' AND d_active=1 AND d_sort=1");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'STORE';
    $menu = 'STORE';
    $number = '05';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body class="is-orange">
    <?php include 'topmenu.php'; ?>
    <div class="storeWrap">
        <div class="head-area">
            <div class="en">
                STORE
                <div class="note"><?= $num['d_title']; ?></div>
            </div>
        </div>
        <div class="storeListWrap flex-container align-justify">
            <div class="storeCat-area">
                <div class="storeCat-inner">
                    <div class="store">(Country)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $cat_now ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php foreach ($cat as $storeC) : ?>
                            <li class="<?php if (isset($cat_now) && $cat_now == $storeC['c_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $storeC['c_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title"> <?= $storeC['c_title'] ?></div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="storeCat-inner">
                    <div class="store">(Location)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat_sub == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $cat_now ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php
                        $store_level2_item = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_link=? AND c_level=2 AND c_active=1 ORDER BY c_sort ASC", [$cat_now]);
                        ?>
                        <?php foreach ($store_level2_item as $level2) : ?>
                            <li class="<?php if ($ryder_cat_sub == $level2['c_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $level2['c_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        <?= $level2['c_title']; ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    </ul>
                </div>
                <!-- <div class="storeCat-inner">
                    <div class="store">(Brand)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat_brand == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php if ($check1 == 1) : ?>
                            <li class="<?php if ($ryder_cat_brand == 1) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>&b=1" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        KOI Thé
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if ($check2 == 1) : ?>
                            <li class="<?php if ($ryder_cat_brand == 2) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>&b=2" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        KOI Thé Express
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if ($check3 == 1) : ?>
                            <li class="<?php if ($ryder_cat_brand == 3) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>&b=3" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        FIFITYLAN
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if ($check4 == 1) : ?>
                            <li class="<?php if ($ryder_cat_brand == 4) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>&b=4" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        KOI Cafe
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if ($check5 == 1) : ?>
                            <li class="<?php if ($ryder_cat_brand == 5) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $cat_now ?>&s=<?= $ryder_cat_sub ?>&b=5" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        KOI Plus
                                    </div>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div> -->
                <div class="storeCat-inner">
                    <div class="store">(Brand)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat_brand == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $ryder_cat_sub ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <!-- <?php
                                $store_brand_item = $DB->query("SELECT * FROM data_set WHERE d_class1='store' AND d_class3=? AND d_class2=? AND d_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);
                                ?>
                        <?php foreach ($store_brand_item as $brand) : ?>

                        <?php endforeach ?> -->
                        <!-- <?php $work_brand = $DB->query("SELECT * FROM data_set WHERE d_class1='storeBrand' AND d_active=1") ?>
                        <?php foreach ($work_brand as $brand) : ?>
                            <li class="<?php if ($ryder_cat_brand == $brand['d_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $brand['d_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        <?= $brand['d_title']; ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?> -->
                        <?php $work_brand = $DB->query("SELECT * FROM data_set WHERE d_class1='storeBrand' AND d_active=1") ?>
                        <?php foreach ($work_brand as $row_brand) : ?>
                            <!-- <?php $work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND d_class4=? AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub, $row_brand['d_id']]); ?>
                            <?php foreach ($work as $row) : ?>
                            <?php endforeach ?> -->
                            <li class="<?php if ($ryder_cat_brand == $row_brand['d_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $row_brand['d_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        <?= $row_brand['d_title']; ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!-- <?php $work_test = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class3 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND (d_class4=? || $ryder_cat_brand = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub, $ryder_cat_brand]); ?>
                <?php foreach ($work_test as $row) : ?>
                    <?php if ($row['d_class4'] == $row_brand['d_id']) : ?>
                        <li class="<?php if ($ryder_cat_brand == $row_brand['d_id']) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $ryder_cat_sub ?>&b=<?= $row_brand['d_id'] ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    <?= $row_brand['d_title']; ?>
                                </div>
                            </a>
                        </li>
                    <?php endif ?>
                <?php endforeach ?> -->
            </div>
            <div class="storeList-area">
                <ul class="storeList">
                    <?php foreach ($work as $row) : ?>
                        <li>
                            <div class="deco"><img src="./images/s-deco-top.svg"></div>
                            <div class="title"><?= $row['d_title']; ?></div>
                            <div class="phone"><?= $row['d_data1']; ?></div>
                            <div class="time"><?= $row['d_data2']; ?></div>
                            <div class="address"><?= $row['d_data3']; ?></div>
                            <div class="other-area flex-container align-middle align-justify">
                                <div class="pic" data-store="<?= $row['d_id']; ?>"><img src="<?= $row['file_link1']; ?>" alt=""></div>
                                <a href="<?= $row['d_data4']; ?>" target="_blank">
                                    <div class="inner flex-container align-middle align-justify">
                                        <div class="brand"><img src="./images/<?= $row['d_data5']; ?>.svg" alt=""></div>
                                        <div class="arrow">
                                            <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="32.84" height="30.19" viewBox="0 0 32.84 30.19">
                                                <g id="c" data-name="layout">
                                                    <g>
                                                        <line class="d" y1="15.09" x2="29.24" y2="15.09" />
                                                        <path class="e" d="M8.73,29.49c-.45-.7-.24-1.63,.46-2.07L28.55,15.09,9.19,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L10.81,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="googlemap">( Google Map )</div>
                                </a>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul class="store-page flex-container align-center-middle">
                    <?php echo $pages->display_pages(); ?>
                </ul>
            </div>
        </div>
        <?php foreach ($work as $row) : ?>
            <div class="store-fancy fancy-<?= $row['d_id']; ?>">
                <div class="inner-fancy flex-container align-center-middle">
                    <div class="pic"><img src="<?= $row['file_link1']; ?>" alt=""></div>
                    <div class="back">
                        <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="70" height="54.92" viewBox="0 0 70 54.92">
                            <g id="c" data-name="lightbox">
                                <g class="e">
                                    <path class="d" d="M3.55,54.92c-1.15-.67-2.03-1.56-2.64-2.67s-.92-2.38-.92-3.81,.3-2.7,.92-3.82,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                    <path class="d" d="M10.29,41.6h3.2c2.12,0,3.64,.67,3.64,2.54,0,.98-.54,1.92-1.47,2.23v.07c1.18,.25,2.03,1.05,2.03,2.45,0,2.04-1.67,3.03-3.95,3.03h-3.45v-10.31Zm3.01,4.3c1.57,0,2.23-.59,2.23-1.56,0-1.08-.73-1.48-2.19-1.48h-1.43v3.04h1.39Zm.25,4.73c1.61,0,2.54-.57,2.54-1.83,0-1.16-.9-1.67-2.54-1.67h-1.64v3.5h1.64Z" />
                                    <path class="d" d="M19.67,49.86c0-1.65,1.4-2.51,4.61-2.86-.01-.9-.34-1.68-1.47-1.68-.81,0-1.57,.36-2.23,.79l-.6-1.09c.8-.5,1.88-1.01,3.11-1.01,1.92,0,2.8,1.22,2.8,3.26v4.64h-1.32l-.14-.88h-.04c-.7,.6-1.53,1.06-2.45,1.06-1.33,0-2.27-.87-2.27-2.23Zm4.61,.06v-1.89c-2.28,.28-3.05,.85-3.05,1.72,0,.76,.52,1.06,1.21,1.06s1.22-.32,1.85-.9Z" />
                                    <path class="d" d="M28.25,48.07c0-2.58,1.78-4.06,3.81-4.06,.98,0,1.7,.39,2.26,.88l-.8,1.05c-.42-.38-.85-.6-1.39-.6-1.29,0-2.21,1.09-2.21,2.73s.88,2.7,2.17,2.7c.64,0,1.22-.31,1.68-.7l.66,1.06c-.7,.63-1.61,.95-2.49,.95-2.09,0-3.68-1.47-3.68-4.02Z" />
                                    <path class="d" d="M36.67,40.74h1.57v7.2h.04l3.03-3.74h1.78l-2.62,3.12,2.91,4.58h-1.75l-2.09-3.49-1.3,1.5v1.99h-1.57v-11.16Z" />
                                    <path class="d" d="M48.87,41.9c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.3,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31s.77-2.05,.77-3.28-.26-2.3-.77-3.27-1.25-1.73-2.21-2.3l.76-.91Z" />
                                </g>
                                <g class="arrow">
                                    <rect class="d" x="7.17" y="15.61" width="35.69" height="3.45" />
                                    <path class="d" d="M30.73,.8c.51,.8,.27,1.87-.53,2.38L7.96,17.34l22.23,14.16c.8,.51,1.04,1.58,.53,2.38s-1.58,1.03-2.38,.53L3.83,18.79c-.49-.32-.8-.86-.8-1.45s.3-1.14,.8-1.45L28.34,.27c.29-.18,.61-.27,.93-.27,.57,0,1.13,.28,1.46,.8Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>

<script>
    $(".storeList li .pic").on("click", function() {
        var num = $(this).data('store');
        $(`.fancy-${num}`).addClass('is-show');
    })
    $(".store-fancy .back").on("click", function() {
        $('.store-fancy').removeClass('is-show');
    })

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
</script>