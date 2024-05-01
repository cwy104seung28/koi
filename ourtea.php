<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

$maintea = $DB->query("SELECT * FROM data_set WHERE d_class1='maintea' AND d_active=1 ORDER BY d_sort ASC, d_date DESC");
$maintea_center = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='maintea' AND d_id=file_d_id AND file_type='mainteaCenterCover' AND d_active=1 ORDER BY d_sort ASC, d_date DESC");
$maintea_bg = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='maintea' AND d_id=file_d_id AND file_type='mainteaCover' AND d_active=1 ORDER BY d_sort ASC, d_date DESC");

$ourtea = $DB->query("SELECT * FROM class_set WHERE c_parent='ourteaC' AND c_active=1 ORDER BY c_sort ASC");

//page end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $now = 'OUR TEA';
    $menu = 'OUR TEA';
    $number = '03';
    ?>
    <?php include 'html_head.php'; ?>
</head>


<body>
    <?php include 'topmenu.php'; ?>
    <div class="our-teaWrap">
        <div class="head-area">
            <div class="inner">
                <div class="en">OUR TEA</div>
            </div>
            <div class="drinkListWrap">
                <ul class="drink">
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-1.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-2.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-3.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-4.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-5.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-6.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-1.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-2.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-3.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-4.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-5.png" alt="">
                    </li>
                    <li>
                        <div class="name">
                            <div class="en">BUBBLE GREEN TEA</div>
                            <div class="ch">珍珠绿茶</div>
                        </div>
                        <img src="./images/drink-6.png" alt="">
                    </li>
                </ul>
                <div class="scroll-down">
                    <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="170.03" height="55.27"
                        viewBox="0 0 170.03 55.27">
                        <g id="c" data-name="設計">
                            <g>
                                <g>
                                    <path class="d"
                                        d="M3.56,55.27c-1.15-.67-2.03-1.56-2.64-2.67-.61-1.11-.92-2.38-.92-3.81s.31-2.7,.92-3.82c.61-1.12,1.49-2,2.64-2.67l.76,.9c-.96,.58-1.7,1.35-2.21,2.31-.51,.96-.77,2.05-.77,3.28s.26,2.3,.77,3.27,1.25,1.73,2.21,2.3l-.76,.91Z" />
                                    <path class="d"
                                        d="M13.24,52.4c-.78,0-1.54-.15-2.27-.46-.73-.31-1.37-.74-1.93-1.3l.9-1.04c.53,.52,1.08,.91,1.63,1.16,.55,.25,1.14,.38,1.74,.38,.48,0,.89-.07,1.25-.2,.36-.13,.64-.33,.83-.58,.2-.25,.29-.54,.29-.85,0-.44-.15-.77-.46-1.01-.31-.23-.82-.41-1.53-.53l-1.64-.27c-.9-.16-1.57-.45-2.01-.87s-.67-.98-.67-1.68c0-.56,.15-1.05,.45-1.48,.3-.42,.72-.75,1.27-.99,.55-.23,1.18-.35,1.9-.35s1.41,.11,2.09,.34c.69,.23,1.3,.56,1.86,.99l-.81,1.12c-1.05-.8-2.12-1.2-3.21-1.2-.43,0-.8,.06-1.12,.18-.32,.12-.56,.29-.74,.51-.18,.22-.27,.47-.27,.76,0,.4,.14,.71,.41,.92,.27,.21,.72,.36,1.34,.46l1.58,.27c1.04,.17,1.8,.47,2.28,.91,.48,.44,.73,1.04,.73,1.81,0,.6-.16,1.12-.49,1.58s-.78,.8-1.37,1.06-1.27,.38-2.04,.38Z" />
                                    <path class="d"
                                        d="M22.46,52.39c-.68,0-1.3-.16-1.86-.49-.56-.33-1-.77-1.32-1.33-.32-.56-.48-1.18-.48-1.88s.16-1.31,.49-1.87c.33-.55,.77-1,1.32-1.33,.56-.33,1.17-.5,1.85-.5,.54,0,1.06,.1,1.56,.31s.93,.5,1.29,.87l-.87,.97c-.27-.3-.57-.52-.91-.67s-.69-.22-1.05-.22c-.43,0-.82,.11-1.17,.32-.35,.21-.63,.51-.83,.88-.21,.37-.31,.79-.31,1.25s.1,.87,.31,1.25c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33,.36,0,.71-.07,1.02-.22,.32-.14,.62-.36,.9-.64l.85,.9c-.37,.38-.8,.68-1.29,.88s-1,.31-1.53,.31Z" />
                                    <path class="d"
                                        d="M27.03,52.26v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79s.71-.29,1.13-.29c.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.77,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                    <path class="d"
                                        d="M35.84,52.4c-.69,0-1.32-.16-1.88-.49-.57-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.83-.11,1.19-.33,.35-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.1-.87-.32-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.32,.78-.32,1.24s.1,.89,.31,1.26c.21,.37,.49,.67,.84,.89,.36,.22,.75,.33,1.19,.33Z" />
                                    <path class="d" d="M41.51,52.26v-9.8l1.4-.27v10.07h-1.4Z" />
                                    <path class="d" d="M45.19,52.26v-9.8l1.4-.27v10.07h-1.4Z" />
                                    <path class="d"
                                        d="M55.48,52.39c-.69,0-1.22-.16-1.58-.48-.36-.32-.55-.79-.55-1.41v-4.19h-1.51v-1.18h1.51v-1.82l1.39-.34v2.16h2.1v1.18h-2.1v3.86c0,.36,.08,.62,.24,.78,.16,.15,.43,.23,.81,.23,.2,0,.37-.01,.52-.04,.15-.03,.32-.07,.5-.13v1.18c-.19,.07-.4,.11-.65,.15-.25,.03-.47,.05-.68,.05Z" />
                                    <path class="d"
                                        d="M61.77,52.4c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33s.63-.52,.84-.89c.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.32,.78-.32,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                    <path class="d"
                                        d="M74.41,52.39c-.7,0-1.33-.16-1.9-.49-.57-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85c.32-.56,.75-1,1.29-1.33s1.14-.5,1.81-.5,1.25,.17,1.76,.5,.92,.78,1.22,1.34c.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.34,0,.68-.05,1-.16s.59-.26,.8-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                    <path class="d"
                                        d="M78.34,52.26l2.77-3.65-2.66-3.47h1.64l1.83,2.44,1.83-2.44h1.58l-2.63,3.46,2.8,3.67h-1.64l-1.97-2.63-1.97,2.63h-1.58Z" />
                                    <path class="d"
                                        d="M87.01,55.12v-9.98h1.39v.69c.6-.53,1.33-.8,2.18-.8,.67,0,1.28,.16,1.83,.49,.55,.33,.98,.77,1.29,1.32,.32,.55,.48,1.17,.48,1.86s-.16,1.31-.48,1.87c-.32,.56-.76,1-1.3,1.32s-1.16,.49-1.84,.49c-.39,0-.77-.06-1.13-.19-.36-.13-.7-.31-1.01-.54v3.47h-1.4Zm3.39-3.96c.46,0,.87-.11,1.23-.32s.65-.51,.86-.88c.21-.37,.32-.79,.32-1.25s-.11-.89-.32-1.26c-.21-.37-.5-.67-.86-.88-.36-.21-.77-.32-1.23-.32-.4,0-.77,.07-1.12,.22s-.63,.36-.87,.63v3.22c.23,.26,.52,.47,.88,.62,.35,.15,.72,.22,1.11,.22Z" />
                                    <path class="d" d="M96.14,52.26v-9.8l1.4-.27v10.07h-1.4Z" />
                                    <path class="d"
                                        d="M103.21,52.4c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33s.63-.52,.84-.89c.21-.37,.31-.79,.31-1.26s-.1-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.32,.78-.32,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                    <path class="d"
                                        d="M108.88,52.26v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79s.71-.29,1.13-.29c.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.77,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                    <path class="d"
                                        d="M117.71,52.39c-.7,0-1.33-.16-1.9-.49-.57-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85c.32-.56,.75-1,1.29-1.33s1.14-.5,1.81-.5,1.25,.17,1.76,.5,.92,.78,1.22,1.34c.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.34,0,.68-.05,1-.16s.59-.26,.8-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                    <path class="d"
                                        d="M126.5,52.26v-7.13h1.4v.69c.53-.55,1.2-.83,2-.83,.49,0,.92,.11,1.29,.32,.38,.21,.68,.5,.9,.87,.3-.39,.65-.69,1.05-.89,.4-.2,.85-.3,1.36-.3,.53,0,1,.12,1.39,.35,.4,.23,.71,.56,.94,.98,.23,.42,.34,.91,.34,1.46v4.48h-1.4v-4.24c0-.56-.15-1-.44-1.32-.29-.32-.69-.48-1.2-.48-.35,0-.66,.08-.94,.24-.28,.16-.52,.4-.73,.73,.02,.09,.03,.19,.04,.29,0,.1,.01,.21,.01,.31v4.48h-1.39v-4.24c0-.56-.15-1-.44-1.32-.29-.32-.69-.48-1.2-.48-.34,0-.64,.07-.91,.22s-.5,.36-.7,.65v5.18h-1.4Z" />
                                    <path class="d"
                                        d="M142.81,52.4c-.69,0-1.32-.16-1.88-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.49-1.19-.49-1.88s.16-1.32,.49-1.88c.33-.56,.77-1.01,1.34-1.34,.56-.33,1.19-.5,1.88-.5s1.33,.17,1.89,.5c.56,.33,1,.78,1.33,1.34,.33,.56,.49,1.18,.49,1.88s-.16,1.32-.49,1.88c-.33,.56-.77,1-1.33,1.33-.56,.33-1.19,.49-1.89,.49Zm0-1.23c.44,0,.84-.11,1.19-.33,.36-.22,.63-.52,.84-.89,.21-.37,.31-.79,.31-1.26s-.11-.87-.31-1.24c-.21-.37-.49-.67-.84-.89-.35-.22-.74-.34-1.18-.34s-.83,.11-1.18,.34c-.35,.22-.63,.52-.84,.89-.21,.37-.31,.78-.31,1.24s.1,.89,.31,1.26c.21,.37,.48,.67,.84,.89,.35,.22,.75,.33,1.19,.33Z" />
                                    <path class="d"
                                        d="M148.48,52.26v-7.13h1.4v.91c.22-.34,.5-.6,.83-.79,.33-.19,.71-.29,1.13-.29,.29,0,.53,.05,.71,.13v1.26c-.13-.06-.27-.1-.41-.12-.14-.02-.28-.03-.42-.03-.41,0-.78,.11-1.09,.33-.32,.22-.57,.54-.76,.96v4.77h-1.4Z" />
                                    <path class="d"
                                        d="M157.31,52.39c-.7,0-1.33-.16-1.9-.49-.56-.33-1.01-.77-1.34-1.33-.33-.56-.5-1.18-.5-1.88s.16-1.3,.48-1.85,.75-1,1.29-1.33c.54-.33,1.14-.5,1.81-.5s1.25,.17,1.76,.5c.51,.33,.92,.78,1.23,1.34,.3,.57,.46,1.2,.46,1.91v.39h-5.61c.07,.39,.22,.74,.44,1.05,.22,.31,.5,.55,.84,.73,.34,.18,.71,.27,1.11,.27,.34,0,.68-.05,1-.16,.32-.11,.59-.26,.81-.47l.9,.88c-.42,.32-.85,.55-1.29,.71-.44,.15-.93,.23-1.46,.23Zm-2.32-4.28h4.21c-.06-.37-.18-.7-.38-.99-.2-.29-.45-.51-.74-.67-.29-.16-.61-.24-.96-.24s-.68,.08-.98,.24c-.3,.16-.55,.38-.75,.67-.2,.29-.33,.62-.4,1Z" />
                                    <path class="d"
                                        d="M166.47,42.25c1.15,.67,2.03,1.56,2.64,2.67s.92,2.38,.92,3.81-.31,2.7-.92,3.82-1.49,2-2.64,2.67l-.76-.9c.96-.58,1.7-1.35,2.21-2.31,.51-.96,.77-2.05,.77-3.28s-.26-2.3-.77-3.27c-.51-.97-1.25-1.73-2.21-2.3l.76-.91Z" />
                                </g>
                                <g class="arrow">
                                    <line class="e" x1="85.33" x2="85.33" y2="31.07" />
                                    <path class="d"
                                        d="M70.93,10.57c.7-.45,1.63-.24,2.07,.46l12.33,19.36,12.33-19.36c.45-.7,1.37-.91,2.07-.46,.7,.45,.9,1.38,.46,2.07l-13.59,21.34c-.28,.43-.75,.69-1.27,.69s-.99-.26-1.27-.69l-13.59-21.34c-.16-.25-.23-.53-.23-.81,0-.5,.25-.98,.69-1.27Z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="new-drinkWrap flex-container align-center" style="background-color:#000;">
            <div class="title">
                <div class="ch">最新饮品</div>
                <div class="en">
                    NEW<br>
                    DRINKS
                </div>
            </div>
            <ul class="pic">
                <?php foreach ($maintea_center as $center): ?>
                    <li><img src="<?= $center['file_link1'] ?>" alt=""></li>
                <?php endforeach ?>
            </ul>
            <ul class="new-drink">
                <?php $i = 1; ?>
                <?php foreach ($maintea as $row): ?>
                    <li data-drink="<?= $i ?>">
                        <div class="region">/ <?= $row['d_class2'] ?></div>
                        <div class="ch"><?= $row['d_title'] ?></div>
                        <div class="en"><?= $row['d_title_en'] ?></div>
                    </li>
                    <?php $i++; ?>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="drinkWrap">
            <ul class="drinkWrapList">
                <?php $i = 0; ?>
                <?php foreach ($ourtea as $row): ?>
                    <li data-where="<?= $i; ?>">
                        <div class="title">
                            <div class="ch"><?= $row['c_title'] ?></div>
                            <div class="en"><?= $row['c_title_en'] ?></div>
                            <?php if ($row['file_link1'] != 'null'): ?>
                                <div class="icon"><img src="<?= $row['file_link1'] ?>" alt=""></div>
                            <?php endif ?>
                        </div>

                        <div class="drink-changeList">
                            <?php
                            $workTotal = $DB->query("SELECT * FROM data_set WHERE d_class1='ourtea' AND d_class2=? AND d_active=1 ORDER BY d_sort ASC, d_date DESC", [$row['c_id']]);
                            $pageTotalCount = count($workTotal);
                            $maxItem = 8;

                            $totalpage = ceil($pageTotalCount / $maxItem);
                            ?>
                            <?php for ($page = 1; $page <= $totalpage; $page++): ?>
                                <?php
                                $limit = ($page - 1) * $maxItem;
                                $work = $DB->query("SELECT * FROM data_set WHERE d_class1='ourtea' AND d_class2=? AND d_active=1 ORDER BY d_sort ASC, d_date DESC LIMIT ?, ?", [$row['c_id'], $limit, $maxItem]); ?>
                                <ul class="drinkList">
                                    <?php foreach ($work as $row2): ?>
                                        <li data-drink="<?= $row2['d_id']; ?>">
                                            <?php if ($row2['d_data2'] != 'null'): ?>
                                                <div class="region">/ <?= $row2['d_data2']; ?></div>
                                            <?php endif ?>
                                            <div class="ch"><?= $row2['d_title']; ?></div>
                                            <div class="en"><?= $row2['d_title_en']; ?></div>
                                            <div class="content"><?= $row2['d_data1']; ?></div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endfor ?>

                        </div>
                    </li>
                    <?php $i++; ?>
                <?php endforeach ?>
            </ul>
            <div class="menu-drinkList">
                <div class="menu">
                    <a href="./menu.php">
                        <svg id="b" data-name="圖層 2" xmlns="http://www.w3.org/2000/svg" width="103.84" height="36"
                            viewBox="0 0 103.84 36">
                            <g id="c" data-name="設計">
                                <g class="arrow">
                                    <rect class="d" x="10.06" width="2.22" height="22.99" />
                                    <path class="d"
                                        d="M.51,7.82c.52-.33,1.2-.18,1.53,.34l9.12,14.32,9.12-14.32c.33-.52,1.02-.67,1.53-.34s.67,1.02,.34,1.53l-10.06,15.79c-.2,.32-.56,.51-.94,.51s-.73-.2-.94-.51L.17,9.35c-.12-.19-.17-.39-.17-.6,0-.37,.18-.73,.51-.94Z" />
                                </g>
                                <g>
                                    <path
                                        d="M31.61,24.26V5.36h5.86l4.67,8.91,4.67-8.91h5.86V24.26h-4.37V11.38l-6.21,11.53-6.21-11.58v12.93h-4.27Z" />
                                    <path
                                        d="M63.39,24.53c-1.46,0-2.78-.33-3.96-.99-1.18-.66-2.11-1.54-2.79-2.66-.68-1.12-1.03-2.37-1.03-3.75s.33-2.64,.99-3.75,1.55-2,2.69-2.66,2.39-.99,3.78-.99,2.65,.34,3.73,1.01,1.93,1.6,2.55,2.77,.93,2.51,.93,4.02v1.08h-10.18c.2,.45,.46,.85,.8,1.19s.73,.61,1.2,.8c.47,.19,.97,.28,1.51,.28,.59,0,1.13-.09,1.62-.28,.49-.19,.9-.46,1.24-.8l2.89,2.57c-.9,.76-1.82,1.3-2.77,1.65-.95,.34-2.01,.51-3.2,.51Zm-3.38-8.96h5.97c-.14-.47-.37-.87-.66-1.2s-.64-.59-1.04-.78c-.4-.19-.83-.28-1.3-.28s-.93,.09-1.32,.27c-.4,.18-.73,.44-1.01,.77-.28,.33-.49,.74-.63,1.23Z" />
                                    <path
                                        d="M73,24.26V9.98h4.37v.97c1.08-.83,2.36-1.24,3.83-1.24,1.12,0,2.1,.24,2.96,.73,.85,.49,1.53,1.16,2.01,2.03,.49,.86,.73,1.86,.73,3v8.8h-4.37v-8.21c0-.79-.23-1.42-.7-1.89s-1.1-.7-1.89-.7c-.56,0-1.05,.1-1.47,.3s-.79,.48-1.09,.84v9.67h-4.37Z" />
                                    <path
                                        d="M95.63,24.53c-1.12,0-2.1-.24-2.96-.73-.86-.49-1.53-1.17-2.01-2.04-.49-.87-.73-1.87-.73-2.98V9.98h4.37v8.21c0,.77,.24,1.4,.71,1.88,.48,.48,1.1,.71,1.88,.71,.56,0,1.05-.1,1.49-.3,.43-.2,.79-.48,1.08-.84V9.98h4.37v14.28h-4.37v-.97c-1.08,.83-2.36,1.24-3.83,1.24Z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <ul class="drink-fixedList">
                    <?php $j = 1; ?>
                    <?php foreach ($ourtea as $row): ?>
                        <li data-scroll="<?= $row['c_id'] ?>" class="flex-container align-middle">
                            <div class="dot"></div>
                            <div class="title"><?= $row['c_title'] ?></div>
                        </li>
                        <?php $j++; ?>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="drinkList-pic">
                <?php $y = 1; ?>
                <?php foreach ($ourtea as $row): ?>
                    <?php $work = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='ourtea' AND d_class2=? AND d_id=file_d_id AND file_type='ourteaCover'  AND d_active=1 ORDER BY d_sort ASC, d_date DESC", [$row['c_id']]); ?>
                    <ul class="area-<?= $row['c_id']; ?>">
                        <li class="is-show"><img src="./images/t-drink-pic-1.jpg"></li>
                        <?php foreach ($work as $row2): ?>
                            <li data-pic="<?= $row2['d_id']; ?>"><img src="<?= $row2['file_link1']; ?>"></li>
                        <?php endforeach ?>
                    </ul>
                    <?php $y++; ?>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>

<script>
    $('footer').addClass('is-white');
    let $tl_title = gsap.timeline({
        paused: true,
    })
        .to(".head-area .en", {
            duration: 1,
            y: 0,
            rotation: 0,
            ease: Power2.easeOut,
        })

    gsap.delayedCall(1, function () {
        $tl_title.play();
    });

    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }
    var transitionArray = ['slideLeft', 'slideRight', 'slideUp', 'slideDown']
    $(".drinkListWrap").vegas({
        timer: false,
        autoplay: true,
        delay: 3000,
        transitionDuration: 500,
        slides: [{
            src: "./images/t-top-bg-1.jpg"
        },
        {
            src: "./images/t-top-bg-2.jpg"
        },
        {
            src: "./images/t-top-bg-3.jpg"
        },
        {
            src: "./images/t-top-bg-4.jpg"
        }
        ],
        transition: [transitionArray[getRandomInt(4)], transitionArray[getRandomInt(4)], transitionArray[getRandomInt(4)], transitionArray[getRandomInt(4)]]
    });

    $(".new-drinkWrap").vegas({
        timer: false,
        autoplay: false,
        // delay: 2000,
        transitionDuration: 1000,
        slides: [
            <?php foreach ($maintea_bg as $bg): ?>
                                                                                                        {
                    src: "<?= $bg['file_link1'] ?>"
                },
            <?php endforeach ?>
        ],
    });
    $('.new-drinkWrap .pic').slick({
        dots: false,
        speed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: true,
        prevArrow: false,
        nextArrow: false,
    });

    $('.new-drinkWrap .pic').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        console.log(nextSlide);
        $(".new-drinkWrap").vegas('jump', nextSlide);
        $(`.new-drink li:nth-child(${nextSlide + 1})`).addClass('current').siblings().removeClass('current');
    });
    $('.new-drink li:nth-child(1)').addClass('current');

    var clickLock = false;

    $('.new-drink li[data-drink]').click(function (e) {
        e.preventDefault();
        if (clickLock) return;
        clickLock = true;

        var slideDrink = $(this).data('drink');
        $(this).addClass('current').siblings().removeClass('current');
        $('.new-drinkWrap .pic').slick('slickGoTo', slideDrink - 1);
        $(".new-drinkWrap").vegas('jump', slideDrink - 1);

        gsap.delayedCall(2, function () {
            clickLock = false;
        });
    });
    $('.drink-changeList').each(function (i, el) {
        $(el).slick({
            dots: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            // autoplay: true,
            prevArrow: false,
            nextArrow: false,
        });
    })
    var dotNums = document.querySelectorAll(".slick-dots button");

    function removeText(item) {
        item.innerHTML = ""; // or put the text you need inside quotes
    }
    dotNums.forEach(removeText);


    ScrollTrigger.create({
        toggleActions: "play pause resume reverse", //重覆觸發
        trigger: ".menu-drinkList",
        endTrigger: ".drinkWrap",
        start: "top 18%",
        end: "bottom 90%",
        scrub: 1,
        pin: true,
        // markers: true,
    });
    ScrollTrigger.create({
        toggleActions: "play pause resume reverse", //重覆觸發
        trigger: ".drinkList-pic",
        endTrigger: ".drinkWrap",
        start: "top 40%",
        end: "bottom 90%",
        scrub: 1,
        pin: true,
        // markers: true,
    });

    $('.drinkWrapList>li').each(function (i, el) {
        ScrollTrigger.create({
            toggleActions: "play pause resume reverse", //重覆觸發
            trigger: el,
            start: "top 30%",
            end: "bottom 30%",
            scrub: 1,
            // markers: true,
            onEnter() {
                $(`.drinkList-pic .area-${i + 1}`).addClass('is-show').siblings().removeClass('is-show')
                $(`.menu-drinkList li:nth-child(${i + 1})`).addClass('current').siblings().removeClass('current')
                $('.drink-fixedList li.current').next().css('opacity', '0.4').next().css('opacity', '0.2').next().css('opacity', '0.1');
                $('.drink-fixedList li.current').prev().css('opacity', '0.4').prev().css('opacity', '0.2').prev().css('opacity', '0.1');

            },
            // onLeave() {
            //     $('.about-info-preview').removeClass('is-not-show');
            // },
            onEnterBack() {
                $(`.drinkList-pic .area-${i + 1}`).addClass('is-show').siblings().removeClass('is-show')
                $(`.menu-drinkList li:nth-child(${i + 1})`).addClass('current').siblings().removeClass('current')
                $('.drink-fixedList li.current').next().css('opacity', '0.4').next().css('opacity', '0.2').next().css('opacity', '0.1');
                $('.drink-fixedList li.current').prev().css('opacity', '0.4').prev().css('opacity', '0.2').prev().css('opacity', '0.1');
            },
            onLeaveBack() {
                $(`.drinkList-pic .area-${i + 1}`).addClass('is-show').siblings().removeClass('is-show')
                $(`.menu-drinkList li:nth-child(${i + 1})`).addClass('current').siblings().removeClass('current')
                $('.drink-fixedList li.current').next().css('opacity', '0.4').next().css('opacity', '0.2').next().css('opacity', '0.1');
                $('.drink-fixedList li.current').prev().css('opacity', '0.4').prev().css('opacity', '0.2').prev().css('opacity', '0.1');
            },
        });
    })
    $(".menu-drinkList li").on("click", function () {
        // var _offset = $(window).height();

        gsap.to(window, {
            duration: 1.2,
            scrollTo: {
                y: $("[data-where=" + $(this).index() + "]"),
                offsetY: 10,
            },
            ease: Power2.easeInOut
        });
    });

    $('.drinkList li').hover(function () {
        var drink = $(this).data('drink');
        $(`.drinkList-pic ul.is-show li:nth-child(${drink})`).addClass('is-show').siblings().removeClass('is-show')
    });
    $('.drink-fixedList li.current').next().css('opacity', '0.4').next().css('opacity', '0.2').next().css('opacity', '0.1');
    $('.drink-fixedList li.current').prev().css('opacity', '0.4').prev().css('opacity', '0.2').prev().css('opacity', '0.1');

    $('.drink-fixedList li').click(function () {
        $(this).addClass('current').siblings().removeClass('current');
        $('.drink-fixedList li.current').next().css('opacity', '0.4').next().css('opacity', '0.2').next().css('opacity', '0.1');
        $('.drink-fixedList li.current').prev().css('opacity', '0.4').prev().css('opacity', '0.2').prev().css('opacity', '0.1');

    })
</script>