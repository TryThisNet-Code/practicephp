<?php
    session_start();
    session_unset();
    session_destroy();

    echo '<script>alert("Logging out");</script>';

    header("Location: index.php");
    exit;
?>