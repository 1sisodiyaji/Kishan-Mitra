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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>

    <title> DashBoard - Kishan-Mitra</title>
</head>

<body
        style="background:#131313; margin: 0; padding: 0; overflow-x: hidden;">
<div id="wrapper" style="position: relative;">

    <!-- navbar -->
    <?php
    include_once 'Component/NavBar.php';
    ?>

    <!-- New Section For Chatbot -->


    <!-- Carousel wrapper -->
    <?php
    include_once 'Component/Carousel.php';
    ?>

    <!-- number -->
    <?php
    include_once 'Component/Number.php';
    ?>

    <!-- weather -->
    <section>
        <div class="container ">

            <h1 class="text-danger">Weather Viewer</h1>

            <div class="tab-container">
                <p class="tab text-light" data-userWeather>Your Weather</p>
                <p class="tab text-light" data-searchWeather>Search Weather</p>
            </div>

            <div class="weather-container">

                <!-- grant location container-->
                <div class="sub-container grant-location-container">
                    <img src="./assets/location.png" alt="Location_Image" width="80" height="80" loading="lazy">
                    <p>Grant Location Access</p>
                    <p>Allow Access to get weather Information</p>
                    <button class="btn" data-grantAccess>Grant Access</button>
                </div>

                <!-- search form -> form-container-->
                <form class="form-container" data-searchForm>
                    <input placeholder="Search for City..." data-searchInput>
                    <button class="btn" type="submit">
                        <img src="./assets/search.png" width="20" height="20" loading="lazy" alt="search_image">
                    </button>
                </form>

                <!--- loading screen container -->
                <div class="sub-container loading-container">
                    <img src="./assets/loading.gif" width="150" height="150" alt="Loading_Image">
                    <p>Loading</p>
                </div>

                <!-- show weather info -->
                <div class="sub-container user-info-container">

                    <!--city name and Flag-->
                    <div class="name">
                        <p data-cityName></p>
                        <img data-countryIcon alt="Country_Icon">
                    </div>

                    <!-- weather description-->
                    <p data-weatherDesc></p>
                    <!--weather Icon-->
                    <img data-weatherIcon alt="weather-Icon">
                    <!--temperature-->
                    <p data-temp></p>

                    <!--3 cards - parameters-->
                    <div class="parameter-container ">

                        <!--card 1-->
                        <div class="parameter mb-2">
                            <img src="./assets/wind.png" alt="wind_Image">
                            <p>windSpeed</p>
                            <p data-windspeed></p>
                        </div>

                        <!--card 2-->
                        <div class="parameter mb-2">
                            <img src="./assets/humidity.png" alt="Humidity_image">
                            <p>humidity</p>
                            <p data-humidity></p>
                        </div>

                        <!--card 3-->
                        <div class="parameter mb-2">
                            <img src="./assets/cloud.png" alt="Cloud_Image">
                            <p>Clouds</p>
                            <p data-cloudiness></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section>
        <div class="container d-flex justify-content-evenly">

            <div class="card col-lg-3 col-md-3 col-sm-12 bg-dark">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <a href="https://www.thehindubusinessline.com/economy/agri-business/urea-sales-up-8-in-october-as-higher-imports-turn-handy/article67580014.ece" target="_blank">
                        <img src="https://bl-i.thgim.com/public/incoming/mvilwj/article67580323.ece/alternates/LANDSCAPE_1200/IMG_bl09_seeding_2_1_B3BNNC0H.jpg" class="img-fluid" alt="image"/>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>
                <div class="card-body text-danger">
                    <p>The Fertilisers were gettting hiked by government ...</p>
                </div>
            </div>


            <div class="card col-lg-3 col-md-3 col-sm-12 bg-dark ">
                <div class="bg-image hover-overlay ripple " data-mdb-ripple-color="light">
                    <a href="https://www.thehindubusinessline.com/economy/agri-business/soyabean-crushing-up-21-per-cent-in-october-on-higher-market-arrivals/article67579318.ece?cx_testId=23&cx_testVariant=cx_1&cx_artPos=0&cx_experienceId=EXEPURFQAOW6#cxrecs_s" target="_blank">
                        <img src="https://bl-i.thgim.com/public/incoming/j02mcv/article67579368.ece/alternates/LANDSCAPE_1200/soyabean.jpg" class="img-fluid" alt="image"/>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>
                <div class="card-body text-danger">
                    <p>soyabean Prices are getting uprise by 8%.....</p>
                </div>
            </div>

            <div class="card col-lg-3 col-md-3 col-sm-12 bg-dark">
                <div class="bg-image hover-overlay ripple " data-mdb-ripple-color="light">
                    <a href="https://www.thehindubusinessline.com/economy/logistics/kutch-fuels-green-hydrogen-mission/article67574630.ece?cx_testId=23&cx_testVariant=cx_1&cx_artPos=3&cx_experienceId=EXEPURFQAOW6#cxrecs_s" target="_blank">
                        <img src="https://bl-i.thgim.com/public/incoming/q18wws/article67574632.ece/alternates/LANDSCAPE_1200/BL2711_Logistics_Lead.jpg" class="img-fluid" alt="image"/>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>

                <div class="card-body text-danger">
                    <p>The water-line business  downfall has started ...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section>
        <div class="container  mt-5">

            <div class=" w-100 shadow-3 mx-auto">
                <h3 class="text-light text-center">2023 Food Sovereignty Prize Recipients Center on Community Organizing</h3>

                <img src="https://foodtank.com/wp-content/uploads/2023/11/Dylan_Featured-Image.png" alt="" class="img-fluid">
                <div class="form-outline mb-4">
            <textarea class="form-control text-light" id="form4Example3" rows="6">
              The U.S. Food Sovereignty Alliance (USFSA) recently awarded the 2023 Food Sovereignty Prize to the Black Dirt Farm Collective and Moolman Peiyuan Papay (MPP). Each year, the Prize recognizes two grassroots organizations dedicated to advancing food sovereignty and justice.

              “In these turbulent times, both organizations are beacons of hope and inspiration,” Christina Schiavoni, Senior Communications Coordinator for Grassroots International, a member of the USFSA tells Food Tank. “Through approaches grounded in food sovereignty, agroecology, Black liberation, and grassroots feminisms, both are catalyzing much-needed transformation in food systems – and broader systems – entrenched in exploitation and oppression.”

              The Black Dirt Farm Collective is a group of Black and Brown farmers, educators, scientists, and land stewards in Brandywine, Maryland, dedicated to regenerating and nourishing the land while building equitable food systems. The Collective focuses on sustainable and regenerative agricultural practices, land-based healing, and promoting food justice. They advocate for land access and ownership for Black and Brown individuals and communities and work to create spaces for marginalized voices in the agricultural and food justice movements.

              MPP, also known as the Peasant Movement of Papaye, is a social and agricultural movement that advocates for the rights and interests of peasant farmers and rural communities in Haiti. The movement focuses significantly on land reform, food security, and sustainable agriculture from the grassroots level.

              “It is notable that news of the Food Sovereignty Prize winners came within days of the United Nations announcing plans to send armed forces into Haiti,” Schiavoni tells Food Tank. She argues that the move will only exacerbate existing crises the country is facing.

              “In contrast,” Schiavoni
              “In contrast,” Schiavoni continues, “MPP is confronting crisis in the here and now while building vibrant local food economies that foster both sustainable rural livelihoods and ecological resilience. This points to real solutions by and for Haitians that the international community must stand behind.”

              The Food Sovereignty Prize is designed to serve as an alternative to the annual World Food Prize, which the USFSA argues has been co-opted by the interests of global agribusiness.

              “The Food Sovereignty Prize champions grassroots, agroecological solutions from the people most harmed by the injustices of the global food system,” states Heather Day, Executive Director of Community Alliance for Global Justice, a USFSA coordinating member, in a press release. “Mouvman Peyizan Papay and Black Dirt Farm Collective demonstrate community-led farming systems that work toward Black and Indigenous liberation while nourishing humanity and the Earth.”

              Articles like the one you just read are made possible through the generosity of Food Tank members. Can we please count on you to be part of our growing movement? Become a member today by clicking here.

              Photo courtesy of Ricardo IV Tamayo, Sunsplash.

            </textarea>
                </div>
            </div>

        </div>
    </section>

    <!-- About Us -->
    <?php
    include_once 'Component/Card.php'
    ?>

    <!-- Contact us -->
    <?php
    include_once 'Component/ContactForm.php';
    ?>

    <!--      Footer-->
    <?php
    include_once 'Component/Footer.php';
    ?>
</div>



<!-- Optional JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/Script.js"></script>
<script src="js/Weather.js"></script>
</body>

</html>