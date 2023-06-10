<div class="col-2 col-sm-3 col-md-3 col-lg-8">
    <div class="d-block d-lg-none">
        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
            <i class="icon anm anm-times-l"></i>
            <i class="anm anm-bars-r"></i>
        </button>
    </div>
    <!--Desktop Menu-->
    <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
        <ul id="siteNav" class="site-nav medium center hidearrow">
            <li class="lvl1 parent megamenu"><a href="{{ route('main') }}">Home <i class="anm anm-angle-down-l"></i></a>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Product<i class="anm anm-angle-down-l"></i></a>
                <div class="megamenu style4">
                    <ul class="grid grid--uniform mmWrapper">
                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="{{ url('/en/category/womens-wear.html') }}" class="site-nav lvl-1">Women's wear</a>
                            <ul class="subLinks">
                              @if ($subcategories1->count() > 0)
                              @foreach ($subcategories1 as $subcategory)
                                <li class="lvl-2"><a href="{{ route('encategory.more', $subcategory->slug) }}" class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                          </li>
                          <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="{{ url('/en/category/mens-wear.html') }}" class="site-nav lvl-1">Men's wear</a>
                            <ul class="subLinks">
                              @if ($subcategories2->count() > 0)
                              @foreach ($subcategories2 as $subcategory)
                                <li class="lvl-2"><a href="{{ route('encategory.more', $subcategory->slug) }}" class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                          </li>
                        <li class="grid__item lvl-1 col-md-6 col-lg-6">
                            <a href="#"><img src="{{ asset('assets/images/megamenu-bg1.jpg') }}" alt="" title="" /></a>
                        </li>
                    </ul>
                  </div>
            </li>
        <li class="lvl1 parent dropdown"><a href="#">Info <i class="anm anm-angle-down-l"></i></a>
              <ul class="dropdown">
                <li><a href="#" class="site-nav">About Us</a></li>
                <li><a href="#" class="site-nav">Contact Us</a></li>
                <li><a href="#" class="site-nav">Terms & condition</a></li>
              </ul>
            </li>
        <li class="lvl1 parent dropdown"><a href="#">Blog</a>
        </li>
        <li class="lvl1"><a href="#"><b>Buy Now!</b></a></li>
      </ul>
    </nav>
    <!--End Desktop Menu-->
</div>