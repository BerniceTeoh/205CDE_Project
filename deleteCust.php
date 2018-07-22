<?php
	$db = mysqli_connect('localhost', 'root', '', 'veecotech');
	$custId=$_REQUEST['custId'];
	$query = "DELETE FROM customerinfo WHERE custId=$custId"; 
	$result = mysqli_query($db,$query) or die ( mysqli_error());
	header("Location: homeCust.php"); 
?>