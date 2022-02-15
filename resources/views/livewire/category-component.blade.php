<div class="row">

    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">


        <!--end wrap shop control-->

        <div class="row">

            <ul class="product-list grid-products equal-container">
                @foreach ($products as $product)


                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img class="size-img" src="{{asset('assets/images/products')}}/{{$product->image}}" alt="Product"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{ $product->company}} : اسم الشركة  , {{ $product->name}} : اسم المنتج  </span></a>
                                <a href="#" class="product-name"><span>{{ $product->description }} :  وصف المنتج</span></a>
                                <div class="wrap-price"><span class="product-price">@if (isset(auth()->user()->approved))
                                سعر البيع  :
                                 {{ auth()->user()->approved == 1 ? $product->regular_price : '' }} <br>
                                 سعر الجملة: 
                                 {{ auth()->user()->approved == 1 ? $product->wholesale_price : '' }}
                                 @endif</span>
                                </div>
                                <a href="#" class="btn add-to-cart">إضافة الى السلة</a>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>

        </div>

        <div class="wrap-pagination-info">
            {{-- {{ $products->links() }} --}}
            {{-- <ul class="page-numbers">
                <li><span class="page-number-item current">1</span></li>
                <li><a class="page-number-item" href="#">2</a></li>
                <li><a class="page-number-item" href="#">3</a></li>
                <li><a class="page-number-item next-link" href="#">Next</a></li>
            </ul>
            <p class="result-count">Showing 1-8 of 12 result</p> --}}
        </div>
    </div>
    <!--end main products area-->

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 ">

                <div>

                    <div >
                        <label for="exampleFormControlSelect1">Company Name</label>
                        <select wire:model="company" class="form-control" id="exampleFormControlSelect1">
                                @foreach ($products as $product)
                                <option value="{{ $product->company }}">{{ $product->company }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('company')<p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div >
                        <label for="exampleFormControlSelect1">اسم العدسة</label>
                        <select wire:model="lense_name" class="form-control" id="exampleFormControlSelect1">
                            <option value="singlevision">single vision</option>
                            <option value="progressive">progressive</option>
                            <option value="bifocal">Bi-focal</option>
                        </select>
                        @error('lense_name')<p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <div >
                        <label for="exampleFormControlSelect1">Index</label>
                        <select wire:model="index" class="form-control" id="exampleFormControlSelect1">
                            <option value="1.56">1.56</option>
                            <option value="1.61">1.61</option>
                            <option value="1.67">1.67</option>
                            <option value="1.74">1.74</option>
                            <option value="55 MM">55 MM</option>
                        </select>
                        @error('index')<p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div >
                        <label for="exampleFormControlSele">خيارات العدسة</label>
                        <select wire:model="lens_options" class="form-control" id="exampleFormControlSele">
                            <option value="plmc">PLMC</option>
                            <option value="uncoat">UNCOAT</option>
                            <option value="pgxmc">PGXMC</option>
                            <option value="poly">POLY</option>
                            <option value="blue_cut_green">BLUE CUT GREEN</option>
                            <option value="blue_cut_blue">BLUE CUT BLUE</option>
                            <option value="polorised">POLORISED</option>
                        </select>
                        @error('lens_options')<p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}
                </div>
       
    </div>
    <!--end sitebar-->

</div>
<!--end row-->
