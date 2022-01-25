<x-app-layout>

 <div class="wrap-breadcrumb">
              <ul>
                  <li class="item-link"><a href="/" class="link">{{ __('messages.home') }}</a></li>
                  <li class="item-link"><span>{{ __('messages.register') }}</span></li>
              </ul>
          </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <form class="form-stl" name="frm-login" method="POST" action="{{ route('register') }}">
                                                @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">{{ __('messages.name') }}*</label>
                                        <input type="text" id="frm-reg-lname" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('messages.name') }}*">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-email">{{ __('messages.email') }}*</label>
                                        <input type="email" id="frm-reg-email" name="email" :value="old('email')" required  placeholder="{{ __('messages.email') }}">
                                    </fieldset>
                                     <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-email">{{ __('messages.phone') }}*</label>
                                        <input type="text" id="frm-reg-email" name="phone" :value="old('phone')" required  placeholder="{{ __('messages.phone') }}">
                                    </fieldset>
                                    

                                    <fieldset class="wrap-title">
                                        <h3 class="form-title"> {{ __('messages.information') }} </h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">{{ __('messages.password') }} *</label>
                                        <input type="password" id="frm-reg-pass" name="password" required autocomplete="new-password" placeholder="{{ __('messages.password') }}">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">{{ __('messages.password_confirmation') }}  *</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('messages.password_confirmation') }}">
                                    </fieldset>
                                    <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="utype" id="exampleRadios1"
                                            value="USR" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            {{ __('messages.customer') }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="utype" id="exampleRadios2"
                                            value="IMP">
                                        <label class="form-check-label" for="exampleRadios2">
                                            {{ __('messages.importer') }}
                                        </label>
                                    </div>
                                </div>
                                    <input type="submit" class="btn btn-sign" value="{{ __('messages.register') }}" name="register">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>


</x-app-layout>
