<?php
require_once "config.php";
require_once "./partials/signup-detail.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../admin-dashboard/css/style.css">

</head>
<body>
<?php
if ($showalert) {
    echo '<div class="alert alert-success alert-dismissible fade show fixed-top text-capitalize" role="alert">
    <strong>SUCCESS!</strong> your data is added to the database, now you are allowed to login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="width">
                    <div style="text-align: center;">
                        <img src="../images/book.png" class="img-fluid " alt="...">
                    </div> 
                   
                    <form class="signup-form" method = "post" onsubmit="return validate()" action="partials/signup-detail.php">
                        <div class="borders">
                            <p class="head">signup</p>
                             <label for="name">Name</label><br>
                             <input type="text" class="sign form-input" name="name" id="name" placeholder="enter your name">
                             <p class="text-danger fw-semibold" id="names"></p>


                             <label for="email">Email id</label><br>
                             <input type="text" class="sign form-input" name="email" id="email" placeholder="enter your email id">
                             <p class="text-danger fw-semibold" id="email-id"></p>


                             <label for="user">username</label><br>
                             <input type="text" class="sign form-input" name="user" id="username" placeholder="create your username">
                             <p class="text-danger fw-semibold"  id="user"></p>


                             <label for="pass1">Password</label><br>
                             <input type="password" class="sign form-input" name="pass1" id="password1" placeholder="create your password">
                             
                            
                             <p class="text-danger fw-semibold" id="pass1"></p>


                             <label for="pass2">Confirm Password</label><br>
                             <input type="password" class="sign form-input" name="pass2" id="password2" placeholder="re-enter your password ">
                             <span><i class="fa-solid fa-eye-slash  eye-e" onclick="password2()" id="eye-3"></i></span>
                             <span><i class="fa-solid fa-eye  eye-e" id="eye-4" onclick="password2()" ></i></span>
                             <p class="text-danger  fw-semibold" id="pass2"></p>
                             

                                 <input type="submit" value="Sign UP"  class="submit" id="submit">
                             <p class="text-center m-0">Alredy have a account ? <a href="./login.php">Login</a></p>

                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>
</html>