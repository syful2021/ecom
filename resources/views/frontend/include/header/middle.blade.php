<div class="top-nav top-header sticky-header">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="navbar-top">
                    <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <a href="index.html" class="web-logo nav-logo">
                        <img src="{{ asset('frontend/assets/images/logo/1.png ') }}" class="img-fluid blur-up lazyload"
                            alt="">
                    </a>

                    <div class="middle-box">
                        <div class="location-box">
                            <button class="btn location-button" data-bs-toggle="modal" data-bs-target="#locationModal">
                                <span class="location-arrow">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span class="locat-name">Your Location</span>
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="search-box">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="I'm searching for..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn" type="button" id="button-addon2">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="rightside-box">
                        <div class="search-full">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i data-feather="search" class="font-light"></i>
                                </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                                    <i data-feather="x" class="font-light"></i>
                                </span>
                            </div>
                        </div>
                        <ul class="right-side-menu">
                            <li class="right-side">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="right-side">
                                <a href="contact-us.html" class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="delivery-detail">
                                        <h6>24/7 Delivery</h6>
                                        <h5>+91 888 104 2340</h5>
                                    </div>
                                </a>
                            </li>
                            <li class="right-side">
                                <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                    <i data-feather="heart"></i>
                                </a>
                            </li>
                            <li class="right-side">
                                <div class="onhover-dropdown header-badge">
                                    <button type="button" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="shopping-cart"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge">2
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>

                                    <div class="onhover-div">
                                        <ul class="cart-list">
                                            <li class="product-box-contain">
                                                <div class="drop-cart">
                                                    <a href="product-left-thumbnail.html" class="drop-image">
                                                        <img src="{{ asset('frontend/assets/images/vegetable/product/1.png  ') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="drop-contain">
                                                        <a href="product-left-thumbnail.html">
                                                            <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                        </a>
                                                        <h6><span>1 x</span> $80.58</h6>
                                                        <button class="close-button close_button">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="product-box-contain">
                                                <div class="drop-cart">
                                                    <a href="product-left-thumbnail.html" class="drop-image">
                                                        <img src="{{ asset('frontend/assets/images/vegetable/product/2.png  ') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="drop-contain">
                                                        <a href="product-left-thumbnail.html">
                                                            <h5>Peanut Butter Bite Premium Butter Cookies 600 g
                                                            </h5>
                                                        </a>
                                                        <h6><span>1 x</span> $25.68</h6>
                                                        <button class="close-button close_button">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="price-box">
                                            <h5>Total :</h5>
                                            <h4 class="theme-color fw-bold">$106.58</h4>
                                        </div>

                                        <div class="button-group">
                                            <a href="cart.html" class="btn btn-sm cart-button">View Cart</a>
                                            <a href="checkout.html"
                                                class="btn btn-sm cart-button theme-bg-color
                                            text-white">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>



                            @if (Route::has('login'))

                            <li class="right-side onhover-dropdown">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <a href="{{ route('admin.dashboard') }}"> <i data-feather="user"></i></a>
                                    </div>
                                </div>
                                <div class="onhover-div onhover-div-login">
                                    <ul class="user-box-name">
                                        @auth
                                            @if (auth()->user()->role == 'admin')
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="{{ route('admin.dashboard') }} "> Dashboard </a>
                                                </li>
                                            @else
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="{{ route('user.dashboard') }}"> Profile </a>
                                                </li>
                                            @endif

                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                    Logout </a>
                                            </li>
                                        @else
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="{{ route('login') }}"> Log In </a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{ route('login') . '#signup' }}">Register</a>
                                            </li>

                                            {{-- <li class="product-box-contain">
                                                <a href="forgot.html">Forgot Password</a>
                                            </li> --}}

                                        @endauth
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
