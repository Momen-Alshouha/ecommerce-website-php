<?php

    session_start();
    include("includes/db.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Admin Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
   #foorm {
       border-radius:20px;
    background-color: #34568B;
    width:500px;
    padding:50px;
   }

    h2 {
        color:white;
    }
    .container { 
<<<<<<< HEAD
        background-color:black ;
=======
       margin-right:600px;
>>>>>>> c5c32f6f35eec865bd7eb85ed9cfcdf28119ecb4
        padding:50px;
        margin-top: 10%;;
        width:500px;
    }

    
    body {
        
    background-color: #EDF1FF;
    }
</style>
</head>

<body>
<div class="cont">
<div class="container" ><!-- container Starts -->

<form id="foorm" class="form-login in" action="" method="post" ><!-- form-login Starts -->

<h1 style="color:white; margin-bottom:40px;" class="form-login-heading" >Admin Login Dashboard</h1>

<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required ><br>

<input type="password" class="form-control" name="admin_pass" placeholder="Password" required ><br>

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login" >Log in</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->
</div>


</body>

</html>

<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>