<?php
$bdserver = 'localhost';
$dbname = 'user_management_system';
$user_name = 'root';
$pass = '';

try{
   
    $pdo = new PDO("mysql:host=localhost; dbname=user_management_system; charset=utf8", $user_name, $pass) or die('con not connect!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'conected!';
}
catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
}