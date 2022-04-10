<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>Home Page</h1> <br>

    <?php
        if(!isset($_COOKIE["CurrentUser"])){
            header ("Location: index.php");
        }else{
            echo "Hello " .$_COOKIE["CurrentUser"]."!";
        }
        
    ?>
    <a href="adminpage.php">View Users</a>
</body>
</html>