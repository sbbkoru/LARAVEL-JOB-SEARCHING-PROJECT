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

    <!-- Main CSS-->
    <link href="{{ asset('panel/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
    @include('site.layout.navbar');
        <!-- END HEADER DESKTOP-->


        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                   @yield('breadcrumb')
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

@yield('content');

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 isteisin.com | Berkay Buyukkoru</p>
                                <a href="https://github.com/sbbkoru"><i class="fab fa-github-square" style="min-height: 100px;"></i>Github</a>
                                <a href="https://www.linkedin.com/in/berkaybuyukkoru/"><i class="fab fa-linkedin" style="min-height: 100px;"></i>Linkedin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
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
    <script src="{{ asset('panel/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('panel/vendor/jquery-form/jquery.form.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('panel/js/main.js') }}"></script>

    @yield('custom_js');
</body>

</html>
<!-- end document-->
