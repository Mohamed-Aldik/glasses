<x-app-layout>

 <div class="wrap-breadcrumb">
              <ul>
                  <li class="item-link"><a href="/" class="link">{{ __('messages.home') }}</a></li>
                  <li class="item-link"><span>{{ __('messages.login') }}</span></li>
              </ul>
          </div>
    		<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form name="frm-login" method="POST" action="{{ route('login') }}">
								 @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Address:</label>
										<input type="text" id="frm-login-uname" name="email" :value="old('email')" required autofocus placeholder="Type your email address">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" name="password" required autocomplete="current-password" placeholder="************">
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
										</label>
										<a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="Login" name="submit">
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->
</x-app-layout>
