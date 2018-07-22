<?php session_start();?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COmpatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Customer Portal | Dashboard </title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="dashboard.css" rel="stylesheet">

	<style>
	body {
		padding-top: 70px;
		padding-bottom: 40px;
	
	}
	table{
		width: 50%;
		margin: 30px auto;
		border-collapse: collapse;
		text-align: left;
	} 
	
	th, td {
		border-radius: 5px;
		border: 1px solid gray;
		height: 30px;
		padding: 2px;
	}
	tr {
		border-bottom: 1px solid #cbcbcb;
	}

	.container{
		margin: 10px 0px 10px 0px;
		padding-right: 100px;
		padding-left: 800px;
		
	}
</style>
		
	</head>

  <body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Veecotech</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="veecotech.php">Sign out
		  <span data-feather="log-out"></span>
		  </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Company Maintainence 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Quotation
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Invoice
                </a>
              </li>
			 </ul>
			</div>
		</nav>
		</div>
	</div>	


  <body>
  <div class="container">
	<a class = "nav nav-pills pull-right" href="registerCust.php">
		<button class="btn btn-md btn-info btn-block" type="button" >Add New Company</button>
	</a>	
	</div>

	
	<?php

		$db = mysqli_connect('localhost', 'root', '', 'veecotech');

		// Check connection
		if (mysqli_connect_error($db)) {
			die("Connection failed: " . mysqli_connect_error());
		}
	?>
	<a href="edit.php"></a>
	<table>
	<tr>
		<th>ID </th>
		<th>Company Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th>Contact</th><th colspan='2'>Action</th>
	</tr>
	<?php
		$sql = "SELECT custId, company_name,custName, email, password, contact FROM customerinfo";
		$result = mysqli_query($db,$sql);

		if (mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
	?>			
	<tr>
		<td><?php echo $row["custId"];?> </td>
		<td><?php echo $row["company_name"];?></td>
		<td><?php echo $row["custName"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["password"];?></td>
		<td><?php echo $row["contact"];?></td>
		<td><a href='editCust.php?edit=1&id=<?php echo $row["custId"];?>'> Edit </a></td>
		<td><a href='deleteCust.php?custId=<?php echo $row["custId"]; ?>'> Delete </a></td>
	</tr>				
	
	<?php			
			}
		}	
			
	?>
	</table>
    	
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="../../dist/js/bootstrap.min.js"></script>
	<!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</html>	