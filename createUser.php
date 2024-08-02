<?php
    include 'db.php';

    if(($_SERVER['REQUEST_METHOD']) == "POST"){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];
    $password  = $_POST['password'];
    
        $sql = 'INSERT INTO users(username, email, bio, gender, password) VALUES (?,?,?,?,?)';
        $stmt = $pdo->prepare($sql); 
        $user=$stmt->execute([$username, $email, $bio, $gender, $password ]);
        if ($user) {
            header('Location: veiwUsers.html.php');
        }
        else {
            echo "<br>connection error!";
        }
    }
    else{
        echo 'Form not post!';
    }
   