<?php
    include ('inc-dbconnection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    /*$petname = $_POST['petname'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];*/

    //if (!empty($username) || !empty($password) || !empty($email) || !empty($phone) || !empty($petname) || !empty($gender) || !empty($type) ||!empty($age) || !empty(birthdate) || !empty(breed) || !empty(weight)) {
    
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die('Connect Failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO Customer(customer_id, password, customer_name, address, email, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $empty, $password, $username, $address, $email, $phone);
        $stmt->execute();

       // $id = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name=$username AND email=$email AND phone_number=$phone");
        //$_SESSION["customer_id"] = $id;

        $stmt->close();
        $conn->close();

        header('Location: 9-account.php');

    }

?>