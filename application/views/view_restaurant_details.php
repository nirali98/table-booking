<?php
 if(!empty($this->session->userdata('email'))){ 
?>
<div class="container">    
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">  <h4 >Restaurant Profile</h4></div>
            <div class="panel-body">

        	<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
        		<img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
         	</div>

          	<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
              <div class="container" >
                <h2><?=$restaurant->restaurant_name?></h2>
                <p>at   <b> <?=$restaurant->address?></b></p>
        	</div>

            <hr>
            <ul class="container details" >
            	<li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>At <?=$city->city_name?></p></li>
            	<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Owner: <?=$business->email?></p></li>
            </ul>

            <hr>
            	<div class="col-sm-5 col-xs-6 tital " >
                    <a href="<?=base_url()?>index.php/Booking_controller?id=<?=$restaurant->id?>">
                         Book Tabale
                    </a>
            	</div>
        	</div>
    		</div>
		</div>
	</div>

</div>
<?php 
}
else
{
  redirect(base_url().'index.php/Login_controller/index?error=please login first');
} 
?>
