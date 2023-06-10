<main>
    @include('app.includes.slider')
    <div class="shop-content_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-product-wrap grid gridview-3 listfullwidth img-hover-effect_area row">
                        @foreach ($products as $product)
                            <div class="col-lg-4">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{ route('product.more', $product->slug) }}">
                                                    <img class="primary-img"
                                                        src="{{ $product->img ?? asset('img/no-image.jpg') }}"
                                                        alt="{{ $product->title }}">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <h5>Added: {{ $product->createdAtForHumans() }}</h5>
                                                            </li>
                                                            <li>
                                                                <p class="card-text">{!! $product->getContentPreview() !!}</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class="product-name"
                                                            href="{{ route('product.more', $product->slug) }}">{{ $product->title }}</a>
                                                    </h4>
                                                    <div class="price-box">
                                                        <h4 class="text-success">Price: $ {{ $product->price }}</h4>
                                                    </div>
                                                    <div class="row text-center">
                                                        <div class="col-lg-6">
                                                    <a class="btn btn-warning btn-block" target="_blanck" href="{{ $product->buynow ?? 'no' }}">Buy It Now</a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="btn btn-outline-success btn-block" href="{{ route('product.more', $product->slug) }}">More</a>
                                                </div>
                                                </div>
                                                    <div class="my-4">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="uren-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="uren-pagination-box primary-color pagination-lg" data-pagination-next="false">
                                        <li>{{ $products->links() }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
