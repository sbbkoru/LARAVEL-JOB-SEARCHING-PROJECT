@php
use App\Models\User;
@endphp
<!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="{{route('site.index')}}">
                           <b style="font-size: 30px;">isteisin.com</b>
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{ route('site.search') }}">
                                <i class="fas fa-suitcase"></i>Search Job
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{ route('site.bycity') }}">by City</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('site.bycategory') }}">by Category</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-university"></i>
                                    <span class="bot-line"></span>Universities</a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>Domains</a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-question-circle"></i>
                                    <span class="bot-line"></span>Who are we?</a>
                            </li>
                            <li>
                                <a href="{{route('site.contact')}}">
                                <i class="fas fa-address-book"></i>
                                    <span class="bot-line"></span>Contact</a>
                            </li>

                        </ul>
                    </div>
                    <div class="header__tool">


                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">

                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{route('site.editaccount', ['user_id' => Auth::user()->id])}}">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Settings</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billings</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('site.logout')}}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->
