<header class="header-light scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <a href="/" class="pt10">
                            <h2>Laptopland</h2>
                        </a>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="/">Beranda<span></span></a>
                            </li>
                            <li>
                                <a href="/jenis-laptop">Jenis Laptop<span></span></a>
                            </li>
                            <li>
                                <a href="/rekomendasi">Rekomendasi<span></span></a>
                            </li>
                        </ul>
                        <div class="menu_side_area">
                            @auth
                                <a href="{{ route('logout') }}" class="btn-main btn-wallet" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <!-- Show logout icon for logged-in users -->
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endauth

                            @guest
                                <a href="/masuk" class="btn-main btn-wallet">
                                    <!-- Show login icon for guests -->
                                    <i class="fa fa-sign-in-alt"></i>
                                    <span>Login</span>
                                </a>
                            @endguest

                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
