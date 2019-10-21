
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>

		<h2 align="center">Login Form</h3>
		<form action="<?php echo base_url();?>index.php/Login_Controller/Login_data" method="post">	
    		<table cellpadding="2" cellspacing="2" align="center">
    			<tr>
    				<td>Email:</td>
    				<td>
    					<input type="text" name="email" required="required">
    				</td>
    			</tr>
    			<tr>
    				<td>Password:</td>
    				<td>
    					<input type="password" name="pass" required="required">
    				</td>
    			</tr>
    			<tr>
    				<td>&nbsp;</td>
    				<td>
    					<input type="submit" value="Login">
    				</td>
    			</tr>
    		</table>
    	</form>
	</body>
</html>
