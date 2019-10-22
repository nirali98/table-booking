<?php
 if(!empty($this->session->userdata('email'))){ 
?>
  <?php if(!empty($restaurant)){?>

  <!--Date ppicker-->

  <style type="text/css"> 
    label{margin-left: 20px;}
    #datepicker{width:180px; margin: 0 20px 20px 20px;}
    #datepicker > span:hover{cursor: pointer;}
  </style>

  <script type="text/javascript"> 
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });

  </script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
  </script>

  <!-- End Date picker -->

  <!--Time picker-->

  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

    
  <!--End Time picker-->



  <!-- Regular code -->

  <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/Booking_controller/select_table">
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
    <input id="no_of_persons" name="no_of_persons" type="number" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label">Select Date: </label>
  <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
      <input class="form-control input-md" type="text" readonly name="date" />
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  </div>
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="arrival_time">Arrival Time:</label>  
    <div class="col-md-4">
    <!--Time picker-->

      <div class="container">
      <div class="row">
          <div class="col-sm-6">
              <div class="form-group">
                  <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                      <input type="text" name="arrival_time" class="form-control input-md datetimepicker-input" data-target="#datetimepicker3"/>
                      <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          <script type="text/javascript">
              $(function () {
                  $('#datetimepicker3').datetimepicker({
                      format: 'HH'
                  });
              });
          </script>
      </div>
  </div>
    
    <!--End Time picker-->

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="allocation_hours">Number of Hours:</label>  
    <div class="col-md-4">
    <input id="allocation_hours" name="allocation_hours" type="number" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

  

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-primary"> Select Table</button>
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

<?php 
}
else
{
  redirect(base_url().'index.php/Login_controller/index?error=please login first');
} 
?>