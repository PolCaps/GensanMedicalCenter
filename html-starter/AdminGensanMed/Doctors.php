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

  <title>GenMed | Physicians</title>
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
          <li class="menu-item">
            <a href="Leadership.php" class="menu-link">
              <i class="menu-icon tf-icons ti ti-user-star"></i>
              <div data-i18n="Page 2">Leadership</div>
            </a>
          </li>
          <li class="menu-item active">
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
        <div class="modal fade" id="addDoctor" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Widened modal -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add New Physician</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="php/doctors_upload.php" enctype="multipart/form-data" method="POST"
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

                        <div class="mb-3">
                          <label for="TypeaheadBasic" class="form-label">Specialty</label>
                          <input id="TypeaheadBasic" class="form-control typeahead" type="text" id="specialty"
                            autocomplete="off" placeholder="Enter Physician's Specialty" name="specialty" required />
                          <div class="invalid-feedback">Please enter physician's specialty</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Clinic Address</label>
                          <input type="text" class="form-control" name="last_name" placeholder="N/A" />
                        </div>
                        <div class="divider">
                          <div class="divider-text">Personal Information</div>
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
              <div class="row g-4">
                <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                  <div class="card">
                    <!-- <h5 class="card-header text-center">Overview</h5> -->
                    <div class="table-responsive text-nowrap" style="max-height: 180px; overflow-y: auto;">
                      <table class="table">
                        <thead class="table-header">
                          <tr>
                            <th>Field</th>
                            <th>Physicians</th>
                            <th>Total</th>
                          </tr>
                        </thead>

                        <?php
                        include 'php/db_connection.php';

                        // Query to fetch specialties and count doctors per specialty
                        $sql = "SELECT specialty, COUNT(*) AS doctor_count 
        FROM doctors 
        WHERE status = 'active' 
        GROUP BY specialty";
                        $result = $conn->query($sql);
                        ?>

                        <tbody class="table-border-bottom-0">
                          <?php
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              $specialty = htmlspecialchars($row["specialty"]);
                              $doctorCount = $row["doctor_count"]; // Get total count
                          
                              // Fetch doctors' avatars for this specialty
                              $avatarQuery = "SELECT fName, lName, image FROM doctors WHERE specialty = '$specialty' AND status = 'active' LIMIT 6";
                              $avatarResult = $conn->query($avatarQuery);
                              ?>
                              <tr>
                                <td><span class=""><?= $specialty ?></span></td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <?php
                                    while ($doctor = $avatarResult->fetch_assoc()) {
                                      $doctorName = htmlspecialchars($doctor["fName"] . " " . $doctor["lName"]);
                                      $avatarPath = !empty($doctor["image"]) ? "../../html-starter/AdminGensanMed/php/" . $doctor["image"] : "../../assets/img/avatars/default.png";
                                      ?>
                                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="<?= $doctorName ?>">
                                        <img src="<?= $avatarPath ?>" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <?php
                                    }
                                    ?>
                                  </ul>
                                </td>
                                <td><span class=""><?= $doctorCount ?></span></td> <!-- Display total count -->
                              </tr>
                              <?php
                            }
                          }
                          $conn->close();
                          ?>
                        </tbody>



                      </table>
                    </div>

                    <style>
                      .table-responsive {
                        max-height: 300px;
                        overflow-y: auto;


                      }

                      .table thead {
                        position: sticky;
                        top: 0;
                        background-color: #2f3349;
                        /* background-color: darkolivegreen; */
                        z-index: 2;
                      }
                    </style>

                    <script>
                      document.addEventListener("DOMContentLoaded", function () {
                        const maxVisible = 6; // Number of visible avatars before "+X more" appears
                        const userLists = document.querySelectorAll(".users-list"); // Select all user lists

                        userLists.forEach(userList => {
                          const avatars = userList.querySelectorAll("li:not(.more-users)");
                          const moreUsers = userList.querySelector(".more-users");

                          if (avatars.length > maxVisible) {
                            for (let i = maxVisible; i < avatars.length; i++) {
                              avatars[i].classList.add("d-none");
                            }
                            moreUsers.classList.remove("d-none");
                            moreUsers.querySelector("span").textContent = avatars.length - maxVisible;
                          }
                        });
                      });
                    </script>


                  </div>
                </div>



                <?php
                include 'php/db_connection.php';

                // Initialize counts
                $totalDoctors = $activeDoctors = $archivedDoctors = 0;

                // Query for total doctors
                $sqlTotal = "SELECT COUNT(*) AS total FROM doctors";
                $resultTotal = $conn->query($sqlTotal);
                if ($resultTotal->num_rows > 0) {
                  $totalDoctors = $resultTotal->fetch_assoc()["total"];
                }

                // Query for active doctors
                $sqlActive = "SELECT COUNT(*) AS active FROM doctors WHERE status = 'active'";
                $resultActive = $conn->query($sqlActive);
                if ($resultActive->num_rows > 0) {
                  $activeDoctors = $resultActive->fetch_assoc()["active"];
                }

                // Query for archived doctors
                $sqlArchived = "SELECT COUNT(*) AS archived FROM doctors WHERE status = 'archived'";
                $resultArchived = $conn->query($sqlArchived);
                if ($resultArchived->num_rows > 0) {
                  $archivedDoctors = $resultArchived->fetch_assoc()["archived"];
                }

                $conn->close();
                ?>

                <div class="col-xl-4 col-md-6 order-2 order-lg-1 mb-4">
                  <div class="row g-2">
                    <!-- Total Card (Full Width) -->
                    <div class="col-12">
                      <div class="card text-center">
                        <div class="card-body p-2">
                          <h6 class="mb-1">Total</h6>
                          <h3 class="mb-0 text-primary"><?= $totalDoctors ?></h3>
                        </div>
                      </div>
                    </div>

                    <!-- Active Card (Half Width) -->
                    <div class="col-6">
                      <div class="card text-center">
                        <div class="card-body p-2">
                          <h6 class="mb-1">Active</h6>
                          <h3 class="mb-0 text-success"><?= $activeDoctors ?></h3>
                        </div>
                      </div>
                    </div>

                    <!-- Archived Card (Half Width) -->
                    <div class="col-6">
                      <div class="card text-center">
                        <div class="card-body p-2">
                          <h6 class="mb-1">Archived</h6>
                          <h3 class="mb-0 text-danger"><?= $archivedDoctors ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>


              <div class="card mb-4 mt-4">
                <div class="card-header d-flex flex-wrap justify-content-between gap-3">

                  <div class="card-title mb-0 me-1">

                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDoctor">
                      Add New Physician
                    </button>


                  </div>

                  <div class="d-flex justify-content-md-end align-items-center gap-3">
                    <input type="search" id="searchLeader" placeholder="Find your leader" class="form-control me-2" />
                    <select id="filterDoctors" class="select2 form-select">
                      <option value="*">All Doctors</option>
                      <option value="Anesthesiology">Anesthesiology</option>
                      <option value="Cardiologist">Cardiologist</option>
                      <option value="Dental Med">Dental Med</option>
                      <option value="ENT">Ear Nose Throat</option>
                      <option value="Family Medicine">Family Medicine</option>
                      <option value="General Surgery">General Surgery</option>
                      <option value="Internal Medicine">Internal Medicine</option>
                      <option value="Nephrology">Nephrology</option>
                      <option value="Neurosurgery">Neurosurgery</option>
                      <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                      <option value="Occupational Medicine">Occupational Medicine</option>
                      <option value="Ophthalmology">Ophthalmology</option>
                      <option value="Orthopaedics">Orthopaedics</option>
                      <option value="Pathologist">Pathologist</option>
                      <option value="Pediatrics">Pediatrics</option>
                      <option value="Radiology">Radiology</option>
                      <option value="Rehabilitation_medicine">Rehabilitation Medicine</option>
                      <option value="Urology">Urology</option>
                    </select>


                  </div>
                </div>
                <div class="card-body">
                  <div class="row gy-4 mb-4">

                    <?php
                    include 'php/db_connection.php';

                    $sql = "SELECT * FROM doctors WHERE status = 'active' ORDER BY specialty ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $imgPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];
                        $fullName = $row["fName"] . " " . $row["mName"] . " " . $row["lName"];

                        $specialty = $row["specialty"];
                        $add = $row["address"];


                        echo '<div class="col-sm-6 col-lg-3 leader-card" data-type="' . htmlspecialchars($specialty) . '">';
                        echo '  <div class="card p-2 h-100 shadow-none border">';
                        echo '    <div class="rounded-2 text-center mb-3">';
                        echo '      <img class="img-fluid" src="' . htmlspecialchars($imgPath) . '" alt="Leader Image" />';
                        echo '    </div>';
                        echo '    <div class="card-body p-3 pt-2">';
                        echo '      <div class="justify-content-between align-items-center mb-3">';

                        echo '        <span class="badge bg-label-black mt-2 text-wrap text-start">' . htmlspecialchars($specialty) . '</span>';
                        echo '      </div>';
                        echo '      <h5 class="h5 leader-name">' . htmlspecialchars($fullName);
                        if (!empty($row["address"])) {
                          echo '<br>';
                          echo '<span class="text-center text-sm"><i>Clinic: ' . htmlspecialchars($row["address"]) . '</i></span>';
                        }



                        echo '      <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">';
                        echo '        <button class="btn btn-label-secondary me-md-2 d-flex align-items-center edit-doctor-btn mt-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editDoctor"
                                        data-docId="' . htmlspecialchars($row["doctor_id"]) . '"
                                        data-imgPath="' . $imgPath . '"
                                        data-fName="' . htmlspecialchars($row["fName"]) . '"
                                        data-mName="' . htmlspecialchars($row["mName"]) . '"
                                        data-lName="' . htmlspecialchars($row["lName"]) . '"    
                                        data-address="' . htmlspecialchars($row["address"]) . '"    
                                        data-specialty="' . htmlspecialchars($specialty) . '">  
                                      <i class="ti ti-edit-circle align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Edit
                                    </button>';
                        echo '        <button class="btn btn-label-warning me-md-2 d-flex align-items-center archive-doctor-btn mt-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#archiveDoctor"
                                        data-docId="' . htmlspecialchars($row["doctor_id"]) . '"
                                      <i class="ti ti-edit-circle align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Archive
                                    </button>';
                        echo '      </div>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';

                      }
                    } else {
                      echo '<p class="text-center">No Physicians Found.</p>';
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

                        $("#filterDoctors").on("change", function () {
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

                    <div class="modal fade" id="editDoctor" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit Physician</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/doctors_update.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>

                              <div class="row">
                                <!-- Left Side: Image Upload & Preview -->
                                <div class="col-md-6 text-center">
                                  <input type="hidden" id="docId" name="docId">
                                  <div class="mb-3">
                                    <label class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" name="file" id="uploadedImageDoc"
                                      accept="image/*" />

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
                                    <img id="logoPreviewEditDoc" src="#" alt="Image Preview"
                                      style="max-width: 100%; height: 300px; display: block; border: 1px solid #ccc; padding: 5px; border-radius: 5px; justify-self: center;" />
                                  </div>
                                </div>

                                <!-- Right Side: Input Fields -->
                                <div class="col-md-6">
                                  <div class="row">

                                    <div class="mb-3">
                                      <label for="TypeaheadBasic2" class="form-label">Specialty</label>
                                      <input id="TypeaheadBasic2" class="form-control typeahead" type="text"
                                        autocomplete="off" placeholder="Enter Physician's Specialty"
                                        name="specialty-edit" required />
                                      <div class="invalid-feedback">Please enter physician's specialty</div>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label">Clinic Address</label>
                                      <input type="text" class="form-control" name="clinic-address" placeholder="N/A"
                                        id="address-edit" />
                                    </div>
                                    <div class="divider">
                                      <div class="divider-text">Personal Information</div>
                                    </div>
                                    <!-- First Name -->
                                    <div class="mb-3">
                                      <label class="form-label">First Name</label>
                                      <input type="text" class="form-control" name="first_name" id="fName-edit"
                                        placeholder="Enter first name" required />
                                      <div class="invalid-feedback">Please enter a first name.</div>
                                    </div>

                                    <!-- Middle Name (Optional) -->
                                    <div class="mb-3">
                                      <label class="form-label">Middle Name</label>
                                      <input type="text" class="form-control" name="middle_name" id="mName-edit"
                                        placeholder="Enter middle name" />
                                    </div>

                                    <!-- Last Name -->
                                    <div class="mb-3">
                                      <label class="form-label">Last Name</label>
                                      <input type="text" class="form-control" name="last_name" id="lName-edit"
                                        placeholder="Enter last name" required />
                                      <div class="invalid-feedback">Please enter a last name.</div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Modal Footer -->
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Edit Leader</button>
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

                    <div class="modal fade" id="archiveDoctor" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Archive Leader</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/doctor_archive.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>
                              <input type="hidden" id="doctor_archiveId" name="doctor_archiveId">
                              <div class="text-center my-2">
                                <h6>Are you sure you want to archive this leader?
                                  <br><br>
                                  This action cannot be undone.
                                </h6>
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

                        // Handle "Edit Leader" button click
                        document.querySelectorAll('.edit-doctor-btn').forEach(button => {
                          button.addEventListener('click', function () {
                            document.getElementById('docId').value = this.getAttribute('data-docId');
                            document.getElementById('fName-edit').value = this.getAttribute('data-fName');
                            document.getElementById('mName-edit').value = this.getAttribute('data-mName');
                            document.getElementById('lName-edit').value = this.getAttribute('data-lName');
                            document.getElementById('address-edit').value = this.getAttribute('data-address');
                            document.getElementById('logoPreviewEditDoc').src = this.getAttribute('data-imgPath');
                            document.getElementById('TypeaheadBasic2').value = this.getAttribute('data-specialty');
                          });
                        });


                        // Handle image preview for update modal
                        document.getElementById("uploadedImageDoc").addEventListener("change", function (event) {
                          const file = event.target.files[0];
                          if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                              document.getElementById("logoPreviewEditDoc").src = e.target.result;
                            };
                            reader.readAsDataURL(file);
                          }
                        });
                      });

                      document.querySelectorAll('.archive-doctor-btn').forEach(button => {
                        button.addEventListener('click', function () {
                          document.getElementById('doctor_archiveId').value = this.getAttribute('data-docId');
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

              if (urlParams.has('archiveStatus')) {
                if (urlParams.get('archiveStatus') === "archiveSuccess") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Doctors archived successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('archiveStatus') === "archiveFailed") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to archive doctors.",
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

              if (urlParams.has('doctorStatus')) {
                if (urlParams.get('doctorStatus') === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Doctor added successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('doctorStatus') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to add doctor.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('doctorStatus') === "invalid") {
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
              if (urlParams.has('doctorStatus')) {
                if (urlParams.get('doctorStatus') === "successEdit") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Doctor updated successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('doctorStatus') === "errorEdit") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to edit doctor. There's no path folder.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('doctorStatus') === "invalidEdit") {
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
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

  <script src="../../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
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
  <script src="../../assets/js/forms-typeahead.js"></script>
</body>

</html>