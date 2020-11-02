@section('header')
    <header>
        <nav class="navbar navbar-light bg-light  navbar-expand-lg justify-content-between py-2 px-lg-5">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.svg') }}" width="30" height="30" alt="Logo">
                E-Shop
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('products') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Products</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('offers') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Offers</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('information') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Information</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav ml-md-auto">
                        @if ($data['user']['email'] ?? false)
                            <li class="nav-item pt-1">
                                <a href="{{ route('home') }}" class="d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/default_user_icon.svg') }}" width="30" height="30"
                                        alt="User">
                                    <span class="text-small pt-1">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item pt-1">
                                <a href="{{ route('logout') }}" class="d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/logout.svg') }}" width="30" height="30" alt="Logout">
                                    <span class="text-small pt-1">Log out</span>
                                </a>
                            </li>
                            <li class="nav-item pt-1">
                                <a href="{{ route('home') }}" class="cart text-decoration-none">
                                    <img src="{{ asset('assets/shopping_cart.png') }}" width="38" height="38"
                                        alt="Shopping Cart">
                                    <span class="cart__count badge badge-pill badge-danger">
                                        Buy
                                    </span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item pt-1">
                                <a href="{{ route('register') }}" class="d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/sign_up.svg') }}" width="30" height="30" alt="Register">
                                    <span class="text-small pt-1">Register</span>
                                </a>
                            </li>
                            <li class="nav-item pt-1">
                                <a href="{{ route('login') }}" class="d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/log_in.svg') }}" width="30" height="30" alt="Log in">
                                    <span class="text-small pt-1">Log in</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </span>
            </div>

        </nav>
    </header>
