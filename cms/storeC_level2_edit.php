<?php require_once('../Connections/connect2data.php'); ?>
<?php
if (!1) {
    header("Location: storeC_level2_list.php");
}
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$colname_RecstoreC = "-1";
if (isset($_GET['c_id'])) {
    $colname_RecstoreC = $_GET['c_id'];
}
$query_RecstoreC = "SELECT * FROM class_set WHERE c_id = :c_id";
$RecstoreC = $conn->prepare($query_RecstoreC);
$RecstoreC->bindParam(':c_id', $colname_RecstoreC, PDO::PARAM_INT);
$RecstoreC->execute();
$row_RecstoreC = $RecstoreC->fetch();
$totalRows_RecstoreC = $RecstoreC->rowCount();
$query_RecstoreC_level1 = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_active='1' AND c_level='1' ORDER BY c_sort ASC, c_id DESC";
$RecstoreC_level1 = $conn->prepare($query_RecstoreC_level1);
$RecstoreC_level1->execute();
$row_RecstoreC_level1 = $RecstoreC_level1->fetch();
$totalRows_RecstoreC_level1 = $RecstoreC_level1->rowCount();
$G_selected1 = '';
if (isset($_SESSION['selected_storeC'])) {
    $G_selected1 = $_SESSION['selected_storeC'] = $row_RecstoreC['c_link'];
}
$menu_is = "store";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once('cmsTitle.php'); ?></title>
    <link rel="stylesheet" href="jquery/chosen_v1.8.5/chosen.css">
    <?php require_once('script.php'); ?>
    <?php require_once('head.php');?>
</head>
<body>
    <table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <?php require_once('cmsHeader.php'); ?>
                <?php require_once('top.php'); ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left">
                            <!-- InstanceBeginEditable name="編輯區域" -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="30%" class="list_title">修改</td>
                                    <td width="70%">&nbsp;</td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="image/spacer.gif" width="1" height="1"></td>
                                </tr>
                            </table>
                            <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="3" cellpadding="5">
                                                <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td>
                                                                    <table width="100%" border="0" cellspacing="3" cellpadding="5">
                                                                        <tr>
                                                                            <td align="center" bgcolor="#e5ecf6" class="table_col_title">分類</td>
                                                                            <td>
                                                                                <select name="c_link" id="c_link" class="chosen-select">
                                                                                    <?php do { ?>
                                                                                    <option value="<?php echo $row_RecstoreC_level1['c_id']?>" <?php if (!(strcmp($row_RecstoreC_level1[ 'c_id'], $G_selected1))) {echo "selected";} ?>>
                                                                                        <?php echo $row_RecstoreC_level1['c_title']?>
                                                                                    </option>
                                                                                    <?php
                                                                                    } while ($row_RecstoreC_level1 = $RecstoreC_level1->fetch());
                                                                                    $rows = $RecstoreC_level1->rowCount();
                                                                                    if($rows > 0) {
                                                                                        $RecstoreC_level1->execute();
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </td>
                                                                            <td bgcolor="#e5ecf6">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>
                                                                            <td width="516">
                                                                                <input name="c_title" type="text" class="table_data" id="c_title" value="<?php echo $row_RecstoreC['c_title']; ?>" size="50" />
                                                                                <input name="c_id" type="hidden" id="c_id" value="<?php echo $row_RecstoreC['c_id']; ?>" />
                                                                                <input name="c_sort" type="hidden" id="c_sort" value="<?php echo $row_RecstoreC['c_sort']; ?>" />
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">在中文網頁顯示狀態</td>
                                                                            <td width="516">
                                                                                <select name="c_active" class="table_data" id="c_active">
                                                                                    <option value="0" <?php if (!(strcmp(0, $row_RecstoreC[ 'c_active']))) {echo "selected";} ?>>不公佈</option>
                                                                                    <option value="1" <?php if (!(strcmp(1, $row_RecstoreC[ 'c_active']))) {echo "selected";} ?>>公佈</option>
                                                                                </select>
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">
                                                                    <input name="submitBtn" type="submit" class="btnType" id="submitBtn" value="送出" />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="MM_update" value="form1" />
                            </form>
                            <table width="100%" height="1" border="0" align="center" cellpadding="0" cellspacing="0" class="buttom_dot_line">
                                <tr>
                                    <td>&nbsp;</td>
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
<script>
    $(".chosen-select").chosen({
        disable_search_threshold: 6,
        no_results_text: "找不到資料。 目前輸入的是:",
        placeholder_text_single: "尚未新增分類",
        width: "auto"
    });
</script>
<?php
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
    $updateSQL = "UPDATE class_set SET c_title=:c_title, c_title_en=:c_title_en, c_slug=:c_slug, c_class=:c_class, c_link=:c_link, c_active=:c_active, c_active_en=:c_active_en WHERE c_id=:c_id";
    $sth = $conn->prepare($updateSQL);
    $sth->bindParam(':c_title', $_POST['c_title'], PDO::PARAM_STR);
    $sth->bindParam(':c_title_en', $_POST['c_title_en'], PDO::PARAM_STR);
    $sth->bindParam(':c_slug', generate_slug($_POST['c_title']), PDO::PARAM_STR);
    $sth->bindParam(':c_class', $_POST['c_class'], PDO::PARAM_STR);
    $sth->bindParam(':c_link', $_POST['c_link'], PDO::PARAM_STR);
    $sth->bindParam(':c_active', $_POST['c_active'], PDO::PARAM_INT);
    $sth->bindParam(':c_active_en', $_POST['c_active_en'], PDO::PARAM_INT);
    $sth->bindParam(':c_id', $_POST['c_id'], PDO::PARAM_INT);
    $sth->execute();
    $updateGoTo = "storeC_level2_list.php?selected1=" . $_POST['c_link'] . "&change_num=1&now_c_id=" . $_POST['c_id'] . "&totalRows_RecstoreC=" . $_SESSION['totalRows'] . "&pageNum=" . $_SESSION["ToPage"];
    echo '<pre>'; print_r($updateGoTo); echo '</pre>';
    if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'] . "&pageNum=" . $_SESSION["ToPage"];
    }
    header(sprintf("Location: %s", $updateGoTo));
}
?>