<?php 
    include 'inc-dbconnection.php';
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>PetSecretary | Vet Service</title>
    <!--connect this html file to css file-->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="appointments-style.css"> 
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
    
<!---------- appointments ----------->
        <div class="catagories">
            <div class="small-container">
                <h3><i class="fa fa-paw"></i>Make an Appointment</h3>
                <div class="row">
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
                        $records = mysqli_query($conn,"SELECT * FROM Treatment"); // fetch data from database

                        while($data = mysqli_fetch_array($records)) {
                    ?>
                    <div class="col-3">
                        <div class="info">
                            <img src="images/sm-kitty3.jpg">
                        </div>
                        <div class="info">
                            <h4><?php echo $data['treatment_name']; ?></h4>
                            <div class="seemore"><a href="3-services_wellnessexam.php">See More</a></div>
                            <p><?php echo $data['medical_fee'];?> Baht</p>
                            <h5>_________________________________</h5>
                            <br><a href= "4-appointments_process.php" class="btn1">Book</a>
                        </div>
                    </div>
                    <?php
                            }
                        ?>
                    <!--
                    <div class="col-3">
                        <div class="info">
                            <img src="images/surgery.jpg">
                        </div>
                        <div class="info">
                            <h4>Surgery</h4>
                            <div class="seemore"><a href="#">See More</a></div>
                            <p>6,000-10,000 Baht</p>
                            <h5>_________________________________</h5>
                            <br><a href= "#" class="btn1">Book</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="info">
                            <img src="images/emergency care.jpg">
                        </div>
                        <div class="info">
                            <h4>Emergency Care</h4>
                            <div class="seemore"><a href="#">See More</a></div>
                            <p>8,000-15,000 Baht</p>
                            <h5>_________________________________</h5>
                            <br><a href= "#" class="btn1">Book</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="info">
                            <img src="images/big-kitty2.jpg">
                        </div>
                        <div class="info">
                            <h4>Vaccinations</h4>
                            <div class="seemore"><a href="#">See More</a></div>
                            <p>1,000 Baht</p>
                            <h5>_________________________________</h5>
                            <br><a href= "#" class="btn1">Book</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="info">
                            <img src="images/dental care.jpg">
                        </div>
                        <div class="info">
                            <h4>Dental Care</h4>
                            <div class="seemore"><a href="#">See More</a></div>
                            <p>1,500-2,500 Baht</p>
                            <h5>_________________________________</h5>
                            <br><a href= "#" class="btn1">Book</a>
                        </div>
                    </div>
                </div>
                !-->
        </div>
    </div>

    </body>
</html>