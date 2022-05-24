<?php
session_start();
include("connection.php");
 if(isset($_GET['atc']))
 {

//$id= $_POST['id'];
$add= $_POST['id'];

// $insert_query=mysqli_query($con, "SELECT * from `products` INNER JOIN `cart`
// ON cart.cartID = products.cartID ")or die('query failed') ;
// $a=mysqli_fetch_assoc($insert_query);

// $d=$a["product_id"];
//$_SESSION['loggedIn']

$b=$_SESSION['loggedIn'];

 mysqli_query ($con, "INSERT INTO `cart` (productID,customerID,quantity) VALUES($add,$b,1)" or die('query failed')) ;


}
?>
