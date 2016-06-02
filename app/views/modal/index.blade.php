<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css?v=iframe">
<link rel="stylesheet" type="text/css" href="/assets/css/superfish.css?v=iframe">
<link rel="stylesheet" type="text/css" href="/assets/css/animate.css?v=iframe">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css?v=iframe">
<link rel="stylesheet" type="text/css" href="/assets/fontello/css/fontello.css?v=iframe">
 <!-- color scheme css -->
<link rel="stylesheet" type="text/css" href="/assets/css/color_scheme.css?v=iframe">

<!-- Toggle Switch -->
<link rel="stylesheet" type="text/css" href="/assets/check_radio/skins/all.css?v=iframe">

<!-- JQUERY -->
<script src="/assets/js/jquery-1.10.2.min.js?v=iframe"></script>
<script src="/assets/js/jquery.placeholder.js?v=iframe"></script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
  <body class="inmodal-body">

<!-- dynamic content goes here -->
  @yield('content')
<!-- dynamic content goes here -->


  <script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="/assets/js/additional-methods.js"></script>



  <script src="/assets/check_radio/icheck.min.js"></script>

  <script type="text/javascript">
      $(function() {
          //start checkboxes and radios
          $('input').iCheck({
              checkboxClass: 'icheckbox_square-yellow',
              radioClass: 'iradio_square-yellow',
              increaseArea: '20%' // optional
          });
      });
  </script>
  <!-- CB JS -->
  <script src="/assets/js/jquery.cookie.js?v=iframe"></script>

  <!-- Functions JS -->
  <script src="/assets/js/functions.js?v=iframe"></script>

 </body>
</html><!-- Include the footer -->

