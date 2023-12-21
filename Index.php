<?php
include_once '../dbConnect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="shortcut icon" href="../img/farmer.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>

    <title> Login-Here Kishan-Mitra</title>
</head>

<body style=" background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">


<div class="container">
    <div class="d-flex justify-content-center align-items-center m-2">
        <img src="../img/farmer.png" style="height: 20vh;" alt="">
        <p style="font-size:2rem; color:rgb(182, 77, 98);" class="text-center">Welcome to Kishan-Mitra ..</p>
    </div>
    <div>

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active bg-danger shadow-6 text-light rounded-8" id="tab-login"
                   data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
                   aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link bg-danger shadow-6 text-light rounded-8" id="tab-register"
                   data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register"
                   aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <p class="text-danger " id="message"></p>

                    <!-- Email input -->

                    <p class="m-0" style="font-size: medium; font-weight: lighter; color: black;">Email</p>
                    <div class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control text-light"
                               placeholder="Enter Your Email ...."/>
                    </div>

                    <!-- Password input -->
                    <p class="m-0" style="font-size: medium; font-weight: lighter; color: black;">Password</p>
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control text-light"
                               placeholder="Enter Your Password"/>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">

                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="forgotPassword.php">Forgot password?</a>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" onclick="Login()" class="btn btn-primary btn-block mb-4">Sign in</button>


                    <!-- Register buttons -->

                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <p id="message2" class="text-danger"></p>
                    <div class="text-center mb-3">
                    </div>
                    <!-- Name input -->

                    <p class="m-0" style="font-size: medium; font-weight: lighter; color: black;">Name</p>
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control text-light" placeholder="Enter Your name"/>
                    </div>


                    <!-- Email input -->
                    <p class="m-0" style="font-size: medium; font-weight: lighter; color: black;">Email</p>
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control text-light" placeholder="Enter Your Email...."/>
                    </div>

                    <p class="m-0" style="font-size: medium; font-weight: lighter; color: black;">Password</p>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control text-light" placeholder=" Enter Your Password..."/>
                    </div>

                    <!-- Submit button -->

                    <button type="submit" class="btn btn-primary btn-block mb-3" onclick="Register()">Register</button>

                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>

<script type="text/javascript" src="../js/mdb.min.js"></script>
<script src="Login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>