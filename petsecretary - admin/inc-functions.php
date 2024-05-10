<?php

require ('inc-dbconnection.php');

/*function getUsersData($email) {
    $conn = mysqli_connect("localhost", "root", "", "petsecretary");

    $array = array();
    $sql = mysqli_query($conn, "SELECT * FROM Customer WHERE email='$email'");

    while($row = mysqli_fetch_assoc($sql)) {
        $array['customer_id'] = $row['customer_id'];
        $array['password'] = $row['password']; 
        $array['customer_name'] = $row['customer_name'];
        $array['address'] = $row['address'];
        $array['email'] = $row['email'];
        $array['phone_number'] = $row['phone_number'];
    }
    return $array;
}*/

function getId() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $name = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name ='$name' AND password ='$password'" );

        while($row = mysqli_fetch_assoc($sql)) {
            $_SESSION['id'] = $row['customer_id']; 
            return $row['customer_id'];
        }
}

function getName($id) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT customer_name FROM Customer WHERE customer_id='$id'" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['customer_name'];
        }  
}

function getPhone($id) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT phone_number FROM Customer WHERE customer_id='$id'" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['phone_number'];
        }
}

function getEmail($id) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT email FROM Customer WHERE customer_id='$id'" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['email'];
        }
}
