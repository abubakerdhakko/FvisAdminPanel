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
        <section class="section ">
          <div class="d-flex justify-content-between">
          <div class="">
            <a class="AnchorDashboard">Back To Dashboard</a>
          </div>
          <div class="">
            <p class="lightFontWellcome mb-0">Wellcome to <span class="panelClass">Admin panel</span></p>
          </div>  
        </div>

<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
    <div class="basic" id="basic">
        <div class="">
            <h2 class="basicH">Basic</h2>
        </div>        
        <div class="ul_lorem_Main_div">
            <ul class="ul_lorem_Mainn ul_lorem_Mainn">
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
            </ul>
        </div>
        
        <div class="d-flex justify-content-center ">
        <button class="btn btnPayStripe"   data-toggle="modal" data-target="#myModal">Payr Via Stripe</button>
        </div>
    </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
    <div class="Silver" id="Silver">
        <div class="">
            <h2 class="basicH">Silver</h2>
        </div>        
        <div class="ul_lorem_Main_div">
            <ul class="ul_lorem_Main">
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
            </ul>
        </div>
        
        <div class="d-flex justify-content-center ">
        <button class="btn btnPayStripe">Pay Via Stripe</button>
        </div>
    </div>
    </div>

    
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
    <div class="gold" id="gold">
        <div class="">
            <h2 class="basicH">Silver</h2>
        </div>        
        <div class="ul_lorem_Main_div">
            <ul class="ul_lorem_Main">
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
                <li>Lorem Ipsum is simply dummy </li>
            </ul>
        </div>
        <div class="d-flex justify-content-center ">
        <button class="btn btnPayStripe">Pay Via Stripe</button>
        </div>
    </div>
    </div>
</div>


        </section>
        
      </div>

</div>
</section>
      <!-- <footer class="main-footer">
        <div class="footer-left">
          <a href="#">Footer</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer> -->
    </div>
  </div>

  
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header modal-header-padding">
        <h4 class="modal-title payTitle mediumFont">                        Payment Details
                        
</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body modal-body-strip">
      <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-md-8">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                    <div class="row">
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                    
            <br/>
            
            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-block" role="button">Pay</a>
                    <h6 class="orPayClass text-center mt-3">--- or ---</h6>
                     <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            Strip Account No</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Account No"
                                required autofocus />
                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br/>
            <a href="http://www.jquery2dotnet.com" class="btn btn-success  btn-block" role="button">Pay</a>
        </div>
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

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