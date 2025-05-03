<?php
    include("database.php");
    session_start();

    if(isset($_SESSION['username'])){
        header("Location: admin.php");
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Enter username" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <br>
            <button name="enterBtn">Enter</button>
            <p>Don't have an account? Register <br><a href="registerpage.php">here</a></p>
        </form>
    </div>
</body>
</html>