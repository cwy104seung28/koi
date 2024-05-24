<?php require_once('../Connections/connect2data.php'); ?>
<?php require_once('photo_process.php'); ?>
<?php require_once('file_process.php'); ?>
<?php require_once('imagesSize.php'); ?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$colname_Recrecruit = "-1";
if (isset($_GET['d_id'])) {
    $colname_Recrecruit = $_GET['d_id'];
}

$query_Recrecruit = "SELECT * FROM data_set WHERE d_id = :d_id";
$Recrecruit = $conn->prepare($query_Recrecruit);
$Recrecruit->bindParam(':d_id', $colname_Recrecruit, PDO::PARAM_INT);
$Recrecruit->execute();
$row_Recrecruit = $Recrecruit->fetch();
$totalRows = $Recrecruit->rowCount();

$query_RecImage = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'image' ORDER BY file_sort ASC";
$RecImage = $conn->prepare($query_RecImage);
$RecImage->bindParam(':file_d_id', $colname_Recrecruit, PDO::PARAM_INT);
$RecImage->execute();
$row_RecImage = $RecImage->fetch();
$totalRows_RecImage = $RecImage->rowCount();

$query_RecCover = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'recruitCover'";
$RecCover = $conn->prepare($query_RecCover);
$RecCover->bindParam(':file_d_id', $colname_Recrecruit, PDO::PARAM_INT);
$RecCover->execute();
$row_RecCover = $RecCover->fetch();
$totalRows_RecCover = $RecCover->rowCount();

$query_RecFile = "SELECT * FROM file_set WHERE file_d_id = :file_d_id AND file_type = 'file'";
$RecFile = $conn->prepare($query_RecFile);
$RecFile->bindParam(':file_d_id', $colname_Recrecruit, PDO::PARAM_INT);
$RecFile->execute();
$row_RecFile = $RecFile->fetch();
$totalRows_RecFile = $RecFile->rowCount();

$menu_is = "recruit";

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
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">標題</td>
                                                    <td width="532">
                                                        <input name="d_id" type="hidden" id="d_id" value="<?php echo $row_Recrecruit['d_id']; ?>" />
                                                        <input name="d_title" type="text" class="table_data" id="d_title" value="<?php echo $row_Recrecruit['d_title']; ?>" size="80">
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <!-- 中文網頁 -->
                                                <!-- <tr>
                                                    <td width="200"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                       
                                                    </td>
                                                    <td width="250">&nbsp;</td>
                                                </tr> -->
                                                <tr>
                                                    <td width="200" bgcolor="#e5ecf6"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        中文網頁
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" bgcolor="#e5ecf6"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        美加区基本薪资(USD)
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单店管理</td>
                                                    <td width="532">
                                                        <input name="d_data1" id="d_data1" value="<?php echo $row_Recrecruit['d_data1']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多店管理</td>
                                                    <td width="532">
                                                        <input name="d_data2" id="d_data2" value="<?php echo $row_Recrecruit['d_data2']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data3" id="d_data3" value="<?php echo $row_Recrecruit['d_data3']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data4" id="d_data4" value="<?php echo $row_Recrecruit['d_data4']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        亚太区基本薪资(USD)
                                                    </td>
                                                    <td width="250">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单店管理</td>
                                                    <td width="532">
                                                        <input name="d_data5" id="d_data5" value="<?php echo $row_Recrecruit['d_data5']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多店管理</td>
                                                    <td width="532">
                                                        <input name="d_data6" id="d_data6" value="<?php echo $row_Recrecruit['d_data6']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data7" id="d_data7" value="<?php echo $row_Recrecruit['d_data7']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data8" id="d_data8" value="<?php echo $row_Recrecruit['d_data8']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <!-- 英文網頁 -->
                                                <!-- <tr>
                                                    <td width="200"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                       
                                                    </td>
                                                    <td width="250">&nbsp;</td>
                                                </tr> -->
                                                <tr>
                                                    <td width="200" bgcolor="#e5ecf6"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        英文網頁
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" bgcolor="#e5ecf6"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        美加区基本薪资(USD)
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单店管理</td>
                                                    <td width="532">
                                                        <input name="d_data9" id="d_data9" value="<?php echo $row_Recrecruit['d_data9']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多店管理</td>
                                                    <td width="532">
                                                        <input name="d_data10" id="d_data10" value="<?php echo $row_Recrecruit['d_data10']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data11" id="d_data11" value="<?php echo $row_Recrecruit['d_data11']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data12" id="d_data12" value="<?php echo $row_Recrecruit['d_data12']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200"></td>
                                                    <td align="center" bgcolor="#e5ecf6" class="table_col_title" width="532">
                                                        亚太区基本薪资(USD)
                                                    </td>
                                                    <td width="250">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单店管理</td>
                                                    <td width="532">
                                                        <input name="d_data13" id="d_data13" value="<?php echo $row_Recrecruit['d_data13']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多店管理</td>
                                                    <td width="532">
                                                        <input name="d_data14" id="d_data14" value="<?php echo $row_Recrecruit['d_data13']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">单国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data15" id="d_data15" value="<?php echo $row_Recrecruit['d_data15']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">多国域管理</td>
                                                    <td width="532">
                                                        <input name="d_data16" id="d_data16" value="<?php echo $row_Recrecruit['d_data16']; ?>" size="80" />
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">日期</td>
                                                    <td width="532">
                                                        <input name="d_date" type="text" class="table_data" id="d_date" value="<?php echo (($row_Recrecruit['d_date'] == '') || (!(strcmp(" 0000-00-00 00:00:00 ", $row_Recrecruit['d_date'])))) ? date("Y-m-d H:i:s ") : $row_Recrecruit['d_date']; ?>" size="50">
                                                    </td>
                                                    <td width="250" bgcolor="#e5ecf6">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" align="center" bgcolor="#e5ecf6" class="table_col_title">在網頁顯示</td>
                                                    <td width="532">
                                                        <select name="d_active" class="table_data" id="d_active">
                                                            <option value="1" <?php if (!(strcmp(1, $row_Recrecruit['d_active']))) {
                                                                                    echo "selected";
                                                                                } ?>>顯示</option>
                                                            <option value="0" <?php if (!(strcmp(0, $row_Recrecruit['d_active']))) {
                                                                                    echo "selected";
                                                                                } ?>>不顯示</option>
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
<script type="text/javascript" src="jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js"></script>

<script type="text/javascript">
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

    $updateSQL = "UPDATE data_set SET d_title=:d_title, d_data1=:d_data1, d_data2=:d_data2, d_data3=:d_data3, d_data4=:d_data4, d_data5=:d_data5, d_data6=:d_data6, d_data7=:d_data7, d_data8=:d_data8, d_data9=:d_data9, d_data10=:d_data10, d_data11=:d_data11, d_data12=:d_data12, d_data13=:d_data13, d_data14=:d_data14, d_data15=:d_data15, d_data16=:d_data16, d_date=:d_date, d_active=:d_active WHERE d_id=:d_id";

    $stat = $conn->prepare($updateSQL);
    $stat->bindParam(':d_title', $_POST['d_title'], PDO::PARAM_STR);
    // $stat->bindParam(':d_title_en', $_POST['d_title_en'], PDO::PARAM_STR);
    // $stat->bindParam(':d_content', $_POST['d_content'], PDO::PARAM_STR);
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
    $stat->bindParam(':d_date', $_POST['d_date'], PDO::PARAM_STR);
    $stat->bindParam(':d_active', $_POST['d_active'], PDO::PARAM_INT);
    $stat->bindParam(':d_id', $_POST['d_id'], PDO::PARAM_INT);
    $stat->execute();

    //----------插入圖片資料到資料庫begin(須放入插入主資料後)----------

    // //一般附圖
    // $image_result = image_process($conn, $_FILES['image'], $_REQUEST['image_title'], $menu_is, "add", $imagesSize[$_SESSION['nowMenu']]['IW'], $imagesSize[$_SESSION['nowMenu']]['IH']);

    // for ($j = 1; $j < count($image_result); $j++) {
    //     $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";

    //     $stat = $conn->prepare($insertSQL);
    //     $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
    //     $stat->bindParam(':file_type', $type = 'image', PDO::PARAM_STR);
    //     $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_INT);
    //     $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
    //     $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
    //     $stat->execute();

    //     $_SESSION["change_image"] = 1;
    // }

    // // Cover
    // $image_result = image_process($conn, $_FILES['imageCover'], $_REQUEST['image_titleCover'], $menu_is, "add", $imagesSize['recruitCover']['IW'], $imagesSize['recruitCover']['IH']);

    // for ($j = 1; $j < count($image_result); $j++) {
    //     $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_link2, file_link3, file_type, file_d_id, file_title, file_show_type) VALUES (:file_name, :file_link1, :file_link2, :file_link3, :file_type, :file_d_id, :file_title, :file_show_type)";

    //     $stat = $conn->prepare($insertSQL);
    //     $stat->bindParam(':file_name', $image_result[$j][0], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link1', $image_result[$j][1], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link2', $image_result[$j][2], PDO::PARAM_STR);
    //     $stat->bindParam(':file_link3', $image_result[$j][3], PDO::PARAM_STR);
    //     $stat->bindParam(':file_type', $type = 'recruitCover', PDO::PARAM_STR);
    //     $stat->bindParam(':file_d_id', $_POST['d_id'], PDO::PARAM_INT);
    //     $stat->bindParam(':file_title', $image_result[$j][4], PDO::PARAM_STR);
    //     $stat->bindParam(':file_show_type', $image_result[$j][5], PDO::PARAM_INT);
    //     $stat->execute();

    //     $_SESSION["change_image"] = 1;
    // }
    //----------插入圖片資料到資料庫end----------

    //----------插入檔案資料到資料庫begin(須放入插入主資料後)----------
    if ($ifFile) {
        $file_result = file_process($conn, "recruit", "add");

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

    $updateGoTo = "recruit_list.php";
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