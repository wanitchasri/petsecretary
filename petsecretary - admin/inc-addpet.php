<?php
    include ('inc-dbconnection.php');

    $pet_name = $_POST['pet_name'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $birth_date = $_POST['birth_date'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $customer_id = $_SESSION['id'];
    $empty = '';


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
        $stmt = $conn->prepare("INSERT INTO Pet(pet_id, pet_name, gender, type, age, birth_date, breed, weight, customer_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssii", $empty, $pet_name, $gender, $type, $age, $birth_date, $breed, $weight, $customer_id);
        $stmt->execute();

       // $id = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name=$username AND email=$email AND phone_number=$phone");
        //$_SESSION["customer_id"] = $id;

        $stmt->close();
        $conn->close();

        header('Location: 7-pet_info.php');

    }

?>