<div class="col-2 col-sm-3 col-md-3 col-lg-5">
    <div class="d-block d-lg-none">
        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
            <i class="icon anm anm-times-l"></i>
            <i class="anm anm-bars-r"></i>
        </button>
    </div>
    <!--Desktop Menu-->
    <nav class="grid__item" id="AccessibleNav">
        <!-- for mobile -->
        <ul id="siteNav" class="site-nav medium left hidearrow">
            <li class="lvl1 parent megamenu"><a href="{{ route('main') }}">Home <i class="anm anm-angle-down-l"></i></a>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Women`s Fashion<i class="anm anm-angle-down-l"></i></a>
                <div class="megamenu style4">
                    <ul class="grid grid--uniform mmWrapper">
                        <li class="grid__item lvl-1 col-md-4 col-lg-4">
                            <a href="{{ url('/en/category/womens-wear.html') }}"><img
                                    src="{{ asset('assets/images/megamenu-bg1.jpg') }}" alt=""
                                    title="" /></a>
                        </li>
                        @if ($subcategories1->count() > 0)
                            @foreach ($subcategories1 as $subcategory)
                                <li class="grid__item lvl-1 col-md-2 col-lg-2"><a
                                        href="{{ route('encategory.more', $subcategory->slug) }}"
                                        class="site-nav lvl-1">{{ $subcategory->title }}</a>
                                    <ul class="subLinks">
                                        <li class="lvl-2"><a href="{{ route('encategory.more', $subcategory->slug) }}"
                                                class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                    </ul>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Men`s Fashion<i class="anm anm-angle-down-l"></i></a>
                <div class="megamenu style4">
                    <ul class="grid grid--uniform mmWrapper">
                        <li class="grid__item lvl-1 col-md-4 col-lg-4">
                            <a href="#"><img src="{{ asset('assets/images/megamenu-bg2.jpg') }}" alt=""
                                    title="" /></a>
                        </li>

                        @if ($subcategories2->count() > 0)
                            @foreach ($subcategories2 as $subcategory)
                                <li class="grid__item lvl-1 col-md-2 col-lg-2"><a
                                        href="{{ route('encategory.more', $subcategory->slug) }}"
                                        class="site-nav lvl-1">{{ $subcategory->title }}</a>
                                    <ul class="subLinks">
                                        <li class="lvl-2"><a href="{{ route('encategory.more', $subcategory->slug) }}"
                                                class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                    </ul>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </li>
            <li class="lvl1 parent dropdown"><a href="#">Inside RC <i class="anm anm-angle-down-l"></i></a>
                <ul class="dropdown">
                    <li><a href="#" class="site-nav">About Us</a></li>
                    <li><a href="#" class="site-nav">Contact Us</a></li>
                    <li><a href="#" class="site-nav">Terms & condition</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!--End Desktop Menu-->
</div>
