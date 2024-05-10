<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    /*$petname = $_POST['petname'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];*/

    if (!empty($username) || !empty($password) || !empty($email) || !empty($phone) || !empty($petname) || !empty($gender) || !empty($type) ||!empty($age) || !empty(birthdate) || !empty(breed) || !empty(weight)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "petSecretary";
        $display_errors = false;
    
    
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
        if (mysqli_connect_error()) {
            die('Connection Failed : ' .$conn->connect_error);
        } else {
            $SELECT = "SELECT email From Customer Where email = ? Limit 1";
            $INSERT = "INSERT Into Customer(DEFAULT, password, username, address, email, phone) values(?, ?, ?, ?, ?, ?)";
            $stmt->bind_param("isssss", NULL, $password, $username, $address, $email, $phone);
            $stmt->execute();
     
        //Prepare statement
        /*$stmt = $conn->prepare($SELECT);
        $stmt->bind_param("isssss", NULL, $password, $username, $address, $email, $phone);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $stmt->store_result();
        $stmt -> fetch();
        $rnum = $stmt->num_rows;
     
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isssss", NULL, $password, $username, $address, $email, $phone);
            $stmt->execute();
            echo "New record inserted sucessfully";
        } else {
            echo "Someone already register using this email";
        }*

        $stmt->close();
        $conn->close();
        
    }

    } else {
        echo "All field are required";
        die();
    }

    ?>

