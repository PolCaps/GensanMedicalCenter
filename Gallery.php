<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="assets/" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | Gallery</title>

  <meta name="description" content="" />

  <link rel="icon" href="assets/GMC_Photos/logo.png" type="image/x-icon" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="assets/vendor/css/pages/front-page-landing.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/ui-carousel.css" />
  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/front-config.js"></script>
</head>

<body>
  <script src="assets/vendor/js/dropdown-hover.js"></script>
  <script src="assets/vendor/js/mega-dropdown.js"></script>

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

          <div
            class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mt-5 text-center">
            <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg text-primary">
              Gallery
            </h3>

            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
            <style>
              .typing-text {
                font-size: 24px;
                color: black;
                font-weight: bold;
              }
            </style>

            <p id="dynamicText" class="mb-3 text-black typing-text"></p>


            <script>
              var typed = new Typed("#dynamicText", {
                strings: ["🩺 Advanced Medical Technology – Equipped with state-of-the-art facilities to provide top-notch medical care.",
                  "👨‍⚕️ Expert Healthcare Professionals – A team of skilled doctors, nurses, and specialists dedicated to your health and well-being.",
                  "🏥 Comprehensive Services – From emergency care to specialized treatments, we cover all your healthcare needs.",
                  "💙 Patient-Centered Care – Compassionate and personalized healthcare tailored to every patient’s needs.",
                  "🚑 24/7 Emergency Services – Immediate response to medical emergencies, ensuring fast and reliable care.",
                  "🌍 Accessible Location – Conveniently located in General Santos City, providing easy access to quality healthcare.",
                  "💰 Affordable and Quality Healthcare – World-class medical services at reasonable costs."],
                typeSpeed: 30,
                backSpeed: 10,
                startDelay: 500,
                showCursor: false,
                loop: false
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

      <div class="row">

        <div class="col-12 mb-4">
          <div class="swiper" id="swiper-3d-coverflow-effect">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/1.webp)">
                <!-- Name if possible Slide 1 -->
              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/2.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/3.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/4.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/5.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/6.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/7.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/8.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/9.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/10.webp)">

              </div>
              <div class="swiper-slide" style="background-image: url(assets/GMC_Photos/Gallery/11.webp)">

              </div>
            </div>

            <div class="swiper-pagination text-success"></div>

          </div>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper("#swiper-3d-coverflow-effect", {
              effect: "coverflow",
              grabCursor: true,
              centeredSlides: true,
              loop: true,
              slidesPerView: "auto",
              coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
              },
              autoplay: {
                delay: 3000, // Adjust delay time in milliseconds
                disableOnInteraction: false,
              },
              pagination: {
                el: ".swiper-pagination",
                clickable: true,

              },
            });
          });
        </script>



      </div>
    </div>
  </section>

  <!-- / Sections:End -->

  <?php
  include 'include/footer.php';
  ?>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="assets/vendor/libs/swiper/swiper.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <!-- Main JS -->
  <script src="assets/js/front-main.js"></script>


  <!-- Page JS -->
  <script src="assets/js/ui-carousel.js"></script>
  <script src="assets/js/front-page-landing.js"></script>
  <script src="assets/js/extended-ui-perfect-scrollbar.js"></script>
</body>

</html>