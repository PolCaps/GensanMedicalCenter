<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | TENS and EMS</title>

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
      .bg-body-TENS {
        background: linear-gradient(to bottom, rgba(143, 214, 139, 0.5), rgba(255, 255, 255, 0.5)), url('../assets/GMC_Photos/Services/tens.webp') left center / cover no-repeat !important;
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
      }
    </style>
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body-TENS landing-contact">
      <div class="container">
        <br><br><br><br>
        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">



        </div>

      </div>
    </section>
    <h2 class="card-title mb-4 lh-sm px-md-5 lh-lg text-center text-primary">
      TENS and EMS
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
              <li class="breadcrumb-item active">TENS and EMS</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is TENS and EMS?</h4>
          <p class="pt-lg-2">
            <strong>TENS (Transcutaneous Electrical Nerve Stimulation)</strong> and <strong>EMS (Electrical Muscle
              Stimulation)</strong> are therapeutic techniques that use electrical impulses to reduce pain and stimulate
            muscle activity. TENS is commonly used for pain relief, while EMS enhances muscle function and recovery.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/tens.webp" alt="TENS and EMS Therapy" class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who should get TENS and EMS Therapy?</h4>
          <p class="pt-lg-2" id="Why">TENS and EMS are recommended for individuals who:</p>
          <p class="pt-lg-1">✔ Suffer from chronic or acute pain conditions.</p>
          <p class="pt-lg-1">✔ Need muscle rehabilitation due to injury or surgery.</p>
          <p class="pt-lg-1">✔ Experience muscle weakness or atrophy.</p>
          <p class="pt-lg-1">✔ Seek enhanced muscle performance and recovery.</p>
          <p class="mb-0">Our <strong>Gensan Medical Center</strong> offers professional and safe electrotherapy
            treatments tailored to your needs.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for TENS and EMS?</h4>
          <p class="pt-lg-2">At <strong>Gensan Medical Center</strong>, we provide specialized care for TENS and EMS
            therapy:</p>
          <p class="pt-lg-1">✔ <strong>State-of-the-Art Equipment</strong> – Ensuring effective and safe treatments.</p>
          <p class="pt-lg-1">✔ <strong>Experienced Therapists</strong> – Skilled professionals for personalized therapy.
          </p>
          <p class="pt-lg-1">✔ <strong>Comprehensive Pain Management</strong> – Non-invasive solutions for pain relief.
          </p>
          <p class="pt-lg-1">✔ <strong>Enhanced Muscle Recovery</strong> – Supporting rehabilitation and performance.
          </p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Expert Therapists</h4>
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
              <a href="Services-TENS-EMS.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is TENS and EMS? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-TENS-EMS.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who should get this therapy? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-TENS-EMS.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-TENS-EMS.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Expert therapists </span>
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