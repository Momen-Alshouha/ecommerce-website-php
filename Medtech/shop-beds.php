

	<?php 
	session_start();
	 include_once('header.php') ?>
	<?php include '../admin/includes/db.php' ?>
	
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h2 class="page-name">Shop<span style="font-size: 20px;">/Hospital Beds</span></h2>
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
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title">
									<a class="collapsed"  href="shop-surgical.php" aria-expanded="false" aria-controls="collapseTwo">
										Surgical Supplies
									</a>
								  </h4>
								</div>
					
						  </div>
						
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title">
								<a class="collapsed" href="shop-comp.php" aria-expanded="false" aria-controls="collapseThree">
									  Complementery Furniture
								</a>
							  </h4>
							</div>
						
						  </div>
						</div>
						
					</div>
				</div>
				
			<?php 
				$get_products = "SELECT * FROM products";
				$run_products = mysqli_query($con,$get_products);
				while($row_products=mysqli_fetch_array($run_products)) {
				
					$pro_id = $row_products['product_id'];
					
					$pro_title = $row_products['product_title'];
					
					$pro_price = $row_products['product_price'];
					
					$pro_img1 = $row_products['product_img1'];
		
		?>
		
			<div class="d-flex flex-row mx-4">
				<div class="card p-2" style="width: 25rem;">
				<a href=""><img class="card-img-top" src="../admin/product_images/<?php echo $pro_img1?>" alt="Card image"></a>
				<div class="card-body">
					<h4 class="card-title">product title <?php echo $pro_title ?></h4>
					<h4 class="card-title">product price <?php echo $pro_price ?></h4>
					<a href="#" class="btn btn-primary">Add to cart</a>
				</div><br>
				</div>
			<?php } ?>
		
			<!-- Modal -->
			<div class="modal product-modal fade" id="product-modal">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="tf-ion-close"></i>
				</button>
				  <div class="modal-dialog " role="document">
					<div class="modal-content">
						  <div class="modal-body">
							<div class="row">
								<div class="col-md-8 col-sm-6 col-xs-12">
									<div class="modal-image">
										<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="product-short-details">
										<h2 class="product-title">GM Pendant, Basalt Grey</h2>
										<p class="product-price">$200</p>
										<p class="product-short-description">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
										</p>
										<a href="cart.php" class="btn btn-main">Add To Cart</a>
										<a href="product-single.php" class="btn btn-transparent">View Product Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
			</div><!-- /.modal -->
	
					</div>				
				</div>
			
			</div>
		</div>
	</section>
	
	
	
	
	<?php  include_once('footer.php') ?>
	
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
	

  