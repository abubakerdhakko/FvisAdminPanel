<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Fvis Project</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">

  <link rel="stylesheet" href="assets/css/custom_css.css"/>
  <!-- <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' /> -->
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
<!-- header -->
      <?php include 'header.php';?>

<!-- sidebar -->
<?php include 'sidebar.php';?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="d-flex justify-content-between">
          <div class="regularFont">
            <span class="panelClass">Dashboard</span>         
           </div>
          <div class="">
            <p class="lightFontWellcome">Wellcome to <span class="panelClass">Admin panel</span></p>
          </div>  
        </div>
        <div class="row mt-3 mb-5">
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <div class="projSub">
              <h4 class="projSubH">
              Inveators
              </h4>
              <p class="topList"></p>
              <p class="topListTwo">5   </p>
              
              <div class="posArrow">
                  <div class="outerArrowPos">
                  <div class="innerArrowPos">
                  <a href=""><i class="fa fa-arrow-right "></i></a>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <div class="paymentPanel">
              <h4 class="projSubH">
              investment
              </h4>
              <p class="topList"></p>
              <p class="topListTwo">$10000
              <div class="posArrow">
                  <div class="outerArrowPos">
                  <div class="innerArrowPos">
                  <a href=""><i class="fa fa-arrow-right "></i></a>
               </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <div class="investmentPanel">
              <h4 class="projSubH">
              Wallet
              </h4>
              <p class="topList"></p>
              <p class="topListTwo">$1000  </p>
              <div class="posArrow">
                  <div class="outerArrowPos">
                  <div class="innerArrowPos">
                  <a href=""><i class="fa fa-arrow-right "></i></a>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Top Project</h4>
                  <div class="card-header-form">
                    <a class="AnchorDashboard">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table ">
                      <tr class="thborderUpDown">
                        <th>Projects</th>
                        <th>Fund Required</th>
                        <th>Funding Method</th>
                        <th>Status</th>          
                        <th>Max Time</th>
                        <th>Details</th>

                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                        Beyond Tv Mail
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="">3 to 5 Years</div>
                        </td>
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">View</a>
                      </td>
                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                          Beyond Tv Mail
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="">3 to 5 Years</div>
                        </td>
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">View</a>
                      </td>
                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                          Beyond Tv Mail
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="">3 to 5 Years</div>
                        </td>
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">View</a>
                      </td>
                      </tr>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">Footer</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- <script src="assets/bundles/apexcharts/apexcharts.min.js"></script> -->
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>