<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('./updateUser.php')?>
    <div class="form-container">
        <h1>Update User Info</h1>
        <form id="user-form" action="updateUser.php" method="POST">

            <input type="hidden" name="id" required><br>
            <label for="username">Name:</label><br>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <label for="bio">Bio:</label><br>
            <textarea type="text" id="bio" name="bio" value="<?php echo $bio ?>"></textarea><br><br>
            <label for="gender">Gender:</label><br>
            <input type="radio" name="gender" value="male">
            Male
            <input type="radio" name="gender" value="female">
            Female
            <input type="radio" name="gender" value="others">
            others
            <br><br>
            <input type="submit" value="Update" name=update>
        </form>
    </div>

</body>

</html>