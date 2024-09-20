<?php require_once('../Connections/connect2data.php'); ?>
<?php require_once('photo_process.php'); ?>
<?php require_once('file_process.php'); ?>
<?php require_once('imagesSize.php'); ?>
<?php

// ini_set('display_errors', '1');
// error_reporting(E_ALL);

if (!1) {
    header("Location: ourteaC_list.php");
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$colname_RecourteaC = "-1";
if (isset($_GET['c_id'])) {
    $colname_RecourteaC = $_GET['c_id'];
}

$query_RecourteaC = "SELECT * FROM class_set WHERE c_id = :c_id";

$RecourteaC = $conn->prepare($query_RecourteaC);
$RecourteaC->bindParam(':c_id', $colname_RecourteaC, PDO::PARAM_INT);
$RecourteaC->execute();
$row_RecourteaC = $RecourteaC->fetch();
$totalRows_RecourteaC = $RecourteaC->rowCount();

$query_RecIndexCover = "SELECT * FROM file_set WHERE file_c_id = :file_c_id AND file_type = 'ourteaIndexCover'";
$RecIndexCover = $conn->prepare($query_RecIndexCover);
$RecIndexCover->bindParam(':file_c_id', $colname_RecourteaC, PDO::PARAM_INT);
$RecIndexCover->execute();
$row_RecIndexCover = $RecIndexCover->fetch();
$totalRows_RecIndexCover = $RecIndexCover->rowCount();

$query_RecIconCover = "SELECT * FROM file_set WHERE file_c_id = :file_c_id AND file_type = 'ourteaIconCover'";
$RecIconCover = $conn->prepare($query_RecIconCover);
$RecIconCover->bindParam(':file_c_id', $colname_RecourteaC, PDO::PARAM_INT);
$RecIconCover->execute();
$row_RecIconCover = $RecIconCover->fetch();
$totalRows_RecIconCover = $RecIconCover->rowCount();

$query_RecFile = "SELECT * FROM file_set WHERE file_c_id = :file_c_id AND file_type = 'file'";
$RecFile = $conn->prepare($query_RecFile);
$RecFile->bindParam(':file_c_id', $colname_RecourteaC, PDO::PARAM_INT);
$RecFile->execute();
$row_RecFile = $RecFile->fetch();
$totalRows_RecFile = $RecFile->rowCount();

$menu_is = "ourtea";
$_SESSION['nowPage'] = $selfPage;
$_SESSION['nowMenu'] = $menu_is;
$ifFile = 1;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once('cmsTitle.php'); ?></title>

    <?php require_once('script.php'); ?>
    <?php require_once('head.php'); ?>
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
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">中文名稱</td>
                                                                            <td width="516">
                                                                                <input name="c_title" type="text" class="table_data" id="c_title" value="<?php echo $row_RecourteaC['c_title']; ?>" size="50" />
                                                                                <input name="c_id" type="hidden" id="c_id" value="<?php echo $row_RecourteaC['c_id']; ?>" />
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">英文名稱</td>
                                                                            <td width="516">
                                                                                <input name="c_title_en" type="text" class="table_data" id="c_title_en" value="<?php echo $row_RecourteaC['c_title_en']; ?>" size="50" />
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">是否會顯示在首頁(中文網站)</td>
                                                                            <td width="532">
                                                                                <select name="c_data1" id="c_data1" class="chosen-select">
                                                                                    <option value="no" <?php if ($row_RecourteaC['c_data1'] == 'no') {
                                                                                                            echo "selected";
                                                                                                        } ?>>否</option>
                                                                                    <option value="yes" <?php if ($row_RecourteaC['c_data1'] == 'yes') {
                                                                                                            echo "selected";
                                                                                                        } ?>>是</option>
                                                                                </select>
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">是否會顯示在首頁(英文網站)</td>
                                                                            <td width="532">
                                                                                <select name="c_data2" id="c_data2" class="chosen-select">
                                                                                    <option value="no" <?php if ($row_RecourteaC['c_data2'] == 'no') {
                                                                                                            echo "selected";
                                                                                                        } ?>>否</option>
                                                                                    <option value="yes" <?php if ($row_RecourteaC['c_data2'] == 'yes') {
                                                                                                            echo "selected";
                                                                                                        } ?>>是</option>
                                                                                </select>
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">在中文網頁顯示狀態</td>
                                                                            <td width="516">
                                                                                <select name="c_active" class="table_data" id="c_active">
                                                                                    <option value="0" <?php if (!(strcmp(0, $row_RecourteaC['c_active']))) {
                                                                                                            echo "selected";
                                                                                                        } ?>>不顯示</option>
                                                                                    <option value="1" <?php if (!(strcmp(1, $row_RecourteaC['c_active']))) {
                                                                                                            echo "selected";
                                                                                                        } ?>>顯示</option>
                                                                                </select>
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">在英文網頁顯示狀態</td>
                                                                            <td width="516">
                                                                                <select name="c_active_en" class="table_data" id="c_active_en">
                                                                                    <option value="0" <?php if (!(strcmp(0, $row_RecourteaC['c_active_en']))) {
                                                                                                            echo "selected";
                                                                                                        } ?>>不顯示</option>
                                                                                    <option value="1" <?php if (!(strcmp(1, $row_RecourteaC['c_active_en']))) {
                                                                                                            echo "selected";
                                                                                                        } ?>>顯示</option>
                                                                                </select>
                                                                            </td>
                                                                            <td width="250" bgcolor="#e5ecf6">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <?php if ($totalRows_RecIndexCover > 0) { // Show if recordset not empty 
                                                                        ?>
                                                                            <tr>
                                                                                <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                                                    目前首頁飲料圖片<a name="imageEdit" id="imageEdit"></a></td>
                                                                                <td>
                                                                                    <?php do { ?>
                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                            <tr>
                                                                                                <td width="100" rowspan="2" align="center"><a href="../<?php echo $row_RecIndexCover['file_link1'] . '?' . (mt_rand(1, 100000) / 100000); ?>" class="fancyboxImg" rel="group" title="<?php echo $row_RecIndexCover['file_title']; ?>"><img src="../<?php echo $row_RecIndexCover['file_link2'] . '?' . (mt_rand(1, 100000) / 100000); ?>" alt="" class="image_frame" /></a>
                                                                                                </td>
                                                                                                <td align="left" class="table_data">
                                                                                                    &nbsp;圖片說明：
                                                                                                    <?php echo $row_RecIndexCover['file_title']; ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="left" class="table_data">&nbsp;
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="center"><a href="image_edit.php?file_id=<?php echo $row_RecIndexCover['file_id'] . '&type=ourteaIndexCover'; ?>" class="fancyboxEdit" title="修改圖片"><img src="image/media_edit.gif" width="16" height="16" title="修改圖片" /></a><a href="image_del.php?file_id=<?php echo $row_RecIndexCover['file_id'] . '&type=ourteaIndexCover'; ?>" class="fancyboxEdit" title="刪除圖片"><img src="image/media_delete.gif" width="16" height="16" title="刪除圖片" /></a>
                                                                                                </td>
                                                                                                <td align="center">&nbsp;</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    <?php } while ($row_RecIndexCover = $RecIndexCover->fetch()); ?>
                                                                                </td>
                                                                                <td bgcolor="#e5ecf6" class="table_col_title">
                                                                                    <p class="red_letter">*
                                                                                        <?php echo $imagesSize['ourteaIndexCover']['note']; ?>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } // Show if recordset not empty 
                                                                        ?>
                                                                        <?php if ($totalRows_RecIndexCover == 0) { // Show if recordset not empty 
                                                                        ?>
                                                                            <tr>
                                                                                <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                                                    <p>上傳首頁飲料圖片</p>
                                                                                </td>
                                                                                <td>
                                                                                    <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC" class="data">
                                                                                        <tr>
                                                                                            <td> <span class="table_data">選擇圖片：</span>
                                                                                                <input name="imageIndexCover[]" type="file" class="table_data" id="imageIndexCover1" />
                                                                                                <br>
                                                                                                <span class="table_data">圖片說明：</span>
                                                                                                <input name="imageIndexCover_title[]" type="text" class="table_data" id="imageIndexCover_title1">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td bgcolor="#e5ecf6" class="table_col_title">
                                                                                    <p class="red_letter">*
                                                                                        <?php echo $imagesSize['ourteaIndexCover']['note']; ?>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } // Show if recordset not empty 
                                                                        ?>
                                                                        <?php if ($ifFile) { ?>
                                                                            <?php if ($totalRows_RecFile > 0) { // Show if recordset not empty 
                                                                            ?>
                                                                                <tr>
                                                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">目前icon的SVG檔</td>
                                                                                    <td>
                                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table>
                                                                                                        <tr>
                                                                                                            <?php
                                                                                                            $RecFile_endRow = 0;
                                                                                                            $RecFile_icons = 1;
                                                                                                            $RecFile_hloopRow1 = 0;
                                                                                                            do {
                                                                                                                if ($RecFile_endRow == 0  && $RecFile_hloopRow1++ != 0) echo "<tr>";
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
                                                                                                                            <td align="left" class="table_no_border"><a href="file_edit.php?file_id=<?php echo $row_RecFile['file_id']; ?>" class="fancyboxEdit" title='修改檔案'><img src="image/media_edit.gif" width="16" height="16" title="修改檔案" /></a><a href="file_del.php?file_id=<?php echo $row_RecFile['file_id']; ?>" class="fancyboxEdit" title='刪除檔案'><img src="image/media_delete.gif" width="16" height="16" title="刪除檔案" /></a></td>
                                                                                                                        </tr>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                                <?php $RecFile_endRow++;
                                                                                                                if ($RecFile_endRow >= $RecFile_icons) {
                                                                                                                ?>
                                                                                                        </tr>
                                                                                                <?php
                                                                                                                    $RecFile_endRow = 0;
                                                                                                                }
                                                                                                            } while ($row_RecFile = $RecFile->fetch());

                                                                                                            if ($RecFile_endRow != 0) {
                                                                                                                while ($RecFile_endRow < $RecFile_icons) {
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

                                                                            <?php if ($totalRows_RecFile == 0) { ?>
                                                                                <tr>
                                                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title">
                                                                                        <p>上傳icon的SVG檔</p>
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
                                                                                    </td>
                                                                                    <td bgcolor="#e5ecf6" class="table_col_title"><span class="red_letter">*上傳之檔案請勿超過2M。icon的大小請上傳50px*50px以內</span></td>
                                                                                </tr>
                                                                            <?php } // Show if recordset not empty 
                                                                            ?>
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
<link rel="stylesheet" type="text/css" href="jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
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
        var c_id = $('#c_id').val();
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

    $(document).ready(function() {

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
                        success: function(res) {}
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
            beforeShow: function() {
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
            beforeShow: function() {
                //updateData();
            },
            onClosed: function() {
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

    $updateSQL = "UPDATE class_set SET c_title=:c_title, c_title_en=:c_title_en, c_data1=:c_data1, c_data2=:c_data2, c_class=:c_class, c_link=:c_link, c_active=:c_active, c_active_en=:c_active_en WHERE c_id=:c_id";

    $sth = $conn->prepare($updateSQL);
    $sth->bindParam(':c_title', $_POST['c_title'], PDO::PARAM_STR);
    $sth->bindParam(':c_title_en', $_POST['c_title_en'], PDO::PARAM_STR);
    $sth->bindParam(':c_data1', $_POST['c_data1'], PDO::PARAM_STR);
    $sth->bindParam(':c_data2', $_POST['c_data2'], PDO::PARAM_STR);
    $sth->bindParam(':c_class', $_POST['c_class'], PDO::PARAM_STR);
    // $sth->bindParam(':c_content', $_POST['c_content'], PDO::PARAM_STR);
    $sth->bindParam(':c_link', $_POST['c_link'], PDO::PARAM_STR);
    $sth->bindParam(':c_active', $_POST['c_active'], PDO::PARAM_INT);
    $sth->bindParam(':c_active_en', $_POST['c_active_en'], PDO::PARAM_INT);
    $sth->bindParam(':c_id', $_POST['c_id'], PDO::PARAM_INT);
    $sth->execute();

    //indexCover
    $image_result = image_process($conn, $_FILES['imageIndexCover'], $_REQUEST['imageIndexCover_title'], $menu_is, "add", $imagesSize['ourteaIndexCover']['IW'], $imagesSize['ourteaIndexCover']['IH']);

    for ($j = 1; $j < count($image_result); $j++) {
        $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_c_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_c_id, :file_title, :file_show_type)";

        $stat = $conn->prepare($insertSQL);
        $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
        $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
        $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
        $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
        $stat->bindParam(':file_type', $type = 'ourteaIndexCover', PDO::PARAM_STR);
        $stat->bindParam(':file_c_id', $_POST['c_id'], PDO::PARAM_INT);
        $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
        $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
        $stat->execute();

        $_SESSION["change_image"] = 1;
    }

    //iconCover
    $image_result = image_process($conn, $_FILES['imageIconCover'], $_REQUEST['imageIconCover_title'], $menu_is, "add", $imagesSize['ourteaIconCover']['IW'], $imagesSize['ourteaIconCover']['IH']);

    for ($j = 1; $j < count($image_result); $j++) {
        $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_c_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_c_id, :file_title, :file_show_type)";

        $stat = $conn->prepare($insertSQL);
        $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
        $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
        $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
        $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
        $stat->bindParam(':file_type', $type = 'ourteaIconCover', PDO::PARAM_STR);
        $stat->bindParam(':file_c_id', $_POST['c_id'], PDO::PARAM_INT);
        $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
        $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
        $stat->execute();

        $_SESSION["change_image"] = 1;
    }

    if ($ifFile) {
        $file_result = file_process($conn, "ourtea", "add");

        for ($j = 0; $j < count($file_result); $j++) {
            $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_type, file_c_id, file_title) VALUES (:file_name, :file_link1, :file_type, :file_c_id, :file_title)";

            $stat = $conn->prepare($insertSQL);
            $stat->bindParam(':file_name', $file_result[$j][0], PDO::PARAM_STR);
            $stat->bindParam(':file_link1', $file_result[$j][1], PDO::PARAM_STR);
            $stat->bindParam(':file_type', $type = 'file', PDO::PARAM_STR);
            $stat->bindParam(':file_c_id', $_POST['c_id'], PDO::PARAM_STR);
            $stat->bindParam(':file_title', $file_result[$j][2], PDO::PARAM_STR);
            $stat->execute();
        }
    }

    $updateGoTo = "ourteaC_list.php";
    if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'] . "&pageNum=" . $_SESSION["ToPage"];
    }
    header(sprintf("Location: %s", $updateGoTo));
}
?>