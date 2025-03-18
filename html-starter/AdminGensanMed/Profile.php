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

  <title>GenMed | Profile</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" href="../../assets/GMC_Photos/logo.png" type="image/x-icon" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
  <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
  <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
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

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="Dashboard.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="../../assets/GMC_Photos/logo.png" alt="Logo" width="25px" height="25px">
            </span>
            <span class="app-brand-text demo menu-text fw-bold text-success px-4">Menu</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle" data-bs-toggle="tooltip"
              data-bs-placement="right" title="Fixed Sidebar"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Page -->
          <li class="menu-item">
            <a href="Dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-tada-hover ti-smart-home"></i>
              <div data-i18n="Page 1">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Collaboration.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-heart-handshake"></i>
              <div data-i18n="Page 2">Collaborations</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="News.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-speakerphone"></i>
              <div data-i18n="Page 2">News</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Leadership.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-user-star"></i>
              <div data-i18n="Page 2">Leadership</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Doctors.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-user-heart"></i>
              <div data-i18n="Page 2">Physicians</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Archive.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-archive"></i>
              <div data-i18n="Page 2">Archive</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="Profile.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-settings"></i>
              <div data-i18n="Page 2">Account Setting</div>
            </a>
          </li>
        </ul>
      </aside>
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
                  <?php
                  include 'php/db_connection.php'; // Include your database connection
                  
                  $user_id = $_SESSION['user_id'];

                  // Fetch user data
                  $sql = "SELECT username, email, department, contact_number, profile_picture FROM users WHERE user_id = ?";
                  $stmt = $conn->prepare($sql);
                  $stmt->bind_param("i", $user_id);
                  $stmt->execute();
                  $result = $stmt->get_result();

                  if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    $imgPath = "../../html-starter/AdminGensanMed/php/" . $user['profile_picture']; // Corrected concatenation
                  } else {
                    echo "User not found!";
                  }

                  $stmt->close();
                  $conn->close();
                  ?>



                  <form action="php/profile_upload.php" enctype="multipart/form-data" method="POST" novalidate>
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="<?php echo htmlspecialchars($imgPath); ?>" alt="user-avatar"
                          class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />

                        <div class="button-wrapper" novalidate>
                          <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="ti ti-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" id="profile_pic" name="profile_pic"
                              class="account-file-input" hidden accept="image/png/gif/webp, image/jpeg/gif/webp" />
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
                          <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                          <label for="username" class="form-label">Username</label>
                          <input class="form-control" type="text" id="username" name="username" minlength="8"
                            maxlength="15" required value="<?php echo htmlspecialchars($user['username']); ?>" />
                        </div>

                        <div class="mb-3 col-md-6">
                          <label for="email" class="form-label">E-mail</label>
                          <input class="form-control" type="email" id="email" name="email" required
                            value="<?php echo htmlspecialchars($user['email']); ?>" />
                        </div>

                        <div class="mb-3 col-md-6">
                          <label for="department" class="form-label">Department</label>
                          <input type="text" class="form-control" id="department" name="department" readonly
                            value="<?php echo htmlspecialchars($user['department']); ?>" />
                        </div>

                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">PH (+63)</span>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="10"
                              required value="<?php echo htmlspecialchars($user['contact_number']); ?>" />
                          </div>
                        </div>

                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                      </div>
                  </form>


                  <script>
                    (function () {
                      'use strict';

                      // Fetch the form element
                      const form = document.querySelector('form');

                      // Enable Bootstrap validation styles on submit
                      form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      });

                      // File input validation
                      document.getElementById('upload').addEventListener('change', function (event) {
                        const file = event.target.files[0];
                        const filePathText = document.getElementById('filePath');
                        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                        // const maxSize = 800 * 1024; // 800KB

                        if (file) {
                          if (!allowedExtensions.test(file.name)) {
                            filePathText.textContent = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
                            filePathText.classList.add('text-danger');
                            event.target.value = "";
                            return;
                          }

                          // if (file.size > maxSize) {
                          //   filePathText.textContent = "File is too large. Max size is 800KB.";
                          //   filePathText.classList.add('text-danger');
                          //   event.target.value = "";
                          //   return;
                          // }

                          // File is valid, display preview
                          const reader = new FileReader();
                          reader.onload = function (e) {
                            document.getElementById('uploadedAvatar').src = e.target.result;
                          };
                          reader.readAsDataURL(file);

                          filePathText.textContent = "Selected file: " + file.name;
                          filePathText.classList.remove('text-danger');
                        }
                      });

                      // Phone Number Validation: Only numbers & exactly 10 digits
                      const phoneInput = document.getElementById('phoneNumber');
                      phoneInput.addEventListener('input', function (event) {
                        // Remove non-numeric characters
                        this.value = this.value.replace(/\D/g, '');

                        if (this.value.length > 10) {
                          this.value = this.value.slice(0, 10); // Limit input to 10 digits
                        }

                        if (this.value.length === 10) {
                          this.setCustomValidity("");
                          this.classList.remove("is-invalid");
                        } else {
                          this.setCustomValidity("Phone number must be exactly 10 digits.");
                          this.classList.add("is-invalid");
                        }
                      });

                      // Ensure invalid feedback shows up dynamically
                      document.querySelectorAll(".form-control").forEach(input => {
                        input.addEventListener("input", function () {
                          if (this.checkValidity()) {
                            this.classList.remove("is-invalid");
                          } else {
                            this.classList.add("is-invalid");
                          }
                        });
                      });

                    })();
                  </script>

                  <script>
                    document.addEventListener("DOMContentLoaded", function () {
                      // Get URL parameters
                      const urlParams = new URLSearchParams(window.location.search);

                      if (urlParams.has('updateStatus')) {
                        if (urlParams.get('updateStatus') === "success") {
                          Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "Profile Updated Successfuly.",
                            customClass: {
                              confirmButton: "btn btn-primary"
                            },
                            buttonsStyling: false
                          });
                        } else if (urlParams.get('updateStatus') === "error") {
                          Swal.fire({
                            icon: "error",
                            title: "Oooops! Something went wrong.",
                            text: "Please try again later.",
                            customClass: {
                              confirmButton: "btn btn-primary"
                            },
                            buttonsStyling: false
                          });
                        }
                      }
                      history.replaceState(null, "", window.location.pathname);
                    }
                    );
                  </script>
                </div>
                <!-- /Account -->
              </div>

            </div>
          </div>
        </div>
        <!-- / Content -->
        <?php
        include 'include/logoutModal.php';
        ?>
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

  <!-- build:js assets/vendor/js/core.js -->

  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>


  <script src="../../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>

  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>
  <!-- Page JS -->
  <script src="../../assets/js/app-ecommerce-category-list.js"></script>
  <script src="../../assets/js/app-ecommerce-product-add.js"></script>
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
  <script src="../../assets/js/forms-selects.js"></script>
  <script src="../../assets/js/forms-editors.js"></script>
</body>

</html>