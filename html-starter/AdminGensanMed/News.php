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

  <title>GenMed | News</title>

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
          <li class="menu-item active">
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


        <!-- / Navbar -->
        <div class="modal fade" id="addNews" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Changed to modal-xl for extra width -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add New News/Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="php/news_upload.php" enctype="multipart/form-data" method="POST" class="needs-validation"
                  novalidate>

                  <div class="row">
                    <!-- Left Side: Title, Short Summary & Image Upload -->
                    <div class="col-md-6">

                      <!-- Upload Image -->
                      <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" class="form-control" name="file" id="uploadedImage" accept="image/*"
                          required />
                        <div class="invalid-feedback">Please upload an image.</div>
                      </div>
                      <!-- Title (Textarea) with Counter -->
                      <div class="mb-3">
                        <label class="form-label">Title</label>
                        <textarea class="form-control" name="title" id="titleInput" rows="2"
                          placeholder="Enter title (Max: 100 characters)" maxlength="100" required></textarea>
                        <small class="text-muted"><span id="titleCounter">0</span>/100 characters</small>
                        <div class="invalid-feedback">Title must be between atleast 100 characters.</div>
                      </div>

                      <!-- Short Summary (Textarea) with Counter -->
                      <div class="mb-3">
                        <label class="form-label">Short Summary</label>
                        <textarea class="form-control" name="short_summary" id="summaryInput" rows="3" maxlength="150"
                          placeholder="Enter short summary (Max: 150 characters)" required></textarea>
                        <small class="text-muted"><span id="summaryCounter">0</span>/150 characters</small>
                        <div class="invalid-feedback">Enter summary (150 characters).</div>
                      </div>


                    </div>

                    <!-- Right Side: Image Preview -->
                    <div class="col-md-6">

                      <div class="mb-3">
                        <img id="logoPreview" src="#" alt="Image Preview"
                          style="max-width: 100%; height: 300px; display: block; border: 1px solid #ccc; padding: 5px; border-radius: 5px; justify-self: center;" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Short Summary (Textarea) with Counter -->
                    <div class="mb-3">
                      <label class="form-label">Content</label>
                      <textarea class="form-control" name="content" id="contentInput" rows="5" maxlength="1500"
                        placeholder="Enter Content (Max: 1500 characters)" required></textarea>
                      <small class="text-muted"><span id="contentCounter">0</span>/1500 characters</small>
                      <div class="invalid-feedback">Enter content (1500 characters).</div>
                    </div>
                  </div>


                  <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add News</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </form>

                <script>

                  // Image Preview
                  document.getElementById("uploadedImage").addEventListener("change", function (event) {
                    const file = event.target.files[0];
                    if (file) {
                      const reader = new FileReader();
                      reader.onload = function (e) {
                        document.getElementById("logoPreview").src = e.target.result;
                      };
                      reader.readAsDataURL(file);
                    }
                  });

                  // Character Counter for Title
                  document.getElementById("titleInput").addEventListener("input", function () {
                    let titleLength = this.value.length;
                    document.getElementById("titleCounter").innerText = titleLength;
                    if (titleLength > 100) {
                      this.setCustomValidity("Title cannot exceed 100 characters.");
                    } else {
                      this.setCustomValidity("");
                    }
                  });

                  // Character Counter for Short Summary
                  document.getElementById("summaryInput").addEventListener("input", function () {
                    let summaryLength = this.value.length;
                    document.getElementById("summaryCounter").innerText = summaryLength;
                    if (summaryLength > 150) {
                      this.setCustomValidity("Short summary cannot exceed 150 characters.");
                    } else {
                      this.setCustomValidity("");
                    }
                  });

                  document.getElementById("contentInput").addEventListener("input", function () {
                    let summaryLength = this.value.length;
                    document.getElementById("contentCounter").innerText = summaryLength;
                    if (summaryLength > 1500) {
                      this.setCustomValidity("Content cannot exceed 1500 characters.");
                    } else {
                      this.setCustomValidity("");
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

        <!-- / Navbar -->




        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span> My Courses</h4> -->


            <?php
            include 'php/db_connection.php';

            $total_news = $conn->query("SELECT COUNT(*) AS total FROM news")->fetch_assoc()['total'];
            $active_news = $conn->query("SELECT COUNT(*) AS active FROM news WHERE status = 'active'")->fetch_assoc()['active'];
            $archived_news = $conn->query("SELECT COUNT(*) AS archived FROM news WHERE status = 4")->fetch_assoc()['archived'];

            $conn->close();
            ?>
            <div class="app-academy">
              <div class="row mb-4 g-4">

                <div class="col-sm-6 col-xl-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $total_news; ?></h4>
                          <small>Overall News Published</small>
                        </div>
                        <span class="badge bg-label-primary rounded-circle p-2">
                          <i class="ti ti-currency-dollar ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $active_news; ?></h4>
                          <small>Active News</small>
                        </div>
                        <span class="badge bg-label-success rounded-circle p-2">
                          <i class="ti ti-gift ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="content-left">
                          <h4 class="mb-0"><?php echo $archived_news; ?></h4>
                          <small>Archived</small>
                        </div>
                        <span class="badge bg-label-danger rounded-circle p-2">
                          <i class="ti ti-user ti-md"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card mb-4">
                <div class="card-header d-flex flex-wrap justify-content-between gap-3">

                  <div class="card-title mb-0 me-1">

                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNews">
                      Add New Leader
                    </button>


                  </div>

                  <div class="d-flex justify-content-md-end align-items-center gap-3">
                    <input type="search" id="searchNews" placeholder="Find Published News" class="form-control me-2" />


                  </div>
                </div>
                <div class="card-body">
                  <div class="row gy-4 mb-4">

                    <?php
                    include 'php/db_connection.php';

                    $sql = "SELECT * FROM news WHERE status != '3' ORDER BY date DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $imgPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];
                        $title = $row["title"];
                        $datepublished = $row["date"];
                        $summary = $row["summary"];
                        $status = $row["status"];

                        echo '<div class="col-sm-6 col-lg-4 news-card" data-type="">';
                        echo '  <div class="card p-2 h-100 shadow-none border">';
                        echo '    <div class="rounded-2 text-center mb-3">';
                        echo '      <img class="img-fluid" src="' . htmlspecialchars($imgPath) . '" alt="News Image" />';
                        echo '    </div>';
                        echo '    <div class="card-body p-3 pt-2">';
                        echo '      <h5 class="h5 news-title">Title: ' . htmlspecialchars($title) . '</h5>';

                        // Summary paragraph fix
                        echo '      <p class="mt-2 news-summary">Summary: ' . htmlspecialchars($summary) . '</p>';

                        echo '      <div class="justify-content-between align-items-center mb-3 news-date">';
                        echo '<p>Date Published: ' . date("F j, Y g:i A", strtotime($datepublished)) . '</p>';



                        if ($status == 1) {
                          echo '        <p class="d-flex align-items-center text-success">';
                          echo '          <i class="ti ti-checks me-2 mt-n1"></i> Active';
                          echo '        </p>';
                        }

                        echo '      </div>'; // Status & Date container
                    
                        echo '      <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">';

                        // Edit button
                        echo '        <button class="btn btn-label-secondary me-md-2 d-flex align-items-center edit-news-btn mt-2" 
                          data-bs-toggle="modal" 
                          data-bs-target="#updateNews"
                          data-newsId="' . htmlspecialchars($row["id"]) . '"
                          data-imgPath="' . htmlspecialchars($imgPath) . '"
                          data-title="' . htmlspecialchars($row["title"]) . '"
                          data-summary="' . htmlspecialchars($row["summary"]) . '"
                          data-content="' . htmlspecialchars($row["content"]) . '"
                          data-datePublished="' . htmlspecialchars($row["date"]) . '">  
                        <i class="ti ti-edit-circle align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Edit
                      </button>';

                        // Archive button
                        echo '        <button class="btn btn-label-warning me-md-2 d-flex align-items-center archive-news-btn mt-2" 
                          data-bs-toggle="modal" 
                          data-bs-target="#archiveNews"
                          data-newsId="' . htmlspecialchars($row["id"]) . '">  
                        <i class="ti ti-archive align-middle scaleX-n1-rtl me-2 mt-n1 ti-sm"></i>Archive
                      </button>';

                        echo '      </div>'; // Button container
                        echo '    </div>'; // Card body
                        echo '  </div>'; // Card
                        echo '</div>'; // News card
                      }
                    } else {
                      echo '<p>No news found.</p>';
                    }

                    $conn->close();
                    ?>




                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                      $(document).ready(function () {
                        // Search Functionality
                        $("#searchNews").on("keyup", function () {
                          let searchText = $(this).val().toLowerCase();

                          $(".news-card").each(function () {
                            let newsTitle = $(this).find(".news-title").text().toLowerCase();
                            let newsSum = $(this).find(".news-summary").text().toLowerCase();
                            let newsDate = $(this).find(".news-date").text().toLowerCase();

                            if (newsTitle.includes(searchText) || newsSum.includes(searchText) || newsDate.includes(searchText)) {
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

                    <div class="modal fade" id="updateNews" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl">
                        <!-- Changed to modal-xl for extra width -->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Update News/Update</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/news_update.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>

                              <div class="row">
                                <!-- Left Side: Title, Short Summary & Image Upload -->
                                <div class="col-md-6">
                                  <input class="form-control" name="newsIdEdit" id="newsIdEdit" hidden></input>
                                  <!-- Upload Image -->
                                  <div class="mb-3">
                                    <label class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" name="file" id="uploadedEdit"
                                      accept="image/*" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Date Published</label>
                                    <input class="form-control" name="dateEdit" id="dateEdit" readonly></input>
                                  </div>
                                  <!-- Title (Textarea) with Counter -->
                                  <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <textarea class="form-control" name="titleEdit" id="titleEdit" rows="2"
                                      placeholder="Enter title (Max: 100 characters)" maxlength="100"
                                      required></textarea>
                                    <small class="text-muted"><span id="titleCounterEdit">0</span>/100
                                      characters</small>
                                    <div class="invalid-feedback">Title must be between atleast #4A4A4A100 characters.
                                    </div>
                                  </div>

                                  <!-- Short Summary (Textarea) with Counter -->
                                  <div class="mb-3">
                                    <label class="form-label">Short Summary</label>
                                    <textarea class="form-control" name="summaryEdit" id="summaryEdit" rows="3"
                                      maxlength="150" placeholder="Enter short summary (Max: 150 characters)"
                                      required></textarea>
                                    <small class="text-muted"><span id="summaryCounterEdit">0</span>/150
                                      characters</small>
                                    <div class="invalid-feedback">Enter summary (150 characters).</div>
                                  </div>



                                </div>

                                <!-- Right Side: Image Preview -->
                                <div class="col-md-6">

                                  <div class="mb-3">
                                    <img id="previewEdit" src="#" alt="Image Preview"
                                      style="max-width: 100%; height: 300px; display: block; border: 1px solid #ccc; padding: 5px; border-radius: 5px; justify-self: center;" />
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <!-- Short Summary (Textarea) with Counter -->
                                <div class="mb-3">
                                  <label class="form-label">Content</label>
                                  <textarea class="form-control" name="contentEdit" id="contentEdit" rows="5"
                                    maxlength="1500" placeholder="Enter Content (Max: 1500 characters)"
                                    required></textarea>
                                  <small class="text-muted"><span id="contentCounterEdit">0</span>/1500
                                    characters</small>
                                  <div class="invalid-feedback">Enter content (1500 characters).</div>
                                </div>

                              </div>


                              <!-- Modal Footer -->
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update News/Updates</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              </div>
                            </form>

                            <script>

                              // Image Preview
                              document.getElementById("uploadedEdit").addEventListener("change", function (event) {
                                const file = event.target.files[0];
                                if (file) {
                                  const reader = new FileReader();
                                  reader.onload = function (e) {
                                    document.getElementById("previewEdit").src = e.target.result;
                                  };
                                  reader.readAsDataURL(file);
                                }
                              });

                              // Character Counter for Title
                              document.getElementById("titleEdit").addEventListener("input", function () {
                                let titleLength = this.value.length;
                                document.getElementById("titleCounterEdit").innerText = titleLength;
                                if (titleLength > 100) {
                                  this.setCustomValidity("Title cannot exceed 100 characters.");
                                } else {
                                  this.setCustomValidity("");
                                }
                              });

                              // Character Counter for Short Summary
                              document.getElementById("summaryEdit").addEventListener("input", function () {
                                let summaryLength = this.value.length;
                                document.getElementById("summaryCounterEdit").innerText = summaryLength;
                                if (summaryLength > 150) {
                                  this.setCustomValidity("Short summary cannot exceed 150 characters.");
                                } else {
                                  this.setCustomValidity("");
                                }
                              });

                              document.getElementById("contentEdit").addEventListener("input", function () {
                                let summaryLength = this.value.length;
                                document.getElementById("contentCounterEdit").innerText = summaryLength;
                                if (summaryLength > 1500) {
                                  this.setCustomValidity("Content cannot exceed 1500 characters.");
                                } else {
                                  this.setCustomValidity("");
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

                    <div class="modal fade" id="archiveNews" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Archive News/Update</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="php/news_archive.php" enctype="multipart/form-data" method="POST"
                              class="needs-validation" novalidate>
                              <input class="form-control" name="newsIdEdit2" id="newsIdEdit2" hidden></input>
                              <div class="text-center mb-2">
                                Are you sure you want to archive this News/Update? This action cannot be undone.
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Archive News/Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script>
                      document.addEventListener("DOMContentLoaded", function () {
                        // Handle "Edit News" button click
                        document.querySelectorAll('.edit-news-btn').forEach(button => {
                          button.addEventListener('click', function () {
                            document.getElementById('newsIdEdit').value = this.getAttribute('data-newsId');
                            document.getElementById('titleEdit').value = this.getAttribute('data-title');
                            document.getElementById('summaryEdit').value = this.getAttribute('data-summary');
                            document.getElementById('contentEdit').value = this.getAttribute('data-content');
                            document.getElementById('previewEdit').src = this.getAttribute('data-imgPath');


                            let formatDate = this.getAttribute('data-datePublished');
                            let date = new Date(formatDate);

                            let options = {
                              year: "numeric",
                              month: "long",
                              day: "numeric",
                              hour: "numeric",
                              minute: "numeric",
                              hour12: true
                            };
                            let formattedDate = date.toLocaleString("en-US", options);
                            console.log(formattedDate);

                            document.getElementById('dateEdit').value = formattedDate;



                          });
                        });

                        // Handle image preview for update modal
                        const uploadedEdit = document.getElementById("uploadedEdit");
                        if (uploadedEdit) {
                          uploadedEdit.addEventListener("change", function (event) {
                            const file = event.target.files[0];
                            if (file) {
                              const reader = new FileReader();
                              reader.onload = function (e) {
                                document.getElementById("previewEdit").src = e.target.result;
                              };
                              reader.readAsDataURL(file);
                            }
                          });
                        }

                        // Handle "Archive News" button click
                        document.querySelectorAll('.archive-news-btn').forEach(button => {
                          button.addEventListener('click', function () {
                            document.getElementById('newsIdEdit2').value = this.getAttribute('data-newsId');
                          });
                        });

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

              if (urlParams.has('newsStatusup')) {
                if (urlParams.get('newsStatusup') === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "News updated successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('newsStatusup') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to update News.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('newsStatusup') === "Invalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Update Failed.",
                    text: "Invalid File Type. Please try again later.",
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
                if (urlParams.get('archiveStatus') === "Success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "News archived successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('archiveStatus') === "Error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to archive News.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('archiveStatus') === "Invalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Upload Failed.",
                    text: "Invalid File Type. Please try again later.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                }


                // Remove 'mail=success' or 'mail=error' from the URL after showing the alert
                history.replaceState(null, "", window.location.pathname);
              }

              if (urlParams.has('newsStatus')) {
                if (urlParams.get('newsStatus') === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "News uploaded successfuly",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    },
                    buttonsStyling: false
                  });

                } else if (urlParams.get('newsStatus') === "error") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    text: "Failed to archive leader.",
                    customClass: {
                      confirmButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                  });
                } else if (urlParams.get('newsStatus') === "invalid") {
                  Swal.fire({
                    icon: "error",
                    title: "Oops! Upload Failed.",
                    text: "Invalid File Type. Please try again later.",
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
  <script src="../../assets/js/forms-editors.js"></script>
</body>

</html>