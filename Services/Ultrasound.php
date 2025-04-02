<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Ultrasound</title>

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
      .bg-body-ultrasound {
        background: linear-gradient(to bottom, rgba(143, 214, 139, 0.5), rgba(255, 255, 255, 0.5)), url('../assets/GMC_Photos/Services/ultrasound.webp') left center / cover no-repeat !important;
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
      }
    </style>
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body-ultrasound landing-contact">
      <div class="container">
        <br><br><br><br>
        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">



        </div>

      </div>
    </section>
    <h2 class="card-title mb-4 lh-sm px-md-5 lh-lg text-center text-primary">
      Ultrasound
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
              <li class="breadcrumb-item active">Ultrasound</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is an Ultrasound?</h4>
          <p class="pt-lg-2">
            An <strong>Ultrasound</strong> is a non-invasive imaging technique that uses high-frequency sound waves to
            create real-time images of the body's internal organs, tissues, and blood flow. It is commonly used for
            pregnancy monitoring, abdominal scans, and soft tissue examinations.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/ultrasound.webp" alt="Ultrasound Machine" class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who should get an Ultrasound?</h4>
          <p class="pt-lg-2" id="Why">
            An <strong>Ultrasound</strong> is recommended for individuals who:
          </p>
          <p class="pt-lg-1">✔ Are pregnant and need fetal monitoring.</p>
          <p class="pt-lg-1">✔ Experience abdominal pain or swelling.</p>
          <p class="pt-lg-1">✔ Require evaluation of organs like the liver, kidneys, or heart.</p>
          <p class="pt-lg-1">✔ Need vascular or soft tissue assessments.</p>
          <p class="mb-0">If your doctor has recommended an Ultrasound, our <strong>Gensan Medical Center</strong>
            provides advanced and reliable imaging services.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for Ultrasound services?</h4>
          <p class="pt-lg-2">
            At <strong>Gensan Medical Center</strong>, we offer precise and patient-friendly Ultrasound services:
          </p>
          <p class="pt-lg-1">✔ <strong>Advanced Technology</strong> – High-resolution imaging for accurate diagnosis.
          </p>
          <p class="pt-lg-1">✔ <strong>Expert Sonographers</strong> – Skilled professionals ensuring quality
            assessments.</p>
          <p class="pt-lg-1">✔ <strong>Quick & Efficient Results</strong> – Fast turnaround for timely medical care.</p>
          <p class="pt-lg-1">✔ <strong>Comfortable & Safe Procedures</strong> – A gentle approach for a stress-free
            experience.</p>
          <p class="mb-0">Our <strong>Ultrasound</strong> services provide crucial diagnostic insights with top-tier
            accuracy.</p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Expert Sonographers</h4>
          <hr class="my-lg-4" />

          <?php
          include '../include/db_connection.php';

          // Query to fetch physicians with "Radiology" specialty
          $sql = "SELECT fName, mName, lName, image FROM doctors WHERE specialty = 'Radiology' AND status = 'active'";
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
                  echo '<p>No Radiologists found.</p>';
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
              <a href="Services-Ultrasound.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is an Ultrasound? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Ultrasound.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who should get an Ultrasound? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Ultrasound.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center for this service? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Ultrasound.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Expert sonographers and specialists </span>
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