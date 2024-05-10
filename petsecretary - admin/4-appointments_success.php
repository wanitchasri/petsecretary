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
    <link rel="stylesheet" href="appointments_success-style.css"> 
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
        <div class="success-container">
            <h3>Comfirm your booking</h3>
            <h4>Please re-check your booking date and time</h4>
            <div class="book-card">
                <div class="info" style="border-right: 2px solid rgb(236, 236, 236); text-align: center; font-weight: bold; padding-right: 10px;">
                    <h5>Queue 0900</h5><br>
                    <h6>1</h6>
                    <h7>March</h7>
                    <br><br><h8>Mon 9.00 am</h8><br>
                </div>

                <div class="info" style="text-align: left; padding-left: 50px;">
                    <h7>WELLNESS EXAMS</h7><br>
                    <br><h9>Dr. Bubi Baboon</h9><br>
                    <h9>1hr | 1,000 Baht</h9><br>
                    <br>
                    <h9><b>Patient:</b> Kaku (Cat)</h9><br>
                </div>
            </div>
            <div class="cancel"><a href="4-appointments.php">Cancel</a></div>
            <div class="confirm"><a onclick="document.getElementById('modal').style.display='block'">Confirm</a></div>
            <div class="checkout"><a href="3-services.php">Check out more services</a></div>
        </div>
    </div>

    <!--Modal Section-->
        <div id="modal" class="bg-modal">
            <div class="modal-content" style=" margin:0 auto; margin-top: 150px;">
                <div class="close">
                    <a href="6-bookings.php"><i7 class="fa fa-window-close"></i7></a>
                </div>
                <h3 style="color:#69ddc8; margin-top: 45px;">Success!</h3><h3 style="color:rgb(255, 149, 167)">you're already booked!</h3>
                <h4>We are glad to be of your service!</h4>
                <div class="modal-card">
                    <div class="modal-info" style="border-right: 2px solid rgb(236, 236, 236); text-align: center; font-weight: bold; padding-right: 10px;">
                        <h5>Queue 0900</h5><br>
                        <h6>1</h6>
                        <h7>March</h7>
                        <br><br><h8>Mon 9.00 am</h8><br>
                    </div>

                <div class="modal-info" style="text-align: left; padding-left: 50px;">
                    <h7>WELLNESS EXAMS</h7><br>
                    <br><h9>Dr. Bubi Baboon</h9><br>
                    <h9>1hr | 1,000 Baht</h9><br>
                    <br>
                    <h9><b>Patient:</b> Kaku (Cat)</h9><br>
                </div>
            </div>
        </div>

    </div>
</body>
</html>