<?php
	$db = mysqli_connect('localhost', 'root', '', 'veecotech');
	$custId = "0";
	$company_name = "";
	$custName  = "";
	$contact= "";
	
	if(isset($_POST['save'])){
		$company_name=$_POST['ud_company_name'];
		$custName=$_POST['ud_custName'];
		$contact=$_POST['ud_contact'];
		
		$sql="UPDATE customerinfo SET company_name='$company_name', custName='$custName', contact='$contact' WHERE custId='{$_POST['custId']}'";
		$query=mysqli_query($db,$sql);
		if($query){
			header('location: homeCust.php');
		}
	}
	if(isset($_GET['edit'])){
		$sql="select * from customerinfo where custId='{$_GET['id']}'";
		$query=mysqli_query($db,$sql);
		$row=mysqli_fetch_assoc($query);
		$custId = $row['custId'];
		$company_name = $row['company_name'];
		$custName = $row['custName'];
		$contact = $row['contact'];
		
	}
	
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		form {
			width: 45%;
			margin: 50px auto;
			text-align: left;
			padding: 20px; 
			border: 1px solid #bbbbbb; 
			border-radius: 5px;
			}

		.input-group {
			margin: 10px 0px 10px 0px;
			}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
			}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
			}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
		}
</style>
</head>
<body>
	
	<form method="post" action="" >
		<div class="input-group">
			<label>Company Name</label>
			<input type="text" name="ud_company_name" value="<?php echo$company_name;?>"><input type="hidden" name="custId" value="<?php echo $custId;?>"/>
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="ud_custName" value="<?php echo$custName;?>">
		</div>
		<div class="input-group">
			<label>Contact</label>
			<input type="text" name="ud_contact" value="<?php echo $contact;?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>
