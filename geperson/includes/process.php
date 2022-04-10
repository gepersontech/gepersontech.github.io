<?php

    $data = array();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $designation = $_POST['designation'];
    $gender = $_POST['gender'];
    $sec_question = $_POST['sec-question'];
    $sec_answer = $_POST['sec-answer'];
    $datas = ["Name" => $name, "Username" => $username, "Email" => $email, "Password" => $password, "Designation" => $designation];
    array_push($data,$datas);
    print_r($data);

    function setUser($name, $username, $email, $password, $designation, $gender, $sec_question, $sec_answer){
        array_push($GLOBALS['data'], "Name"=> $name, $username, $email, $password, $designation, $gender, $sec_question, $sec_answer);
    }

    function isPasswordMatched($password, $repeatpassword){
        if(!$password == $repeatpassword){
            $passError = "Password not Match!";
        }
        return  $passError;
    }
    function getUser($username, $password){
        $users = array(
            array("Username"=>"admin","Password"=>"admin"),
            array("Username"=>"geperson","Password"=>"12345"),
            array("Username"=>"user","Password"=>"user"),
            array("Username"=>"guest","Password"=>"guest"),
            array("Username"=>"superadmin","Password"=>"admsuperadmin")
        );
        
        for ($row = 0; $row <= count($users); $row++) {
            if($users[$row]['Username'] == $username AND $users[$row]['Password'] == $password){
                return $msg1 = "Welcome ". $username ." !";   
                return $msg2 = "Login Successful";
                break;
                }if($users[$row]['Username'] != $username AND $users[$row]['Password'] == $password){
                    return $msg1 = "Username does not exist";
                    return $msg2 = "Login Failed";
                    break;
                }if($users[$row]['Password'] != $password AND $users[$row]['Username'] == $username){
                    return $msg1 = "Access Denied";
                    return $msg2 = "Login Failed";
                    break;
                }
        }
    }
        

?>