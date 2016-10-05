<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saad's e-commerce template">
    <meta name="author" content="SAAD MANIAR">
    <meta name="keywords" content="">
    <title>Saad's : e-commerce</title>
    <meta name="keywords" content="">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" type="text/css">
    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"></script>
    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
 </head>
<body data-spy="scroll">

    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')

  <!-- *** SCRIPTS TO INCLUDE *** _________________________________________________________
    -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>$(document).ready(function() {
                 $('#example').DataTable();
                    } );</script>
  

 </body>
</html>
