<?php

    function connectMysql(string $dsn,string $dbuser,string $dbpass){
        try{
            $db = new PDO($dsn, $dbuser, $dbpass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die( $e->getMessage());
        }
        return $db;

    }

    /**
     * @param string $db
     * @param string $email
     * @param string $password
     * @return boolean
     * 
     *      */

    function auth(PDO $db, string $mail, string $password):bool{
        
        
        $stmt=$db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
        $res=$stmt->execute([':email'=>$mail]);
        if($stmt->rowCount()==1){
            $user=$stmt->fetchALL()[0];
            if(password_verify($password,$user->password)){
                $_SESSION['user']=$user;
                return true;
            }
            //return true;
        }
        return false;
    }

    function reg($db,string $username, string $email, string $password):bool{
        $stmt=$db->prepare("INSERT INTO users(username,email,password) VALUES(:username,:email,:passwd) LIMIT 1");
        $crypt=password_hash($password,PASSWORD_BCRYPT,['cost'=>'4']);
        
        if($stmt->execute([':username'=>$username,':email'=>$email,':passwd'=>$crypt])){
            return true;
        }else{
            return false;
        }
        
    }
    