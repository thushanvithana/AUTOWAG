<!----http://localhost/project/Dregister.php------->

<?php

    include_once("conn.php");//database connection

?>

<?php

//sending data to the database

    if( isset($_POST['submit'])){
     
	 //declaring variables and assgin empty values
	 
	$id = "";
    $fname = "" ;
	$lname = "" ;
	$dob  = "";
	$pswd = "";
    $phn = "" ;
	$email = "" ;
	$exp  = "";
	$lic = "";
    $time = "" ;
	$address = "" ;
	$age  = "";
	
	$id      = input_verify($_POST['id']);
	$fname   = input_verify($_POST['fname']);    
	$lname   = input_verify($_POST['lname']);
	$dob     = input_verify($_POST['dob']);
	$pswd    = input_verify($_POST['pswd']);
	$phn     = input_verify($_POST['phn']);
	$email   = input_verify($_POST['email']);
	$exp     = input_verify($_POST['exp']);
	$lic     = input_verify($_POST['lic']);
	$time    = input_verify($_POST['time']);
	$address = input_verify($_POST['address']);
	$age     = input_verify($_POST['age']);
	
	/*
	echo $id;
	echo "<br>";
	echo $fname;
	echo "<br>";
	echo $lname ;
	echo "<br>";
	echo $dob ;
	echo "<br>";
	echo $pswd ;
	echo "<br>";
	echo $phn ;
	echo "<br>";
	echo $email ;
	echo "<br>";
	echo $exp ;
	echo "<br>";
	echo $lic ;
	echo "<br>";
	echo $time ;
	echo "<br>";
	echo $address ;
	echo "<br>";
	echo $age ; */
    
	
	$query = "INSERT INTO mdriver(id,firstname,lastname,DOB,password,phone_number,email,work_experience,licen_number,working_time,address,age)VALUE( 
	'{$id}' ,'{$fname}','{$lname}','{$dob}','{$pswd}','{$phn}','{$email}','{$exp}','{$lic}',$time,'{$address}',$age) " ;
			 	 
			 
	$result = mysqli_query($conn , $query );
	
	if($result){
		
		echo "User registration success!!!" ;
		
	}
	else
	{
	    echo mysqli_error($conn);
	}
	
	}
	
	//check entered data
	
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
     <title>Driver registration</title>
	 <link href="miulesi.css" rel="stylesheet" type="text/css"/>
</head>

    <script>
       alert("Driver registration form is loaded");
    </script>

<body id="body2">

<!----header----->
     <div id="one1">
         <div class="wrapper"> 
                 <img src="image/l.png" class="logo"/>
                 <nav>
                 <a href="../rashmi/index.php">Home</a>
                 <a href="about.html">About Us</a>
                 <a href="../imash/categoryindex.html">Vehicle Fleet</a>
                 <a href="../thushan/contact/contactus.html">Contact Us</a>
                 <a href="#">FAQ</a>
                 <a href="#" border="2px solid white" >Register</a>
                 <a href="../thushan/LoginAsandRegisterAS/loginAs.html">Login</a>
                 </nav>
         </div>
	 </div>
	 
	 
<!----driver registration part---->	 
<div id="one6">

    <div class = "container3">
   
    <!-----Registration form------->
   
       <form class = "form" method = "POST" action = "Dregister.php">
	   
	        <div class = "heading">
	            <h2 id = "h2">Driver's Registration form<h2>
		    </div>
		    
			<!-----1.code------->
		    <div class = "points">
		  
			     <lable for="id">1.Driver ID</lable>
	             <input type="text" name="id" placeholder ="DID5095220" required>
			   
		    </div>
			
		    <!-----2.firstname------->
		    <div class = "points">
		  
			    <lable for="name">2.First Name</lable>
	            <input type="text" name="fname" placeholder="Shamal" required>
	 
		    </div>
		    
			<!-----3.lastname------->
		    <div class = "points">
		  
			     <lable for="name">3.Last Name</lable>
	             <input type="text" name="lname" placeholder="Samarasekara" required>
	 
		    </div>
		    
			<!-----4.birthday-------->
		     <div class = "points">
		  
			     <lable for="date">4.Date of Birth</lable>
	             <input type="date" name="dob" placeholder ="19974/09/21" required>
			   
		     </div>
		    
			<!-----5.password------->
		    <div class = "points">
		  
			     <lable for="password">5.Password</lable>
	             <input type="password" name="pswd" placeholder ="password length is 10" required>
			   
		     </div> 

             <!-----6.phone number------>
		     <div class = "points">
		  
			     <lable for="number">6.Phone number</lable>
	             <input type="text" name="phn" placeholder="+9477332147" >
			   
		     </div>			 
		  
		    <!-----7.email------->
		    <div class = "points">
		  
			     <lable for="email">7.Email</lable>
	             <input type="email" name="email" placeholder ="shamal@gmail.com" required>
			   
		     </div>
		  
		    <!-----8.worked experiece------>
		     <div class = "points">
		  
			     <lable for="text">8.worked experiece</lable>
	             <input type="text" name="exp" placeholder="2 years" required>
			   
		     </div>
		  
		    <!-----9.licence------>
		     <div class = "points">
		  
			     <lable for="id">9.Licence Number</lable>
	             <input type="text" name="lic" placeholder ="B357808" required>
			   
		     </div> 
			 
			 <!-----10.Working time------>
		     <div class = "points">
		  
			     <lable for="text">10.Working time</lable>
	             <input type="number" name="time" placeholder="8" required>
			   
		     </div>
		  
		  
		     <!-----11.address------->
		     <div class = "points">
		  
			     <lable for="address">11.Address</lable>
			     <input type="text" name="address" placeholder = "N0:22,Temple road,Panadura" required >
			   
		     </div>
		  
		     <!-----12.age------->
		     <div class = "points">
		  
			     <lable for="number">12.Age</lable>
	             <input type="number" name="age" placeholder="47" min="1" max ="120" required>
			   
		     </div>
		  
		     <!-----button------>
		     <button name = "submit" class = "butn">Submit</button>
		    
		</form>

           <div class = "image">
		   <img src = "image/driver2.jpg" class = "img" alt = "driver" >
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