<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>{{ config('app.name') }}</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('panel/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('panel/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('panel/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('panel/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

    @include('panel.layout.sidebar');

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div>
                                <a style="color: white;margin-right: 700px;margin-top: 10px;" href="{{route('site.index')}}">Go To Website</a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <h1 style="color: white;">@yield('title')</h1>
                                    <i class="zmdi zmdi-search pl-5"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-50 mb-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-right">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            @yield('breadcrumb')
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- END BREADCRUMB-->


            <section class="section__content section__content--p30">
                <section class="container-fluid">
                    <div class="row">
                @yield('content')
                </div>
                </section>
            </section>



            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('panel/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('panel/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('panel/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/jquery-form/jquery.form.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('panel/vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('panel/vendor/vector-map/jquery.vmap.world.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('panel/js/main.js') }}"></script>
    <script src="{{ asset('panel/js/custom.js') }}"></script>

    @yield('custom_js')

</body>

</html>
<!-- end document-->
