<?php
	//open databaseConnection

		$con = new mysqli("localhost","root","","registration");
		
			if($con->connect_error){
				
				die("Connection failed:".$con->connect_error);
			}
			else
			{
				echo "conected";
			}		
?>
<!DOCTYPE html>
<html>
	<head>
	<link >
	</head>
	<body style="background-color:#AED6F1"> 
	<h1><center> <u>Registered User Details</u></center></h1>
<?php
	global $con;
	echo "<center>";
	$sql= "SELECT * FROM registrationtable";
	if($result=$con->query($sql)){
		if($result->num_rows > 0){
			
			//table headers
			echo ("<table border='1' ");
			echo ("<tr>");
			echo("<th>"."User ID"."</th>");
			echo("<th>"."Firstname   "."</th>");
			echo("<th>"."Lastname"."</th>");
			echo("<th>"."DOB"."</th>");
			echo("<th>"."Gender"."</th>");
			echo("<th>"."Phone"."</th>");
			echo("<th>"."Email"."</th>");
			echo("<th>"."Password"."</th>");
			echo("<th>"."Delete user details"."</th>");
			echo("</tr>");
			
			//getdata 
			while($row = $result->fetch_assoc()){
			
			echo ("<tr>");
			echo ("<td>". $row['ID']. "</td>");
			echo ("<td>". $row['firstname']. "</td>");
			echo ("<td>" . $row['lastname'] . "</td>");
			echo ("<td>" . $row['birthday'] . "</td>");
			echo ("<td>" . $row['Gender'] . "</td>");
			echo ("<td>". $row['phonenumber']. "</td>");
			echo ("<td>" . $row['email'] . "</td>");
			echo ("<td>" . $row['password'] . "</td>");
			echo ("<td><a href='delete.php?ID=$row[ID]'>Delete row</a></td>");
			echo ("</tr>");
			}
			echo ("</table>");
		}else{
			echo "no results";
			}
		}
		else{
			echo "Error:". $con->error;
		}
		
		echo "</center>";	
?>
	</body>
</html>

