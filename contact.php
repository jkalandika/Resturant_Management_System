<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $massage=$_POST['massage'];
   
    

    $sql_quary = "INSERT INTO `contact` (`name`, `id`, `mail`, `phone`, `massage`)
    VALUES ('$name', '0', '$mail', '$phone', '$massage');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       echo "<script>alert('Data Send Successfully.')</script>";
       // header('location:login.php');
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
    <title>contact</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>    
<body style = "background:url(img/43.jpg); background-size: cover;">
    <header><br>
        <div class="nav container">
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>Food corner.lk</a>
            
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="contact.php"class="active">Contact Us</a></li>
        <li><a href="user.php">User Account</a></li>
        
    </ul>
   
              
          </div>
    </header><br>
    <div class="pc_img">
              <img src="img/logo.png" alt="" class="pc_img">
            </div>
<!--contact-->
    <section class="contact us " id="contact">   
        
       <div class="container_con">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Touch with Us...</h3><br><br>
          <p class="text">
             We Can't Solve The Your Problem If You Don't Tell Us About It...!
          </p><br><br><br>

          <div class="info">
            <div class="information">
        <i class='bx bxs-location-plus bx-fade-left' ></i>
                <p>102/06 ABc Rd,Colombo</p>
            </div>
            <div class="information">
              <i class='bx bx-envelope bx-fade-left' ></i>
               <p>foodcorner.lk@gmail.com</p>
            </div>
            <div class="information">
              <i class='bx bx-phone-call bx-fade-left' ></i>
               <p>+94 312 234 476</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com">
                  <i class='bx bxl-facebook'></i>
              </a>
              <a href="https://twitter.com/i/flow/login">
                <i class='bx bxl-twitter'></i>
              </a>
              <a href="https://www.instagram.com/accounts/login/">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="#"><i class='bx bx-qr'></i></a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
              <label for="">User name:</label>
            <div class="input-container_con">
              <input type="text" name="name" class="input" placeholder="Ashen_68" />
            </div>
              <label for="">Email:</label>
            <div class="input-container_con">
              <input type="email" name="mail" class="input" placeholder="youremail@gmail.com" required/>
            </div>
              <label for="">Phone Number:</label>
            <div class="input-container_con">
              <input type="tel" name="phone" class="input" placeholder="+94 777 234 543" />
            </div>
              <label for="">Massage:</label>
            <div class="input-container_con textarea">
              <textarea name="massage" class="input" placeholder="Massage..."  ></textarea>
            </div>
            <input type="submit" name="submit" value="Send" class="btn_con"/>
          </form>
        </div>
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