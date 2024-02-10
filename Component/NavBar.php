<?php
?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<nav class="navbar navbar-expand-lg navbar-dark w-100">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fi fi-ss-grip-lines"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0 text-danger" href="../DashBoard.php">
                <img src="../img/farmer.png"  alt="Kishan Logo" loading="lazy" height="15"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-evenly">
                <li class="nav-item  ">
                    <a class="nav-link text-danger " href="../DashBoard.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item  ">
                    <a class="nav-link text-danger active " href="../Global.php">Global</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link text-danger" href="../AboutUs.php">About Us</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link text-danger" href="../ContactUs.php">Contact us</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex  justify-content-around align-items-center">
            <!-- Icon -->


            <!-- Notifications -->
            <div class="dropdown">
                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                   data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fi fi-sr-star text-danger "></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item text-danger" id="manchitra" onclick="function manchitras() {
                          var openWindowLink = document.getElementById('manchitra');
                          openWindowLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            window.open('https://bhunaksha.bihar.gov.in/10/indexmain.jsp', 'New Window', 'width=1100,height=550');
                          });
                        }
                        manchitras()" href="#">Bhu Manchitra</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" id="News" onclick="function News() {
                          var openWindowLink = document.getElementById('News');
                          openWindowLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            window.open('https://biharbhumi.bihar.gov.in/Biharbhumi/', 'New Window', 'width=1100,height=550');
                          });
                        }
                        manchitras()" href="#">Bhumi  sudhar </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" id="Adhiprapti" onclick="function manchitras() {
                          var openWindowLink = document.getElementById('Adhiprapti');
                          openWindowLink.addEventListener('click', function(event) {
                            event.preventDefault();
                            window.open('https://biharhelp.in/dhan-adhiprapti-online-bihar-2023-24/', 'New Window', 'width=1100,height=550');
                          });
                        }
                        manchitras()" href="#">Dhan - Adhiprapti</a>
                    </li>
                </ul>
            </div>

            <!-- Avatar -->
            <div class="dropdown ">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
                   role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://www.shutterstock.com/image-vector/vector-flat-illustration-grayscale-avatar-600nw-2264922221.jpg" class="rounded-circle border border-danger" height="25"
                         alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item text-danger" href="../Profile/profile_data.php">My profile</a>
                    </li>

                    <li>
                        <a class="dropdown-item text-danger" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
