<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="shortcut icon" href="/All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<?php
ob_start();
include "../config.php";
$id = $_GET['id'];
$sn = $_GET['sn'];
$si = $_GET['st'];
$sp = $_GET['sp'];
$sa = $_GET['sa'];
$bn = $_GET['bn'];
$bi = $_GET['bi'];
$isd = $_GET['isd'];
$rd = $_GET['rd'];
?>

<script>
     function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `UPDATE` This Record")) {
          return true;

        } else {
            return false;
        }
    }
</script>

    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="width">
                    <div style="text-align: center;">
                        <img src="/All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/images/book.png" class="img-fluid " alt="...">
                    </div>

                    <form class="signup-form" method="post" onsubmit="return alert_msg()" >
                        <div class="borders">
                            <p class="head">Update</p>
                            <div class="row">
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Student Name</label>
                                    <input type="text" class="sign form-input" name="student-name" id="s-name1"
                                        value="<?php echo "$sn" ?>" placeholder="Enter the student name">
                                    <span class="fw-semibold text-danger" id="s-name"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Student id</label>
                                    <input type="text" class="sign form-input" id="s-id1" name="student-id"
                                        placeholder="Enter the student id"  value="<?php echo "$si" ?>">
                                    <span class="fw-semibold text-danger" style="text-transform: none;"
                                        id="s-id"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Phone</label>
                                    <input type="text" class="sign form-input"  value="<?php echo "$sp" ?>" id="s-num1" name="student-phone"
                                        placeholder="Enter student phone number">
                                    <span class="fw-semibold text-danger" id="s-num"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Address</label>
                                    <input type="text" class="sign form-input"  value="<?php echo "$sa" ?>" id="s-add1" name="student-addr"
                                        placeholder="Enter the student address">
                                    <span class="fw-semibold text-danger" id="s-add"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Book</label>
                                    <input type="text" class="sign form-input"  value="<?php echo "$bn" ?>" id="b-name1" name="book-name"
                                        placeholder="Enter the book name">
                                    <span class="fw-semibold text-danger" id="b-name"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Book id</label>
                                    <input type="text" class="sign form-input"  value="<?php echo "$bi" ?>" id="b-id1" name="book-id"
                                        placeholder="Enter the book id">
                                    <span class="fw-semibold text-danger" id="b-id"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Issued date</label>
                                    <input type="date" class="sign form-input text-uppercase"  value="<?php echo "$isd" ?>" name="issu-date"
                                        id="issu1">
                                    <span class="fw-semibold text-danger" id="issu"></span>
                                </div>
                                <div class="col-lg-6 py-2">
                                    <label for="details" class="label-m">Return date</label>
                                    <input type="date" class="sign form-input text-uppercase"  value="<?php echo "$rd" ?>" name="ret-date" id="retu">
                                    <span class="fw-semibold text-danger" id="ret"></span>
                                </div>
                            </div>


                            <input type="submit" value="UPDATE" class="submit" id="submit">

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_name = $_POST["student-name"];
        $s_id = $_POST["student-id"];
        $s_phone = $_POST["student-phone"];
        $s_addr = $_POST["student-addr"];
        $b_name = $_POST["book-name"];
        $b_id = $_POST["book-id"];
        $i_date = $_POST["issu-date"];
        $r_date = $_POST["ret-date"];
    
        $stmt = $conn->prepare("UPDATE `student_issue_detail` SET `STUDENT_NAME` = ?, `STUDENT_ID` = ?, `STUDENT_PHONE` = ?, `STUDENT_ADDR` = ?, `BOOK_NAME` = ?, `BOOK_ID` = ?, `ISSUE` = ?, `RETURN_` = ? WHERE `id` = ?");
        $result = $stmt->bind_param("ssssssssi", $s_name, $s_id, $s_phone, $s_addr, $b_name, $b_id, $i_date, $r_date, $id);
    
        if (!$result) {
            die("Error preparing SQL statement: " . $query_template->error);
        } else {
            $stmt->execute();
           
            header("location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/book-issue.php");
            exit;
        }
    }
    
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>

</html>