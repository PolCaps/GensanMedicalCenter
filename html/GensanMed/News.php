<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | News</title>

  <meta name="description" content="" />

  <link rel="icon" href="../../assets/GMC_Photos/logo.png" type="image/x-icon" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/front-config.js"></script>
</head>

<body>
  <script src="../../assets/vendor/js/dropdown-hover.js"></script>
  <script src="../../assets/vendor/js/mega-dropdown.js"></script>

  <!-- Navbar: Start -->
  <?php
  include 'include/navbar.php';
  ?>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

  <div data-bs-spy="scroll" class="scrollspy-example">


    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
      <div class="container">

        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">

          <div
            class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mt-5 text-center">
            <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg text-primary">
              News and Updates
            </h3>
            <p class="mb-3 text-black"> Stay informed with the latest updates and insights through our News and Updates.
            </p>
            <!-- <div class="d-flex align-items-center justify-content-between app-academy-md-80">
              <input type="search" placeholder="Find your physicians" class="form-control me-2" />
              <button type="submit" class="btn btn-primary btn-icon"><i class="ti ti-search"></i></button>
            </div> -->

            <!-- <p class="mb-1"> <i>Other Leadership:</i> </p>
            <a class="btn btn-sm btn-label-primary mt-2" aria-current="page" href="BoardDirectors.php">Board of
              Directors
            </a>
            <a class="btn btn-sm btn-label-primary mt-2" aria-current="page"
              href="Administration.php">Administration</a> -->

            <style>
              .bg-body {
                background: linear-gradient(to bottom, #8fd68b, #ffffff) !important;
              }
            </style>





          </div>

        </div>

      </div>
    </section>

    <!-- Contact Us: End -->
  </div>
  <section id="landingTeam" class="section-py landing-team-physicians">
    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12">

        </div>


      </div>
    </div>
  </section>

  <!-- / Sections:End -->

  <?php
  include 'include/footer.php';
  ?>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <!-- Main JS -->
  <script src="../../assets/js/front-main.js"></script>


  <!-- Page JS -->
  <script src="../../assets/js/front-page-landing.js"></script>
  <script src="../../assets/js/extended-ui-perfect-scrollbar.js"></script>
</body>

</html>