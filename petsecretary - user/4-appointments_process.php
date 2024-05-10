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
    <link rel="stylesheet" href="appointments_process-style.css">
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
    
<!---------- appointments process ----------->
        <div class="main">
            <div class="small-container">
                <h3><i class="fa fa-paw"></i>Make an Appointment</h3>
                    
            <form action="inc-appointment.php" method="POST" style ="margin-left: 20px;">
                <div class="elem-group">
                    <label for="text">TREATMENT</label>
                    <input type="text" id="treatment" name="treatment" required>
                </div>
                <div class="elem-group inlined">
                    <label for="date">DATE</label>
                    <input type="date" id="checkin-date" name="date" required>
                </div>
                <div class="elem-group" style="width: 80%;">
                    <label for="room-selection">TIME</label>
                    <select id="time" name="time" required>
                        <option value="">Choose the available time slot on your convenience</option>
                        <option value="7.00 - 9.00">7.00 - 9.00</option>
                        <option value="9.00 - 11.00">9.00 - 11.00</option>
                        <option value="11.00 - 13.00">11.00 - 13.00</option>
                        <option value="13.00 - 15.00">13.00 - 15.00</option>
                        <option value="16.00 - 18.00">16.00 - 18.00</option>
                        <option value="19.00 - 21.00">19.00 - 21.00</option>
                        <option value="22.00 - 24.00">22.00 - 24.00</option>
                        <option value="24.00 - 2.00">24.00 - 2.00</option>
                        <option value="2.00 - 4.00">2.00 - 4.00</option>
                        <option value="4.00 - 6.00">4.00 - 6.00</option>
                    </select>
                </div>
                <hr>
                <div class="elem-group">
                    <br><label for="message">ADDITIONAL NOTE</label>
                    <textarea type= "text" id="message" name="message" placeholder="Tell us anything else that might be important."></textarea>
                </div>
                <br><a href= "4-appointments_success.php" class="btn1">Proceed</a>
            </form>