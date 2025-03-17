<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | Landing Page</title>

  <meta name="description" content="" />

  <link rel="manifest" href="../../PWA/manifest.json">
  <script>
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("../../PWA/sw.js")
        .then(() => console.log("Service Worker Registered!"))
        .catch((error) => console.log("Service Worker Registration Failed:", error));
    }

  </script>

  <!-- Favicon -->
  <link rel="icon" href="../../assets/GMC_Photos/logo.png" type="image/x-icon" />


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
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />
  <!-- <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css" /> -->

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/front-config.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>

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
  <section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
      <img src="../../assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background"
        class="position-absolute top-0 start-50 translate-middle-x object-fit-contain w-100 h-100" data-speed="1" />
      <div class="container">
        <div class="hero-text-box text-center">

          <h1 class="text-primary hero-title display-6 fw-bold">Welcome to <span> <br>Gensan Medical Center</span></h1>
          <style>
            body {
              overflow-x: hidden;
            }

            .custom-swiper-container {
              width: 100%;
              height: 100%;
              position: relative;
              margin-bottom: 30px;

            }

            .custom-swiper-slide {
              background-position: center;
              background-size: cover;
              width: 100%;
              height: 300px;
              border-radius: 15px;
            }

            @media (min-width: 576px) {
              .custom-swiper-slide {
                height: 150px;
              }
            }

            @media (min-width: 768px) {
              .custom-swiper-slide {
                height: 200px;
              }
            }

            @media (min-width: 992px) {
              .custom-swiper-slide {
                height: 300px;
              }
            }
          </style>
          <div class="custom-swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/10.png')"></div>

              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/2.png')"></div>

              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/3.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/4.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/5.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/Ginyard.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/6.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/7.png')"></div>
              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/8.png')"></div>

              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/9.png')"></div>

              <div class="swiper-slide custom-swiper-slide"
                style="background-image:url('../../assets/GMC_Photos/General_Image/logonatinto.gif')"></div>
            </div>

          </div>

          <script>
            document.addEventListener('DOMContentLoaded', function () {
              var swiper = new Swiper('.custom-swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                  rotate: 20,
                  stretch: 0,
                  depth: 300,
                  modifier: 1,
                  slideShadows: false,
                },
                autoplay: {
                  delay: 3000,
                  disableOnInteraction: false,
                },
                loop: true, // Enable infinite loop
              });
            });
          </script>
          <!-- <h2 class="hero-sub-title h6 mb-4 pb-1">
                Caring Beyond Healing.<br class="d-none d-lg-block" />
                Read news, explore facilities, and service offered.
              </h2> -->
        </div>

        <div class="row mx-2 my-2">
          <div class="col-md-4 col-lg-4">
            <div class="card text-center mb-1">
              <div class="card-body">
                <img src="../../assets/GMC_Photos/General_Image/phone.gif" alt="" width="50">
                <h3 href="tel:+639988481843" class="card-title text-primary">(0998) 848 1843</h3>
                <p class="card-text">You can call us here</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="card text-center mb-1">
              <div class="card-body">
                <p href="mailto:contactus@gensanmed.com" class=" ti ti-burst ti-lg ti-mail-heart text-primary"></p>
                <h3 href="mailto:contactus@gensanmed.com" class="card-title text-primary ">contactus@gensanmed.com</h3>
                <il class="card-text">Send us an email</il>

              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="card text-center mb-1">
              <div class="card-body">
                <p class=" ti ti-tada ti-lg ti-24-hours text-primary"></p>
                <h3 class="card-title text-primary">24/7 Open</h3>
                <p class="card-text">We are open for you</p>

              </div>
            </div>
          </div>

        </div>
        <!--/ Text alignment -->

      </div>
    </div>
  </section>
  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->

    <!-- Hero: End -->


    <section class="section-py">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-success">Overview</span>
        </div>
        <h3 class="text-center mb-4"></h3>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="row">
              <div class="col-md-3 mb-md-0 mb-1">
                <div class="card border shadow-none">
                  <div class="card-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                      <path
                        d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                      <path d="M12.5 15.5l2 2" />
                      <path d="M15 13l2 2" />
                    </svg>
                    <h3 class="my-2">32</h5>
                      <p><b class="text-primary">Collaboration</b> with different healthcare institutions,
                        organizations, or businesses to improve medical services, enhance patient care, and optimize
                        operational efficiency.</p>
                      <a class="btn btn-sm btn-label-primary" aria-current="page"
                        href="landing-page.php#landingCollaborations">See More</a>

                  </div>
                </div>
              </div>

              <div class="col-md-3 mb-md-0 mb-1">
                <div class="card border shadow-none">
                  <div class="card-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-stethoscope">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                      <path d="M8 15a6 6 0 1 0 12 0v-3" />
                      <path d="M11 3v2" />
                      <path d="M6 3v2" />
                      <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    </svg>

                    <h3 class="my-2">106</h5>
                      <p><b class="text-primary">Medical Professionals</b> trained in specific areas of healthcare.
                        Specialists in hospitals, clinics, or research institutions provides you with caring beyond
                        healing.</p>
                      <a class="btn btn-sm btn-label-primary" aria-current="page"
                        href="landing-page.php#landingCollaborations">See More</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mb-md-0 mb-1">
                <div class="card border shadow-none">
                  <div class="card-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-door">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M14 12v.01" />
                      <path d="M3 21h18" />
                      <path d="M6 21v-16a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v16" />
                    </svg>
                    <h3 class="my-2">30</h5>
                      <p><b class="text-primary">Facilities</b> that ensures comprehensive patient care, medical
                        treatment, and support services. Categorized into medical, diagnostic, patient care, and support
                        facilities.</p>
                      <a class="btn btn-sm btn-label-primary" aria-current="page"
                        href="landing-page.php#landingCollaborations">See More</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mb-md-0 mb-1">
                <div class="card border shadow-none">
                  <div class="card-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-first-aid-kit">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M8 8v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                      <path d="M4 8m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                      <path d="M10 14h4" />
                      <path d="M12 12v4" />
                    </svg>

                    <h3 class="my-2">27</h3>
                    <p><b class="text-primary">Medical and Non-Medical services</b> that diagnose, treat, and support
                      patients. Ensure healthcare, covering emergency care, diagnostics, treatment, and rehabilitation.
                    </p>
                    <a class="btn btn-sm btn-label-primary" aria-current="page"
                      href="landing-page.php#landingCollaborations">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Useful features: Start -->
    <section id="landingCollaborations" class="section-py bg-body landing-reviews pb-0">
      <!-- What people say slider: Start -->
      <div class="container">
        <div class="row align-items-center gx-0 gy-4 g-lg-5">
          <div class="col-md-6 col-lg-5 col-xl-3">
            <h3 class="mb-1">
              <span class="position-relative fw-bold z-1 text-primary">Collaborations
              </span>
            </h3>
            <p class="mb-3 mb-md-8">
              Our top performing partners improving our medical
              services, enhance patient care, and optimize operational efficiency.
            </p>
            <div class="landing-reviews-btns">
              <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl"
                type="button">
                <i class="ti ti-chevron-left ti-sm"></i>
              </button>
              <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
                <i class="ti ti-chevron-right ti-sm"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 col-lg-7 col-xl-9">
            <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
              <div class="swiper-collaboration" id="swiper-reviews">
                <div class="swiper-wrapper">

                  <?php
                  include 'include/db_connection.php';

                  $sql = "SELECT * FROM Collaborations WHERE status = 'active' ORDER BY collab_id ASC";
                  $result = $conn->query($sql);



                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      $logoPath = "../../html-starter/AdminGensanMed/php/" . $row["logo"];
                      echo '  <div class="swiper-slide">';
                      echo '  <div class="card h-100">';
                      echo '    <div class="card-body text-body d-flex flex-column justify-content-between h-100">';
                      echo '      <div class="mb-3">';
                      echo '        <img src="' . htmlspecialchars($logoPath) . '" alt="logo" class="client-logo img-fluid" width="80" />';
                      echo '      </div>';
                      echo '      <p>' . htmlspecialchars($row['description']) . '</p>';
                      echo '    </div>';
                      echo '  </div>';
                      echo '  </div>';
                    }
                  } else {
                    echo '<p>No collaborations found.</p>';
                  }

                  $conn->close();
                  ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- What people say slider: End -->
      <hr class="m-0" />
      <!-- Logo slider: Start -->
      <div class="container">
        <div class="swiper-logo-carousel py-4 my-lg-2">
          <div class="swiper" id="swiper-clients-logos">
            <div class="swiper-wrapper">
              <?php
              include 'include/db_connection.php';

              $sql = "SELECT * FROM collaborations WHERE status = 'active' ORDER BY collab_id ASC";
              $result = $conn->query($sql);



              if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                  $logoPath = "../../html-starter/AdminGensanMed/php/" . $row["logo"];

                  echo '  <div class="swiper-slide">';
                  echo '        <img src="' . htmlspecialchars($logoPath) . '" alt="client logo" class="client-logo" 
                                data-app-light-img="' . htmlspecialchars($logoPath) . '"
                                data-app-dark-img="' . htmlspecialchars($logoPath) . '" />';
                  echo '  </div>';

                }
              } else {
                echo '<p>No collaborations found.</p>';
              }
              $conn->close();
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Logo slider: End -->
    </section>
    <!-- Our Mission Vision and Core Values: Start -->
    <section id="MissionVisionCore" class="section-py landing-team">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Mission, Vision, Core Values</span>
        </div>
        <h3 class="text-center mb-1">
          <span class="position-relative fw-bold z-1">Gensan Medical Center's
          </span>

        </h3>
        <p class="text-center mb-md-5 pb-3">Purpose, Long-term Goal, Future aspirations, and Fundamental Principles</p>
        <div class="row gy-5 mt-2">
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-primary position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/miss.png"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-primary text-center">
                <h5 class="card-title mb-0" id="Mission">Mission</h5>
                <p class="text-muted mb-0 mb-2">“God-Centered, World-Class, Quality Patient Care”</p>
                <a class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#MissionModal">Read
                  More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-danger position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/lead.png"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-danger text-center">
                <h5 class="card-title mb-0" id="Vission">Vision</h5>
                <p class="text-muted mb-2">Leading in compassionate, competent, and ethical healthcare.</p>
                <a class="btn btn-sm btn-label-danger" data-bs-toggle="modal" data-bs-target="#VisionModal">Read
                  More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-success position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/cor.png"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-primary text-center">
                <h5 class="card-title mb-0" id="CoreValues">Core Values</h5>
                <p class="text-muted mb-3">Providing compassionate, God-centered care with integrity and inclusivity.
                </p>
                <a class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#CoreValuesModal">Read
                  More</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="modal-onboarding modal fade animate__animated" id="MissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content text-center">
            <div class="modal-header border-0">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body onboarding-horizontal p-0">
              <div class="onboarding-media">
                <img src="#" alt="boy-verify-email-light" width="400" class="img-fluid" data-app-light-img="#"
                  data-app-dark-img="#" />
              </div>
              <div class="onboarding-content mb-3">
                <h4 class="onboarding-title text-body">“God-Centered, World-Class, Quality Patient Care”</h4>
                <div class="onboarding-info">
                  Our mission is to provide God-centered, world-class, quality patient care, guided by compassion,
                  excellence, and a commitment to holistic healing.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="modal-onboarding modal fade animate__animated" id="VisionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content text-center">
            <div class="modal-header border-0">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body onboarding-horizontal p-0">
              <div class="onboarding-media">
                <img src="#" alt="boy-verify-email-light" width="650" class="img-fluid" data-app-light-img="#"
                  data-app-dark-img="#" />
              </div>
              <div class="onboarding-content mb-0">
                <h4 class="onboarding-title text-body">Leading in compassionate, competent, and ethical healthcare.</h4>
                <div class="onboarding-info">
                  Providing God-Centered, world class, quality patient care through a dynamic organization of
                  compassionate, competent, and ethical healthcare professionals offering diversified healthcare
                  services.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-onboarding modal fade animate__animated" id="CoreValuesModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content text-center">
            <div class="modal-header border-0">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body onboarding-horizontal p-0">
              <div class="onboarding-media">
                <img src="#" alt="boy-verify-email-light" width="1000" class="img-fluid" data-app-light-img="#"
                  data-app-dark-img="#" />
              </div>
              <div class="onboarding-content mb-3">
                <h4 class="onboarding-title text-body">We provide compassionate, God-centered care with excellence,
                  integrity, and accountability, embracing diversity and ensuring competence</h4>
                <div class="onboarding-info">
                  We are committed to providing God-centered, quality patient care through a diverse, compassionate, and
                  family-centered approach, upholding excellence, integrity, and accountability, while promoting
                  ecological sustainability and ensuring competence in every aspect of our practice.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our great team: End -->
    <!-- Useful features: End -->
    <!-- Real customers reviews: Start -->
    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
      <div class="container">

        <h3 class="text-center mb-1">
          <span class="position-relative fw-bold z-1">News

          </span>
          and Updates
        </h3>
        <p class="text-center mb-4 mb-lg-5 pb-md-3">Be updated and Look for the latest news within the Hospital</p>

        <div class="text-center">
          <a class="btn btn-sm btn-label-primary mb-3" href="#">See all Previous News</a>

        </div>

        <?php
        include 'include/db_connection.php'; // Ensure you have a database connection
        
        $sql = "SELECT * FROM news WHERE status = 1 ORDER BY date DESC"; // Fetch news ordered by latest date
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '<div class="row">';

          while ($row = $result->fetch_assoc()) {
            echo '
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="bg-label-primary rounded-3 text-center mb-3 pb-2 pt-2">
                        <img class="img-fluid" src="../../html-starter/AdminGensanMed/php/' . $row['image'] . '" alt="News Image" width="380" />
                    </div>
                    <h5 class="mb-2 pb-1">' . htmlspecialchars($row['title']) . '</h5>
                    <p class="">' . htmlspecialchars($row['summary']) . '</p>
                    <div class="row mb-3 g-3">
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-calendar-event ti-sm"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">' . date("F d, Y", strtotime($row['date'])) . '</h6>
                                    <small>Published Date</small>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <a href="News-Details.php?id=' . $row['id'] . '" class="btn btn-primary w-100" >Read More</a>
                </div>
            </div>
        </div>';
          }

          echo '</div>';
        } else {
          echo '<p>No news available.</p>';
        }

        $conn->close();
        ?>

        <!-- <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-clock ti-md"></i></span>
                                </div>
                                <div>
                                  
                                </div>
                            </div>
                        </div> -->

      </div>
    </section>
    <!-- Contact Us: End -->

    <a href="https://m.me/GensanMedicalCenter" target="_blank" id="messenger-icon" data-bs-toggle="tooltip"
      class="ti ti-tada ti-sm ti-messages-2-heart" data-bs-placement="left" title="Chat with us on Messenger!">
      <img src="../../assets/GMC_Photos/General_Image/messenger.png" alt="Chat with us" width="70">

    </a>

    <style>
      #messenger-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        /* Ensures it's always on top */
      }

      #messenger-icon img {
        border-radius: 30%;
        cursor: pointer;
        transition: transform 0.3s;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      }
    </style>



    <!-- Real customers reviews: End -->

    <!-- Our great team: Start -->
    <section id="landingTeam" class="section-py landing-team">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Leaderships</span>
        </div>
        <h3 class="text-center mb-1">
          <span class="position-relative fw-bold z-1">Guiding and Inspiring</span>
        </h3>
        <p class="text-center mb-md-5 pb-3">Towards Quality Care and Efficiency.</p>
        <div class="row gy-5 mt-2">
          <div class="col-lg-3 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-success position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/Leadership.gif"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-success text-center">
                <h5 class="card-title mb-0"><strong>Board of Directors</strong></h5>
                <a class="btn btn-sm btn-label-primary mt-2" aria-current="page"
                  href="landing-page.php#landingCollaborations">See More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-success position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/Administration.gif"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-success text-center">
                <h5 class="card-title mb-0"><strong>Administration</strong></h5>
                <a class="btn btn-sm btn-label-primary mt-2" aria-current="page"
                  href="landing-page.php#landingCollaborations">See More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-warning position-relative team-image-box">
                <img src="../../assets/GMC_Photos/General_Image/MedicalServices.gif"
                  class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-warning text-center">
                <h5 class="card-title mb-0"><strong>Medical Services</strong></h5>
                <a class="btn btn-sm btn-label-primary mt-2" aria-current="page"
                  href="landing-page.php#landingCollaborations">See More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card mt-3 mt-lg-0 shadow-none">
              <div class="bg-label-warning position-relative team-image-box">
                <img src="#" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                  alt="human image" />
              </div>
              <div class="card-body border border-top-0 border-label-warning text-center">
                <h5 class="card-title mb-0"><strong>Physicians</strong></h5>
                <a class="btn btn-sm btn-label-primary mt-2" aria-current="page"
                  href="landing-page.php#landingCollaborations">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our great team: End -->

    <section id="GallerySection" class="section-py landing-team">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Gallery</span>
        </div>

        <div class="col-12 mb-4">
          <div class="swiper" id="swiper-3d-coverflow-effect">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/1.webp)">
                <!-- Name if possible Slide 1 -->
              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/2.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/3.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/4.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/5.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/6.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/7.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/8.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/9.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/10.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(../../assets/GMC_Photos/Gallery/11.webp)">

              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

      </div>
    </section>
    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">FAQ</span>

        </div>
        <h3 class="text-center mb-1">
          Frequently asked
          <span class="position-relative fw-bold z-1">questions
            <img src="../../assets/img/front-pages/icons/section-title-icon.png" alt="laptop charging"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
        </h3>
        <p class="text-center mb-5 pb-3">Browse through these FAQs to find answers to commonly asked questions.</p>

        <div class="row gy-5">
          <style>
            .bg-bodyChat {
              background: #ffffff !important;
            }
          </style>


        </div>



        <div class="row mt-4 pt-2">
          <!-- Navigation -->
          <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
              <ul class="nav nav-align-left nav-pills flex-column">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#billing">
                    <i class="ti ti-credit-card me-1 ti-sm"></i>
                    <span class="align-middle fw-medium">Billing & Payment</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#appointments">
                    <i class="ti ti-calendar me-1 ti-sm"></i>
                    <span class="align-middle fw-medium">Appointments</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#visitor-guidelines">
                    <i class="ti ti-user-check me-1 ti-sm"></i>
                    <span class="align-middle fw-medium">Visitor Guidelines</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#facilities">
                    <i class="ti ti-building me-1 ti-sm"></i>
                    <span class="align-middle fw-medium">Hospital Facilities</span>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#medical-services">
                    <i class="ti ti-stethoscope me-1 ti-sm"></i>
                    <span class="align-middle fw-medium">Medical Services</span>
                  </button>
                </li>
              </ul>
              <div class="d-none d-md-block">
                <div class="mt-4">
                  <img src="../../assets/GMC_Photos/General_Image/Konsulta.webp" class="img-fluid" width="270"
                    alt="FAQ Image" />
                </div>
              </div>
            </div>
          </div>
          <!-- /Navigation -->

          <!-- FAQ's -->
          <div class="col-lg-9 col-md-8 col-12">
            <div class="tab-content py-0">

              <!-- Billing & Payment -->
              <div class="tab-pane fade show active" id="billing" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                  <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                      <i class="ti ti-credit-card ti-lg"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="mb-0">
                      <span class="align-middle">Billing & Payment</span>
                    </h4>
                    <small>Get help with hospital bills and payment options.</small>
                  </div>
                </div>
                <div id="accordionBilling" class="accordion">
                  <div class="card accordion-item active">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true"
                        data-bs-target="#accordionBilling-1" aria-controls="accordionBilling-1">
                        How can I pay my hospital bill?
                      </button>
                    </h2>
                    <div id="accordionBilling-1" class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        We accept payments via cash, credit/debit cards, online banking, and health insurance coverage.
                        You can also pay at the hospital cashier or through our online portal.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Appointments -->
              <div class="tab-pane fade" id="appointments" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                  <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                      <i class="ti ti-calendar ti-lg"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="mb-0">
                      <span class="align-middle">Appointments</span>
                    </h4>
                    <small>Find out how to schedule an appointment.</small>
                  </div>
                </div>
                <div id="accordionAppointments" class="accordion">
                  <div class="card accordion-item active">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true"
                        data-bs-target="#accordionAppointments-1" aria-controls="accordionAppointments-1">
                        How do I book an appointment?
                      </button>
                    </h2>
                    <div id="accordionAppointments-1" class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        You can schedule an appointment online through our website, by calling our reception, or by
                        visiting
                        the hospital in person. Please bring your ID and insurance details, if applicable.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Visitor Guidelines -->
              <div class="tab-pane fade" id="visitor-guidelines" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                  <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                      <i class="ti ti-user-check ti-lg"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="mb-0">
                      <span class="align-middle">Visitor Guidelines</span>
                    </h4>
                    <small>Important rules for visitors.</small>
                  </div>
                </div>
                <div id="accordionVisitor" class="accordion">
                  <div class="card accordion-item active">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true"
                        data-bs-target="#accordionVisitor-1" aria-controls="accordionVisitor-1">
                        What are the hospital's visiting hours?
                      </button>
                    </h2>
                    <div id="accordionVisitor-1" class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        Our visiting hours are from 10:00 AM to 8:00 PM daily. Only two visitors are allowed per patient
                        at a time.
                        Please follow hygiene and safety protocols while visiting.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Hospital Facilities -->
              <div class="tab-pane fade" id="facilities" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                  <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                      <i class="ti ti-building ti-lg"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="mb-0">
                      <span class="align-middle">Hospital Facilities</span>
                    </h4>
                    <small>Explore our hospital amenities and services.</small>
                  </div>
                </div>
                <div id="accordionFacilities" class="accordion">
                  <div class="card accordion-item active">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true"
                        data-bs-target="#accordionFacilities-1" aria-controls="accordionFacilities-1">
                        What facilities are available at the hospital?
                      </button>
                    </h2>
                    <div id="accordionFacilities-1" class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        Our hospital offers emergency care, specialized outpatient clinics, private rooms, pharmacy,
                        cafeteria,
                        parking, and free WiFi for visitors. Contact the reception for more details.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Medical Services -->
              <div class="tab-pane fade" id="medical-services" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                  <div>
                    <span class="badge bg-label-primary rounded-2 p-2">
                      <i class="ti ti-stethoscope ti-lg"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="mb-0">
                      <span class="align-middle">Medical Services</span>
                    </h4>
                    <small>Details about our healthcare services.</small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- Contact -->
        <div class="row mt-5">
          <div class="col-12 text-center mb-4">
            <div class="badge bg-label-primary">Question?</div>
            <h4 class="my-2">You still have a question?</h4>
            <p>If you can't find question in our FAQ, you can message us. We'll answer you shortly!</p>
          </div>
        </div>
      </div>

      <section id="landingContact">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img src="../../assets/img/front-pages/icons/contact-border.png" alt="contact border"
                  class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl" />
                <img src="../../assets/GMC_Photos/General_Image/Konsulta.webp" alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl" />
                <div class="pt-3 px-4 pb-1">
                  <div class="row gy-3 gx-md-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-2 me-2"><i class="ti ti-mail ti-sm"></i></div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h5 class="mb-0">
                            <a href="mailto:contactus@gensanmed.com" class="text-heading">contactus@gensanmed.com</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">

                      <div class="d-flex align-items-center mx-4">
                        <div class="badge bg-label-success rounded p-2 me-2">
                          <i class="ti ti-phone-call ti-sm"></i>
                        </div>
                        <div>
                          <p class="mb-0">Phone</p>
                          <h5 class="mb-0"><a href="tel:+639988481843 " class="text-heading">(0998) 848 1843</a></h5>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-1">Send a message</h4>
                  <p class="mb-4">
                    If you would like to discuss anything related to payment, account, licensing,<br
                      class="d-none d-lg-block" />
                    partnerships, or have pre-sales questions, you’re at the right place.
                  </p>
                  <form>
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input type="text" id="contact-form-email" class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Message</label>
                        <textarea id="contact-form-message" class="form-control" rows="8"
                          placeholder="Write a message"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send inquiry</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="container">
        <div class="text-center mb-1 pb-1 mt-5">
          <span class="badge bg-label-primary">Where are we located?</span>
        </div>
        <div class="row gy-5 mt-2">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.354870854455!2d125.14557377447848!3d6.0827962281287995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f7a1e83a729f59%3A0x3b684e885cd70c77!2sGensan%20Medical%20Center!5e0!3m2!1sen!2sph!4v1740033223036!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
  </div>
  </section>
  <!-- FAQ: End -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get URL parameters
      const urlParams = new URLSearchParams(window.location.search);

      if (urlParams.has('mail')) {
        if (urlParams.get('mail') === "success") {
          Swal.fire({
            icon: "success",
            title: "Thank you for reaching out!",
            text: "We have received your message!",
            customClass: {
              confirmButton: "btn btn-primary"
            },
            buttonsStyling: false
          });

        } else if (urlParams.get('mail') === "error") {
          Swal.fire({
            icon: "error",
            title: "Oops! Something went wrong.",
            text: "Your message could not be sent. Please try again later.",
            customClass: {
              confirmButton: "btn btn-danger"
            },
            buttonsStyling: false
          });
        }

        // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
        history.replaceState(null, "", window.location.pathname);
      }
    });
  </script>

  </div>

  <!-- Footer: Start -->
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
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/front-main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/front-page-landing.js"></script>
  <!-- <script src="../../assets/js/ui-carousel.js"></script> -->
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>

  <!-- Start of LiveChat (www.livechat.com) code -->
  <!-- <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19050509;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))
  </script>
  <noscript><a href="https://www.livechat.com/chat-with/19050509/" rel="nofollow">Chat with us</a>, powered by <a
      href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
  End of LiveChat code -->

</body>

</html>