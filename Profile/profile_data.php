<?php
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

<body>
  <div id="wrapper" style="background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);">


    <!-- navbar -->
   <?php include_once '../Component/NavBar.php' ;?>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                  <div class="mt-3 mb-4">
                    <img src="https://app.wooble.org/featured_article/image/64756ca2db1f4.webp"
                      class="rounded-circle img-fluid" style="width: 100px;" />
                  </div>
                  <h4 class="mb-2">Akash Jaiswal</h4>
                  <p class="text-muted mb-4">@Founder & Ceo <span class="mx-2">|</span> <a
                      href="https://akashjaiswal.com/">akash jaiswal.com</a></p>
                  <div class="mb-4 pb-2">
                    <button type="button" class="btn btn-outline-primary btn-floating">
                      <i class="fab fa-facebook-f fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-floating">
                      <i class="fab fa-twitter fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-floating">
                      <i class="fab fa-skype fa-lg"></i>
                    </button>
                  </div>
                  <button type="button" class="btn btn-primary btn-rounded btn-lg">
                    Message now
                  </button>
                  <div class="d-flex justify-content-between text-center mt-5 mb-2">
                    <div>
                      <p class="mb-2 h5">8471</p>
                      <p class="text-muted mb-0">Wallets Balance</p>
                    </div>
                    <div class="px-3">
                      <p class="mb-2 h5">8512</p>
                      <p class="text-muted mb-0">Income amounts</p>
                    </div>
                    <div>
                      <p class="mb-2 h5">4751</p>
                      <p class="text-muted mb-0">Total Transactions</p>
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