<?php
    include "try.php";
    
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
      
    }
  

        echo '<table border="2">';
        echo '<tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Designation</th>
                <th>Gender</th>
                <th>Security Question</th>
                <th>Answer</th>
        </tr>';
        foreach( $data as $datas )
        {
            echo '<tr>';
            foreach( $datas as $key )
            {
                echo '<td>'.$key.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    

?>