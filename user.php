<?php 

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>e commerce - home</title>
    
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    
    <!-- java script-->
    <script src="script%20home.js"></script>

    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>

<body style = "background:url(img/43.jpg); background-size: cover;">
     <header><br>
        <div class="nav container">
            
            <a href="index.php" class="logo"><i class='bx bx-home-smile bx-burst' ></i>Food corner.lk</a>
            
            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
       <li><a href="home.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="user.php"class="active">User Account</a></li>
        
    </ul>
  
           
    <!--logOut bt-->
        <a href="logout.php" class="btn">Log Out</a>
        </div><br>
          <div class="pc_img">
              <img src="img/logo.png" alt="" class="pc_img">
         </div>  
         
        <div class="user_d">
      <center>
   <br>
        <i class='bx bx-smile bx-tada'></i><?php echo "<h1>Welcome to our Food corner...  " . "</h1>"; ?><i class='bx bx-home-heart bx-tada'></i><br><?php echo "<h1>Good Evening...". $_SESSION['name'] . "</h1>"; ?>
          <br></center>
          </div>
         <br><br><br>
        <div class="user_dc">
            <center>
        <i class='bx bxs-rename bx-fade-left'></i><?php echo "<h3>Name&nbsp;&nbsp;&nbsp;:- " . $_SESSION['name'] . "</h3>"; ?>
        <i class='bx bxs-envelope bx-fade-left' ></i><?php echo "<h3>E-Mail       :-" . $_SESSION['mail'] . "</h3>"; ?>
       <i class='bx bxs-phone-call bx-fade-left'></i> <?php echo "<h3>Phone Number :-" . $_SESSION['phone'] . "</h3>"; ?>
      </center></div>
         
    
     
    </header>
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
