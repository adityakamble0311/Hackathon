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
  <title>Referrals | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">

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

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

  <?php   include "include/header.php"; ?>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
<?php include "include/sidebar.php";  ?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./dashboard.php" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link " href="./dashboard.php">Default</a>
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
                <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuPagesEcommerceMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="true" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                  <i class="bi-basket nav-icon"></i>
                  <span class="nav-link-title">E-commerce</span>
                </a>

                <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenuPagesMenu">
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

                  <a class="nav-link active" href="./ecommerce-referrals.php">Referrals</a>
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

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Referrals</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Referrals</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-5 col-lg-4">
            <small class="text-cap">Your referral code:</small>

            <!-- Input Group -->
            <div class="input-group">
              <input id="referralCode" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
              <div class="input-group-append">
                <a class="js-clipboard btn btn-white" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="right" title="Copy to clipboard" data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#referralCode",
                    "classChangeTarget": "#referralCodeIcon",
                    "defaultClass": "bi-clipboard",
                    "successClass": "bi-check"
                   }'>
                  <i id="referralCodeIcon" class="bi-clipboard"></i>
                </a>
              </div>
            </div>
            <!-- End Input Group -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row col-lg-divider">
        <div class="col-lg-4">
          <!-- Card -->
          <div class="text-center">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-hs-theme-appearance="default" style="min-height: 6rem;">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-hs-theme-appearance="dark" style="min-height: 6rem;">
            <span class="text-cap text-body">Number of referrals</span>
            <span class="d-block display-4 text-dark mb-2">150</span>

            <div class="row col-divider">
              <div class="col text-end">
                <span class="d-block fw-semibold text-success">
                  <i class="bi-graph-up"></i> 12%
                </span>
                <span class="d-block">change</span>
              </div>
              <!-- End Col -->

              <div class="col text-start">
                <span class="d-block fw-semibold text-dark">25</span>
                <span class="d-block">last week</span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-4">
          <!-- Card -->
          <div class="text-center">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations/oc-money-profits.svg" alt="Image Description" data-hs-theme-appearance="default" style="min-height: 6rem;">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations-light/oc-money-profits.svg" alt="Image Description" data-hs-theme-appearance="dark" style="min-height: 6rem;">
            <span class="text-cap text-body">Amount earned</span>
            <span class="d-block display-4 text-dark mb-2">$7,253.00</span>

            <div class="row col-divider">
              <div class="col text-end">
                <span class="d-block fw-semibold text-success">
                  <i class="bi-graph-up"></i> 5.6%
                </span>
                <span class="d-block">change</span>
              </div>
              <!-- End Col -->

              <div class="col text-start">
                <span class="d-block fw-semibold text-dark">$582.00</span>
                <span class="d-block">last week</span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-4">
          <!-- Card -->
          <div class="text-center">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations/oc-growing.svg" alt="Image Description" data-hs-theme-appearance="default" style="min-height: 6rem;">
            <img class="avatar avatar-xl avatar-4x3 mb-4" src="./assets/svg/illustrations-light/oc-growing.svg" alt="Image Description" data-hs-theme-appearance="dark" style="min-height: 6rem;">
            <span class="text-cap text-body">Referral completed</span>
            <span class="d-block display-4 text-dark mb-2">25</span>

            <div class="row col-divider">
              <div class="col text-end">
                <span class="d-block fw-semibold text-danger">
                  <i class="bi-graph-down"></i> 2.3%
                </span>
                <span class="d-block">change</span>
              </div>
              <!-- End Col -->

              <div class="col text-start">
                <span class="d-block fw-semibold text-dark">7</span>
                <span class="d-block">last week</span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Stats -->

      <div class="my-5">
        <p class="text-muted"><i class="bi-exclamation-octagon"></i> Last referral: August 25, 2020.</p>
      </div>

      <div class="row">
        <div class="col-lg-8 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <h4 class="card-header-title mb-2 mb-sm-0">Total sales earnings</h4>

              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary btn-sm dropdown-toggle">
                <i class="tio-date-range"></i>
                <span class="js-daterangepicker-predefined-preview ms-1"></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Bar Chart -->
              <div class="chartjs-custom">
                <canvas id="referrals" class="js-chart" style="height: 15rem;" data-hs-chartjs-options='{
                          "type": "bar",
                          "data": {
                            "labels": ["Jan", "Feb", "March", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            "datasets": [{
                              "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 390, 220],
                              "backgroundColor": "#377dff",
                              "hoverBackgroundColor": "#377dff",
                              "borderColor": "#377dff",
                              "maxBarThickness": "10"
                            }]
                          },
                          "options": {
                            "scales": {
                              "y": {
                                "grid": {
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
                              },
                              "x": {
                                "grid": {
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
                              }
                            },
                            "cornerRadius": 2,
                            "plugins": {
                              "tooltip": {
                                "prefix": "$",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
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

        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Your top countries <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="This report is based on 100% of sessions."></i></h4>
              <a class="btn btn-ghost-secondary btn-sm" href="#">View all</a>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="list-group list-group-flush list-group-no-gutters">
                <!-- Item -->
                <div class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="d-block">United States</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <h5>$4,302.00</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="d-block">Germany</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <h5>$1,951.00</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="Flag">
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="d-block">France</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <h5>$592.00</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Flag">
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="d-block">Canada</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <h5>$219.00</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="d-block">Italy</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <h5>$191.00</h5>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </div>
                <!-- End Item -->
              </div>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header">
          <h4 class="card-header-title">Referral users</h4>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "entries": "#datatableEntries",
                   "pageLength": 15,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th>Referrers</th>
                <th>Referred ID</th>
                <th>URL</th>
                <th>Visits</th>
                <th>Total earned</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">amanda@site.com</span>
                    </div>
                  </a>
                </td>
                <td>24125</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode1" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode1",
                        "classChangeTarget": "#referralsKeyCodeIcon1",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon1" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>556</td>
                <td>$160.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                      <span class="d-block fs-6 text-body">anne@site.com</span>
                    </div>
                  </a>
                </td>
                <td>84521</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode2" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode2",
                        "classChangeTarget": "#referralsKeyCodeIcon2",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon2" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>324</td>
                <td>$110.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-6 text-body">david@site.com</span>
                    </div>
                  </a>
                </td>
                <td>09341</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode3" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode3",
                        "classChangeTarget": "#referralsKeyCodeIcon3",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon3" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>301</td>
                <td>$100.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-6 text-body">finch@site.com</span>
                    </div>
                  </a>
                </td>
                <td>09637</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode4" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode4",
                        "classChangeTarget": "#referralsKeyCodeIcon4",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon4" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>292</td>
                <td>$90.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-6 text-body">bob@site.com</span>
                    </div>
                  </a>
                </td>
                <td>93231</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode5" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode5",
                        "classChangeTarget": "#referralsKeyCodeIcon5",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon5" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>258</td>
                <td>$70.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">ella@site.com</span>
                    </div>
                  </a>
                </td>
                <td>41512</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode6" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode6",
                        "classChangeTarget": "#referralsKeyCodeIcon6",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon6" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>129</td>
                <td>$50.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-6 text-body">hunter@site.com</span>
                    </div>
                  </a>
                </td>
                <td>62312</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode7" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode7",
                        "classChangeTarget": "#referralsKeyCodeIcon7",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon7" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>103</td>
                <td>$50.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">M</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Colbert</span>
                      <span class="d-block fs-6 text-body">mark@site.com</span>
                    </div>
                  </a>
                </td>
                <td>46735</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode8" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode8",
                        "classChangeTarget": "#referralsKeyCodeIcon8",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon8" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>100</td>
                <td>$50.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-6 text-body">costa@site.com</span>
                    </div>
                  </a>
                </td>
                <td>51726</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode9" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode9",
                        "classChangeTarget": "#referralsKeyCodeIcon9",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon9" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>99</td>
                <td>$40.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">R</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">rachel@site.com</span>
                    </div>
                  </a>
                </td>
                <td>89232</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode10" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode10",
                        "classChangeTarget": "#referralsKeyCodeIcon10",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon10" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>75</td>
                <td>$30.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-6 text-body">linda@site.com</span>
                    </div>
                  </a>
                </td>
                <td>98434</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode11" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode11",
                        "classChangeTarget": "#referralsKeyCodeIcon11",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon11" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>52</td>
                <td>$20.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-6 text-body">brian@site.com</span>
                    </div>
                  </a>
                </td>
                <td>89340</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode12" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode12",
                        "classChangeTarget": "#referralsKeyCodeIcon12",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon12" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>39</td>
                <td>$20.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">C</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-6 text-body">chris@site.com</span>
                    </div>
                  </a>
                </td>
                <td>59234</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode13" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode13",
                        "classChangeTarget": "#referralsKeyCodeIcon13",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon13" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>39</td>
                <td>$20.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">clarice@site.com</span>
                    </div>
                  </a>
                </td>
                <td>96545</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode14" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode14",
                        "classChangeTarget": "#referralsKeyCodeIcon14",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon14" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>38</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-6 text-body">lewis@site.com</span>
                    </div>
                  </a>
                </td>
                <td>76322</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode15" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode15",
                        "classChangeTarget": "#referralsKeyCodeIcon15",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon15" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>27</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-6 text-body">sam@site.com</span>
                    </div>
                  </a>
                </td>
                <td>45444</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode16" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode16",
                        "classChangeTarget": "#referralsKeyCodeIcon16",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon16" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>21</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">J</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-6 text-body">johnny@site.com</span>
                    </div>
                  </a>
                </td>
                <td>15512</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode17" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode17",
                        "classChangeTarget": "#referralsKeyCodeIcon17",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon17" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>15</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">P</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-6 text-body">phileas@site.com</span>
                    </div>
                  </a>
                </td>
                <td>12093</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode18" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode18",
                        "classChangeTarget": "#referralsKeyCodeIcon18",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon18" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>12</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">mark@site.com</span>
                    </div>
                  </a>
                </td>
                <td>25639</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode19" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode19",
                        "classChangeTarget": "#referralsKeyCodeIcon19",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon19" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>9</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">T</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-6 text-body">timothy@site.com</span>
                    </div>
                  </a>
                </td>
                <td>89314</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode20" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode20",
                        "classChangeTarget": "#referralsKeyCodeIcon20",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon20" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>3</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">G</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">gary@site.com</span>
                    </div>
                  </a>
                </td>
                <td>81724</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode21" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode21",
                        "classChangeTarget": "#referralsKeyCodeIcon21",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon21" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>3</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">Y</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-6 text-body">yorker@site.com</span>
                    </div>
                  </a>
                </td>
                <td>15033</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode22" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode22",
                        "classChangeTarget": "#referralsKeyCodeIcon22",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon22" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>2</td>
                <td>$10.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">F</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-6 text-body">frank@site.com</span>
                    </div>
                  </a>
                </td>
                <td>32503</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode23" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode23",
                        "classChangeTarget": "#referralsKeyCodeIcon23",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon23" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>2</td>
                <td>$0.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">E</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Elizabeth Carter</span>
                      <span class="d-block fs-6 text-body">eliz@site.com</span>
                    </div>
                  </a>
                </td>
                <td>856734</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode24" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode24",
                        "classChangeTarget": "#referralsKeyCodeIcon24",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon24" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>1</td>
                <td>$0.00</td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./user-profile.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">O</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Olive Clarks</span>
                      <span class="d-block fs-6 text-body">olive@site.com</span>
                    </div>
                  </a>
                </td>
                <td>856734</td>
                <td>
                  <div class="input-group input-group-sm input-group-merge table-input-group">
                    <input id="referralsKeyCode25" type="text" class="form-control" readonly value="https://htmlstream.com/wer9n8x">
                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard" data-hs-clipboard-options='{
                        "type": "tooltip",
                        "successText": "Copied!",
                        "contentTarget": "#referralsKeyCode25",
                        "classChangeTarget": "#referralsKeyCodeIcon25",
                        "defaultClass": "bi-clipboard",
                        "successClass": "bi-check"
                       }'>
                      <i id="referralsKeyCodeIcon25" class="bi-clipboard"></i>
                    </a>
                  </div>
                </td>
                <td>1</td>
                <td>$0.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
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
                    <option value="10">10</option>
                    <option value="15" selected>15</option>
                    <option value="20">20</option>
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
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

  <?php include "include/footer.php";   ?>

    <!-- End Footer -->
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
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
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
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')
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