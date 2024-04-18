<?php require_once('../Connections/connect2data.php'); ?>
<?php require_once('photo_process.php'); ?>
<?php require_once('file_process.php'); ?>
<?php require_once('imagesSize.php'); ?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$colname_Recsearch = "-1";
if (isset($_GET['d_id'])) {
    $colname_Recsearch = $_GET['d_id'];
}

$query_Recsearch = "SELECT * FROM data_set WHERE d_id = :d_id";
$Recsearch = $conn->prepare($query_Recsearch);
$Recsearch->bindParam(':d_id', $colname_Recsearch, PDO::PARAM_INT);
$Recsearch->execute();
$row_Recsearch = $Recsearch->fetch();
$totalRows = $Recsearch->rowCount();

$query_RecImage = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'image' ORDER BY file_sort ASC";
$RecImage = $conn->prepare($query_RecImage);
$RecImage->bindParam(':file_d_id', $colname_Recsearch, PDO::PARAM_INT);
$RecImage->execute();
$row_RecImage = $RecImage->fetch();
$totalRows_RecImage = $RecImage->rowCount();

$query_RecCover = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'searchCover'";
$RecCover = $conn->prepare($query_RecCover);
$RecCover->bindParam(':file_d_id', $colname_Recsearch, PDO::PARAM_INT);
$RecCover->execute();
$row_RecCover = $RecCover->fetch();
$totalRows_RecCover = $RecCover->rowCount();

$query_RecFile = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'file'";
$RecFile = $conn->prepare($query_RecFile);
$RecFile->bindParam(':file_d_id', $colname_Recsearch, PDO::PARAM_INT);
$RecFile->execute();
$row_RecFile = $RecFile->fetch();
$totalRows_RecFile = $RecFile->rowCount();

$menu_is = "search";

//記錄帶資料去別地方的資訊

$_SESSION['nowPage'] = $selfPage;
$_SESSION['nowMenu'] = $menu_is;

$ifFile = 0;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once('cmsTitle.php'); ?></title>

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

                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td width="532">

                                                        <input name="d_title" type="text" class="table_data" id="d_title" value="<?php echo $row_Recsearch['d_title']; ?>" size="50" />

                                                        <input name="d_id" type="hidden" id="d_id" value="<?php echo $row_Recsearch['d_id']; ?>" />

                                                    </td>

                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>

                                                </tr>




                                                <!-- 全站 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">全站</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_class3" class="table_data" size="80" id="d_class3" value="<?php echo $row_Recsearch['d_class3'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_class4" cols="100" rows="5" class="table_data" id="d_class4"><?php echo $row_Recsearch['d_class4']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_class5" cols="100" rows="5" class="table_data" id="d_class5"><?php echo $row_Recsearch['d_class5']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_class6" cols="100" rows="5" class="table_data" id="d_class6"><?php echo $row_Recsearch['d_class6']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 首頁 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">首頁</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data1" class="table_data" size="80" id="d_data1" value="<?php echo $row_Recsearch['d_data1'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data2" cols="100" rows="5" class="table_data" id="d_data2"><?php echo $row_Recsearch['d_data2']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data3" cols="100" rows="5" class="table_data" id="d_data3"><?php echo $row_Recsearch['d_data3']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data4" cols="100" rows="5" class="table_data" id="d_data4"><?php echo $row_Recsearch['d_data4']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 關於我們 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">關於我們</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data6" class="table_data" size="80" id="d_data6" value="<?php echo $row_Recsearch['d_data6'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data7" cols="100" rows="5" class="table_data" id="d_data7"><?php echo $row_Recsearch['d_data7']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data8" cols="100" rows="5" class="table_data" id="d_data8"><?php echo $row_Recsearch['d_data8']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data9" cols="100" rows="5" class="table_data" id="d_data9"><?php echo $row_Recsearch['d_data9']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 醫師團隊 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">醫師團隊</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data11" class="table_data" size="80" id="d_data11" value="<?php echo $row_Recsearch['d_data11'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data12" cols="100" rows="5" class="table_data" id="d_data12"><?php echo $row_Recsearch['d_data12']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data13" cols="100" rows="5" class="table_data" id="d_data13"><?php echo $row_Recsearch['d_data13']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data14" cols="100" rows="5" class="table_data" id="d_data14"><?php echo $row_Recsearch['d_data14']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 空間環境 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">空間環境</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data16" class="table_data" size="80" id="d_data16" value="<?php echo $row_Recsearch['d_data16'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data17" cols="100" rows="5" class="table_data" id="d_data17"><?php echo $row_Recsearch['d_data17']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data18" cols="100" rows="5" class="table_data" id="d_data18"><?php echo $row_Recsearch['d_data18']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data19" cols="100" rows="5" class="table_data" id="d_data19"><?php echo $row_Recsearch['d_data19']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 最新消息 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">最新消息</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data21" class="table_data" size="80" id="d_data21" value="<?php echo $row_Recsearch['d_data21'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data22" cols="100" rows="5" class="table_data" id="d_data22"><?php echo $row_Recsearch['d_data22']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data23" cols="100" rows="5" class="table_data" id="d_data23"><?php echo $row_Recsearch['d_data23']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data24" cols="100" rows="5" class="table_data" id="d_data24"><?php echo $row_Recsearch['d_data24']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 案例分享 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">案例分享</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data26" class="table_data" size="80" id="d_data26" value="<?php echo $row_Recsearch['d_data26'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data27" cols="100" rows="5" class="table_data" id="d_data27"><?php echo $row_Recsearch['d_data27']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data28" cols="100" rows="5" class="table_data" id="d_data28"><?php echo $row_Recsearch['d_data28']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data29" cols="100" rows="5" class="table_data" id="d_data29"><?php echo $row_Recsearch['d_data29']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 醫師專欄 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">醫師專欄</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data31" class="table_data" size="80" id="d_data31" value="<?php echo $row_Recsearch['d_data31'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data32" cols="100" rows="5" class="table_data" id="d_data32"><?php echo $row_Recsearch['d_data32']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data33" cols="100" rows="5" class="table_data" id="d_data33"><?php echo $row_Recsearch['d_data33']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data34" cols="100" rows="5" class="table_data" id="d_data34"><?php echo $row_Recsearch['d_data34']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 肌膚閃耀 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">肌膚閃耀</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data36" class="table_data" size="80" id="d_data36" value="<?php echo $row_Recsearch['d_data36'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data37" cols="100" rows="5" class="table_data" id="d_data37"><?php echo $row_Recsearch['d_data37']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data38" cols="100" rows="5" class="table_data" id="d_data38"><?php echo $row_Recsearch['d_data38']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data39" cols="100" rows="5" class="table_data" id="d_data39"><?php echo $row_Recsearch['d_data39']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 微整塑顏 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">微整塑顏</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data41" class="table_data" size="80" id="d_data41" value="<?php echo $row_Recsearch['d_data41'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data42" cols="100" rows="5" class="table_data" id="d_data42"><?php echo $row_Recsearch['d_data42']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data43" cols="100" rows="5" class="table_data" id="d_data43"><?php echo $row_Recsearch['d_data43']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data44" cols="100" rows="5" class="table_data" id="d_data44"><?php echo $row_Recsearch['d_data44']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 拉提緊緻 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">拉提緊緻</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data46" class="table_data" size="80" id="d_data46" value="<?php echo $row_Recsearch['d_data46'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data47" cols="100" rows="5" class="table_data" id="d_data47"><?php echo $row_Recsearch['d_data47']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data48" cols="100" rows="5" class="table_data" id="d_data48"><?php echo $row_Recsearch['d_data48']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data49" cols="100" rows="5" class="table_data" id="d_data49"><?php echo $row_Recsearch['d_data49']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <!-- 體態健康 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">體態健康</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data51" class="table_data" size="80" id="d_data51" value="<?php echo $row_Recsearch['d_data51'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data52" cols="100" rows="5" class="table_data" id="d_data52"><?php echo $row_Recsearch['d_data52']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data53" cols="100" rows="5" class="table_data" id="d_data53"><?php echo $row_Recsearch['d_data53']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data54" cols="100" rows="5" class="table_data" id="d_data54"><?php echo $row_Recsearch['d_data54']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>


                                                <!-- 聯絡我們 -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title"></td>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_data" style="font-weight: 700;font-size: 16px;">聯絡我們</td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>

                                                    <td class="table_data"><input name="d_data55" class="table_data" size="80" id="d_data55" value="<?php echo $row_Recsearch['d_data55'] ?>"></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">描述</td>

                                                    <td class="table_data"><textarea name="d_data56" cols="100" rows="5" class="table_data" id="d_data56"><?php echo $row_Recsearch['d_data56']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">head</td>

                                                    <td class="table_data"><textarea name="d_data57" cols="100" rows="5" class="table_data" id="d_data57"><?php echo $row_Recsearch['d_data57']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">body</td>

                                                    <td class="table_data"><textarea name="d_data58" cols="100" rows="5" class="table_data" id="d_data58"><?php echo $row_Recsearch['d_data58']; ?></textarea></td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><p class="red_letter">*小斷行請按Shift+Enter。<br />

                                                    輸入區域的右下角可以調整輸入空間的大小。</p></td>

                                                </tr>



                                                <tr>

                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">日期</td>

                                                    <td width="532">

                                                        <input name="d_date" type="text" class="table_data" id="d_date" value="<?php echo ( ($row_Recsearch['d_date']=='') || (!(strcmp(" 0000-00-00 00:00:00 ", $row_Recsearch['d_date']))) ) ? date("Y-m-d H:i:s ") : $row_Recsearch['d_date']; ?>" size="50">

                                                    </td>

                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>

                                                </tr>

                                                <tr>

                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">在網頁顯示</td>

                                                    <td width="532">

                                                        <select name="d_active" class="table_data" id="d_active">

                                                            <option value="1" <?php if (!(strcmp(1, $row_Recsearch[ 'd_active']))) {echo "selected";} ?>>顯示</option>

                                                            <option value="0" <?php if (!(strcmp(0, $row_Recsearch[ 'd_active']))) {echo "selected";} ?>>不顯示</option>

                                                        </select>

                                                    </td>

                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>

                                                </tr>

                                                <?php if ($totalRows_RecCover > 0) { // Show if recordset not empty ?>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">目前封面圖片</td>

                                                    <td>

                                                        <?php do { ?>

                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                                            <tr>

                                                                <td width="100" rowspan="2" align="center"><a href="../<?php echo $row_RecCover['file_link1']; ?>" class="fancyboxImg" rel="group" title="<?php echo $row_RecCover['file_title']; ?>"><img src="../<?php echo $row_RecCover['file_link2']; ?>" alt="" class="image_frame"/></a></td>

                                                                <td align="left" class="table_data">&nbsp;圖片說明：

                                                                    <?php echo $row_RecCover['file_title']; ?>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td align="left" class="table_data">&nbsp;</td>

                                                            </tr>

                                                            <tr>

                                                                <td align="center"><a href="image_edit.php?file_id=<?php echo $row_RecCover['file_id'].'&type=searchCover'; ?>" class="fancyboxEdit" title="修改圖片"><img src="image/media_edit.gif" width="16" height="16" title="修改圖片"/></a><a href="image_del.php?file_id=<?php echo $row_RecCover['file_id'].'&type=searchCover'; ?>" class="fancyboxEdit" title="刪除圖片"><img src="image/media_delete.gif" width="16" height="16" title="刪除圖片"/></a></td>

                                                            </tr>

                                                        </table>

                                                        <?php } while ($row_RecCover = $RecCover->fetch()); ?>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p class="red_letter"></p>

                                                    </td>

                                                </tr>

                                                <?php } // Show if recordset not empty ?>

                                                <?php if ($totalRows_RecCover == 0) { // Show if recordset not empty ?>

                                                <!-- <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">

                                                        <p>上傳封面圖片</p>

                                                    </td>

                                                    <td>

                                                        <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC" class="data" id="pTable">

                                                            <tr>

                                                                <td> <span class="table_data">選擇圖片：</span>

                                                                    <input name="imageCover[]" type="file" class="table_data" id="imageCover1" />

                                                                    <br>

                                                                    <span class="table_data">圖片說明：</span>

                                                                    <input name="image_titleCover[]" type="text" class="table_data" id="image_titleCover1"> </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p class="red_letter">*

                                                            <?php echo $imagesSize['searchCover']['note'];?>

                                                        </p>

                                                    </td>

                                                </tr> -->

                                                <?php } // Show if recordset not empty ?>

                                                <?php if ($totalRows_RecImage > 0) { // Show if recordset not empty ?>

                                                <tr id="imageEdit">

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">目前圖片</td>

                                                    <td id="draggable">

                                                        <?php do { ?>

                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" data-id="<?= $row_RecImage['file_id'] ?>">

                                                            <tr>

                                                                <td width="100" rowspan="2" align="center"><a href="../<?php echo $row_RecImage['file_link1']; ?>" class="fancyboxImg" rel="group" title="<?php echo $row_RecImage['file_title']; ?>"><img src="../<?php echo $row_RecImage['file_link2']; ?>" alt="" class="image_frame"/></a></td>

                                                                <td align="left" class="table_data">&nbsp;圖片說明：

                                                                    <?php echo $row_RecImage['file_title']; ?>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td align="left" class="table_data">&nbsp;</td>

                                                            </tr>

                                                            <tr>

                                                                <td align="center"><a href="image_edit.php?file_id=<?php echo $row_RecImage['file_id']; ?>" class="fancyboxEdit" title="修改圖片"><img src="image/media_edit.gif" width="16" height="16" title="修改圖片"/></a><a href="image_del.php?file_id=<?php echo $row_RecImage['file_id']; ?>" class="fancyboxEdit" title="刪除圖片"><img src="image/media_delete.gif" width="16" height="16" title="刪除圖片"/></a></td>

                                                            </tr>

                                                        </table>

                                                        <?php } while ($row_RecImage = $RecImage->fetch()); ?>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p class="red_letter">* 若要排序照片，請直接施拉即可。</p>

                                                    </td>

                                                </tr>

                                                <?php } // Show if recordset not empty ?>

                                                <?php if (0) { // Show if recordset not empty ?>

                                                <!-- ========================== 單張單張傳 =========================== -->

                                                <!-- <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">

                                                        <p>上傳圖片</p>

                                                    </td>

                                                    <td>

                                                        <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC" class="data" id="pTable">

                                                            <tr>

                                                                <td> <span class="table_data">選擇圖片：</span>

                                                                    <input name="image[]" type="file" class="table_data" id="image1" />

                                                                    <br>

                                                                    <span class="table_data">圖片說明：</span>

                                                                    <input name="image_title[]" type="text" class="table_data" id="image_title1"> </td>

                                                            </tr>

                                                        </table>

                                                        <table width="100%" border="0" cellspacing="5" cellpadding="2">

                                                            <tr>

                                                                <td height="28">

                                                                    <table border="0" cellspacing="2" cellpadding="2">

                                                                        <tr>

                                                                            <td><a href="javascript:addField()"><img src="image/add.png" width="16" height="16" border="0"></a></td>

                                                                            <td><a href="javascript:addField()" class="table_data">新增圖片</a></td>

                                                                            <td class="red_letter">&nbsp;</td>

                                                                        </tr>

                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p class="red_letter">*

                                                            <?php echo $imagesSize[$_SESSION['nowMenu']]['note'];?>

                                                        </p>

                                                    </td>

                                                </tr> -->

                                                <!-- ========================== 可多張上傳 =========================== -->

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">

                                                        <p>上傳圖片</p>

                                                    </td>

                                                    <td>

                                                        <table width="100%" border="0" cellspacing="5" cellpadding="2" id="addF">

                                                            <tr>

                                                                <td height="28">

                                                                    <table border="0" cellspacing="2" cellpadding="2">

                                                                        <tr>

                                                                            <td><a href="dropzoneImg.php?d_id=<?= $row_Recsearch['d_id'] ?>" class="fancyboxUpload" title="上傳圖片"><img src="image/add.png" width="16" height="16" border="0"></a></td>

                                                                            <td><a href="dropzoneImg.php?d_id=<?= $row_Recsearch['d_id'] ?>" class="fancyboxUpload table_data">上傳圖片</a></td>

                                                                            <td class="note_letter">&nbsp;</td>

                                                                        </tr>

                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p class="red_letter">*

                                                            <?php echo $imagesSize[$_SESSION['nowMenu']]['note'];?>

                                                        </p>

                                                    </td>

                                                </tr>

                                                <?php } // Show if recordset not empty ?>

                                                <?php if($ifFile){ ?>

                                                <?php if ($totalRows_RecFile > 0) { // Show if recordset not empty ?>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">目前檔案</td>

                                                    <td>

                                                        <table border="0" cellspacing="0" cellpadding="0">

                                                            <tr>

                                                                <td>

                                                                    <table>

                                                                        <tr>

                                                                            <?php

                                                                            $RecFile_endRow = 0;

                                                                            $RecFile_columns = 1;

                                                                            $RecFile_hloopRow1 = 0;

                                                                            do {

                                                                                if($RecFile_endRow == 0  && $RecFile_hloopRow1++ != 0) echo "<tr>";

                                                                            ?>

                                                                                <td>

                                                                                    <table width="320" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666" class="table_frame_style">

                                                                                        <tr>

                                                                                            <td align="left" class="table_no_border"><span class="table_data">&nbsp;檔案名稱: <a href="../<?php echo $row_RecFile['file_link1']; ?>" title='<?php echo $row_RecFile['file_title']; ?>' target="_blank"><?php echo $row_RecFile['file_name']; ?></a></span></td>

                                                                                        </tr>

                                                                                        <tr>

                                                                                            <td align="left" class="table_no_border"><span class="table_data">&nbsp;檔案</span><span class="table_data">說明:</span><span class="table_data"><?php echo $row_RecFile['file_title']; ?></span></td>

                                                                                        </tr>

                                                                                        <tr>

                                                                                            <td align="left" class="table_no_border"><a href="file_edit.php?file_id=<?php echo $row_RecFile['file_id']; ?>" class="fancyboxEdit" title='修改檔案'><img src="image/media_edit.gif" width="16" height="16" title="修改檔案" /></a><a href="file_del.php?file_id=<?php echo $row_RecFile['file_id']; ?>" class="fancyboxEdit" title='刪除檔案'><img src="image/media_delete.gif" width="16" height="16" title="刪除檔案"/></a></td>

                                                                                        </tr>

                                                                                    </table>

                                                                                </td>

                                                                                <?php  $RecFile_endRow++;

                                                                                    if($RecFile_endRow >= $RecFile_columns) {

                                                                                ?>

                                                                        </tr>

                                                                        <?php

                                                                        $RecFile_endRow = 0;

                                                                        } } while ($row_RecFile = $RecFile->fetch());



                                                                        if($RecFile_endRow != 0) {

                                                                            while ($RecFile_endRow < $RecFile_columns) {

                                                                                echo("<td>&nbsp;</td>");

                                                                                $RecFile_endRow++;

                                                                            }

                                                                            echo("</tr>");

                                                                        }

                                                                        ?>

                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title">

                                                        <p>&nbsp;</p>

                                                    </td>

                                                </tr>

                                                <?php } // Show if recordset not empty ?>

                                                <tr>

                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">

                                                        <p>上傳檔案</p>

                                                    </td>

                                                    <td>

                                                        <table border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC" class="data" id="pTable2">

                                                            <tr>

                                                                <td><span class="table_data">選擇檔案：</span>

                                                                    <input name="upfile[]" type="file" class="table_data" id="upfile1" />

                                                                    <br />

                                                                    <span class="table_data">檔案說明：</span>

                                                                    <input name="upfile_title[]" type="text" class="table_data" id="upfile_title1" />

                                                                </td>

                                                            </tr>

                                                        </table>

                                                        <table border="0" cellspacing="5" cellpadding="2">

                                                            <tr>

                                                                <td>

                                                                    <table border="0" cellspacing="2" cellpadding="2">

                                                                        <tr>

                                                                            <td><a href="javascript:addField2()"><img src="image/add.png" width="16" height="16" border="0" /></a></td>

                                                                            <td><a href="javascript:addField2()" class="table_data">新增檔案</a></td>

                                                                            <td class="red_letter">&nbsp;</td>

                                                                        </tr>

                                                                    </table>

                                                                </td>

                                                            </tr>

                                                        </table>

                                                    </td>

                                                    <td bgcolor="#e5ecf6" class="table_col_title"><span class="red_letter">*上傳之檔案請勿超過2M。</span></td>

                                                </tr>

                                                <?php } ?>

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

                                <input type="hidden" name="MM_update" value="form1" />

                                <input name="MM_updateType" type="hidden" id="MM_updateType" value="" />

                            </form>

                            <table width="100%" height="1" border="0" align="center" cellpadding="0" cellspacing="0" class="buttom_dot_line">

                                <tr>

                                    <td>&nbsp;</td>

                                </tr>

                            </table>

                        </td>

                    </tr>

                </table>

            </td>

        </tr>

    </table>

</body>

</html>



<script type="text/javascript" src="jquery/fancyapps-fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<script type="text/javascript" src="jquery/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>

<link rel="stylesheet" type="text/css" href="jquery/fancyapps-fancyBox/source/jquery.fancybox.css" media="screen" />

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js"></script>



<script type="text/javascript">

    $(document).ready(function() {



        if ($("#draggable")[0] != undefined) {

            var sortable = Sortable.create( $("#draggable")[0],{

                animation: 100,

                ghostClass: "ryder-ghost",

                chosenClass: "ryder-chosen",

                onSort(e) {



                    $.ajax({

                        data: {

                            ids: sortable.toArray()

                        },

                        url: "image_sort.php",

                        type: "POST",

                        success: function(res){}

                    });



                }

            } );

        }





        $("a[rel=group]").fancybox({

            autoSize: true,

            openEffect: 'elastic',

            closeEffect: 'elastic',

            helpers: {

                overlay: {

                    css: {

                        'background': 'rgba(0, 0, 0, 0.7)'

                    }

                }

            }

        });



        $("a.fancyboxEdit").fancybox({

            type: 'ajax',

            openEffect: 'fade',

            closeEffect: 'fade',

            autoSize: true,

            helpers: {

                overlay: {

                    css: {

                        'background': 'rgba(0, 0, 0, 0.7)'

                    }

                }

            },

            beforeShow: function() {

                //updateData();

            }

        });



        var fancyApp = $("a.fancyboxUpload").fancybox({

            type: 'iframe',

            openEffect: 'fade',

            closeEffect: 'fade',

            autoSize: false,

            width: '1000',

            closeBtn: true,

            helpers: {

                overlay: {

                    closeClick: true,

                    css: {

                        'background': 'rgba(0, 0, 0, 0.7)'

                    }

                }

            },

            beforeShow: function() {

                //updateData();

            },

            afterClose: function() {

                window.location.reload();

            }

        });

    });



    function updateData() {

        var d_id = $('#d_id').val();

        $.ajax({

            type: "POST",

            url: "data_save.php",

            data: $('#form1').serializeArray(),

            success: function(data) {

                //nothing

                //alert(data);

            }

        });

    }



    function call_alert(link_url) {

        alert("上傳得檔案中，有的不是圖片!");

        window.location = link_url;

    }



    function addField() {

        var pTable = document.getElementById('pTable');

        var lastRow = pTable.rows.length;

        //alert(pTable.rows.length);

        var myField = document.getElementById('image' + lastRow);

        //alert('image'+lastRow);

        console.log('image' + lastRow);



        if (myField.value) {

            var aTr = pTable.insertRow(lastRow);

            var newRow = lastRow + 1;

            var newImg = 'img' + (newRow);

            var aTd1 = aTr.insertCell(0);

            aTd1.innerHTML = '<span class="table_data">選擇圖片： </span><input name="image[]" type="file" class="table_data" id="image' + newRow + '"><br><span class="table_data">圖片標題： </span><input name="image_title[]" type="text" class="table_data" id="image_title' + newRow + '">';

        } else {

            alert("尚有未選取之圖片欄位!!");

        }

    }



    function addField2() {

        var pTable2 = document.getElementById('pTable2');

        var lastRow = pTable2.rows.length;

        //alert(pTable2.rows.length);

        var myField = document.getElementById('upfile' + lastRow);

        //alert('upfile'+lastRow);

        if (myField.value) {

            var aTr = pTable2.insertRow(lastRow);

            var newRow = lastRow + 1;

            var newFile = 'file' + (newRow);

            var aTd1 = aTr.insertCell(0);

            aTd1.innerHTML = '<span class="table_data">選擇檔案： </span><input name="upfile[]" type="file" class="table_data" id="upfile' + newRow + '"><br><span class="table_data">檔案說明： </span><input name="upfile_title[]" type="text" class="table_data" id="upfile_title' + newRow + '">';

        } else {

            alert("尚有未選取之檔案欄位!!");

        }

    }

</script>



<?php

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {



    $updateSQL = "UPDATE data_set SET d_title=:d_title, d_content=:d_content, d_class2=:d_class2, d_class3=:d_class3, d_class4=:d_class4, d_class5=:d_class5, d_class6=:d_class6, d_data1=:d_data1, d_data2=:d_data2, d_data3=:d_data3, d_data4=:d_data4, d_data5=:d_data5, d_data6=:d_data6, d_data7=:d_data7, d_data8=:d_data8, d_data9=:d_data9, d_data10=:d_data10, d_data11=:d_data11, d_data12=:d_data12, d_data13=:d_data13, d_data14=:d_data14, d_data15=:d_data15, d_data16=:d_data16, d_data17=:d_data17, d_data18=:d_data18, d_data19=:d_data19, d_data20=:d_data20, d_data21=:d_data21, d_data22=:d_data22, d_data23=:d_data23, d_data24=:d_data24, d_data25=:d_data25, d_data26=:d_data26, d_data27=:d_data27, d_data28=:d_data28, d_data29=:d_data29, d_data30=:d_data30, d_data31=:d_data31, d_data32=:d_data32, d_data33=:d_data33, d_data34=:d_data34, d_data35=:d_data35, d_data36=:d_data36, d_data37=:d_data37, d_data38=:d_data38, d_data39=:d_data39, d_data40=:d_data40, d_data41=:d_data41, d_data42=:d_data42, d_data43=:d_data43, d_data44=:d_data44, d_data45=:d_data45, d_data46=:d_data46, d_data47=:d_data47, d_data48=:d_data48, d_data49=:d_data49, d_data50=:d_data50, d_data51=:d_data51, d_data52=:d_data52, d_data53=:d_data53, d_data54=:d_data54, d_data55=:d_data55, d_data56=:d_data56, d_data57=:d_data57, d_data58=:d_data58, d_date=:d_date, d_active=:d_active WHERE d_id=:d_id";



    $stat = $conn->prepare($updateSQL);

    $stat->bindParam(':d_title', $_POST['d_title'], PDO::PARAM_STR);

    $stat->bindParam(':d_content', $_POST['d_content'], PDO::PARAM_STR);

    $stat->bindParam(':d_class2', $_POST['d_class2'], PDO::PARAM_STR);

    $stat->bindParam(':d_class3', $_POST['d_class3'], PDO::PARAM_STR);

    $stat->bindParam(':d_class4', $_POST['d_class4'], PDO::PARAM_STR);

    $stat->bindParam(':d_class5', $_POST['d_class5'], PDO::PARAM_STR);

    $stat->bindParam(':d_class6', $_POST['d_class6'], PDO::PARAM_STR);

    $stat->bindParam(':d_data1', $_POST['d_data1'], PDO::PARAM_STR);

    $stat->bindParam(':d_data2', $_POST['d_data2'], PDO::PARAM_STR);

    $stat->bindParam(':d_data3', $_POST['d_data3'], PDO::PARAM_STR);

    $stat->bindParam(':d_data4', $_POST['d_data4'], PDO::PARAM_STR);

    $stat->bindParam(':d_data5', $_POST['d_data5'], PDO::PARAM_STR);

    $stat->bindParam(':d_data6', $_POST['d_data6'], PDO::PARAM_STR);

    $stat->bindParam(':d_data7', $_POST['d_data7'], PDO::PARAM_STR);

    $stat->bindParam(':d_data8', $_POST['d_data8'], PDO::PARAM_STR);

    $stat->bindParam(':d_data9', $_POST['d_data9'], PDO::PARAM_STR);

    $stat->bindParam(':d_data10', $_POST['d_data10'], PDO::PARAM_STR);

    $stat->bindParam(':d_data11', $_POST['d_data11'], PDO::PARAM_STR);

    $stat->bindParam(':d_data12', $_POST['d_data12'], PDO::PARAM_STR);

    $stat->bindParam(':d_data13', $_POST['d_data13'], PDO::PARAM_STR);

    $stat->bindParam(':d_data14', $_POST['d_data14'], PDO::PARAM_STR);

    $stat->bindParam(':d_data15', $_POST['d_data15'], PDO::PARAM_STR);

    $stat->bindParam(':d_data16', $_POST['d_data16'], PDO::PARAM_STR);

    $stat->bindParam(':d_data17', $_POST['d_data17'], PDO::PARAM_STR);

    $stat->bindParam(':d_data18', $_POST['d_data18'], PDO::PARAM_STR);

    $stat->bindParam(':d_data19', $_POST['d_data19'], PDO::PARAM_STR);

    $stat->bindParam(':d_data20', $_POST['d_data20'], PDO::PARAM_STR);

    $stat->bindParam(':d_data21', $_POST['d_data21'], PDO::PARAM_STR);

    $stat->bindParam(':d_data22', $_POST['d_data22'], PDO::PARAM_STR);

    $stat->bindParam(':d_data23', $_POST['d_data23'], PDO::PARAM_STR);

    $stat->bindParam(':d_data24', $_POST['d_data24'], PDO::PARAM_STR);

    $stat->bindParam(':d_data25', $_POST['d_data25'], PDO::PARAM_STR);

    $stat->bindParam(':d_data26', $_POST['d_data26'], PDO::PARAM_STR);

    $stat->bindParam(':d_data27', $_POST['d_data27'], PDO::PARAM_STR);

    $stat->bindParam(':d_data28', $_POST['d_data28'], PDO::PARAM_STR);

    $stat->bindParam(':d_data29', $_POST['d_data29'], PDO::PARAM_STR);

    $stat->bindParam(':d_data30', $_POST['d_data30'], PDO::PARAM_STR);

    $stat->bindParam(':d_data31', $_POST['d_data31'], PDO::PARAM_STR);

    $stat->bindParam(':d_data32', $_POST['d_data32'], PDO::PARAM_STR);

    $stat->bindParam(':d_data33', $_POST['d_data33'], PDO::PARAM_STR);

    $stat->bindParam(':d_data34', $_POST['d_data34'], PDO::PARAM_STR);

    $stat->bindParam(':d_data35', $_POST['d_data35'], PDO::PARAM_STR);

    $stat->bindParam(':d_data36', $_POST['d_data36'], PDO::PARAM_STR);

    $stat->bindParam(':d_data37', $_POST['d_data37'], PDO::PARAM_STR);

    $stat->bindParam(':d_data38', $_POST['d_data38'], PDO::PARAM_STR);

    $stat->bindParam(':d_data39', $_POST['d_data39'], PDO::PARAM_STR);

    $stat->bindParam(':d_data40', $_POST['d_data40'], PDO::PARAM_STR);

    $stat->bindParam(':d_data41', $_POST['d_data41'], PDO::PARAM_STR);

    $stat->bindParam(':d_data42', $_POST['d_data42'], PDO::PARAM_STR);

    $stat->bindParam(':d_data43', $_POST['d_data43'], PDO::PARAM_STR);

    $stat->bindParam(':d_data44', $_POST['d_data44'], PDO::PARAM_STR);

    $stat->bindParam(':d_data45', $_POST['d_data45'], PDO::PARAM_STR);

    $stat->bindParam(':d_data46', $_POST['d_data46'], PDO::PARAM_STR);

    $stat->bindParam(':d_data47', $_POST['d_data47'], PDO::PARAM_STR);

    $stat->bindParam(':d_data48', $_POST['d_data48'], PDO::PARAM_STR);

    $stat->bindParam(':d_data49', $_POST['d_data49'], PDO::PARAM_STR);

    $stat->bindParam(':d_data50', $_POST['d_data50'], PDO::PARAM_STR);

    $stat->bindParam(':d_data51', $_POST['d_data51'], PDO::PARAM_STR);

    $stat->bindParam(':d_data52', $_POST['d_data52'], PDO::PARAM_STR);

    $stat->bindParam(':d_data53', $_POST['d_data53'], PDO::PARAM_STR);

    $stat->bindParam(':d_data54', $_POST['d_data54'], PDO::PARAM_STR);

    $stat->bindParam(':d_data55', $_POST['d_data55'], PDO::PARAM_STR);

    $stat->bindParam(':d_data56', $_POST['d_data56'], PDO::PARAM_STR);

    $stat->bindParam(':d_data57', $_POST['d_data57'], PDO::PARAM_STR);

    $stat->bindParam(':d_data58', $_POST['d_data58'], PDO::PARAM_STR);

    $stat->bindParam(':d_date', $_POST['d_date'], PDO::PARAM_STR);

    $stat->bindParam(':d_active', $_POST['d_active'], PDO::PARAM_INT);

    $stat->bindParam(':d_id', $_POST['d_id'], PDO::PARAM_INT);

    $stat->execute();



    //----------插入圖片資料到資料庫begin(須放入插入主資料後)----------



    //一般附圖

    $image_result = image_process($conn, $_FILES['image'], $_REQUEST['image_title'], $menu_is, "add", $imagesSize[$_SESSION['nowMenu']]['IW'], $imagesSize[$_SESSION['nowMenu']]['IH']);



    for ($j = 1; $j < count($image_result); $j++) {

        $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";



        $stat = $conn->prepare($insertSQL);

        $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);

        $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);

        $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);

        $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);

        $stat->bindParam(':file_type', $type = 'image', PDO::PARAM_STR);

        $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_INT);

        $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);

        $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);

        $stat->execute();



        $_SESSION["change_image"] = 1;

    }



    // Cover

    $image_result = image_process($conn, $_FILES['imageCover'], $_REQUEST['image_titleCover'], $menu_is, "add", $imagesSize['searchCover']['IW'], $imagesSize['searchCover']['IH']);



    for ($j = 1; $j < count($image_result); $j++) {

        $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";



        $stat = $conn->prepare($insertSQL);

        $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);

        $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);

        $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);

        $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);

        $stat->bindParam(':file_type', $type = 'searchCover', PDO::PARAM_STR);

        $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_INT);

        $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);

        $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);

        $stat->execute();



        $_SESSION["change_image"] = 1;

    }

    //----------插入圖片資料到資料庫end----------



    //----------插入檔案資料到資料庫begin(須放入插入主資料後)----------

    if ($ifFile) {

        $file_result = file_process($conn, "search", "add");



        for ($j = 0; $j < count($file_result); $j++) {

            $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_type, file_d_id, file_title) VALUES (:file_name, :file_link1, :file_type, :file_d_id, :file_title)";



            $stat = $conn->prepare($insertSQL);

            $stat->bindParam(':file_name', $file_result[$j][0], PDO::PARAM_STR);

            $stat->bindParam(':file_link1', $file_result[$j][1], PDO::PARAM_STR);

            $stat->bindParam(':file_type', $type = 'file', PDO::PARAM_STR);

            $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_STR);

            $stat->bindParam(':file_title', $file_result[$j][2], PDO::PARAM_STR);

            $stat->execute();

        }

    }

    //----------插入檔案資料到資料庫end----------



    $updateGoTo = "search_list.php";

    if (isset($_SERVER['QUERY_STRING'])) {

        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";

        $updateGoTo .= $_SERVER['QUERY_STRING'] . "&pageNum=" . $_SESSION["ToPage"];

    }



    if ($image_result[0][0] == 1) {

        echo "<script type=\"text/javascript\">call_alert('" . $updateGoTo . "');</script>";

    } else {

        header(sprintf("Location: %s", $updateGoTo));

    }

}

?>