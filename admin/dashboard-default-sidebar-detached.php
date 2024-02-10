 <?php
// Start session
session_start();

// Check if session variables are set
if (!isset($_SESSION['admin_id']) || !isset($_SESSION['admin_name']) || !isset($_SESSION['admin_email']) || !isset($_SESSION['admin_mobile_no'])) {
    // Session variables are not set, redirect to index.php
    header("Location: index.php");
    exit;
}else{

  extract($_SESSION);
}
// Your dashboard content goes here
?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Dashboard | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

  <!-- CSS Front Template -->

  <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/dashboard.php","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="bg-light">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-sidebar-detached navbar-fixed-lg navbar-light bg-light">
    <div class="container">
      <div class="navbar-nav-wrap">
        <!-- Logo -->
        <a class="navbar-brand" href="./dashboard.php" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>
        <!-- End Logo -->

        <div class="navbar-nav-wrap-content-start">
          <!-- Search Form -->
          <div class="d-none d-lg-block">
            <div class="dropdown">
              <!-- Input Group -->
              <div class="d-none d-lg-block">
                <div class="input-group input-group-merge navbar-input-group">
                  <div class="input-group-prepend input-group-text">
                    <i class="bi-search"></i>
                  </div>

                  <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                         "clearIcon": "#clearSearchResultsIcon",
                         "dropMenuElement": "#searchDropdownMenu",
                         "dropMenuOffset": 20,
                         "toggleIconOnFocus": true,
                         "activeClass": "focus"
                       }'>
                  <a class="input-group-append input-group-text" href="javascript:;">
                    <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                  </a>
                </div>
              </div>

              <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                         "clearIcon": "#clearSearchResultsIcon",
                         "dropMenuElement": "#searchDropdownMenu",
                         "dropMenuOffset": 20,
                         "toggleIconOnFocus": true,
                         "activeClass": "focus"
                       }'>
                <i class="bi-search"></i>
              </button>
              <!-- End Input Group -->

              <!-- Card Search Content -->
              <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                <div class="card">
                  <!-- Body -->
                  <div class="card-body-height">
                    <div class="d-lg-none">
                      <div class="input-group input-group-merge navbar-input-group mb-5">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>

                        <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                        <a class="input-group-append input-group-text" href="javascript:;">
                          <i class="bi-x-lg"></i>
                        </a>
                      </div>
                    </div>

                    <span class="dropdown-header">Recent searches</span>

                    <div class="dropdown-item bg-transparent text-wrap">
                      <a class="btn btn-soft-dark btn-xs rounded-pill" href="./dashboard.php">
                        Gulp <i class="bi-search ms-1"></i>
                      </a>
                      <a class="btn btn-soft-dark btn-xs rounded-pill" href="./dashboard.php">
                        Notification panel <i class="bi-search ms-1"></i>
                      </a>
                    </div>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Tutorials</span>

                    <a class="dropdown-item" href="./dashboard.php">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <span class="icon icon-soft-dark icon-xs icon-circle">
                            <i class="bi-sliders"></i>
                          </span>
                        </div>

                        <div class="flex-grow-1 text-truncate ms-2">
                          <span>How to set up Gulp?</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="./dashboard.php">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <span class="icon icon-soft-dark icon-xs icon-circle">
                            <i class="bi-paint-bucket"></i>
                          </span>
                        </div>

                        <div class="flex-grow-1 text-truncate ms-2">
                          <span>How to change theme color?</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Members</span>

                    <a class="dropdown-item" href="./dashboard.php">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span>Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="./dashboard.php">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span>David Harrison</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="./dashboard.php">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                            <span class="avatar-initials">A</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span>Anne Richard</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="./dashboard.php">
                    See all results <i class="bi-chevron-right small"></i>
                  </a>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Card Search Content -->

            </div>

          </div>
          <!-- End Search Form -->
        </div>

        <div class="navbar-nav-wrap-content-end">
          <!-- Navbar -->
          <ul class="navbar-nav">
            <li class="nav-item d-none d-md-inline-block">
              <!-- Notification -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                  <i class="bi-bell"></i>
                  <span class="btn-status btn-sm-status btn-status-danger"></span>
                </button>

                <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                  <div class="card">
                    <!-- Header -->
                    <div class="card-header card-header-content-between">
                      <h4 class="card-title mb-0">Notifications</h4>

                      <!-- Unfold -->
                      <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi-three-dots-vertical"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                          <span class="dropdown-header">Settings</span>
                          <a class="dropdown-item" href="#">
                            <i class="bi-archive dropdown-item-icon"></i> Archive all
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="bi-gift dropdown-item-icon"></i> What's new?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header">Feedback</span>
                          <a class="dropdown-item" href="#">
                            <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                    <!-- End Header -->

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                      </li>
                    </ul>
                    <!-- End Nav -->

                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Tab Content -->
                      <div class="tab-content" id="notificationTabContent">
                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                          <!-- List Group -->
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                      <label class="form-check-label" for="notificationCheck1"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Brian Warner</h5>
                                  <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2hr</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                      <label class="form-check-label" for="notificationCheck2"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">K</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Klara Hampton</h5>
                                  <p class="text-body fs-5">mentioned you in a comment</p>
                                  <blockquote class="blockquote blockquote-sm">
                                    Nice work, love! You really nailed it. Keep it up!
                                  </blockquote>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">10hr</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                      <label class="form-check-label" for="notificationCheck3"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Ruby Walter</h5>
                                  <p class="text-body fs-5">joined the Slack group HS Team</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">3dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                      <label class="form-check-label" for="notificationCheck4"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">from Google</h5>
                                  <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">17dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                      <label class="form-check-label" for="notificationCheck5"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Sara Villar</h5>
                                  <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2mn</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                          <!-- End List Group -->
                        </div>

                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                          <!-- List Group -->
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                      <label class="form-check-label" for="notificationCheck6"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">A</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Anne Richard</h5>
                                  <p class="text-body fs-5">accepted your invitation to join Notion</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">1dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                      <label class="form-check-label" for="notificationCheck7"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Finch Hoot</h5>
                                  <p class="text-body fs-5">left Slack group HS projects</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">1dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                      <label class="form-check-label" for="notificationCheck8"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                                      <span class="avatar-initials">HS</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Htmlstream</h5>
                                  <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">6dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                      <label class="form-check-label" for="notificationCheck9"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Linda Bates</h5>
                                  <p class="text-body fs-5">Accepted your connection</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">17dy</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item form-check-select">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                      <label class="form-check-label" for="notificationCheck10"></label>
                                      <span class="form-check-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">L</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Col -->

                                <div class="col ms-n2">
                                  <h5 class="mb-1">Lewis Clarke</h5>
                                  <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                                </div>
                                <!-- End Col -->

                                <small class="col-auto text-muted text-cap">2mts</small>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->

                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                          <!-- End List Group -->
                        </div>
                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->

                    <!-- Card Footer -->
                    <a class="card-footer text-center" href="#">
                      View all notifications <i class="bi-chevron-right"></i>
                    </a>
                    <!-- End Card Footer -->
                  </div>
                </div>
              </div>
              <!-- End Notification -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Apps -->
              <div class="dropdown">
                <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-app-indicator"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                  <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                      <h4 class="card-title">Web apps &amp; services</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body card-body-height">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Atlassian</h5>
                            <p class="card-text text-body">Security and control across Cloud</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                            <p class="card-text text-body">Email collaboration software</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Google webdev</h5>
                            <p class="card-text text-body">Work involved in developing a website</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">Frontapp</h5>
                            <p class="card-text text-body">The inbox for teams</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">HS Support</h5>
                            <p class="card-text text-body">Customer service and support</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-sm avatar-soft-dark">
                              <span class="avatar-initials"><i class="bi-grid"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1 text-truncate ms-3">
                            <h5 class="mb-0">More Front products</h5>
                            <p class="card-text text-body">Check out more HS products</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <a class="card-footer text-center" href="#">
                      View all apps <i class="bi-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
              </div>
              <!-- End Apps -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Activity -->
              <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
                <i class="bi-x-diamond"></i>
              </button>
              <!-- Activity -->
            </li>

            <li class="nav-item">
              <!-- Account -->
              <div class="dropdown">
                <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                  </div>
                </a>

                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                  <div class="dropdown-item-text">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">Mark Williams</h5>
                        <p class="card-text text-body">mark@site.com</p>
                      </div>
                    </div>
                  </div>

                  <div class="dropdown-divider"></div>

                  <!-- Dropdown -->
                  <div class="dropdown">
                    <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-success me-1"></span> Available
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-danger me-1"></span> Busy
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-warning me-1"></span> Away
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"> Reset status
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->

                  <a class="dropdown-item" href="#">Profile &amp; account</a>
                  <a class="dropdown-item" href="#">Settings</a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-dark avatar-circle">
                          <span class="avatar-initials">HS</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                        <span class="card-text">hs.example.com</span>
                      </div>
                    </div>
                  </a>

                  <div class="dropdown-divider"></div>

                  <!-- Dropdown -->
                  <div class="dropdown">
                    <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                      <a class="dropdown-item" href="#">
                        Invite people
                      </a>
                      <a class="dropdown-item" href="#">
                        Analytics
                        <i class="bi-box-arrow-in-up-right"></i>
                      </a>
                      <a class="dropdown-item" href="#">
                        Customize Front
                        <i class="bi-box-arrow-in-up-right"></i>
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->

                  <a class="dropdown-item" href="#">Manage team</a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">Sign out</a>
                </div>
              </div>
              <!-- End Account -->
            </li>
          </ul>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container pt-2 pt-lg-0">
      <!-- Navbar Vertical -->
      <div class="navbar-expand-lg navbar-light">
        <!-- Navbar Toggle -->
        <button class="navbar-toggler w-100 mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-controls="navbarVerticalNavMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text">Nav menu</span>
            <span class="navbar-toggler-default">
              <i class="bi-list"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-x"></i>
            </span>
          </span>
        </button>
        <!-- End Navbar Toggle -->

        <aside id="navbarVerticalNavMenu" class="js-navbar-vertical-aside navbar navbar-vertical navbar-vertical-fixed navbar-vertical-detached navbar-vertical-detached-no-gutters navbar-collapse collapse bg-transparent">
          <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
              <!-- Content -->
              <div class="navbar-vertical-content">
                <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                  <!-- Collapse -->
                  <div class="nav-item">
                    <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                      <i class="bi-house-door nav-icon"></i>
                      <span class="nav-link-title">Dashboards</span>
                    </a>

                    <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenu">
                      <a class="nav-link active" href="./dashboard.php">Default</a>
                      <a class="nav-link " href="./dashboard-alternative.php">Alternative</a>
                    </div>
                  </div>
                  <!-- End Collapse -->

                  <span class="dropdown-header mt-4">Pages</span>
                  <small class="bi-three-dots nav-subtitle-replacer"></small>

                  <!-- Collapse -->
                  <div class="navbar-nav nav-compact">

                  </div>
                  <div id="navbarVerticalMenuPagesMenu">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                        <i class="bi-people nav-icon"></i>
                        <span class="nav-link-title">Users</span>
                      </a>

                      <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./users.php">Overview</a>
                        <a class="nav-link " href="./users-leaderboard.php">Leaderboard</a>
                        <a class="nav-link " href="./users-add-user.php">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUserProfileMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                        <i class="bi-person nav-icon"></i>
                        <span class="nav-link-title">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></span>
                      </a>

                      <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./user-profile.php">Profile</a>
                        <a class="nav-link " href="./user-profile-teams.php">Teams</a>
                        <a class="nav-link " href="./user-profile-projects.php">Projects</a>
                        <a class="nav-link " href="./user-profile-connections.php">Connections</a>
                        <a class="nav-link " href="./user-profile-my-profile.php">My Profile</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesAccountMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesAccountMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesAccountMenu">
                        <i class="bi-person-badge nav-icon"></i>
                        <span class="nav-link-title">Account</span>
                      </a>

                      <div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./account-settings.php">Settings</a>
                        <a class="nav-link " href="./account-billing.php">Billing</a>
                        <a class="nav-link " href="./account-invoice.php">Invoice</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEcommerceMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                        <i class="bi-basket nav-icon"></i>
                        <span class="nav-link-title">E-commerce</span>
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./ecommerce.php">Overview</a>

                        <div id="navbarVerticalMenuPagesMenuEcommerce">
                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu">
                              Products
                            </a>

                            <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                              <a class="nav-link " href="./ecommerce-products.php">Products</a>
                              <a class="nav-link " href="./ecommerce-product-details.php">Product Details</a>
                              <a class="nav-link " href="./ecommerce-add-product.php">Add Product</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                              Orders
                            </a>

                            <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                              <a class="nav-link " href="./ecommerce-orders.php">Orders</a>
                              <a class="nav-link " href="./ecommerce-order-details.php">Order Details</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                              Customers
                            </a>

                            <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                              <a class="nav-link " href="./ecommerce-customers.php">Customers</a>
                              <a class="nav-link " href="./ecommerce-customer-details.php">Customer Details</a>
                              <a class="nav-link " href="./ecommerce-add-customers.php">Add Customers</a>
                            </div>
                          </div>
                          <!-- End Collapse -->
                        </div>

                        <a class="nav-link " href="./ecommerce-referrals.php">Referrals</a>
                        <a class="nav-link " href="./ecommerce-manage-reviews.php">Manage Reviews</a>
                        <a class="nav-link " href="./ecommerce-checkout.php">Checkout</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectsMenu">
                        <i class="bi-stickies nav-icon"></i>
                        <span class="nav-link-title">Projects</span>
                      </a>

                      <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./projects.php">Overview</a>
                        <a class="nav-link " href="./projects-timeline.php">Timeline</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectMenu">
                        <i class="bi-briefcase nav-icon"></i>
                        <span class="nav-link-title">Project</span>
                      </a>

                      <div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                        <a class="nav-link " href="./project.php">Overview</a>
                        <a class="nav-link " href="./project-files.php">Files</a>
                        <a class="nav-link " href="./project-activity.php">Activity</a>
                        <a class="nav-link " href="./project-teams.php">Teams</a>
                        <a class="nav-link " href="./project-settings.php">Settings</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle  collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication">
                        <i class="bi-shield-lock nav-icon"></i>
                        <span class="nav-link-title">Authentication</span>
                      </a>

                      <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                        <div id="navbarVerticalMenuAuthenticationMenu">
                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationLoginMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationLoginMenu">
                              Log In
                            </a>

                            <div id="navbarVerticalMenuAuthenticationLoginMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                              <a class="nav-link " href="./authentication-login-basic.php">Basic</a>
                              <a class="nav-link " href="./authentication-login-cover.php">Cover</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationSignupMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationSignupMenu">
                              Sign Up
                            </a>

                            <div id="navbarVerticalMenuAuthenticationSignupMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                              <a class="nav-link " href="./authentication-signup-basic.php">Basic</a>
                              <a class="nav-link " href="./authentication-signup-cover.php">Cover</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu">
                              Reset Password
                            </a>

                            <div id="navbarVerticalMenuAuthenticationResetPasswordMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                              <a class="nav-link " href="./authentication-reset-password-basic.php">Basic</a>
                              <a class="nav-link " href="./authentication-reset-password-cover.php">Cover</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationEmailVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu">
                              Email Verification
                            </a>

                            <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                              <a class="nav-link " href="./authentication-email-verification-basic.php">Basic</a>
                              <a class="nav-link " href="./authentication-email-verification-cover.php">Cover</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <!-- Collapse -->
                          <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthentication2StepVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu">
                              2-step Verification
                            </a>

                            <div id="navbarVerticalMenuAuthentication2StepVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                              <a class="nav-link " href="./authentication-2-step-verification-basic.php">Basic</a>
                              <a class="nav-link " href="./authentication-2-step-verification-cover.php">Cover</a>
                            </div>
                          </div>
                          <!-- End Collapse -->

                          <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                          <a class="nav-link " href="./error-404.php">Error 404</a>
                          <a class="nav-link " href="./error-500.php">Error 500</a>
                        </div>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <div class="nav-item">
                      <a class="nav-link " href="./api-keys.php" data-placement="left">
                        <i class="bi-key nav-icon"></i>
                        <span class="nav-link-title">API Keys</span>
                      </a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link " href="./welcome-page.php" data-placement="left">
                        <i class="bi-eye nav-icon"></i>
                        <span class="nav-link-title">Welcome Page</span>
                      </a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link " href="./landing.php" data-placement="left">
                        <i class="bi-box-seam nav-icon"></i>
                        <span class="nav-link-title">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></span>
                      </a>
                    </div>
                  </div>
                  <!-- End Collapse -->

                  <span class="dropdown-header mt-4">Apps</span>
                  <small class="bi-three-dots nav-subtitle-replacer"></small>

                  <div class="nav-item">
                    <a class="nav-link " href="./apps-kanban.php" data-placement="left">
                      <i class="bi-kanban nav-icon"></i>
                      <span class="nav-link-title">Kanban</span>
                    </a>
                  </div>

                  <div class="nav-item">
                    <a class="nav-link " href="./apps-calendar.php" data-placement="left">
                      <i class="bi-calendar-week nav-icon"></i>
                      <span class="nav-link-title">Calendar</span>
                    </a>
                  </div>

                  <div class="nav-item">
                    <a class="nav-link " href="./apps-invoice-generator.php" data-placement="left">
                      <i class="bi-receipt nav-icon"></i>
                      <span class="nav-link-title">Invoice Generator</span>
                    </a>
                  </div>

                  <div class="nav-item">
                    <a class="nav-link " href="./apps-file-manager.php" data-placement="left">
                      <i class="bi-folder2-open nav-icon"></i>
                      <span class="nav-link-title">File Manager</span>
                    </a>
                  </div>

                  <span class="dropdown-header mt-4">Layouts</span>
                  <small class="bi-three-dots nav-subtitle-replacer"></small>

                  <div class="nav-item">
                    <a class="nav-link " href="./layouts/dashboard.php" data-placement="left">
                      <i class="bi-grid-1x2 nav-icon"></i>
                      <span class="nav-link-title">Layouts</span>
                    </a>
                  </div>

                  <span class="dropdown-header mt-4">Documentation</span>
                  <small class="bi-three-dots nav-subtitle-replacer"></small>

                  <div class="nav-item">
                    <a class="nav-link " href="./documentation/dashboard.php" data-placement="left">
                      <i class="bi-book nav-icon"></i>
                      <span class="nav-link-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v2.1.1</span></span>
                    </a>
                  </div>

                  <div class="nav-item">
                    <a class="nav-link " href="./documentation/typography.php" data-placement="left">
                      <i class="bi-layers nav-icon"></i>
                      <span class="nav-link-title">Components</span>
                    </a>
                  </div>
                </div>

              </div>
              <!-- End Content -->

              <!-- Footer -->
              <div class="navbar-vertical-footer">
                <ul class="navbar-vertical-footer-list">
                  <li class="navbar-vertical-footer-list-item">
                    <!-- Style Switcher -->
                    <div class="dropdown dropup">
                      <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                      </button>

                      <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                        <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                          <i class="bi-moon-stars me-2"></i>
                          <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                        </a>
                        <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                          <i class="bi-brightness-high me-2"></i>
                          <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                        </a>
                        <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                          <i class="bi-moon me-2"></i>
                          <span class="text-truncate" title="Dark">Dark</span>
                        </a>
                      </div>
                    </div>

                    <!-- End Style Switcher -->
                  </li>

                  <li class="navbar-vertical-footer-list-item">
                    <!-- Other Links -->
                    <div class="dropdown dropup">
                      <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                        <i class="bi-info-circle"></i>
                      </button>

                      <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                        <span class="dropdown-header">Help</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-journals dropdown-item-icon"></i>
                          <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-command dropdown-item-icon"></i>
                          <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-alt dropdown-item-icon"></i>
                          <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-gift dropdown-item-icon"></i>
                          <span class="text-truncate" title="What's new?">What's new?</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Contacts</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i>
                          <span class="text-truncate" title="Contact support">Contact support</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Other Links -->
                  </li>

                  <li class="navbar-vertical-footer-list-item">
                    <!-- Language -->
                    <div class="dropdown dropup">
                      <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                        <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                      </button>

                      <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                        <span class="dropdown-header">Select language</span>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                          <span class="text-truncate" title="English">English (US)</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                          <span class="text-truncate" title="English">English (UK)</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                          <span class="text-truncate" title="Deutsch">Deutsch</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                          <span class="text-truncate" title="Dansk">Dansk</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                          <span class="text-truncate" title="Italiano">Italiano</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                          <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                        </a>
                      </div>
                    </div>

                    <!-- End Language -->
                  </li>
                </ul>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </aside>
      </div>
      <!-- End Navbar Vertical -->

      <!-- Sidebar Detached Content -->
      <div class="sidebar-detached-content">
        <!-- Stats -->
        <div class="row">
          <div class="col-sm-6 col-xl-3 mb-3 mb-xl-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Total Users</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">72,540</h2>
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <span class="badge bg-soft-success text-success">
                  <i class="bi-graph-up"></i> 12.5%
                </span>
                <span class="text-body fs-6 ms-1">from 70,104</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-xl-3 mb-3 mb-xl-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Sessions</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">29.4%</h2>
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <span class="badge bg-soft-success text-success">
                  <i class="bi-graph-up"></i> 1.7%
                </span>
                <span class="text-body fs-6 ms-1">from 29.1%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-xl-3 mb-3 mb-xl-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Avg. Click Rate</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">56.8%</h2>
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <span class="badge bg-soft-danger text-danger">
                  <i class="bi-graph-down"></i> 4.4%
                </span>
                <span class="text-body fs-6 ms-1">from 61.2%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-xl-3 mb-3 mb-xl-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Pageviews</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">92,913</h2>
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <span class="badge bg-soft-secondary text-body">0.0%</span>
                <span class="text-body fs-6 ms-1">from 2,913</span>
              </div>
            </a>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Stats -->

        <div class="row">
          <div class="col-xl-5 mb-3 mb-xl-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Import data into Front Dashboard</h4>

                <!-- Dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-three-dots-vertical"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown2">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-share-fill dropdown-item-icon"></i> Share chart
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="bi-download dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>

                <ul class="list-group list-group-flush list-group-no-gutters">
                  <li class="list-group-item">
                    <h5 class="card-title">Import users from:</h5>
                  </li>

                  <!-- List Group Item -->
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Capsule</h5>
                            <span class="d-block fs-6 text-body">Users</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-auto">
                            <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="bi-box-arrow-up-right ms-1"></i>
                            </a>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Mailchimp</h5>
                            <span class="d-block fs-6 text-body">Users</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-auto">
                            <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="bi-box-arrow-up-right ms-1"></i>
                            </a>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Webdev</h5>
                            <span class="d-block fs-6 text-body">Users</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-auto">
                            <a class="btn btn-primary btn-sm" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="bi-box-arrow-up-right ms-1"></i>
                            </a>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <li class="list-group-item"><span class="small text-muted">Or you can <a class="link" href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</span></li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-xl-7 mb-3 mb-xl-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header card-header-content-sm-between">
                <h4 class="card-header-title mb-2 mb-sm-0">Monthly expenses</h4>

                <!-- Nav -->
                <ul class="nav nav-segment nav-fill" id="expensesTab" role="tablist">
                  <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">This week</a>
                  </li>
                  <li class="nav-item" data-bs-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Last week</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex align-items-center">
                      <span class="h1 mb-0">35%</span>
                      <span class="text-success ms-2">
                        <i class="bi-graph-up"></i> 25.3%
                      </span>
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-auto align-self-sm-end">
                    <div class="row fs-6 text-body">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span> New
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <span class="legend-indicator"></span> Overdue
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <!-- Bar Chart -->
                <div class="chartjs-custom">
                  <canvas id="updatingBarChart" style="height: 20rem;" data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                              "datasets": [{
                                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              },
                              {
                                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                                "backgroundColor": "#e7eaf3",
                                "borderColor": "#e7eaf3"
                              }]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 10,
                                    "postfix": "$"
                                  }
                                }],
                                "xAxes": [{
                                  "gridLines": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 5
                                  },
                                  "categoryPercentage": 0.5,
                                  "maxBarThickness": "10"
                                }]
                              },
                              "cornerRadius": 2,
                              "tooltips": {
                                "prefix": "$",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'></canvas>
                </div>
                <!-- End Bar Chart -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="card-header-title">Users</h4>

                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="fs-6 me-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->
                </div>
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
                  <div class="col-sm-auto">
                    <div class="row align-items-center gx-0">
                      <div class="col">
                        <span class="text-secondary me-2">Status:</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="2" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "10rem"
                                  }'>
                            <option value="null" selected>All</option>
                            <option value="successful">Successful</option>
                            <option value="overdue">Overdue</option>
                            <option value="pending">Pending</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-auto">
                    <div class="row align-items-center gx-0">
                      <div class="col">
                        <span class="text-secondary me-2">Signed up:</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" data-target-column-index="5" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "10rem"
                                  }'>
                            <option value="null" selected>All</option>
                            <option value="1 year ago">1 year ago</option>
                            <option value="6 months ago">6 months ago</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Col -->

                  <div class="col-md">
                    <form>
                      <!-- Search -->
                      <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                      </div>
                      <!-- End Search -->
                    </form>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Filter -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                      <label class="form-check-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-ps-0">Full name</th>
                  <th>Status</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th>Signed up</th>
                  <th>User ID</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                      <label class="form-check-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Unassigned</td>
                  <td>amanda@site.com</td>
                  <td>1 year ago</td>
                  <td>67989</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
                      <label class="form-check-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">A</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Anne Richard</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>anne@site.com</td>
                  <td>6 months ago</td>
                  <td>67326</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                      <label class="form-check-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">David Harrison</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>david@site.com</td>
                  <td>6 months ago</td>
                  <td>55821</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
                      <label class="form-check-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Finch Hoot</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>finch@site.com</td>
                  <td>1 year ago</td>
                  <td>85214</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
                      <label class="form-check-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Bob Dean</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>bob@site.com</td>
                  <td>6 months ago</td>
                  <td>75470</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
                      <label class="form-check-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>Ella@site.com</td>
                  <td>1 year ago</td>
                  <td>37534</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
                      <label class="form-check-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Sam Kart</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>sam@site.com</td>
                  <td>1 year ago</td>
                  <td>57300</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
                      <label class="form-check-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Costa Quinn</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Unassigned</td>
                  <td>costa@site.com</td>
                  <td>1 year ago</td>
                  <td>71288</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck10">
                      <label class="form-check-label" for="usersDataCheck10"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">R</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Rachel Doe</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Unassigned</td>
                  <td>rachel@site.com</td>
                  <td>6 months ago</td>
                  <td>95211</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck11">
                      <label class="form-check-label" for="usersDataCheck11"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Brian Halligan</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>brian@site.com</td>
                  <td>1 year ago</td>
                  <td>58643</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck12">
                      <label class="form-check-label" for="usersDataCheck12"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Linda Bates</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>linda@site.com</td>
                  <td>1 year ago</td>
                  <td>44414</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck13">
                      <label class="form-check-label" for="usersDataCheck13"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                          <span class="avatar-initials">C</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Chris Mathew <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>chris@site.com</td>
                  <td>1 year ago</td>
                  <td>12569</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck14">
                      <label class="form-check-label" for="usersDataCheck14"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">L</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Lewis Clarke</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>lewis@site.com</td>
                  <td>1 year ago</td>
                  <td>54621</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck15">
                      <label class="form-check-label" for="usersDataCheck15"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>clarice@site.com</td>
                  <td>6 months ago</td>
                  <td>23485</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck16">
                      <label class="form-check-label" for="usersDataCheck16"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-danger avatar-circle">
                          <span class="avatar-initials">M</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Mark Colbert</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>mark@site.com</td>
                  <td>6 months ago</td>
                  <td>78463</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck17">
                      <label class="form-check-label" for="usersDataCheck17"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-info avatar-circle">
                          <span class="avatar-initials">J</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Johnny Appleseed</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>johnny@site.com</td>
                  <td>1 year ago</td>
                  <td>23564</td>
                </tr>

                <tr>
                  <td class="table-column-pe-0">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="usersDataCheck18">
                      <label class="form-check-label" for="usersDataCheck18"></label>
                    </div>
                  </td>
                  <td class="table-column-ps-0">
                    <a class="d-flex align-items-center" href="./user-profile.php">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">P</span>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="text-inherit mb-0">Phileas Fogg</h5>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>phileas@site.com</td>
                  <td>6 months ago</td>
                  <td>39199</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="me-2">Showing:</span>

                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true
                            }'>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8" selected>8</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <span class="text-secondary me-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>
              <!-- End Col -->

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->

        <div class="row">
          <div class="col-xl-6 mb-3 mb-xl-0">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Transactions</h4>

                <!-- Daterangepicker -->
                <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary btn-sm dropdown-toggle">
                  <i class="bi-calendar-week"></i>
                  <span class="js-daterangepicker-predefined-preview ms-1"></span>
                </button>
                <!-- End Daterangepicker -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Chart -->
                <div class="chartjs-custom mx-auto" style="height: 20rem;">
                  <canvas class="js-chart-datalabels" data-hs-chartjs-options='{
                                "type": "bubble",
                                "data": {
                                  "datasets": [
                                    {
                                      "label": "Label 1",
                                      "data": [
                                        {"x": 55, "y": 65, "r": 99}
                                      ],
                                      "color": "#fff",
                                      "backgroundColor": "rgba(55, 125, 255, 0.9)",
                                      "borderColor": "transparent"
                                    },
                                    {
                                      "label": "Label 2",
                                      "data": [
                                        {"x": 33, "y": 42, "r": 65}
                                      ],
                                      "color": "#fff",
                                      "backgroundColor": "rgba(100, 0, 214, 0.8)",
                                      "borderColor": "transparent"
                                    },
                                    {
                                      "label": "Label 3",
                                      "data": [
                                        {"x": 46, "y": 26, "r": 38}
                                      ],
                                      "color": "#fff",
                                      "backgroundColor": "#00c9db",
                                      "borderColor": "transparent"
                                    }
                                  ]
                                },
                                "options": {
                                  "scales": {
                                    "yAxes": [{
                                      "gridLines": {
                                        "display": false
                                      },
                                      "ticks": {
                                        "display": false,
                                        "max": 100,
                                        "beginAtZero": true
                                      }
                                    }],
                                    "xAxes": [{
                                    "gridLines": {
                                        "display": false
                                      },
                                      "ticks": {
                                        "display": false,
                                        "max": 100,
                                        "beginAtZero": true
                                      }
                                    }]
                                  },
                                  "tooltips": false
                                }
                              }'></canvas>
                </div>
                <!-- End Chart -->

                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> New
                  </div>
                  <!-- End Col -->

                  <div class="col-auto">
                    <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
                  </div>
                  <!-- End Col -->

                  <div class="col-auto">
                    <span class="legend-indicator bg-info"></span> Failed
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-xl-6">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Reports overview</h4>

                <!-- Dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-three-dots-vertical"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="bi-download dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <span class="h1 d-block mb-4">$7,431.14 USD</span>

                <!-- Progress -->
                <div class="progress rounded-pill mb-2">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Gross value"></div>
                  <div class="progress-bar opacity-50" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Net volume from sales"></div>
                  <div class="progress-bar opacity-25" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="New volume from sales"></div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <span>0%</span>
                  <span>100%</span>
                </div>
                <!-- End Progress -->

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-lg table-nowrap card-table mb-0">
                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary"></span>Gross value
                      </th>
                      <td>$3,500.71</td>
                      <td>
                        <span class="badge bg-soft-success text-success">+12.1%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity-50"></span>Net volume from sales
                      </th>
                      <td>$2,980.45</td>
                      <td>
                        <span class="badge bg-soft-warning text-warning">+6.9%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity-25"></span>New volume from sales
                      </th>
                      <td>$950.00</td>
                      <td>
                        <span class="badge bg-soft-danger text-danger">-1.5%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator"></span>Other
                      </th>
                      <td>32</td>
                      <td>
                        <span class="badge bg-soft-success text-success">1.9%</span>
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- End Table -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>

        <!-- Footer -->
        <div class="row justify-content-between align-items-center mt-3">
          <div class="col">
            <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2021 Htmlstream.</span></p>
          </div>
          <div class="col-auto">
            <div class="d-flex justify-content-end">
              <!-- List Separator -->
              <ul class="list-inline list-separator">
                <li class="list-inline-item">
                  <a class="list-separator-link" href="#">FAQ</a>
                </li>

                <li class="list-inline-item">
                  <a class="list-separator-link" href="#">License</a>
                </li>

                <li class="list-inline-item">
                  <!-- Keyboard Shortcuts Toggle -->
                  <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                    <i class="bi-command"></i>
                  </button>
                  <!-- End Keyboard Shortcuts Toggle -->
                </li>
              </ul>
              <!-- End List Separator -->
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Sidebar Detached Content -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Create a new user Modal -->
  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Invite users</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
          <div class="mb-4">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

              <div class="input-group-append input-group-append-last-sm-down-none">
                <!-- Select -->
                <div class="tom-select-custom tom-select-custom-end">
                  <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true,
                            "dropdownWidth": "11rem"
                          }'>
                    <option value="guest" selected>Guest</option>
                    <option value="can edit">Can edit</option>
                    <option value="can comment">Can comment</option>
                    <option value="full access">Full access</option>
                  </select>
                </div>
                <!-- End Select -->

                <a class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Invite</a>
              </div>
            </div>

            <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
          </div>
          <!-- End Form -->

          <div class="row">
            <h5 class="col modal-title">Invite users</h5>

            <div class="col-auto">
              <a class="d-flex align-items-center small text-body" href="#">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/gmail-icon.svg" alt="Image Description">
                Import contacts
              </a>
            </div>
          </div>

          <hr class="mt-2">

          <ul class="list-unstyled list-py-2 mb-0">
            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">amanda@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">David Harrison</h5>
                      <span class="d-block small">david@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">Markvt@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                    <span class="avatar-initials">B</span>
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Bob Dean</h5>
                      <span class="d-block small">bob@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->
          </ul>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

              <p class="modal-footer-text">The public share <a href="#">link settings</a>
                <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
              </p>
            </div>

            <div class="col-sm-3 text-sm-end">
              <a class="js-clipboard btn btn-white btn-sm text-nowrap" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                  "type": "tooltip",
                  "successText": "Copied!",
                  "contentTarget": "#inviteUserPublicClipboard",
                  "container": "#inviteUserModal"
                 }'>
                <i class="bi-link-45deg me-1"></i> Copy link</a>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Create a new user Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
  <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js"></script>
  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').php(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF NAVBAR VERTICAL ASIDE
    // =======================================================
    new HSSideNav('.js-navbar-vertical-aside').init()


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function (e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function(){
        var newValue = $input.val();

        if (newValue == ""){
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')
        HSFormSearchInstance.getItem(1).on('close', function (el) {
          el.classList.remove('top-0')
        })

        document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
          let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
            $menu = document.querySelector(dataOptions.dropMenuElement)

          $menu.classList.add('top-0')
          $menu.style.left = 0
        })


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        Chart.plugins.unregister(ChartDataLabels);

        HSCore.components.HSChartJS.init('.js-chart')

        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')
            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                offset: 2,
                padding: 0
              }
            }
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
</body>
</html>