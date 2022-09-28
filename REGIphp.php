
		<?php
			if(isset($_POST["btnSubmit"])){
				
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$birthday = $_POST["birthday"];
				$Gender = $_POST["Gender"];
				$phonenumber = $_POST["phonenumber"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$ConformPassword = $_POST["ConformPassword"];
				
				$sql = "INSERT INTO registrationtable(firstname,lastname,birthday,Gender,phonenumber,email,password,ConformPassword)VALUES('$firstname','$lastname','$birthday','$Gender','$phonenumber','$email','$password','$ConformPassword')";
			
				if($con->query($sql)){
					echo "Inserted successfully";
				}
				else {
					echo "Error:". $con->error;
				}
			}
			$con->close();
		?>