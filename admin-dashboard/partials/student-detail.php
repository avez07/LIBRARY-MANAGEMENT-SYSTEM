<?php
                           
                           if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                               
                               $s_name = $_POST["student-name"];
                               $s_id = $_POST["student-id"];
                               $s_phone = $_POST["student-phone"];
                               $s_addr = $_POST["student-addr"];
                               $b_name = $_POST["book-name"];
                               $b_id = $_POST["book-id"];
                               $i_date = $_POST["issu-date"];
                               $r_date = $_POST["ret-date"];

                               

                               $conn -> query("CREATE TABLE IF NOT EXISTS student_issue_detail(
                                    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                                STUDENT_NAME varchar(30) NOT NULL,
                                 STUDENT_ID INT NOT NUll,
                                  STUDENT_PHONE INT NOT NUll,
                                  STUDENT_ADDR varchar(60) NOT NUll,
                                   BOOK_NAME varchar(30) NOT NULL,
                                    BOOK_ID INT NOT NUll,
                                     ISSUE DATE NOT NULL,
                                      RETURN_ DATE NOT NULL 
                                      );");

                               $query_template = $conn -> prepare("INSERT INTO student_issue_detail (STUDENT_NAME , STUDENT_ID , STUDENT_PHONE , STUDENT_ADDR , BOOK_NAME , BOOK_ID , ISSUE , RETURN_) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
                               if (!$query_template) {
                                   die("Error preparing SQL statement: " . $conn->error);
                               }
                               $result = $query_template -> bind_param('siississ',$s_name, $s_id, $s_phone, $s_addr, $b_name, $b_id, $i_date, $r_date);
                              
                               if (!$result) {
                                   die("Error preparing SQL statement: " . $query_template->error);
                               }else {
                                $query_template -> execute();
                              
                               }
                              
                               
                               
                               
                           };
                          
                       ?>
