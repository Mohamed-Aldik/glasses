<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">

        <a href="{{ route('admin.lenses') }}" class="btn btn-success pull-right">كل العدسات</a>

    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>

    @endif
    <form wire:submit.prevent="storeLense">
        <label for="formGroupExampleInput" class="form-label">اسم الشركة</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم الشركة "
            wire:model="company">
        @error('company')<p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlSelec">اسم العدسة</label>
            <select wire:model="lense_name" class="form-control" id="exampleFormControlSelec">
                <option value="singlevision">SINGLE VISION</option>
                <option value="progressive">progressive</option>
                <option value="bifocal">Bi-focal</option>
            </select>
            @error('lense_name')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">SPH</label>
            <select wire:model="sph" class="form-control" id="exampleFormControlSelect1">
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
            @error('sph')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect">CYL</label>
            <select wire:model="cyl" class="form-control" id="exampleFormControlSelect">
             
									<option value="0.00" >0.00</option>
									<option value="-0.25" >-0.25</option>
									<option value="-0.50" >-0.50</option>
									<option value="-0.75" >-0.75</option>
									<option value="1.00" >-1.00</option>
									<option value="-1.25" >-1.25</option>
									<option value="-1.50" >-1.50</option>
									<option value="-1.75" >-1.75</option>
									<option value="-2.00" >-2.00</option>
									<option value="-2.25" >-2.25</option>
									<option value="-2.50" >-2.50</option>
									<option value="-2.75" >-2.75</option>
									<option value="-3.00" >-3.00</option>
									<option value="-3.25" >-3.25</option>
									<option value="-3.50" >-3.50</option>
									<option value="-3.75" >-3.75</option>
									<option value="-4.00" >-4.00</option>
									<option value="-4.25" >-4.25</option>
									<option value="-4.50" >-4.50</option>
									<option value="-4.75" >-4.75</option>
									<option value="-5.00" >-5.00</option>
									<option value="-5.25" >-5.25</option>
									<option value="-5.50" >-5.50</option>
									<option value="-5.75" >-5.75</option>
									<option value="-6.00" >-6.00</option>
									<option value="-5.25" >-6.25</option>
									<option value="-5.50" >-6.50</option>
									<option value="-5.75" >-6.75</option>
									<option value="-7.00" >-7.00</option>
									<option value="-7.25" >-7.25</option>
									<option value="-7.50" >-7.50</option>
									<option value="-7.75" >-7.75</option>
									<option value="-8.00" >-8.00</option>
									<option value="-8.25" >-8.25</option>
									<option value="-8.50" >-8.50</option>
									<option value="-8.75" >-8.75</option>
									<option value="-9.00" >-9.00</option>
									<option value="-9.25" >-9.25</option>
									<option value="-9.50" >-9.50</option>
									<option value="-9.75" >-9.75</option>
									<option value="-10.00" >-10.00</option>
									<option value="-10.25" >-10.25</option>
									<option value="-10.50" >-10.50</option>
									<option value="-10.75" >-10.75</option>
									<option value="-11.00" >-11.00</option>
									<option value="-11.25" >-11.25</option>
									<option value="-11.50" >-11.50</option>
									<option value="-11.75" >-11.75</option>
									<option value="-12.00" >-12.00</option>
									<option value="-12.25" >-12.25</option>
									<option value="-12.50" >-12.50</option>
									<option value="-12.75" >-12.75</option>
									<option value="-13.00" >-13.00</option>
									<option value="-13.25" >-13.25</option>
									<option value="-13.50" >-13.50</option>
									<option value="-13.75" >-13.75</option>
									<option value="-14.00" >-14.00</option>
									<option value="-14.25" >-14.25</option>
									<option value="-14.50" >-14.50</option>
									<option value="-14.75" >-14.75</option>
									<option value="-15.00" >-15.00</option>
									<option value="-15.25" >-15.25</option>
									<option value="-15.50" >-15.50</option>
									<option value="-15.75" >-15.75</option>
									<option value="-16.00" >-16.00</option>
									<option value="-16.25" >-16.25</option>
									<option value="-16.50" >-16.50</option>
									<option value="-16.75" >-16.75</option>
									<option value="-17.00" >-17.00</option>
									<option value="-17.25" >-17.25</option>
									<option value="-17.50" >-17.50</option>
									<option value="-17.75" >-17.75</option>
									<option value="-18.00" >-18.00</option>
									<option value="-18.25" >-18.25</option>
									<option value="-18.50" >-18.50</option>
									<option value="-18.75" >-18.75</option>
									<option value="-19.00" >-19.00</option>
									<option value="-19.25" >-19.25</option>
									<option value="-19.50" >-19.50</option>
									<option value="-19.75" >-19.75</option>
									<option value="-20.00" >-20.00</option>
            </select>
            @error('cyl')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="example">Index</label>
            <select wire:model="index" class="form-control" id="example">
               									<option value="1.56" >1.56</option>
									<option value="1.61" >1.61</option>
									<option value="1.67" >1.67</option>
									<option value="1.74" >1.74</option>
									<option value="55 MM" >55 MM</option>
            </select>
            @error('index')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControl">خيارات العدسة</label>
            <select wire:model="lens_options" class="form-control" id="exampleFormControl">
                <option value="PLMC">PLMC</option>
                <option value="UNCOAT">UNCOAT</option>
                <option value="PGXMC">PGXMC</option>
                <option value="POLY">POLY</option>
                <option value="BLUECUT GREEN">BLUECUT GREEN</option>
                <option value="BLUECUT BLUE">BLUECUT BLUE</option>
                <option value="POLORISED">POLORISED</option>
            </select>
            @error('lens_options')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <label for="formGroupExampleInput22" class="form-label">السعر</label>
        <input type="text" class="form-control" id="formGroupExampleInput22" placeholder="السعر"
            wire:model="regular_price">
        @error('regular_price')<p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="formGroupExampleInput222" class="form-label">سعر الجملة</label>
        <input type="text" class="form-control" id="formGroupExampleInput222" placeholder="سعر الجملة"
            wire:model="wholesale_price">
        @error('wholesale_price')<p class="text-danger">{{ $message }}</p>
        @enderror
        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> تحديث عدسة </button>
    </form>
</div>
