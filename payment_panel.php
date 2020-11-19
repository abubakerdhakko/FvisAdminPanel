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
  <div class="" id="wwrapper">

  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
<!-- header -->
      <?php include 'header.php';?>

<!-- sidebar -->
<?php include 'sidebar.php';?>
    <section id="mmain">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="d-flex justify-content-between">
          <div class="">
            <a class="AnchorDashboard">Back To Dashboard</a>
          </div>
          <div class="">
            <p class="lightFontWellcome">Wellcome to <span class="panelClass">Admin panel</span></p>
          </div>  
        </div>



        <div class="d-flex justify-content-end flex-wrap">
        <div class="d-flex justify-content-start mb-3 flex-wrap">
            <div class="">
            <p class="status_p">Status</p>

            </div>
                    <div class="">

                    <div class="dropdown Show_all">
                    <button type="button" class="btn btn-primary hover_btn_sort dropdown-toggle text-left" data-toggle="dropdown">
                        Show All
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-start mb-3 ml-4">
            <div class="">
            <p class="status_p">Sort By</p>

            </div>
                    <div class="">

                    <div class="dropdown Show_all">
                    <button type="button" class="btn btn-primary hover_btn_sort dropdown-toggle text-left" data-toggle="dropdown">
                        Lowest value
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                    </div>
            </div>
        </div>
        </div>
          <div class="row mt-2">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="projWallet">
              <h4 class="walletH">
              Wallet
              </h4>
              <div class="posWallet text-right">
                    <h1 class="mb-0">$10000 </h1>
              </div>
            </div>

            <div class="projWallet mt-4">
              <h4 class="walletH">
              Accounts Details
              </h4>
              <div class="posWallet text-left">
              <p class="topList">Top Listing</p>
              <p class="topListTwo">Lorem Ipsum is simply dummy text of the printing and    </p>
            </div>

              <div class="posArrow">
                <div class="outerArrowPos">
                  <div class="innerArrowPos">
                  <a href=""><i class="fa fa-arrow-right "></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>


            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mob_mt_2">
              <div class="card">
                <div class="card-header">
                  <h4>Project Detail</h4>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table">
                      <tr class="thborderUpDown">
                        <th>Transaction ID</th>
                        <th>Payee Detail</th>
                        <th>Date</th>
                        <th>Amount($)</th>
                        <th>Details</th>

                      </tr>
                      <tr>
                      <td>000001</td>
                      <td>JohnDoe 1</td>

                        <td>24/11/2020</td>
                      
                        <td>
                          USD 10,250
                      </td>                      
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">view</a>
                      </td>
                      </tr>

                     <tr>
                      <td>000001</td>
                      <td>JohnDoe 1</td>

                        <td>24/11/2020</td>
                      
                        <td>
                          USD 10,250
                      </td>                      
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">view</a>
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
</section>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">Footer</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
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