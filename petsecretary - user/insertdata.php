<?php
require('dbconnection.php');

$treatment_name   = $_REQUEST['treatment_name'];
$basic_info		  = $_REQUEST['basic_info'];
$responsible_vet  = $_REQUEST['responsible_vet'];
$medical_fee	  = $_REQUEST['medical_fee'];
$duration	      = $_REQUEST['duration'];

$sql = "
	INSERT INTO treatment
	VALUES ('$treatment_name','$basic_info','$responsible_vet','$medical_fee','$duration');
	";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	header(3-services.php);
} else {
	echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
?>