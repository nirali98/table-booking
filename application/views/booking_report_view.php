<?php if(!empty($this->session->userdata('email'))){ ?>

	<h1>Table Successfully Booked!!</h1>

	<h3>Here are your Booking details</h3>


	<?=debug($booking)?>


<?php 
}
else
{
  redirect(base_url().'index.php/Login_controller/index?error=please login first');
} 
?>