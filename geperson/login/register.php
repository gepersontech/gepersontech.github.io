<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Register</title>
</head>
<body>
    <?php
        include_once "validate-captcha.php";

        
    ?>
    <center>
        <form action="register.php" method="post">
            <label for="">Username</label><br>
            <input type="text" name="username" required> <br> 
            <label for="">Password</label><br>
            <input type="password" name="password" required> <br>
            <label for="">Repeat Password</label><br>
            <input type="password" name="repeat-password" required> <br>
            <?php 
                if(isset($_REQUEST['repeat-password'])){
                        if($_REQUEST['repeat-password'] != $_REQUEST['password']){
                            echo "Password not matched! <br>";
                        }                    
                }
            ?>
            <label for="">Name</label><br>
            <input type="text" name="name" required> <br>
            <label for="">Email</label><br>
            <input type="email" name="email" required> <br>
            <label for="designation"><b>Designation</b></label> <br>
                <select name="designation" id="designation">
                <option >Select</option>
                <option value="Admin">Admin</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
                </select> <br> <br>
            <!-- <div class="g-recaptcha" data-sitekey="6LcDFWAfAAAAAFSBTUionna4XDiBX0is4CNid2s9"></div> <br> -->
            <input type="submit" name="submit" value="Submit">
            <?php
                if(isset($_REQUEST['submit'])){
                    $name = ucwords($_POST['name'], " \t\r\n\f\v'");
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $designation = $_POST['designation'];
                    addUser($name,$username, $email, $password, $designation);
                }
                
            ?>
        </form>
    </center>
    
    
</body>
</html>