<?php
session_start();
ob_start();
?>

<?php
include_once 'dbConnect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/farmer.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
            rel="stylesheet"
    />

    <title> Login-Here Kishan-Mitra</title>
    <style>
        body::-webkit-scrollbar {
            width: 0; /* Remove scrollbar space */
        }
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body style=" background:#131313;width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">


<?php
if(isset($_POST['Registersubmit'])){
    $registerName = mysqli_real_escape_string($link,$_POST['registerName']);
    $registerPhone =mysqli_real_escape_string($link, $_POST['registerPhone']);
    $registerEmail = mysqli_real_escape_string($link,$_POST['registerEmail']);
    $registerPassword = mysqli_real_escape_string($link,$_POST['registerPassword']);
    $registerRepeatPassword =mysqli_real_escape_string($link, $_POST['registerRepeatPassword']);

    $pass = password_hash($registerPassword ,PASSWORD_BCRYPT);
    $cpass =password_hash($registerRepeatPassword,PASSWORD_BCRYPT);

    $emailQuery = "SELECT * FROM  `user_login` WHERE username = '$registerEmail' ";
    $resQuery = mysqli_query($link , $emailQuery);

    $emailCount = mysqli_num_rows($resQuery);

    if($emailCount > 0){
        echo "Email Already Exist";
    }else{
        if($registerPassword === $registerRepeatPassword){
            $insertQuery = "INSERT INTO `user_login`(`username`, `password`, `name`, `mobile`) VALUES ('$registerEmail','$pass','$registerName','$registerPhone')";
            $result = mysqli_query($link,$insertQuery);
            if($result){

            }
        }else{
            echo "Passwords didn't match";
        }
    }

}
?>

<?php
if(isset($_POST['loginsubmit'])){
    $email = $_POST['loginName'];
    $pass =  $_POST['loginPassword'];

    $email_search = "SELECT * FROM `user_login` WHERE `username` = '$email'";
    $validEmail = mysqli_query($link,$email_search);

    if($validEmail){
        $email_pass = mysqli_fetch_assoc($validEmail);
        $db_pass = $email_pass['password'];
        $_SESSION['name'] = $email_pass['name'];
        $pass_decode = password_verify($pass , $db_pass);
        if($pass_decode){
            if(isset($_POST['rememberme'])){
                setcookie('emailcookie' , $email,time()+86400);
                setcookie('PassCookie' , $pass,time()+86400);
                header('location:DashBoard.php');
            }
        }else{
            header('location:index.php');
        }
    }else{
        echo "Invalid email";
    }
}
?>


<section>
    <div class="container-fluid my-4  py-4   w-100">
        <div class="row d-flex w-100 g-0">
            <div class="col-6  d-lg-block d-none my-5">
                <img src="img/farmer.png" class="img-fluid" alt="Sample image" style="object-fit: cover;">
            </div>
            <div class="col-lg-6" style="box-shadow: 2px 3px 6px 8px grey">
            <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3 my-1" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link active bg-dark text-danger"
                                id="tab-login"
                                data-mdb-pill-init
                                href="#pills-login"
                                role="tab"
                                aria-controls="pills-login"
                                aria-selected="true"
                        >Login</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link text-danger bg-dark"
                                id="tab-register"
                                data-mdb-pill-init
                                href="#pills-register"
                                role="tab"
                                aria-controls="pills-register"
                                aria-selected="false"
                        >Register</a
                        >
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content ps-2">
                    <div
                            class="tab-pane fade show active"
                            id="pills-login"
                            role="tabpanel"
                            aria-labelledby="tab-login"
                    >
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">

                            <div>


                            <!-- Email input -->
                            <i class="fi fi-sr-envelope text-secondary"></i>
                            <small class="text-danger">Email / Mobile</small>
                            <div data-mdb-input-init class=" form-outline mb-4 ">
                                <input type="email" id="loginName" name="loginName" class="form-control text-danger" required
                                       value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>"

                                       placeholder="abc@gmail.com | 1234567890"/>

                            </div>

                            <!-- Password input -->
                            <i class="fi fi-sr-lock text-secondary"></i>
                            <small class="text-danger">Password</small>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="loginPassword" name="loginPassword" class="form-control text-danger" required
                                       value="<?php if(isset($_COOKIE['PassCookie'])) { echo $_COOKIE['PassCookie']; } ?>"
                                       placeholder="*****"/>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4 w-100">
                                <div class="col-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-0 w-100">
                                        <input
                                                name = "rememberme"
                                                class="form-check-input"
                                                type="checkbox"
                                                value=""
                                                id="loginCheck"
                                                checked
                                        />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="ForgotPassword.php" class="text-danger">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="loginsubmit" class="btn btn-dark text-danger btn-block mb-4">Sign in</button>
                        </div>



                        </form>
                    </div>
                    <div
                            class="tab-pane fade"
                            id="pills-register"
                            role="tabpanel"
                            aria-labelledby="tab-register"
                    >
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                            <!-- Name input -->
                            <i class="fi fi-sr-envelope text-secondary"></i>
                            <small class="text-danger">Name</small>

                            <input type="text" id="registerName" name="registerName"
                                   class="form-control text-danger  border border-danger mb-4 bg-black"
                                   placeholder="Kishan Mitra" required/>


                            <!-- mobile input -->

                            <i class="fi fi-sr-mobile-button text-secondary"></i>
                            <small class="text-danger">Mobile</small>
                            <input type="tel" id="registerPhone"  name="registerPhone"  class="form-control text-danger border border-danger bg-black mb-4" required
                                   placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" />

                            <!-- Email input -->
                            <i class="fi fi-sr-envelope text-secondary"></i>
                            <small class="text-danger">Email *</small>
                            <input type="email" id="registerEmail" name="registerEmail"
                                   class="form-control text-danger  border border-danger mb-4 bg-black"
                                   placeholder="abc@gmail.com"/>

                            <!-- Password input -->
                            <i class="fi fi-sr-lock text-secondary"></i>
                            <small class="text-danger">Password</small>
                            <input type="password" id="registerPassword" name="registerPassword"
                                   class="form-control text-danger  border border-danger mb-4 bg-black"
                                   placeholder="*****" required/>

                            <!-- Repeat Password input -->
                            <i class="fi fi-sr-lock text-secondary"></i>
                            <small class="text-danger">Repeat Password</small>
                            <input type="password" id="registerRepeatPassword" name="registerRepeatPassword"
                                   class="form-control text-danger  border border-danger mb-4 bg-black"
                                   placeholder="*****" required/>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input
                                        class="form-check-input me-2"
                                        type="checkbox"
                                        value=""
                                        id="registerCheck"
                                        checked
                                        aria-describedby="registerCheckHelpText"
                                />
                                <label class="form-check-label text-danger" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button data-mdb-ripple-init type="submit" class="btn btn-dark text-danger  btn-block mb-3" name="Registersubmit">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
</section>
    <section class = "mt-4">
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark mb-0 mt-4">
            <!-- Copyright -->
            <div class=" mb-3 mb-md-0 text-danger">
                Copyright © Kishan Mitra. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-danger me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-danger me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-danger me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-danger">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>



<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>