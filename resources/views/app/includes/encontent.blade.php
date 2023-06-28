            <!--Body Content-->
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-right">
                    <div class="page-title">
                        <div class="wrapper">
                            <div class="page-width">
                                <div class="top-header">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="language-dropdown">
                                                    <span class="language-dd">English</span>
                                                    <ul id="language">
                                                        <li class="#">Norwegian</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lookbook Start -->
                <div class="lookbook-1">
                    <div class="lookbook grid grid-masonary">
                        <div class="grid-sizer"></div>
                        @foreach ($encategories as $encategory)
                            <div class="grid-lookbook grid-item">
                                <img src="{{ $encategory->img }}" alt="{{ $encategory->title }}">
                                <div class="caption">
                                    <h2>{{ $encategory->seo_title }}</h2>
                                    <a class="btn" href="{{ route('encategory.more', [$encategory->slug]) }}">Shop
                                        now <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                                </div>
                                <a class="overlay" href="{{ route('encategory.more', [$encategory->slug]) }}"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="container my-5">
                        {{-- <p class="lead">Open your wardrobe for the most stylish trends from R-Collection - your
                            favorite online clothing
                            store. Find the perfect combination of quality, style and comfort in our wide range. Dress
                            with
                            sophistication with our fashion collections for women, men and children. Enjoy the ultimate
                            pleasure of shopping online with R-Collection - the place where fashion becomes reality.</p> --}}
                    </div>
                </div>
                <!-- Lookbook Start -->
            </div>
            <!--End Body Content-->
