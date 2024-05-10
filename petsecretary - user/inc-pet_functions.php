<?php 

    function getPetName() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT pet_name FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['pet_name'];
        }
    }

    function getPetId($id) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT pet_id FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['pet_id'];
        }
    }

    function getPetBirthDate() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT birth_date FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['birth_date'];
        }
    }

    function getPetType() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT type FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['type'];
        }
    }

    function getPetGender() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT gender FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['gender'];
        }
    }

    function getPetBreed() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT breed FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['breed'];
        }
    }

    function getPetWeight() {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
        $id = $_SESSION['id'];

        $sql = mysqli_query($conn, "SELECT weight FROM Pet WHERE customer_id =$id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['weight'];
        }
    }

        function getPetNameFromQueue($id) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT pet_name FROM Pet WHERE customet_id = $id" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['pet_name'];
        }
    }


?>