<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Therapeutic Exercise</title>

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

    <style>
      .bg-body-tera {
        background: linear-gradient(to bottom, rgba(143, 214, 139, 0.5), rgba(255, 255, 255, 0.5)), url('../assets/GMC_Photos/Services/thera.webp') left center / cover no-repeat !important;
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
      }
    </style>
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body-tera landing-contact">
      <div class="container">
        <br><br><br><br>
        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">



        </div>

      </div>
    </section>
    <h2 class="card-title mb-4 lh-sm px-md-5 lh-lg text-center text-primary">
      Therapeutic Exercise
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
              <li class="breadcrumb-item">
                <a href="#">Rehabilitation Medicine</a>
              </li>
              <li class="breadcrumb-item active">Therapeutic Exercise</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is Therapeutic Exercise?</h4>
          <p class="pt-lg-2">
            <strong>Therapeutic Exercise</strong> is a structured program of physical activities designed to improve
            mobility, strength, balance, and overall function. It is commonly used for injury rehabilitation, chronic
            pain management, and enhancing physical performance.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/thera.webp" alt="Therapeutic Exercise" class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who can benefit from Therapeutic Exercise?</h4>
          <p class="pt-lg-2">Therapeutic Exercise is recommended for individuals who:</p>
          <p class="pt-lg-1">✔ Are recovering from musculoskeletal injuries.</p>
          <p class="pt-lg-1">✔ Experience chronic pain conditions such as arthritis.</p>
          <p class="pt-lg-1">✔ Have neurological conditions requiring movement rehabilitation.</p>
          <p class="pt-lg-1">✔ Want to improve strength, flexibility, and endurance.</p>
          <p class="mb-0">If your doctor has recommended Therapeutic Exercise, our <strong>Gensan Medical
              Center</strong> provides expert-guided rehabilitation programs.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for Therapeutic Exercise?</h4>
          <p class="pt-lg-2">At <strong>Gensan Medical Center</strong>, we offer specialized rehabilitation programs:
          </p>
          <p class="pt-lg-1">✔ <strong>Personalized Treatment Plans</strong> – Tailored exercises for specific
            conditions.</p>
          <p class="pt-lg-1">✔ <strong>Experienced Therapists</strong> – Certified professionals guiding every session.
          </p>
          <p class="pt-lg-1">✔ <strong>State-of-the-Art Facilities</strong> – Modern rehabilitation equipment for
            effective recovery.</p>
          <p class="pt-lg-1">✔ <strong>Comprehensive Recovery Approach</strong> – Focused on improving quality of life.
          </p>
          <p class="mb-0">Our <strong>Therapeutic Exercise</strong> programs help patients regain function and mobility
            effectively.</p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Expert Rehabilitation Therapists</h4>
          <hr class="my-lg-4" />

          <?php
          include '../include/db_connection.php';

          // Fetch only Orthopaedics and Occupational Medicine
          $sql = "SELECT fName, mName, lName, image, specialty FROM doctors WHERE specialty IN ('Orthopaedics', 'Occupational Medicine', 'Rehabilitation Medicine') AND status = 'active'";
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
                    echo 'data-bs-toggle="tooltip" data-bs-placement="left" title="' . htmlspecialchars($full_name) . ' (' . htmlspecialchars($row["specialty"]) . ')"/>';
                    echo '</div>';
                  }
                } else {
                  echo '<p>No Physician Found on this field.</p>';
                }
                ?>

              </div>
            </div>
          </div>

          <?php
          $conn->close();
          ?>
        </div>

        <div class="col-lg-4">
          <div class="bg-lighter py-2 px-3 rounded">
            <h5 class="mb-0">Frequently Asked Questions</h5>
          </div>
          <ul class="list-unstyled my-4">
            <li class="mb-3">
              <a href="#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is Therapeutic Exercise? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who can benefit from Therapeutic Exercise? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center for this service? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Expert rehabilitation therapists </span>
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