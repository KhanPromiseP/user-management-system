<?php
    include 'db.php';
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM users WHERE id = ".$id;
   
    $result =$pdo->query($sql);
    $row = $result->fetch();
    $username = $row['username'];
    $email = $row['email'];
    $bio = $row['bio'];
    $gender = $row['gender'];
    $password = $row['password'];
    

    if(isset($_POST['submit'] )){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];


$stmt = $pdo->prepare('UPDATE users SET id=$id, username= $username, email=$email, bio=$bio, gender=$gender, password=$password WHERE id=$id');
$result=$stmt ->execute(  array( 'id' => $id, 'username' => $username, 'email' => $email, 'bio' => $bio, 'gender' => $gender, 'password' => $password ) );
if($result){
echo '<p>User at id=' ." ". $_POST['id'] ." ". 'successfully updated!</p><br>';

}else{ echo '< p>User at id is invalid or missing!</p><br>';}   
    }
     

   


   