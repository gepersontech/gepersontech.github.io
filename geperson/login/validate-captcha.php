<?php
    include_once "process.php";

    function validate_captcha(){
        global $users;
        if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
                //include "db_config.php";
                $secret = '6LcDFWAfAAAAADZ-8my2NrH1c68crGwcCTU5Hr6V';
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
                $responseData = json_decode($verifyResponse);
                if ($responseData->success) {
                    
                    //first validate then insert in db
                    // $name = $_POST['name'];
                    // $email = $_POST['email'];
                    // $pass = $_POST['password'];
                    //mysqli_query($conn, "INSERT INTO signup(name, email ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . md5($_POST['password']) . "')");
                    pwdValidation($users, $_REQUEST['username'] , $_REQUEST['password']);
                    //echo "You login been successfully done!";
                }
        }
        
    }

    function validate_signup(){
        //global $users;
        
        if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
            //include "db_config.php";
            $secret = '6LcDFWAfAAAAADZ-8my2NrH1c68crGwcCTU5Hr6V';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {
                
                //addUser();
                //first validate then insert in db
                // $name = $_POST['name'];
                // $email = $_POST['email'];
                // $pass = $_POST['password'];
                //mysqli_query($conn, "INSERT INTO signup(name, email ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . md5($_POST['password']) . "')");
                header ("Location: adminpage.php");
                //echo "You login been successfully done!";
            }
        }
    }

    

?>