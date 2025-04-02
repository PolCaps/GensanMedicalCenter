<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Family Planning</title>

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
      Family Planning
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
              <li class="breadcrumb-item active">Family Planning</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What is Family Planning?</h4>
          <p class="pt-lg-2">
            <strong>Family Planning</strong> at <strong>Gensan Medical Center</strong> provides individuals and couples
            with essential reproductive health services, contraception options, and expert guidance to make informed
            decisions about their family’s future.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/familyplan.jpg" alt="Family Planning Services"
              class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who can benefit from Family Planning?</h4>
          <p class="pt-lg-2">Our <strong>Family Planning Services</strong> cater to:</p>
          <p class="pt-lg-1">✔ Couples planning their family size and spacing children.</p>
          <p class="pt-lg-1">✔ Individuals seeking contraception options and reproductive health advice.</p>
          <p class="pt-lg-1">✔ Women needing maternal healthcare before and after pregnancy.</p>
          <p class="pt-lg-1">✔ Adolescents and young adults looking for safe sexual health education.</p>
          <p class="pt-lg-1">✔ Anyone aiming for a healthier and well-planned family life.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for Family Planning?</h4>
          <p class="pt-lg-2">At <strong>Gensan Medical Center</strong>, we ensure quality reproductive healthcare:</p>
          <p class="pt-lg-1">✔ <strong>Experienced Professionals</strong> – Trained doctors and counselors for
            reproductive health.</p>
          <p class="pt-lg-1">✔ <strong>Comprehensive Contraceptive Options</strong> – Pills, IUDs, injectables,
            implants, and natural methods.</p>
          <p class="pt-lg-1">✔ <strong>Personalized Counseling</strong> – Tailored advice based on health conditions and
            goals.</p>
          <p class="pt-lg-1">✔ <strong>Safe & Confidential Services</strong> – Respecting your privacy and medical
            needs.</p>
          <p class="pt-lg-1">✔ <strong>Affordable & Accessible</strong> – Quality family planning at reasonable costs.
          </p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Family Planning Experts</h4>
          <hr class="my-lg-4" />

          <?php
          include '../include/db_connection.php';

          // Fetch only Orthopaedics and Occupational Medicine
          $sql = "SELECT fName, mName, lName, image, specialty FROM doctors WHERE specialty IN ('Family Planning') AND status = 'active'";
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
              <a href="Services-FamilyPlanning.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What is Family Planning? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-FamilyPlanning.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who can benefit from our services? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-FamilyPlanning.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-FamilyPlanning.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Meet our Family Planning Experts </span>
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