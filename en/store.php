<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

function isMobileCheck()
{
    //Detect special conditions devices
    $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
    if (stripos($_SERVER['HTTP_USER_AGENT'], "Android") && stripos($_SERVER['HTTP_USER_AGENT'], "mobile")) {
        $Android = true;
    } else if (stripos($_SERVER['HTTP_USER_AGENT'], "Android")) {
        $Android = false;
        $AndroidTablet = true;
    } else {
        $Android = false;
        $AndroidTablet = false;
    }
    $webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
    $BlackBerry = stripos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
    $RimTablet = stripos($_SERVER['HTTP_USER_AGENT'], "RIM Tablet");
    //do something with this information
    if ($iPod || $iPhone || $iPad || $Android || $AndroidTablet || $webOS || $BlackBerry || $RimTablet) {
        return true;
    } else {
        return false;
    }
}

$ryder_cat = (isset($_GET['c'])) ? $_GET['c'] : 0;
$ryder_cat_sub = (isset($_GET['s'])) ? $_GET['s'] : 0;
$ryder_cat_brand = (isset($_GET['b'])) ? $_GET['b'] : 0;
// echo $ryder_cat . '&' . $ryder_cat_sub . '&' . $ryder_cat_brand;


$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_level=1 AND c_active=1 ORDER BY c_sort ASC");
$cat_social = $DB->query("SELECT * FROM class_set WHERE c_id=? AND c_parent='storeC' AND c_level=1 AND c_active=1 ORDER BY c_sort ASC", [$ryder_cat]);

//page start
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

if (isMobileCheck()) {
    $maxItem = 6;
} else {
    $maxItem = 9;
}

$limit = ($page - 1) * $maxItem;

// 拿來計算全部有幾則

// $cat_one = $DB->row("SELECT * FROM class_set WHERE c_parent='storeC' AND c_active=1 AND c_id=?", [$ryder_cat]);

$sub_one = $DB->row("SELECT * FROM class_set WHERE c_parent='storeC' AND c_active=1 AND c_id=? AND c_link=?", [$ryder_cat_sub, $ryder_cat]);
// $sub_now = $sub_one['c_id'];

$work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class3 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND (d_class4=? || $ryder_cat_brand = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY c_sort ASC ,d_sort ASC, d_date DESC LIMIT ?, ?", [$ryder_cat, $ryder_cat_sub, $ryder_cat_brand, $limit, $maxItem]);

$workTotal = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class3 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND (d_class4=? || $ryder_cat_brand = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub, $ryder_cat_brand]);

$pageTotalCount = count($workTotal);
$totalpage = ceil($pageTotalCount / $maxItem);


$pages = new Paginator;
$pages->items_total = $pageTotalCount;
$pages->items_per_page = $maxItem;
$pages->paginate();
// echo $ryder_cat;
// echo '<br>';
// echo $ryder_cat_brand;
// foreach ($work as $row) {
//     echo $row['d_class4'] . ',';
// }

//koi的判斷
$check = 0;
// $work_brand = $DB->query("SELECT * FROM data_set WHERE d_class1='storeBrand' AND d_active=1 ORDER BY d_sort ASC, d_date DESC");
// foreach ($work_brand as $row_brand) {
//     $work = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class2 AND d_class3=? AND (d_class2=? || $ryder_cat_sub = 0) AND d_class4=? AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub, $row_brand['d_id']]);
//     foreach ($work as $row) {
//     }
// }


$num = $DB->row("SELECT * FROM data_set WHERE d_class1='storeNum' AND d_active=1 AND d_sort=1");

//搜尋當前brand
$brand_total = $DB->query("SELECT * FROM class_set, data_set, file_set WHERE d_class1='store' AND c_parent='storeC' AND c_id=d_class3 AND (d_class3=? || $ryder_cat = 0) AND (d_class2=? || $ryder_cat_sub = 0) AND file_type='storeCover' AND file_d_id=d_id AND d_active=1 AND c_active=1 ORDER BY d_sort ASC, d_date DESC", [$ryder_cat, $ryder_cat_sub]);
$brand_array = array();
foreach ($brand_total as $total) {
    array_push($brand_array, $total['d_class4']);
}
// print_r($brand_array);

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
    <div class="storeWrap menu-pin">
        <div class="head-area">
            <div class="en">
                STORE
                <div class="note"><?= $num['d_title_en']; ?></div>
            </div>
        </div>
        <div class="storeListWrap flex-container align-justify">
            <div class="storeCat-area">
                <div class="storeCat-inner">
                    <div class="store">(Country)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat == 0) : ?>current<?php endif ?>">
                            <a href="./store.php" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php foreach ($cat as $storeC) : ?>
                            <li class="<?php if (isset($ryder_cat) && $ryder_cat == $storeC['c_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $storeC['c_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title"> <?= $storeC['c_title_en'] ?></div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="storeCat-inner">
                    <div class="store">(Location)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat_sub == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $ryder_cat ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php
                        $store_level2_item = $DB->query("SELECT * FROM class_set WHERE c_parent='storeC' AND c_link=? AND c_level=2 AND c_active=1 ORDER BY c_sort ASC", [$ryder_cat]);
                        ?>
                        <?php foreach ($store_level2_item as $level2) : ?>
                            <li class="<?php if ($ryder_cat_sub == $level2['c_id']) : ?>current<?php endif ?>">
                                <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $level2['c_id'] ?>" class="flex-container align-middle">
                                    <div class="dot"></div>
                                    <div class="title">
                                        <?= $level2['c_title_en']; ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    </ul>
                </div>
                <div class="storeCat-inner">
                    <div class="store">(Brand)</div>
                    <ul class="storeCatList">
                        <li class="<?php if ($ryder_cat_brand == 0) : ?>current<?php endif ?>">
                            <a href="./store.php?c=<?= $ryder_cat ?>&b=<?= $ryder_cat_sub ?>" class="flex-container align-middle">
                                <div class="dot"></div>
                                <div class="title">
                                    All
                                </div>
                            </a>
                        </li>
                        <?php $work_brand = $DB->query("SELECT * FROM data_set WHERE d_class1='storeBrand' AND d_active=1") ?>
                        <?php foreach ($work_brand as $row_brand) : ?>
                            <?php if ((in_array($row_brand['d_id'], $brand_array)) != NULL) : ?>
                                <li class="<?php if ($ryder_cat_brand == $row_brand['d_id']) : ?>current<?php endif ?>">
                                    <a href="./store.php?c=<?= $ryder_cat ?>&s=<?= $ryder_cat_sub ?>&b=<?= $row_brand['d_id'] ?>" class="flex-container align-middle">
                                        <div class="dot"></div>
                                        <div class="title">
                                            <?= $row_brand['d_title_en']; ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="storeList-area">
                <ul class="store-socialList flex-container align-right">
                    <?php foreach ($cat_social as $social) : ?>
                        <?php if ($social['c_data3'] != '') : ?>
                            <li>
                                <a target="_blank" href="<?= $social['c_data3'] ?>">
                                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="36.26" height="36.01" viewBox="0 0 36.26 36.01">
                                        <g id="c" data-name="layout">
                                            <path class="d" d="M36.02,8.21C35.84,3.47,32.75,.19,27.99,.08,21.39-.06,14.76,.01,8.14,.07c-1.52,.01-3,.46-4.32,1.29C1.32,2.94,.31,5.38,.19,8.18,.05,12.23-.01,16.28,0,20.33c.01,2.84,.03,5.7,.35,8.53,.38,3.37,2.23,5.75,5.63,6.59,1.51,.38,3.11,.55,4.67,.55,5.72,.03,11.43,0,17.14-.12,4.85-.1,8.05-3.35,8.23-8.17,.1-3.24,.16-6.47,.25-9.69-.09-3.28-.13-6.54-.25-9.81ZM18.08,29.34c-6.27,0-11.39-5.14-11.36-11.4,.01-6.25,5.15-11.36,11.42-11.35,6.22,.03,11.33,5.14,11.33,11.38s-5.12,11.39-11.39,11.38ZM29.82,9.24c-1.47-.01-2.58-1.16-2.57-2.67,0-1.52,1.16-2.64,2.7-2.63,1.47,.01,2.6,1.19,2.6,2.68-.01,1.51-1.18,2.61-2.73,2.61Zm-11.69,1.36c-4.06,0-7.39,3.31-7.4,7.34,0,4.06,3.32,7.39,7.37,7.39s7.36-3.32,7.36-7.39-3.32-7.34-7.33-7.34Z" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($social['c_data2'] != '') : ?>
                            <li>
                                <a target="_blank" href="<?= $social['c_data2'] ?>">
                                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="36.26" height="36.01" viewBox="0 0 36.26 36.01">
                                        <g id="c" data-name="layout">
                                            <path class="d" d="M36.02,8.21C35.85,3.47,32.75,.19,27.99,.08,21.4-.06,14.76,.01,8.14,.07c-1.52,.01-3,.46-4.32,1.29C1.32,2.94,.31,5.38,.19,8.18,.05,12.23,0,16.28,0,20.33c.02,2.84,.03,5.71,.35,8.53,.37,3.36,2.22,5.74,5.63,6.59,1.51,.37,3.11,.55,4.67,.55,5.72,.03,11.44,0,17.14-.12,4.84-.09,8.06-3.34,8.23-8.17,.1-3.23,.15-6.47,.24-9.69-.09-3.28-.13-6.55-.24-9.81Zm-12.41,1.37q0,.45-.45,.45c-.95,.02-1.88,0-2.81,.09-.78,.06-1.29,.59-1.33,1.37-.07,1.15-.05,2.3-.07,3.46,0,0,.02,.03,.07,.09h4.36c.03,.09,.03,.13,.03,.18-.19,1.38-.36,2.73-.54,4.1-.02,.23-.16,.25-.33,.25h-3.57v11.46h-4.79v-11.13c.02-.29-.09-.33-.33-.33h-3.22c-.27,0-.35-.04-.35-.31v-3.9c0-.27,.08-.35,.33-.33h3.2c.1,0,.24-.02,.37-.02v-.54c.04-1.41-.09-2.83,.16-4.24,.29-1.53,1.04-2.77,2.37-3.59,.98-.59,2.05-.86,3.18-.86s2.24,.11,3.34,.13c.29,.02,.4,.11,.38,.39-.02,1.11,0,2.2,0,3.28Z" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($social['c_data4'] != '' && $social['c_data5'] != '') : ?>
                            <li class="custom">
                                <a target="_blank" href="<?= $social['c_data5'] ?>">
                                    <?= $social['c_data4'] ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach ?>
                </ul>
                <ul class="storeList">
                    <?php foreach ($work as $row) : ?>
                        <?php $brand = $DB->row("SELECT * FROM data_set, file_set WHERE d_id=? AND d_class1='storeBrand' AND file_type='storeBrandCover' AND file_d_id=d_id AND d_active=1", [$row['d_class4']]) ?>
                        <li>
                            <div class="deco"><img src="./images/s-deco-top.svg"></div>
                            <div class="head flex-container align-justify">
                                <div class="title"><?= $row['d_title_en']; ?></div>
                                <div class="brand"><img src="<?= $brand['file_link1']; ?>" alt=""></div>
                            </div>
                            <div class="phone"><a href="javascript:;"><?= $row['d_data1']; ?></a></div>
                            <div class="time"><?= $row['d_data2']; ?></div>
                            <div class="address"><?= $row['d_data3']; ?></div>
                            <div class="other-area flex-container align-middle align-justify">
                                <div class="pic" data-store="<?= $row['d_id']; ?>"><img src="../<?= $row['file_link1']; ?>" alt=""></div>
                                <?php if ($row['d_data4']) : ?>
                                    <a href="<?= $row['d_data4']; ?>" target="_blank">
                                        <div class="inner flex-container align-center-middle">
                                            <div class="arrow">
                                                <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="32.84" height="30.19" viewBox="0 0 32.84 30.19">
                                                    <g id="c" data-name="layout">
                                                        <g>
                                                            <line class="d" y1="15.09" x2="29.24" y2="15.09" />
                                                            <path class="e" d="M8.73,29.49c-.45-.7-.24-1.63,.46-2.07L28.55,15.09,9.19,2.76c-.7-.45-.91-1.37-.46-2.07s1.38-.9,2.07-.46l21.34,13.59c.43,.28,.69,.75,.69,1.27s-.26,.99-.69,1.27L10.81,29.95c-.25,.16-.53,.23-.81,.23-.5,0-.98-.25-1.27-.69Z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="21.4" height="18.63" viewBox="0 0 21.4 18.63">
                                                    <g id="c" data-name="layout">
                                                        <g style="opacity: .3;">
                                                            <line y1="9.31" x2="19.18" y2="9.31" style="fill: none; stroke: #0c131b; stroke-miterlimit: 10; stroke-width: 1.85px;" />
                                                            <path d="M6.52,18.2c-.27-.43-.15-1,.29-1.28l11.95-7.61L6.81,1.71c-.43-.27-.56-.85-.29-1.28C6.8,0,7.37-.13,7.8,.14l13.17,8.39c.27,.17,.43,.46,.43,.78s-.16,.61-.43,.78L7.8,18.49c-.16,.1-.33,.14-.5,.14-.31,0-.61-.15-.78-.43Z" style="fill: #0c131b;" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="googlemap">( Google Map )</div>
                                    </a>
                                <?php endif ?>
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
                    <div class="pic"><img src="../<?= $row['file_link1']; ?>" alt=""></div>
                    <div class="back">
                        <svg class="show-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="70" height="54.92" viewBox="0 0 70 54.92">
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
                        <svg class="hide-for-large" id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="43.17" height="42.67" viewBox="0 0 43.17 42.67">
                            <g id="c" data-name="lightbox">
                                <g>
                                    <line x1="35.19" y1="11.84" x2="10.81" y2="11.84" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 2.35px;" />
                                    <path d="M26.9,.54c.35,.55,.19,1.28-.36,1.63L11.35,11.84l15.19,9.67c.55,.35,.71,1.08,.36,1.63-.35,.55-1.08,.71-1.63,.36L8.52,12.84c-.34-.22-.54-.59-.54-.99s.21-.78,.54-.99L25.27,.18C25.47,.06,25.69,0,25.91,0c.39,0,.77,.19,1,.54Z" style="fill: #fff;" />
                                </g>
                                <g style="opacity: .6;">
                                    <path d="M3.3,42.67c-1.07-.62-1.88-1.45-2.45-2.48-.57-1.03-.85-2.21-.85-3.54s.28-2.51,.85-3.54c.57-1.04,1.38-1.86,2.45-2.48l.7,.83c-.89,.54-1.58,1.25-2.05,2.15s-.71,1.91-.71,3.04,.24,2.14,.71,3.04,1.16,1.61,2.05,2.14l-.7,.84Z" style="fill: #fff;" />
                                    <path d="M12.53,35.06c-.3,1.22-.74,2.5-1.26,3.48,.21,.13,.44,.31,.78,.52,.88,.55,2.08,.62,3.59,.62,1.59,0,3.76-.12,5.2-.3-.14,.34-.35,.92-.36,1.25-1,.07-3.35,.14-4.89,.14-1.69,0-2.8-.14-3.74-.69-.52-.3-.99-.75-1.26-.75s-.74,.84-1.08,1.64l-.82-1.13c.53-.7,1.08-1.26,1.55-1.47,.35-.68,.69-1.57,.91-2.44h-1.77c.32-.75,.71-1.79,1.05-2.78h-1.55v-1.09h3.03c-.3,.9-.69,1.94-1.03,2.82h.92l.18-.05,.55,.23Zm-2.16-3.48c-.16-.56-.48-1.44-.69-2.12l1.1-.3c.23,.66,.55,1.5,.71,2.04l-1.13,.38Zm4.04,1.73c-.05,1.79-.29,4.07-1.14,5.69-.23-.2-.75-.48-1.05-.6,.95-1.77,1.04-4.24,1.04-5.93v-2.85h6.57v1.09h-5.4v1.51h4.5l.22-.04,.75,.26c-.33,1.46-.9,2.69-1.64,3.69,.82,.73,1.56,1.44,2.04,2.01l-.9,.83c-.44-.55-1.12-1.25-1.88-1.98-.84,.87-1.83,1.53-2.91,1.99-.14-.31-.46-.78-.69-1.03,1-.36,1.94-.96,2.73-1.77-.66-.58-1.34-1.16-1.95-1.65l.79-.7c.58,.46,1.22,.97,1.86,1.51,.46-.61,.81-1.3,1.09-2.05h-4.03Z" style="fill: #fff;" />
                                    <path d="M33.81,29.47v11.44h-1.3v-.7h-8.31v.7h-1.25v-11.44h10.86Zm-1.3,9.61v-8.37h-8.31v8.37h8.31Zm-1.61-6.59v4.77h-5.12v-4.77h5.12Zm-1.21,1.07h-2.77v2.65h2.77v-2.65Z" style="fill: #fff;" />
                                    <path d="M39.87,30.58c1.07,.62,1.88,1.45,2.45,2.48,.57,1.03,.85,2.21,.85,3.54s-.28,2.51-.85,3.54-1.38,1.86-2.45,2.48l-.7-.83c.89-.54,1.58-1.25,2.05-2.15s.71-1.91,.71-3.04-.24-2.14-.71-3.04-1.16-1.61-2.05-2.14l.7-.84Z" style="fill: #fff;" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <?php include 'menu-link.php'; ?>
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

    let $tl_title_en = gsap.timeline({
            paused: true,
        })
        .to(".head-area .en", {
            duration: 1,
            y: 0,
            rotation: 0,
            ease: Power2.easeOut,
        })

    gsap.delayedCall(1, function() {
        $tl_title_en.play();
    });
    $('.menu-mobileWrap .store').addClass('current');
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
</script>