<?php require_once('../Connections/connect2data.php'); ?>

<?php

ini_set('display_errors', 'Off');
error_reporting(0);

$menu_is = "oversea";

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recoversea = 20;
$pageNum = 0;
if (isset($_GET['pageNum'])) {
  $pageNum = $_GET['pageNum'];
} else {
  $_GET['pageNum'] = 0;
}
$startRow_Recoversea = $pageNum * $maxRows_Recoversea;

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

$query_Recoversea = "SELECT * FROM data_set WHERE d_class1 = '$menu_is' AND d_data3='" . $G_selected1 . "'  ORDER BY d_date DESC";
$query_limit_Recoversea = sprintf("%s LIMIT %d, %d", $query_Recoversea, $startRow_Recoversea, $maxRows_Recoversea);
$Recoversea = $conn->query($query_limit_Recoversea);
$row_Recoversea = $Recoversea->fetch();

$S_original_selected = '';
if (isset($_SESSION['original_selected'])) {
  $S_original_selected = $_SESSION['original_selected'];
}
$all_Recoversea = $conn->query($query_Recoversea);
$totalRows = $all_Recoversea->rowCount();

$all_Recoversea = $conn->query($query_Recoversea);
$totalRows = $all_Recoversea->rowCount();
$totalPages_Recoversea = ceil($totalRows / $maxRows_Recoversea) - 1;
$TotalPage = $totalPages_Recoversea;

$queryString_Recoversea = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (
      stristr($param, "pageNum") == false &&
      stristr($param, "totalRows") == false
    ) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recoversea = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recoversea = sprintf("&totalRows=%d%s", $totalRows, $queryString_Recoversea);

// if (isset($_GET['totalRows'])) {
//   $totalRows = $_GET['totalRows'];
// } else {
//   $all_Recoversea = $conn->query($query_Recoversea);
//   $totalRows = $all_Recoversea->rowCount();
// }
// echo $totalRows;
// $totalPages = ceil($totalRows / $maxRows_Recoversea) - 1;
// $_SESSION['totalRows'] = $totalRows;
// $TotalPage = $totalPages;

// $queryString = "";
// if (!empty($_SERVER['QUERY_STRING'])) {
//   $params = explode("&", $_SERVER['QUERY_STRING']);
//   $newParams = array();
//   foreach ($params as $param) {
//     if (
//       stristr($param, "pageNum") == false &&
//       stristr($param, "totalRows") == false
//     ) {
//       array_push($newParams, $param);
//     }
//   }
//   if (count($newParams) != 0) {
//     $queryString = "&" . htmlentities(implode("&", $newParams));
//   }
// }
// $queryString = sprintf("&totalRows=%d%s", $totalRows, $queryString);

// ====================================================================

$R_pageNum = 0;
if (isset($_REQUEST["pageNum"])) {
  $R_pageNum = $_REQUEST["pageNum"];
}
if (!isset($R_pageNum)) {
  $_SESSION["ToPage"] = 0;
}
//若指定分頁數小於1則預設顯示第一頁
else if ($R_pageNum < 0) {
  $_SESSION["ToPage"] = 0;
}
//若指定指定的分頁超過總分頁數則顯示最後一頁
else if ($R_pageNum > $totalPages) {
  $_SESSION["ToPage"] = $TotalPage;
} else {
  $_SESSION["ToPage"] = $R_pageNum;
}

//如果指定的頁面大於資料所擁有的頁面,轉到最大的頁面
if ($R_pageNum > $totalPages && $R_pageNum != 0) {
  header("Location:oversea_list.php?pageNum=" . $totalPages);
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

  $query_Recoversea = "SELECT * FROM data_set WHERE d_class1 = '$menu_is' AND d_data3='" . $G_selected1 . "'  ORDER BY d_date DESC";

  $_SESSION['selected_storeC'] = $G_selected1;
  $Recoversea = $conn->query($query_Recoversea);
  $row_Recoversea = $Recoversea->fetch();

  do {
    if ($row_Recoversea['d_sort'] == 0) {
    } else if ($row_Recoversea['d_id'] == $_GET['now_d_id']) {
      // echo '<pre>'; print_r($sort_num); echo '</pre>';

    } else if ($sort_num == $_GET['change_num']) {
      // echo '<pre>'; print_r($sort_num); echo '</pre>';
      $sort_num++;

      $updateSQL = "UPDATE data_set SET d_sort=:d_sort WHERE d_id=:d_id";

      $stat = $conn->prepare($updateSQL);
      $stat->bindParam(':d_sort', $sort_num, PDO::PARAM_INT);
      $stat->bindParam(':d_id', $row_Recoversea['d_id'], PDO::PARAM_INT);
      $stat->execute();

      $sort_num++;
    } else {
      $updateSQL = "UPDATE data_set SET d_sort=:d_sort WHERE d_id=:d_id";

      $stat = $conn->prepare($updateSQL);
      $stat->bindParam(':d_sort', $sort_num, PDO::PARAM_INT);
      $stat->bindParam(':d_id', $row_Recoversea['d_id'], PDO::PARAM_INT);
      $stat->execute();

      // echo '<pre>'; print_r($sort_num); echo '</pre>';

      $sort_num++;
    }
  } while ($row_Recoversea = $Recoversea->fetch());

  $updateSQL = "UPDATE data_set SET d_sort=:d_sort WHERE d_id=:d_id";

  $stat = $conn->prepare($updateSQL);
  $stat->bindParam(':d_sort', $_GET['change_num'], PDO::PARAM_INT);
  $stat->bindParam(':d_id', $_GET['now_d_id'], PDO::PARAM_INT);
  $stat->execute();

  if ($G_changeSort == 1) {
    header("Location:oversea_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_GET['pageNum'] . "&totalRows=" . $_GET['totalRows']);
  } else if ($G_delchangeSort == 1) {
    header("Location:oversea_list.php?selected1=" . $G_selected1 . "&pageNum=" . $_GET['pageNum']);
  }
}

require_once('display_page.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php require_once('cmsTitle.php'); ?></title>
  <link rel="stylesheet" href="jquery/chosen_v1.8.5/chosen.css">

  <style>
    .chosen-container {
      position: relative;
      top: -3px;
    }
  </style>
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
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="200" class="list_title">聯絡我們列表</td>
                  <td width="874"><span class="table_data">分類：
                      <select name="select1" id="select1" class="chosen-select">
                        <?php do { ?>
                          <option value="<?php echo $row_RecstoreC['c_title'] ?>" <?php if (!(strcmp($row_RecstoreC['c_title'], $G_selected1))) {
                                                                                    echo "selected=\"selected\"";
                                                                                  } ?>><?php echo $row_RecstoreC['c_title'] ?><?php //echo $row_RecstoreC['c_id']
                                                                                                                              ?></option>
                        <?php
                        } while ($row_RecstoreC = $RecstoreC->fetch());
                        $rows = $RecstoreC->rowCount();
                        if ($rows > 0) {
                          $RecstoreC->execute();
                        }
                        ?>
                      </select>
                    </span><span class="no_data">
                      <?php if ($totalRows == 0) { // Show if recordset empty 
                      ?>
                        <strong>此分類沒有資料</strong>
                      <?php } // Show if recordset empty 
                      ?>
                    </span></td>
                  <td><span class="no_data">
                      <?php if ($totalRows == 0) { // Show if recordset empty 
                      ?>
                        <strong>抱歉!找不到任何資料~</strong>
                      <?php } // Show if recordset empty 
                      ?>
                    </span></td>
                </tr>
              </table>
              <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1" class="list_title_table">
                <tr>
                  <td width="739" align="right" class="page_display">
                    <!-------顯示頁選擇與分頁設定開始---------->
                    <?php displayPages($pageNum, $queryString, $totalPages, $totalRows, $currentPage); ?>
                    <!-------顯示頁選擇與分頁設定結束---------->
                  <td width="110" align="right" class="page_display">
                    <?php if ($totalRows > 0) { // Show if recordset not empty 
                    ?> 頁數:
                      <?php echo (($pageNum + 1) . "/" . ($totalPages + 1)); ?>
                    <?php } // Show if recordset not empty 
                    ?>
                  </td>
                  <td width="151" align="right" class="page_display">所有資料數: <?php echo $totalRows ?> </td>
                  <td width="24" align="right">&nbsp;</td>
                </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="image/spacer.gif" width="1" height="1" /></td>
                </tr>
              </table>
              <form action="oversea_process.php" method="post" name="form1" id="form1">
                <?php if ($totalRows > 0) { // Show if recordset not empty 
                ?>
                  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                    <tr>
                      <td width="150" align="center" class="table_title">日期</td>
                      <td width="150" align="center" class="table_title">姓名</td>
                      <td width="300" align="center" class="table_title">您代表的公司名称</td>
                      <td width="40" align="center" class="table_title">處理狀態</td>
                      <td width="40" align="center" class="table_title">編輯</td>
                      <td width="40" align="center" class="table_title">刪除</td>
                    </tr>
                    <?php
                    $i = 0;
                    do {
                      $i++;
                      $colname_RecImage = "-1";
                      if (isset($row_Recoversea['d_id'])) {
                        $colname_RecImage = $row_Recoversea['d_id'];
                      }
                      $query_RecImage = "SELECT * FROM file_set WHERE file_type='overseaCover' AND file_d_id = :file_d_id";
                      $RecImage = $conn->prepare($query_RecImage);
                      $RecImage->bindParam(':file_d_id', $colname_RecImage, PDO::PARAM_STR);
                      $RecImage->execute();
                      $row_RecImage = $RecImage->fetch();
                      $totalRows_RecImage = $RecImage->rowCount();
                    ?>
                      <tr <?php if ($i % 2 == 0) : ?>bgcolor='#E4E4E4' <?php endif ?>>
                        <td align="center" class="table_data">
                          <a href="oversea_edit.php?d_id=<?php echo $row_Recoversea['d_id']; ?>">
                            <?php echo $row_Recoversea['d_date']; ?>
                          </a>
                        </td>
                        <td align="center" class="table_data">
                          <a href="oversea_edit.php?d_id=<?php echo $row_Recoversea['d_id']; ?>">
                            <?php echo $row_Recoversea['d_title']; ?> <?php echo $row_Recoversea['d_data1']; ?>
                          </a>
                        </td>
                        <td align="center" class="table_data">
                          <a href="oversea_edit.php?d_id=<?php echo $row_Recoversea['d_id']; ?>">
                            <?php echo $row_Recoversea['d_data5']; ?>
                          </a>
                        </td>
                        <td align="center" class="table_data">
                          <!--<div id="status_<?php echo $row_Recoversea['d_id']; ?>" class="status" data-id="<?php echo $row_Recoversea['d_id']; ?>" data-act="<?php echo $row_Recoversea['d_authorize']; ?>"></div>-->
                          <!-- 
                          <label>
                            <select class="status" data-id="<?php echo $row_Recoversea['d_id']; ?>">
                              <option value="1" <?php if (!(strcmp(1, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>未檢視</option>
                              <option value="2" <?php if (!(strcmp(2, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>審查中</option>
                              <option value="3" <?php if (!(strcmp(3, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>已檢視</option>
                            </select>
                          </label> -->
                          <?php if (!(strcmp(1, $row_Recoversea['d_authorize']))) {
                            echo "未檢視";
                          } else if (!(strcmp(2, $row_Recoversea['d_authorize']))) {
                            echo "審查中";
                          }else{
                            echo "已檢視";
                          } ?>
                          <!-- <label>
                            <select class="status" data-id="<?php echo $row_Recoversea['d_id']; ?>">
                              <option value="1" <?php if (!(strcmp(1, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>未檢視</option>
                              <option value="2" <?php if (!(strcmp(2, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>審查中</option>
                              <option value="3" <?php if (!(strcmp(3, $row_Recoversea['d_authorize']))) {
                                                  echo "selected=\"selected\"";
                                                } ?>>已檢視</option>
                            </select>
                          </label> -->
                        </td>
                        <td align="center" class="table_data"><a href="oversea_edit.php?d_id=<?php echo $row_Recoversea['d_id']; ?>"><img src="image/pencil.png" width="16" height="16" /></a></td>
                        <td align="center" class="table_data"><a href="oversea_del.php?d_id=<?php echo $row_Recoversea['d_id']; ?>"><img src="image/cross.png" width="16" height="16" /></a></td>
                      </tr>
                    <?php } while ($row_Recoversea = $Recoversea->fetch()); ?>
                  </table>
                <?php } // Show if recordset not empty 
                ?>
              </form>
              <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1" class="list_title_table">
                <tr>
                  <td width="739" align="right" class="page_display">
                    <!-------顯示頁選擇與分頁設定開始---------->
                    <?php displayPages($pageNum, $queryString, $totalPages, $totalRows, $currentPage); ?>
                    <!-------顯示頁選擇與分頁設定結束---------->
                  <td width="110" align="right" class="page_display">
                    <?php if ($totalRows > 0) { // Show if recordset not empty 
                    ?> 頁數:
                      <?php echo (($pageNum + 1) . "/" . ($totalPages + 1)); ?>
                    <?php } // Show if recordset not empty 
                    ?>
                  </td>
                  <td width="151" align="right" class="page_display">所有資料數: <?php echo $totalRows ?> </td>
                  <td width="24" align="right">&nbsp;</td>
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

<script src="jquery/chosen_v1.8.5/chosen.jquery.js"></script>
<script type="text/javascript">
  $(".chosen-select").chosen({
    disable_search_threshold: 6,
    no_results_text: "找不到資料。 目前輸入的是:",
    placeholder_text_single: "尚未新增分類",
    width: "auto"
  });

  function changeSort(pageNum, totalRows, now_d_id, change_num) { //v1.0
    window.location.href = "oversea_list.php?selected1=" + selected1 + "&pageNum=" + pageNum + "&totalRows=" + totalRows + "&changeSort=1" + "&now_d_id=" + now_d_id + "&change_num=" + change_num;
  }
  $(document).ready(function() {
    $('#select1').change(function() {
      window.location.href = "oversea_list.php?changeSort=1&selected1=" + $(this).val();
    });
    $('.status').change(function() {
      var id = $(this).data("id");
      var act = $(this).val();
      $.post("status_process.php", {
          id: id,
          act: act
        })
        .done(function(data) {
          //alert( "Data Loaded: " + data );
        });
    });
  });
</script>