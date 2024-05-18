<?php
function creatSet($title, $menuType)
{
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType . "_list.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	echo "<a href='" . $addList . "' class='" . $list_class . "'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>" . $title . "設定</a>";
}
function creatList($title, $menuType)
{
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType . "_list.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	echo "<a href='" . $addList . "' class='" . $list_class . "'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>" . $title . "列表</a>";
}
function creatAdd($title, $menuType)
{
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addTxt = $menuType . "_add.php";
	$add_class = ($ryder_now == $addTxt) ? 'submenu current' : 'submenu';
	echo "<a href='" . $addTxt . "' class='" . $add_class . "'><img src='../cms/image/add.png' width='16' height='16' border='0' align='absbottom'>新增" . $title . "</a>";
}
function creatAll($title, $menuType)
{
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType . "_list.php";
	$addTxt = $menuType . "_add.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	$add_class = ($ryder_now == $addTxt) ? 'submenu current' : 'submenu';
	echo "<a href='" . $addList . "' class='" . $list_class . "'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>" . $title . "列表</a><a href='" . $addTxt . "' class='" . $add_class . "'><img src='../cms/image/add.png' width='16' height='16' border='0' align='absbottom'>新增" . $title . "</a>";
}
function creatTableTop()
{
	echo "<table class='ryder-menu-area' width='100%' height='25' border='0' align='center' cellpadding='3' cellspacing='0' bgcolor='#E4E4E4' ><tr><td align='left'>";
}
function creatTablBottom()
{
	echo "</td></tr></table>";
}
?>
<script src="js/menu.js"></script>
<div id="cmsMenu">
	<ul>
		<?php if ($row_RecLevelAuthority['a_2'] == '1') { ?>
			<li id="main_menu_2" class="main_menu <?php if ($menu_is == 'news') : ?>main_menu_now<?php endif ?>">
				<a href="news_list.php">
					<div>最新消息</div>
				</a>
			</li>
		<?php } ?>
		<?php if ($row_RecLevelAuthority['a_3'] == '1') { ?>
			<li id="main_menu_3" class="main_menu <?php if ($menu_is == 'recruit') : ?>main_menu_now<?php endif ?>">
				<a href="recruit_list.php">
					<div>人才招募</div>
				</a>
			</li>
		<?php } ?>
		<?php if ($row_RecLevelAuthority['a_4'] == '1') { ?>
			<li id="main_menu_4" class="main_menu <?php if ($menu_is == 'maintea' || $menu_is == 'mainteaTitle' || $menu_is == 'ourtea') : ?>main_menu_now<?php endif ?>">
				<a href="ourtea_list.php">
					<div>飲品介紹</div>
				</a>
			</li>
		<?php } ?>
		<!-- <?php if ($row_RecLevelAuthority['a_5'] == '1') { ?>
			<li id="main_menu_5" class="main_menu <?php if ($menu_is == 'menu') : ?>main_menu_now<?php endif ?>">
				<a href="menu_list.php">
					<div>菜單下載</div>
				</a>
			</li>
		<?php } ?> -->
		<?php if ($row_RecLevelAuthority['a_5'] == '1' || $row_RecLevelAuthority['a_6'] == '1') { ?>
			<li id="main_menu_6" class="main_menu <?php if ($menu_is == 'store' || $menu_is == "storeNum" || $menu_is == 'menu') : ?>main_menu_now<?php endif ?>">
				<a href="store_list.php">
					<div>全球據點</div>
				</a>
			</li>
		<?php } ?>
		<?php if ($row_RecLevelAuthority['a_7'] == '1' || $row_RecLevelAuthority['a_8'] == '1') { ?>
			<li id="main_menu_7" class="main_menu <?php if ($menu_is == 'contact' || $menu_is == "oversea") : ?>main_menu_now<?php endif ?>">
				<a href="<?php if ($row_RecLevelAuthority['a_7'] == '1') : ?>contact_list.php<?php elseif ($row_RecLevelAuthority['a_8'] == '1') : ?>oversea_list.php<?php endif ?>">
					<div>聯絡我們</div>
				</a>
			</li>
		<?php } ?>
		<?php if ($row_RecLevelAuthority['a_1'] == '1') { ?>
			<li id="main_menu_1" class="main_menu <?php if ($menu_is == 'authority') : ?>main_menu_now<?php endif ?>">
				<a href="authority_list.php">
					<div>權限管理</div>
				</a>
			</li>
		<?php } ?>

	</ul>
</div>
<?php
if ($menu_is == "news") {

	creatTableTop();
	echo '<div style="font-size: 15px; margin-bottom: 5px;">最新消息</div>';
	creatAll('分類', 'newsC');
	echo '<br>';
	creatAll('最新消息', 'news');
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
} else if ($menu_is == "recruit") {

	creatTableTop();
	echo '<div style="font-size: 15px; margin-bottom: 5px;">人才招募</div>';
	creatSet('人才招募', 'recruit');
	// creatAll('分類', 'recruitC');
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
} else if (($menu_is == "maintea" || $menu_is == "mainteaTitle" || $menu_is == "ourtea")) {

	creatTableTop();
	echo '<div style="display: flex;">';
	echo '<div style="margin-right: 40px;">';
	echo '<div style="font-size: 15px; margin-bottom: 5px;">主打飲品</div>';
	echo '<div>';
	creatSet('主打飲品標題', 'mainteaTitle');
	echo '</div>';
	echo '<div>';
	creatAll('主打飲品', 'maintea');
	echo '</div>';
	echo '</div>';
	echo '<div>';
	echo '<div style="font-size: 15px; margin-bottom: 5px;">飲品介紹</div>';
	echo '<div>';
	creatAll('分類', 'ourteaC');
	echo '</div>';
	echo '<div>';
	creatAll('飲品介紹', 'ourtea');
	echo '</div>';
	echo '</div>';
	echo '</div>';
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
}
// else if ($menu_is == "menu") {

// 	creatTableTop();
// 	echo '<div style="font-size: 15px; margin-bottom: 5px;">菜單下載</div>';
// 	creatAll('國家分類', 'menuC');
// 	echo '<br>';
// 	creatAll('菜單下載', 'menu');

// 	// if ($row_RecLevelAuthority['a_2'] == '0') {
// 	// 	header("Location:first.php");
// 	// }
// 	creatTablBottom();
// } 
else if ($menu_is == "store" || $menu_is == "storeBrand" || $menu_is == "storeNum" || $menu_is == "menu") {

	creatTableTop();
	echo '<div style="display: flex;">';
	if ($row_RecLevelAuthority['a_5'] == '1') {
		echo '<div style="margin-right: 40px;">';
		echo '<div style="font-size: 15px; margin-bottom: 5px;">據點數字更改</div>';
		echo '<div>';
		creatSet('分店數字', 'storeNum');
		echo '</div>';
		echo '</div>';
		echo '<div style="margin-right: 40px;">';
		echo '<div style="font-size: 15px; margin-bottom: 5px;">全球據點</div>';
		echo '<div>';
		creatAll('國家', 'storeC');
		echo '</div>';
		echo '<div>';
		creatAll('地區', 'storeC_level2');
		echo '</div>';
		echo '<div>';
		creatAll('品牌', 'storeBrand');
		echo '</div>';
		echo '<div>';
		creatAll('全球據點', 'store');
		echo '</div>';
		echo '</div>';
	}
	if ($row_RecLevelAuthority['a_6'] == '1') {
		echo '<div>';
		echo '<div style="font-size: 15px; margin-bottom: 5px;">菜單下載</div>';
		echo '<div>';
		creatAll('菜單下載', 'menu');
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
	// creatAll('店家', 'storeC_level3');
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
} else if ($menu_is == "contact" || $menu_is == "oversea") {

	creatTableTop();
	echo '<div style="display: flex;">';
	if ($row_RecLevelAuthority['a_7'] == '1') {

		echo '<div style="margin-right: 40px;">';
		echo '<div style="font-size: 15px; margin-bottom: 5px;">聯絡我們</div>';
		echo '<div>';
		creatSet('聯絡我們', 'contact');
		echo '</div>';
		echo '</div>';
		echo '<div>';
	}
	if ($row_RecLevelAuthority['a_8'] == '1') {
		echo '<div>';
		echo '<div style="font-size: 15px; margin-bottom: 5px;">海外合作</div>';
		echo '<div>';
		creatSet('海外合作', 'oversea');
		echo '</div>';
		echo '</div>';
		echo '<div>';
	}
	echo '</div>';
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
} else if ($menu_is == "authority") {

	creatTableTop();
	echo '<div style="font-size: 15px; margin-bottom: 5px;">權限管理</div>';
	creatAll('權限種類', 'authorityC');
	echo '<br>';
	creatAll('管理員', 'authority');
	// if ($row_RecLevelAuthority['a_2'] == '0') {
	// 	header("Location:first.php");
	// }
	creatTablBottom();
}
?>

<div style="clear:both; height:20px;"></div>