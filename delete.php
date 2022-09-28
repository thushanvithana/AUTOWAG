<?php // config php
	include("config.php");

    $ID=$_GET['ID'];
	$query = "DELETE FROM registrationtable WHERE ID='$ID'";
	
	$data=mysqli_query($con,$query);
	
	if($data){
		echo "Record deleted from database";
	}
	else{
		echo "faild delete data from database";
	}
?>