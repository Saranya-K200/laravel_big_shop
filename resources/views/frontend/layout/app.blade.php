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

    <!--leaflet map-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
     <!-- Include the model  partial -->
    @include('frontend.model.type1')

    <!-- Include the Header Partial -->
    @include('frontend.layout.header')

    @if(request()->query('category'))

        @yield('content')

    @elseif(Request::is('/'))
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

            <!-- Include the daily best sells slider partial -->
             @include('frontend.slider.daily_best_sells.type1')

            <!-- Include the popular deal_of_the_day slider partial -->
            @include('frontend.slider.deal_of_the_day.type1')

            <section class="section-padding mb-30">
                <div class="container">
                    <div class="row">
                        <!-- Include the top_selling slider partial -->
                        @include('frontend.slider.top_selling.type1')

                        <!-- Include the trending_products slider partial -->
                        @include('frontend.slider.trending_products.type1')

                        <!-- Include the recently_added slider partial -->
                        @include('frontend.slider.recently_added.type1')

                        <!-- Include the top_rated slider partial -->
                        @include('frontend.slider.top_rated.type1')
                    </div>
                </div>
            </section>
            <!--End 4 columns-->

        </main>

    @else

        @yield('content')
            
    @endif

    
     <!-- Include the footer partial -->
     @include('frontend.layout.footer')
    
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

    <script src="frontend/js/plugins/leaflet.js"></script>
    <!-- Template  JS -->
    <script src="frontend/js/main.js?v=5.3"></script>
    <script src="frontend/js/shop.js?v=5.3"></script>

    <script>
        $(document).ready(function(){

            // console.log("document loaded");

            // Category Search Event
            // Set the selected option value (example: setting it to '2')
            // $('#category').val('2'); // This sets the dropdown to 'Category 2'

            $('#category').change(function() {
                var selectedValue = $(this).val();
                console.log("Selected Category ID: " + selectedValue);

                // Optionally submit the form if needed
                // Submit the form when the dropdown value changes
                $(this).closest('form').submit();
                
            });
            
        });
    </script>
</body>
</html>