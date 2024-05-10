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
            <img src="images/logo.png" width="100px">
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

            <div class="petinfo-container">
                <h5><i4 class="fa fa-paw"></i4>Pet Information</h5>
                <a href= "0-addpet.php" class="add-ac"><i6 class="fa fa-plus-circle"></i6></a>
                <hr></hr>
                <div class="rows">
                    <div class="columns">
                        <div class="image">
                            <img src="images/kaku.jpg"></img>
                            <br>
                            <h5 ><?php echo getPetWeight();?></h5><h6>WEIGHT (kg.)</h5>

                        </div>
                    </div>
                    <div class="columns">
                        <div class="info">
                            <h4 style="padding-left: 35%; color: rgb(65, 159, 253);">NAME</h4>
                            <h5><?php echo getPetName();?></h5>
                            <br>

                            <h4 style="padding-left: 35%; color: rgb(65, 159, 253);>BIRTH DATE</h4>
                            <h5><?php echo getPetBirthDate();?></h5>
                            <br>

                            <h4 style="padding-left: 35%; color: rgb(65, 159, 253);>TYPE</h4>
                            <h5><?php echo getPetType();?></h5>
                            <br>

                            <h4 style="padding-left: 35%; color: rgb(65, 159, 253);" >GENDER</h4>
                            <h5><?php echo getPetGender();?></h5>
                            <br>

                            <h4 style="padding-left: 35%; color: rgb(65, 159, 253);" >BREED</h4>
                            <h5><?php echo getPetBreed();?></h5>
                            <br>
                            <br><a href="7-pet_info_update.php">Update Info <i2 class="fa fa-chevron-right"></i2></a>
                        </div>
                    </div>
                </div>
                <hr></hr>
            </div>
    </div>


    </div>
</body>
</html>