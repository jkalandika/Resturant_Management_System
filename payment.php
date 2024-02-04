<?php
include 'connect.php';



if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $phone_number=$_POST['phone_number'];

    $crdname=$_POST['crdname'];
    $crdnumber=$_POST['crdnumber'];
    $expmounth=$_POST['expmounth'];
    $expyear=$_POST['expyear'];

    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];
   
   
    

    $sql_quary = "INSERT INTO `payment` (`name`, `id`, `mail`, `address`, `phone_number`, `crdname`, `crdnumber`, `expmounth`, `expyear`, `cvv`, `amount`)
    VALUES ('$name', '0', '$mail', '$address', '$phone_number', '$crdname', '$crdnumber', '$expmounth', '$expyear', '$cvv', '$amount');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       echo "<script>alert('Card Insert Successfully.')</script>";
      ;
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
    <title>payment</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!-- java script-->
    <script src="payment.js"></script> 
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>    
<body style = "background:url(img/46.jpg); background-size: cover;">
    <header><br>
        <div class="nav container">
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>Food corner.lk</a>
                    
            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="user.php">User Account</a></li>
        
    </ul>

    
   
           
          </div>
    </header><br><div class="card">
    <div class="pc_img">
              <img src="img/logo.png" alt="" class="pc_img">
            </div>
<div class="container_p">
    <form action="" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="janani virukshi">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="mail" placeholder="youremail@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>Phone Number :</span>
                    <input type="text" name="phone_number" placeholder="panadura">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Amount :</span>
                        <input type="text" name="amount" placeholder="61 130">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="crdname" placeholder="mrs.janai virukshi">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="crdnumber" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expmounth" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expyear" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123">
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>
</div>
</div>  
 
<!-- Add this script after your existing script tag -->
<script>
    document.getElementById('totalButton').addEventListener('click', function() {
        // Calculate the total amount
        var totalAmount = calculateTotal();

        // Redirect to payment.php with the total amount as a query parameter
        window.location.href = 'payment.php?totalAmount=' + totalAmount;
    });

    // Function to calculate the total amount based on your cart logic
    function calculateTotal() {
        // Replace this with your actual logic to calculate the total amount
        var total = 0;

        // Assuming there is a list of items with prices in your listCard
        var items = document.querySelectorAll('.listCard li');
        items.forEach(function(item) {
            // Extract the price from the item (replace this logic with your actual data structure)
            var price = parseFloat(item.dataset.price || 0);
            
            // Add the price to the total
            total += price;
        });

        return total;
    }
</script>


        
    
    
    
                
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