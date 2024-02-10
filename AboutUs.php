<?php
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

    <title> About - Kishan-Mitra</title>
    <style>
        @media only screen and (max-height: 746px) {
            .images1 {
                height: 30vh;
                width: 45vw;
                object-fit: contain;
            }
        }

        @media only screen and (max-height: 345px) {
            .images1 {
                height: 25vh;
                object-fit: contain;
            }
        }
    </style>

</head>

<body style=" margin: 0%;padding:0%;box-sizing: border-box;overflow-x: hidden; background:#131313;">

<div class="container-fluid g-0">

    <!-- navbar -->
    <?php
    include_once 'Component/NavBar.php';
    ?>

    <section class="container">
        <div class=" row mt-4">
            <div class="col-lg-5 col-10 text-light">
                <h2 class="text-danger text-center p-2">Our vision :</h2>
                Empowering Agriculture Through Technology:
                - Our vision is to empower farmers by harnessing the potential of
                technology to transform traditional agricultural practices.
                <br>
                Enhancing Agricultural Efficiency:
                - We aspire to enhance the efficiency of farming operations through
                the integration of smart technologies, enabling farmers to achieve
                higher productivity with minimal resources.
                <br>
                Facilitating Market Access:
                - Our vision includes creating a platform that not only aids in cultivation
                but also facilitates market access for farmers, connecting them with buyers
                and ensuring fair pricing for their produce.
                <br>
                By aligning with these visionary goals, Kishan-Mitra aims to make a meaningful
                and lasting impact on the lives of farmers, fostering a future where
                technology and agriculture work hand-in-hand for sustainable and prosperous
                rural communities.
            </div>
            <div class="col-lg-7  col-10  img-fluid d-flex justify-content-center align-items-center">
                <img src="img/vision.jpg" style="height: 45vh; " alt="vision">
            </div>
        </div>
        <div class="row  mt-4 d-flex  flex-wrap-reverse">
            <div class="col-lg-5  col-10  img-fluid d-flex justify-content-center align-items-center ">
                <img src="img/Approach.jpg" style="height: 45vh;width: 70vh; " alt="Approach">
            </div>
            <div class="col-lg-7 col-12 text-light p-3">
                <h2 class="text-danger text-center">Our Approach :</h2>
                <br>
                Our approach is rooted in empathy, understanding the unique challenges
                faced by farmers. We integrate technology solutions that address their
                specific needs, making agriculture more accessible and efficient.
                Co-Creation with Farmers:
                <br>
                Kishan-Mitra takes a collaborative approach by involving farmers in the
                co-creation process. We believe in working hand-in-hand with the
                agricultural community to develop solutions that truly meet their
                requirements. User-Centric Design:
                <br>

                Kishan-Mitra emphasizes the importance of localized knowledge sharing.
                We facilitate the exchange of traditional farming wisdom alongside modern
                agricultural practices, creating a holistic learning environment.
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-5  col-12 text-light">
                <h2 class="text-danger text-center">Our Process :</h2>

                Establish a robust monitoring and evaluation framework to continuously assess
                the impact of the technology on farmers' lives. Use key performance indicators
                to measure success and identify areas for improvement.
                Feedback Loops and Iterative Development:
                <br>
                Maintain continuous feedback loops with end-users and stakeholders. Use feedback
                to iterate and improve upon existing solutions, ensuring they remain relevant and
                aligned with evolving needs.
                Partnerships and Collaborations:
                <br>
                Forge strategic partnerships with government agencies, NGOs, research institutions,
                and private sector entities to leverage resources, expertise, and networks for a more
                comprehensive and sustainable impact.
                Capacity Building for Sustainability:
                <br>
                Invest in building local capacity to ensure the sustainability of the project. Train
                local communities to take ownership of the technology, maintenance, and further development.

            </div>
            <div class="col-lg-7 col-12 img-fluid  d-flex justify-content-center align-items-center">
                <img src="img/Process.jpg"  style="height: 45vh; "  alt="Process">
            </div>
        </div>
    </section>

    <!-- 12 cards -->
    <?php
    include_once 'Component/Card.php';
    ?>

    <!-- Footer -->
    <?php
    include_once 'Component/Footer.php'
    ?>
</div>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>