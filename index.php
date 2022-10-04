<?php

try{
    $db=new PDO('mysql:host=localhost;dbname=demoDB','demoDB','linuxlinux');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);

}catch(PDOExcepttion $e){
    echo $e->getMessage();
};
//          Querys
$stmt = $db->query("SELECT * FROM users");

$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($rows as $user){
    echo $user->username.'<br>';
}
//$user1=$rows[0];
//echo $user1->username;

$stmt = $db->query("SELECT * FROM users=${username}");
