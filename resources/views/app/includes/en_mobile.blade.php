            <!--Mobile Menu-->
            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 parent megamenu"><a href="{{ route('main') }}">Home</a>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="#">Product <i class="anm anm-plus-l"></i></a>
                        <ul>
                            <li><a href="{{ url('/en/category/womens-wear.html') }}" class="site-nav">Women's wear<i class="anm anm-plus-l"></i></a>
                                <ul>
                                  @if ($subcategories1->count() > 0)
                                  @foreach ($subcategories1 as $subcategory)
                                    <li><a href="{{ route('encategory.more', $subcategory->slug) }}" class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li><a href="{{ url('/en/category/mens-wear.html') }}" class="site-nav">Men's wear<i class="anm anm-plus-l"></i></a>
                                <ul>
                                  @if ($subcategories2->count() > 0)
                                  @foreach ($subcategories2 as $subcategory)
                                    <li><a href="{{ route('encategory.more', $subcategory->slug) }}" class="site-nav lvl-2">{{ $subcategory->title }}</a></li>
                                    @endforeach
                                    @endif
                                </ul>
                              </li>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="about-us.html">Info <i class="anm anm-plus-l"></i></a>
                        <ul>
                            <li><a href="#" class="site-nav">About Us</a></li>
                            <li><a href="#" class="site-nav">Contact Us</a></li>
                            <li><a href="#" class="site-nav">Terms & condition</a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i
                                class="anm anm-plus-l"></i></a>
                    </li>
                    <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
                    </li>
                </ul>
            </div>
            <!--End Mobile Menu-->
