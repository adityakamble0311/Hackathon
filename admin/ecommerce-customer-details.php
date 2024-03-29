  !DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Customer Details | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="./assets/vendor/quill/dist/quill.snow.css">
  <link rel="stylesheet" href="./assets/vendor/leaflet/dist/leaflet.css">

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

 <?php   include "include/header.php";  ?>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
<?php include "include/sidebar.php";  ?>



  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-customers.php">Customers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer details</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Anne Richard</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Previous customer">
                <i class="bi-arrow-left"></i>
              </button>
              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Next customer">
                <i class="bi-arrow-right"></i>
              </button>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-8">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Body -->
            <div class="card-body">
              <!-- Media -->
              <div class="d-flex align-items-center mb-5">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-lg avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 mx-3">
                  <div class="d-flex mb-1">
                    <h3 class="mb-0 me-3">Anne Richard</h3>

                    <!-- Dropdown -->
                    <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                      <button type="button" class="btn btn-white btn-icon btn-xs rounded-circle" id="editDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-pencil-fill"></i>
                      </button>

                      <div class="dropdown-menu dropdown-card mt-1" aria-labelledby="editDropdown" style="min-width: 20rem;">
                        <!-- Card -->
                        <div class="card">
                          <div class="card-body">
                            <div class="row gx-3">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="firstNameLabel" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice" value="Anna">
                              </div>
                              <!-- End Col -->

                              <div class="col-sm-6">
                                <label for="lastNameLabel" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone" value="Richard">
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <div class="d-flex justify-content-end gap-2 mt-3">
                              <button type="button" class="btn btn-white btn-sm">Cancel</button>
                              <button type="button" class="btn btn-primary btn-sm">Save</button>
                            </div>
                          </div>
                        </div>
                        <!-- End Body -->
                      </div>
                    </div>
                    <!-- End Dropdown -->
                  </div>

                  <span class="fs-6">Customer for 3 months</span>
                </div>

                <div class="d-none d-sm-inline-block ms-auto text-end">
                  <!-- Dropdown -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Actions <i class="bi-chevron-down"></i>
                    </button>

                    <div class="dropdown-menu mt-1" aria-labelledby="actionsDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="bi-envelope dropdown-item-icon"></i> Email
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-telephone dropdown-item-icon"></i> Call
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-arrow-repeat dropdown-item-icon"></i> Merge
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">
                        <i class="bi-trash dropdown-item-icon text-danger"></i>
                        Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
              </div>
              <!-- End Media -->

              <label class="form-label">Customer note</label>

              <!-- Quill -->
              <div class="quill-custom">
                <div class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                     "placeholder": "Type your description...",
                      "modules": {
                        "toolbar": [
                          ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                        ]
                      }
                     }'>
                </div>
              </div>
              <!-- End Quill -->
            </div>
            <!-- Body -->

            <!-- Footer -->
            <div class="card-footer">
              <div class="d-flex justify-content-end gap-3">
                <button type="submit" class="btn btn-white">Discard</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <div class="d-grid gap-2 mb-2 mb-sm-0">
                <h4 class="card-header-title">Orders placed</h4>

                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                  <div class="d-flex align-items-center">
                    <span class="fs-5 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                      <i class="bi-trash"></i> Delete
                    </a>
                  </div>
                </div>
                <!-- End Datatable Info -->
              </div>

              <!-- Nav Scroller -->
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

                <!-- Nav -->
                <ul class="nav nav-segment nav-fill">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">All orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Open</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unfulfilled</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unpaid</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Nav Scroller -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Input Group -->
              <div class="input-group input-group-merge">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>

                <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
              </div>
              <!-- End Input Group -->
            </div>
            <!-- End Body -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
              <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                       "columnDefs": [{
                          "targets": [0, 5],
                          "orderable": false
                        }],
                       "order": [],
                       "info": {
                         "totalQty": "#datatableWithPaginationInfoTotalQty"
                       },
                       "search": "#datatableSearch",
                       "entries": "#datatableEntries",
                       "pageLength": 12,
                       "isResponsive": false,
                       "isShowPaging": false,
                       "pagination": "datatablePagination"
                     }'>
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="table-column-pe-0">
                      <div class="form-check">
                        <input id="datatableCheckAll" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="datatableCheckAll"></label>
                      </div>
                    </th>
                    <th class="table-column-ps-0">Order</th>
                    <th>Date</th>
                    <th>Payment status</th>
                    <th>Total</th>
                    <th>Invoice</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck1">
                        <label class="form-check-label" for="ordersCheck1"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#35463</a>
                    </td>
                    <td>Aug 17, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$256.39</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck2">
                        <label class="form-check-label" for="ordersCheck2"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#23513</a>
                    </td>
                    <td>Aug 17, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$2,125.00</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck3">
                        <label class="form-check-label" for="ordersCheck3"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#62311</a>
                    </td>
                    <td>Aug 03, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$532.99</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck4">
                        <label class="form-check-label" for="ordersCheck4"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#12453</a>
                    </td>
                    <td>July 29, 2020</td>
                    <td>
                      <span class="badge bg-soft-warning text-warning">
                        <span class="legend-indicator bg-warning"></span>Pending
                      </span>
                    </td>
                    <td>$1,035.02</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck5">
                        <label class="form-check-label" for="ordersCheck5"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#84223</a>
                    </td>
                    <td>July 11, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$68.53</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck6">
                        <label class="form-check-label" for="ordersCheck6"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#46542</a>
                    </td>
                    <td>July 04, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$100.00</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck7">
                        <label class="form-check-label" for="ordersCheck7"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a class="text-danger" href="./ecommerce-order-details.php">#35378</a>
                      <i class="tio-warning text-warning"></i>
                    </td>
                    <td>June 27, 2020</td>
                    <td>
                      <span class="badge bg-soft-warning text-warning">
                        <span class="legend-indicator bg-warning"></span>Pending
                      </span>
                    </td>
                    <td class="text-danger">$89.46</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck8">
                        <label class="form-check-label" for="ordersCheck8"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a class="text-danger" href="./ecommerce-order-details.php">#24562</a>
                      <i class="tio-warning text-warning"></i>
                    </td>
                    <td>June 15, 2020</td>
                    <td>
                      <span class="badge bg-soft-warning text-warning">
                        <span class="legend-indicator bg-warning"></span>Pending
                      </span>
                    </td>
                    <td class="text-danger">$3,535.46</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck9">
                        <label class="form-check-label" for="ordersCheck9"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#78531</a>
                    </td>
                    <td>June 12, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$23.89</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck10">
                        <label class="form-check-label" for="ordersCheck10"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#34634</a>
                    </td>
                    <td>June 02, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$77.00</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck11">
                        <label class="form-check-label" for="ordersCheck11"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a class="text-danger" href="./ecommerce-order-details.php">#93817</a>
                      <i class="tio-warning text-warning"></i>
                    </td>
                    <td>May 30, 2020</td>
                    <td>
                      <span class="badge bg-soft-warning text-warning">
                        <span class="legend-indicator bg-warning"></span>Pending
                      </span>
                    </td>
                    <td class="text-danger">$77.00</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck12">
                        <label class="form-check-label" for="ordersCheck12"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#43113</a>
                    </td>
                    <td>May 25, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$1,421.47</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="table-column-pe-0">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="ordersCheck13">
                        <label class="form-check-label" for="ordersCheck13"></label>
                      </div>
                    </td>
                    <td class="table-column-ps-0">
                      <a href="./ecommerce-order-details.php">#12412</a>
                    </td>
                    <td>May 16, 2020</td>
                    <td>
                      <span class="badge bg-soft-success text-success">
                        <span class="legend-indicator bg-success"></span>Paid
                      </span>
                    </td>
                    <td>$45.00</td>
                    <td>
                      <a class="btn btn-white btn-sm" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountInvoiceReceiptModal">
                        <i class="bi-receipt me-1"></i> Invoice
                      </a>
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
                        <option value="12">12</option>
                        <option value="14" selected>14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
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

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Timeline</h4>

              <!-- Checkbox -->
              <div class="form-check">
                <input id="showCommentsCheckbox" type="checkbox" class="form-check-input" checked>
                <label class="form-check-label" for="showCommentsCheckbox">Show comments</label>
              </div>
              <!-- End Checkbox -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Step -->
              <ul class="step step-icon-sm">
                <!-- Step Item -->
                <li class="step-item">
                  <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">A</span>

                    <!-- Quill -->
                    <div class="quill-custom">
                      <div class="js-quill-step" style="height: 15rem;" data-hs-quill-options='{
                           "placeholder": "Type your description...",
                            "modules": {
                              "toolbar": [
                                ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                              ]
                            }
                           }'>
                      </div>
                    </div>
                    <!-- End Quill -->
                  </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                  <div class="step-content-wrapper">
                    <small class="step-divider">Wednesday, 19 August</small>
                  </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                  <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                    <div class="step-content">
                      <h5 class="mb-0">You submitted a customer data request.</h5>
                      <p class="fs-5 mb-0">10:19 AM</p>
                    </div>
                  </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                  <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                    <div class="step-content">
                      <h5 class="mb-0">You added the email anne@gmail.com to this customer.</h5>
                      <p class="fs-5 mb-0">10:18 AM</p>
                    </div>
                  </div>
                </li>
                <!-- End Step Item -->

                <!-- Step Item -->
                <li class="step-item">
                  <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                    <div class="step-content">
                      <h5 class="mb-0">You created this customer.</h5>
                      <p class="fs-5 mb-0">10:18 AM</p>
                    </div>
                  </div>
                </li>
                <!-- End Step Item -->
              </ul>
              <!-- End Step -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <div class="d-none d-lg-block">
            <button type="button" class="btn btn-danger">Delete customer</button>
          </div>
        </div>

        <div class="col-lg-4">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Body -->
            <div class="card-body">
              <!-- List Group -->
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5>Contact info</h5>
                    <a class="link" href="javascript:;">Edit</a>
                  </div>

                  <ul class="list-unstyled list-py-2 text-body">
                    <li><i class="bi-at me-2"></i>ella@site.com</li>
                    <li><i class="bi-phone me-2"></i>+1 (609) 972-22-22</li>
                  </ul>
                </li>

                <li class="list-group-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5>Shipping address</h5>
                    <a class="link" href="javascript:;">Edit</a>
                  </div>

                  <!-- Leaflet (Map) -->
                  <div id="map" class="leaflet-custom rounded mt-1 mb-3" style="min-height: 10rem;" data-hs-leaflet-options='{
                         "map": {
                           "scrollWheelZoom": false,
                           "coords": [37.4040344, -122.0289704]
                         },
                         "marker": [
                           {
                             "coords": [37.4040344, -122.0289704],
                             "icon": {
                               "iconUrl": "./assets/svg/components/map-pin.svg",
                               "iconSize": [50, 45]
                             },
                             "popup": {
                               "text": "153 Williamson Plaza, Maggieberg"
                             }
                           }
                         ]
                        }'></div>
                  <!-- End Leaflet (Map) -->

                  <span class="d-block text-body">
                    45 Roker Terrace<br>
                    Latheronwheel<br>
                    KW5 8NW, London<br>
                    UK <img class="avatar avatar-xss avatar-circle ms-1" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag">
                  </span>
                </li>

                <li class="list-group-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5>Billing address</h5>
                    <a class="link" href="javascript:;">Edit</a>
                  </div>

                  <span class="d-block text-body">
                    45 Roker Terrace<br>
                    Latheronwheel<br>
                    KW5 8NW, London<br>
                    UK <img class="avatar avatar-xss avatar-circle ms-1" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag">
                  </span>

                  <div class="mt-3">
                    <h5 class="mb-0">Mastercard</h5>
                    <span class="d-block text-body">Card Number: ************4291</span>
                  </div>
                </li>
              </ul>
              <!-- End List Group -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h5>Email marketing</h5>
              <a class="link" href="javascript:;">Edit status</a>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <span class="h3">
                <span class="badge bg-soft-dark text-dark rounded-pill">Subscribed</span>
              </span>
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Website activity</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <p>Website activity shows you how many times a contact has visited your site and viewed your pages.</p>

              <!-- Bar Chart -->
              <div class="chartjs-custom my-5" style="height: 12rem;">
                <canvas id="ecommerce-customer-details" class="js-chart" data-hs-chartjs-options='{
                          "type": "line",
                          "data": {
                             "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                             "datasets": [{
                              "data": [10, 9, 14, 5, 10],
                              "backgroundColor": "transparent",
                              "borderColor": "#377dff",
                              "borderWidth": 3,
                              "pointRadius": 0,
                              "hoverBorderColor": "#377dff",
                              "pointBackgroundColor": "#377dff",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
                            },
                            {
                              "data": [15, 13, 18, 7, 26],
                              "backgroundColor": "transparent",
                              "borderColor": "#e7eaf3",
                              "borderWidth": 3,
                              "pointRadius": 0,
                              "hoverBorderColor": "#e7eaf3",
                              "pointBackgroundColor": "#e7eaf3",
                              "pointBorderColor": "#fff",
                              "pointHoverRadius": 0,
                              "tension": 0.4
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
                                    "stepSize": 10,
                                    "color": "#97a4af",
                                    "font": {
                                      "size": 12,
                                      "family": "Open Sans, sans-serif"
                                    },
                                    "padding": 10
                                  }
                                },
                                "x": {
                                  "display": false
                                }
                            },
                            "plugins": {
                              "tooltip": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
                </canvas>
              </div>
              <!-- End Bar Chart -->

              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Yesterday
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Today
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <div class="d-lg-none">
        <button type="button" class="btn btn-danger">Delete customer</button>
      </div>
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

  <!-- Invoice Modal -->
  <div class="modal fade" id="accountInvoiceReceiptModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-top-cover bg-dark text-center">
          <figure class="position-absolute end-0 bottom-0 start-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
              <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
            </svg>
          </figure>

          <div class="modal-close">
            <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
        <!-- End Header -->

        <div class="modal-top-cover-icon">
          <span class="icon icon-lg icon-light icon-circle icon-centered shadow-sm">
            <i class="bi-receipt fs-2"></i>
          </span>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <div class="text-center mb-5">
            <h3 class="mb-1">Invoice from Front</h3>
            <span class="d-block">Invoice #3682303</span>
          </div>

          <div class="row mb-6">
            <div class="col-md-4 mb-3 mb-md-0">
              <small class="text-cap text-secondary mb-0">Amount paid:</small>
              <span class="text-dark">$316.8</span>
            </div>
            <!-- End Col -->

            <div class="col-md-4 mb-3 mb-md-0">
              <small class="text-cap text-secondary mb-0">Date paid:</small>
              <span class="text-dark">April 22, 2020</span>
            </div>
            <!-- End Col -->

            <div class="col-md-4">
              <small class="text-cap text-secondary mb-0">Payment method:</small>
              <div class="d-flex align-items-center">
                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                <span class="text-dark">&bull;&bull;&bull;&bull; 4242</span>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <small class="text-cap mb-2">Summary</small>

          <ul class="list-group mb-4">
            <li class="list-group-item text-dark">
              <div class="d-flex justify-content-between align-items-center">
                <span>Payment to Front</span>
                <span>$264.00</span>
              </div>
            </li>
            <li class="list-group-item text-dark">
              <div class="d-flex justify-content-between align-items-center">
                <span>Tax fee</span>
                <span>$52.8</span>
              </div>
            </li>
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex justify-content-between align-items-center">
                <strong>Amount paid</strong>
                <strong>$316.8</strong>
              </div>
            </li>
          </ul>

          <div class="d-flex justify-content-end gap-3">
            <a class="btn btn-white btn-sm" href="#"><i class="bi-file-earmark-arrow-down-fill me-1"></i> PDF</a>
            <a class="btn btn-white btn-sm" href="#"><i class="bi-printer-fill me-1"></i> Print Details</a>
          </div>

          <hr class="my-5">

          <p class="modal-footer-text">If you have any questions, please contact us at <a class="link" href="mailto:example@gmail.com">example@gmail.com</a> or call at <a class="link text-nowrap" href="#">+1 898 34-5492</a></p>
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>
  <!-- End Invoice Modal -->
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
  <script src="./assets/vendor/quill/dist/quill.min.js"></script>
  <script src="./assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js"></script>
  <script src="./assets/vendor/leaflet/dist/leaflet.js"></script>

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

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

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


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')
        HSCore.components.HSQuill.init('.js-quill-step')


        // INITIALIZATION OF LEAFLET
        // =======================================================
        const leaflet = HSCore.components.HSLeaflet.init(document.getElementById('map'))

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          id: 'mapbox/light-v9'
        }).addTo(leaflet)
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