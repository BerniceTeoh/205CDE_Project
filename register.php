<?php include('loginAdminFunction.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>add New Company</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type = "text/css"> 
	body {
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #eee;
	}
	.form-signup {
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	} 
	.form-signup-heading{
		font-size: 30px;
		text-align: center;
	}	
	.form-signup .form-signup-heading{
		margin-bottom: 10px;
	}
	.form-signup  {
		font-weight: normal;
	}
	.form-signup .form-control {
		position: relative;
		height: auto;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
         box-sizing: border-box;
		padding: 10px;
		font-size: 16px;
	}
	.form-signup .form-control:focus {
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
	
	.form-signup input {
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

  	
  
	
  <form class="form-signup" method="post" action="register.php">
  	<?php include('errors.php'); ?>
	<h2 class="form-signup-heading">Add Company</h2>
  	<div class="form-control">
  	  <input type="text" name="company_name" placeholder="Company Name" required autofocus value="<?php echo $company_name; ?>">
  	</div>
  	<div class="form-control">
  	  <input type="email" name="email" placeholder="Email address" required value="<?php echo $email; ?>">
  	</div>
  	<div class="form-control">
  	  <input type="password" name="password1" placeholder="Password" required >
  	</div>
  	<div class="form-control">
  	  <input type="password" name="password2" placeholder="Comfirm Password" required >
  	</div>
  	<div class="form-control">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>