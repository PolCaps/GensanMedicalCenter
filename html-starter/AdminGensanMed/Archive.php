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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="collaboratorTable">
                    <!-- Data will be loaded here via AJAX -->
                  </tbody>
                </table>
                <?php
                include 'include/logoutModal.php';
                ?>
                <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Collaborator</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="php/updateCollaborator.php" enctype="multipart/form-data" method="POST"
                          class="needs-validation" novalidate>
                          <!-- Hidden input for ID -->
                          <input type="hidden" id="edit_collab_id" name="collab_id">

                          <!-- Preview Image -->
                          <div class="mb-3 text-center">
                            <label class="form-label" for="edit_logo">Logo</label>
                            <img id="edit_logo" alt="Logo Preview"
                              style="max-width: 150px; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 5px; display: block; margin: auto;">
                          </div>

                          <!-- Collaborator Title -->
                          <div class="mb-3 mt-4">
                            <label class="form-label" for="editCollaboratorTitle">Collaborator</label>
                            <input type="text" class="form-control" id="edit_title" name="title"
                              placeholder="Enter collaborator title" required />
                            <div class="invalid-feedback">Please enter a collaborator title.</div>
                          </div>

                          <!-- Description -->
                          <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3"
                              placeholder="Enter description (max 150 characters)" required maxlength="150"></textarea>
                            <div class="invalid-feedback">Please enter a description (max 150 characters).</div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-label-success" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>


                      </div>
                    </div>
                  </div>
                </div>
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

                  function attachEventListeners() {
                    console.log("🔄 Reattaching event listeners...");

                    document.querySelectorAll(".edit-btn").forEach(button => {
                      button.addEventListener("click", function () {
                        let collabId = this.getAttribute("data-id");
                        let logoPath = this.getAttribute("data-logoPath");
                        let logo = this.getAttribute("data-logo");
                        let title = this.getAttribute("data-title");
                        let description = this.getAttribute("data-description");

                        console.log("✏️ Edit Button Clicked!");
                        console.log("Collab ID:", collabId);
                        console.log("Title:", title);
                        console.log("Description:", description);

                        document.getElementById("edit_collab_id").value = collabId;
                        document.getElementById("edit_logo").src = logo;
                        document.getElementById("edit_logo").style.display = "block";
                        document.getElementById("edit_title").value = title;
                        document.getElementById("edit_description").value = description;
                      });
                    });

                  }

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