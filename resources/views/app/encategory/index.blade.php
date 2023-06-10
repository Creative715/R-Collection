@extends('layouts.app_en', ['title' => 'category title', 'description' => 'category description'])
@section('content')
    <!--Body Content-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"><img class="blur-up lazyload"
                        data-src="{{ asset('assets/images/cat-women2.jpg') }}"
                        src="{{ asset('assets/images/cat-women2.jpg') }}" alt="category" title="category" /></div>
                <div class="collection-hero__title-wrapper">
                    <h1 class="collection-hero__title page-width">category</h1>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <div class="container" style="padding: 70px 0;">
            <div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="category-description">
                        <h3>Category Description</h3>
                        <p>LOpen your wardrobe for the most stylish trends from R-Collection - your favorite online clothing
                            store. Find the perfect combination of quality, style and comfort in our wide range. Dress with
                            sophistication with our fashion collections for women, men and children. Enjoy the ultimate
                            pleasure of shopping online with R-Collection - the place where fashion becomes reality.</p>
                    </div>
                    <hr>
                    <div class="productList">
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach ($encategories as $encategory)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="{{ route('encategory.more', $encategory->slug) }}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="{{ $encategory->img ?? 'null' }}"
                                                    src="{{ $encategory->img ?? 'null' }}"
                                                    alt="{{ $encategory->seo_title }}" title="{{ $encategory->seo_title }}">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="{{ $encategory->img ?? 'null' }}"
                                                    src="{{ $encategory->img ?? 'null' }}"
                                                    alt="{{ $encategory->seo_title }}"
                                                    title="{{ $encategory->seo_title }}">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a
                                                    href="{{ route('encategory.more', $encategory->slug) }}">{{ $encategory->title }}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <div class="product-name">
                                                <a href="{{ route('encategory.more', $encategory->slug) }}">more</a></span>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr class="clear">
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>

    </div>
@endsection
