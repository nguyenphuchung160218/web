<!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="{{ route('home') }}">
                        <img src="{{ asset('') }}images/logo.png" height="60" alt="">
                    </a>
                </div>                 
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify h4 text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-0" style="width: 300px;">
                                <form>
                                    <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mb-0">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user align-middle icons"></i></button>
                            @if(get_data_user('web'))                           
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                <a class="dropdown-item text-dark" href="{{ route('get.user') }}"><i class="uil uil-user align-middle mr-1"></i> Tài khoản</a>
                                <!-- <a class="dropdown-item text-dark" href="#"><i class="uil uil-clipboard-notes align-middle mr-1"></i> Order History</a>
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-arrow-circle-down align-middle mr-1"></i> Download</a> -->
                                <div class="dropdown-divider my-3 border-top"></div>
                                <a class="dropdown-item text-dark" href="{{ route('get.logout') }}"><i class="uil uil-sign-out-alt align-middle mr-1"></i> Đăng xuất</a>
                            </div>
                            @else
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                <a class="dropdown-item text-dark" href="{{ route('get.login') }}"><i class="uil uil-sign-in-alt align-middle mr-1"></i> Đăng nhập</a>
                                <a class="dropdown-item text-dark" href="{{ route('get.register') }}"><i class="uil uil-registered align-middle mr-1"></i> Đăng ký</a>
                            </div>
                            @endif
                        </div>
                    </li>
                </ul><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
        
                        <li class="has-submenu">
                            <a href="{{ route('get.list.article') }}">Tin tức</a><span class="menu-arrow"></span>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.aboutUs') }}">Về Chúng Tôi</a><span class="menu-arrow"></span>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.contact') }}">Liên hệ</a><span class="menu-arrow"></span>
                        </li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End