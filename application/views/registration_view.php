<?php
if(!empty($this->session->userdata('email')))
{
    redirect(base_url().'index.php/Restaurant_controller');
} 
else
{
?>

  <form action="<?php echo base_url();?>index.php/Registration_controller/insertdata" method="post">
  <fieldset>

  <!-- Form Name -->
  <legend>Form Name</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">Email  :</label>  
    <div class="col-md-4">
    <input id="email" name="email" type="text" value="<?php echo set_value('email');?>" placeholder="" class="form-control input-md" required="">
      <?php echo form_error('email'); ?>
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="password">Password :</label>
    <div class="col-md-4">
      <input id="password" name="password" type="password" value="<?php echo set_value('password');?>" placeholder="" class="form-control input-md" required="">
      <?php echo form_error('password'); ?>
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="password">Confirm Password  :</label>
    <div class="col-md-4">
      <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
      <?php echo form_error('password'); ?>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="dob">Date Of Birth :</label>  
    <div class="col-md-4">
    <input id="dob" name="dob" type="text" value="<?php echo set_value('dob');?>" placeholder="" class="form-control input-md" required="">
      <?php echo form_error('dob'); ?>
    </div>
  </div>

  <!-- Multiple Radios -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="gender">Gender :</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="gender-0">
        <input type="radio" name="gender" id="gender-0" value="<?php echo set_value('gender');?>" checked="checked">

        Female
      </label>
  	</div>
    <div class="radio">
      <label for="gender-1">
        <input type="radio" name="gender" id="gender-1" value="<?php echo set_value('gender');?>">
        Male
      </label>
  	</div>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="contact_no">Contact Number :</label>  
    <div class="col-md-4">
    <input id="contact_no" name="contact_no" type="text" value="<?php echo set_value('contact_no');?>" placeholder="" class="form-control input-md" required="">
      <?php echo form_error('contact_no'); ?>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <button id="submit" name="customer" class="btn btn-primary">customer</button>
    </div>

  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <button id="submit" name="business" class="btn btn-primary">Business</button>
    </div>

  </div>

  </fieldset>
  </form>
<?php 
}
 ?>