<?php
    include("database.php");

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    $sql = "SELECT * FROM student_tbl 
            WHERE name ='$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result)>0){
        session_start();

        $_SESSION['username'] = $username;
        echo '<script>alert("Welcome '. $username .'"); window.location = "admin.php"</script>';
    }else{
        echo '<script>alert("Invalid email or password"); window.location= "index.php"</script>';
    }

    $conn->close();
?>