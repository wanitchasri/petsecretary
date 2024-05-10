<?php
require('dbconnection.php');

$username    = $_POST['username'];
$email   = $_POST['email'];
$phone		  = $_POST['phone'];
$id = $_SESSION['id'];
$empty = '';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
        die('Connect Failed: '.$conn->connect_error);
    } else {
        $sql = "UPDATE Customer SET customer_name = $username WHERE customer_id = $id" ;
        $results = mysqli_query($conn, $sql);

  	if (mysqli_num_rows($results) == 1) {

  	    header('location: 9-account.php');
  	}
}

       // $id = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name=$username AND email=$email AND phone_number=$phone");
        //$_SESSION["customer_id"] = $id;

?>
