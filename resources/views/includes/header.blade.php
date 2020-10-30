@section('header')
    <header>
        <nav class="navbar navbar-light bg-light  navbar-expand-lg justify-content-between p-3 px-5">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="assets/logo.svg" width="30" height="30" alt="Logo">
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
                        <li class="nav-item">
                            <a href="{{ route('home') }}">
                                <img src="assets/default_user_icon.svg" width="30" height="30" alt="User">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home') }}">
                                <img src="assets/logout.svg" width="30" height="30" alt="Logout">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="cart">
                                <img src="assets/shopping_cart.png" width="30" height="30" alt="Shopping Cart">
                                <span class="cart__count badge badge-pill badge-danger">
                                @show
                            </span>
                        </a>
                    </li>
                </ul>
            </span>
        </div>

    </nav>
</header>
