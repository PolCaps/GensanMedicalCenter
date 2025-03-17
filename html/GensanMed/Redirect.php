<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | PWA Installation</title>

  <meta name="description" content="" />

  <link rel="manifest" href="../../PWA/manifest.json">
  <script>
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("../../PWA/sw.js")
        .then(() => console.log("Service Worker Registered!"))
        .catch((error) => console.log("Service Worker Registration Failed:", error));
    }
  </script>

  <link rel="icon" href="../../assets/GMC_Photos/logo.png" type="image/x-icon" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-misc.css" />

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <!-- Coming Soon -->
  <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-1 mx-2">Install Progressive Web Application</h2>
      <p class="mb-4 mx-2">Get a fast, reliable, and app-like experience. Install our PWA for quick access anytime!</p>

      <div class="d-flex">
        <button id="installBtn" class="btn btn-success mx-3" style="display: none;" onclick="installPWA()">
          Download & Install PWA
        </button>

        <button class="btn btn-primary" onclick="continueInBrowser()">
          Continue using Browser
        </button>
      </div>

      <script>
        function continueInBrowser() {
          window.location.href = "http://localhost/GensanMedicalCenter/html/GensanMed/landing-page.php";
        }

        let deferredPrompt = null;

        window.addEventListener('beforeinstallprompt', (event) => {
          event.preventDefault();
          deferredPrompt = event;
          document.getElementById('installBtn').style.display = 'block';
        });

        function installPWA() {
          if (window.matchMedia('(display-mode: standalone)').matches) {
            Swal.fire({
              icon: "info",
              title: "PWA Already Installed",
              text: "You have already installed the PWA!",
              customClass: {
                confirmButton: "btn btn-primary"
              },
              buttonsStyling: false
            });
            return;
          }

          if (deferredPrompt) {
            deferredPrompt.prompt();
            deferredPrompt.userChoice.then(choice => {
              if (choice.outcome === 'accepted') {
                console.log("PWA installed successfully!");
                Swal.fire({
                  icon: "success",
                  title: "Installation Successful!",
                  text: "The PWA has been installed successfully.",
                  customClass: {
                    confirmButton: "btn btn-success"
                  },
                  buttonsStyling: false
                });

                setTimeout(() => {
                  restartPWA();  // 🚀 Call the restart function
                }, 2000);
              } else {
                console.log("User dismissed the PWA installation");
                Swal.fire({
                  icon: "warning",
                  title: "Installation Canceled",
                  text: "You canceled the PWA installation.",
                  customClass: {
                    confirmButton: "btn btn-warning"
                  },
                  buttonsStyling: false
                });
              }
              deferredPrompt = null;
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Installation Not Supported",
              text: "PWA installation is not supported on your browser.",
              customClass: {
                confirmButton: "btn btn-danger"
              },
              buttonsStyling: false
            });
          }
        }

        function restartPWA() {
          if (window.matchMedia('(display-mode: standalone)').matches) {
            // Redirect to loading page first
            window.location.href = "http://localhost/GensanMedicalCenter/html/GensanMed/loading.php";
          } else {
            window.location.reload(); // Normal reload if not in PWA mode
          }
        }
      </script>

      <div class="mt-2">
        <img src="../../assets/GMC_Photos/General_Image/LogoGmc.png" alt="page-misc-launching-soon" width="400"
          class="img-fluid" />
      </div>

    </div>
  </div>
  <div class="container-fluid misc-bg-wrapper">
    <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="page-misc-coming-soon"
      data-app-light-img="illustrations/bg-shape-image-light.png"
      data-app-dark-img="illustrations/bg-shape-image-dark.png" />
  </div>
  <!-- /Coming Soon -->

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
  <!-- Page JS -->
</body>

</html>