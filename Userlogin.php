


<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="Userlogin.css">
        <script src="/js/proj.js"></script>
        <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        
    </head>

    <body class="about">
      
		<div class="second"> 
        <div class="contactUs">
        <center>
        
        <img src="https://img.icons8.com/color/144/000000/user-male-circle--v2.png"/>
        <div class="wrapper">
          <form class="form-signin" method="POST"> 
            <h1>Customer </h1>
            <h4>Login here</h4>
            <input type="text" class="Email" name="username" placeholder="Email Address">
            <br><br>
            <input type="password" class="Email" name="password" placeholder="Password" required>  
            <br><br>
            </label><br>
            
            <button class="submit" type="submit" name="submit">Login</button>  

          </form>
        </div>
        </center>
			
        </div>
		</div>
    </body>
    <br><br><br><br><br><br><br><br><br><br><br><br>
     

</html>    

<?php
	$con = new mysqli("localhost","root","","registeration");
		
			if($con->connect_error){
				
				echo "Error";
			}
			else
			{
				echo "conected";
			}
	

	if(isset($_POST['submit'])){
		
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		
		
		$sql = "select * from registeration  where firstname='$name'";
		$result = mysqli_query($con, $sql);
		
		
		//Execute the query
		
		
		if($row=mysqli_fetch_assoc($result)){
			
			$Dbpassword = $row['ConformPassword'];
			if(md5($password )==$Dbpassword){
				
				header("location:welcome.php");
				echo "sdf";
			}
		}
		else{
			echo " please check sql";
		}
		
		/*if($name=="test" &&  $password=="1234"){
			echo "dsfsdf";
			header("location:welcome.php");
		}*/
	}

?>
