        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a style="font-size: 30px;color: white;" href="{{ route('panel.index') }}">{{ config('app.name') }}
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <h5 class="name">Hello, {{ Auth::user()->firstname}}</h5>
                    <a href="{{ route('panel.logout') }}">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">

                        <li>
                            <a href="{{ route('panel.company.index') }}">
                            <i class="fas fa-building"></i>Companies</a>
                        </li>
                        <li>
                            <a href="{{ route('panel.province.index') }}">
                            <i class="fas fa-map-marker-alt"></i>Provinces</a>
                        </li>
                        <li>
                            <a href="{{ route('panel.category.index') }}">
                            <i class="fas fa-folder"></i>Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('panel.job.index') }}">
                            <i class="fas fa-suitcase"></i>Jobs</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
