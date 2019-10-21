<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form method="post" action="<?=base_url()?>index.php/Booking_controller">

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
            	<li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?=$restaurant->city_id?></p></li>
            	<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?=$restaurant->business_id?></p></li>
            </ul>

            <hr>
            	<div class="col-sm-5 col-xs-6 tital " >
            		<input type="hidden" name="id" value="<?=$restaurant->id?>">
            		<input type="hidden" name="restaurant_name" value="<?=$restaurant->restaurant_name?>">
            		<input type="hidden" name="address" value="<?=$restaurant->address?>">
            		<input type="hidden" name="business_id" value="<?=$restaurant->business_id?>">
            		<input type="hidden" name="city_id" value="<?=$restaurant->city_id?>">
              		<input type="submit" name="submit" value="Book Tabale" class="btn-primary">
            	</div>
        	</div>
    		</div>
		</div>
	</div>

</div>

</form>