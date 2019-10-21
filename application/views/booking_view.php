<?php if(!empty($restaurant)){?>



<form class="form-horizontal" method="post" action="<?=base_url()?>index.php/Booking_controller/book_table">
<fieldset>

<!-- Form Name 
<legend>Book Your Table @ <?=$restaurant['restaurant_name']?></legend>
-->
<input type="hidden" name="restaurant_id" value="<?=$restaurant['id']?>">
<input type="hidden" name="customer_id" value="1">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_of_persons">Number of Persons:</label>  
  <div class="col-md-4">
  <input id="no_of_persons" name="no_of_persons" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date of booking:</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="arrival_time">Arrival Time:</label>  
  <div class="col-md-4">
  <input id="arrival_time" name="arrival_time" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="table_id">Select Table</label>
  <div class="col-md-4">
    <select id="table_id" name="table_id" class="form-control">
      <?php foreach($restaurant_tables as $restaurant_table){ ?>
        <option value="<?=$restaurant_table->id?>"><?=$restaurant_table->table_name?></option>
      <?php }?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Book Now</button>
  </div>
</div>

</fieldset>
</form>
<?php 
}
else
{
 // redirect(base_url().'index.php/Booking_controller');
}
?>
