<div class=" row">
        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img class="hi" src="{{ asset('assets/images/glasses01.jpg') }}" width="1170"
                            height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @foreach ($lproducts as $lproduct)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href=""
                                                title="{{ $lproduct->name }}">
                                                <figure><img
                                                        src="{{ asset('assets/images/products') }}/{{ $lproduct->image }}"
                                                        width="800" height="800" alt="{{ $lproduct->name }}">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href=""
                                                class="product-name"><span>{{ $lproduct->name }}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">{{ $lproduct->regular_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img class="hi" src="{{ asset('assets/images/glasses.jpg') }}" width="1170"
                           alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">

                        @foreach ($categories as $key => $category)
                            <a href="#category_{{ $category->id }}"
                                class="tab-control-item {{ $key == 0 ? 'active' : '' }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">
                        @foreach ($categories as $key => $category)
                            <div class="tab-content-item {{ $key == 0 ? 'active' : '' }}"
                                id="category_{{ $category->id }}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>




                                    @php
                                        $c_products = DB::table('products')
                                            ->where('category_id', $category->id)
                                            ->get()
                                            ->take($no_of_products);
                                        
                                    @endphp
                                    @foreach ($c_products as $c_product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href=""
                                                    title="{{ $c_product->name }}">
                                                    <figure><img
                                                            src="{{ asset('assets/images/products') }}/{{ $c_product->image }}"
                                                            width="800" height="800" alt="{{ $c_product->name }}">
                                                    </figure>
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <a href=""
                                                    class="product-name"><span>{{ $c_product->name }}</span></a>
                                                <div class="wrap-price"><span
                                                        class="product-price">{{ $c_product->regular_price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
</div>
