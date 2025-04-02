<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Medical Laboratories</title>

  <meta name="description" content="" />

  <?php
  include 'include/cssAssets.php';
  ?>
</head>

<body>
  <script src="../assets/vendor/js/dropdown-hover.js"></script>
  <script src="../assets/vendor/js/mega-dropdown.js"></script>

  <!-- Navbar: Start -->
  <?php
  include 'include/navbar.php';
  ?>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

  <div data-bs-spy="scroll" class="scrollspy-example">

    <?php
    include 'include/servicesbg.php';
    ?>
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body-services landing-contact">
      <div class="container">
        <br><br><br><br>
        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">



        </div>

      </div>
    </section>
    <h2 class="card-title mb-4 lh-sm px-md-5 lh-lg text-center text-primary">
      Viral Antigen Test
    </h2>

  </div>

  <section class="section-py first-section-pt">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mb-2">
              <li class="breadcrumb-item">
                <a href="#">Gensan Medical Center</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Services</a>
              </li>
              <li class="breadcrumb-item active">Viral Antigen Test</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is a Viral Antigen Test?</h4>
          <p class="pt-lg-2">
            A <strong>Viral Antigen Test</strong> is a diagnostic test that detects specific proteins (antigens) from a
            virus. It is commonly used for rapid detection of respiratory viruses such as COVID-19 and influenza.
          </p>
          <div class="my-4 py-2">
            <img src="../../assets/GMC_Photos/General_Image/nopic.webp" alt="Viral Antigen Test Kit"
              class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who should get a Viral Antigen Test?</h4>
          <p class="pt-lg-2" id="Why">
            A <strong>Viral Antigen Test</strong> is recommended for individuals who:
          </p>
          <p class="pt-lg-1">✔ Show symptoms of a viral infection like fever, cough, or sore throat.</p>
          <p class="pt-lg-1">✔ Have been in close contact with a confirmed case.</p>
          <p class="pt-lg-1">✔ Require a test for travel or workplace clearance.</p>
          <p class="pt-lg-1">✔ Need quick and efficient results for early detection.</p>
          <p class="mb-0">Our <strong>Gensan Medical Center</strong> ensures accurate and reliable testing services.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for Viral Antigen Testing?</h4>
          <p class="pt-lg-2">
            At <strong>Gensan Medical Center</strong>, we provide:
          </p>
          <p class="pt-lg-1">✔ <strong>Rapid Results</strong> – Quick turnaround time for immediate action.</p>
          <p class="pt-lg-1">✔ <strong>Highly Accurate Testing</strong> – Reliable antigen detection with minimal false
            positives.</p>
          <p class="pt-lg-1">✔ <strong>Safe & Hygienic Environment</strong> – Proper protocols for patient safety.</p>
          <p class="pt-lg-1">✔ <strong>Experienced Medical Staff</strong> – Trained professionals conducting the tests.
          </p>
          <p class="mb-0">Our <strong>Viral Antigen Test</strong> provides essential insights for timely treatment and
            prevention.</p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Medical Specialists</h4>
          <hr class="my-lg-4" />

          <?php
          include '../include/db_connection.php';

          $sql = "SELECT fName, mName, lName, image FROM doctors WHERE specialty = 'Pathologist' AND status = 'active'";
          $result = $conn->query($sql);
          ?>

          <div class="row mb-4">
            <div class="col-12 col-md-5">
              <div class="row g-2">

                <?php
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    // Concatenate full name (include middle name only if it's not empty)
                    $full_name = trim($row['fName'] . ' ' . (!empty($row['mName']) ? $row['mName'] . ' ' : '') . $row['lName']);

                    // Ensure correct image path
                    $imgPath = "../../html-starter/AdminGensanMed/php/" . htmlspecialchars($row["image"]);

                    echo '<div class="col-3 col-sm-2">';
                    echo '<img class="rounded-circle img-fluid" src="' . $imgPath . '" alt="avatar" ';
                    echo 'data-bs-toggle="tooltip" data-bs-placement="left" title="' . htmlspecialchars($full_name) . '"/>';
                    echo '</div>';
                  }
                } else {
                  echo '<p>No Pathologist Found.</p>';
                }
                ?>

              </div>
            </div>
          </div>

          <?php
          $conn->close();
          ?>

          <style>
            .swiper-slide-content {
              position: absolute;
              bottom: 10px;
              left: 50%;
              transform: translateX(-50%);
              color: white;
              background-color: rgba(0, 0, 0, 0.5);
              padding: 5px 10px;
              border-radius: 5px;
            }
          </style>
        </div>

        <div class="col-lg-4">
          <div class="bg-lighter py-2 px-3 rounded">
            <h5 class="mb-0">Frequently Asked Questions</h5>
          </div>
          <ul class="list-unstyled my-4">
            <li class="mb-3">
              <a href="Services-AntigenTest.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is a Viral Antigen Test? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-AntigenTest.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who should get a Viral Antigen Test? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-AntigenTest.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center for this service? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-AntigenTest.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Expert medical specialists </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>




  <!-- / Sections:End -->

  <?php
  include 'include/footer.php';
  ?>

  <?php
  include 'include/jsAssets.php';
  ?>

</html>