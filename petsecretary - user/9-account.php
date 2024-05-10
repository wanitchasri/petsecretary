<?php 
    require ("inc-functions.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>PetSecretary | Vet Service</title>
    <!--connect this html file to css file-->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="account-style.css"> 
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
                
                <h3><?php echo $_SESSION['username']; ?></h3>
            </div>

            <div class="menu-container">
                <menu><a href="6-bookings.php">My Bookings</a></menu>
                <menu><a href="7-pet_info.php">Pet Information</a></menu>
                <menu><a href="8-treatment_history.php">Treatment History</a></menu>
                <menu class="active"><a href="9-account.php">My Accounts</a></menu>
            </div>
        </div>

            <div class="account-container">
                <h5>My Account</h5>
                <h6>View and edit your personal info below.</h6>
                <hr></hr>
                <br>
                <h8>Login Email:</h8> <h8 style ="color: black";><?php echo getEmail(getId()); ?></h8><br>
                <br>
                <h7>USERNAME</h7>
                <br><br>
                <h10><?php echo getName(getId());; ?></h10>

                <br>

                <div class="rows">
                    <div class="columns">
                        <br><h7>CONTACT EMAIL </h7>
                        <a href= "#" class="add-ac"></a>
                        <br><br>
                        <h10> <?php echo getEmail(getId()); ?> </h10>
                        <br><br><h9>This is the email we'll use to contact you</h9>
                        <br>
                        <div class="update">
                            <br><br><a href="9-account_update.php">Update Info <i3 class="fa fa-chevron-right"></i3></a>
                        </div>
                    </div>
                    <div class="columns">
                        <br><h7 style="margin-left: 15px;">PHONE</h7>
                        <br><br>
                        <h10 style="margin-left: 15px;"><?php echo getPhone(getId()); ?></h10>
                        </div>
                    </div>
                    <br>
                    <hr></hr>
                </div>
            </div>
    </div>

    </div>
</body>
</html>