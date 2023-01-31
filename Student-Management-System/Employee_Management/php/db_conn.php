<?php
/**
 * filename: register.php
 * description: register a  new user
 */
    $pdo = require "config.php";
    $message="";

    if(isset($_POST['login'])) {
     
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if( empty($username) || empty($password)) {
            $message = "<label class=\"text-danger\">"."All fields are required"."</label>";
        }
        // query to database after submit button, insert the data
        else{
            $sql = 'insert into login (username, password) values(?,?)';
        $result = $pdo->prepare($sql);
        $result->execute([$username, $password]);
         }
    }else{

        
    }
        
    
?>