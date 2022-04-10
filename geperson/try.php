<?php
    $data = array(
        array("Username"=>"admin","Password"=>"admin")
    );
    function setAddUser($name, $username, $email, $password, $designation, $gender, $sec_question, $sec_answer){
            
            $users = array("Name" => $name, "Username" => $username, "Email" => $email, "Password" => $password,
            "Designation" => $designation, "Gender" => $gender, "Sec-Question" => $sec_question, "Sec-Answer" => $sec_answer);
            
            array_push($GLOBALS['data'],$users);
    }
    
    function printUser(){
        print_r($GLOBALS['data']);
    }

    function validate($username, $password){
        $user = $GLOBALS['data'];
        for ($row = 0; $row <= count($user); $row++) {
            if($user[$row]['Username'] == $username AND $user[$row]['Password'] == $password){
                // $msg1 = "Welcome ". $username ." !";   
                // $msg2 = "Login Successful";
                $isCorrect = true;
                break;
            }if($user[$row]['Username'] != $username AND $user[$row]['Password'] == $password){
                // $msg1 = "Username does not exist";
                // $msg2 = "Login Failed";
                $isCorrect = false;
                break;
            }if($user[$row]['Password'] != $password AND $user[$row]['Username'] == $username){
                // $msg1 = "Access Denied";
                // $msg2 = "Login Failed";
                $isCorrect = false;
                break;
            }
                
        }
        return $isCorrect;
    }
    

?>