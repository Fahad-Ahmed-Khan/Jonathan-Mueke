
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 09:24:09 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>JMUEKE| ADMIN CONFIG</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('backend/assets/auth/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('backend/assets/auth/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('backend/assets/auth/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('backend/assets/auth/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
    @yield('auth-content')
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/assets/auth/js/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/assets/auth/js/popper.min.js')}}"></script>
  <script src="{{ asset('backend/assets/auth/js/bootstrap.min.js')}}"></script>
  
</body>
</html>
