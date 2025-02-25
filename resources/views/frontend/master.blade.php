<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tourm - Travel & Tour Booking Agency HTML Template - Home Travel</title>
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57"   href="{{ assert('frontend/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"  href="{{ assert('frontend/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"  href="{{ assert('frontend/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ assert('frontend/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"  href="{{ assert('frontend/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"  href="{{ assert('frontend/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"  href="{{ assert('frontend/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"  href="{{ assert('frontend/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"  href="{{ assert('frontend/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ assert('frontend/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"  href="{{ assert('frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"  href="{{ assert('frontend/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ assert('frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="frontend/assets/img/favicons/manifest.json" href="{{ assert('frontend/assets/img/favicons/manifest.json') }}">


    <link rel="stylesheet" href="{{ assert('frontend/assets/css/swiper-bundle.min.css') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="frontend/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="frontend/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.min.css">

    <!-- Swiper css -->
    <link rel="stylesheet" href="frontend/assets/css/swiper-bundle.min.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">
    

</head> 


<body>

    <!--********************************
   		Code Start From Here 
	******************************** -->

    <div class="magic-cursor relative z-10">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>


    @include('frontend.Header');



    <div id='content'>
        @yield('content');
    </div>



    @include('frontend.Footer');



<!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <!-- Jquery -->
    <script src="frontend/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Swiper Js -->
    <script src="frontend/assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="frontend/assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="frontend/assets/js/jquery-ui.min.js"></script>
    <!-- imagesloaded -->
    <script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- gsap -->
    <script src="frontend/assets/js/gsap.min.js"></script>

    <!-- circle-progress -->
    <script src="frontend/assets/js/circle-progress.js"></script>

    <script src="frontend/assets/js/matter.min.js"></script>
    <script src="frontend/assets/js/matterjs-custom.js"></script>


    <!-- nice select -->
    <script src="frontend/assets/js/nice-select.min.js"></script>

    <!-- Main Js File -->
    <script src="frontend/assets/js/main.js"></script>
</body>

</html>