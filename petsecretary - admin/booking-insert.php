<?php 
?>
<html>

<head></head>

<body>
    <h2>Insert Data : treatment</h2>
    <form action="booking-insertdata.php" method="post" name="Service">
        <table border="1">
            <tr>
                <td>Queue : </td>
                <td><input type="text" name="queue_number"></td>
            </tr>
            <tr>
                <td>Booking Date : </td>
                <td><input type="text" name="booking_date"></td>
            </tr>
            <tr>
                <td>Treatment : </td>
                <td><input type= "text" name="treatment">
                </td>
            </tr>
            <tr>
                <td>Booking Time : </td>
                <td><input type="text" name="booking_time"></td>
            </tr>
            <tr>
                <td>
                    Staff ID : </td>
                <td><input type="text" name="staff_id"></td>
            </tr>
            <tr>
                <td>Customer ID : </td>
                <td><input type="text" name="customer_id"></td>
            </tr>

        </table>

        <br>
        <input type="submit" value="Insert Data">
    </form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "petsecretary");
    mysqli_close($conn);
    echo "<br><br>";
    echo "--- END ---";
    ?>
</body>

</html>