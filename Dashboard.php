<!doctype html>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: AdminLogin.php");
  exit();
}
?>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-starter">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>GenMed | Dashboard</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/GMC_Photos/logo.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
  <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/sweetalert2/sweetalert2.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
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
              <img src="assets/GMC_Photos/logo.png" alt="Logo" width="25px" height="25px">
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
          <li class="menu-item active">
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
            <a href="NewsUpdate.php" class="menu-link">
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
          <li class="menu-item">
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
            <h4 class="py-3 mb-4">Dashboard</h4>

            <div class="row"> <!-- View sales -->
              <?php
              include 'php/db_connection.php';

              $sql = "SELECT 
                      COUNT(*) AS total_collaborators, 
                      SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) AS active_count,
                      SUM(CASE WHEN status = 'inactive' THEN 1 ELSE 0 END) AS inactive_count,
                      SUM(CASE WHEN status = 'archived' THEN 1 ELSE 0 END) AS archived_count
                  FROM collaborations";

              $result = $conn->query($sql);
              $data = $result->fetch_assoc();

              $pastdays = "SELECT * FROM collaborations WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
              $pastdaysResult = $conn->query($pastdays);
              $dataPastDays = $pastdaysResult->num_rows;

              // Assign values
              $totalCollaborators = $data['total_collaborators'] ?? 0;
              $activeCount = $data['active_count'] ?? 0;
              $inactiveCount = $data['inactive_count'] ?? 0;
              $archivedCount = $data['archived_count'] ?? 0;

              $conn->close();
              ?>
              <div class="col-xl-4 mb-4 col-lg-5 col-12">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-6">
                      <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Collaboration Tracker</h5>
                        <small>For This Week</small>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center mt-2">
                            <div class="badge rounded-pill bg-label-success me-3 p-2">
                              <i class="ti ti-calendar-due ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0"><?php echo $dataPastDays; ?></h5>
                              <small>New Collaboration</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="assets/GMC_Photos/General_Image/collaboration.png" height="140" alt="view sales" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card">
                  <div class="card-body pb-0">
                    <div class="card-icon">
                      <span class="badge bg-label-success rounded-pill p-2">
                        <i class="ti ti-credit-card ti-sm"></i>
                      </span>
                    </div>
                    <h5 class="card-title mb-0 mt-2">97.5k</h5>
                    <small>Revenue Generated</small>
                  </div>
                  <div id="revenueGenerated"></div>
                </div>
              </div> -->


              <!-- Statistics -->
              <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                  <div class="card-header">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">Collaboration Overview</h5>
                      <!-- <small class="text-muted">Updated 1 month ago</small> -->
                    </div>
                  </div>
                  <!-- **2. Display Data Dynamically in Your HTML** -->
                  <div class="card-body">
                    <div class="row gy-3">
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-primary me-3 p-2">
                            <i class="ti ti-users ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?php echo $totalCollaborators; ?></h5>
                            <small>Total Collaborator</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-info me-3 p-2">
                            <i class="ti ti-check ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?php echo number_format($activeCount); ?></h5>
                            <small>Active</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-danger me-3 p-2">
                            <i class="ti ti-x ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?php echo number_format($inactiveCount); ?></h5>
                            <small>Inactive</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-warning me-3 p-2">
                            <i class="ti ti-archive ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?php echo number_format($archivedCount); ?></h5>
                            <small>Archived</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!--/ Statistics -->
            </div>
            <?php
            include 'include/logoutModal.php';
            ?>
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
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>

  <script src="assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/extended-ui-sweetalert2.js"></script>
  <!-- Page JS -->

</body>

</html>