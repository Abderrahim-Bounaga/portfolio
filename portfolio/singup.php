<?php include "db.php"; ?>
<? session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

  


    

    <?php

$messagee = "";

if(isset($_POST['submit'])){
    // session_start();
    $firstname      = mysqli_real_escape_string($db,$_POST['firstname']);
    $email          = mysqli_real_escape_string($db,$_POST['email']);
    $password       = mysqli_real_escape_string($db,$_POST['password']);
    $password2       = mysqli_real_escape_string($db,$_POST['password2']);

   


    if($password==$password2){
        //create usre
        // $password = password_hash($password, PASSWORD_DEFAULT);//hash password befor storing for security purposes
        

        $db = mysqli_connect('localhost','root','','portfolio',);
        $result = $db->query("SELECT 'Bonjour, cher utilisateur de MySQL !' AS_message FROM DUAL");
        $row = $result->fetch_assoc();

        
		$password = password_hash($password, PASSWORD_DEFAULT);

        $tst = $db->prepare ("INSERT INTO admin_users (username,email,password)VALUES('$firstname','$email','$password')");

        $tst->execute();
       
        $_SESSION['message']= "you are now logged in";
        $_SESSION['username']= $firstname;
		header("location: admin.php");
        echo "<script>alert('signup iscorrect')</script>";

        
    }else{
        echo "<script>alert('your password should  be same of password confrmed')</script>";
    }


}


?>
    <div class="row">
<div class="container4">
        <div class="header3">
            <h2>Create account</h2>
        </div>
        <form action="singup.php" method="POST" class="form3" id="forme">
            <div class="form3-control">
                <label for="">firstname </label>
                <input type="text" placeholder="firstename" id="firstname" name="firstname">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            
            <div class="form3-control">
                <label for="">email </label>
                <input type="email" placeholder="hello@florin.pop" id="email" name="email">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
           
            <div class="form3-control">
                <label for="">password </label>
                <input type="password" placeholder="password" id="password" name="password">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form3-control">
                <label for="">Confirm password </label>
                <input type="password" placeholder="password two" id="password2" name="password2">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
           
            <div class="btn">
            <input type="submit" name="submit" class="btn2">
            </div>
        </form>

    </div>
    </div>


