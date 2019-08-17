<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120, 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-top">
            <div class="header-top-container container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <span class="d-none d-sm-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            1234 Street Name, City Name
                        </span>
                        <span class="d-none d-sm-flex align-items-center ml-4">
                            <i class="fas fa-phone mr-1"></i>
                            <a href="tel:+1234567890">123-456-7890</a>
                        </span>
                    </div>
                    <div class="header-column justify-content-end">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact Us</a>
                            </li>
                                {{--TODO: Language for feature 
                                    <li class="nav-item">
                                <a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    English	<i class="fas fa-angle-down fa-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                    <li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a></li>
                                    <li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-es" alt="Español" /> Español</a></li>
                                    <li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-fr" alt="Française" /> Française</a></li>
                                </ul>
                            </li>  --}}
                           
                        </ul>
                        <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-twitter">
                                <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo">
                        <p>
                            <a href="/">
                                <img src="{{ asset('img/icons/cart-bag.svg') }}" class="img-fluid" alt="" />
                                <span class="logo-text"> e-commerce Bucket</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-search-expanded">
                        <form method="GET">
                            <div class="input-group bg-light border">
                                    <input type="text" class="form-control text-4" name="s" placeholder="I'm looking for..." aria-label="I'm looking for...">
                                    <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="lnr lnr-magnifier text-color-dark"></i></button>
                                    </span>
                            </div>
                        </form>
                    </div>
                    <div class="header-nav justify-content-start">
                        <a href="#" class="header-search-button order-1 text-5 d-none d-sm-block mt-1 mr-xl-2">
                            <i class="lnr lnr-magnifier"></i>
                        </a>
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <li class="dropdown dropdown-mega">
                                        <a class="dropdown-item dropdown-toggle" href="index.html">
                                            Grocery & Staples
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 dropdown-mega-sub-content-block overlay overlay-show overlay-color-primary d-none d-lg-block" data-plugin-image-background data-plugin-options="{'imageUrl': '{{ asset('img/menu-bg-1.jpg') }}'}">
                                                            <span class="top-sub-title text-color-light-2 d-block">THE MOST</span>
                                                            <span class="text-color-light font-weight-bold d-block text-4 mb-2">POWERFUL</span>
                                                            <p class="text-color-light-2">A revolutionary theme trusted by tons of customers</p>
                                                            <a class="btn btn-dark btn-rounded btn-v-3 btn-h-2 content-block-button font-weight-semibold" href="#">GET STARTED</a>
                                                        </div>
                                                        <div class="col-lg-3 ml-auto">
                                                            <span class="dropdown-mega-sub-title">Food Grain</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                {{-- <li><a class="dropdown-item" href="{{ action('ShopController@index', ['category' => 'laptops']) }}">Atta</a></li> --}}
                                                                <li><a class="dropdown-item" href="/atta">Sooji</a></li>
                                                                <li><a class="dropdown-item" href="/atta">Flours</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <span class="dropdown-mega-sub-title">Home Care</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Dishwash Gel - Lemon</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <span class="dropdown-mega-sub-title">Beverages, Bakery & Dairy</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Soft Drink</a></li>
                                                            </ul>
                                                            <span class="dropdown-mega-sub-title">Protien</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Protien 1</a></li>
                                                                <li><a class="dropdown-item" href="#">Protien 2</a></li>
                                                                <li><a class="dropdown-item" href="#">Protien 3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-mega dropdown-mega-style-2">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            Babby and Health Care
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content container">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 1</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Accordions &amp; Toggles</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 2</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Buttons</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 3</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">test</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item dropdown-toggle" href="#">Content Effects</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
                                                                        <li><a class="dropdown-item" href="elements-content-rotator.html">Content Rotator</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 dropdown-mega-sub-content-block d-none d-lg-block">
                                                            <img src="{{ asset('img/menu-featured-image-1.png') }}" class="img-responsive content-block-image" alt="" width="110" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-mega dropdown-mega-style-2">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            Vegitable & Fruits
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content container">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 1</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Accordions &amp; Toggles</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 2</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Buttons</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-mega dropdown-mega-style-2">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            Category
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content container">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 1</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Accordions &amp; Toggles</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <span class="dropdown-mega-sub-title">ELEMENTS 2</span>
                                                            <ul class="dropdown-mega-sub-nav">
                                                                <li><a class="dropdown-item" href="#">Buttons</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-mega dropdown-mega-style-2">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Category new
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content container">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <span class="dropdown-mega-sub-title">ELEMENTS 1</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="#">Accordions &amp; Toggles</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <span class="dropdown-mega-sub-title">ELEMENTS 2</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item" href="#">Buttons</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @if(!Auth::check())
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin ml-lg-3" id="headerAccount">
                                            <a class="dropdown-item pl-lg-4" href="/login">Sign In</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="signin-form">
                                                                    <span class="top-sub-title text-color-light-3">MEMBERSHIP</span>
                                                                    <h2 class="font-weight-bold text-4 mb-4">Sign In</h2>
                                                                    <form method="POST" action="{{ route('login') }}" id="frmSignIn" >
                                                                            {{ csrf_field() }}
                                                                        <div class="form-row">
                                                                            <div class="form-group col mb-2">
                                                                                <input type="email" value="" maxlength="100" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="signInEmail" placeholder="Email / Username" required>
                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col">
                                                                                <input type="password" value="" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('password') ? ' is-invalid' : '' }} " name="password" id="signInPassword" placeholder="Password" required>
                                                                                @if ($errors->has('password'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col">
                                                                                <div class="form-check checkbox-custom checkbox-default">
                                                                                    <input class="form-check-input" type="checkbox" id="signInRemember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                                    <label class="form-check-label" for="signInRemember">
                                                                                          Remember me
                                                                                    </label>
                                                                                  </div>
                                                                            </div>
                                                                              <div class="form-group col text-right">
                                                                                  <a href="#" id="headerRecover" class="forgot-pw text-color-dark d-block">Forgot password?</a>
                                                                              </div>
                                                                        </div>
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <a href="#" id="headerSignUp" class="text-color-primary pl-0">Sign Up Now!</a>
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 text-color-light font-weight-bold">SIGN IN</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="signup-form">
                                                                    <span class="top-sub-title text-color-light-3">MEMBERSHIP</span>
                                                                    <h2 class="font-weight-bold text-4 mb-4">Sign Up</h2>

                                                                    <form action="{{ route('register') }}" id="frmSignUp" method="post">
                                                                        {{ csrf_field() }}
                                                                        <div class="form-row">
                                                                            <div class="form-group col mb-2">
                                                                                <input type="text" value="" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="signUpName" placeholder="Full Name" required>
                                                                                @if ($errors->has('name'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col mb-2">
                                                                                <input type="email" value="" maxlength="100" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="signUpEmail" placeholder="E-mail" required>
                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col mb-2">
                                                                                <input type="tel" value="" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="signUpPhone" placeholder="Phone" required>
                                                                                @if ($errors->has('phone'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row mb-3">
                                                                            <div class="form-group col">
                                                                                <input type="password" value="" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="signUpPassword" placeholder="Password" required>
                                                                                @if ($errors->has('password'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <a href="#" id="headerSignIn" class="text-color-primary pl-0">Have an account?</a>
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 text-color-light font-weight-bold">SIGN UP</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="recover-form">
                                                                    <span class="top-sub-title text-color-light-3">MEMBERSHIP</span>
                                                                    <h2 class="font-weight-bold text-4 mb-4">Reset my Password</h2>
                                                                    @if (session('status'))
                                                                        <div class="alert alert-success" role="alert">
                                                                            {{ session('status') }}
                                                                        </div>
                                                                    @endif
                                                                    <form method="POST" action="{{ route('password.email') }}" id="frmResetPassword">
                                                                            @csrf
                                                                        <div class="form-row mb-4">
                                                                            <div class="form-group col mb-2">
                                                                                <input type="email" value="" maxlength="100" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="signUpEmail" placeholder="E-mail" required>
                                                                                @if ($errors->has('email'))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <a href="#" id="headerRecoverCancel" class="text-color-primary pl-0">Have an account?</a>
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 text-color-light font-weight-bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin logged ml-lg-3" id="headerAccount">
                                            <a class="dropdown-item pl-lg-4" href="page-login.html">My Account</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row align-items-center mb-4">
                                                                    <div class="col">
                                                                        <span class="top-sub-title text-color-light-3">SIGNED IN AS</span>
                                                                    <h2 class="font-weight-bold text-4 mb-0">{{auth::user()->name }}</h2>
                                                                    </div>
                                                                    <div class="col text-right">
                                                                        <img src="img/logged-user.jpg" class="img-fluid rounded-circle" alt="" width="48" />	
                                                                    </div>
                                                                </div>
                                                                
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link border border-left-0 border-top-0 border-right-0">Your Profile</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link">Help</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link">Settings</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">Sign Out</a>
                                                                        </a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            @csrf
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div> 
                        <div class="mini-cart order-4">
                            <span class="font-weight-bold font-primary">Cart </span>
                            <div class="mini-cart-icon">
                                <img src="{{ asset('img/icons/cart-bag.svg') }}" class="img-fluid" alt="" />
                                @if (Cart::instance('default')->count() > 0)
                                    <span class="badge badge-primary rounded-circle">{{ Cart::instance('default')->count()}}</span>
                                @endif
                            </div>
                            <div class="mini-cart-content">
                                @if(Cart::count() > 0)
                                    <div class="inner-wrapper bg-light rounded">
                                        <div class="cart-mini">
                                            @foreach (Cart::content() as $item)
                                                <div class="mini-cart-product">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="text-color-default font-secondary text-1 mt-3 mb-0">{{ $item->model->name }}</h2>
                                                            <strong class="text-color-dark">
                                                                <span class="qty">{{ $item->qty }}x</span>
                                                                <span class="product-price">{{ $item->model->presentPrice() }}</span>
                                                            </strong>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="product-image">
                                                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-light btn-rounded justify-content-center align-items-center"><i class="fas fa-times" aria-label="Remove"></i></button>
                                                                </form>
                                                                {{-- <a href="#" class="btn btn-light btn-rounded justify-content-center align-items-center"><i class="fas fa-times"></i></a> --}}
                                                                <img src="{{ asset('img/products/product-2.jpg') }}" class="img-fluid rounded" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="mini-cart-total">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong class="text-color-dark">SUBTOTAL:</strong>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <strong class="total-value text-color-dark">{{ presentPrice(Cart::subtotal()) }}</strong>
                                                    </div>
                                                </div>
                                                {{-- <div class="row">
                                                    @if(session()->has('coupon'))
                                                        <div class="col-6">
                                                            <strong class="text-color-dark">DISCOUNT:</strong>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <strong class="total-value text-color-dark">{{ presentPrice($discount)}}</strong>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong class="text-color-dark">NewSUBTOTAL:</strong>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <strong class="total-value text-color-dark">{{ presentPrice($newSubtotal)}}</strong>
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong class="text-color-dark">TAX:</strong>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <strong class="total-value text-color-dark">{{ presentPrice(Cart::tax()) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong class="text-color-dark">TOTAL:</strong>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <strong class="total-value text-color-dark">{{ presentPrice(Cart::total()) }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-actions">
                                            <div class="row">
                                                <div class="col pr-1">
                                                    <a href="/cart" class="btn btn-dark font-weight-bold rounded text-0">VIEW CART</a>
                                                </div>
                                                <div class="col pl-1">
                                                    <a href="/checkout" class="btn btn-primary font-weight-bold rounded text-0">CHECKOUT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="inner-wrapper bg-light rounded">
                                        <div class="cart-mini text-center">
                                            <h3>No Item In Cart</h3>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button class="header-btn-collapse-nav order-4 ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
                            <span class="hamburguer">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="close">
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>