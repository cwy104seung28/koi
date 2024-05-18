<?php require_once ('../Connections/connect2data.php'); ?>
<?php require_once ('photo_process.php'); ?>
<?php require_once ('file_process.php'); ?>
<?php require_once ('imagesSize.php'); ?>
<?php
if (!1) {
    header("Location: storeC_level2_list.php");
}
$G_selected1 = '';
if (isset($_SESSION['selected_storeC_level2'])) {
    $G_selected1 = $_SESSION['selected_storeC_level2'];
}
$query_RecstoreC = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_level='1' AND c_active='1' ORDER BY c_sort ASC, c_id DESC";
$RecstoreC = $conn->query($query_RecstoreC);
$row_RecstoreC = $RecstoreC->fetch();
$totalRows_RecstoreC = $RecstoreC->rowCount();
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$menu_is = "store";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once ('cmsTitle.php'); ?></title>
    <link rel="stylesheet" href="jquery/chosen_v1.8.5/chosen.css">
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
                            <!-- InstanceBeginEditable name="編輯區域" -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="30%" class="list_title">新增</td>
                                    <td width="70%">&nbsp;</td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="image/spacer.gif" width="1" height="1"></td>
                                </tr>
                            </table>
                            <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data"
                                name="form1" id="form1">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="3" cellpadding="5">
                                                <tr>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">分類</td>
                                                    <td>
                                                        <select name="c_link" id="c_link" class="chosen-select">
                                                            <?php do { ?>
                                                                <option value="<?php echo $row_RecstoreC['c_id'] ?>" <?php if (!(strcmp($row_RecstoreC['c_id'], $G_selected1))) {
                                                                       echo "selected";
                                                                   } ?>>
                                                                    <?php echo $row_RecstoreC['c_title'] ?>
                                                                </option>
                                                                <?php
                                                            } while ($row_RecstoreC = $RecstoreC->fetch());
                                                            $rows = $RecstoreC->rowCount();
                                                            if ($rows > 0) {
                                                                $RecstoreC->execute();
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">標題</td>
                                                    <td width="532">
                                                        <input name="c_title" type="text" class="table_data"
                                                            id="c_title" size="50">
                                                        <input name="c_parent" type="hidden" id="c_parent"
                                                            value="storeC" />
                                                        <input name="c_level" type="hidden" id="c_level" value="2" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">在中文網頁顯示狀態</td>
                                                    <td width="532">
                                                        <select name="c_active" class="table_data" id="c_active">
                                                            <option value="1">顯示</option>
                                                                <option value="0">不顯示</option>
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
                                            <input name="submitBtn" type="submit" class="btnType" id="submitBtn"
                                                value="送出" />
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="MM_insert" value="form1" />
                            </form>
                            <table width="100%" height="1" border="0" align="center" cellpadding="0" cellspacing="0"
                                class="buttom_dot_line">
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
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
    $insertSQL = "INSERT INTO class_set (c_title, c_title_en, c_slug, c_class, c_level, c_parent, c_link, c_active) VALUES (:c_title, :c_title_en, :c_slug, :c_class, :c_level, :c_parent, :c_link, :c_active)";
    $sth = $conn->prepare($insertSQL);
    $sth->bindParam(':c_title', $_POST['c_title'], PDO::PARAM_STR);
    $sth->bindParam(':c_title_en', $_POST['c_title_en'], PDO::PARAM_STR);
    $sth->bindParam(':c_slug', generate_slug($_POST['c_title']), PDO::PARAM_STR);
    $sth->bindParam(':c_class', $_POST['c_class'], PDO::PARAM_INT);
    $sth->bindParam(':c_level', $_POST['c_level'], PDO::PARAM_INT);
    $sth->bindParam(':c_parent', $_POST['c_parent'], PDO::PARAM_STR);
    $sth->bindParam(':c_link', $_POST['c_link'], PDO::PARAM_STR);
    $sth->bindParam(':c_active', $_POST['c_active'], PDO::PARAM_INT);
    $sth->execute();
    //找到insert ID
    $new_data_num = $conn->lastInsertId();
    // Cover
    // $image_result = image_process($conn, $_FILES['imageCover'], $_REQUEST['imageCover_title'], $menu_is, "add", $imagesSize['storeCatCover']['IW'], $imagesSize['storeCatCover']['IH']);
    // for ($j = 1; $j < count($image_result); $j++) {
    //     $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";
    //     $stat = $conn->prepare($insertSQL);
    //     $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
    //     $stat->bindParam(':file_type', $type = 'storeCatCover', PDO::PARAM_STR);
    //     $stat->bindParam(':file_d_id', $new_data_num, PDO::PARAM_INT);
    //     $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
    //     $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
    //     $stat->execute();
    //     $_SESSION["change_image"] = 1;
    // }
    // //----------插入圖片資料到資料庫end----------
    // // CatBannerCover
    // $image_result = image_process($conn, $_FILES['imageBannerCover'], $_REQUEST['imageBannerCover_title'], $menu_is, "add", $imagesSize['storeCatBannerCover']['IW'], $imagesSize['storeCatBannerCover']['IH']);
    // for ($j = 1; $j < count($image_result); $j++) {
    //     $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";
    //     $stat = $conn->prepare($insertSQL);
    //     $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
    //     $stat->bindParam(':file_type', $type = 'storeCatBannerCover', PDO::PARAM_STR);
    //     $stat->bindParam(':file_d_id', $new_data_num, PDO::PARAM_INT);
    //     $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
    //     $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
    //     $stat->execute();
    //     $_SESSION["change_image"] = 1;
    // }
    // // CatBannerCover
    // $image_result = image_process($conn, $_FILES['imageBannerMobileCover'], $_REQUEST['imageBannerMobileCover_title'], $menu_is, "add", $imagesSize['storeCatBannerMobileCover']['IW'], $imagesSize['storeCatBannerMobileCover']['IH']);
    // for ($j = 1; $j < count($image_result); $j++) {
    //     $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";
    //     $stat = $conn->prepare($insertSQL);
    //     $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
    //     $stat->bindParam(':file_type', $type = 'storeCatBannerMobileCover', PDO::PARAM_STR);
    //     $stat->bindParam(':file_d_id', $new_data_num, PDO::PARAM_INT);
    //     $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
    //     $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
    //     $stat->execute();
    //     $_SESSION["change_image"] = 1;
    // }
    //----------插入圖片資料到資料庫end----------
    $insertGoTo = "storeC_level2_list.php?selected1=" . $_POST['c_link'] . "&pageNum=0&totalRows_RecstoreC=" . ($_SESSION['totalRows'] + 1) . "&changeSort=1&now_c_id=" . $new_data_num . "&change_num=1";
    if (isset($_SERVER['QUERY_STRING'])) {
        $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
        $insertGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo));
}
?>