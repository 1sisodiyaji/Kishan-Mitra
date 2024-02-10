<?php
include 'dbConnect.php';
session_start();
?>

<?php
if(!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/farmer.png" type="image/x-icon">

    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <title> Global - Kishan-Mitra</title>
</head>

<body>
<div id="wrapper" style="background:#131313; ">

    <!-- Navbar -->
    <?Php include_once 'Component/NavBar.php'; ?>

    <!-- main content -->
    <section>
        <div class=" container-fluid  mx-auto bg-black w-100  ">
            <!-- search box -->
            <div class="w-lg-75 w-100 mx-auto py-3">
                <div class="input-group">
                    <div class="form-outline border border-dark ">
                        <input type="search" id="SearchItem" class="form-control"
                               placeholder="Search Your item here..."/>
                    </div>
                    <button type="button" onclick="searchItem()" class="btn shadow-0 text-danger  bg-dark m-1" style =" box-shadow : 4px 4px 4px 4px red;">
                        <i class="fi fi-bs-search text-danger"></i>
                    </button>
                </div>
            </div>
            <div class ="w-75 mx-auto py-2 h-25 d-flex justify-content-evenly align-items-center">
                <p id="display1" class="text-danger" style="font-size:1.2rem;"></p>
                <p id="display2" class="text-success" style="font-size:1.8rem;"></p>
                <p id="message" class="text-danger"></p>
            </div>
            <!-- cards  -->
            <div class="container-fluid py-5" style="padding: 0;margin: 0;top:100px;">

                <div class="row  d-flex justify-content-around ">

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto text-danger" id="Wheat">Wheat</h5>
                                    <i class="fi fi-sr-caret-down  fa-2x text-danger me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-sr-wheat fa-2x"></i>
                                    <p class="card-text text-success ms-5" style="font-size: 2rem;">₹ 25 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto text-danger" id="Wheat">Rice</h5>
                                    <i class="fi fi-sr-caret-up  fa-2x text-success me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-sr-bowl-rice fa-2x"></i>
                                    <p class="card-text text-success ms-5" style="font-size: 2rem;">₹ 32 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto  text-danger" id="Wheat">Chana</h5>
                                    <i class="fi fi-sr-caret-up  fa-2x text-success me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-sr-acorn fa-2x"></i>
                                    <p class="card-text text-success ms-5" style="font-size: 2rem;">₹ 96 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto text-danger" id="Wheat">Dal</h5>
                                    <i class="fi fi-sr-caret-up  fa-2x text-success me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-sr-bowl-rice fa-2x"></i>
                                    <p class="card-text text-success ms-5" style="font-size: 2rem;">₹ 46 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto text-danger" id="Wheat">Onion</h5>
                                    <i class="fi fi-sr-caret-down  fa-2x text-danger me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-sr-onion fa-2x"></i>
                                    <p class="card-text text-success ms-5" style="font-size: 2rem;">₹ 25 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="card m-2 mt-3 shadow-6 bg-dark">
                            <div class="card-body text-center">
                                <div class="container d-flex">
                                    <h5 class="card-title mx-auto text-danger" id="Wheat">Apple</h5>
                                    <i class="fi fi-sr-caret-up  fa-2x text-success me-0"></i>
                                </div>
                                <div class="container d-flex justify-content-center align-items-center">
                                    <i class="fi fi-brands-apple fa-2x "></i>
                                    <p class="card-text text-success ms-4" style="font-size: 2rem;">₹ 220 / Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="p-4 bg-black ">
            <h2 class="text-center bold bg-black text-danger">Some Helpful Tips and Tricks to Grow your Business</h2>

        </div>

        <!-- Helping & news reagrding price related to market  -->
        <div class="container-fluid py-4 bg-black">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="ratio ratio-16x9 m-1">
                        <iframe height="315"
                                src="https://www.youtube.com/embed/Qkeo-OCX0Io?si=abK0UfDaBbZl36gQ&amp;start=1"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  ">
                    <div class="ratio ratio-16x9 m-1">
                        <iframe height="315" src="https://www.youtube.com/embed/RCqf4NzdbFI?si=sT-pquiXI0ENc4i4"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  ">
                    <div class="ratio ratio-16x9 m-1">
                        <iframe height="315"
                                src="https://www.youtube.com/embed/4sHoUFQTskM?si=spRPj9RVsBvDl9rj&amp;start=1"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'Component/Footer.php';
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/Global.js"></script>

</body>

</html>