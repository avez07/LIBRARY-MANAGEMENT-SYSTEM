<?php
                           $showalert = false;
                           if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                               
                               $name = $_POST["name"];
                               $email_id = $_POST["email"];
                               $username = $_POST["user"];
                               $pass = $_POST["pass1"];
                               $c_pass = $_POST["pass2"];
                              

                               

                               $conn -> query("CREATE TABLE IF NOT EXISTS user_0970(
                                    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                                 STUDENT_NAME varchar(30) NOT NULL,
                                 EMAIL_ID VARCHAR(40) NOT NUll,
                                  USER_NAME VARCHAR(20) NOT NUll,
                                  PASSWORD_1 varchar(20) NOT NUll,
                                   CONFIRM_PASSWORD varchar(20) NOT NULL,
                                   DATE_TIME DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
                                      );");

                               $result = $conn -> query("INSERT INTO user_0970(STUDENT_NAME , EMAIL_ID , USER_NAME , PASSWORD_1 ,CONFIRM_PASSWORD) VALUES ( '$name', '$email_id', '$username', '$pass', '$c_pass')");
                              
                              
                               if (!$result) {
                                   die("Error preparing SQL statement: " .$conn -> error);
                               } else{
                                $showalert = true;
                               }
                               
                               header("location: ../admin-dashboard/signup.php");
                               
                               
                               
                           };
                          
                       ?>
