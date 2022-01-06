<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Login Page - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
    Dashboard
  </title>
  <link rel="apple-touch-icon" href="{{asset('backend/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
 
  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/forms/icheck/custom.css')}}">
 
  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/custom-rtl.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/css-rtl/pages/login-register.css')}}">

</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="{{asset('uploads/'.get_general_value('header_logo'))}}" width="120" height="100"  alt="branding logo">
                    </div>
                  </div>
                 @yield('form_login')
          
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('backend/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('backend/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('backend/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/js/core/app.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('backend/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>