<?php require_once ('../Connections/connect2data.php'); ?>
<?php
$menu_is = "store";
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_RecstoreC = 15;
$pageNum = 0;
if (isset($_GET['pageNum'])) {
    $pageNum = $_GET['pageNum'];
    if ($pageNum == null) {
        $pageNum = 0;
    }
}
$startRow_RecstoreC = $pageNum * $maxRows_RecstoreC;
$query_RecstoreC_level1 = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_level='1' AND c_active='1' ORDER BY c_sort ASC, c_id DESC";
$RecstoreC_level1 = $conn->query($query_RecstoreC_level1);
$row_RecstoreC_level1 = $RecstoreC_level1->fetch();
$G_selected1 = '';
if (isset($_GET['selected1'])) {
    $_SESSION['selected_storeC_level2'] = $G_selected1 = $_GET['selected1'];
    $G_selected1_SQL = "AND c_link=" . $_GET['selected1'];
} else if ($row_RecstoreC_level1['c_id']) {
    $_SESSION['selected_storeC_level2'] = $G_selected1 = $row_RecstoreC_level1['c_id'];
    $G_selected1_SQL = "AND c_link=" . $row_RecstoreC_level1['c_id'];
} else {
    $G_selected1_SQL = "AND c_link=-1";
}
$query_RecstoreC = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_level='2' $G_selected1_SQL ORDER BY c_sort ASC, c_id DESC";
$query_limit_RecstoreC = sprintf("%s LIMIT %d, %d", $query_RecstoreC, $startRow_RecstoreC, $maxRows_RecstoreC);
$RecstoreC = $conn->query($query_limit_RecstoreC);
$row_RecstoreC = $RecstoreC->fetch();
if (isset($_GET['totalRows_RecstoreC'])) {
    $totalRows_RecstoreC = $_GET['totalRows_RecstoreC'];
} else {
    $all_RecstoreC = $conn->query($query_RecstoreC);
    $totalRows_RecstoreC = $all_RecstoreC->rowCount();
}
$_SESSION['totalRows'] = $totalRows_RecstoreC;
$totalPages_RecstoreC = ceil($totalRows_RecstoreC / $maxRows_RecstoreC) - 1;
$TotalPage = $totalPages_RecstoreC;
$queryString_RecstoreC = "";
if (!empty($_SERVER['QUERY_STRING'])) {
    $params = explode("&", $_SERVER['QUERY_STRING']);
    $newParams = array();
    foreach ($params as $param) {
        if (
            stristr($param, "pageNum") == false &&
            stristr($param, "totalRows_RecstoreC") == false
        ) {
            array_push($newParams, $param);
        }
    }
    if (count($newParams) != 0) {
        $queryString_RecstoreC = "&" . htmlentities(implode("&", $newParams));
    }
}
$queryString_RecstoreC = sprintf("&totalRows_RecstoreC=%d%s", $totalRows_RecstoreC, $queryString_RecstoreC);
// ====================================================================
$R_pageNum = 0;
if (isset($_REQUEST["pageNum"])) {
    $R_pageNum_RecHorse = $_REQUEST["pageNum"];
}
if (!isset($R_pageNum)) {
    $_SESSION["ToPage"] = 0;
}
//若指定分頁數小於1則預設顯示第一頁
else if ($R_pageNum < 0) {
    $_SESSION["ToPage"] = 0;
}
//若指定指定的分頁超過總分頁數則顯示最後一頁
else if ($R_pageNum > $totalPages_RecstoreC) {
    $_SESSION["ToPage"] = $TotalPage;
} else {
    $_SESSION["ToPage"] = $R_pageNum;
}
//如果指定的頁面大於資料所擁有的頁面,轉到最大的頁面
if ($R_pageNum > $totalPages_RecstoreC && $R_pageNum != 0) {
    header("Location:storeC_level2_list.php?pageNum=" . $totalPages_RecstoreC);
}
//修改排序
$G_changeSort = 0;
$G_delchangeSort = 0;
if (isset($_GET['changeSort'])) {
    $G_changeSort = $_GET['changeSort'];
}
if (isset($_GET['delchangeSort'])) {
    $G_delchangeSort = $_GET['delchangeSort'];
}
if ($G_changeSort == 1 || $G_delchangeSort == 1) {
    $sort_num = 1;
    $query_RecstoreC = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_level='2' $G_selected1_SQL ORDER BY c_sort ASC, c_id DESC";
    $RecstoreC = $conn->query($query_RecstoreC);
    $row_RecstoreC = $RecstoreC->fetch();
    do {
        if ($row_RecstoreC['c_sort'] == 0) {
        } else if ($row_RecstoreC['c_id'] == $_GET['now_c_id']) {
            // echo $sort_num . "<br/>";
        } else if ($sort_num == $_GET['change_num']) {
            // echo $sort_num . "<br/>";
            $sort_num++;
            $updateSQL = "UPDATE class_set SET c_sort=:c_sort WHERE c_id=:c_id";
            $stat = $conn->prepare($updateSQL);
            $stat->bindParam(':c_sort', $sort_num, PDO::PARAM_INT);
            $stat->bindParam(':c_id', $row_RecstoreC['c_id'], PDO::PARAM_INT);
            $stat->execute();
            $sort_num++;
        } else {
            $updateSQL = "UPDATE class_set SET c_sort=:c_sort WHERE c_id=:c_id";
            $stat = $conn->prepare($updateSQL);
            $stat->bindParam(':c_sort', $sort_num, PDO::PARAM_INT);
            $stat->bindParam(':c_id', $row_RecstoreC['c_id'], PDO::PARAM_INT);
            $stat->execute();
            // echo $sort_num . "<br/>";
            // echo $row_RecstoreC['title'] . "->" . $sort_num . "<br/>";
            $sort_num++;
        }
    } while ($row_RecstoreC = $RecstoreC->fetch());
    $updateSQL = "UPDATE class_set SET c_sort=:c_sort WHERE c_id=:c_id";
    $stat = $conn->prepare($updateSQL);
    $stat->bindParam(':c_sort', $_GET['change_num'], PDO::PARAM_INT);
    $stat->bindParam(':c_id', $_GET['now_c_id'], PDO::PARAM_INT);
    $stat->execute();
    if ($G_changeSort == 1) {
        if (isset($_GET['now_c_id'])) {
            header("Location:storeC_level2_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_GET['pageNum'] . "&totalRows=" . $_GET['totalRows_RecstoreC'] . "#" . $_GET['now_c_id']);
        } else {
            header("Location:storeC_level2_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_GET['pageNum'] . "&totalRows=" . $_GET['totalRows_RecstoreC']);
        }
    } else if ($G_delchangeSort == 1) {
        header("Location:storeC_level2_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_GET['pageNum']);
    }
}
require_once ('display_page.php');
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once ('cmsTitle.php'); ?></title>
    <link rel="stylesheet" href="jquery/chosen_v1.8.5/chosen.css">
    <style>
        .chosen-container {
            position: relative;
            top: -3px;
        }
    </style>
    <?php require_once ('script.php'); ?>
    <?php require_once ('head.php'); ?>
</head>

<body>
    <table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <?php require_once ('cmsHeader.php'); ?>
                <?php require_once ('top.php'); ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="150" class="list_title">列表</td>
                                    <td width="874"><span class="table_data">分類：
                                            <select name="select1" id="select1" class="chosen-select">
                                                <?php $RecstoreC_level1->execute();
                                                while ($row_RecstoreC_level1 = $RecstoreC_level1->fetch()): ?>
                                                    <option value="<?php echo $row_RecstoreC_level1['c_id'] ?>" <?php if (!(strcmp($row_RecstoreC_level1['c_id'], $G_selected1))): ?>
                                                            <?= 'selected' ?>     <?php endif ?>>
                                                        <?php echo $row_RecstoreC_level1['c_title'] ?>
                                                    </option>
                                                <?php endwhile ?>
                                            </select>
                                        </span><span class="no_data">
                                            <?php if ($totalRows_RecstoreC == 0) { // Show if recordset empty ?>
                                                <strong>此分類沒有資料</strong>
                                            <?php } // Show if recordset empty ?>
                                        </span></td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1"
                                class="list_title_table">
                                <tr>
                                    <td width="739" align="right" class="page_display">
                                        <!-------顯示頁選擇與分頁設定開始---------->
                                        <?php displayPages($pageNum, $queryString_RecstoreC, $totalPages_RecstoreC, $totalRows_RecstoreC, $currentPage); ?>
                                        <!-------顯示頁選擇與分頁設定結束---------->
                                    </td>
                                    <td width="110" align="right" class="page_display">
                                        <?php if ($totalRows_RecstoreC > 0) { // Show if recordset not empty ?> 頁數:
                                            <?php echo (($pageNum + 1) . "/" . ($totalPages_RecstoreC + 1)); ?>
                                        <?php } // Show if recordset not empty ?>
                                    </td>
                                    <td width="151" align="right" class="page_display">所有資料數:
                                        <?php echo $totalRows_RecstoreC ?>
                                    </td>
                                    <td width="24" align="right">&nbsp;</td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="image/spacer.gif" width="1" height="1" /></td>
                                </tr>
                            </table>
                            <form action="storeC_process.php" method="post" name="form1" id="form1">
                                <?php if ($totalRows_RecstoreC > 0) { // Show if recordset not empty ?>
                                    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                        <tr>
                                            <td width="100" align="center" class="table_title">排序</td>
                                            <td align="center" class="table_title">名稱</td>
                                            <td width="40" align="center" class="table_title">狀態</td>
                                            <td width="40" align="center" class="table_title">編輯</td>
                                            <td width="40" align="center" class="table_title">刪除</td>
                                        </tr>
                                        <?php
                                        $i = 0;
                                        do {
                                            $i++;
                                            $colname_RecImage = "-1";
                                            if (isset($row_RecstoreC['c_id'])) {
                                                $colname_RecImage = $row_RecstoreC['c_id'];
                                            }
                                            $query_RecImage = sprintf("SELECT * FROM file_set WHERE file_type='brandImage' AND file_d_id = %s", $colname_RecImage);
                                            $RecImage = $conn->query($query_RecImage);
                                            $row_RecImage = $RecImage->fetch();
                                            $totalRows_RecImage = $RecImage->rowCount();
                                            ?>
                                            <tr <?php if ($i % 2 == 0): ?>bgcolor='#E4E4E4' <?php endif ?>>
                                                <td align="center" class="table_data">
                                                    <select name="c_sort" id="c_sort"
                                                        onchange="changeSort('<?php echo $pageNum; ?>','<?php echo $totalRows_RecstoreC; ?>','<?php echo $row_RecstoreC['c_id']; ?>',this.options[this.selectedIndex].value,<?= $G_selected1 ?>)">
                                                        <option value="0" <?php if (!(strcmp(0, $row_RecstoreC['c_sort']))) {
                                                            echo "selected";
                                                        } ?>>至頂</option>
                                                        <?php
                                                        for ($j = 1; $j <= ($totalRows_RecstoreC); $j++) {
                                                            echo "<option value=\"" . $j . "\" ";
                                                            if (!(strcmp($j, $row_RecstoreC['c_sort']))) {
                                                                echo "selected=\"selected\"";
                                                            }
                                                            echo ">" . $j . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td align="center" class="table_data">
                                                    <a href="storeC_level2_edit.php?c_id=<?php echo $row_RecstoreC['c_id']; ?>">
                                                        <?php echo $row_RecstoreC['c_title']; ?>
                                                    </a>
                                                </td>
                                                <td align="center" class="table_data">
                                                    <?php  //list使用
                                                            if ($row_RecstoreC['c_active']) {
                                                                echo "<a href='" . $row_RecstoreC['c_active'] . "' rel='" . $row_RecstoreC['c_id'] . "' class='activeChC'><img src=\"image/accept.png\" width=\"16\" height=\"16\"  ></a>";
                                                            } else {
                                                                echo "<a href='" . $row_RecstoreC['c_active'] . "' rel='" . $row_RecstoreC['c_id'] . "' class='activeChC'><img src=\"image/delete.png\" width=\"16\" height=\"16\"  ></a>";
                                                            }
                                                            ?>
                                                </td>
                                                <td align="center" class="table_data"><a
                                                        href="storeC_level2_edit.php?c_id=<?php echo $row_RecstoreC['c_id']; ?>"><img
                                                            src="image/pencil.png" width="16" height="16" /></a></td>
                                                <td align="center" class="table_data"><a
                                                        href="storeC_level2_del.php?c_id=<?php echo $row_RecstoreC['c_id']; ?>"><img
                                                            src="image/cross.png" width="16" height="16" /></a></td>
                                            </tr>
                                        <?php } while ($row_RecstoreC = $RecstoreC->fetch()); ?>
                                    </table>
                                <?php } // Show if recordset not empty ?>
                            </form>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1"
                                class="list_title_table">
                                <tr>
                                    <td width="739" align="right" class="page_display">
                                        <!-------顯示頁選擇與分頁設定開始---------->
                                        <?php displayPages($pageNum, $queryString_RecstoreC, $totalPages_RecstoreC, $totalRows_RecstoreC, $currentPage); ?>
                                        <!-------顯示頁選擇與分頁設定結束---------->
                                    </td>
                                    <td width="110" align="right" class="page_display">
                                        <?php if ($totalRows_RecstoreC > 0) { // Show if recordset not empty ?> 頁數:
                                            <?php echo (($pageNum + 1) . "/" . ($totalPages_RecstoreC + 1)); ?>
                                        <?php } // Show if recordset not empty ?>
                                    </td>
                                    <td width="151" align="right" class="page_display">所有資料數:
                                        <?php echo $totalRows_RecstoreC ?>
                                    </td>
                                    <td width="24" align="right">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- InstanceEndEditable -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<script src="jquery/chosen_v1.8.5/chosen.jquery.js"></script>
<script type="text/javascript">
    function changeSort(pageNum, totalRows_RecstoreC, now_c_id, change_num, selected1) {
        window.location.href = "storeC_level2_list.php?selected1=" + selected1 + "&pageNum=" + pageNum + "&totalRows_RecstoreC=" + totalRows_RecstoreC + "&changeSort=1" + "&now_c_id=" + now_c_id + "&change_num=" + change_num;
    }
    $(".chosen-select").chosen({
        disable_search_threshold: 6,
        no_results_text: "找不到資料。 目前輸入的是:",
        placeholder_text_single: "尚未新增分類",
        width: "auto"
    });
    $('#select1').change(function () {
        window.location.href = "storeC_level2_list.php?changeSort=1&selected1=" + $(this).val();
    });
</script>