
<!-----http://localhost/project/Dlogin.php----->

<?php

    include_once("conn1.php");//database connection

?>

<?php

    if( isset($_POST['submit'])){
     
	$id = "";
	$pswd = "";
	
	$id      = input_verify($_POST['id']);
	$pswd    = input_verify($_POST['pswd']);
	
	/*
	
	echo $id;
	echo "<br>";
	echo $pswd ;
	echo "<br>";
	
	 */
    
	//retrive data from database
	
	$query1 = "SELECT * FROM mdriver WHERE id = '{$id}' AND password = '{$pswd}' LIMIT 1" ;
			 	 
			 
	$showResult = mysqli_query($conn1 , $query1 );
	
	if($showResult)
	{
		if(mysqli_num_rows($showResult) == 1 )
		{
			header("Location: Welcome.html");
		}
		else
		{
			echo "<script>alert('Please check your email and password')</script>" ;
		}
		
		
	}
		
	
	
	}
	
	//check entered details
	
	function input_verify($data){
		
		//inbulid functions
		$data = trim($data); //remove empty space
		$data = stripcslashes($data);//remove back slash
		$data = htmlspecialchars($data); //convert special charactors in to html code	
		
		return $data;
	}
	
	?>


<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <link href="image/a.jpg" rel="icon" type="image/png">
     <title>Driver login</title>
	 <link href="miulesi.css" rel="stylesheet" type="text/css"/>
</head>

    <script>
       alert("Driver login form is loaded");
    </script>

<body id="body2">

<!----header----->
     <div id="one1">
         <div class="wrapper"> 
                 <img src="image/l.png" class="logo"/>
                 <nav>
                 <a href="#">Home</a>
                 <a href="about.html">About Us</a>
                 <a href="#">Vehicle Fleet</a>
                 <a href="#">Contact Us</a>
                 <a href="#">FAQ</a>
                 <a href="#" border="2px solid white" >Register</a>
                 <a href="#">Login</a>
                 </nav>
         </div>
	 </div>
<div id="one6">

    <div class = "container3">
   
       <form class = "form" method = "POST" action = "">
	   
	        <div class = "heading">
	            <h2 id = "hh">Driver's Login<h2>
		    </div>
		    
			<!-----1.DID------->
		    <div class = "points">
		  
			     <lable for="id">Driver ID</lable>
	             <input type="text" name="id" placeholder = "Enter your driver ID" required>
				   
		    </div>
			
			<br><br><br>
			
			<!-----2.password------->
		    <div class = "points">
		  
			     <lable for="password">Password</lable>
	             <input type="password" name="pswd" placeholder = "Enter your password" required>
			   
		     </div> 
			 
			 <br><br><br>
			 
			 <!-----button------>
		     <button name = "submit" class = "butn">Login</button>
		
        </form>		
		
		
		<div class = "image">
		<img src = "image/z.jpg" class = "img" alt = "driver" >
		</div>		  
		    
    
	</div>
	 
		   
 </div>	 
	 
	 
	 
<!----footer----> 	 
	 <div id="one4">
	     <div id="one5">
		     <footer class="footer">
                 <div class="container">
                      <div class="row">
                         <div class="footer-col">
                            <h4>SERVICES</h4>
                             <ul>
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="#">Vehicle Fleet</a></li>
                                 <li><a href="#">Contact Us</a></li>
                                 <li><a href="#">FAQ</a></li>
                                 <li><a href="login.html">Admin Login</a></li>
                             </ul>
                         </div>
                         <div class="footer-col">
                             <h4>VEHICLE FLEET</h4>
                             <ul>
                                 <li><a href="#">Cars</a></li>
                                 <li><a href="#">SUVs</a></li>
                                 <li><a href="#">Vans & Busses</a></li>
                                 <li><a href="#">Utility vehicles & Lorries</a></li>
                                 <li><a href="#">Motobikes</a></li>
                                 <li><a href="#">Tuk Tuks</a></li>
                             </ul>
                         </div>
                        <div class="footer-col">
                             <h4>CONTACT US</h4>
                             <ul>
              	                 <li><a href="#">Galle road,Colombo,SriLanka.</li>
              	                 <li><a href="#">+94 11 4178526</li>
              	                 <li><a href="#">+94 78 9873024</li>
              	                 <li><a href="#">info@AUTOWAG.com</a></li>
                             </ul>
                         </div>
                         <div class="footer-col">
                             <h4>FOLLOW US</h4>
                             <div class="social-links">
              	                 <a href="#"><i class="fab fa-facebook-f"></i>f</a>
              	                 <a href="#"><i class="fab fa-twitter"></i>t</a>
                                 <a href="#"><i class="fab fa-instagram"></i>i</a>
              	                 <a href="#"><i class="fab fa-linkedin-in">li</i></a>			
                             </div>
                         </div>
                     </div>
                </div>
            </footer>
		 </div>
	 </div>
	 
</body>
</html>