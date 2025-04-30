<?php
    $db_server = "localhost";
    $db_host = "root";
    $db_pass = "";
    $db_name = "studentinfo_db";

    try{
        $conn = mysqli_connect($db_server, $db_host, $db_pass, $db_name);
    }catch(mysqli_sql_exception){
        echo '<script> alert("Unable to connect");</script>';
    }
?>