<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <title> My-Profile  </title>
</head>
<style>
    body::-webkit-scrollbar {
        width: 0; /* Remove scrollbar space */
    }
    </style>

<body>
<div id="wrapper" style="background:#131313; ">


    <!-- navbar -->
    <?php include_once '../Component/NavBar.php' ;?>

    <section style="height:85vh;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-4">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                            <div class="mt-3 mb-4">
                                <img src="https://www.shutterstock.com/image-vector/vector-flat-illustration-grayscale-avatar-600nw-2264922221.jpg"  class="rounded-circle img-fluid" style="width: 100px;" />
                            </div>
                            <h4 class="mb-2"><?php echo $_SESSION['name']; ?></h4>
                            <p class="text-muted mb-4">@Full - Stack Developer<span class="mx-2">|</span> <a
                                        href="https://www.instagram.com/golu_singh_sisodiya/">golu_singh_sisodiya</a></p>


                            <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                <div>
                                    <p class="mb-2 h5">56</p>
                                    <p class="text-muted mb-0">Repo number</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-2 h5">35 hrs</p>
                                    <p class="text-muted mb-0">Total time</p>
                                </div>
                                <div>
                                    <p class="mb-2 h5">4</p>
                                    <p class="text-muted mb-0">Resources mainly </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Kishan-Mitra.com</a>
    </div>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
</body>

</html>