<?php

require 'src/db.php';
    
$db=connectMysql( $dsn, $dbuser, $dbpass);

    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
        if(isset($_POST['username']) && isset($_POST['email'])&& isset($_POST['password'])){

            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);

            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

            $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            
            $db=connectMysql( $dsn, $dbuser, $dbpass);

            if(reg($db,$username,$email,$password)){
                header('Location:?url=dashboard');
            }else{
                header('Location:?url=register');
            }
        
        
            
        }
    }