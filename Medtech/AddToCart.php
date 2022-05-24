<?php
session_start();
include("connection.php");
$add= $_GET['p_id'];
$b=$_SESSION['loggedIn'];
 if(isset($_GET['addtc']))
 {
  
   $qu= "INSERT INTO `cart` (productID,customerID,quantity) VALUES ($add,$b,4)";
    mysqli_query($con,$qu);

    header('location:cart.php');

}
?>
