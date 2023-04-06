<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="admin-dashboard/css/style.css">

</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="width">
                    <div style="text-align: center;">
                        <img src="images/book.png" class="img-fluid " alt="...">
                    </div> 
                    <form class="signup-form" onsubmit="return validate()">
                        <div class="borders">
                            <p class="head">signup</p>
                             <label for="name">Name</label><br>
                             <input type="text" class="sign form-input" id="name" placeholder="enter your name">
                             <p class="text-danger fw-semibold" id="names"></p>


                             <label for="name">Email id</label><br>
                             <input type="text" class="sign form-input" id="email" placeholder="enter your email id">
                             <p class="text-danger fw-semibold" id="email-id"></p>


                             <label for="name">username</label><br>
                             <input type="text" class="sign form-input" id="username" placeholder="create your username">
                             <p class="text-danger fw-semibold" id="user"></p>


                             <label for="name">Password</label><br>
                             <input type="password" class="sign form-input" id="password1" placeholder="create your password">
                             <span><i class="fa-solid fa-eye-slash  eye-f" onclick="password2()" id="eye-2"></i></span>
                             <span><i class="fa-solid fa-eye  eye-f " id="eye-1" onclick="password2()" ></i></span>
                             <p class="text-danger fw-semibold" id="pass1"></p>


                             <label for="name">Confirm Password</label><br>
                             <input type="password" class="sign form-input" id="password2" placeholder="re-enter your password ">
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
    <script src="script.js"></script>
</body>
</html>