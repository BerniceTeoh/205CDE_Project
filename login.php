<?php include('loginAdminFunction.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Portal Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type = "text/css"> 
	body {
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #eee;
	}
	.form-signin {
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	}
	.form-signin-heading{
		font-size: 30px;
		text-align: center;
	} 
	
	.form-signin .form-signin-heading,{
		margin-bottom: 10px;
	}
	.form-signin{
		font-weight: normal;
	}
	.form-signin .form-control {
		position: relative;
		height: auto;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
         box-sizing: border-box;
		padding: 10px;
		font-size: 16px;
	}
	.form-signin .form-control:focus {
		z-index: 2;
	}
	.form-control {
		margin: 10px 0px 10px 0px;
	}
	.btn {
		padding: 10px;
		font-size: 15px;
		color: white;
		background: grey;
		border: none;
		border-radius: 5px;
		
	}
	.form-signin input {
		height: 30px;
		width: 93%;
		padding: 5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
	}

	</style>
</head>
<body>
  
	 
  <form class="form-signin" method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<h2 class="form-signin-heading">Customer Portal Sign In</h2>
  	<div class="form-control">
  		<input type="text" name="company_name" placeholder="Company Name" required >
  	</div>
  	<div class="form-control">
  		<input type="password" name="password" placeholder="Password" required>
  	</div>
  	<div class="form-control">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
 
  </form>
</body>
</html>