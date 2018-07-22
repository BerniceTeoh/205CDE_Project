<?php
	$db = mysqli_connect('localhost', 'root', '', 'veecotech');
	$id=$_REQUEST['id'];
	$query = "DELETE FROM companyinfo WHERE id=$id"; 
	$result = mysqli_query($db,$query) or die ( mysqli_error());
	header("Location: home.php"); 
?>