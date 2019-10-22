<?php if(!empty($this->session->userdata('email'))){ ?>

	<?php if(isset($restaurants)){ ?>
		<section id="products">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="products-heading">
							<h2>All Restaurants</h2>
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
							<a class="view-link shutter" href="<?=base_url()?>index.php/Booking_controller?id=<?=$restaurant->id?>">
								<i class="fa fa-book" aria-hidden="true"></i>Book Now
							</a>
						</div>	<!-- End of /.products -->
					</div>	<!-- End of /.col-md-3 -->
				<?php } ?>

				</div>	<!-- End of /.row -->
			</div>	<!-- End of /.container -->
		</section>	<!-- End of Section -->
	<?php 
	}
	else
	{
		redirect(base_url().'index.php/Restaurant_controller');
	}

	?>

<?php 
}
else
{
  redirect(base_url().'index.php/Login_controller/index?error=please login first');
} 
?>