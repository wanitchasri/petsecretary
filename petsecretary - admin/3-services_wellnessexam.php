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
    <link rel="stylesheet" href="services-wellnessexam_style.css"> 
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


        <div class="wellnessexam">
            <div class="small-container">
                <div class="effect-container">
                    <img src="images/sm-kitty3-long picture.jpg" class="image">
                    <div class="overlay">
                        <div class="text">We take care your pets like ours</div>
                    </div>
                </div>
                <h3><i4 class="fa fa-paw"></i4>Wellness Exams</h3>
                <div class="row">
                    <div class="col-3">
                        <h4>DESCRIPTION</h4>
                        <p>A Wellness Exam is an overall health assessment that includes a thorough physical exam, <br>a discussion of behavior, diet/nutrition and a risk assessment to determine needed <br>vaccinations and prevention medications.</p>
                    </div>
                    <div class="col-3">
                        <br><h4>RESPONSIBLE VETERINARIANS</h4>
                        <p>Dr. Boobi Baboon <br>Dr. Baba Boobi</p>
                    </div>
                    <div class="col-3">
                        <br><h4>Medical Fee Rate</h4>
                        <p>1,000-2,000 Baht</p>
                    </div>
                    <div class="col-3">
                        <br><h4>Time Duration</h4>
                        <p>1-2 hr.</p>
                    </div>
                    <br><a href= "4-appointments.php" class="btn1">Book Now!</a>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>