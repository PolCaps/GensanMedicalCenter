<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | Physicians</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/GMC_Photos/logo.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/front-config.js"></script>
</head>

<body>
  <script src="assets/vendor/js/dropdown-hover.js"></script>
  <script src="assets/vendor/js/mega-dropdown.js"></script>

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

          <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mt-5">
            <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg">
              Physicians.
              <span class="text-primary fw-medium text-nowrap">All in one place</span>.
            </h3>
            <p class="mb-3">
              With knowledge and experience, Our physicians diagnose and treat a wide range of medical conditions.
            </p>
            <div class="d-flex align-items-center justify-content-between app-academy-md-80">
              <input type="search" placeholder="Find your physician" class="form-control me-2" id="searchPhysicians" />
              <select id="filterDoctors" class="select2 form-select">
                <option value="*">All Doctors</option>
                <option value="Anesthesiology">Anesthesiology</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Dental Med">Dental Med</option>
                <option value="ENT">Ear Nose Throat</option>
                <option value="Family Medicine">Family Medicine</option>
                <option value="General Surgery">General Surgery</option>
                <option value="Internal Medicine">Internal Medicine</option>
                <option value="Nephrology">Nephrology</option>
                <option value="Neurosurgery">Neurosurgery</option>
                <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                <option value="Occupational Medicine">Occupational Medicine</option>
                <option value="Ophthalmology">Ophthalmology</option>
                <option value="Orthopaedics">Orthopaedics</option>
                <option value="Pathologist">Pathologist</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Radiology">Radiology</option>
                <option value="Rehabilitation_medicine">Rehabilitation Medicine</option>
                <option value="Urology">Urology</option>
              </select>
            </div>


            <style>
              .bg-label-success {
                background-color: #A3D1C6 !important;
                color: #28c76f !important;
              }
            </style>

          </div>

        </div>
    </section>

    <!-- Contact Us: End -->
  </div>
  <section id="landingTeam" class="section-py landing-team-physicians">
    <div class="container">

      <?php
      include 'include/db_connection.php';

      $sql = "SELECT * FROM doctors WHERE status = 'active' ORDER BY specialty ASC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo '<div class="row gy-5" style="max-height: 800px; overflow-y: auto;">';
        while ($row = $result->fetch_assoc()) {
          $imgPath = "html-starter/AdminGensanMed/php/" . $row["image"];
          $fullName = $row["fName"] . " " . $row["mName"] . " " . $row["lName"];
          $specialty = $row["specialty"];
          $clinic = !empty($row["address"]) ? $row["address"] : "N/A";

          echo '<div class="col-lg-3 col-sm-6 physician-card"  data-type="' . htmlspecialchars($specialty) . '">';
          echo '  <div class="card mt-3 mb-3 mt-lg-0 shadow-none">';
          echo '    <div class="bg-label-success position-relative team-image-box">';
          echo '      <img src="' . htmlspecialchars($imgPath) . '" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="Doctor Image" />';
          echo '    </div>';
          echo '    <div class="card-body border border-top-0 border-label-success text-center">';
          echo '      <h5 class="card-title mb-0 physician-name"><strong>' . htmlspecialchars($fullName) . '</strong></h5>';
          echo '      <a class="btn btn-sm btn-label-primary mt-2" aria-current="page" href="#">' . htmlspecialchars($specialty) . '</a>';
          echo '      <h6 class="card-title mt-2"><strong><i>Clinic: ' . htmlspecialchars($clinic) . '</i></strong></h6>';
          echo '    </div>';
          echo '  </div>';
          echo '</div>';
        }
        echo '</div>';
      } else {
        echo '<p class="text-center">No Physicians Found.</p>';
      }

      $conn->close();
      ?>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function () {
          // Search Functionality
          $("#searchPhysicians").on("keyup", function () {
            let searchText = $(this).val().toLowerCase();

            $(".physician-card").each(function () {
              let leaderName = $(this).find(".physician-name").text().toLowerCase();

              if (leaderName.includes(searchText)) {
                $(this).show();
              } else {
                $(this).hide();

              }
            });
          });

          $("#filterDoctors").on("change", function () {
            let selectedCategory = $(this).val();

            $(".physician-card").each(function () {
              let leaderType = $(this).data("type");

              if (selectedCategory === "*" || leaderType === selectedCategory) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
          });
        });
      </script>
    </div>
  </section>

  <!-- / Sections:End -->

  <?php
  include 'include/footer.php';
  ?>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="assets/vendor/libs/swiper/swiper.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <!-- Main JS -->
  <script src="assets/js/front-main.js"></script>


  <!-- Page JS -->
  <script src="assets/js/front-page-landing.js"></script>
</body>

</html>