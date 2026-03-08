<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
    <div class="container p-2">
        <div>
            <a class="navbar-brand text-black" href="/">
                <img src="img/logo.png" alt="#" width="40"> LifeBlood
            </a>    
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active text-danger fw-bold' : '' }}" 
                    href="{{ route('home') }}">
                    Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active text-danger fw-bold' : '' }}" 
                    href="{{ route('about') }}">
                    About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('donor') ? 'active text-danger fw-bold' : '' }}" 
                    href="{{ route('donor') }}">
                    Become a Donor
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('request') ? 'active text-danger fw-bold' : '' }}" 
                    href="{{ route('request') }}">
                    Request Blood
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <a href="#" class="btn btn-danger">Login / Register</a>
        </div>
    </div>
</nav>