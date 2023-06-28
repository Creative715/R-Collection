            <!--Search Form Drawer-->
            <div class="search">
                <div class="search__form">
                    <form class="search-bar__form" action="#">
                        <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                        <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                    </form>
                    <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
                </div>
            </div>
            <!--End Search Form Drawer-->
                <!--Top Header-->
    <!--End Top Header-->
            <!--Header-->
            <div class="header-wrap animated d-flex">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!--Desktop Logo-->
                        <div class="logo col-md-1 col-lg-1 d-none d-lg-block">
                            <a href="{{ route('main') }}">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="R-Collection" title="R-Collection" />
                                <br>
                            <p style="color: #000000;margin-left:5px;">eco-brand</p>
                            </a>
                        </div>
                        <!--End Desktop Logo-->
                        @include('app.includes.en_nav')
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                            <div class="logo">
                                <a href="{{ route('main') }}">
                                    <img src="{{ asset('assets/images/logo.svg') }}" alt="R-Collection" title="R-Collection" />
                                    <br>
                            <p style="color: #000000;margin:0 auto;">eco-brand</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="site-cart">
                                <a href="#;" class="site-header__cart" title="Cart">
                                    <i class="icon anm anm-bag-l"></i>
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                                </a>
                                <!--Minicart Popup-->
                                <div id="header-cart" class="block block-cart">
                                    <ul class="mini-products-list">
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="{{ asset('assets/images/product-images/cape-dress-1.jpg') }}" alt="3/4 Sleeve Kimono Dress" title="" />
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                                <div class="variant-cart">Black / XL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                    <div class="product-price">
                                                        <span class="money">$59.00</span>
                                                    </div>
                                                 </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="{{ asset('assets/images/product-images/cape-dress-2.jpg') }}" alt="Elastic Waist Dress - Black / Small" title="" />
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                                <div class="variant-cart">Gray / XXL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                   <div class="priceRow">
                                                    <div class="product-price">
                                                        <span class="money">$99.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total">
                                        <div class="total-in">
                                            <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                        </div>
                                         <div class="buttonSet text-center">
                                            <a href="#" class="btn btn-secondary btn--small">View Cart</a>
                                            <a href="#" class="btn btn-secondary btn--small">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                                <!--End Minicart Popup-->
                            </div>
                            <div class="site-header__search">
                                {{-- <div class="language-dropdown">
                                    <span class="language-dd">English</span>
                                    <ul id="language">
                                        <li class="">Norwegian</li>
                                    </ul>
                                </div> --}}
                                {{-- <span class="user-menu d-block d-lg-none"><i class="anm anm-user-circle-o" aria-hidden="true"></i></span>
                                <ul class="customer-links list-inline">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route("register") }}">Create Account</a></li>
                                </ul> --}}
                                <a href="#" style="font-size: 21px;padding-right:10px;"><i class="icon anm anm-user-circle-o"></i></a>
                                <a href="#" style="font-size: 21px;padding-right:7px;"><i class="icon anm anm-heart-l"></i></a>
                                <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header-->
            @include('app.includes.en_mobile')
