<?php
include "../config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // change variable names to match input names in the HTML form
  $p_name = $_POST["video-titlle"];
  $n_title = $_POST["note-titlle"];
  $video = $_FILES["video"];
  $note = $_FILES["note"];
  $thumbnail = $_FILES["tambnail"];
  $description = $_POST["description"];

  $video_name = $_FILES["video"]["name"];
  $video_size = $_FILES["video"]["size"];
  $video_tmp_name = $_FILES["video"]["tmp_name"];
  $video_error = $_FILES["video"]["error"];

  if ($video_error === 0) {
    $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
    $video_ex_lc = strtolower($video_ex);
    $video_exs = array("jpg", "jpeg", "png");
  
    if (in_array($video_ex_lc , $video_exs)) {
        $new_video_name = uniqid("VID-", true).'.'.$video_ex;
        $video_uploading_path = '../video-upload/'.$new_video_name;
        move_uploaded_file($video_tmp_name, $video_uploading_path);
    } else {
        echo "Invalid video format. Please upload a video in mp4, avi, or mov format.";
    }
  } 

 



    // create the table only once, outside the POST request
    $conn->query("CREATE TABLE IF NOT EXISTS OperatingSystems (
                    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                    PracticalName varchar(30) NOT NULL,
                    NoteTitle VARCHAR(20) NOT NULL,
                    Video varchar(100)NOT NULL,
                    Note varchar(50) NOT NULL,
                    Thumbnail varchar(30) NOT NULL,
                    Description_ varchar(250) NOT NULL
                );");

    // prepare the SQL statement with placeholders (?)
    $query_template = $conn->prepare("INSERT INTO OperatingSystems (PracticalName, NoteTitle, Video) VALUES (?, ?, ?)");
    if (!$query_template) {
        die("Error preparing SQL statement: " . $conn->error);
    } 
    // bind the values to the prepared statement and execute it
    $result = $query_template->bind_param('sss', $p_name, $n_title, $new_video_name);
    if (!$result) {
        die("Error binding values to SQL statement: " . $query_template->error);
    }

    if (!$query_template->execute()) {
        die("Error executing SQL statement: " . $query_template->error);
    }

    // redirect to the specified page after successful insertion
    header("Location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/sem1.subject1.php");
    exit();
    }

?>
