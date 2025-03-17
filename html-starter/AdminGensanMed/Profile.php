<!doctype html>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: ../AdminGensanMed/AdminLogin.php");
  exit();
}
?>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
  data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-starter">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Dashboard</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

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
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php
      include 'include/aside.php';
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php
        include 'include/upnav.php';
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Profile</h4>

            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-4">
                  <li class="nav-item">
                    <a class="nav-link active" href="Profile.php"><i class="ti-xs ti ti-users me-1"></i>
                      Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Settings.php"><i class="ti-xs ti ti-lock me-1"></i> Security</a>
                  </li>
                </ul>
                <div class="card mb-4">
                  <h5 class="card-header">Profile Details</h5>
                  <!-- Account -->
                  <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <img src="../../assets/img/avatars/14.png" alt="user-avatar"
                        class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                      <form action="php/news_update.php" enctype="multipart/form-data" method="POST">
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="ti ti-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" name="profile_pic" class="account-file-input" hidden
                              accept="image/png, image/jpeg" />
                          </label>
                          <div id="filePath" class="text-muted mt-2">Allowed JPG, GIF, or PNG. Max size of 800K</div>

                          <script>
                            document.getElementById('upload').addEventListener('change', function (event) {
                              const file = event.target.files[0];
                              if (file) {
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                  document.getElementById('uploadedAvatar').src = e.target.result;
                                };
                                reader.readAsDataURL(file);

                                // Display file name or path
                                document.getElementById('filePath').textContent = "Selected file: " + file.name;
                              }
                            });
                          </script>

                        </div>
                    </div>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">

                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <input class="form-control" type="hidden" id="user_id" name="user_id"
                          value="<?php echo $_SESSION['user_id']; ?>" />

                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username" value="" autofocus />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com"
                          placeholder="john.doe@example.com" />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department"
                          value="Marketing Department" readonly />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">PH (+63)</span>
                          <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                            placeholder="--- ---- ---" />
                        </div>
                      </div>
                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                    </form>
                  </div>
                  <!-- /Account -->
                </div>

              </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php
          include 'include/footer.php';
          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get URL parameters
      const urlParams = new URLSearchParams(window.location.search);

      if (urlParams.has('loginstatus')) {
        if (urlParams.get('loginstatus') === "success") {
          Swal.fire({
            icon: "success",
            title: "Magandang GensanMed!",
            text: "Login Succesful",
            customClass: {
              confirmButton: "btn btn-primary"
            },
            buttonsStyling: false
          });
        }
      }

      // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
      history.replaceState(null, "", window.location.pathname);
    }
    );
  </script>
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
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>


  <!-- Page JS -->
  <script src="../../assets/js/pages-account-settings-account.js"></script>
</body>

</html>