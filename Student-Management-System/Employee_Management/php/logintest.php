<?php

$pdo = require "config.php";


if(isset($_POST['name']) && isset($_POST['password'])) {
     
    $username = $_POST["name"];
    $password = $_POST["password"];
    
    if( empty($username) || empty($password)) {
        $message = "<label class=\"text-danger\">"."All fields are required"."</label>";
        echo $message;
    }
    // query to database after submit button, insert the data
    else{
       
        $sql = "SELECT * FROM login WHERE username = '".$username."'";
        //$sql = $query = "SELECT width FROM modules WHERE code = '{$module}'";

        $result = $conn->prepare($sql);
        $result->execute();
        $count = $result->rowCount();
        if($count>0){
            

            if($username =='admin'){
               include 'admin.php';

            }else{
                include "user.php";

            }
           
        //    admin page should display admin id por name

         include '../includes/footer.php';

        }else{

            echo "check credentials" ;
        }
    
     }
}else{

    echo "NULL lnsalnalnlsan";
}



?> 