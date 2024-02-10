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
  <title>Projects | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

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
                <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuPagesUserProfileMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="true" aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></span>
                </a>

                <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./user-profile.php">Profile</a>
                  <a class="nav-link " href="./user-profile-teams.php">Teams</a>
                  <a class="nav-link active" href="./user-profile-projects.php">Projects</a>
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

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <!-- Profile Cover -->
          <div class="profile-cover">
            <div class="profile-cover-img-wrapper">
              <img class="profile-cover-img" src="./assets/img/1920x400/img1.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Profile Cover -->

          <!-- Profile Header -->
          <div class="text-center mb-5">
            <!-- Avatar -->
            <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
              <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
              <span class="avatar-status avatar-status-success"></span>
            </div>
            <!-- End Avatar -->

            <h1 class="page-header-title">Ella Lauda <i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h1>

            <!-- List -->
            <ul class="list-inline list-px-2">
              <li class="list-inline-item">
                <i class="bi-building me-1"></i>
                <span>Htmlstream</span>
              </li>

              <li class="list-inline-item">
                <i class="bi-geo-alt me-1"></i>
                <a href="#">San Francisco,</a>
                <a href="#">US</a>
              </li>

              <li class="list-inline-item">
                <i class="bi-calendar-week me-1"></i>
                <span>Joined March 2017</span>
              </li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Profile Header -->

          <!-- Nav -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <ul class="nav nav-tabs align-items-center">
              <li class="nav-item">
                <a class="nav-link " href="./user-profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-teams.php">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./user-profile-projects.php">Projects <span class="badge bg-soft-dark text-dark rounded-circle ms-1">3</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-connections.php">Connections</a>
              </li>

              <li class="nav-item ms-auto">
                <div class="d-flex gap-2">
                  <!-- Form Check -->
                  <div class="form-check form-check-switch">
                    <input class="form-check-input" type="checkbox" value="" id="connectCheckbox">
                    <label class="form-check-label btn btn-sm" for="connectCheckbox">
                      <span class="form-check-default">
                        <i class="bi-person-plus-fill"></i> Connect
                      </span>
                      <span class="form-check-active">
                        <i class="bi-check-lg me-2"></i> Connected
                      </span>
                    </label>
                  </div>
                  <!-- End Form Check -->

                  <a class="btn btn-icon btn-sm btn-white" href="#">
                    <i class="bi-list-ul me-1"></i>
                  </a>

                  <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">
                      <span class="dropdown-header">Settings</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-share-fill dropdown-item-icon"></i> Share profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> Block page and profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                      </a>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Feedback</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-flag dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Nav -->

          <!-- Filter -->
          <div class="row align-items-center mb-5">
            <div class="col">
              <h3 class="mb-0">8 projects</h3>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Nav -->
              <ul class="nav nav-segment" id="projectsTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                    <i class="bi-grid"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                    <i class="bi-view-list"></i>
                  </a>
                </li>
              </ul>
              <!-- End Nav -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Filter -->

          <!-- Tab Content -->
          <div class="tab-content" id="projectsTabContent">
            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <div class="card-progress-wrap">
                      <!-- Progress -->
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-secondary text-secondary p-2">To do</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown8">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Webdev</h2>

                        <span class="fs-5">Updated 2 hours ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                            <span class="avatar-initials">B</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                            <span class="avatar-initials">A</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">19</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">33</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">10</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-primary text-primary p-2">In progress</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown1">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Get a complete store audit</h2>

                        <span class="fs-5">Updated 1 day ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                            <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                            <span class="avatar-initials">A</span>
                          </a>
                          <a class="avatar avatar-soft-info" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sara Iwens">
                            <span class="avatar-initials">S</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                            <span class="avatar-initials">+3</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">4</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">8</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">18</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-success text-success p-2">Completed</span>
                        </div>

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown6">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Build stronger customer relationships</h2>

                        <span class="fs-5">Updated 1 day ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                            <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-info" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Lisa Iston">
                            <span class="avatar-initials">L</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                            <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                            <span class="avatar-initials">Z</span>
                          </a>
                          <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                            <span class="avatar-initials">+5</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">7</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">7</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">0</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-primary text-primary p-2">In progress</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown2">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/prosperops-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Cloud computing</h2>

                        <span class="fs-5">Updated 2 days ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                            <span class="avatar-initials">B</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                            <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                            <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">4</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">8</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">30</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-primary text-primary p-2">In progress</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown4">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Update subscription method</h2>

                        <span class="fs-5">Updated 2 days ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                            <span class="avatar-initials">A</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">25</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">30</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">20</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-secondary text-secondary p-2">To do</span>
                        </div>

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown7">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <span class="avatar avatar-lg avatar-soft-info avatar-circle">
                          <span class="avatar-initials">I</span>
                        </span>
                        <!-- End Avatar -->
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Improve social banners</h2>

                        <span class="fs-5">Updated 1 week ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-info" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                            <span class="avatar-initials">B</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                            <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-primary" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Daniel Cs.">
                            <span class="avatar-initials">D</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">9</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">16</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">21</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-success text-success p-2">Completed</span>
                        </div>

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown3">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <img class="avatar avatar-lg" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Create a new theme</h2>

                        <span class="fs-5">Updated 1 week ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                            <span class="avatar-initials">Z</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">7</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">7</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">0</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-hover-shadow text-center h-100">
                    <!-- Progress -->
                    <div class="card-progress-wrap">
                      <div class="progress card-progress">
                        <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <!-- End Progress -->

                    <!-- Body -->
                    <div class="card-body">
                      <div class="row align-items-center text-start mb-4">
                        <div class="col">
                          <span class="badge bg-soft-primary text-primary p-2">In progress</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown5">
                              <a class="dropdown-item" href="#">Rename project </a>
                              <a class="dropdown-item" href="#">Add to favorites</a>
                              <a class="dropdown-item" href="#">Archive project</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Delete</a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>

                      <div class="d-flex justify-content-center mb-2">
                        <!-- Avatar -->
                        <span class="avatar avatar-lg avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">N</span>
                        </span>
                        <!-- End Avatar -->
                      </div>

                      <div class="mb-4">
                        <h2 class="mb-1">Notifications</h2>

                        <span class="fs-5">Updated 1 week ago</span>
                      </div>

                      <small class="card-subtitle">Members</small>

                      <div class="d-flex justify-content-center">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                            <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-danger" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                            <span class="avatar-initials">T</span>
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                            <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                          </a>
                          <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </a>
                          <a class="avatar avatar-soft-warning" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Olivier L.">
                            <span class="avatar-initials">O</span>
                          </a>
                          <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                            <span class="avatar-initials">+9</span>
                          </a>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <a class="stretched-link" href="#"></a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <!-- Stats -->
                      <div class="row col-divider">
                        <div class="col">
                          <span class="h4">9</span>
                          <span class="d-block fs-5">Tasks</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">16</span>
                          <span class="d-block fs-5">Completed</span>
                        </div>
                        <!-- End Col -->

                        <div class="col">
                          <span class="h4">21</span>
                          <span class="d-block fs-5">Days left</span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Stats -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Row -->
            </div>

            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
              <div class="row row-cols-1">
                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-secondary text-secondary p-2 mb-2">To do</span>

                            <h3 class="mb-1">Webdev</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                                <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                                <span class="avatar-initials">B</span>
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                                <span class="avatar-initials">A</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown1">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">2 hours ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">19</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">33</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">10</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-primary text-primary p-2 mb-2">In progress</span>

                            <h3 class="mb-1">Get a complete store audit</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-info" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sara Iwens">
                                <span class="avatar-initials">S</span>
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                                <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                                <span class="avatar-initials">+5</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown2">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">1 day ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">4</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">8</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">18</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-success text-success p-2 mb-2">Completed</span>

                            <h3 class="mb-1">Build stronger customer relationships</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                                <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                                <span class="avatar-initials">Z</span>
                              </a>
                              <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                                <span class="avatar-initials">+5</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown3">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">1 day ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">7</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">7</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">0</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/prosperops-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-primary text-primary p-2 mb-2">In progress</span>

                            <h3 class="mb-1">Cloud computing</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                                <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                                <span class="avatar-initials">B</span>
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                                <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown4">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">2 hours ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">4</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">8</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">30</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-primary text-primary p-2 mb-2">In progress</span>

                            <h3 class="mb-1">Update subscription method</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                                <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                                <span class="avatar-initials">A</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown5">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">2 days ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">25</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">30</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">20</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <span class="avatar avatar-soft-info avatar-circle me-3 me-lg-4">
                        <span class="avatar-initials">I</span>
                      </span>
                      <!-- End Avatar -->

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-secondary text-secondary p-2 mb-2">To do</span>

                            <h3 class="mb-1">Improve social banners</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                                <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                                <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-primary" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Daniel Cs.">
                                <span class="avatar-initials">D</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown6">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">1 week ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">9</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">16</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">21</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="flex-shrink-0 me-3 me-lg-4">
                        <img class="avatar" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-success text-success p-2 mb-2">Completed</span>

                            <h3 class="mb-1">Create a new theme</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                                <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                                <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                                <span class="avatar-initials">Z</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown7">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">1 week ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">7</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">7</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">0</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <span class="avatar avatar-soft-dark avatar-circle me-3 me-lg-4">
                        <span class="avatar-initials">N</span>
                      </span>
                      <!-- End Avatar -->

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-sm-center">
                          <div class="col">
                            <span class="badge bg-soft-primary text-primary p-2 mb-2">In progress</span>

                            <h3 class="mb-1">Notifications</h3>
                          </div>
                          <!-- End Col -->

                          <div class="col-md-3 d-none d-md-flex justify-content-md-end ms-n3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                              <a class="avatar avatar-soft-danger" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                                <span class="avatar-initials">T</span>
                              </a>
                              <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                              </a>
                              <a class="avatar avatar-soft-warning" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Olivier L.">
                                <span class="avatar-initials">O</span>
                              </a>
                              <a class="avatar avatar-light avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                                <span class="avatar-initials">+9</span>
                              </a>
                            </div>
                            <!-- End Avatar Group -->
                          </div>

                          <div class="col-auto">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsListDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsListDropdown8">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Unfold -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <!-- Stats -->
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="fs-5">Updated:</span>
                            <span class="fw-semibold text-dark">1 week ago</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Tasks:</span>
                            <span class="fw-semibold text-dark">9</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Completed:</span>
                            <span class="fw-semibold text-dark">16</span>
                          </li>

                          <li class="list-inline-item">
                            <span class="fs-5">Days left:</span>
                            <span class="fw-semibold text-dark">21</span>
                          </li>
                        </ul>
                        <!-- End Stats -->

                        <!-- Progress -->
                        <div class="progress card-progress">
                          <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

   <?php  include "include/footer.php";   ?>

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

  <script src="./assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="./assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

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


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })
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