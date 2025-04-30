<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Enter username" required>
            <input type="email" name="email" placeholder="Enter email" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <button name="subBtn">Submit</button>
            <p>Already have an account? login <a href="index.php">here</a></p>
        </form>
    </div>
</body>
</html>