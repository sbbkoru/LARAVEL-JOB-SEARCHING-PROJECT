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
    <title>{{ config('app.name') }} - MEMBER LOGIN</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('panel/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
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
    <link href="{{ asset('panel/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('panel/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <b style="font-size: 45px;">MEMBER LOGIN</b>
                                <b style="font-size: 30px;">{{config('app.name')}}</b>
                            </a>
                            <p>Please enter your informations for logging in.</p>
                        </div>
                        <div class="login-form">
                            @if (Session::get('error'))

                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">ERROR</span>
											Invalid information!
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
                            @endif
                            @if (Session::get('success'))

                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
											<span class="badge badge-pill badge-success">SUCCESS</span>
											Connected successfully!
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
                            @endif



                            <form action="{{ route('site.login') }}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Your Email" value="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Your Password" value="">
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{route('site.register')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   <!-- Jquery JS-->
   <script src="{{ asset('panel/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('panel/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('panel/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('panel/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('panel/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
