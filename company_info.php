<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Fvis Project Company Info</title>
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
            <p class="BackBtn">Back To DashBoard</p>
          </div>
          <div class="">
            <p class="lightFontWellcome">Wellcome to <span class="panelClass">Admin panel</span></p>
          </div>  
        </div>

        <div class="d-flex justify-content-start mb-4">
          <div class="">
            <a class="BackBtn">Back</a>
          </div>
        </div>


        <div class="row">
        <div class="col-md-4">
            <div class="">
            <h3 class="Personal SemiBoldFont textBlack">Company Info</h3>
            </div>        
            <div class="mt-4">
                <form class="mainInputPersonal">
                    <div class="input-group inputPer">
                    <input class="form-control fontInputCompany" placeholder="Company Name"/>
                    </div>
                    <div class="input-group mt-3 inputPer">
                    <input class="form-control fontInputCompany" placeholder="Registration No"/>
                    </div>
                    
                    <div class="input-group inputPer mt-3">
                    <input class="form-control fontInputCompany" placeholder="Postal Address"/>
                    </div>
                    <div class="input-group mt-3 inputPer">
                    <input class="form-control fontInputCompany" placeholder="E-mail"/>
                    </div>
                    
                    <div class="input-group inputPer mt-3">
                    <input class="form-control fontInputCompany" placeholder="fax"/>
                    </div>
                    <div class="input-group mt-3 inputPer">
                    <input class="form-control fontInputCompany" placeholder="E-mail"/>
                    </div>
                    
                    <div class="input-group inputPer mt-3">
                    <input class="form-control fontInputCompany" placeholder="Contact Number"/>
                    </div>
                    <div class="mt-3">
                    <button class="btn btnpersonal   mt-3">Next</button>
                    </div>
                </form>
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