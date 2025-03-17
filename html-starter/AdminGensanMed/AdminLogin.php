<!doctype html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Gensan Medical Center | Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/GMC_Photos/logo.png" />

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

  <!-- Vendor -->
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />


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
  <style>
    .form-control:focus,
    .form-select:focus {
      border-color: #6295bf !important;
    }

    .btn-primary {
      color: #fff;
      background-color: #6295bf;
      border-color: #6295bf;
    }

    .btn-primary:hover {
      color: #fff !important;
      background-color: #78b6e7 !important;
      border-color: #78b6e7 !important;
    }
  </style>
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <!-- /Left Text -->
      <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img src="../../assets/GMC_Photos/General_Image/Login.webp" alt="auth-login-cover"
            class="img-fluid my-5 auth-illustration"
            data-app-light-img="../../assets/GMC_Photos/General_Image/Login.webp"
            data-app-dark-img="../../assets/GMC_Photos/General_Image/Login.webp" />

          <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg"
            data-app-light-img="illustrations/bg-shape-image-light.png"
            data-app-dark-img="illustrations/bg-shape-image-dark.png" />
        </div>
      </div>
      <!-- /Left Text -->
      <?php
      include 'include/logoutModal.php';
      ?>
      <!-- Login -->
      <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <!-- Logo -->
          <div class="app-brand mb-4 d-flex">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="../../assets/GMC_Photos/logo.png" alt="Logo" width="30">
              </span>
            </a>
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="../../assets/GMC_Photos/CaringBeyondHealing.png" alt="Logo" width="30">
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h3 class="mb-1">Welcome Admin 👋</h3>
          <p class="mb-4">Please sign-in to your account.</p>

          <form id="formAuthentication" class="mb-3" action="include/login.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Username</label>
              <input type="text" class="form-control" id="email" name="email-username"
                placeholder="Enter username or email" autofocus required />
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" required />
                <span class="input-group-text cursor-pointer" id="togglePassword">
                  <i class="ti ti-eye-off"></i>
                </span>
              </div>
            </div>

            <div class="mb-3">
              <a href="auth-forgot-password-cover.html">
                <small>Forgot Password?</small>
              </a>
            </div>

            <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
          </form>
          <p class="text-center">
            <span>If you have any questions, feel free to reach us</span>

          </p>

          <div class="divider my-4">
            <div class="divider-text">HIMS Contact</div>
          </div>

          <style>
            a {
              color: #6295bf;
            }

            a:hover {
              color: #5f50fd;
            }
          </style>
          <div class="d-flex justify-content-center">
            <a href="auth-register-cover.html">
              <span>87000 Jollibee Delivery</span>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get URL parameters
      const urlParams = new URLSearchParams(window.location.search);

      if (urlParams.get('loginstatus') === "error") {
        Swal.fire({
          icon: "error",
          title: "Oops! Something went wrong.",
          text: "You have entered a wrong password. Try again!",
          customClass: {
            confirmButton: "btn btn-danger"
          },
          buttonsStyling: false
        });
      } else if (urlParams.get('loginstatus') === "error2") {
        Swal.fire({
          icon: "error",
          title: "Oops! Something went wrong.",
          text: "No username or email found. Try again!",
          customClass: {
            confirmButton: "btn btn-danger"
          },
          buttonsStyling: false
        });
      }

      if (urlParams.get('session') === "unset") {
        Swal.fire({
          icon: "error",
          title: "Oops! Something went wrong.",
          text: "Session Unset! Please contact Admin",
          customClass: {
            confirmButton: "btn btn-danger"
          },
          buttonsStyling: false
        });
        // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
        history.replaceState(null, "", window.location.pathname);
      }
    }
    );
  </script>
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
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/pages-auth.js"></script>
</body>

</html>