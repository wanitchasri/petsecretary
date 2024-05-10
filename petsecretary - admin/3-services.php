<?php 
    include 'inc-dbconnection.php';
    include 'inc-searchbox.php';
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>PetSecretary | Vet Service</title>
    <!--connect this html file to css file-->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="services-style.css"> 
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

        <!--<form method="post">
        <div class="main">
            <div class="search-box">
                <input class="search-txt" type="text" name="search" placeholder="Type to search">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
                <input type="submit" name="submit">
            </div>
        </div>-->
    </div> 
    
<!---------- feature ----------->
<div style="text-align:center; padding-top: 20px;">
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
</div>
	
</form>
        <div class="catagories">
            <div class="small-container">
                <h3>We Love Our Animals <br>and What We Do!</h3>
                <h5>We provide veterinary medical services with medical ethic and royalty<br>The standard of our hospital is ensured the quality by ISO 9001: 2008.</h5>
                <div class="settings">
                    <span class="icon-settings">
                            <div class="sub-menu-settings">
                                <ul>
                                    <li><a href="insert.php">Add</a></li>
                                    <li><a href="update.php">Update</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                    </span>
                </div>
                <div class="row">
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "petsecretary");
                        $records = mysqli_query($conn,"SELECT * FROM Treatment"); // fetch data from database

                        while($data = mysqli_fetch_array($records)) {
                    ?>
                    <div class="col-3">
                        <a href= "3-services_wellnessexam.php"><img src="images/sm-kitty3.jpg"></a>
                        <h4><?php echo $data['treatment_name']; ?></h4>
                        <p><?php echo $data['medical_fee']; ?> Baht</p>
                        <br><a href= "3-services_wellnessexam.php" class="btn1">See more</a>
                    </div>
                    <?php
                            }
                    ?>
                    <!--
                    <div class="col-3">
                        <a href= "#"><img src="images/surgery.jpg"></a>
                        <h4>Surgery</h4>
                        <p>6,000-10,000 Baht</p>
                    
                        <br><a href= "#" class="btn2">See more</a>
                    </div>
                    <div class="col-3">
                        <a href= "#"><img src="images/emergency care.jpg"></a>
                        <h4>Emergency Care</h4>
                        <p>8,000-15,000 Baht</p>
                    
                        <br><a href= "#" class="btn3">See more</a>
                    </div>
                </div>
                <div class="row1">
                    <div class="col-4">
                        <a href= "#"><img src="images/big-kitty2.jpg"></a>
                        <h4>Vaccinations</h4>
                        <p>1,000 Baht</p>
                    
                        <br><a href= "#" class="btn4">See more</a>
                    </div>
                    <div class="col-4">
                        <a href= "#"><img src="images/dental care.jpg"></a>
                        <h4>Dental Care</h4>
                        <p>1,500-2,500 Baht</p>
                        <br><a href= "#" class="btn5">See more</a>
                    </div>-->
            </div>
        </div>
</body>
</html>