

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin-dashboard/css/style.css">

</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="width">
                    <div style="text-align: center;">
                        <img src="../images/book.png" class="img-fluid " alt="logo image">
                    </div> 
                    <form class="login-form" method="post">
                        <div class="borders">
                            <p class="head">login</p>
                          
                            <?php
                          require_once "config.php";
                           
                            session_start();
                            if(isset($_POST["user"]) && isset($_POST["pass"])){
                                $_SESSION['user_name'] = $_POST["user"];
                                $_SESSION['password'] = $_POST["pass"];

                               
                            };
                            include "./partials/login-logics.php";

                           
                               if ($show_login_error) {
                               echo '<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
                               <strong>OOPS!</strong> You Don&#39;t Have Account on THis Username Please Signup First.
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>';
                               }
                            
                           ?>

                             <label for="name">username</label><br>
                             <input type="text" name="user" class="log form-input" id="user"  placeholder="create your username" ><br><br>

                             <label for="name">Password</label><br>
                             <input type="password" class="log form-input" name="pass" id="password-1"  placeholder="create your password"><br><br>
                             <span><i class="fa-solid fa-eye-slash  eye-d" onmouseup="password()" id="eye-2"></i></span>
                             <span><i class="fa-solid fa-eye  eye-d " id="eye-1" onmousedown="password()" ></i></span>
                                 <input type="submit" value="login"  class="submit" id="submit">
                                
                             <p class="text-center">Don't have a account ? <a href="signup.php">Sign up</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
