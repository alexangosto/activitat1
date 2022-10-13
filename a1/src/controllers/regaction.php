<?php

require 'src/db.php';
    
    $db=connectMysql($dsn,$dbuser,$dbpass);
    
    
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['username'])){
        if(isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['username'])){

            $email=$_REQUEST['email'];

            $password=$_REQUEST['password'];

            $username=$_REQUEST['username'];

            if(reg($db,$email,$password,username)){
                header('Location:?url=dashboard');
            }
                header('Location:?url=home');
            
        }
    }