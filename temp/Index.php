<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>Welcome Page</title>
	</head>
	<body>

		Welcome <?php echo $this->session->userdata('email'); ?>
		<br>
		<a href="<?php echo base_url(); ?>index.php/Login_Controller/LogOut">Logout</a>

	</body>
</html>