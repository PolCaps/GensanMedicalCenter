<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | 64-Slice CT Scan</title>

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
      .bg-body-CTScan {
        background: linear-gradient(to bottom, rgba(143, 214, 139, 0.5), rgba(255, 255, 255, 0.5)), url('../assets/GMC_Photos/Services/CT-scanbg.jpg') left center / cover no-repeat !important;
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
      }
    </style>
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body-CTScan landing-contact">
      <div class="container">
        <br><br><br><br>
        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">

        </div>

      </div>
    </section>
    <h2 class="card-title mb-4 lh-sm px-md-5 lh-lg text-center text-primary">
      64-Slice CT Scan
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
              <li class="breadcrumb-item active">64-Slice CT Scan</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is 64-Slice CT Scan?</h4>
          <p class="pt-lg-2">
            A 64-Slice CT Scan is an advanced computed tomography (CT) imaging technology that captures highly detailed
            cross-sectional images of the body. It utilizes 64 detector rows to acquire multiple slices in a single
            rotation, offering superior clarity, faster scan times, and enhanced diagnostic accuracy.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/ct-scan.webp" alt="product" class="img-fluid w-100" />
          </div>
          <h4 class="mb-2 pb-1" id="Who">Who should use 64-Slice CT Scan?</h4>

          <p class="pt-lg-2" id="Why">
            A 64-slice CT scan is ideal for individuals who need:

          <p class="pt-lg-1">✔ Cardiac Assessment – Detects coronary artery disease and evaluates heart function.</p>
          <p class="pt-lg-1">✔ Lung Screening – Identifies lung conditions, including early-stage lung cancer.</p>
          <p class="pt-lg-1">✔ Brain & Neurological Imaging – Assesses strokes, aneurysms, and head injuries.</p>
          <p class="pt-lg-1">✔ Abdominal & Pelvic Scans – Diagnoses issues related to the liver, kidneys, intestines,
            and reproductive organs.</p>
          <p class="pt-lg-1">✔ Orthopedic & Spine Evaluation – Helps in detecting fractures, disc problems, and joint
            conditions.</p>
          <p class="pt-lg-1">✔ Cancer Detection & Monitoring – Provides clear imaging for tumor detection and treatment
            planning.</p>

          <p class="mb-0">If you have a history of heart disease, respiratory conditions, or unexplained symptoms like
            chest pain or severe headaches, a 64-slice CT scan can provide the answers you need. </p>
          </p>
          <h4 class="mb-2 pb-1">Why choose Gensan Medical Center for this service?</h4>
          <!-- <p class="pb-lg-2">1 month ago - Updated</p> -->

          <p class="pt-lg-2">
          <p class="mb-0">At Gensan Medical Center, we offer the most advanced diagnostic imaging with a
            patient-centered approach:</p>

          <p class="pt-lg-1">✔ State-of-the-Art 64-Slice CT Scanner – Ensures unparalleled detail and accuracy.</p>
          <p class="pt-lg-1">✔ Expert Radiologists & Technicians – Experienced professionals dedicated to precision.</p>
          <p class="pt-lg-1">✔ Swift Diagnoses & Personalized Care – Fast results with treatment plans tailored to you.
          </p>
          <p class="pt-lg-1">✔ Enhanced Comfort & Safety – Reduced scan times and minimized radiation exposure.</p>
          <p class="pt-lg-1">✔ Compassionate & Professional Care – Your well-being is our top priority.</p>
          <p class="mb-0">
            This makes it particularly effective for detecting cardiovascular diseases, lung disorders, tumors, and
            other medical conditions with minimal radiation exposure.
          </p>

          <p class="mb-0">
            You can go back to your cart at any time by clicking on the shopping cart icon at the top right side of
            the page.
          </p>


          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Expert Radiologist</h4>
          <hr class="my-lg-4" />

          <?php
          include '../include/db_connection.php';

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
                    $imgPath = "../html-starter/AdminGensanMed/php/" . htmlspecialchars($row["image"]);

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
              background-color: rgba(0, 0, 0, 0.7);
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
              <a href="CTScan.html#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is 64-Slice CT Scan? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="CTScan.html#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who should use 64-Slice CT Scan? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="CTScan.html#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center for this service? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="CTScan.html#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Expert radiologists physicians </span>
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