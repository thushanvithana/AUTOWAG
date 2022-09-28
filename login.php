<?php require_once('inc/connection.php')  ?>

<?php
if (isset($_POST['submit'])) {
  $error = array();

  if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
    $error[] = 'Username is Missing / invalid';
  }
  if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
    $error[] = 'Password is Missing / invalid';
  }

  if(empty($error)){
    $email = mysqli_real_escape_string($connection,$_POST['email'] );
    $password = mysqli_real_escape_string($connection,$_POST['password'] );

    $query = "SELECT * FROM admin WHERE username = '{$email}' AND password = '{$password}' LIMIT 1";

    $result_set = mysqli_query($connection,$query);

    if($result_set){
      if(mysqli_num_rows($result_set)==1){

        $user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['first_name'] = $user['name'];
          
        header('Location:admin_panel.php');
      }else{
        $error[] = 'Invalid username / password';
      }
    }else{
      $error[] = 'Database query failed';
    }
    
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>ADMIN_LOGIN</title>
  <style>
    body {

      margin: 0;
      padding: 0;
      background: url(images/login_bg11.jpg);
      background-size: cover;
      background-position: center;
      font-family: sans-serif;

    }
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

//---------------------------------//
<script>
function fun() {
alert("Login Success!!");
}
</script>
//--------------------------------//


<body>
  <div class="loginbox">
    <h1>Login Here</h1><br><br><br><br>

   

    <form action="login.php" method="post">
      <p>Username :</p>
      <input type="text" name="email" id="" placeholder="Enter Username Here">
      <br><br>
      <p>Password :</p>
      <input type="password" name="password" id="" placeholder="Enter Password Here">
      <br><br><br><br>
 
      <input type="submit" name="submit" value="Login" onclick="fun()"/>
    

      <br>
      <?php 
      if(isset($error) && !empty($error)){
        echo '<p class="error"> Invalid username or password </p>';
      }
    ?>
    </form>
  </div>
</body>

</html>

<?php mysqli_close($connection) ?>