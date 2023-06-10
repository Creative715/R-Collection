@extends('layouts.app_en', ['title' => $enproducts->title, 'description' => $enproducts->description])
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{ $enproducts->title }}</h2>
                <ul>
                    <li><a href="{{ route('main') }}">Home</a></li>
                    <li class="active">{{ $enproducts->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sp-area">
        <div class="container-fluid">
            <div class="sp-nav">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sp-img_area">
                            <div class="sp-img_slider slick-img-slider uren-slick-slider"
                                data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                                <div class="single-slide zoom">
                                    <img src="{{ $enproducts->img ?? asset('img/no-image.jpg') }}"
                                        alt="{{ $enproducts->title }}">
                                </div>
                            </div>
                            <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    @if (count($enproducts->images) > 0)
                                    @foreach ($enproducts->images as $img)
                                    <div class="single-slide">
                                            <img src="/img/gallery/{{ $img->image }}" alt="{{ $enproducts->title }}">
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                        </div>
                    </div>
                        <div class="col-lg-8">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="{{ route('enproduct.more', $enproducts->slug) }}">{{ $enproducts->title }}</a>
                                    </h5>
                                </div>
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Added: {{ $enproducts->createdAtForHumans() }}</li>
                                        <li>
                                            <h4 class="text-success">Price: {{ $enproducts->price }} $</h4>
                                        </li>
                                    </ul>
                                    <div class="qty-btn_area">
                                        <ul>
                                            <li><a class="qty-cart_btn" target="_blanck" href="{{ $enproducts->buynow ?? 'no' }}">Buy It Now</a></li>
                                            <li><a class="qty-wishlist_btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                            <li><a class="qty-compare_btn" href="compare.html" data-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>{!! $enproducts->content !!}</p>
                                    <div class="my-4">
                                        <hr>
                                    </div>
                                    <div class="uren-social_link">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="my-5">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    @endsection
