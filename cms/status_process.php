<?php 
require_once('../Connections/connect2data.php');

if (!isset($_SESSION)) {
	session_start();
}
if (isset($_REQUEST['act']))
{
	$act = $_REQUEST['act'];
	
	$sql= "UPDATE data_set SET d_authorize='".$act."' WHERE d_id='".$_REQUEST['id']."'";
	
	mysql_select_db($database_connect2data, $connect2data);
	mysql_query($sql) or die("無法送出" . mysql_error( ));
	//header("Location:".$_SESSION['nowPage']."?pageNum=".$_SESSION["ToPage"]."#n".$_REQUEST['d_id']);
	echo $sql;
		
}
?>