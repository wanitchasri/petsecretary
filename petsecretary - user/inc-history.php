<?php 

    function getIdFromQueue($queue_number) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT customer_id FROM Appointment WHERE queue_number =$queue_number" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['customer_id'];
        }
    }

    function getTreatment($queue_number) {
        $conn = mysqli_connect("localhost", "root", "", "petsecretary");

        $sql = mysqli_query($conn, "SELECT treatment FROM Appointment WHERE queue_number =$queue_number" );

        while($row = mysqli_fetch_assoc($sql)) {
            return $row['treatment'];
        }
    }

?>