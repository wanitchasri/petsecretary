<?php

    include ('inc-dbconnection.php');

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
  	    array_push($errors, "Username is required");
    }
    if (empty($password)) {
  	    array_push($errors, "Password is required");
    }

  	$query = "SELECT * FROM Customer WHERE customer_name ='$username' AND password ='$password'";
  	$results = mysqli_query($conn, $query);

  	if (mysqli_num_rows($results) == 1) {
  	    $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

  	    header('location: 1-home.php');
  	} /*else {
  		array_push($errors, "Wrong username/password combination");
  	}*/
  }

?>