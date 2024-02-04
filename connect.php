<?php

 $con=new mysqli('localhost','root','','resturant_management_system');

if(!$con){
 
    die(mysqli_error($con));
}

?>