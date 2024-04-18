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
			<li id="main_menu_6" class="main_menu <?php if ($menu_is == 'news') : ?>main_menu_now<?php endif ?>">
				<a href="news_list.php">
					<div>最新消息</div>
				</a>
			</li>
			<!-- <li id="main_menu_7" class="main_menu <?php if ($menu_is == 'team') : ?>main_menu_now<?php endif ?>">
				<a href="team_list.php">
					<div>醫師團隊</div>
				</a>
			</li>
			<li id="main_menu_2" class="main_menu <?php if ($menu_is == 'news') : ?>main_menu_now<?php endif ?>">
				<a href="news_list.php">
					<div>最新消息</div>
				</a>
			</li>
			<li id="main_menu_4" class="main_menu <?php if ($menu_is == 'case') : ?>main_menu_now<?php endif ?>">
				<a href="case_list.php">
					<div>案例分享</div>
				</a>
			</li>
			<li id="main_menu_3" class="main_menu <?php if ($menu_is == 'doctor') : ?>main_menu_now<?php endif ?>">
				<a href="doctor_list.php">
					<div>醫師專欄</div>
				</a>
			</li>

			<li id="main_menu_5" class="main_menu <?php if ($menu_is == 'clinic') : ?>main_menu_now<?php endif ?>">
				<a href="clinic_list.php">
					<div>月班表</div>
				</a>
			</li> -->
		<?php } ?>

		<!--<?php if ($row_RecLevelAuthority['a_6'] == '1') { ?>
		<li id="main_menu_6" class="main_menu <?php if ($menu_is == 'productHidden' || $menu_is == 'sampleHidden' || $menu_is == 'centerlockHidden' || $menu_is == 'polishingHidden') : ?>main_menu_now<?php endif ?>">
			<a href="productHidden_list.php"><div>2-PIECE(HIDDEN HARDWARE)</div></a>
		</li>
		<?php } ?>

		<?php if ($row_RecLevelAuthority['a_7'] == '1') { ?>
		<li id="main_menu_6" class="main_menu <?php if ($menu_is == 'productExposed' || $menu_is == 'sampleExposed' || $menu_is == 'centerlockExposed' || $menu_is == 'polishingExposed') : ?>main_menu_now<?php endif ?>">
			<a href="productExposed_list.php"><div>2-PIECE(EXPOSED HARDWARE)</div></a>
		</li>
		<?php } ?>

		<?php if ($row_RecLevelAuthority['a_3'] == '1') { ?>
		<li id="main_menu_3" class="main_menu <?php if ($menu_is == 'gallery') : ?>main_menu_now<?php endif ?>">
			<a href="gallery_list.php"><div>車圖相簿</div></a>
		</li>
		<?php } ?>

		<?php if ($row_RecLevelAuthority['a_4'] == '1') { ?>
		<li id="main_menu_4" class="main_menu <?php if ($menu_is == 'event') : ?>main_menu_now<?php endif ?>">
			<a href="event_list.php"><div>影音多媒體</div></a>
		</li> -->
	<?php } ?>


	<?php if ($row_RecLevelAuthority['a_10'] == '1') { ?>
		<!-- <li id="main_menu_10" class="main_menu <?php if ($menu_is == 'search') : ?>main_menu_now<?php endif ?>">
			<a href="search_list.php">
				<div>SEO區</div>
			</a>
		</li> -->
	<?php } ?>

	</ul>
</div>
<?php
if ($menu_is == "news") {

	creatTableTop();
	creatAll('最新消息', 'news');
	creatAll('分類', 'newsC');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "doctor") {

	creatTableTop();
	creatAll('醫師專欄', 'doctor');
	creatAll('分類', 'doctorC');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "case") {

	creatTableTop();
	creatAll('案例分享', 'case');
	creatAll('分類', 'caseC');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "clinic") {

	creatTableTop();
	creatAll('月班表', 'clinic');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "service") {

	creatTableTop();
	creatAll('服務項目四大項', 'serviceC');
	creatAll('服務項目', 'service');
	creatAll('服務項目QA', 'serviceQA');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "team") {

	creatTableTop();
	creatAll('醫師團隊', 'team');
	if ($row_RecLevelAuthority['a_2'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "search") {

	creatTableTop();
	creatAll('SEO區', 'search');
	if ($row_RecLevelAuthority['a_10'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
} else if ($menu_is == "authority") {

	creatTableTop();
	creatAll('管理員', 'authority');
	creatAll('權限管理群組', 'authorityC');
	if ($row_RecLevelAuthority['a_1'] == '0') {
		header("Location:first.php");
	}
	creatTablBottom();
}
?>

<div style="clear:both; height:20px;"></div>