  !DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Teams | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

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

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

<?php   include "include/header.php"; ?>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
<?php include "include/sidebar.php";  ?>


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end mb-3">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teams</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Teams</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareWithPeopleModal">
              <i class="bi-plus me-1"></i> Add team
            </button>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Nav -->
        <!-- Nav -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
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

          <ul class="nav nav-tabs page-header-tabs" id="projectsTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link " href="./project.php">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-files.php">Files</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-activity.php">Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./project-teams.php">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-settings.php">Settings</a>
            </li>
          </ul>
        </div>
        <!-- End Nav -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-md-between">
          <div class="mb-2 mb-md-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-borderless">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>
          <!-- End Col -->

          <div class="d-grid d-sm-flex align-items-sm-center gap-2">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="fs-5 me-3">
                  <span id="datatableCounter">0</span> Selected
                </span>

                <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->

            <!-- Filter Collapse Trigger -->
            <a class="btn btn-white dropdown-toggle" data-bs-toggle="collapse" href="#filterSearchCollapse" role="button" aria-expanded="false" aria-controls="filterSearchCollapse">
              <i class="bi-funnel me-1"></i> Filters
            </a>
            <!-- End Filter Collapse Trigger -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Filter Search Collapse -->
        <div class="collapse" id="filterSearchCollapse">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-sm-12 col-lg-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="teamsFilterLabel" class="form-label">Teams</label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-people-fill"></i>
                      </div>
                      <input class="form-control" id="teamsFilterLabel" placeholder="Name, role, department" aria-label="Name, role, department">
                    </div>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-12 col-md-6 col-lg-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="tagsFilterLabel" class="form-label">Tags</label>

                    <!-- Select -->
                    <div class="tom-select-custom tom-select-custom-with-tags">
                      <select class="js-select form-select" id="tagsFilterLabel" autocomplete="off" multiple data-hs-tom-select-options='{
                                "placeholder": "Enter top tags"
                              }'>
                        <option value="tagsFilter1">Marketing team</option>
                        <option value="tagsFilter2">Blockchain</option>
                        <option value="tagsFilter3">Customer service</option>
                        <option value="tagsFilter4">Online payment</option>
                        <option value="tagsFilter5">Finance</option>
                        <option value="tagsFilter6">Organizers</option>
                        <option value="tagsFilter7">Software</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-12 col-md-6 col-lg-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="ratingFilterLabel" class="form-label">Rating</label>

                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select" id="ratingFilterLabel" autocomplete="off" multiple data-hs-tom-select-options='{
                                "singleMultiple": true,
                                "hideSelected": false,
                                "placeholder": "Select rating"
                              }'>
                        <option label="empty"></option>
                        <option value="rating1" data-option-template='<div class="d-flex gap-1">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <span class="me-2">1 star</span>
                                </div>'>1 star</option>
                        <option value="rating2" data-option-template='<div class="d-flex gap-1">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <span class="me-2">2 star</span>
                                </div>'>2 star</option>
                        <option value="rating3" selected data-option-template='<div class="d-flex gap-1">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <span class="me-2">3 star</span>
                                </div>'>3 star</option>
                        <option value="rating4" selected data-option-template='<div class="d-flex gap-1">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="default">
                                  <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="12" data-hs-theme-appearance="dark">
                                  <span class="me-2">4 star</span>
                                </div>'>4 star</option>
                        <option value="rating5" selected data-option-template='<div class="d-flex gap-1">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                  <span class="me-2">5 star</span>
                                </div>'>5 star</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-white">Cancel</button>
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Filter Search Collapse -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered card-table" data-hs-datatables-options='{
                   "autoWidth": false,
                   "columnDefs": [{
                      "targets": [0, 6],
                      "orderable": false
                    }],
                   "columns": [
                      null,
                      null,
                      { "width": "35%" },
                      null,
                      null,
                      null,
                      null
                    ],
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
                <th scope="col" class="table-column-ps-0">Team</th>
                <th scope="col" style="min-width: 20rem;">Description</th>
                <th scope="col">Industry</th>
                <th scope="col">Rated</th>
                <th scope="col">Members</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck1">
                    <label class="form-check-label" for="teamDataCheck1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#digitalmarketing</a></td>
                <td>Our group promotes and sells products and services by leveraging online marketing tactics</td>
                <td><a class="badge bg-soft-primary text-primary p-2" href="#">Marketing team</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                      <span class="avatar-initials">A</span>
                    </span>
                    <span class="avatar avatar-soft-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Sara Iwens">
                      <span class="avatar-initials">S</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-light avatar-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                      <span class="avatar-initials">+3</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown1">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck2">
                    <label class="form-check-label" for="teamDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#ethereum</a></td>
                <td>Focusing on innovative and disruptive business models</td>
                <td><a class="badge bg-soft-dark text-dark p-2" href="#">Blockchain</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                      <span class="avatar-initials">T</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Olivier L.">
                      <span class="avatar-initials">O</span>
                    </span>
                    <span class="avatar avatar-light avatar-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                      <span class="avatar-initials">+9</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown2">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck3">
                    <label class="form-check-label" for="teamDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#conference</a></td>
                <td>Online meeting services group</td>
                <td><a class="badge bg-soft-info text-info p-2" href="#">Marketing team</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                      <span class="avatar-initials">Z</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown3">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck4">
                    <label class="form-check-label" for="teamDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#supportteam</a></td>
                <td>Keep in touch and stay productive with us</td>
                <td><a class="badge bg-soft-danger text-danger p-2" href="#">Customer service</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                      <span class="avatar-initials">A</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown4">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck5">
                    <label class="form-check-label" for="teamDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#invoices</a></td>
                <td>This group serves online money transfers as an electronic alternative to paper methods</td>
                <td><a class="badge bg-soft-primary text-primary p-2" href="#">Online payment</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown5">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck6">
                    <label class="form-check-label" for="teamDataCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#payments</a></td>
                <td>Our responsibility to manage the money in this organization</td>
                <td><a class="badge bg-soft-info text-info p-2" href="#">Finance</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown6">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck7">
                    <label class="form-check-label" for="teamDataCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#event</a></td>
                <td>Because we love to know what's going on & share great ideas</td>
                <td><a class="badge bg-soft-dark text-dark p-2" href="#">Organizers</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Daniel Cs.">
                      <span class="avatar-initials">D</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown7">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck8">
                    <label class="form-check-label" for="teamDataCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#softwaretester</a></td>
                <td>Software testers play a critical role in application development. They are quality assurance experts who put applications</td>
                <td><a class="badge bg-soft-danger text-danger p-2" href="#">Software</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-half.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                      <span class="avatar-initials">A</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown8">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck9">
                    <label class="form-check-label" for="teamDataCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#sales</a></td>
                <td>Managing a sales team is no easy task. You have the potential to either make or break your sales reps.</td>
                <td><a class="badge bg-soft-primary text-primary p-2" href="#">Sales</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown9" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown9">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck10">
                    <label class="form-check-label" for="teamDataCheck10"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#webdev</a></td>
                <td>Web talents</td>
                <td><a class="badge bg-soft-dark text-dark p-2" href="#">Development</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar avatar-soft-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                      <span class="avatar-initials">T</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Olivier L.">
                      <span class="avatar-initials">O</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown10" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown10">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck11">
                    <label class="form-check-label" for="teamDataCheck11"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#socialteam</a></td>
                <td>Team that manages and runs socials accounts of the company.</td>
                <td><a class="badge bg-soft-info text-info p-2" href="#">Marketing team</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                    <img src="./assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="default">
                    <img src="./assets/svg/illustrations-light/star-muted.svg" alt="Review rating" width="14" data-hs-theme-appearance="dark">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                      <span class="avatar-initials">Z</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown11" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown11">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="teamDataCheck12">
                    <label class="form-check-label" for="teamDataCheck12"></label>
                  </div>
                </td>
                <td class="table-column-ps-0"><a href="#">#design</a></td>
                <td>Creative minds</td>
                <td><a class="badge bg-soft-primary text-primary p-2" href="#">Design</a></td>
                <td>
                  <div class="d-flex gap-1">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                    <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="14">
                  </div>
                </td>
                <td>
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-soft-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                      <span class="avatar-initials">A</span>
                    </span>
                    <span class="avatar avatar-soft-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Sara Iwens">
                      <span class="avatar-initials">S</span>
                    </span>
                    <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </span>
                    <span class="avatar avatar-light avatar-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                      <span class="avatar-initials">+3</span>
                    </span>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="teamsDropdown12" data-bs-toggle="dropdown" aria-expanded="false">
                      More <i class="bi-chevron-down ms-1"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown12">
                      <a class="dropdown-item" href="#">Rename team</a>
                      <a class="dropdown-item" href="#">Add to favorites</a>
                      <a class="dropdown-item" href="#">Archive team</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </td>
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
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
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

  <!-- Share with people Modal -->
  <div class="modal fade" id="shareWithPeopleModal" tabindex="-1" aria-labelledby="shareWithPeopleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="shareWithPeopleModalLabel">Invite users</h5>
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
                  <select class="js-select form-select tom-select-custom-form-select-invite-user" autocomplete="off" data-hs-tom-select-options='{
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

          <!-- List Group -->
          <ul class="list-unstyled list-py-2">
            <!-- Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <span class="icon icon-soft-dark icon-sm icon-circle">
                    <i class="bi-people-fill"></i>
                  </span>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="text-body mb-0">#digitalmarketing</h5>
                      <span class="d-block fs-6">8 members</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End Item -->

            <!-- Item -->
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
                      <h5 class="text-body mb-0">David Harrison</h5>
                      <span class="d-block fs-6">david@site.com</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End Item -->

            <!-- Item -->
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
                      <h5 class="text-body mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block fs-6">Markvt@site.com</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End Item -->

            <!-- Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <span class="icon icon-soft-dark icon-sm icon-circle">
                    <i class="bi-people-fill"></i>
                  </span>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="text-body mb-0">#conference</h5>
                      <span class="d-block fs-6">3 members</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End Item -->
          </ul>
          <!-- End List Group -->

          <!-- Form Switch -->
          <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch1">
            <span class="col-8 col-sm-9 ms-0">
              <i class="bi-bell text-primary me-2"></i>
              <span class="text-dark">Inform all project members</span>
            </span>
            <span class="col-4 col-sm-3 text-end">
              <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch1" checked>
            </span>
          </label>
          <!-- End Form Switch -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              <input type="hidden" id="publicShareLinkClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

              <p class="modal-footer-text">The public share <a class="link" href="#">link settings</a>
                <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
              </p>
            </div>
            <!-- End Col -->

            <div class="col-sm-3 text-sm-end">
              <a class="js-clipboard btn btn-white btn-sm text-nowrap" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                  "type": "tooltip",
                  "successText": "Copied!",
                  "contentTarget": "#publicShareLinkClipboard",
                  "container": "#shareWithPeopleModal"
                 }'>
                <i class="bi-link me-1"></i> Copy link</a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Share with people Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

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

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
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


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
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