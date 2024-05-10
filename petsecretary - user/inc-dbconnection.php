<?php
    session_start();

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "petsecretary";
    
    //Create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //Check the connection
    if (!$conn) {
	    die("Connection : Failed" . mysqli_connect_error());
    }

?>