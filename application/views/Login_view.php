<?php
if(!empty($this->session->userdata('email')))
{
    redirect(base_url().'index.php/Restaurant_controller');
} 
else
{
?>
  <?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
  <?php 

  if (isset($error)) {
    echo "<font color='red' size=3>".$error."</font>";
  }

  ?>


  <html>
  	<head>
  		<title>Login Page</title>
  	</head>
  	<body>

  		<h2 align="center">Login Form</h3>
  		<form action="<?php echo base_url();?>index.php/Login_controller/Login_data" method="post">	
      		<fieldset>

  <!-- Form Name -->
  <legend>Login Page</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">Email:</label>  
    <div class="col-md-4">
    <input id="email" name="email" type="text" placeholder="Enter Email:" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="pass">Password:</label>
    <div class="col-md-4">
      <input id="pass" name="pass" type="password" placeholder="Enter Password:" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-primary">LogIn</button>
    </div>
  </div>

  	</fieldset>
      </form>
  	</body>
  </html>	
<?php
} 
 ?>