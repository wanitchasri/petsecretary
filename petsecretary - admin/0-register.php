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
    <link rel="stylesheet" href="register-style.css"> 
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

    <div class="main" style="padding-top: 20px; text-align: center;">
        <body>

            <form action="inc-register.php" method="POST">
            <table">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="username" required></td>
                </tr>

                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                
                <tr>
                    <td>Address :</td>
                    <td><input type="text" name="address" required></td>
                </tr> 

                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr> 

                <tr>
                    <td>Phone no :</td>
                    <td>
                        <input type="int" name="phone" required>
                    </td>
                </tr>

                <!--<tr>
                    <td>Pet's Name :</td>
                    <td><input type="text" name="petname" required></td>
                </tr>
                
                <tr>
                    <td>Type :</td>
                    <td><input type="text" name="type" required></td>
                </tr> 

                <tr>
                    <td>Age :</td>
                    <td>
                        <input type="int" name="age" required>
                    </td>
                </tr>

                <tr>
                    <td>Birth Date :</td>
                    <td><input type="date" name="birthdate" required></td>
                </tr> 

                <tr>
                    <td>Breed :</td>
                    <td>
                        <input type="text" name="breed" required>
                    </td>
                </tr>

                <tr>
                    <td>Current Weight :</td>
                    <td>
                        <input type="int" name="weight" required>
                    </td>
                </tr>-->

                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
            </form>
        </body>
    </div>


    </div>
</body>
</html>