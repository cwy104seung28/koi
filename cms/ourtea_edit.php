<?php require_once ('../Connections/connect2data.php'); ?>
<?php require_once ('photo_process.php'); ?>
<?php require_once ('file_process.php'); ?>
<?php require_once ('imagesSize.php'); ?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$colname_Recourtea = "-1";
if (isset($_GET['d_id'])) {
    $colname_Recourtea = $_GET['d_id'];
}

$query_Recourtea = "SELECT data_set.*, class_set.c_title as c_title FROM data_set LEFT JOIN class_set ON data_set.d_class2 =class_set.c_id WHERE d_id = :d_id";
$Recourtea = $conn->prepare($query_Recourtea);
$Recourtea->bindParam(':d_id', $colname_Recourtea, PDO::PARAM_INT);
$Recourtea->execute();
$row_Recourtea = $Recourtea->fetch();
$totalRows_Recourtea = $Recourtea->rowCount();

$query_RecImage = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'image' ORDER BY file_sort ASC";
$RecImage = $conn->prepare($query_RecImage);
$RecImage->bindParam(':file_d_id', $colname_Recourtea, PDO::PARAM_INT);
$RecImage->execute();
$row_RecImage = $RecImage->fetch();
$totalRows_RecImage = $RecImage->rowCount();

$query_RecCover = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'ourteaCover'";
$RecCover = $conn->prepare($query_RecCover);
$RecCover->bindParam(':file_d_id', $colname_Recourtea, PDO::PARAM_INT);
$RecCover->execute();
$row_RecCover = $RecCover->fetch();
$totalRows_RecCover = $RecCover->rowCount();

$query_RecourteaC = "SELECT * FROM class_set WHERE c_parent = 'ourteaC' AND c_active='1' ORDER BY c_sort ASC, c_id DESC";
$RecourteaC = $conn->prepare($query_RecourteaC);
$RecourteaC->execute();
$row_RecourteaC = $RecourteaC->fetch();
$totalRows_RecourteaC = $RecourteaC->rowCount();

$query_RecFile = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'file'";
$RecFile = $conn->prepare($query_RecFile);
$RecFile->bindParam(':file_d_id', $colname_Recourtea, PDO::PARAM_INT);
$RecFile->execute();
$row_RecFile = $RecFile->fetch();
$totalRows_RecFile = $RecFile->rowCount();

$G_selected1 = '';
if (isset($_SESSION['selected_ourteaC'])) {
    $G_selected1 = $_SESSION['selected_ourteaC'] = $row_Recourtea['d_class2'];
    //echo 'G_selected1 = '.$G_selected1;
}

$menu_is = "ourtea";

//記錄帶資料去別地方的資訊
$_SESSION['nowPage'] = $selfPage;
$_SESSION['nowMenu'] = $menu_is;
$ifFile = 0;

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once ('cmsTitle.php'); ?></title>

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
                                    <td width="30%" class="list_title">修改</td>
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
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="5" cellspacing="3">
                                                <tr>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">分類</td>
                                                    <td>
                                                        <select name="d_class2" id="d_class2" class="chosen-select">
                                                            <?php do { ?>
                                                                <option value="<?php echo $row_RecourteaC['c_id'] ?>" <?php if (!(strcmp($row_RecourteaC['c_id'], $row_Recourtea['d_class2']))) {
                                                                       echo "selected";
                                                                   } ?>>
                                                                    <?php echo $row_RecourteaC['c_title'] ?>
                                                                </option>
                                                                <?php
                                                            } while ($row_RecourteaC = $RecourteaC->fetch());
                                                            $rows = $RecourteaC->rowCount();
                                                            if ($rows > 0) {
                                                                $RecourteaC->execute();
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">中文標題</td>
                                                    <td width="532">
                                                        <input name="d_title" type="text" class="table_data"
                                                            id="d_title"
                                                            value="<?php echo $row_Recourtea['d_title']; ?>"
                                                            size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6"> </td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">英文標題</td>
                                                    <td width="532">
                                                        <input name="d_title_en" type="text" class="table_data"
                                                            value="<?php echo $row_Recourtea['d_title_en']; ?>"
                                                            id="d_title_en" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">簡述</td>
                                                    <td width="532">
                                                        <input name="d_data1" type="text" class="table_data"
                                                            value="<?php echo $row_Recourtea['d_data1']; ?>"
                                                            id="d_data1" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6" class="table_col_title">
                                                        <p class="red_letter">*建議在30字以內
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">英文簡述</td>
                                                    <td width="532">
                                                        <input name="d_data3" type="text" class="table_data"
                                                            value="<?php echo $row_Recourtea['d_data3']; ?>"
                                                            id="d_data3" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6" class="table_col_title">
                                                        <p class="red_letter">*建議在30字以內
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">地區</td>
                                                    <td width="532">
                                                        <input name="d_data2" type="text" class="table_data"
                                                            value="<?php echo $row_Recourtea['d_data2']; ?>"
                                                            id="d_data2" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6"
                                                        class="table_col_title">時間</td>
                                                    <td>
                                                        <input name="d_date" type="text" class="table_data" id="d_date"
                                                            value="<?php echo $row_Recourtea['d_date']; ?>" size="50" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">在中文網頁顯示
                                                    </td>
                                                    <td>
                                                        <select name="d_active" class="table_data" id="d_active">
                                                            <option value="0" <?php if (!(strcmp(0, $row_Recourtea['d_active']))) {
                                                                echo "selected";
                                                            } ?>>不顯示</option>
                                                            <option value="1" <?php if (!(strcmp(1, $row_Recourtea['d_active']))) {
                                                                echo "selected";
                                                            } ?>>顯示</option>
                                                        </select>
                                                    </td>
                                                    <td bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">在英文網頁顯示
                                                    </td>
                                                    <td>
                                                        <select name="d_active_en" class="table_data" id="d_active_en">
                                                            <option value="0" <?php if (!(strcmp(0, $row_Recourtea['d_active_en']))) {
                                                                echo "selected";
                                                            } ?>>不顯示</option>
                                                            <option value="1" <?php if (!(strcmp(1, $row_Recourtea['d_active_en']))) {
                                                                echo "selected";
                                                            } ?>>顯示</option>
                                                        </select>
                                                    </td>
                                                    <td bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <?php if ($totalRows_RecCover > 0) { // Show if recordset not empty 
                                                        ?>
                                                    <tr>
                                                        <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                            目前封面圖片<a name="imageEdit" id="imageEdit"></a></td>
                                                        <td>
                                                            <?php do { ?>
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="100" rowspan="2" align="center"><a
                                                                                href="../<?php echo $row_RecCover['file_link1'] . '?' . (mt_rand(1, 100000) / 100000); ?>"
                                                                                class="fancyboxImg" rel="group"
                                                                                title="<?php echo $row_RecCover['file_title']; ?>"><img
                                                                                    src="../<?php echo $row_RecCover['file_link2'] . '?' . (mt_rand(1, 100000) / 100000); ?>"
                                                                                    alt="" class="image_frame" /></a></td>
                                                                        <td align="left" class="table_data">&nbsp;圖片說明：
                                                                            <?php echo $row_RecCover['file_title']; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" class="table_data">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="center"><a
                                                                                href="image_edit.php?file_id=<?php echo $row_RecCover['file_id'] . '&type=ourteaCover'; ?>"
                                                                                class="fancyboxEdit" title="修改圖片"><img
                                                                                    src="image/media_edit.gif" width="16"
                                                                                    height="16" title="修改圖片" /></a><a
                                                                                href="image_del.php?file_id=<?php echo $row_RecCover['file_id'] . '&type=ourteaCover'; ?>"
                                                                                class="fancyboxEdit" title="刪除圖片"><img
                                                                                    src="image/media_delete.gif" width="16"
                                                                                    height="16" title="刪除圖片" /></a></td>
                                                                        <td align="center">&nbsp;</td>
                                                                    </tr>
                                                                </table>
                                                            <?php } while ($row_RecCover = $RecCover->fetch()); ?>
                                                        </td>
                                                        <td bgcolor="#e5ecf6" class="table_col_title">
                                                            <p class="red_letter">*
                                                                <?php echo $imagesSize['ourteaCover']['note']; ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                <?php } // Show if recordset not empty 
                                                    ?>
                                                <?php if ($totalRows_RecCover == 0) { // Show if recordset not empty 
                                                        ?>
                                                    <tr>
                                                        <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                            <p>上傳封面圖片</p>
                                                        </td>
                                                        <td>
                                                            <table width="100%" border="0" cellpadding="2" cellspacing="2"
                                                                bordercolor="#CCCCCC" class="data">
                                                                <tr>
                                                                    <td> <span class="table_data">選擇圖片：</span>
                                                                        <input name="imageCover[]" type="file"
                                                                            class="table_data" id="imageCover1" />
                                                                        <br>
                                                                        <span class="table_data">圖片說明：</span>
                                                                        <input name="imageCover_title[]" type="text"
                                                                            class="table_data" id="imageCover_title1">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td bgcolor="#e5ecf6" class="table_col_title">
                                                            <p class="red_letter">*
                                                                <?php echo $imagesSize['ourteaCover']['note']; ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                <?php } // Show if recordset not empty 
                                                    ?>
                                                <?php if (1) { // Show if recordset not empty 
                                                        ?>
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
                                                            <?php echo $imagesSize[$_SESSION['nowMenu']]['note']; ?>
                                                        </p>
                                                    </td>
                                                </tr> -->
                                                    <!-- ========================== 可多張上傳 =========================== -->
                                                    <!-- <tr>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                        <p>上傳圖片</p>
                                                    </td>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="5" cellpadding="2" id="addF">
                                                            <tr>
                                                                <td height="28">
                                                                    <table border="0" cellspacing="2" cellpadding="2">
                                                                        <tr>
                                                                            <td><a href="dropzoneImg.php?d_id=<?= $row_Recourtea['d_id'] ?>" class="fancyboxUpload" title="上傳圖片"><img src="image/add.png" width="16" height="16" border="0"></a></td>
                                                                            <td><a href="dropzoneImg.php?d_id=<?= $row_Recourtea['d_id'] ?>" class="fancyboxUpload table_data">上傳圖片</a></td>
                                                                            <td class="note_letter">&nbsp;</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td bgcolor="#e5ecf6" class="table_col_title">
                                                        <p class="red_letter">*
                                                            <?php echo $imagesSize[$_SESSION['nowMenu']]['note']; ?>
                                                        </p>
                                                    </td>
                                                </tr> -->
                                                <?php } // Show if recordset not empty 
                                                    ?>
                                                <?php if ($ifFile) { ?>
                                                    <?php if ($totalRows_RecFile > 0) { // Show if recordset not empty 
                                                                ?>
                                                        <tr>
                                                            <td align="center" bgcolor="#e5ecf6" class="table_col_title">目前檔案
                                                            </td>
                                                            <td>
                                                                <table border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td>
                                                                            <table>
                                                                                <tr>
                                                                                    <?php
                                                                                    $RecFile_endRow = 0;
                                                                                    $RecFile_ourteas = 1;
                                                                                    $RecFile_hloopRow1 = 0;
                                                                                    do {
                                                                                        if ($RecFile_endRow == 0 && $RecFile_hloopRow1++ != 0)
                                                                                            echo "<tr>";
                                                                                        ?>
                                                                                        <td>
                                                                                            <table width="320" border="1"
                                                                                                cellpadding="0" cellspacing="0"
                                                                                                bordercolor="#666666"
                                                                                                class="table_frame_style">
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="table_no_border">
                                                                                                        <span
                                                                                                            class="table_data">&nbsp;檔案名稱:
                                                                                                            <a href="../<?php echo $row_RecFile['file_link1']; ?>"
                                                                                                                title='<?php echo $row_RecFile['file_title']; ?>'
                                                                                                                target="_blank"><?php echo $row_RecFile['file_name']; ?></a></span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="table_no_border">
                                                                                                        <span
                                                                                                            class="table_data">&nbsp;檔案</span><span
                                                                                                            class="table_data">說明:</span><span
                                                                                                            class="table_data"><?php echo $row_RecFile['file_title']; ?></span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="table_no_border"><a
                                                                                                            href="file_edit.php?file_id=<?php echo $row_RecFile['file_id']; ?>"
                                                                                                            class="fancyboxEdit"
                                                                                                            title='修改檔案'><img
                                                                                                                src="image/media_edit.gif"
                                                                                                                width="16"
                                                                                                                height="16"
                                                                                                                title="修改檔案" /></a><a
                                                                                                            href="file_del.php?file_id=<?php echo $row_RecFile['file_id']; ?>"
                                                                                                            class="fancyboxEdit"
                                                                                                            title='刪除檔案'><img
                                                                                                                src="image/media_delete.gif"
                                                                                                                width="16"
                                                                                                                height="16"
                                                                                                                title="刪除檔案" /></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                        <?php $RecFile_endRow++;
                                                                                        if ($RecFile_endRow >= $RecFile_ourteas) {
                                                                                            ?>
                                                                                        </tr>
                                                                                        <?php
                                                                                        $RecFile_endRow = 0;
                                                                                        }
                                                                                    } while ($row_RecFile = $RecFile->fetch());

                                                                                    if ($RecFile_endRow != 0) {
                                                                                        while ($RecFile_endRow < $RecFile_ourteas) {
                                                                                            echo ("<td>&nbsp;</td>");
                                                                                            $RecFile_endRow++;
                                                                                        }
                                                                                        echo ("</tr>");
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
                                                    <?php } // Show if recordset not empty 
                                                            ?>
                                                    <tr>
                                                        <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                            <p>上傳檔案</p>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellpadding="2" cellspacing="2"
                                                                bordercolor="#CCCCCC" class="data" id="pTable2">
                                                                <tr>
                                                                    <td><span class="table_data">選擇檔案：</span>
                                                                        <input name="upfile[]" type="file"
                                                                            class="table_data" id="upfile1" />
                                                                        <br />
                                                                        <span class="table_data">檔案說明：</span>
                                                                        <input name="upfile_title[]" type="text"
                                                                            class="table_data" id="upfile_title1" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table border="0" cellspacing="5" cellpadding="2">
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="2" cellpadding="2">
                                                                            <tr>
                                                                                <td><a href="javascript:addField2()"><img
                                                                                            src="image/add.png" width="16"
                                                                                            height="16" border="0" /></a>
                                                                                </td>
                                                                                <td><a href="javascript:addField2()"
                                                                                        class="table_data">新增檔案</a></td>
                                                                                <td class="red_letter">&nbsp;</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td bgcolor="#e5ecf6" class="table_col_title"><span
                                                                class="red_letter">*上傳之檔案請勿超過2M。</span></td>
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
                                            <input name="submitBtn" type="submit" class="btnType" id="submitBtn"
                                                value="送出" />
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="MM_update" value="form1" />
                                <input name="d_id" type="hidden" id="d_id"
                                    value="<?php echo $row_Recourtea['d_id']; ?>" />
                                <input name="d_sort" type="hidden" id="d_sort"
                                    value="<?php echo $row_Recourtea['d_sort']; ?>" />
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

<link rel="stylesheet" type="text/css" href="jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css"
    media="screen" />
<script type="text/javascript" src="jquery/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js"></script>
<script src="jquery/chosen_v1.8.5/chosen.jquery.js"></script>
<link rel="stylesheet" href="jquery/chosen_v1.8.5/chosen.css">

<script type="text/javascript">
    $(".chosen-select").chosen({
        disable_search_threshold: 6,
        no_results_text: "找不到資料。 目前輸入的是:",
        placeholder_text_single: "尚未新增分類",
        width: "auto"
    });

    function updateData() {
        var d_id = $('#d_id').val();
        $.ajax({
            type: "POST",
            url: "data_save.php",
            data: $('#form1').serializeArray(),
            success: function (data) {
                //nothing
                //alert(data);
            }
        });
    }

    $(document).ready(function () {

        if ($("#draggable")[0] != undefined) {
            var sortable = Sortable.create($("#draggable")[0], {
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
                        success: function (res) { }
                    });

                }
            });
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
            beforeShow: function () {
                //updateData();
            }
        });

        var fancyApp = $("a.fancyboxUpload").fancybox({
            type: 'iframe',
            openEffect: 'fade',
            closeEffect: 'fade',
            autoSize: false,
            width: 1000,
            height: 600,
            closeBtn: true,
            helpers: {
                overlay: {
                    closeClick: true,
                    css: {
                        'background': 'rgba(0, 0, 0, 0.7)'
                    }
                }
            },
            beforeShow: function () {
                //updateData();
            },
            onClosed: function () {
                window.location.reload();
            }
        });
    });

    <?php
    if (isset($_SESSION["change_image"]) && ($_SESSION["change_image"] == 1)) {
        $_SESSION["change_image"] = 0;
        echo "window.location.reload();";
    }
    ?>

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
        if (myField.value) {
            var aTr = pTable.insertRow(lastRow);
            var newRow = lastRow + 1;
            var newImg = 'img' + (newRow);
            var aTd1 = aTr.insertCell(0);
            aTd1.innerHTML = '<span class="table_data">選擇圖片： </span><input name="image[]" type="file" class="table_data" id="image' + newRow + '"><br><span class="table_data">圖片說明： </span><input name="image_title[]" type="text" class="table_data" id="image_title' + newRow + '">';
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

    $updateSQL = "UPDATE data_set SET d_title=:d_title, d_title_en=:d_title_en, d_class2=:d_class2, d_data1=:d_data1, d_data2=:d_data2, d_data3=:d_data3, d_date=:d_date, d_active=:d_active, d_active_en=:d_active_en WHERE d_id=:d_id";

    $stat = $conn->prepare($updateSQL);
    $stat->bindParam(':d_title', $_POST['d_title'], PDO::PARAM_STR);
    $stat->bindParam(':d_title_en', $_POST['d_title_en'], PDO::PARAM_STR);
    $stat->bindParam(':d_class2', $_POST['d_class2'], PDO::PARAM_STR);
    $stat->bindParam(':d_data1', $_POST['d_data1'], PDO::PARAM_STR);
    $stat->bindParam(':d_data2', $_POST['d_data2'], PDO::PARAM_STR);
    $stat->bindParam(':d_data3', $_POST['d_data3'], PDO::PARAM_STR);
    $stat->bindParam(':d_date', $_POST['d_date'], PDO::PARAM_STR);
    $stat->bindParam(':d_active', $_POST['d_active'], PDO::PARAM_INT);
    $stat->bindParam(':d_active_en', $_POST['d_active_en'], PDO::PARAM_INT);
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
    $image_result = image_process($conn, $_FILES['imageCover'], $_REQUEST['imageCover_title'], $menu_is, "add", $imagesSize['ourteaCover']['IW'], $imagesSize['ourteaCover']['IH']);

    for ($j = 1; $j < count($image_result); $j++) {
        $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";

        $stat = $conn->prepare($insertSQL);
        $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
        $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
        $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
        $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
        $stat->bindParam(':file_type', $type = 'ourteaCover', PDO::PARAM_STR);
        $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_INT);
        $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
        $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
        $stat->execute();

        $_SESSION["change_image"] = 1;
    }
    //----------插入圖片資料到資料庫end----------

    //----------插入檔案資料到資料庫begin(須放入插入主資料後)----------
    if ($ifFile) {
        $file_result = file_process($conn, "ourtea", "add");

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

    $_SESSION['original_selected'] = $_SESSION['selected_ourteaC'];

    $updateGoTo = "ourtea_list.php?selected1=" . $_POST['d_class2'] . "&changeSort=1&change_num=" . $_POST['d_sort'] . "&now_d_id=" . $_POST['d_id'] . "&totalRows=" . $_SESSION['totalRows'] . "&pageNum=" . $_SESSION["ToPage"];

    if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'] . "&pageNum=" . $_SESSION["ToPage"];
    }

    if ($image_result[0][0] == 1) {
        echo "<script type=\"text/javascript\">call_alert('" . $updateGoTo . "');</script>";
    } else {
        //echo $updateGoTo;
        header(sprintf("Location: %s", $updateGoTo));
    }
}
?>