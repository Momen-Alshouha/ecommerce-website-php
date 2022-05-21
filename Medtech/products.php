<?php
session_start();
include_once('header.php');
include("connection.php");
?>





<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h2 class="page-name">Shop<span style="font-size: 20px;"></span></h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">shop</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<div class="widget product-category">
					<h4 class="widget-title">Categories</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							
									<?php


									$get_cats = "select * from categories";

									$run_cats = mysqli_query($con, $get_cats);

									while ($row_cats = mysqli_fetch_array($run_cats)) {

										$cat_id = $row_cats['cat_id'];

										$cat_title = $row_cats['cat_title'];

										echo "
							   <div class='panel panel-default'>


								   
								   <h1 class='panel-title'>
									   <a href='products.php?cat=$cat_id'> $cat_title </a>
									   </h1>
								   
								   
								   </div>
							   
							   ";
									}

									?>

							</div>
						</div>
						</div>
						</div>
			</div>

			<!-- end of categories -->

			<!-- start of products -->
                     
			<div class="col-md-9">
				<div class="row ">

				<div class='col-md-4 '>
				<div class='product-item '>
					


						<?php

						$Cid = $_GET['cat'];

						$query = "SELECT  * FROM  `products` p , `categories` c
			           WHERE  p.`cat_id` =c.`cat_id`  AND c.`cat_id`=$Cid";

						$run_cat = mysqli_query($con, $query);


						while ($row_cats = mysqli_fetch_array($run_cat)) {

							$pro_id = $row_cats['product_id'];

							$pro_title = $row_cats['product_title'];

							$pro_price = $row_cats['product_price'];

							$pro_img1 = $row_cats['product_img1'];

							echo "
								
							
							<a  class='row' href='product-single.php?cat=$pro_id'>

								      <div class='product-thumb'>
									      <img class='img-thumbnail' src='../admin/product_images/$pro_img1' alt='' />
									  </div>
									  
							</a>  
		     
							<div class='product-content'>

									<h4>$pro_title</h4>
									<p class='price'>$pro_price JD</p>
									<a href='#' class='btn btn-main btn-small btn-round'>Add to cart</a>

						

				         </div>
				";
						}



						?>



<!-- col md 4 -->
					</div>
				</div>
<!-- col md 9 -->
					</div>
				</div>

			</div>
		</div>
</section>




<?php include_once('footer.php') ?>

<!-- 
		Essential Scripts
		=====================================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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