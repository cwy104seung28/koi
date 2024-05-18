<?php
require_once('../Connections/connect2data.php');

if (isset($_REQUEST['active'])) {

	$act = !$_REQUEST['active'];

	$sql= "UPDATE class_set SET c_active_en=:c_active_en WHERE c_id=:c_id";

	$sth = $conn->prepare($sql);
	$sth->bindParam(':c_active_en', $act, PDO::PARAM_INT);
	$sth->bindParam(':c_id', $_REQUEST['c_id'], PDO::PARAM_STR);
	$sth->execute();

	echo $act;
}
?>