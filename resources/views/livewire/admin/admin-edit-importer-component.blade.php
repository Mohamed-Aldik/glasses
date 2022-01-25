<div class="container" style="padding: 30px 0">

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>

    @endif
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="register-form form-item ">
                        <form class="form-stl" name="frm-login" wire:submit.prevent="updateCustomer">
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Update</h3>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">{{ __('messages.name') }}*</label>
                                <input type="text" id="frm-reg-lname" wire:model="name" :value="old('name')" required
                                    autofocus autocomplete="name" placeholder="{{ __('messages.name') }}*">
                                @error('name')<p class="text-danger">{{ $message }}</p>
                                @enderror
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-email">{{ __('messages.email') }}*</label>
                                <input type="email" id="frm-reg-email" wire:model="email" :value="old('email')" required
                                    placeholder="{{ __('messages.email') }}">
                                @error('email')<p class="text-danger">{{ $message }}</p>
                                @enderror
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-email">{{ __('messages.phone') }}*</label>
                                <input type="text" id="frm-reg-email" wire:model="phone" :value="old('phone')" required
                                    placeholder="{{ __('messages.phone') }}">
                                @error('phone')<p class="text-danger">{{ $message }}</p>
                                @enderror
                            </fieldset>

                            {{-- <fieldset class="wrap-title">
                                        <h3 class="form-title"> {{ __('messages.information') }} </h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">{{ __('messages.password') }} *</label>
                                        <input type="text" id="frm-reg-pass" name="password" required autocomplete="new-password" placeholder="{{ __('messages.password') }}">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">{{ __('messages.password_confirmation') }}  *</label>
                                        <input type="text" id="frm-reg-cfpass" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('messages.password_confirmation') }}">
                                    </fieldset> --}}
                            <div class="form-group">
                                @error('utype')<p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="approved" wire:model="approved"
                                        id="exampleRadios1" value="1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        {{ __('messages.approved') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="approved" wire:model="approved"
                                        id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        {{ __('messages.not_approved') }}
                                    </label>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-sign" value="{{ __('messages.register') }}"
                                name="register">
                        </form>
                    </div>
                </div>
            </div>
            <!--end main products area-->
        </div>
    </div>






</div>
