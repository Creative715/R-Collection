<div class="header-top_area bg--primary">
    <div class="container-fluid">
        <div class="row">
            <div class="custom-category_col col-12">
                <div class="category-menu category-menu-hidden">
                    <div class="category-heading">
                        <h2 class="categories-toggle">
                            <span>Shop By</span>
                            <span>Department</span>
                        </h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        @foreach ($categories as $category)
                            <ul>
                                <li class="right-menu"><a
                                        href="{{ route('category.more', $category->slug) }}">{{ $category->title }}</a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="custom-menu_col col-12 d-none d-lg-block">
                <div class="main-menu_area position-relative">
                    <nav class="main-nav">
                        <ul>
                            <li class="dropdown-holder active"><a href="{{ route('main') }}">Home</a>
                            </li>
                            <li><a href="#">About Us</a></li>
                            <li class="contact"><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="custom-setting_col col-12 d-none d-lg-block">
                <div class="ht-right_area">
                    <div class="ht-menu">
                        <ul>
                            <li><a href="{{ route('login') }}"><span class="fa fa-user"></span> <span>My
                                        Account</span><i class="fa fa-chevron-down"></i></a>
                                <ul class="ht-dropdown ht-my_account">
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li class="active"><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="custom-search_col col-12 d-none d-md-block d-lg-none">
                <div class="hm-form_area">
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Enter your search key ...">
                        <button class="header-search_btn" type="submit"><i
                                class="ion-ios-search-strong"><span>Search</span></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-top_area header-sticky bg--primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                <div class="main-menu_area position-relative">
                    <nav class="main-nav">
                        <ul>
                            <li class="dropdown-holder active"><a href="{{ route('main') }}">Home</a>
                            </li>
                            <li class=""><a href="#">About Us</a></li>
                            <li class=""><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-sm-3 d-block d-lg-none">
                <div class="header-logo_area header-sticky_logo">
                    <a href="{{ route('main') }}">
                        <img src="{{ asset('assets/images/menu/logo/3.png') }}" alt="Digital Dreams">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-sm-9">
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
                                    <span class="total-price"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
