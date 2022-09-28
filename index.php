 <?php 
 
 if(isset($_GET['id'])){

   

        $id=preg_replace('#[^0-9]#i','',$_GET['id']);
        require_once("config.php");
        $query="select* from vehicle_fleet where category_id='$id'";
        $query_run=mysqli_query($con,$query);
        $check_data=mysqli_num_rows($query_run)>0;
        
 
 }
 
 ?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--Navigation bar-->
        <section class="navsection">
            <header>
                <div class="wrapper"> 
                <div class="logo">
                  <img src="image/logo.png" alt="logo" >
                </div>
                 <nav>
                  <a href="#">Home</a>
                  <a href="#">About Us</a>
                  <a href="categoryindex.html">Vehicle Fleet</a>
                  <a href="#">Contact Us</a>
                  <a href="#">FAQ</a>
                  <a href="#" border="2px solid white" >Register</a>
                  <a href="#">Login</a>
                 </nav>
                </div>
            </header>
        </section>


        <section class="hero_sec_img">

            <img src="image/hero.png" alt="heroimage">

            <div class="heroline">
                <h1>Your safety is our <br>responsibility</h1>
                <p>We provide you with the highest quality <br>vehicles to keep your traffic safe and fast.</p>
            </div>
        </section>

        <section>


                            <?php 

                            if($check_data){
                        
                        

                        while($row=mysqli_fetch_assoc($query_run))
                        {

                                

                        ?>
                    
                                <div class="box">
                                    <div class="image">
                                        <img src="image/<?php echo $row['fleet_image']; ?>" alt="car image">
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $row['vehicle_name']; ?></h3> 
                                        <button><a href="itemdetailsindex.php?id=<?php echo $row['id']; ?>">More Details</a></button>  

                                    </div>
                                </div>
                    
                       <?php 
                        
                        }
                    }

                    else{
                        echo "no item found";
                    }
                    
                    ?>
        </section>





        <selction class="footer111">
            <footer class="footer">
                <div class="container">
                   <div class="row">
                      <div class="footer-col">
                         <h4>SERVICES</h4>
                          <ul>
                              <li><a href="#">About Us</a></li>
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
                              <li>Galle road,Colombo,SriLanka.</li>
                              <li>+94 11 4178526</li>
                              <li>+94 78 9873024</li>
                              <li><a href="#">info@AUTOWAG.com</a></li>
                          </ul>
                      </div>
                      <div class="footer-col">
                          <h4>FOLLOW US</h4>
                              <div class="social-links">
                               <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                               <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                              
                        </div>
                       </div>
                     </div>
                 </div>
             </footer>
          </selction>
    
    </body>
</html>