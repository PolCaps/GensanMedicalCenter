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

  <title>GenMed | Collaborations</title>

  <meta name="description" content="" />

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
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-ecommerce.css" />
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
          <li class="menu-item active">
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





        <?php
        include 'include/logoutModal.php';
        ?>
        <!-- / Navbar -->
        <div class="modal fade" id="addCollaborator" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Collaborator Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Use Dropzone form as the main form -->
                <form action="php/collab_upload.php" enctype="multipart/form-data" method="POST"
                  class="needs-validation" novalidate>
                  <div class="mb-3">
                    <div class="d-flex">
                      <label class="form-label" for="uploadedLogo">Upload Logo</label> <span
                        class="ti ti-tada ti-exclamation-circle text-danger mx-1" data-bs-toggle="tooltip"
                        data-bs-placement="Top"
                        title="For best result, please enter a logo with no background. Preferable format is PNG"></span>
                    </div>
                    <input type="file" class="form-control" name="file" id="uploadedLogo" accept="image/*" required />
                    <div class="invalid-feedback">Please upload a logo.</div>
                  </div>

                  <!-- Centered Preview Image -->
                  <div class="mb-3 text-center">
                    <img id="logoPreview" src="#" alt="Logo Preview"
                      style="max-width: 150px; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 5px; display: block; margin: auto;">
                  </div>

                  <div class="mb-3 mt-4">
                    <label class="form-label" for="collaboratorTitle">Collaborator</label>
                    <input type="text" class="form-control" id="collaboratorTitle" name="categoryTitle"
                      placeholder="Enter collaborator title" required />
                    <div class="invalid-feedback">Please enter a collaborator title.</div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="collaboratorDescription" name="description" rows="3"
                      placeholder="Enter description (max 150 characters)" required maxlength="150"></textarea>
                    <div class="invalid-feedback">Please enter a description (max 150 characters).</div>
                    <small id="charCount" class="form-text text-muted">150 characters remaining</small>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">Discard</button>
                  </div>
                </form>

                <script>
                  // Image preview function
                  document.getElementById("uploadedLogo").addEventListener("change", function (event) {
                    const file = event.target.files[0];
                    if (file) {
                      const reader = new FileReader();
                      reader.onload = function (e) {
                        const preview = document.getElementById("logoPreview");
                        preview.src = e.target.result;
                        preview.style.display = "block";
                      };
                      reader.readAsDataURL(file);
                    }
                  });

                  // Character limit for Description
                  document.getElementById("collaboratorDescription").addEventListener("input", function () {
                    const maxLength = 150;
                    const currentLength = this.value.length;
                    const remaining = maxLength - currentLength;
                    const charCount = document.getElementById("charCount");

                    charCount.textContent = remaining + " characters remaining";

                    if (remaining < 0) {
                      this.value = this.value.substring(0, maxLength);
                      charCount.textContent = "0 characters remaining";
                    }
                  });

                  // Bootstrap validation script
                  (function () {
                    "use strict";
                    const forms = document.querySelectorAll(".needs-validation");
                    Array.from(forms).forEach(function (form) {
                      form.addEventListener("submit", function (event) {
                        if (!form.checkValidity()) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add("was-validated");
                      }, false);
                    });
                  })();



                </script>


              </div>
            </div>
          </div>
        </div>


        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row"> <!-- View sales -->
              <div class="col-xl-4 mb-4 col-lg-5 col-12">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-7">
                      <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Expand Your Collaborations! 🤝</h5>
                        <p class="mb-2">Connect with top-performing partners</p>

                        <a class="btn btn-success text-white" data-bs-toggle="modal"
                          data-bs-target="#addCollaborator">Add
                          Collaborator</a>

                      </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../../assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- View sales -->

              <!-- Statistics -->
              <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                  <div class="card-header">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">Overview</h5>
                      <!-- <small class="text-muted">Updated 1 month ago</small> -->
                    </div>
                  </div>
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

                  // Assign values
                  $totalCollaborators = $data['total_collaborators'] ?? 0;
                  $activeCount = $data['active_count'] ?? 0;
                  $inactiveCount = $data['inactive_count'] ?? 0;
                  $archivedCount = $data['archived_count'] ?? 0;

                  $conn->close();
                  ?>

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
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <!-- <h5 class="mb-0">Table Basic</h5> -->
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

                <script>

                  function loadCollaborations() {
                    fetch("php/fetched_collaborator.php")
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
                        let status = this.getAttribute("data-status");

                        console.log("✏️ Edit Button Clicked!");
                        console.log("Collab ID:", collabId);
                        console.log("Title:", title);
                        console.log("Description:", description);
                        console.log("Status:", status);

                        document.getElementById("edit_collab_id").value = collabId;
                        document.getElementById("edit_logo").src = logo;
                        document.getElementById("edit_logo").style.display = "block";
                        document.getElementById("edit_title").value = title;
                        document.getElementById("edit_description").value = description;
                        document.getElementById("edit_status").value = status;
                      });
                    });

                    // Handle Archive Button Click
                    document.querySelectorAll(".archive-btn").forEach(button => {
                      button.addEventListener("click", function () {
                        let collabId = this.getAttribute("data-id");

                        console.log("🗄️ Archive Button Clicked!");
                        console.log("Collab ID:", collabId);

                        document.getElementById("archive_collab_id").value = collabId;
                      });
                    });
                  }

                </script>
              </div>
            </div>
          </div>
          <!-- / Content -->
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

          <!-- Archive Modal -->
          <div class="modal fade" id="archiveModal" tabindex="-1" aria-labelledby="archiveModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="archiveModalLabel">Archive Collaboration</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="php/archiveCollaborator.php" method="POST">
                  <div class="modal-body">
                    <input type="hidden" id="archive_collab_id" name="collab_id">
                    <p>Are you sure you want to archive this collaboration?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Archive</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
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

                    <!-- Upload Logo -->
                    <div class="mb-3">
                      <div class="d-flex">
                        <label class="form-label" for="edit_logoPreview">Upload Logo</label>
                        <span class="ti ti-tada ti-exclamation-circle text-danger mx-1" data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="For best result, please enter a logo with no background. Preferable format is PNG">
                        </span>
                      </div>
                      <input type="file" class="form-control" name="file" id="edit_logoPreview" accept="image/*" />
                      <div class="invalid-feedback">Please upload a logo.</div>
                    </div>

                    <!-- Preview Image -->
                    <div class="mb-3 text-center">
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
                      <small id="editCharCount" class="form-text text-muted">150 characters remaining</small>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="edit_status">Status</label>
                      <select class="form-control" id="edit_status" name="edit_status" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>
                      <div class="invalid-feedback">Please select a status.</div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>

                  <script>
                    // Image preview function
                    document.getElementById("edit_logoPreview").addEventListener("change", function (event) {
                      const file = event.target.files[0];
                      if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                          const preview = document.getElementById("edit_logo");
                          preview.src = e.target.result;
                          preview.style.display = "block";
                        };
                        reader.readAsDataURL(file);
                      }
                    });

                    // Character limit for Description
                    document.getElementById("edit_description").addEventListener("input", function () {
                      const maxLength = 150;
                      const currentLength = this.value.length;
                      const remaining = maxLength - currentLength;
                      const charCount = document.getElementById("editCharCount");

                      charCount.textContent = remaining + " characters remaining";

                      if (remaining < 0) {
                        this.value = this.value.substring(0, maxLength);
                        charCount.textContent = "0 characters remaining";
                      }
                    });

                    // Bootstrap validation script
                    (function () {
                      "use strict";
                      const forms = document.querySelectorAll(".needs-validation");
                      Array.from(forms).forEach(function (form) {
                        form.addEventListener("submit", function (event) {
                          if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add("was-validated");
                        }, false);
                      });
                    })();
                  </script>

                </div>
              </div>
            </div>
          </div>

          <script>
            document.addEventListener("DOMContentLoaded", function () {
              // Get URL parameters
              const urlParams = new URLSearchParams(window.location.search);

              if (urlParams.has('uploadStatus')) {
                if (urlParams.get('uploadStatus') === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Collaborator added successfully.",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('uploadStatus') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to add collaboration.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('uploadStatus') === "errorFileType") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "File type not allowed. Please upload an png/webp/jpg/jpeg/gif.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                }


                // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
                history.replaceState(null, "", window.location.pathname);
              }

              if (urlParams.has('archiveStatus')) {
                if (urlParams.get('archiveStatus') === "archiveSuccess") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Collaborator archived succesfully.",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('archiveStatus') === "archiveFailed") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to archive this collaborator.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('archiveStatus') === "archiveInvalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Request was invalid. Please try again.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                }


                // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
                history.replaceState(null, "", window.location.pathname);
              }

              if (urlParams.has('updateStatus')) {
                if (urlParams.get('updateStatus') === "updateSuccess") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Collaborator updated succesfully.",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('updateStatus') === "updateFailed") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to update this collaborator.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('updateStatus') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Please try again.",
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
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/quill/katex.js"></script>
  <script src="../../assets/vendor/libs/quill/quill.js"></script>
  <script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/app-ecommerce-category-list.js"></script>
  <script src="../../assets/js/app-ecommerce-product-add.js"></script>
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
</body>

</html>