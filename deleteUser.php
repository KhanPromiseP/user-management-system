<?php
    include 'db.php';
    if(isset($_GET['id'])){
       $id = $_GET['id'];
   
    try{
    $sql = 'DELETE FROM users WHERE id=?';
    $stmt=$pdo->prepare($sql); 
    $stmt->execute([$id]);
    header('Location:veiwUsers.html.php');
    }
    catch(PDOException $e){
        echo 'Error:' . $e->getMessage();
    }
    }
    else{
        echo 'No user ID found!';
    }
   

    