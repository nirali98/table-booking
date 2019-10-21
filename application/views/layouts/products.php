	
	
		<!-- PRODUCTS Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div>
				</div>
			</div>
			<?php foreach ($restaurants as $restaurant) {?>
			<div class="row">
				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="<?=base_url("images/product-image.jpg")?>" alt="">
						</a>
						<a href="single-product.html">
							<h4><?=$restaurant->restaurant_name?></h4>
						</a>
						<p class="price"><?=$restaurant->address?></p>
						<a class="view-link shutter" href="<?=base_url()?>index.php/Restaurant_controller/view_restaurant_details/<?=$restaurant->id?>">
							<i class="fa fa-eye" aria-hidden="true"></i>View Details
						</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
			<?php } ?>

			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->