<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Moji Cars Database</title>
    <meta name="keywords" content="HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Cloud Software"/>
    <meta name="description" content="Metal- Responsive HTML5/CSS3 Template"/>

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!--<link rel="stylesheet" href="fonts/flaticon/flaticon.css"/>-->
    <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/flaticon.css') }}">
    <!-- //Fonts -->


    <!-- Normalize CSS -->
<!--<link rel="stylesheet" href="css/normalize.css"/-->
    <link rel="stylesheet" href="{{ URL::asset('/css/normalize.css') }}">

    <!-- Owl Carousel CSS -->
    <!--<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">-->
    <link rel="stylesheet" media="screen" href="{{ URL::asset('/css/owl.carousel.css') }}">
    <link rel="stylesheet" media="screen" href="{{ URL::asset('/css/owl.theme.css') }}">
    <!-- my custom css-->
    <link rel="stylesheet" media="screen" href="{{ URL::asset('/css/main.css') }}">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="css/off-canvas.css"/>
    <link rel="stylesheet" href="css/style.css"/> -->
    <link rel="stylesheet" href="{{ URL::asset('/css/off-canvas') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">


    <!-- =========================================
    Head Libs
    ========================================== -->
    <!--<script src="js/modernizr-2.6.2.min.js"></script>-->
    <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <div class="wrapper" id="wrapper">
        <div class="offcanvas-pusher">
            <div class="content-wrapper">
                <div class="container">
                    @include('header')

                        @yield('main')

                        @include('footer')

                </div>
                <!-- .container-->
            </div>
            <!--content-wrapper-->
        </div>
        <!-- offcanvas-pusher -->

        <div class="offcanvas-menu offcanvas-effect visible-xs">
          <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
          <div>
            <div>
                <ul id="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">Cars</a></li>
                  <li><a href="service.html">Services</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
          </div>
        </div>
        <!-- offcanvas-menu end -->
    </div>
    <!-- #wrapper -->


    <!-- =========================================
    JAVASCRIPT
    ========================================== -->

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/hippo-off-canvas.js"></script>
    <script src="js/script.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>



</body>
</html>
