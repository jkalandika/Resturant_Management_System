<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "resturant_management_system";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $userValue = json_decode($data);
    $orderId=date("YmdHis");

    // if ($userValue) {
        foreach ($userValue as $i) {
            $id =(int) $i->id;
            $name = $i->name;
            $price = $i->price;
            $qty = (int)$i->quantity;

            // echo $id, $name, $price, $qty;

            // $q = "INSERT INTO `cart` (`id`, `name`, `quantity`, `price`,`orderId`) VALUES (CAST($id AS UNSIGNED), '$name', CAST($qty AS UNSIGNED), $price,$orderId)";
            $q = "INSERT INTO cart VALUES('{$id}','{$name}','{$qty}','{$price}','{$orderId}')";
            $stm = mysqli_query($conn,$q);
        }

echo "Added";
}







    


