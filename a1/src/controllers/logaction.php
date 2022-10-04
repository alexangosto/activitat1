<?php

require 'src/db.php';

    $db=connectMysql($dsn,$dbuser,$dbpass);
    var_dump($db);
   // $db=null;
   // var_dump($db);
    die();
    if(!empty($_POST['mail'])&& !empaty($_POST['password'])){
        if(isset($_POST['mail'])&& isset($_POST['password'])){
            $mail=$_REQUEST['mail'];
            $password=$_REQUEST['password'];
            echo $mail;
            echo $password;
        }
    }