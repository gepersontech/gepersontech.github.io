<?php
  include "try.php";
  if(!isset($_SESSION)){
    session_start();
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="register-style.css">

</head>
<body>
<?php
  include "includes/nav.php";
  
  if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    echo validate($user, $pass);
  }
?>
<br>
<br>

<form action="login.php" method="post">
  <div class="register-container">
    <h1>Login</h1>
    <p class="h4">Please fill in this form to sign in.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    
    <button type="submit" class="registerbtn" name="login">Login</button>
  </div>
  <?php
      $user = $_POST['username'];
      $pass = $_POST['password'];
      if($isset($user)){
        if(validate($user, $pass){
          echo header("Location: home.php");
        } if((validate($user,$pass){
          echo header("Location: login.php");
        }
      }
    
  ?>
  <div class="register-container signin">
    <p>Don't have an account? <a href="register.php">Create new</a>. </p>
    <p>Forgot password? <a href="#">Click here</a>.</p>
    
  </div>
</form>
<br>
<br>
<br>
<br>
<?php
  include "includes/footer.php"
?>