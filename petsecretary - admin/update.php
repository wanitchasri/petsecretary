
<html>

<head></head>

<body>
    <?php
    require('inc-dbconnection.php');

    $sql = '
    SELECT * 
    FROM treatment;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <h2>Update Data : treatment_name</h2>
    <form action="updatedata.php" method="post" name="Service">
        <table border="1">
            <tr>
                <td>treatment_name : </td>
                <td><select name="treatment name">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["treatment_name"]; ?>><?php echo $objResult["treatment_name"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>basic_info : </td>
                <td><input type="text" name="basic info"></td>
            </tr>
            <tr>
                <td>responsible_vet : </td>
                <td><input type="text" name="responsible vet"></td></td>
            </tr>
                <td>medical_fee : </td>
                <td><input type="text" name="medical fee"></td>
            </tr>
            <tr>
                <td>duration : </td>
                <td><input type="text" name="duration"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Update Data">
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
    ?>
</body>

</html>