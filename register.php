<?php
    include("database.php");

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(isset($_POST["subBtn"])){
        if($username && $email && $password){
            
            // $hashpass = password_hash($password, PASSWORD_DEFAULT);
        
            $sql = "INSERT INTO student_tbl(name, email, pass) 
                    VALUES ('$username','$email','$$password')";
    
            try{
                $conn->query($sql);
                echo '<script>alert("Registration Successful"); window.location="index.php";</script>';
            }catch(mysqli_sql_exception $e){
                if($e->getCode() == 1062){
                    echo '<script>alert("Error Occurred: ' . $e->getMessage() . '"); window.location.href = "registerpage.php";</script>';
                }
            }

        }
    }else{
        echo '<script>alert("Error Occured, Please try again");</script>"';
    }
    
    $conn->close();
?>