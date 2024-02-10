<?php
session_start();
?>
<?php
if(!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/farmer.png" type="image/x-icon">

    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>

    <title> Contact-Us - Kishan-Mitra</title>
</head>
<body style="background:#131313;  margin: 0; padding: 0; overflow-x: hidden;">

<div id="wrapper">
    <!-- navbar -->
    <?php
    include_once 'Component/NavBar.php';
    ?>

    <p class="error-message text-danger"></p>
    <!-- container -->
    <?php
    include_once 'Component/ContactForm.php'
    ?>

    <!--       Footer-->
    <?php
    include_once 'Component/Footer.php';
    ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>