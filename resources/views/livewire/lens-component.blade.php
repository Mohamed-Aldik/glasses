<div class="row">

    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">


        <!--end wrap shop control-->
        <style>
            .product-wish {
                position: absolute;
                top: 10%;
                left: 0;
                z-index: 99;
                right: 30px;
                text-align: right;
                padding-top: 0;
            }

            .product-wish .fa {
                color: #cbcbcb;
                font-size: 32px;

            }

            .product-wish .fa:hover {
                color: #ff7007;

            }

            .fill-heart {
                color: #ff7007 !important;
            }

        </style>
        <div class="row">

            <ul class="product-list grid-products equal-container">
                @php
                    $witems = Cart::instance('wishlist')
                        ->content()
                        ->pluck('id');
                    
                @endphp
                @foreach ($lenses as $lens)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img class="size-img" src="assets/images/products/glasses.jpg"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span> {{ $lens->company }} : اسم الشركة ,
                                        {{ $lens->lens_name }} : اسم العدسة </span></a>
                                <a href="#" class="product-name"><span>CYL: {{ $lens->cyl }} , SPH:
                                        {{ $lens->sph }}</span></a>
                                <a href="#" class="product-name"><span>Index: {{ $lens->index }} ,
                                        {{ $lens->lens_option }} : خيار العدسة </span></a>
                                <div class="wrap-price"><span class="product-price">
                                        @if (isset(auth()->user()->approved))
                                            سعر البيع :
                                            {{ auth()->user()->approved == 1 ? $lens->regular_price : '' }} ,
                                            سعر الجملة:
                                            {{ auth()->user()->approved == 1 ? $lens->wholesale_price : '' }}
                                    </span>
                                </div>
                                <a href="#"
                                    wire:click.prevent="store({{ $lens->id }},'{{ $lens->lens_name }}',{{ $lens->regular_price }})"
                                    class="btn add-to-cart">Add To Cart</a>
                                <div class="product-wish">
                                    @if ($witems->contains($lens->id))
                                        <a href="#" wire:click.prevent="removeFromWishlist({{ $lens->id }})">
                                            <i class="fa fa-heart fill-heart"></i>
                                        </a>
                                    @else
                                        <a href="#"
                                            wire:click.prevent="addWishlist({{ $lens->id }},'{{ $lens->lens_name }}',{{ $lens->regular_price }})">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    @endif
                                </div>
                @endif

        </div>
    </div>
    </li>
    @endforeach
    </ul>

</div>

<div class="wrap-pagination-info">
    {{ $lenses->links() }}
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

        <div>
            <label for="exampleFormControlSelect1">اسم الشركة {{ $company }} </label> 
            <select wire:model="company" class="form-control" id="exampleFormControlSelect1">
                    <option value="">الكل</option>

                @foreach ($companies as $company)
                    <option value="{{ $company->company }}">{{ $company->company }}</option>
                @endforeach
            </select>
        </div>
        @error('company')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div>
            <label for="exampleFormControlSelect1">اسم العدسة {{ $lense_name }}</label>
            <select wire:model="lense_name" class="form-control" id="exampleFormControlSelect1">
                    <option value="">الكل</option>

                 <option value="SINGLE VISION">SINGLE VISION</option>
                <option value="PROGRESSIVE">PROGRESSIVE</option>
                <option value="BIFOCAL">BIFOCAL</option>
            </select>
            @error('lense_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlSele">SPH {{ $sph }}</label>
            <select wire:model="sph" class="form-control" id="exampleFormControlSele">
                    <option value="">الكل</option>
                <option value="20.00">+20.00</option>
                <option value="19.75">+19.75</option>
                <option value="19.50">+19.50</option>
                <option value="19.25">+19.25</option>
                <option value="19.00">+19.00</option>
                <option value="18.75">+18.75</option>
                <option value="18.50">+18.50</option>
                <option value="18.25">+18.25</option>
                <option value="18.00">+18.00</option>
                <option value="17.75">+17.75</option>
                <option value="17.50">+17.50</option>
                <option value="17.25">+17.25</option>
                <option value="17.00">+17.00</option>
                <option value="16.75">+16.75</option>
                <option value="16.50">+16.50</option>
                <option value="16.25">+16.25</option>
                <option value="16.00">+16.00</option>
                <option value="15.75">+15.75</option>
                <option value="15.50">+15.50</option>
                <option value="15.25">+15.25</option>
                <option value="15.00">+15.00</option>
                <option value="14.75">+14.75</option>
                <option value="14.50">+14.50</option>
                <option value="14.25">+14.25</option>
                <option value="14.00">+14.00</option>
                <option value="13.75">+13.75</option>
                <option value="13.50">+13.50</option>
                <option value="13.25">+13.25</option>
                <option value="13.00">+13.00</option>
                <option value="12.75">+12.75</option>
                <option value="12.50">+12.50</option>
                <option value="12.25">+12.25</option>
                <option value="12.00">+12.00</option>
                <option value="11.75">+11.75</option>
                <option value="11.50">+11.50</option>
                <option value="11.25">+11.25</option>
                <option value="11.00">+11.00</option>
                <option value="10.75">+10.75</option>
                <option value="10.50">+10.50</option>
                <option value="10.25">+10.25</option>
                <option value="10.00">+10.00</option>
                <option value="9.75">+9.75</option>
                <option value="9.50">+9.50</option>
                <option value="9.25">+9.25</option>
                <option value="9.00">+9.00</option>
                <option value="8.75">+8.75</option>
                <option value="8.50">+8.50</option>
                <option value="8.25">+8.25</option>
                <option value="8.00">+8.00</option>
                <option value="7.75">+7.75</option>
                <option value="7.50">+7.50</option>
                <option value="7.25">+7.25</option>
                <option value="7.00">+7.00</option>
                <option value="6.75">+6.75</option>
                <option value="6.50">+6.50</option>
                <option value="6.25">+6.25</option>
                <option value="6.00">+6.00</option>
                <option value="5.75">+5.75</option>
                <option value="5.50">+5.50</option>
                <option value="5.25">+5.25</option>
                <option value="5.00">+5.00</option>
                <option value="4.75">+4.75</option>
                <option value="4.50">+4.50</option>
                <option value="4.25">+4.25</option>
                <option value="4.00">+4.00</option>
                <option value="3.75">+3.75</option>
                <option value="3.50">+3.50</option>
                <option value="3.25">+3.25</option>
                <option value="3.00">+3.00</option>
                <option value="2.75">+2.75</option>
                <option value="2.50">+2.50</option>
                <option value="2.25">+2.25</option>
                <option value="2.00">+2.00</option>
                <option value="1.75">+1.75</option>
                <option value="1.50">+1.50</option>
                <option value="1.25">+1.25</option>
                <option value="1.00">+1.00</option>
                <option value="0.75">+0.75</option>
                <option value=">0.50">+0.50</option>
                <option value="0.25">+0.25</option>
                <option value="0.00" selected="true"  >0.00</option>
                <option value="-0.25">-0.25</option>
                <option value="-0.50">-0.50</option>
                <option value="-0.75">-0.75</option>
                <option value="1.00">-1.00</option>
                <option value="-1.25">-1.25</option>
                <option value="-1.50">-1.50</option>
                <option value="-1.75">-1.75</option>
                <option value="-2.00">-2.00</option>
                <option value="-2.25">-2.25</option>
                <option value="-2.50">-2.50</option>
                <option value="-2.75">-2.75</option>
                <option value="-3.00">-3.00</option>
                <option value="-3.25">-3.25</option>
                <option value="-3.50">-3.50</option>
                <option value="-3.75">-3.75</option>
                <option value="-4.00">-4.00</option>
                <option value="-4.25">-4.25</option>
                <option value="-4.50">-4.50</option>
                <option value="-4.75">-4.75</option>
                <option value="-5.00">-5.00</option>
                <option value="-5.25">-5.25</option>
                <option value="-5.50">-5.50</option>
                <option value="-5.75">-5.75</option>
                <option value="-6.00">-6.00</option>
                <option value="-5.25">-6.25</option>
                <option value="-5.50">-6.50</option>
                <option value="-5.75">-6.75</option>
                <option value="-7.00">-7.00</option>
                <option value="-7.25">-7.25</option>
                <option value="-7.50">-7.50</option>
                <option value="-7.75">-7.75</option>
                <option value="-8.00">-8.00</option>
                <option value="-8.25">-8.25</option>
                <option value="-8.50">-8.50</option>
                <option value="-8.75">-8.75</option>
                <option value="-9.00">-9.00</option>
                <option value="-9.25">-9.25</option>
                <option value="-9.50">-9.50</option>
                <option value="-9.75">-9.75</option>
                <option value="-10.00">-10.00</option>
                <option value="-10.25">-10.25</option>
                <option value="-10.50">-10.50</option>
                <option value="-10.75">-10.75</option>
                <option value="-11.00">-11.00</option>
                <option value="-11.25">-11.25</option>
                <option value="-11.50">-11.50</option>
                <option value="-11.75">-11.75</option>
                <option value="-12.00">-12.00</option>
                <option value="-12.25">-12.25</option>
                <option value="-12.50">-12.50</option>
                <option value="-12.75">-12.75</option>
                <option value="-13.00">-13.00</option>
                <option value="-13.25">-13.25</option>
                <option value="-13.50">-13.50</option>
                <option value="-13.75">-13.75</option>
                <option value="-14.00">-14.00</option>
                <option value="-14.25">-14.25</option>
                <option value="-14.50">-14.50</option>
                <option value="-14.75">-14.75</option>
                <option value="-15.00">-15.00</option>
                <option value="-15.25">-15.25</option>
                <option value="-15.50">-15.50</option>
                <option value="-15.75">-15.75</option>
                <option value="-16.00">-16.00</option>
                <option value="-16.25">-16.25</option>
                <option value="-16.50">-16.50</option>
                <option value="-16.75">-16.75</option>
                <option value="-17.00">-17.00</option>
                <option value="-17.25">-17.25</option>
                <option value="-17.50">-17.50</option>
                <option value="-17.75">-17.75</option>
                <option value="-18.00">-18.00</option>
                <option value="-18.25">-18.25</option>
                <option value="-18.50">-18.50</option>
                <option value="-18.75">-18.75</option>
                <option value="-19.00">-19.00</option>
                <option value="-19.25">-19.25</option>
                <option value="-19.50">-19.50</option>
                <option value="-19.75">-19.75</option>
                <option value="-20.00">-20.00</option>

            </select>
            @error('sph')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlSelect">CYL {{ $cyl }}</label>
            <select wire:model="cyl" class="form-control" id="exampleFormControlSelect">
                    <option value="">الكل</option>

                <option value="0.00">0.00</option>
                <option value="-0.25">-0.25</option>
                <option value="-0.50">-0.50</option>
                <option value="-0.75">-0.75</option>
                <option value="1.00">-1.00</option>
                <option value="-1.25">-1.25</option>
                <option value="-1.50">-1.50</option>
                <option value="-1.75">-1.75</option>
                <option value="-2.00">-2.00</option>
                <option value="-2.25">-2.25</option>
                <option value="-2.50">-2.50</option>
                <option value="-2.75">-2.75</option>
                <option value="-3.00">-3.00</option>
                <option value="-3.25">-3.25</option>
                <option value="-3.50">-3.50</option>
                <option value="-3.75">-3.75</option>
                <option value="-4.00">-4.00</option>
                <option value="-4.25">-4.25</option>
                <option value="-4.50">-4.50</option>
                <option value="-4.75">-4.75</option>
                <option value="-5.00">-5.00</option>
                <option value="-5.25">-5.25</option>
                <option value="-5.50">-5.50</option>
                <option value="-5.75">-5.75</option>
                <option value="-6.00">-6.00</option>
                <option value="-5.25">-6.25</option>
                <option value="-5.50">-6.50</option>
                <option value="-5.75">-6.75</option>
                <option value="-7.00">-7.00</option>
                <option value="-7.25">-7.25</option>
                <option value="-7.50">-7.50</option>
                <option value="-7.75">-7.75</option>
                <option value="-8.00">-8.00</option>
            </select>
            @error('cyl')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="exampleFormControlSelect1">Index {{ $index }}</label>
            <select wire:model="index" class="form-control" id="exampleFormControlSelect1">
                    <option value="">الكل</option>

                <option value="1.56">1.56</option>
                <option value="1.61">1.61</option>
                <option value="1.67">1.67</option>
                <option value="1.74">1.74</option>
                <option value="55 MM">55 MM</option>
            </select>
            @error('index')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="exampleFormControlSele">خيارات العدسة {{ $lens_options }}</label>
            <select wire:model="lens_options" class="form-control" id="exampleFormControlSele">
                    <option value="">الكل</option>

                <option value="PLMC">PLMC</option>
                <option value="UNCOAT">UNCOAT</option>
                <option value="PGXMC">PGXMC</option>
                <option value="POLY">POLY</option>
                <option value="BLUECUT GREEN">BLUECUT GREEN</option>
                <option value="BLUECUT BLUE">BLUECUT BLUE</option>
                <option value="POLORISED">POLORISED</option>
            </select>
            @error('lens_options')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <div>
            <a href="#" wire:click.prevent="search" class="btn btn-success "> بحث </a>
        </div>
    </div>

</div>
<!--end sitebar-->

</div>
<!--end row-->
