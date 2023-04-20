<?php

// Initialize variables
$admin = false;
$user = false;
$show_login_error= false;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["user"];
    $password = $_POST["pass"];

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $conn->prepare("SELECT * FROM user_0970 WHERE USER_NAME = ? AND PASSWORD_1 = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if ($result->num_rows == 1) {
        $user = true;
        // Redirect the user to the admin dashboard
        header("Location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/inventry.php");
        exit();
    } 
    if ($_SESSION['user_name'] == "admin" &&  $_SESSION['password'] == "password") {
        header("Location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/book-issue.php");
        exit();
       
    } 
}
if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == "admin"  && isset($_SESSION['password']) && $_SESSION['password'] == "password") {
    $admin = true;
}


?>
