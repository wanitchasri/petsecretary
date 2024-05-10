<?php
require('inc-dbconnection.php');

$pet_name    = $_POST['pet_name'];
$pet_birthdate   = $_POST['pet_birthdate'];
$pet_type		  = $_POST['pet_type'];
$pet_gender		  = $_POST['pet_gender'];
$pet_breed	  = $_POST['pet_breed'];
$pet_weight	  = $_POST['pet_weight'];
$id = $_SESSION['id'];
$empty = '';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
        die('Connect Failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("UPDATE Customer(pet_id, pet_name, gender, type, age, birth_date, breed, weight, customer_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssissi", $empty, $pet_name, $pet_gender, $pet_type, $empty, $pet_breed, $pet_weight, $id);
        $stmt->execute();

       // $id = mysqli_query($conn, "SELECT customer_id FROM Customer WHERE customer_name=$username AND email=$email AND phone_number=$phone");
        //$_SESSION["customer_id"] = $id;

        $stmt->close();
        $conn->close();

        header('Location: 7-pet_info.php');

    }

/*$sql = "
	UPDATE Pet 
	SET pet_id = '',
    pet_name = '" . $pet_name . "',
    gender = '" . $pet_gender . "', 
    type = '" . $pet_type . "',
    age = '',
	birth_date = '" . $pet_birthdate . "',  
	breed = '" . $pet_breed . "', 
	weight = '" . $pet_weight . "'
    customer_id = '" . $id . "'; ";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn);
echo "<br><br>";
echo "--- END ---";*/
?>


