<?php

//Dtabase connection
	
	$servername = "localhost";
    $username = "root";
    $password = "";
	$db = "autowag" ; //database
	
// Create connection

    $conn = mysqli_connect($servername, $username, $password , $db);
	
// Check connection

    if (!$conn) {
        die("Connection failed!!: " . mysqli_error($conn));
    }
	else
	{
        //echo "Connected successfully!!!";
	}
	?>