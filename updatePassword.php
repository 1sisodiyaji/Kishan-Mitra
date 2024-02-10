<?php
include_once 'dbConnect.php';
session_start();
var_dump($_SESSION);
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

if (isset($_POST['submit'])) {

    $password = mysqli_real_escape_string($link, $_POST['registerPassword']);
    $conPassword = mysqli_real_escape_string($link, $_POST['registerRepeatPassword']);

    if ($password === $conPassword) {
        $updatePassword = "UPDATE `user_login` SET `password`='$password' WHERE
            `username` = '$email ";
        header('Location: logout.php');
        exit(); // Ensure that the script stops execution after header redirect
    } else {
        echo "password does not match";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Password | Kishan-Mitra</title>
    <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://kishanmitra01.000webhostapp.com/stylesheets/style.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="/stylesheets/style.css">
    <style>
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

<body
    style=" background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">

<section class="vh-100">
    <div class="container-fluid m-4  h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 " style="object-fit: cover;">
                <img src="img/farmer.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 " style="box-shadow: 2px 3px 6px 8px grey">
                <ul class="nav nav-pills nav-justified mb-3 my-1" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active bg-dark text-danger" id="tab-login" data-mdb-pill-init
                           href="#pills-Forgot" role="tab" aria-controls="pills-Forgot" aria-selected="true">Forgot
                            Password</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-Forgot" role="tabpanel"
                         aria-labelledby="tab-login">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <i class="fi fi-sr-envelope text-secondary"></i>
                                    <small class="text-danger">Email / Mobile</small>
                                </div>
                                <!-- Email input -->
                                <div class="col-12">
                                    <div data-mdb-input-init class=" form-outline mb-4 ">
                                        <p><?php echo $email;?></p>
                                    </div>
                                </div>

                                <!-- password -->
                                <div class="col-12">
                                    <!-- Password input -->
                                    <i class="fi fi-sr-lock text-secondary"></i>
                                    <small class="text-danger">Password</small>
                                    <input type="password" id="registerPassword" name="registerPassword"
                                           class="form-control text-danger border border-danger mb-4 bg-black"
                                           placeholder="*****">

                                    <!-- Repeat Password input -->
                                    <i class="fi fi-sr-lock text-secondary"></i>
                                    <small class="text-danger">Repeat Password</small>
                                    <input type="password" id="registerRepeatPassword"
                                           name="registerRepeatPassword"
                                           class="form-control text-danger border border-danger mb-4 bg-black"
                                           placeholder="*****">
                                </div>

                                <!-- update button -->
                                <div class="col-12 ">
                                    <button type="submit" name="submit"
                                            class="btn btn-dark text-danger btn-block mb-4">Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark mb-0">
            <!-- Copyright -->
            <div class=" mb-3 mb-md-0 text-danger">
                Copyright © Krida. All rights reserved.
            </div>
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
</section>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>


</body>

</html>