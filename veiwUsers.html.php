<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Users List</h1>
    <h4> Click <a href="createUserForm.html"> here</a> to create a new user </h4>
    <table id="users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'readUsers.php';
            ?>
        </tbody>

    </table>

</body>

</html>