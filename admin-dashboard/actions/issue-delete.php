<?php
include "../config.php";
$id = $_GET['id'];

$qur = "DELETE FROM  student_issue_detail WHERE id = $id";
$result_delet = $conn->query($qur);


header('location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/book-issue.php');

?>