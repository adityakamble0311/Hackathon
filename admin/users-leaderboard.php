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
  <title>Leaderboard | Front - Admin &amp; Dashboard Template</title>

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





  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leaderboard</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Leaderboard</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <!-- Nav -->
            <ul class="nav nav-segment" id="leaderboardTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="all-time-tab" data-bs-toggle="tab" href="#all-time" role="tab">
                  All time
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="weekly-tab" data-bs-toggle="tab" href="#weekly" role="tab">
                  Weekly
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab">
                  Monthly
                </a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card overflow-hidden">
        <!-- Tab Content -->
        <div class="tab-content" id="leaderboardTabContent">
          <div class="tab-pane fade show active" id="all-time" role="tabpanel" aria-labelledby="all-time-tab">
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width: 2rem;">Rank</th>
                    <th scope="col" class="table-text-start">Name</th>
                    <th scope="col">Closed issues</th>
                    <th scope="col">Completed projects</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Efficiency rate</th>
                    <th scope="col">Hours</th>
                    <th scope="col">Avg. Score</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Amanda Harvey</span>
                        </div>
                      </a>
                    </td>
                    <td>20</td>
                    <td>35</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [15,15,7,27,34,25,30],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 1.5%
                      </span>
                    </td>
                    <td>505</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.97</td>
                  </tr>

                  <tr>
                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                        </div>
                      </a>
                    </td>
                    <td>12</td>
                    <td>54</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [6,3,24,20,10,11,14],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 3.5%
                      </span>
                    </td>
                    <td>467</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.95</td>
                  </tr>

                  <tr>
                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-info avatar-circle">
                          <span class="avatar-initials">L</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                        </div>
                      </a>
                    </td>
                    <td>62</td>
                    <td>31</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [26,13,34,40,50,21,17],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 2.1%
                      </span>
                    </td>
                    <td>460</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.90</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                        </div>
                      </a>
                    </td>
                    <td>0</td>
                    <td>76</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [22,22,34,20,10,11,25],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 9.6%
                      </span>
                    </td>
                    <td>414</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.52</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                        </div>
                      </a>
                    </td>
                    <td>8</td>
                    <td>25</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [9,15,35,20,10,20,22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 1.1%
                      </span>
                    </td>
                    <td>372</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.25</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                        </div>
                      </a>
                    </td>
                    <td>44</td>
                    <td>4</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [6,3,24,20,10,25,14],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 9.2%
                      </span>
                    </td>
                    <td>399</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.80</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">M</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Mark Colbert</span>
                        </div>
                      </a>
                    </td>
                    <td>25</td>
                    <td>43</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [35,40,14,10,20,15,10],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 1.5%
                      </span>
                    </td>
                    <td>390</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.80</td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Ella Lauda</span>
                        </div>
                      </a>
                    </td>
                    <td>55</td>
                    <td>15</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [26,23,24,30,40,29,34],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 7%
                      </span>
                    </td>
                    <td>204</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.45</td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                        </div>
                      </a>
                    </td>
                    <td>4</td>
                    <td>57</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [16,25,29,31,5,9,12],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 1.5%
                      </span>
                    </td>
                    <td>202</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.02</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-danger avatar-circle">
                          <span class="avatar-initials">C</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                        </div>
                      </a>
                    </td>
                    <td>9</td>
                    <td>61</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [36,43,24,10,7,15,20],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 6.6%
                      </span>
                    </td>
                    <td>159</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 2.92</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table -->
          </div>

          <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width: 2rem;">Rank</th>
                    <th scope="col" class="table-text-start">Name</th>
                    <th scope="col">Closed issues</th>
                    <th scope="col">Projects</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Efficiency rate</th>
                    <th scope="col">Hours</th>
                    <th scope="col">Avg. Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Amanda Harvey</span>
                        </div>
                      </a>
                    </td>
                    <td>56</td>
                    <td>35</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [21,20,24,20,18,30,50],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 3.9%
                      </span>
                    </td>
                    <td>505</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.80</td>
                  </tr>
                  <tr>
                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-info avatar-circle">
                          <span class="avatar-initials">L</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                        </div>
                      </a>
                    </td>
                    <td>82</td>
                    <td>31</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [4,20,24,25,25,25,26],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 0.1%
                      </span>
                    </td>
                    <td>460</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.72</td>
                  </tr>
                  <tr>
                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                        </div>
                      </a>
                    </td>
                    <td>34</td>
                    <td>76</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [30,20,40,15,18,20,25],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 4.5%
                      </span>
                    </td>
                    <td>414</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.22</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                        </div>
                      </a>
                    </td>
                    <td>84</td>
                    <td>25</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [5,8,12,20,18,25,15],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 0.8%
                      </span>
                    </td>
                    <td>372</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.10</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                        </div>
                      </a>
                    </td>
                    <td>33</td>
                    <td>54</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [10,20,22,20,22,17,12],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 1.9%
                      </span>
                    </td>
                    <td>467</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.5</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                        </div>
                      </a>
                    </td>
                    <td>10</td>
                    <td>4</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [5,20,24,10,18,14,9],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 5.6%
                      </span>
                    </td>
                    <td>399</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.80</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                        </div>
                      </a>
                    </td>
                    <td>2</td>
                    <td>57</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [10,23,32,20,44,17,23],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 6.2%
                      </span>
                    </td>
                    <td>202</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.54</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Ella Lauda</span>
                        </div>
                      </a>
                    </td>
                    <td>5</td>
                    <td>15</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [35,15,24,12,18,9,8],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 0.1%
                      </span>
                    </td>
                    <td>204</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.45</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">M</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Mark Colbert</span>
                        </div>
                      </a>
                    </td>
                    <td>29</td>
                    <td>43</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [4,20,24,10,18,8,19],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 4.6%
                      </span>
                    </td>
                    <td>390</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.26</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-danger avatar-circle">
                          <span class="avatar-initials">C</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                        </div>
                      </a>
                    </td>
                    <td>11</td>
                    <td>61</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [10,20,12,20,24,17,35],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 6.6%
                      </span>
                    </td>
                    <td>159</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 2.92</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table -->
          </div>

          <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-thead-bordered table-nowrap table-text-center table-align-middle card-table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width: 2rem;">Rank</th>
                    <th scope="col" class="table-text-start">Name</th>
                    <th scope="col">Closed issues</th>
                    <th scope="col">Completed projects</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Efficiency rate</th>
                    <th scope="col">Hours</th>
                    <th scope="col">Avg. Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="text-warning" style="font-size: 1.5rem;">🥇</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-info avatar-circle">
                          <span class="avatar-initials">L</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                        </div>
                      </a>
                    </td>
                    <td>45</td>
                    <td>31</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [15,36,17,20,4,30,32],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 0.5%
                      </span>
                    </td>
                    <td>460</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.72</td>
                  </tr>
                  <tr>
                    <td><span class="text-secondary" style="font-size: 1.5rem;">🥈</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Amanda Harvey</span>
                        </div>
                      </a>
                    </td>
                    <td>12</td>
                    <td>35</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [22,15,24,47,18,25,29],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 3.5%
                      </span>
                    </td>
                    <td>505</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.71</td>
                  </tr>
                  <tr>
                    <td><span style="font-size: 1.5rem; color: #924b18;">🥉</span></td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                        </div>
                      </a>
                    </td>
                    <td>1</td>
                    <td>54</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [5,15,12,31,18,14,10],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 2.1%
                      </span>
                    </td>
                    <td>467</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.65</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                        </div>
                      </a>
                    </td>
                    <td>0</td>
                    <td>4</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [16,15,22,47,33,15,10],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 2.7%
                      </span>
                    </td>
                    <td>399</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.30</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                        </div>
                      </a>
                    </td>
                    <td>10</td>
                    <td>25</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [12,15,55,47,24,20,22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 1.1%
                      </span>
                    </td>
                    <td>372</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.25</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                        </div>
                      </a>
                    </td>
                    <td>39</td>
                    <td>76</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [22,53,24,22,18,33,29],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 1.6%
                      </span>
                    </td>
                    <td>414</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 4.12</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                        </div>
                      </a>
                    </td>
                    <td>64</td>
                    <td>57</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [22,15,24,47,18,25,29],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 3.3%
                      </span>
                    </td>
                    <td>202</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.02</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">M</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Mark Colbert</span>
                        </div>
                      </a>
                    </td>
                    <td>83</td>
                    <td>43</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [10,15,24,47,18,37,32],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4                                    
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 5.2%
                      </span>
                    </td>
                    <td>390</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 3.01</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-soft-danger avatar-circle">
                          <span class="avatar-initials">C</span>
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                        </div>
                      </a>
                    </td>
                    <td>30</td>
                    <td>61</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [6,3,24,20,10,11,14],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-success text-success p-1">
                        <i class="bi-graph-up"></i> 1.4%
                      </span>
                    </td>
                    <td>159</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 2.87</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="table-text-start">
                      <a class="d-flex align-items-center" href="./user-profile.php">
                        <div class="avatar avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                        </div>
                        <div class="ms-3">
                          <span class="d-block h5 text-inherit mb-0">Ella Lauda</span>
                        </div>
                      </a>
                    </td>
                    <td>15</td>
                    <td>15</td>
                    <td>
                      <div class="chartjs-custom" style="height: 2rem; width: 6rem;">
                        <canvas class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["value","value","value","value","value","value","value"],
                                     "datasets": [{
                                      "data": [22,15,24,47,18,25,22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "pointHoverRadius": 0,
                                      "tension": 0.4
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                       "y": {
                                         "display": false
                                       },
                                       "x": {
                                         "display": false
                                       }
                                     },
                                     "plugins": {
                                       "tooltip": false
                                     }
                                  }
                                }'>
                        </canvas>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-soft-danger text-danger p-1">
                        <i class="bi-graph-down"></i> 2.1%
                      </span>
                    </td>
                    <td>204</td>
                    <td><i class="bi-star-fill text-warning me-1"></i> 2.67</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table -->
          </div>
        </div>
        <!-- End Tab Content -->
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

  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>

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