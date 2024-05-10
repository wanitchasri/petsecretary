<?php

$con = new PDO("mysql:host=localhost;dbname=petsecretary",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM treatment WHERE treatment_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table">
			<tr>
				<th>treatment_name</th> |
				<th>basic_info</th> |
                <th>responsible_vet</th> |
                <th>medical_fee</th> |
                <th>duration</th> |
			</tr>
            <br>
			<tr>
				<td><?php echo $row->treatment_name; ?> | </td>
				<td><?php echo $row->basic_info;?> | </td>
                <td><?php echo $row->responsible_vet;?> | </td>
                <td><?php echo $row->medical_fee;?> | </td>
                <td><?php echo $row->duration;?> | </td>
			</tr>

		</table>
<?php 
	}
				else{
			echo "Name Does not exist";
		}


}

?>