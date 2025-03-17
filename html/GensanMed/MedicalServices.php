<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | Medical Services</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/GMC_Photos/logo.png" />

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

          <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mt-5">
            <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg text-primary">
              Medical Services
            </h3>
            <p class="mb-3"> With expertise and dedication, our medical services provide comprehensive care to ensure
              patient well-being. </p>
            <!-- <div class="d-flex align-items-center justify-content-between app-academy-md-80">
              <input type="search" placeholder="Find your physicians" class="form-control me-2" />
              <button type="submit" class="btn btn-primary btn-icon"><i class="ti ti-search"></i></button>
            </div> -->

            <p class="mb-1"> <i>Other Leadership:</i> </p>
            <div class="d-flex">
              <a class="btn btn-sm btn-label-primary mt-2 mx-3" aria-current="page" href="BoardDirectors.php">Board of
                Directors
              </a>
              <a class="btn btn-sm btn-label-primary mt-2 mx-3" aria-current="page"
                href="Administration.php">Administration</a>
            </div>


            <style>
              .custom-dropdown {
                position: relative;
                width: 250px;
              }

              .custom-search-box {
                margin-top: 10px;
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
              }

              .custom-dropdown-list {
                position: absolute;
                width: 100%;
                max-height: 200px;
                border: 1px solid #ccc;
                border-top: none;
                background: white;
                overflow-y: auto;
                display: none;
                z-index: 1000;
              }

              .custom-dropdown-list div {
                padding: 8px;
                cursor: pointer;
              }

              .custom-dropdown-list div:hover {
                background: #f0f0f0;
              }

              .bg-label-success {
                background-color: #80CBC4 !important;
                color: #28c76f !important;
              }
            </style>

            <!-- <div class="custom-dropdown">
              <input type="text" class="custom-search-box" id="searchInput" placeholder="Search Department"
                onkeyup="filterFunction()">
              <div class="custom-dropdown-list" id="dropdownList">
                <div onclick="selectItem(this)">Apple</div>
                <div onclick="selectItem(this)">Banaenae</div>
                <div onclick="selectItem(this)">Banana</div>
                <div onclick="selectItem(this)">Cherry</div>
                <div onclick="selectItem(this)">Date</div>
                <div onclick="selectItem(this)">Elderberry</div>
                <div onclick="selectItem(this)">Pediatrics</div>
                <div onclick="selectItem(this)">Grape</div>
                <div onclick="selectItem(this)">Honeydew</div>
              </div>
            </div> -->

            <script>
              const searchInput = document.getElementById("searchInput");
              const dropdownList = document.getElementById("dropdownList");

              function filterFunction() {
                const filter = searchInput.value.toLowerCase();
                const items = dropdownList.getElementsByTagName("div");

                dropdownList.style.display = filter ? "block" : "none";

                for (let i = 0; i < items.length; i++) {
                  let txtValue = items[i].textContent || items[i].innerText;
                  items[i].style.display = txtValue.toLowerCase().includes(filter) ? "" : "none";
                }
              }

              function selectItem(element) {
                searchInput.value = element.innerText;
                dropdownList.style.display = "none";
              }

              document.addEventListener("click", function (event) {
                if (!event.target.closest(".dropdown")) {
                  dropdownList.style.display = "none";
                }
              });

              searchInput.addEventListener("focus", function () {
                if (searchInput.value !== "") {
                  dropdownList.style.display = "block";
                }
              });
            </script>


          </div>

        </div>

      </div>
    </section>

    <!-- Contact Us: End -->
  </div>
  <section id="landingTeam" class="section-py landing-team-physicians">
    <div class="container">

      <div class="row gy-5">

        <?php
        include 'include/db_connection.php';

        $query = "SELECT CONCAT_WS(' ', first_name, middle_name, last_name) AS full_name, 
                 title, position, image 
          FROM leaderships 
          WHERE type = 'medservice' AND status ='active'";

        $result = mysqli_query($conn, $query);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            // Construct the full name with title if available
            $fullName = $row['full_name'];
            if (!empty($row['title'])) {
              $fullName .= ', ' . $row['title'];
            }

            $logoPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];
            echo '
        <div class="col-lg-3 col-sm-6">
          <div class="card mt-3 mb-3 mt-lg-0 shadow-none">
            <div class="bg-label-success position-relative team-image-box">
              <img src="' . $logoPath . '" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
            </div>
            <div class="card-body border border-top-0 border-label-success text-center">
              <h5 class="card-title mb-0"><strong>' . htmlspecialchars($fullName) . '</strong></h5>
              <a class="btn btn-sm btn-label-primary mt-2" aria-current="page" href="#">' . htmlspecialchars($row['position']) . '</a>
            </div>
          </div>
        </div>';
          }
        } else {
          echo "No data found.";
        }

        mysqli_close($conn);
        ?>



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

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <!-- Main JS -->
  <script src="../../assets/js/front-main.js"></script>


  <!-- Page JS -->
  <script src="../../assets/js/front-page-landing.js"></script>
</body>

</html>