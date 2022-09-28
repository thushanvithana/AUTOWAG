<!DOCTYPE html>
<html>
    <head>
        <title> Driver LOGIN AS</title>
        
        <link rel="stylesheet" href="Userlogin.css">
        <script src="/js/proj.js"></script>
        <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        
    </head>

<div class="second1">
  <center>
    
    <img src="https://img.icons8.com/color/144/000000/driver.png"/>
	<form class="form-signin" method="POST"> 
    <h1>Driver </h1>  
    <h4>Login here</h4>
        <input type="text" class="Email" name="username" placeholder="Email Address">
        <br><br>
        <input type="password" class="password" name="password" placeholder="Password" required="">      
        </label><br><br><br>
        
        <button class="submit" name="submit" type="submit">Login</button>  

      </form>
    </div>
  </center> 
</div>

		
			
   
    </div>
      </div>


    </body>
     
</html>    

<?php
	

	if(isset($_POST['submit'])){
		
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		if($name=="test" &&  $password=="1234"){
			echo "dsfsdf";
			header("location:welcome.php");
		}
	}
?>






