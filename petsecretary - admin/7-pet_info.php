<?php 
    require ('inc-functions.php');
    require ('inc-pet_functions.php');
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>PetSecretary | Vet Service</title>
    <!--connect this html file to css file-->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="info-style.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="header">
    <div class="container">
        <!--logo-->
        <div class="logo">
            <img src="images/logo.php" width="100px">
            <h1><i class="fa fa-plus"></i><a href="1-home.php">PET SECRETARY</a></i3></h1>
            <h2>24/7 VET SERVICE</h2>
        </div>

        <div class="user">
            <span class="icon-stack">
                <i class="fa fa-user-circle"></i>
                <a href= "#"><i class="fa fa-angle-down"></i></a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="6-bookings.php">My Bookings</a></li>
                            <li><a href="7-pet_info.php">Pet Information</a></li>
                            <li><a href="8-treatment_history.php">Treatment History</a></li>
                            <li><a href="9-account.php">My Account</a></li>
                        </ul>
                    </div>
            </span>
        </div>

        <!--navigation bar-->
        <div class="navbar">
            <nav>
                <ul>
                    <!--this is the menu bars-->
                    <menu><a href="1-home.php">Home</a></menu>
                    <menu><a href="2-about.php">About Us</a></menu>
                    <menu><a href="3-services.php">Our Services</a></menu>
                    <menu><a href="4-appointments.php">Appointments</a></menu>
                    <menu><a href="5-contact.php">Contact</a></menu>
                </ul>
            </nav> 
        </div>
    </div>

    <div class="main">
        <div class="main-container">
            <div class="user-container">
                <i class="fa fa-user-circle"></i>
                <h3><?php echo getName(getId()); ?></h3>
            </div>

            <div class="menu-container">
                <menu><a href="6-bookings.php">My Bookings</a></menu>
                <menu class="active"><a href="7-pet_info.php">Pet Information</a></menu>
                <menu><a href="8-treatment_history.php">Treatment History</a></menu>
                <menu><a href="9-account.php">My Accounts</a></menu>
            </div>
        </div>

        <div class="history-container">
            <h5><i class="fa fa-paw"></i>Pet Information</h5>
              <hr></hr>
                <table style="width:100%">
                    <tr>
                        <th>PET ID</th>
                        <th>PET NAME</th>
                        <th>TYPE</th>
                        <th>MORE INFORMATION</th>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
                        $records = mysqli_query($conn,"SELECT * FROM Pet"); // fetch data from database

                        while($data = mysqli_fetch_array($records)) {
                    ?>
                    </tr>
                        <td><?php echo $data['pet_id']; ?></td>
                        <td><?php echo $data['pet_name']; ?></td>
                        <td><?php echo $data['type']; ?></td>
                        <td style="color:#01C5A2"><strong>see more </strong><a onclick="document.getElementById('modal').style.display='block'" class="seemore"><i class="fa fa-chevron-circle-right"></i></a></td>
                    <?php
                            }
                    ?>
                    </tr>
                </table>
                <br><br><br></b><hr></hr>
            </div>
        </div>

        <!--Modal Section
        <div id="modal" class="bg-modal">
            <div class="modal-content" style=" margin:0 auto; margin-top: 50px;">

                <div class="close">
                    <a onclick="document.getElementById('modal').style.display='none'"><i class="fa fa-window-close"></i></a>
                </div>

                <div class="petinfo-container">
                <h5><i4 class="fa fa-paw"></i4>Pet Information</h5>
                <a href= "#" class="add-ac"><i6 class="fa fa-plus-circle"></i6></a>
                <hr></hr>
                <div class="rows">
                    <div class="columns">
                        <div class="image">
                            <img src="images/kaku.jpg"></img>
                            <br>
                            <h6>WEIGHT (kg.)</h6>
                            <input type="text" class="input2" value="4.2">

                        </div>
                    </div>
                    <div class="columns">
                        <div class="info">
                            <h4>NAME</h4>
                            <input type="text" class="input" value="Kaku">

                            <h4>BIRTH DATE</h4>
                            <input type="text" class="input" value="01/04/2020">

                            <h4>TYPE</h4>
                            <input type="text" class="input" value="Cat">

                            <h4>GENDER</h4>
                            <input type="text" class="input" value="Male">

                            <h4>BREED</h4>
                            <input type="text" class="input" value="Tuxedo">
                            <br>
                            <br><a href="7-pet_info.php">Update Info <i2 class="fa fa-chevron-right"></i2></a>
                        </div>
                    </div>
                </div>
                <hr></hr>
            </div>
        </div>-->
        
    </div>
</body>
</html>

           <!--- <div class="petinfo-container">
                <h5><i4 class="fa fa-paw"></i4>Pet Information</h5>
                <a href= "#" class="add-ac"><i6 class="fa fa-plus-circle"></i6></a>
                <hr></hr>
                <div class="rows">
                    <div class="columns">
                        <div class="image">
                            <img src="images/kaku.jpg"></img>
                            <br>
                            <input type="text" class="input2" value="4.2"><h6>WEIGHT (kg.)</h6>

                        </div>
                    </div>
                    <div class="columns">
                        <div class="info">
                            <h4>NAME</h4>
                            <input type="text" class="input" value="Kaku">

                            <h4>BIRTH DATE</h4>
                            <input type="text" class="input" value="01/04/2020">

                            <h4>TYPE</h4>
                            <input type="text" class="input" value="Cat">

                            <h4>GENDER</h4>
                            <input type="text" class="input" value="Male">

                            <h4>BREED</h4>
                            <input type="text" class="input" value="Tuxedo">
                            <br>
                            <br><a href="7-pet_info.php">Update Info <i2 class="fa fa-chevron-right"></i2></a>
                        </div>
                    </div>
                </div>
                <hr></hr>
            </div>---->