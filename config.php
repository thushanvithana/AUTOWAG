

<?php // config php
	$con=new mysqli("localhost","root","","registration");
	if ($con->connect_error)
	{
		die("Connection faield: ". $con->connect_error);
	}
	else {
		echo "Connecteded Successfully.";
	}
	
	
?>