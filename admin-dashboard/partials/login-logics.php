<?php
        $admin = false;
    session_start();
    if(isset($_POST["user"])){
        $_SESSION['user_name'] = $_POST["user"];
        // Redirect to login page
        header("Location: login.php");
        exit();
    }
    
    // Check if the session variable is set and user is admin
    if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == "admin") {
        $admin = true;
        header("Location: ../admin-dashboard/book-issue.php");
        exit();
    } 
?>