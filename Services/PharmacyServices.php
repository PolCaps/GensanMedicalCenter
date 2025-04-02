<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Services | Pharmacy Services</title>

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
      Pharmacy Services
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
              <li class="breadcrumb-item active">Pharmacy Services</li>
            </ol>
          </nav>

          <hr class="my-lg-4" />
          <h4 class="mb-2 pb-1" id="What">What are Pharmacy Services?</h4>
          <p class="pt-lg-2">
            <strong>Pharmacy Services</strong> at <strong>Gensan Medical Center</strong> provide patients with expert
            medication dispensing,
            consultation, and health guidance. Our pharmacy ensures the availability of high-quality medications and
            personalized care to support your health needs.
          </p>
          <div class="my-4 py-2">
            <img src="../assets/GMC_Photos/Services/pharmacy.webp" alt="Pharmacy Services" class="img-fluid w-100" />
          </div>

          <h4 class="mb-2 pb-1" id="Who">Who can benefit from our Pharmacy Services?</h4>
          <p class="pt-lg-2" id="Why">
            Our <strong>Pharmacy Services</strong> cater to:
          </p>
          <p class="pt-lg-1">✔ Patients requiring prescription medications and over-the-counter drugs.</p>
          <p class="pt-lg-1">✔ Individuals in need of expert medication counseling and guidance.</p>
          <p class="pt-lg-1">✔ Those managing chronic conditions like diabetes, hypertension, and asthma.</p>
          <p class="pt-lg-1">✔ Families seeking vaccinations and preventive healthcare products.</p>
          <p class="pt-lg-1">✔ Anyone looking for safe and affordable healthcare solutions.</p>
          <p class="mb-0">Our pharmacists are dedicated to ensuring your safety and well-being through quality
            medications and professional support.</p>

          <h4 class="mb-2 pb-1 mt-3">Why choose Gensan Medical Center Pharmacy?</h4>
          <p class="pt-lg-2">
            At <strong>Gensan Medical Center</strong>, we prioritize excellence in pharmaceutical care:
          </p>
          <p class="pt-lg-1">✔ <strong>Licensed Pharmacists</strong> – Providing expert advice on medication use.</p>
          <p class="pt-lg-1">✔ <strong>Wide Range of Medications</strong> – From essential drugs to specialized
            treatments.</p>
          <p class="pt-lg-1">✔ <strong>Affordable & Genuine Medicines</strong> – Ensuring quality and affordability.</p>
          <p class="pt-lg-1">✔ <strong>24/7 Pharmacy Services</strong> – Accessible and convenient medication
            dispensing.</p>
          <p class="pt-lg-1">✔ <strong>Personalized Care</strong> – Tailored health consultations for better treatment
            outcomes.</p>
          <p class="mb-0">Trust our pharmacy for safe, effective, and reliable healthcare solutions.</p>


        </div>
        <div class="col-lg-4">
          <div class="bg-lighter py-2 px-3 rounded">
            <h5 class="mb-0">Frequently Asked Questions</h5>
          </div>
          <ul class="list-unstyled my-4">
            <li class="mb-3">
              <a href="Services-Pharmacy.php#What" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> What are Pharmacy Services? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Pharmacy.php#Who" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Who can benefit from our services? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Pharmacy.php#Why" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Why choose Gensan Medical Center Pharmacy? </span>
                <i class="ti ti-chevron-right scaleX-n1-rtl text-muted me-1"></i>
              </a>
            </li>
            <li class="mb-3">
              <a href="Services-Pharmacy.php#Expert" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-1"> Meet our expert pharmacists </span>
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