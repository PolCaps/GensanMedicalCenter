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

  <title>GenMed | Archives</title>

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
          <li class="menu-item ">
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
          <li class="menu-item active">
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
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Archived Collaborators</h5>
                <!-- Search Bar (No Submit Button) -->
                <div class="d-flex align-items-center justify-content-between">
                  <input type="search" id="searchInput" placeholder="Find Collaborator" class="form-control"
                    onkeyup="searchTable()" />
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Collaborator</th>
                      <th>Description</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="collaboratorTable"
                    style="max-height: 200px; overflow-y: auto;">
                    <!-- Data will be loaded here via AJAX -->
                  </tbody>
                </table>
                <?php
                include 'include/logoutModal.php';
                ?>
                <script>

                  function loadCollaborations() {
                    fetch("php/fetch_archivedCollab.php")
                      .then(response => response.text())
                      .then(data => {
                        document.getElementById("collaboratorTable").innerHTML = data;
                        attachEventListeners();
                      })
                      .catch(error => console.error("Error fetching data:", error));
                  }

                  document.addEventListener("DOMContentLoaded", loadCollaborations);

                </script>

              </div>
            </div>

            <div class="card mt-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Archived News</h5>
                <!-- Search Bar (No Submit Button) -->
                <div class="d-flex align-items-center justify-content-between">
                  <input type="search" id="searchInputNews" placeholder="Find News" class="form-control"
                    onkeyup="searchTableNews()" />
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Summary</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="NewsTable" style="max-height: 200px; overflow-y: auto;">
                    <!-- Data will be loaded here via AJAX -->
                  </tbody>
                </table>

                <script>

                  function loadNews() {
                    fetch("php/fetch_archivedNews.php")
                      .then(response => response.text())
                      .then(data => {
                        document.getElementById("NewsTable").innerHTML = data;
                        attachEventListeners();
                      })
                      .catch(error => console.error("Error fetching data:", error));
                  }

                  document.addEventListener("DOMContentLoaded", loadNews);

                </script>

              </div>
            </div>


            <div class="card mt-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Archived Leaders</h5>
                <!-- Search Bar (No Submit Button) -->
                <div class="d-flex align-items-center justify-content-between">
                  <input type="search" id="searchInputLeader" placeholder="Find Leader" class="form-control"
                    onkeyup="searchTableLeader()" />
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Type</th>
                      <th>Position</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="LeadershipTable"
                    style="max-height: 200px; overflow-y: auto;">
                    <!-- Data will be loaded here via AJAX -->
                  </tbody>
                </table>

                <script>

                  function loadLead() {
                    fetch("php/fetch_archivedLeadership.php")
                      .then(response => response.text())
                      .then(data => {
                        document.getElementById("LeadershipTable").innerHTML = data;
                        attachEventListeners();
                      })
                      .catch(error => console.error("Error fetching data:", error));
                  }

                  document.addEventListener("DOMContentLoaded", loadLead);

                </script>

              </div>
            </div>

            <div class="card mt-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Archived Physicians</h5>
                <!-- Search Bar (No Submit Button) -->
                <div class="d-flex align-items-center justify-content-between">
                  <input type="search" id="searchInputDoc" placeholder="Find Leader" class="form-control"
                    onkeyup="searchTableDoc()" />
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Address</th>
                      <th>Specialty</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="DocTable" style="max-height: 200px; overflow-y: auto;">
                    <!-- Data will be loaded here via AJAX -->
                  </tbody>
                </table>

                <script>

                  function loadDoc() {
                    fetch("php/fetch_archivedPhysicians.php")
                      .then(response => response.text())
                      .then(data => {
                        document.getElementById("DocTable").innerHTML = data;
                        attachEventListeners();
                      })
                      .catch(error => console.error("Error fetching data:", error));
                  }

                  document.addEventListener("DOMContentLoaded", loadDoc);

                </script>

              </div>
            </div>
            <script>
              function searchTable() {
                let input = document.getElementById("searchInput").value.toLowerCase();
                let table = document.getElementById("collaboratorTable");
                let rows = table.getElementsByTagName("tr");

                for (let row of rows) {
                  let collaboratorName = row.getElementsByTagName("td")[0]?.textContent.toLowerCase() || "";
                  let personName = row.getElementsByTagName("td")[1]?.textContent.toLowerCase() || "";
                  let status = row.getElementsByTagName("td")[2]?.textContent.toLowerCase() || ""; // Now checking status column!

                  if (collaboratorName.includes(input) || personName.includes(input) || status.includes(input)) {
                    row.style.display = "";
                  } else {
                    row.style.display = "none";
                  }
                }
              }
            </script>
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
            title: "Hooray! Login Succesful",
            text: "Gutom na daw si reachel!",
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