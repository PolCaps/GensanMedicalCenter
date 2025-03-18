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

  <title>GenMed | Leadership</title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

  <style>
    .bg-label-black {
      background-color: #4A4A4A !important;
      color: #FFFFFF !important;
    }
  </style>

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
          <li class="menu-item active">
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
        <div class="modal fade" id="addLeader" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Widened modal -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add New Leader</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="php/leader_upload.php" enctype="multipart/form-data" method="POST"
                  class="needs-validation" novalidate>

                  <div class="row">
                    <!-- Left Side: Image Upload & Preview -->
                    <div class="col-md-6 text-center">
                      <!-- Upload Image -->
                      <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" class="form-control" name="file" id="uploadedImage" accept="image/*"
                          required />
                        <div class="invalid-feedback">Please upload an image.</div>
                      </div>
                      <div class="mb-2 ">
                        <i class="d-flex text-warning">
                          <p class="ti ti-tada ti-exclamation-circle"></p>
                          <p>For better visual, enter image that doesnt have background.
                          </p>
                        </i>
                      </div>

                      <!-- Image Preview (Larger Size) -->
                      <div class="mb-3">
                        <img id="logoPreview" src="#" alt="Image Preview"
                          style="max-width: 100%; height: 300px; display: block; border: 1px solid #ccc; padding: 5px; border-radius: 5px; justify-self: center;" />
                      </div>
                    </div>

                    <!-- Right Side: Input Fields -->
                    <div class="col-md-6">
                      <div class="row">



                        <!-- Position -->
                        <div class="mb-3">
                          <label class="form-label">Position</label>
                          <input type="text" class="form-control" name="position" placeholder="Enter position"
                            required />
                          <div class="invalid-feedback">Please enter a position.</div>
                        </div>

                        <!-- Type (ENUM Dropdown) -->
                        <div class="mb-3">
                          <label class="form-label">Type</label>
                          <select class="form-control" name="type" required>
                            <option value="">Select Type</option>
                            <option value="directors">Board of Director</option>
                            <option value="medservice">Medical Service</option>
                            <option value="administration">Administration</option>
                          </select>
                          <div class="invalid-feedback">Please select a leader type.</div>
                        </div>
                        <!-- First Name -->
                        <div class="mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" name="first_name" placeholder="Enter first name"
                            required />
                          <div class="invalid-feedback">Please enter a first name.</div>
                        </div>

                        <!-- Middle Name (Optional) -->
                        <div class="mb-3">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name" />
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" name="last_name" placeholder="Enter last name"
                            required />
                          <div class="invalid-feedback">Please enter a last name.</div>
                        </div>

                        <div class="mb-3">
                          <label for="TagifyBasicCreate" class="form-label">Post-nominal Titles</label>
                          <input id="TagifyBasicCreate" class="form-control" name="TagifyBasicCreate" value="" />
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add Leader</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </form>

                <!-- JavaScript for Image Preview -->
                <script>
                  document.getElementById("uploadedImage").addEventListener("change", function (event) {
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

                  // Bootstrap Form Validation
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


        <?php
        include 'php/db_connection.php';

        // Initialize counts
        $totalLeaders = $directors = $administration = $medservice = 0;

        // Query to fetch leader counts
        $sql = "SELECT type, COUNT(*) as count FROM leaderships WHERE status = 'active' GROUP BY type";
        $result = $conn->query($sql);

        // Process the query results
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $totalLeaders += $row["count"]; // Sum total leaders
            switch ($row["type"]) {
              case "directors":
                $directors = $row["count"];
                break;
              case "administration":
                $administration = $row["count"];
                break;
              case "medservice":
                $medservice = $row["count"];
                break;
            }
          }
        }

        $conn->close();
        ?>


        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span> My Courses</h4> -->

            <div class="app-academy">
              <div class="row mb-4 g-4">

                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $totalLeaders; ?></h4>
                          <small>Total Leaders</small>
                        </div>
                        <span class="badge bg-label-primary rounded-circle p-2">
                          <i class="ti ti-currency-dollar ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $directors; ?></h4>
                          <small>Board of Directors</small>
                        </div>
                        <span class="badge bg-label-success rounded-circle p-2">
                          <i class="ti ti-gift ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $administration; ?></h4>
                          <small>Administrations</small>
                        </div>
                        <span class="badge bg-label-danger rounded-circle p-2">
                          <i class="ti ti-user ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $medservice; ?></h4>
                          <small>Medical Services</small>
                        </div>
                        <span class="badge bg-label-info rounded-circle p-2">
                          <i class="ti ti-infinity ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header d-flex flex-wrap justify-content-between gap-3">

                  <div class="card-title mb-0 me-1">

                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addLeader">
                      Add New Leader
                    </button>


                  </div>

                  <div class="d-flex justify-content-md-end align-items-center gap-3">
                    <input type="search" id="searchLeader" placeholder="Find your leader" class="form-control me-2" />
                    <select id="filterLeadership" class="select2 form-select">
                      <option value="*">All Leadership</option>
                      <option value="directors">Board of Directors</option>
                      <option value="administration">Administrations</option>
                      <option value="medservice">Medical Services</option>
                    </select>

                  </div>
                </div>
                <div class="card-body">
                  <div class="row gy-4 mb-4">

                    <?php
                    include 'php/db_connection.php';

                    $sql = "SELECT * FROM leaderships WHERE status = 'active' ORDER BY FIELD(type, 'administration', 'directors', 'medservice')";
                    $result = $conn->query($sql);



                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $imgPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];
                        $fullName = $row["last_name"] . ", " . $row["first_name"];
                        $title = $row["title"];
                        $position = $row["position"];
                        $type = $row["type"];

                        $statusColor = ($type == "administration") ? "success" : (($type == "directors") ? "primary" : "danger");
                        $statusPos = ($type == "administration") ? "Administration" : (($type == "directors") ? "Board of Directors" : "Medical Services");

                        echo '<div class="col-sm-6 col-lg-3 leader-card" data-type="' . htmlspecialchars($type) . '">';
                        echo '  <div class="card p-2 h-100 shadow-none border">';
                        echo '    <div class="rounded-2 text-center mb-3">';
                        echo '      <img class="img-fluid" src="' . htmlspecialchars($imgPath) . '" alt="Leader Image" />';
                        echo '    </div>';
                        echo '    <div class="card-body p-3 pt-2">';
                        echo '      <div class="justify-content-between align-items-center mb-3">';
                        echo '        <span class="badge bg-label-' . $statusColor . '">' . $statusPos . '</span>';
                        echo '        <span class="badge bg-label-black mt-2 text-wrap text-start">' . htmlspecialchars($position) . '</span>';
                        echo '      </div>';
                        echo '      <h5 class="h5 leader-name">' . htmlspecialchars($fullName);
                        if (!empty($title)) {
                          echo ', ' . htmlspecialchars($title);
                        }
                        echo '</h5>';
                        echo '      <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">';
                        echo '        <button class="btn btn-label-secondary me-md-2 d-flex align-items-center edit-leader-btn mt-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editLeader"
                                        data-leadId="' . htmlspecialchars($row["leadership_id"]) . '"
                                        data-imgPath="' . $imgPath . '"
                                        data-fName="' . htmlspecialchars($row["first_name"]) . '"
                                        data-mName="' . htmlspecialchars($row["middle_name"]) . '"
                                        data-lName="' . htmlspecialchars($row["last_name"]) . '"
                                        data-titles="' . htmlspecialchars($title) . '"
                                        data-position="' . htmlspecialchars($position) . '"
                                        data-type="' . htmlspecialchars($type) . '">  
                                      <i class="ti ti-edit-circle align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Edit
                                    </button>';
                        echo '        <button class="btn btn-label-warning me-md-2 d-flex align-items-center archive-leader-btn mt-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#archiveLeader"
                                        data-leadId="' . htmlspecialchars($row["leadership_id"]) . '"
                                      <i class="ti ti-edit-circle align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Archive
                                    </button>';
                        echo '      </div>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';

                      }
                    } else {
                      echo '<p>No leaders found.</p>';
                    }

                    $conn->close();
                    ?>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                      $(document).ready(function () {
                        // Search Functionality
                        $("#searchLeader").on("keyup", function () {
                          let searchText = $(this).val().toLowerCase();

                          $(".leader-card").each(function () {
                            let leaderName = $(this).find(".leader-name").text().toLowerCase();

                            if (leaderName.includes(searchText)) {
                              $(this).show();
                            } else {
                              $(this).hide();
                            }
                          });
                        });

                        // Dropdown Filter
                        $("#filterLeadership").on("change", function () {
                          let selectedCategory = $(this).val();

                          $(".leader-card").each(function () {
                            let leaderType = $(this).data("type");

                            if (selectedCategory === "*" || leaderType === selectedCategory) {
                              $(this).show();
                            } else {
                              $(this).hide();
                            }
                          });
                        });
                      });
                    </script>
                    <?php
                    include 'include/logoutModal.php';
                    ?>
                    <div class="modal fade" id="editLeader" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Leader</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/leader_update.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>
                              <input type="hidden" id="leader_id" name="leader_id">
                              <div class="row">
                                <div class="col-md-6 text-center">
                                  <div class="mb-3">
                                    <label class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" name="file" id="uploadedImageEdit"
                                      accept="image/*" required>
                                    <div class="invalid-feedback">Please upload an image.</div>
                                  </div>
                                  <div class="mb-2 text-warning">
                                    <i class="ti ti-tada ti-exclamation-circle"></i>
                                    <p>For better visual, enter an image that doesn't have a background.</p>
                                  </div>
                                  <div class="mb-3">
                                    <img id="logoPreviewEdit" src="#" alt="Image Preview"
                                      style="max-width: 100%; height: 300px; display: block; border: 1px solid #ccc; padding: 5px; border-radius: 5px; justify-self: center;">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <input type="text" class="form-control" id="leader_position" name="position"
                                      placeholder="Enter position" required>
                                    <div class="invalid-feedback">Please enter a position.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="form-control" id="leader_type" name="type" required>
                                      <option value="">Select Type</option>
                                      <option value="directors">Board of Director</option>
                                      <option value="medservice">Medical Service</option>
                                      <option value="administration">Administration</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a leader type.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                      placeholder="Enter first name" required>
                                    <div class="invalid-feedback">Please enter a first name.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                                      placeholder="Enter middle name">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                      placeholder="Enter last name" required>
                                    <div class="invalid-feedback">Please enter a last name.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="TagifyBasicUpdate" class="form-label">Post-nominal Titles</label>
                                    <input id="TagifyBasicUpdate" class="form-control" name="TagifyBasicUpdate"
                                      value="">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update Leader</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="archiveLeader" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Archive Leader</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/leader_archive.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>
                              <input type="hidden" id="leader_archiveid" name="leader_archiveid">
                              <div class="text-center">
                                Are you sure you want to archive this leader? this action cannot be undone.
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Archive Leader</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script>
                      document.addEventListener("DOMContentLoaded", function () {
                        // Initialize Tagify for both create and update modals
                        let tagifyCreate = new Tagify(document.querySelector("#TagifyBasicCreate"));
                        let tagifyUpdate = new Tagify(document.querySelector("#TagifyBasicUpdate"));

                        // Handle "Edit Leader" button click
                        document.querySelectorAll('.edit-leader-btn').forEach(button => {
                          button.addEventListener('click', function () {
                            document.getElementById('leader_id').value = this.getAttribute('data-leadId');
                            document.getElementById('first_name').value = this.getAttribute('data-fName');
                            document.getElementById('middle_name').value = this.getAttribute('data-mName');
                            document.getElementById('last_name').value = this.getAttribute('data-lName');
                            document.getElementById('logoPreviewEdit').src = this.getAttribute('data-imgPath');
                            document.getElementById('leader_position').value = this.getAttribute('data-position');
                            document.getElementById('leader_type').value = this.getAttribute('data-type');

                            // Get post-nominal titles from data attribute
                            let postNominalTitles = this.getAttribute('data-titles');

                            console.log("Raw post-nominal titles:", postNominalTitles);

                            if (postNominalTitles) {
                              try {
                                let parsedTitles = JSON.parse(postNominalTitles);
                                if (Array.isArray(parsedTitles)) {
                                  tagifyUpdate.removeAllTags();
                                  tagifyUpdate.addTags(parsedTitles.map(title => title.value || title)); // Handle different formats
                                }
                              } catch (error) {
                                console.error("Error parsing post-nominal titles:", error);
                                tagifyUpdate.removeAllTags();
                                tagifyUpdate.addTags(postNominalTitles.split(", ").map(title => title.trim())); // Fallback
                              }
                            }
                          });
                        });


                        // Handle image preview for update modal
                        document.getElementById("uploadedImageEdit").addEventListener("change", function (event) {
                          const file = event.target.files[0];
                          if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                              document.getElementById("logoPreviewEdit").src = e.target.result;
                            };
                            reader.readAsDataURL(file);
                          }
                        });
                      });

                      document.querySelectorAll('.archive-leader-btn').forEach(button => {
                        button.addEventListener('click', function () {
                          document.getElementById('leader_archiveid').value = this.getAttribute('data-leadId');
                        })
                      });
                    </script>


                  </div>
                  <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
                    <ul class="pagination">
                      <li class="page-item prev">
                        <a class="page-link" href="javascript:void(0);"><i
                            class="ti ti-chevron-left ti-xs scaleX-n1-rtl"></i></a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">5</a>
                      </li>
                      <li class="page-item next">
                        <a class="page-link" href="javascript:void(0);"><i
                            class="ti ti-chevron-right ti-xs scaleX-n1-rtl"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

            </div>
          </div>
          <!-- / Content -->
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              // Get URL parameters
              const urlParams = new URLSearchParams(window.location.search);

              if (urlParams.has('leaderStatus')) {
                if (urlParams.get('leaderStatus') === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Leader added successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('leaderStatus') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to add leader.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('leaderStatus') === "invalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Invalid File Type.",
                    text: "Please try again with different file type",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                }


                // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
                history.replaceState(null, "", window.location.pathname);
              }

              if (urlParams.has('leaderupdateStatus')) {
                if (urlParams.get('leaderupdateStatus') === "successUpdate") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Leader updated successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('leaderupdateStatus') === "errorUpdate") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to update leader.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('leaderupdateStatus') === "invalidUpdate") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Invalid File Type.",
                    text: "Please try again with different file type",
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
                    text: "Leader archived successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('archiveStatus') === "archiveFailed") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to archive leader.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('archiveStatus') === "archiveInvalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Archive Failed.",
                    text: "Something went wrong. Please try again later.",
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
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>

  <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/quill/katex.js"></script>
  <script src="../../assets/vendor/libs/quill/quill.js"></script>
  <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/app-ecommerce-category-list.js"></script>
  <script src="../../assets/js/app-ecommerce-product-add.js"></script>
  <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
  <script src="../../assets/js/forms-selects.js"></script>
  <script src="../../assets/js/forms-tagify.js"></script>
</body>

</html>