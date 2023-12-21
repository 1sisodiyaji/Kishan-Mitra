<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <title> Kishan-Mitra</title>
</head>

<body>
    <div id="wrapper  " class="d-flex justify-content-center  align-items-center"
        style=" background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);width: 100vw; height: 100vh;">

        <div class="container h-auto bg-secondary  border rounded-5 w-lg-75  ">
            <!-- icons -->
            <p id="message" class="text-danger"></p>
            <div class="d-flex mx-auto justify-content-center align-items-center col-lg-12 col-md-4 col-12">
                <div style="background-image: url('../img/farmer.png');
                background-size: cover;
                width:20vh;
                height:20vh;
                align-self: center;" class="col-lg-6 col-md-2 col-4">

                </div>
                <div class="container w-75 col-lg-6 col-md-2 col-8   ">
                    <h2  class="text-success" style="font-size:3rem; color: rgb(24, 48, 43);" >Welcome to Kishan-Mitra</h2>
                </div>
            </div>


            <div class="container">
                <input type="email" id="typeEmail" class="form-control  m-2 " placeholder="Enter You Email...." style="background-color: rgba(44,70,82,1);" />

                <input type="password" id="typePassword" class="form-control m-2" placeholder="Enter Your Password"
                    style="background-color: rgba(44,70,82,1);" />
                <input type="password" id="typePassword2" class="form-control m-2" placeholder="Confirm Your Password "
                    style="background-color: rgba(44,70,82,1);" />
            </div>

            <div class="d-flex justify-content-center mt-3 ">
                <a href="#"><div class="btn btn-primary text-center  m-3" onclick="UpdatePass()">Update Password</div></a>
                <a href="../Index.php"><div class="btn btn-secondary text-center m-3">Cancel</div></a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script src="ForgotPassword.js"></script>
</body>

</html>