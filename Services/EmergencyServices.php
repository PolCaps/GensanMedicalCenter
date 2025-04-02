<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Emergency Services</title>

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
      Emergency Services
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
              <li class="breadcrumb-item active">Emergency Services</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What are Emergency Services?</h4>
          <p class="pt-lg-2">
            <strong>Emergency Services</strong> at <strong>Gensan Medical Center</strong> provide immediate medical
            attention for critical and life-threatening conditions, ensuring rapid response and expert care 24/7.
          </p>
          <div class="my-4 py-2">
            <img src="../../assets/GMC_Photos/Services/emergency.webp" alt="Emergency Services"
              class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who can benefit from Emergency Services?</h4>
          <p class="pt-lg-2">Our <strong>Emergency Services</strong> cater to:</p>
          <p class="pt-lg-1">✔ Individuals experiencing severe injuries, trauma, or critical health conditions.</p>
          <p class="pt-lg-1">✔ Patients requiring immediate medical attention for heart attacks, strokes, or respiratory
            distress.</p>
          <p class="pt-lg-1">✔ People involved in accidents, falls, or emergency medical situations.</p>
          <p class="pt-lg-1">✔ Anyone in need of urgent care and life-saving medical interventions.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center for Emergency Services?</h4>
          <p class="pt-lg-2">At <strong>Gensan Medical Center</strong>, we ensure top-notch emergency care:</p>
          <p class="pt-lg-1">✔ <strong>24/7 Availability</strong> – Round-the-clock emergency response and treatment.
          </p>
          <p class="pt-lg-1">✔ <strong>Advanced Medical Equipment</strong> – State-of-the-art tools for rapid diagnosis
            and treatment.</p>
          <p class="pt-lg-1">✔ <strong>Expert Emergency Team</strong> – Skilled doctors, nurses, and paramedics.</p>
          <p class="pt-lg-1">✔ <strong>Fast Response</strong> – Immediate triage and treatment for critical conditions.
          </p>
          <p class="pt-lg-1">✔ <strong>Ambulance Services</strong> – Quick transport for emergency cases.</p>

          <h4 class="mb-0 pb-1 my-4" id="Expert">Our Emergency Care Experts</h4>
          <hr class="my-lg-4" />


        </div>
        <div class="col-lg-4">
          <div class="bg-lighter py-2 px-3 rounded">
            <h5 class="mb-0">Frequently Asked Questions</h5>
          </div>
          <ul class="list-unstyled my-4">
            <li class="mb-3">
              <a href="Services-Emergency.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What are Emergency Services? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Emergency.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who can benefit from our services? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Emergency.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Emergency.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Meet our Emergency Care Experts </span>
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