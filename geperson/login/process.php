<?php 

    $users = array(
        array("Username" => 'admin', "Password" => 'admin'),
        array("Username" => 'user', "Password" => 'user'),
        array("Username" => 'geperson', "Password" => 'geperson1')
    );
    
    // array_push($users,"Name" => $name, "Username" => $username, "Email" => $email,
    // "Password" => $password, "Designation" => $designation, "Gender" => $gender,
    // "Sec-Question" => $sec_question, "Sec-Answer" => $sec_answer);
   
        function addUser($name,$username, $email, $password, $designation){
            global $users;
            $users [] = array("Name" => $name, "Username" => $username, "Email" => $email,
                "Password" => $password, "Designation" => $designation);
                
            echo "<pre>";
                print_r($users);
            echo "</pre>";
            //array_push($users,$input);
            //global $users;
        }

        function pwdValidation($users, $usernameInput, $passwordInput) {
        global $users;
        for ($row = 0; $row <= count($users); $row++) {
            if($users[$row]['Username'] === $usernameInput AND $users[$row]['Password'] === $passwordInput){
                // echo $msg1 = "Welcome ". $usernameInput ." ! <br>";   
                // echo $msg2 = "Login Successful";
                setcookie("CurrentUser", $_REQUEST['username'], time() + 60, "/"); //it's expire after 1 min
                header ("Location: home.php");
                break;
             }if($users[$row]['Username'] != $usernameInput AND $users[$row]['Password'] == $passwordInput){
              echo $msg1 = "Username does not exist <br>";
              echo $msg2 = "Login Failed";
                break;
             }if($users[$row]['Password'] != $passwordInput AND $users[$row]['Username'] == $usernameInput){
                echo $msg1 = "Access Denied <br>";
                echo $msg2 = "Login Failed";
                 break;
             }if($users[$row]['Password'] != $passwordInput AND $users[$row]['Username'] != $usernameInput){
                echo $msg1 = "No registered user <br>";
                //echo $msg2 = "Login Failed";
                 break;
            }
        }

    }

    function display_user(){
        global $users;
        echo "<table>";
        foreach($users as $key=>$row) {
            echo "<tr>";
            foreach($row as $key2=>$row2){
                echo "<td>" . $row2 . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
          
 ?> 