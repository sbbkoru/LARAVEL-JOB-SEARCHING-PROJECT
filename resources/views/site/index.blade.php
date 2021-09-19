@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>

@endsection

@section('content')
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if(Auth::user())
                            <h1 class="title-4 mb-1">Welcome back
                                <span>{{ Auth::user()->firstname}}!</span>
                            </h1> 
                            @endif
                            <h1>Start searching now to find the job you are looking for.</h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{$usercount}}</h2>
                                <span class="desc">members</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{ $jobcount }}</h2>
                                <span class="desc">available jobs</span>
                                <div class="icon">
                                <i class="zmdi zmdi-book"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{ $locationcount }}</h2>
                                <span class="desc">locations</span>
                                <div class="icon">
                                <i class="zmdi zmdi-city"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">{{ $categorycount }}</h2>
                                <span class="desc">categories</span>
                                <div class="icon">
                                <i class="zmdi zmdi-assignment-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
@endsection
