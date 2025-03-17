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
  <link rel="icon" type="image/x-icon" href="../../assets/GMC_Photos/logo.png" />

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
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/page-account-settings.css" />
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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Security</h4>

            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-4">
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.php"><i class="ti-xs ti ti-users me-1"></i> Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="Settings.php"><i class="ti-xs ti ti-lock me-1"></i>
                      Security</a>
                  </li>
                </ul>
                <!-- Change Password -->
                <div class="card mb-4">
                  <h5 class="card-header">Change Password</h5>
                  <div class="card-body">
                    <form id="formAccountSettings" method="GET" onsubmit="return false">
                      <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                          <label class="form-label" for="currentPassword">Current Password</label>
                          <div class="input-group input-group-merge">
                            <input class="form-control" type="password" name="currentPassword" id="currentPassword"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle">
                          <label class="form-label" for="newPassword">New Password</label>
                          <div class="input-group input-group-merge">
                            <input class="form-control" type="password" id="newPassword" name="newPassword"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                          </div>
                        </div>

                        <div class="mb-3 col-md-6 form-password-toggle">
                          <label class="form-label" for="confirmPassword">Confirm New Password</label>
                          <div class="input-group input-group-merge">
                            <input class="form-control" type="password" name="confirmPassword" id="confirmPassword"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                          </div>
                        </div>
                        <div class="col-12 mb-4">
                          <h6>Password Requirements:</h6>
                          <ul class="ps-3 mb-0">
                            <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                            <li class="mb-1">At least one lowercase character</li>
                            <li>At least one number, symbol, or whitespace character</li>
                          </ul>
                        </div>
                        <div>
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>



                <!-- Recent Devices -->
                <div class="card mb-4">
                  <h5 class="card-header">Recent Devices</h5>
                  <div class="table-responsive">
                    <table class="table border-top">
                      <thead>
                        <tr>
                          <th class="text-truncate">Browser</th>
                          <th class="text-truncate">Device</th>
                          <th class="text-truncate">Location</th>
                          <th class="text-truncate">Recent Activities</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php
                        // Fetch login history from the database
                        include 'php/db_connection.php';
                        $user_id = $_SESSION['user_id']; // Ensure user is logged in
                        $sql = "SELECT browser, device, location, login_time FROM login_devices WHERE user_id = ? ORDER BY login_time DESC";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            $icon_class = "";
                            if (strpos(strtolower($row['browser']), 'windows') !== false) {
                              $icon_class = "ti ti-brand-windows text-info";
                            } elseif (strpos(strtolower($row['browser']), 'iphone') !== false) {
                              $icon_class = "ti ti-device-mobile text-danger";
                            } elseif (strpos(strtolower($row['browser']), 'android') !== false) {
                              $icon_class = "ti ti-brand-android text-success";
                            } elseif (strpos(strtolower($row['browser']), 'macos') !== false) {
                              $icon_class = "ti ti-brand-apple";
                            } else {
                              $icon_class = "ti ti-world"; // Default icon
                            }

                            echo "<tr>
                <td class='text-truncate'>
                    <i class='{$icon_class} me-2 ti-sm'></i>
                    <span class='fw-medium'>{$row['browser']}</span>
                </td>
                <td class='text-truncate'>{$row['device']}</td>
                <td class='text-truncate'>{$row['location']}</td>
                <td class='text-truncate'>" . date("F j, Y \\a\\t g:i A", strtotime($row['login_time'])) . "</td>
            </tr>";
                          }
                        } else {
                          // Show message if no records found
                          echo "<tr>
                <td colspan='4' class='text-center text-muted fw-medium'>No Recent Device Found</td>
              </tr>";
                        }

                        $stmt->close();
                        ?>
                      </tbody>

                    </table>
                  </div>
                </div>
                <!--/ Recent Devices -->
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


  <!-- Page JS -->
  <script src="../../assets/js/pages-account-settings-security.js"></script>
  <script src="../../assets/js/modal-enable-otp.js"></script>
</body>

</html>