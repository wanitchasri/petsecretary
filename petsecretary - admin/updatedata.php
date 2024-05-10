
<?php
require('inc-dbconnection.php');

$treatment_name   = $_REQUEST['treatment_name'];
$basic_info		  = $_REQUEST['basic_info'];
$responsible_vet  = $_REQUEST['responsible_vet'];
$medical_fee	  = $_REQUEST['medical_fee'];
$duration	      = $_REQUEST['duration'];

$sql = "
	UPDATE treatment
	treatment_name = '" . $treatment_name . "',  
	basic_info = '" . $basic_info. "', 
	responsible_vet = '" . $responsible_vet  . "', 
	medical_fee = " . $medical_fee . ", 
	duration = " . $duration . ", ";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record " . $update_ID . " was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn);
echo "<br><br>";
echo "--- END ---";
?>