 <!-- mobile menu -->
 <div class="mercado-clone-wrap">
     <div class="mercado-panels-actions-wrap">
         <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
     </div>
     <div class="mercado-panels"></div>
 </div>

 <!--header-->
 <header id="header" class="header header-style-1">
     <div class="container-fluid">
         <div class="row">
             <div class="topbar-menu-area">
                 <div class="container">
                     <div class="topbar-menu left-menu">
                         <ul>
                             <li class="menu-item">
                                 <a title="{{ __('messages.hotline') }}: (+966) 000 000" href="#"><span
                                         class="icon label-before fa fa-mobile"></span>{{ __('messages.hotline') }}:
                                     (+966) 000 000</a>
                             </li>
                         </ul>
                     </div>
                     <div class="topbar-menu right-menu">
                         <ul>
                             <li class="menu-item lang-menu menu-item-has-children parent">
                                 @if (direction() == 'ltr')
                                     <a title="{{ __('messages.english') }}" href="#"><span class="img label-before"><img
                                                 src="{{ asset('assets/images/lang-en.png')}} " alt="lang-en"></span>{{ __('messages.english') }}<i
                                             class="fa fa-angle-down" aria-hidden="true"></i></a>
                                 @else
                                     <a title="{{ __('messages.arabic') }}" href="#"><span class="img label-before"><img height="15"
                                                 width="20" src="{{ asset('assets/images/lang-hun.png')}} "
                                                 alt="lang-ar"></span>{{ __('messages.arabic') }}<i class="fa fa-angle-down"
                                             aria-hidden="true"></i></a>
                                 @endif
                                 <ul class="submenu lang">
                                     <li class="menu-item"><a title="{{ __('messages.arabic') }}" href="{{ url('lang/ar') }}"><span
                                                 class="img label-before"><img height="15" width="20"
                                                     src="{{ asset('assets/images/lang-hun.png')}} " alt="lang-ar"></span>{{ __('messages.arabic') }}</a>
                                     </li>
                                     <li class="menu-item"><a title="{{ __('messages.english') }}" href="{{ url('lang/en') }}"><span
                                                 class="img label-before"><img height="15" width="20"
                                                     src="{{ asset('assets/images/lang-en.png')}} " alt="lang-hun"></span>{{ __('messages.english') }}</a>
                                     </li>
                                 </ul>
                             </li>
                             @if (Route::has('login'))
                                 @auth
                                     @if (Auth::user()->utype === 'ADM')
                                         <li class="menu-item menu-item-has-children parent">
                                             <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i
                                                     class="fa fa-angle-down" aria-hidden="true"></i></a>
                                             <ul class="submenu curency">
                                                 <li class="menu-item">
                                                     <a title="Dashboard " href="{{ route('admin.customer') }}">الزبائن</a>
                                                 </li>
                                                 <li class="menu-item">
                                                     <a title="Dashboard " href="{{ route('admin.importer') }}">الموردين</a>
                                                 </li>
                                                 <li class="menu-item">
                                                     <a title="products" href="{{ route('admin.lenses') }}">عدسات النظارات</a>
                                                 </li>
                                                 <li class="menu-item">
                                                     <a title="logout" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل خروج</a>
                                                 </li>
                                                 <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                     @csrf
                                                 </form>
                                             </ul>
                                         </li>
                                     @elseif (Auth::user()->utype === 'USR')
                                         <li class="menu-item menu-item-has-children parent">
                                             <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i
                                                     class="fa fa-angle-down" aria-hidden="true"></i></a>
                                             <ul class="submenu curency">
                                                 <li class="menu-item">
                                                     <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                 </li>

                                                 <li class="menu-item">
                                                     <a title="logout" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                 </li>
                                                 <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                     @csrf
                                                 </form>
                                             </ul>
                                         </li>
                                     @elseif (Auth::user()->utype === 'IMP')
                                         <li class="menu-item menu-item-has-children parent">
                                             <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i
                                                     class="fa fa-angle-down" aria-hidden="true"></i></a>
                                             <ul class="submenu curency">
                                                 <li class="menu-item">
                                                     <a title="Dashboard" href="{{ route('importer.dashboard') }}">Dashboard</a>
                                                 </li>

                                                 <li class="menu-item">
                                                     <a title="logout" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                 </li>
                                                 <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                     @csrf
                                                 </form>
                                             </ul>
                                         </li>
                                     @endif
                                 @else
                                     <li class="menu-item"><a title="{{ __('messages.login') }}"
                                             href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                                     <li class="menu-item"><a title="{{ __('messages.register') }}"
                                             href="{{ route('register') }}">{{ __('messages.register') }}</a></li>
                                 @endauth
                             @endif
                         </ul>
                     </div>
                 </div>
             </div>

             <div class="container">
                 <div class="mid-section main-info-area">

                     <div class="wrap-logo-top left-section">
                         <a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.jpg') }}"
                                 alt="mercado"></a>
                     </div>

                     <div class="wrap-search center-section">
                         <div class="wrap-search-form">
                             <form action="#" id="form-search-top" name="form-search-top">
                                 <input type="text" name="search" value="" placeholder="{{ __('messages.search') }}">
                                 <button form="form-search-top" type="button"><i class="fa fa-search"
                                         aria-hidden="true"></i></button>
                                 <div class="wrap-list-cate">
                                     <input type="hidden" name="product-cate" value="0" id="product-cate">
                                     <a href="#" class="link-control">{{ __('messages.categories') }}</a>
                                     <ul class="list-cate">
                                         <li class="level-0">{{ __('messages.categories') }}</li>
                                         <li class="level-1">-medical glasses</li>
                                         <li class="level-2">Batteries & medical glasses</li>
                                         <li class="level-2">medical glasses & Headsets</li>
                                         <li class="level-1">-medical glasses</li>
                                         <li class="level-2">medical glasses & Chargens</li>
                                         <li class="level-2">Table & medical glasses</li>

                                     </ul>
                                 </div>
                             </form>
                         </div>
                     </div>

                     <div class="wrap-icon right-section">
                         <div class="wrap-icon-section wishlist">
                             <a href="#" class="link-direction">
                                 <i class="fa fa-heart" aria-hidden="true"></i>
                                 <div class="left-info">
                                     <span class="index">0 {{ __('messages.items') }}</span>
                                     <span class="title">{{ __('messages.wishlist') }}</span>
                                 </div>
                             </a>
                         </div>
                         <div class="wrap-icon-section minicart">
                             <a href="#" class="link-direction">
                                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                 <div class="left-info">
                                     <span class="index">0 {{ __('messages.items') }}</span>
                                     <span class="title">{{ __('messages.cart') }}</span>
                                 </div>
                             </a>
                         </div>
                         <div class="wrap-icon-section show-up-after-1024">
                             <a href="#" class="mobile-navigation">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </a>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="nav-section header-sticky">


                 <div class="primary-nav-section">
                     <div class="container">
                         <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                             <li class="menu-item home-icon">
                                 <a href="{{ route('home') }}" class="link-term mercado-item-title"><i
                                         class="fa fa-home" aria-hidden="true"></i></a>
                             </li>
                             
                             <li class="menu-item">
                                 <a href="{{ route('lenses') }}"
                                     class="link-term mercado-item-title">{{ __('messages.glasses_lenses') }}</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
