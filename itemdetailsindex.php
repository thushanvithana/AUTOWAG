<?php 
 
 if(isset($_GET['id'])){

    

        $id=preg_replace('#[^0-9]#i','',$_GET['id']);
        require_once("config.php");
        $query="select* from vehicle_fleet where id='$id'";
        $query_run=mysqli_query($con,$query);
        $check_data=mysqli_num_rows($query_run)>0;
        $row=mysqli_fetch_assoc($query_run);
 
 }
 
 ?>







<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="itemdetailsstyle.css">
    </head>

    <body>


    <section class="navsection">
            <header>
                <div class="wrapper"> 
                <div class="logo">
                  <img src="image/logo.png" alt="logo" >
                </div>
                 <nav>
                  <a href="#">Home</a>
                  <a href="#">About Us</a>
                  <a href="categoryindex.php">Vehicle Fleet</a>
                  <a href="#">Contact Us</a>
                  <a href="#">FAQ</a>
                  <a href="#" border="2px solid white" >Register</a>
                  <a href="#">Login</a>
                 </nav>
                </div>
            </header>
        </section>

        <section class="item_content">

            <div class="containerr">
                <div class="image_contain">
                    <img src="image/<?php echo $row['detail_image'];?>">
                </div>


                <div class="content_contain">
                    <div class="dynamic_details">
                        <h2><?php echo $row['vehicle_name'];?></h2>
                        <br>
                        <hr>
                       <div class="data">
                        <h3>Description</h3>
                        
                        <p><?php echo $row['description'];?></p>
                       
                       
                       
                       <br>
                       <hr>
                       
                        <h3>Facilities</h3>
                            <h4>Fuel Type        : <?php echo $row['fule_type'];?></h4>
                            <h4>No of passengers : <?php echo $row['no_of_passenger'];?></h4>
                            <h4>Engine Capacity  : <?php echo $row['engine_capacity'];?></h4>
                            <h4>Transmission     : <?php echo $row['transmission'];?></h4>
                            <h4>No of Doors      : <?php echo $row['no_of_doors'];?></h4>
                            <h4>Air Condition    : <?php echo $row['Air Condition'];?></h4>
                       
                       <hr>

                      </div>

                      <button>Make a Resevation</button>
                    </div>
                    
                </div>
            </div>



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