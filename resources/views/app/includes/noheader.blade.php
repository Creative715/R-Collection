<header class="header-main_area header-main_area-2 header-main_area-3">
    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-3 col-sm-5">
                    <div class="header-logo_area">
                        <a href="{{ route('main') }}">
                            <img src="{{ asset('assets/images/menu/logo/2.png') }}" alt="Digital Dreams">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="hm-form_area">
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="header-search_btn" type="submit"><i
                                class="ion-ios-search-strong"><span>Search</span></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-7">
                    <div class="header-right_area">
                        <ul>
                            <li class="mobile-menu_wrap d-flex d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap">
                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                    <div class="minicart-count_area">
                                        <i class="ion-bag"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Cart:</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('app.includes.navbar')
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <hr>
                        <h3 class="text-danger">Your Cart Is Empty !</h3>
                        <hr>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">
                    <form action="#" class="inner-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="{{ route('main') }}"><span
                                class="mm-text">Home</span></a>
                        </li>
                        <li class="menu-item-has-children"><a href="#">About Us</a></li>
                        <li class="menu-item-has-children contact"><a href="#contact">Contact</a></li>
                        <li class="menu-item-has-children">
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('login') }}">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>