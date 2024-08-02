<?php
include 'db.php';

$stmt = $pdo->query('SELECT id, username FROM users');
$rows = $stmt->fetchAll();

foreach ($rows as $row) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>
            <a href='userDetails.html.php?id={$row['id']}'>View</a> 
            <a href='updateUserForm.html.php?updateid={$row['id']}'>Edit</a>
            <a href='deleteUser.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
          </tr>";
}
?>