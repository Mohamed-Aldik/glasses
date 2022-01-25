  @include('layouts.header')
  @include('layouts.nav')

  <main id="main" @if (direction() == 'ltr')  class="main-site left-sidebar" @endif>
      <div class="container">
      @if(isset($title ))
          <div class="wrap-breadcrumb">
              <ul>
                  <li class="item-link"><a href="/" class="link">{{ __('messages.home') }}</a></li>
                  <li class="item-link"><span>@yield('URLL')</span></li>
              </ul>
          </div>
          @endif
          
          @include('layouts.message')
          @yield('content')
      </div>
  </main>

  @include('layouts.footer')
