<?php
require('inc-dbconnection.php');

$queue_number   = $_REQUEST['queue_number'];
$booking_date	= $_REQUEST['booking_date'];
$treatment        = $_REQUEST['treatment'];
$booking_time	  = $_REQUEST['booking_time'];
$staff_id         = $_REQUEST['staff_id'];
$customer_id	   = $_REQUEST['customer_id'];

$sql = "
	INSERT INTO treatment
	VALUES ('$queue_number','$booking_date','$treatment','$booking_time','$staff_id', '$customer_id');
	";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	header('Location:4-appointments.php');
} else {
	echo "Error : Input";
}

mysqli_close($conn); 
?>