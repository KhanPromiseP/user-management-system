<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT id, username, email, bio, gender, password FROM users WHERE id = ?');
$stmt->execute([$id]);
$user = $stmt->fetch();

echo
"<p><strong>ID:</strong>{$user['id']}</p>
<p><strong>Name:</strong>{$user['username']}</p>
<p><strong>Email:</strong>{$user['email']}</p>
<p><strong>Bio:</strong>{$user['bio']}</p>
<p><strong>Gender:</strong>{$user['gender']}</p>
<p><strong>Password:</strong>{$user['password']}
<p>";


    echo '
<p>Click <a href="veiwUsers.html.php">here</a> to go back to users list </p>';
echo '<p>Click <a href="createUserForm.html">here</a> to create a new user</p>';
?>