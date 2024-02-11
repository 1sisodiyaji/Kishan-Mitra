<?php
session_start();
include_once 'dbConnect.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($link, $_POST['loginName']);
    $emailQuery = "SELECT * FROM `user_login` WHERE `username` = '$email'";
    $query = mysqli_query($link, $emailQuery);

    if ($query && mysqli_num_rows($query) > 0) {
        $_SESSION['email'] =$email;
        header('location: updatePassword.php');
        exit();
    } else {
        echo "<script>
                    document.getElementById('errorMessage').textContent = 'Email does not exist.';
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Kishan-Mitra</title>
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

<body
    style=" background:#131313; width: 100vw; height: 100vh; margin: 0%; padding: 0%; overflow-x: hidden;">

<section>
    <div class="container-fluid m-4  ">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6  col-12 " style="object-fit: cover;">
                <img src="img/farmer.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-lg-5   col-12 my-2 px-sm-3" style="box-shadow: 2px 3px 6px 8px grey">
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
                                    <p id="errorMessage"></p>
                                    <i class="fi fi-sr-envelope text-secondary"></i>
                                    <small class="text-danger">Email / Mobile</small>
                                </div>
                                <!-- Email input -->
                                <div class="col-12">
                                    <div data-mdb-input-init class=" form-outline mb-4 ">
                                        <input type="email" id="loginName" name="loginName"
                                               class="form-control text-danger" required
                                               placeholder="abc@gmail.com | 1234567890"/>
                                    </div>
                                </div>
                                <!-- email button -->
                                <div class="col-12 d-flex mb-4">
                                    <div class="col-5"></div>
                                    <div class="col-5">
                                        <button type="submit" name="submit"
                                                class="btn text-center text-danger bg-dark">Email Valid
                                        </button>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-5 mt-5 w-100  bg-dark mb-0">
        <!-- Copyright -->
        <div class=" mb-3 mb-0 ps-2 text-danger">
            Copyright © Kishan-Mitra. All rights reserved.
        </div>
        <!-- Right -->
        <div class="pe-3">
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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>


</body>

</html>