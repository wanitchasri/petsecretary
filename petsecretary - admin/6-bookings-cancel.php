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
    <link rel="stylesheet" href="bookings-style.css"> 
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
                <h3>Boo Boo</h3>
            </div>

            <div class="menu-container">
                <menu class="active"><a href="6-bookings.php">My Bookings</a></menu>
                <menu><a href="7-pet_info.php">Pet Information</a></menu>
                <menu><a href="8-treatment_history.php">Treatment History</a></menu>
                <menu><a href="9-account.php">My Accounts</a></menu>
            </div>
        </div>

        <div class="history-container">
            <h5><i class="fa fa-paw"></i>My Bookings</h5>
            <hr></hr>
            <table style="width:100%">
                <!--<tr>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>TREATMENT</th>
                    <th>STATUS</th>
                </tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="color:rgb(248, 77, 71)"><strong></strong><a style="color: rgb(248, 77, 71)" onclick="document.getElementById('modal').style.display='block'" class="seemore"><i class="fa fa-chevron-circle-right"></i></a></td>
                </tr>-->
            </table>
            <br><br><br></b><hr></hr>
        </div>

    </div>

    <!--Modal Section-->
        <div id="modal" class="bg-modal">
            <div class="modal-content" style=" margin:0 auto; margin-top: 200px;">
                <div class="close">
                    <a onclick="document.getElementById('modal').style.display='none'"><i7 class="fa fa-window-close"></i7></a>
                </div>
                <div class="modal-card">
                    <div class="modal-info" style="border-right: 2px solid rgb(236, 236, 236); text-align: center; font-weight: bold; padding-right: 10px;">
                        <h6>Queue 0900</h6><br>
                        <h7>1</h7>
                        <br>
                        <h8>March</h8>
                        <br><br><h9>Mon 9.00 am</h9><br>
                    </div>

                <div class="modal-info" style="text-align: left; padding-left: 50px;">
                    <h8>WELLNESS EXAMS</h8><br>
                    <br><h10>Dr. Bubi Baboon</h10><br>
                    <h10>1hr | 1,000 Baht</h10><br>
                    <br>
                    <h10><b>Patient:</b> Kaku (Cat)</h10><br>
                    
                </div>
            </div>
            
        </div>

    </div>
</body>
</html>