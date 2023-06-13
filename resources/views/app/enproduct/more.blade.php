@extends('layouts.app_en', ['title' => $enproducts->title, 'description' => $enproducts->description])
@section('content')
    <!--Body Content-->
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="{{ route('main') }}" title="Back to the home page">Home</a><span
                        aria-hidden="true">›</span><span>{{ $enproducts->title }}</span>
                </div>
            </div>
            <!--End Breadcrumb-->

            <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                <!--#ProductSection-product-template-->
                <div class="product-single product-single-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img product-single__photos bottom">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="blur-up lazyload zoompro"
                                            data-zoom-image="{{ $enproducts->img ?? asset('img/no-image.jpg') }}"
                                            alt="" src="{{ $enproducts->img ?? asset('img/no-image.jpg') }}" />
                                    </div>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span><span
                                            class="lbl pr-label1">new</span></div>
                                    <div class="product-buttons">
                                        {{-- <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a> --}}
                                        <a href="#" class="btn prlightbox" title="Zoom"><i
                                                class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="product-thumb product-thumb-1">
                                    <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                        <a data-image="{{ $enproducts->img ?? asset('img/no-image.jpg') }}"
                                            data-zoom-image="{{ $enproducts->img ?? asset('img/no-image.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ $enproducts->img ?? asset('img/no-image.jpg') }}" alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-2.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-2.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-2.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-3.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-3.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-3.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-4.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-4.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-4.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-5.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-5.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-5.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-6.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-6.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-6.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-7.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-7.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-7.jpg') }}"
                                                alt="" />
                                        </a>
                                        <a data-image="{{ asset('assets/images/product-detail-page/cape-dress-8.jpg') }}"
                                            data-zoom-image="{{ asset('assets/images/product-detail-page/cape-dress-8.jpg') }}"
                                            class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true"
                                            tabindex="-1">
                                            <img class="blur-up lazyload"
                                                src="{{ asset('assets/images/product-detail-page/cape-dress-8.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="lightboximages">
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big1.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big2.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big3.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible7-big.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big4.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big5.jpg') }}"
                                        data-size="1462x2048"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big6.jpg') }}"
                                        data-size="731x1024"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big7.jpg') }}"
                                        data-size="731x1024"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big8.jpg') }}"
                                        data-size="731x1024"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big9.jpg') }}"
                                        data-size="731x1024"></a>
                                    <a href="{{ asset('assets/images/product-detail-page/camelia-reversible-big10.jpg') }}"
                                        data-size="731x1024"></a>
                                </div>

                            </div>
                            <!--Product Feature-->
                            <div class="prFeatures">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('assets/images/credit-card.png') }}" alt="Safe Payment"
                                            title="Safe Payment" />
                                        <div class="details">
                                            <h3>Safe Payment</h3>Pay with the world's most payment methods.
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                        <img src="{{ asset('assets/images/shield.png') }}" alt="Confidence"
                                            title="Confidence" />
                                        <div class="details">
                                            <h3>Confidence</h3>Protection covers your purchase and personal data.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Feature-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{ $enproducts->title }}</h1>
                                {{-- <div class="product-nav clearfix">					
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div> --}}
                                <div class="prInfoRow">
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$900.00</span></s>
                                    <span
                                        class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span
                                                class="money">${{ $enproducts->price }}</span></span>
                                    </span>
                                </p>
                                <div class="product-single__description rte">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                                <form method="post" action="#" id="product_form_10508262282" accept-charset="UTF-8"
                                    class="product-form product-form-product-template hidedropdown"
                                    enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        <div class="product-form__item">
                                            <label class="header">Color: <span class="slVariant">Red</span></label>
                                            <div data-value="Black" class="swatch-element color black available">
                                                <input class="swatchInput" id="swatch-0-black" type="radio"
                                                    name="option-0" value="Black"><label class="swatchLbl color small"
                                                    for="swatch-0-black" style="background-color:black;"
                                                    title="Black"></label>
                                            </div>
                                            <div data-value="Maroon" class="swatch-element color maroon available">
                                                <input class="swatchInput" id="swatch-0-maroon" type="radio"
                                                    name="option-0" value="Maroon"><label class="swatchLbl color small"
                                                    for="swatch-0-maroon" style="background-color:maroon;"
                                                    title="Maroon"></label>
                                            </div>
                                            <div data-value="Blue" class="swatch-element color blue available">
                                                <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                    name="option-0" value="Blue"><label class="swatchLbl color small"
                                                    for="swatch-0-blue" style="background-color:blue;"
                                                    title="Blue"></label>
                                            </div>
                                            <div data-value="Dark Green"
                                                class="swatch-element color dark-green available">
                                                <input class="swatchInput" id="swatch-0-dark-green" type="radio"
                                                    name="option-0" value="Dark Green"><label
                                                    class="swatchLbl color small" for="swatch-0-dark-green"
                                                    style="background-color:darkgreen;" title="Dark Green"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2 my-4" data-option-index="1" =>
                                        <div class="product-form__item">
                                            <label class="header">Size: <span class="slVariant">XS</span></label>
                                        </div>
                                    </div>
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                                                    class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to
                                                    Wishlist</span></a>
                                        </div>
                                    </div>
                                    <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank" href="#"
                                                class="btn btn--small btn--secondary btn--share share-facebook"
                                                title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Share</span>
                                            </a>
                                            <a href="#"
                                                class="btn btn--small btn--secondary btn--share share-pinterest"
                                                title="Share by Email" target="_blank">
                                                <i class="fa fa-envelope" aria-hidden="true"></i> <span
                                                    class="share-title" aria-hidden="true">Email</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tabs-->
                            <div class="tabs-listing">
                                <div class="tab-container">
                                    <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                                    <div id="tab1" class="tab-content">
                                        <div class="product-description rte">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, but also
                                                the leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                                <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                                <li>Lorem Ipsum is not simply random text.</li>
                                                <li>Free theme updates</li>
                                            </ul>
                                            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                            <p>Lorem Ipsum is not simply random text.Lorem Ipsum is not simply random
                                                text.Lorem Ipsum is not simply random text.Lorem Ipsum is not simply random
                                                text.Lorem Ipsum is not simply random text.</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a complete account of the
                                                system, and expound the actual teachings of the great explorer of the truth,
                                                the master-builder of human happiness.</p>
                                            <p>Change colors, fonts, banners, megamenus and more. Preview changes are live
                                                before saving them.</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a complete account of the
                                                system, and expound the actual teachings of the great explorer of the truth,
                                                the master-builder of human happiness.</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                                in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                                fuga.</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a complete account of the
                                                system, and expound the actual teachings of the great explorer of the truth,
                                                the master-builder of human happiness.</p>
                                            <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Tabs-->
                        </div>
                    </div>
                    <!--End-product-single-->

                    <!--Related Product Slider-->
                    <div class="related-product grid-products mt-5">
                        <hr>
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias,
                                praesentium illo earum delectus molestiae facilis optio quam officia ut! Sed perferendis
                                quia quos distinctio aliquid pariatur eius labore corporis molestias!</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image1.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image1.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image1.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image1-1.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Edna Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant1.jpg' }}" alt="image" />
                                        </li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant2.jpg' }}" alt="image" />
                                        </li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3.jpg' }}" alt="image" />
                                        </li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant4.jpg' }}" alt="image" />
                                        </li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant5.jpg' }}" alt="image" />
                                        </li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant6.jpg' }}" alt="image" />
                                        </li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image2.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image2.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image2.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image2.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Elastic Waist Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End product price -->
        
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant2-1.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant2-2.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant2-3.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant2-4.j' }}pg"
                                                alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image3.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image3.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image3.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image3.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">3/4 Sleeve Kimono Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-1.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-2.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-3.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-4.j' }}pg"
                                                alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image4.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image4.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image4.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image4.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Cape Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant4-1.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant4-2.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant4-3.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant4-4.j' }}pg"
                                                alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image5.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image5.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image5.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image5.jpg') }}"
                                            alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Paper Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->

        
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-1.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-2.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-3.j' }}pg"
                                                alt="image" /></li>
                                        <li class="swatch medium rounded"><img
                                                src="{{ 'assets/images/product-images/variant3-4.j' }}pg"
                                                alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image6.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image6.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image6.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image6.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Zipper Jacket</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image7.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image7.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset('assets/images/product-images/product-image7.jpg') }}"
                                            src="{{ asset('assets/images/product-images/product-image7.jpg') }}"
                                            alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Zipper Jacket</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End product price -->
        
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <!--End Related Product Slider-->

                    <!--Recently Product Slider-->
                    {{-- <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                                <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                            </header>
                            <div class="productPageSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image6.jpg') }}" src="{{ asset('assets/images/product-images/product-image6.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image6.jpg') }}" src="{{ asset('assets/images/product-images/product-image6.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Zipper Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image7.jpg') }}" src="{{ asset('assets/images/product-images/product-image7.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image7.jpg') }}" src="{{ asset('assets/images/product-images/product-image7.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Zipper Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image8.jpg" src="assets/images/product-images/product-image8.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image8-1.jpg" src="assets/images/product-images/product-image8-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Workers Shirt Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image9.jpg" src="assets/images/product-images/product-image9.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image9-1.jpg" src="assets/images/product-images/product-image9-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Watercolor Sport Jacket in Brown/Blue</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image10.jpg" src="assets/images/product-images/product-image10.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image10-1.jpg" src="assets/images/product-images/product-image10-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Washed Wool Blazer</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ $enproducts->img ?? asset('img/no-image.jpg') }}" src="assets/images/product-images/product-image13.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image13-1.jpg" src="assets/images/product-images/product-image13-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ashton Necklace</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image14.jpg" src="assets/images/product-images/product-image14.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image14-1.jpg" src="assets/images/product-images/product-image14-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ara Ring</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image15.jpg" src="assets/images/product-images/product-image15.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image15-1.jpg" src="assets/images/product-images/product-image15-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ara Ring</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    <!--End Recently Product Slider--> --}}

                </div>
                <!--#ProductSection-product-template-->
            </div>
        </div>
    @endsection
