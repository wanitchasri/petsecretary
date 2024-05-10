<?php
    include ('inc-dbconnection.php');

    $treatment = $_POST['treatment'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $_SESSION['treatment'] = $treatment;
    /*$petname = $_POST['petname'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];*/

    //if (!empty($username) || !empty($password) || !empty($email) || !empty($phone) || !empty($petname) || !empty($gender) || !empty($type) ||!empty($age) || !empty(birthdate) || !empty(breed) || !empty(weight)) {
    
    function getStaffName() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['treatment'];

        $sql = mysqli_query($conn, "SELECT responsible_vet FROM Treatment WHERE treatment_name = $treatment" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['responsible_vet'];
        }
    }

    function getStaffId($name) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT staff_id FROM Staff WHERE treatment_name = $treatment" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['staff_id'];
        }
    }

    //create connection
    $conn = mysqli_connect("localhost", "root", "", "petsecretary");
    if ($conn->connect_error) {
        die('Connect Failed: '.$conn->connect_error);
    } else {
        $name = getStaffName();
        $staff_id = getStaffId($name);

        $stmt = $conn->prepare("INSERT INTO Appointment(queue_number, booking_date, treatment, booking_time, staff_id, customer_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssii", "11-11-11", $date, $treatment, $time, $staff_id, $id);
        $stmt->execute();

       // $id = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name=$username AND email=$email AND phone_number=$phone");
        //$_SESSION["customer_id"] = $id;

        $stmt->close();
        $conn->close();

        header('Location: 9-account.php');

    }

?>