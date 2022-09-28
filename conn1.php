<?php

//Dtabase connection
	
	$servername = "localhost";
    $username = "root";
    $password = "";
	$db = "autowag" ; //database
	
// Create connection

    $conn1 = mysqli_connect($servername, $username, $password , $db);
	
// Check connection

    if (!$conn1) {
        die("Connection failed!!: " . mysqli_error($conn1));
    }
	else
	{
        //echo "Connected successfully!!!";
	}

	?>