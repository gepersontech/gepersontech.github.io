<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'your_site_key'
        });
      };
    </script> -->
</head>
<body>
    <?php
        include_once "validate-captcha.php";
        
        if(isset($_COOKIE["CurrentUser"])){
            header ("Location: home.php"); //if cookie is available redirect to home page
        }
    ?>
    <center>
        <br>
        <br>
        <br>
        <br>
        <form action="index.php" method="post">
            <label for="" >Username</label>
            <input type="text" name="username"  required> <br> <br>
            <label for="">Password</label>
            <input type="password" name="password" required> <br>
            <div class="g-recaptcha" data-sitekey="6LcDFWAfAAAAAFSBTUionna4XDiBX0is4CNid2s9"></div> <br>
            <input type="submit" name="submit" value="submit">
            <button type="signup"><a href="register.php">Sign up</a></button>
        </form>
        <br>
        <?php
            if(isset($_POST['submit'])){
                validate_captcha();
            }else{
                echo "<br>";
            }
        ?>
    </center>
</body>
</html>