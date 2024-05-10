<?php 
?>
<html>

<head></head>

<body>
    <h2>Insert Data : treatment</h2>
    <form action="insertdata.php" method="post" name="Service">
        <table border="1">
            <tr>
                <td>treatment_name : </td>
                <td><input type="text" name="treatment name"></td>
            </tr>
            <tr>
                <td>basic_info : </td>
                <td><input type="text" name="basic info"></td>
            </tr>
            <tr>
                <td>responsible_vet : </td>
                <td><select name="responsible vet">
                        <option value=Dr.BoobiBaboon>Dr.Boobi Baboon</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>medical_fee : </td>
                <td><input type="text" name="medical fee"></td>
            </tr>
            <tr>
                <td>duration : </td>
                <td><input type="text" name="duration"></td>
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