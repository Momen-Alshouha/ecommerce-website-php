
<?php
// Start User session
session_start(); 

// Start connection with the database server
include 'config.php';


?>



<?php  include_once('header.php') ?>




<?php 
session_start(); include_once('header.php') ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>







<!-- Billing Address Form -->
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Billing Details</h4>
                  <form class="checkout-form">
                     <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text" class="form-control" id="user_address" placeholder="">
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">Zip Code</label>
                           <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">City</label>
                           <input type="text" class="form-control" id="user_city" name="city" value="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">Country</label>
                        <input type="text" class="form-control" id="user_country" placeholder="">
                     </div>
                  </form>
               </div>





<!-- Payment Method -->
               <div class="block">
                  <h4 class="widget-title">Payment Method</h4>
                  <p>Cash On Delivery</p>
                  <a href="confirmation.php" class="btn btn-main mt-20">Place Order</a >
                  <div class="checkout-product-details">
                     <div class="payment">
                       
                     </div>
                  </div>
               </div>
            </div>






<!-- Fetch the customer order deatils  -->
<?php
              $select_order = mysqli_query($conn, "SELECT * FROM `customer_orders`");
              $fetch_order = mysqli_fetch_assoc($select_order);
?>




<!-- Product checkout details -->
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>

                     <div class="media product-card">
                        <!-- <a class="pull-left" href="product-single.php">
                           <img class="media-object" src="images/shop/cart/cart-1.jpg" alt="Image" />
                        </a> -->


                        <div class="media-body">
                           <!-- <h4 class="media-heading"><a href="product-single.php">Ambassador Heritage 1921</a></h4> -->

                           <p class="order-id">Invoice no.: <?php echo $fetch_order['invoice_no']; ?></p>
                           <p class="order-id">Order ID: <?php echo $fetch_order['order_id']; ?></p>
                           <p class="order-id">Order Date: <?php echo $fetch_order['order_date']; ?></p>
                           <p class="order-id">Order Status: <?php echo $fetch_order['order_status']; ?></p>

                           <!-- <span class="remove" >Remove</span> -->
                        </div>
                     </div>


                     <!-- Discount code -->
                     <div class="discount-code">
                        <!-- <p>Have a discount ? <a  data-target="#coupon-modal" href="#">enter it here</a></p> -->
                     
                        <form action="" method="post">
                           <div class="form-group">
                           <label>Have a discount ?  </label> <input type="text" class="text" placeholder="   Enter your code here" name="User_Copoun">
                           </div>
                        </form>
                   
                        <?php
                           
                           $Copoun_DB = mysqli_query($conn, "SELECT * FROM `coupons`");
                           $fetch_code = mysqli_fetch_assoc($coupon_code);
                           $fetch_discount = mysqli_fetch_assoc($coupon_price);

                            if(isset($_POST['User_Copoun']))
                               {
                                 
                                 $User_Copoun = $_POST['User_Copoun'];

                                 if($User_Copoun == $fetch_code)
                                 {
                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price']   - $fetch_discount ;

                                 }

                                 // else
                                 // {

                                 // }


                               }
                         ?>
                     </div>

                     

                     <!-- Summary Prices -->
                     <ul class="summary-prices">
                        <li>
                           <span>Subtotal:</span>
                           <span class="Price "><?php echo$_SESSION['Total_Price']?> JOD</span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total:</span>
                        <span><?php echo$_SESSION['Total_Price']?> JOD</span>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- Modal -->
   
   <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">

               <form>
                  <div class="form-group">
                     <input class="form-control" type="text" placeholder="Enter Coupon Code">
                  </div>
                  <button type="submit" class="btn btn-main">Apply Coupon</button>
               </form>

            </div>
         </div>
      </div>
   </div>   
   
   <?php  include_once('footer.php') ?>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>