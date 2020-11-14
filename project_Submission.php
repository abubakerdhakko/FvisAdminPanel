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
                    <button type="button" class="btn btn-primary hover_btn_sort dropdown-toggle" data-toggle="dropdown">
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
                    <button type="button" class="btn btn-primary hover_btn_sort dropdown-toggle" data-toggle="dropdown">
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
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Project Detail</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Duration</th>
                        <th>value</th>
                        <th>Status</th>
                        <th>Details</th>

                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="saqure-img"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Beyond Tv Mail">
                                <span class="TableCompanyName ml-4">Beyond Tv Mail</span>
                              </li>
                          </ul>
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="ApproveColor">Approved</div>
                        </td>
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">view</a>
                      </td>
                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="saqure-img"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Beyond Tv Mail">
                                <span class="TableCompanyName ml-4">Beyond Tv Mail</span>
                              </li>
                          </ul>
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="SubmittedColor">Approved</div>
                        </td>
                        <td>
                        <a href="#" class="btn btn-outline-primary radiusBtn">view</a>
                      </td>
                      </tr>
                      <tr>
                      <td>OOOOO1</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="saqure-img"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Beyond Tv Mail">
                                <span class="TableCompanyName ml-4">Beyond Tv Mail</span>
                              </li>
                          </ul>
                        </td>
                        <td class="align-middle">
                        <span class="TableCompanyName ">3 to 5 Years</span>
                        </td>
                        <td>USD 100000</td>
                        <td>
                        <div class="unapproveColor">UnApproved</div>
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