<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $paswd=$_POST['paswd'];
    
    

    $sql_quary = "INSERT INTO `user` (`name`, `id`, `mail`, `phone`, `paswd`)
    VALUES ('$name', '0', '$mail', '$phone','$paswd');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       // echo "Data inserted Successfully";
        header('location:login.php');
    }else{
        die(mysqli_error($con));
    }

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign Up</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>    
<body>
    <header><br>
        <div class="nav container">
            
            <a href="index.php" class="logo"><i class='bx bx-home-smile bx-burst' ></i>Food corner.lk</a>
            <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us </a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#S">User Account</a></li>
    </ul>
        
         
    
        <a href="login.php" class="btn">Log In</a>
        
        </div>
    </header><br>
    <div class="pc_img">
              <img src="img/logo.png" alt="" class="pc_img">
            </div>
    
<!--Sign up-->
    <div class="login container">
        <div class="login-container">
            <h2><br><br>Welcome</h2>
            <p>Already have account <a href="login.php">Log In</a></p>
            
            <!--Sign up form-->
            <form method="POST">
                <span>Full Name:</span>
                <input type="text" name="name" placeholder="Your Name" required>

                <span>Enter your email address:</span>
                <input type="email" name="mail"  placeholder="youremail@gmail.com" required>
                
                <span>Enter your Phone:</span>
                <input type="tel" name="phone"  placeholder="Enter your number" required>
                
                
                <span>Enter your password:</span>
                <input type="password" name="paswd"  placeholder="password" required>
                
                
                
                <a href="#">Forget Password?</a>
                <button type="submit" class="btn"  name="submit">Sign up now</button>
           </form>
            
        </div>
        
        <!--login image-->
        <div class="login-image">
            <img src="img/28.webp" alt="">
        </div>
    </div>
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>Food corner.lk<br></h2>
        
        <div class="footer-box">
            <h3><br><br>Locations</h3>
            <a href="#"><i class='bx bx-location-plus' ></i> Colombo</a>
            <a href="#"><i class='bx bx-location-plus' ></i> Baththramulla</a>
            <a href="#"><i class='bx bx-location-plus' ></i> Mathra</a>
        </div>
        <div class="footer-box">
            <h3><br><br>Contacts</h3>
            <a href="#"><i class='bx bx-phone-call' ></i>  +94 312 234 476</a>
            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfrLfwMrDLmwnPbrFlthmVCwdxMblVGvLnnHwMgfMQkBtmsRndqqmGXtNHwCZJWFhHRrcL"><i class='bx bx-envelope' ></i> foodcorner.lk@gmail.com</a>
            <div class="social">
            <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bx-qr'></i></a> 
            </div>
        </div>
    </div>  
</section>

<!--copyright-->
    <div class="copyright">
        <p>&#169; Food corner.lk All Right Reserved 2023</p>
    
    </div>
    
    </body>
</html>