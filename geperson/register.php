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
  include "try.php";
?>
<br>
<br>


  <div class="register-container">
  <form action="register.php" method="post">
    <h1>Register</h1>
    <p class="h4">Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <label for="designation"><b>Designation</b></label>
    <input type="text" placeholder="Designation" name="designation" id="designation" required>

    <label for="gender"><b>Gender</b></label>
    <select name="gender" id="gender">
      <option ></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label for="sec-question"><b>Security Question</b></label>
    <select name="sec-question" id="sec-question">
      <option ></option>
      <option value="In what city were you born?">In what city were you born?</option>
      <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
      <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
      <option value="What high school did you attend?">What high school did you attend?</option>
      <option value="What is the name of your first school?">What is the name of your first school?</option>
      <option value="What was the make of your first car?">What was the make of your first car?</option>
      <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
    </select>
    <label for="sec-answer"><b>Answer</b></label>
    <input type="text" placeholder="Answer" name="sec-answer" id="sec-answer" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  </form>

  <?php
    if(isset($_POST['name'])){
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $designation = $_POST['designation'];
            $gender = $_POST['gender'];
            $sec_question = $_POST['sec-question'];
            $sec_answer = $_POST['sec-answer'];
      setAddUser($name, $username, $email, $password, $designation, $gender, $sec_question, $sec_answer);
      header("Location: login.php");
    }
  ?>

  <div class="register-container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  <br>
  <br>
  <br>


<?php
  include "includes/footer.php"
?>