<?php if(!empty($this->session->userdata('email'))){ ?>

  <?php 

  $leaving_time=$booking['arrival_time']+$booking['allocation_hours'];
  if ($leaving_time>23)
  {
    $leaving_time-=24;
  }

   ?>



  <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/Booking_controller/book_table">
  <fieldset>

  <!-- Form Name -->
  <legend>Select Table</legend>

  <!-- Multiple Checkboxes -->

  <input type="hidden" name="restaurant_id" value=<?=$booking['restaurant_id']?>>
  <input type="hidden" name="customer_id" value=<?=$booking['customer_id']?>>
  <input type="hidden" name="no_of_persons" value=<?=$booking['no_of_persons']?>>
  <input type="hidden" name="date" value=<?=$booking['date']?>>
  <input type="hidden" name="arrival_time" value=<?=$booking['arrival_time']?>>
  <input type="hidden" name="" value=<?=$leaving_time?>>


  <div class="form-group">
    <label class="col-md-4 control-label" for="checkboxes">Available Tables:</label>
    <div class="col-md-4">
    <?php foreach ($tables as $table)
    {
    ?>

    <div class="checkbox">
      <label for="checkboxes-0">
        <input type="radio" name="table_id" id="checkboxes-0" value="<?=$table->id?>">
        <?=$table->table_name?>
      </label>
    </div>

    <?php
    } ?>
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
  redirect(base_url().'index.php/Login_controller/index?error=please login first');
} 
?>