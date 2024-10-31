<?php require_once('../Connections/connect2data.php'); ?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$colname_RecData = "-1";
if (isset($_GET['d_id'])) {
  $colname_RecData = $_GET['d_id'];
}

$query_RecData = "SELECT * FROM data_set WHERE d_id = :d_id";
$RecData = $conn->prepare($query_RecData);
$RecData->bindParam(':d_id', $colname_RecData, PDO::PARAM_INT);
$RecData->execute();
$row_RecData = $RecData->fetch();
$totalRows_RecData = $RecData->rowCount();

$menu_is = "oversea";

//依照國家做篩選
$query_RecstoreC = "SELECT * FROM class_set WHERE c_parent = 'storeC' AND c_active='1' AND c_level=1 ORDER BY c_sort ASC, c_id DESC";
$RecstoreC = $conn->query($query_RecstoreC);
$row_RecstoreC = $RecstoreC->fetch();
$totalRowsC = $RecstoreC->rowCount();

$G_selected1 = '';
if (isset($_GET['selected1'])) {
  $_SESSION['selected_storeC'] = $G_selected1 = $_GET['selected1'];
} else {
  $G_selected1 = $_SESSION['selected_storeC'] = $row_RecstoreC['c_title'];
}

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
                  <td width="30%" class="list_title">查看聯絡我們</td>
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
                    <td class="table_outline">
                      <table border="0" align="center" cellpadding="5" cellspacing="1">
                        <tr>
                          <td width="100%" align="left" class="table_data">客戶資訊：</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="3" cellpadding="5" id="forcolor">
                        <tr>
                          <td width="23%" align="center" class="table_title">姓</td>
                          <td width="78%" class="table_data"><?php echo (isset($row_RecData['d_title'])) ? $row_RecData['d_title'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td width="23%" align="center" class="table_title">名</td>
                          <td width="78%" class="table_data"><?php echo (isset($row_RecData['d_data1'])) ? $row_RecData['d_data1'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">电子信箱</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data2'])) ? $row_RecData['d_data2'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">现居国家</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data3'])) ? $row_RecData['d_data3'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">您准备在该项经营上投入多少钱？</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data4'])) ? $row_RecData['d_data4'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">您代表的公司名称</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data5'])) ? $row_RecData['d_data5'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">公司地址</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data6'])) ? $row_RecData['d_data6'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">公司設立日期</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data7'])) ? $row_RecData['d_data7'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">您的企業網站</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data8'])) ? $row_RecData['d_data8'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">公司業務類型</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data9'])) ? $row_RecData['d_data9'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">您於您代表的公司擔任的職位</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data10'])) ? $row_RecData['d_data10'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">為什麼選擇KOI?</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data11'])) ? $row_RecData['d_data11'] : '無'; ?>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">是否有餐飲相關經驗？</td>
                          <td class="table_data">
                            <?php echo (isset($row_RecData['d_data12'])) ? $row_RecData['d_data12'] : ''; ?><br>
                            <?php echo (isset($row_RecData['d_data13'])) ? $row_RecData['d_data13'] : ''; ?>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">是否有連鎖管理經驗？</td>
                          <td class="table_data">
                            <?php echo (isset($row_RecData['d_data14'])) ? $row_RecData['d_data14'] : ''; ?><br>
                            <?php echo (isset($row_RecData['d_data15'])) ? $row_RecData['d_data15'] : ''; ?>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">想經營之城市／區域／國家？</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data16'])) ? $row_RecData['d_data16'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">希望什麼形式與KOI合作來經營此城市／區域／國家？</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data17'])) ? $row_RecData['d_data17'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">是否有其它合夥人</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data18'])) ? $row_RecData['d_data18'] : ''; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">將來是否親自參與管理運營？</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data19'])) ? $row_RecData['d_data19'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">其它您希望與KOI分享的訊息</td>
                          <td class="table_data"><?php echo (isset($row_RecData['d_data20'])) ? $row_RecData['d_data20'] : '無'; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">諮詢時間</td>
                          <td class="table_data"><?php echo $row_RecData['d_date']; ?></td>
                        </tr>
                        <tr>
                          <td align="center" class="table_title">目前處理狀況</td>
                          <td class="table_data">
                            <label>
                              <select name="d_authorize" id="d_authorize">
                                <option value="1" <?php if (!(strcmp(1, $row_RecData['d_authorize']))) {
                                                    echo "selected=\"selected\"";
                                                  } ?>>未檢視</option>
                                <option value="2" <?php if (!(strcmp(2, $row_RecData['d_authorize']))) {
                                                    echo "selected=\"selected\"";
                                                  } ?>>審查中</option>
                                <option value="3" <?php if (!(strcmp(3, $row_RecData['d_authorize']))) {
                                                    echo "selected=\"selected\"";
                                                  } ?>>已檢視</option>
                              </select>
                            </label>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center">
                      <input name="gobackBtn" type="button" class="btnType" id="gobackBtn" value="回上一頁" onclick="history.back()" />
                      <input name="submitBtn" type="submit" class="btnType" id="submitBtn" value="送出" />
                    </td>
                  </tr>
                </table>
                <input name="d_id" type="hidden" id="d_id" value="<?php echo $row_RecData['d_id']; ?>" />
                <input type="hidden" name="MM_update" value="form1" />
                <input name="MM_updateType" type="hidden" id="MM_updateType" value="" />

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

<script>
  $("#forcolor tr").each(function(i, el) {
    if (i % 2 == 0) {
      $("td", el).eq(1).attr("bgcolor", "#E4E4E4");
    }
  })
</script>

<?php
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {

  $updateSQL = "UPDATE data_set SET d_authorize=:d_authorize WHERE d_id=:d_id";

  $stat = $conn->prepare($updateSQL);

  $stat->bindParam(':d_authorize', $_POST['d_authorize'], PDO::PARAM_STR);
  $stat->bindParam(':d_id', $_POST['d_id'], PDO::PARAM_INT);
  $stat->execute();


  $_SESSION['original_selected'] = $_SESSION['selected_ourteaC'];

  $updateGoTo = "oversea_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_SESSION["ToPage"] . "&totalRows=" . $_SESSION['totalRows'];

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