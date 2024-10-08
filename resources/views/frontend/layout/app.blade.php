<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'default title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="frontend/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="frontend/css/main.css?v=5.3" />
</head>
     <!-- Include the model  partial -->
    @include('frontend.model.type1')

    <!-- Include the Header Partial -->
    @include('frontend.layout.header')

    @if(Request::is('/'))
        <!-- Content for the homepage -->
        <main class="main">
            <!-- Include the slider partial -->
             @include('frontend.slider.type1')

            <!-- Include the feature categories slider partial -->
            @include('frontend.slider.feature_categories.type1')

            <!-- Include the banner slier partial -->
             @include('frontend.slider.banner.type1')
             
             <!-- Include the popular product slider partial -->
            @include('frontend.slider.popular_product.type1')

        </main>
            
    @endif
    
    
    <!-- Include the preloader partial -->
     @include('frontend.preloader.type1')

    <!-- Vendor JS-->
    <script src="frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="frontend/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="frontend/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/plugins/slick.js"></script>
    <script src="frontend/js/plugins/jquery.syotimer.min.js"></script>
    <script src="frontend/js/plugins/waypoints.js"></script>
    <script src="frontend/js/plugins/wow.js"></script>
    <script src="frontend/js/plugins/perfect-scrollbar.js"></script>
    <script src="frontend/js/plugins/magnific-popup.js"></script>
    <script src="frontend/js/plugins/select2.min.js"></script>
    <script src="frontend/js/plugins/counterup.js"></script>
    <script src="frontend/js/plugins/jquery.countdown.min.js"></script>
    <script src="frontend/js/plugins/images-loaded.js"></script>
    <script src="frontend/js/plugins/isotope.js"></script>
    <script src="frontend/js/plugins/scrollup.js"></script>
    <script src="frontend/js/plugins/jquery.vticker-min.js"></script>
    <script src="frontend/js/plugins/jquery.theia.sticky.js"></script>
    <script src="frontend/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="frontend/js/main.js?v=5.3"></script>
    <script src="frontend/js/shop.js?v=5.3"></script>
</body>
</html>