@extends('layouts.app_en', ['title' => $encategories->seo_title, 'description' => $encategories->description])
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
                    <h1 class="collection-hero__title page-width">{{ $encategories->seo_title }}</h1>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <div class="container" style="padding: 70px 0;min-height:700px;">
            <div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="category-description">
                        <h2>{{ $encategories->seo_title }}</h2>
                    </div>
                    <hr>
                    <div class="productList">
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @if ($subcategories->count() > 0)
                                    @foreach ($subcategories as $subcategory)
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="{{ route('encategory.more', $subcategory->slug) }}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload"
                                                        data-src="{{ $subcategory->img ?? 'null' }}"
                                                        src="{{ $subcategory->img ?? 'null' }}"
                                                        alt="{{ $subcategory->seo_title }}"
                                                        title="{{ $subcategory->seo_title }}">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload"
                                                        data-src="{{ $subcategory->img ?? 'null' }}"
                                                        src="{{ $subcategory->img ?? 'null' }}"
                                                        alt="{{ $subcategory->seo_title }}"
                                                        title="{{ $subcategory->seo_title }}">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product title -->
                                                <div class="product-title">
                                                    <a
                                                        href="{{ route('encategory.more', $subcategory->slug) }}">{{ $subcategory->title }}</a>
                                                </div>
                                                <!-- End product title -->
                                                <!-- product price -->
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                <div class="product-title">
                                                    <a
                                                        href="{{ route('encategory.more', $subcategory->slug) }}">more</a></span>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="row">
                                @if ($enproducts->count() > 0)
                                    @foreach ($enproducts as $enproduct)
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="{{ route('enproduct.more', $enproduct->slug) }}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload"
                                                        data-src="{{ $enproduct->img ?? 'null' }}"
                                                        src="{{ $enproduct->img ?? 'null' }}"
                                                        alt="{{ $enproduct->seo_title }}"
                                                        title="{{ $enproduct->seo_title }}">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload"
                                                        data-src="{{ $enproduct->img ?? 'null' }}"
                                                        src="{{ $enproduct->img ?? 'null' }}"
                                                        alt="{{ $enproduct->seo_title }}"
                                                        title="{{ $enproduct->seo_title }}">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product title -->
                                                <div class="product-title">
                                                    <a
                                                        href="{{ route('enproduct.more', $enproduct->slug) }}">{{ $enproduct->title }}</a>
                                                </div>
                                                <!-- End product title -->
                                                <!-- product price -->
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                <div class="product-title">
                                                    <a
                                                        href="{{ route('enproduct.more', $enproduct->slug) }}">more</a></span>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr class="clear">
                    {{-- <div class="pagination">
                        <ul>
                            {{ $subcategories->links() }}
                        </ul>
                    </div> --}}
                </div>
                <!--End Main Content-->
            </div>
        </div>

    </div>
@endsection
