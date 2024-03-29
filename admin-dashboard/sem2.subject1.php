<?php
 session_start();
require_once "config.php";
include "partials/login-logics.php";

if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name'])) {
    // redirect to login page
    header("Location: /All-my-projects/LIBRARY-MANAGEMENT-SYSTEM/admin-dashboard/login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Book-Inventory</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- common  font-awesome and bootstrap cnd -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">


    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion bg-color" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <?php
              
               echo "<div class='sidebar-brand-text mx-3 text-capitalize'>".$_SESSION["user_name"]."</div>";
                ?>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <div class="sidebar-heading">
                Intventory
            </div>
           <?php
            if ($admin) {
                echo  ' <li class="nav-item active bld admin">
                <a class="nav-link" href="book-issue.php">
                    <i class="fa-solid fa-book"></i>
                    <span>Book issued</span></a>
            </li>';
            }
           ?>
           
            <li class="nav-item active bld">
                <a class="nav-link" href="inventry.php">
                    <i class="fa-solid fa-warehouse"></i>
                    <span>Book Inventry</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Streams
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed bld" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa-solid fa-book-open-reader text-light"></i>
                    <span>BSC-IT</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Semester:</h6>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <span class="text-dark text-start">Sem-1</span>
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="true" aria-controls="collapseThree">
                        <span class="text-dark text-start">Sem-2</span>
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                        aria-expanded="true" aria-controls="collapseFour">
                        <span class="text-dark text-start">Sem-3</span>
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                        aria-expanded="true" aria-controls="collapseFive">
                        <span class="text-dark text-start">Sem-4</span>
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                        aria-expanded="true" aria-controls="collapseSix">
                        <span class="text-dark text-start">Sem-5</span>
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                        aria-expanded="true" aria-controls="collapseSeven">
                        <span class="text-dark text-start">Sem-6</span>
                        </a>
                    </div>
                </div>
                <!-- showing subjects on collabse -->
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem1.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem1.subject2.php">subject 2</a>

                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem2.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem2.subject2.php">subject 2</a>

                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem2.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem2.subject2.php">subject 2</a>

                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem2.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem2.subject2.php">subject 2</a>

                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem2.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem2.subject2.php">subject 2</a>

                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subjects:</h6>
                        <a class="collapse-item" href="sem2.subject1.php">subject 1</a>
                        <a class="collapse-item" href="sem2.subject2.php">subject 2</a>
                    </div>
                </div>
            </li>
            <!-- end of collabse -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <?php
                if ($admin) {
                    echo ' <li class="nav-item active bld admin">
                    <a class="nav-link" href="login.datatable.php">
                        <i class="fa-solid fa-database"></i>
                        <span>user database</span></a>
                </li>';
                }
            ?>
           
            <li class="nav-item active bld">
                <a class="nav-link" href="partials/logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar  mb-4 static-top shadow" style="justify-content: space-between;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div>
                        <img src="../images/book.png" class="web-logo" alt="website logo">
                    </div>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline ms-auto  my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn-color" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 fw-bold">Sem-1 Subject-2 </h1>
                         <?php
                         if ($admin) {
                           echo '<button class="d-none d-sm-inline-block btn btn-sm btn-color shadow-sm fs-6 admin" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-square-plus pe-2 btn-color">
                           </i>  Add Referance</button></a>';
                        //    <!-- Button trigger modal -->
                         }
                         ?>
                           

                    </div>

                    <!-- popup modal for add student details for offline book issued -->
                    <div class="modal animate"   id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                          <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Referance</h1>
                                
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form action="" class="modal-form" onsubmit="return Video() && Pdf();">
                                        <div class="row">
                                            <div class="col-lg-6 py-2">
                                                <label for="details" class="label-i"> video title</label>
                                                <input type="text" class="modal-input form-control" id="vid-t1" placeholder="Enter video title">
                                                <span class="fw-semibold text-danger" id="vid-t"></span>
                                             </div>
                                             <div class="col-lg-6 py-2">
                                                <label for="details" class="label-i"> Notes title</label>
                                                <input type="text" class="modal-input form-control" id="not-t1"  placeholder="Enter Notes title">
                                                <span class="fw-semibold text-danger" id="not-t"></span>
                                             </div>
                                          <div class="col-lg-6 col-md-6">
                                          <label for="details" class="label-i">Add video</label>
                                          <input type="file" class="modal-input custom" id="video" >
                                          <span><i class="fa-sharp fa-solid fa-cloud-arrow-up icons"></i></span>
                                          <span class="text-danger fw-semibold position" id="vid1"></span>

                                          </div>
                                          <div class="col-lg-6 col-md-6">
                                            <label for="details" class="label-i">Add Notes</label>
                                            <input type="file" class="modal-input custom" id="pdf"  multiple>
                                            <span><i class="fa-solid fa-file-pdf icons"></i></span>
                                            <span class="text-danger fw-semibold  position" id="pd"></span>
                                          </div>
                                          <div class="col-lg-12">
                                            <label for="details" class="label-i text-capitalize">Add thamb nail</label>
                                            <input type="file" class="modal-input custom" id="thumb"  multiple>
                                            <span><i class="fa-solid fa-file-pdf icons"></i></span>
                                            <span class="text-danger fw-semibold " id="tum"></span>
                                          </div>
                                          <div class="col-lg-12">
                                          <label for="details" class="label-i">Discription</label>
                                          <textarea type="text" class="modal-input form-control" placeholder="Add some discription about your reference"></textarea>
                                          </div>
                                         
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" value="Add" class="btn-color sub" >
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contain-t ">
                    <div class="container-fluid  ">
                        <div class="row ">
                            <div class=" col-lg-6 col-md-6 filter " id="filter">
                                <label  class="fs-5 text-dark fw-semibold">Show</label>
                                <select name="datatable" class="select" id="select">
                                    <option value="50">5</option>
                                    <option value="50">10</option>
                                    <option value="50">20</option>                            
                                    <option value="50">100</option>
                                </select>
                                <label class="fs-5 text-dark fw-semibold">entries</label>
                            </div>
                            <div class=" col-lg-3 col-sm-3 offset-sm-3 col-md-3 d-flex ">
                                <p class="fs-5 pe-2 text-dark fw-semibold my-auto" >Search: </p>
                                <input type="search" class="form-control" id="search">
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card notes pb-0">
                                    <img src="../images/tambnail-example.jpg" alt="tambnail image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title fw-semibold">Practical 1</h4>
                                            <span style="cursor: pointer;"><i class="fa-solid fa-circle-play text-danger fs-2"></i></span>
                                        </div>
                                        <p class="fs-5 text-capitalize fw-semibold py-3">dail pad</p>
                                      <a href="#" class="btn btn-primary text-capitalize float-end"  data-bs-toggle="modal" data-bs-target="#session">view session</a>
                                    </div>
                                  </div>
                            </div>
                            </div>
                        </div>
                        <!-- madal for session  -->
                        <div class="Session">
                            <div class="modal animate" id="session" tabindex="-1" aria-labelledby="exampleModalLabe" aria-hidden="true" style = "ov">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content px-3 over">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabe2">Session</h1>
                                        
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="card-title fw-semibold text-dark">Practical 1</h3>
                                            <p class="fs-5 text-capitalize fw-semibold text-dark py-2">dail pad</p>
                                            <p class="fs-5 text-capitalize fw-semibold text-dark m-0">discription:</p>
                                            <p class="fs-6 text-capitalize text-justify fw-semibold text-dark py-2" style="text-indent: 80px;">This chapter attempts to summarize the book by giving short practical advices to business leaders
                                                 on how to understand the concept of security and position and manage the security function in an 
                                                 enterprise so that it will produce the best results. Each instruction in this chapter is a concept
                                                  that is thoroughly addressed in previous chapters that are listed at the end of each paragraph. </p>
                                            <p class="fs-4 text-capitalize fw-semibold text-dark py-2">session video:</p>

                                            <div class="d-flex justify-content-center mb-3">
                                                <img src="../images/tambnail-example.jpg"  class="tv-img img-fluid" alt="">
                                                <img src="../images/tv-image.png" class="img-fluid" style="position: relative;" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="/images/prac 9B.docx"><button class="btn-color sub"> Download Pdf</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            
           
            <!-- End of Main Content -->

           
           
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  

    <!-- animation js link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- common bootstrap and javascript file  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
    <!-- custom validation javascript file  -->
     <script src="../script.js"></script>

     

   
</body>

</html>