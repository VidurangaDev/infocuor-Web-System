<style>
    .navbar {
        position: fixed;
        width: 100%;
        top:0;
        /* padding: 15px 20px; */
        /* background-color: #011F3F; */
        z-index: 111;
        background-color: rgba(17, 101, 190, 0.91);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        /* border-radius:0 0 10% 10%; */
    }
    .navbarclr {
        background: linear-gradient(to bottom, rgba(17, 101, 190, 0.91), rgba(0, 0, 0, .6));
    }

    .custom-navbar-text {
        color: #ffffff;
        /* Change this to your desired color */
    }

    .custom-navbar-text:hover {
        color: #69cdff;
        /* Change color on hover */
    }

    .nav-link.active {
        color: #69cdff !important;
        /* Replace with your desired color */
        /* color: #f0f0f0; */
        /* Optional: change background color */
    }

    /* Optionally, change color on hover */
    .nav-link.active:hover {
        color: #ffffff !important;
        /* Replace with a different color if you like */
    }


    .navbar-toggler {
        border: 2px solid rgba(255, 255, 255, 0.655);
        background-color: #0050a574
            /* Normal state border color */
    }

    /* Change the border color to light blue when clicked */
    .navbar-toggler.collapsed {
        border: 2px solid rgb(32, 197, 252);
        background-color: #02469098
            /* Border color when clicked */
    }

    /* Remove outline and shadow on focus */
    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }


</style>




<nav class="navbar navbarclr navbar-expand-md shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/infocuor_logo.png') }}" alt="Logo"
                style="width: 130px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link  custom-navbar-text {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text  {{ Request::is('about') ? 'active' : '' }}"  aria-current="" href="{{ url('/home') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  custom-navbar-text {{ Request::is('history') ? 'active' : '' }} " aria-current="page" href="/history">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text {{ Request::is('membership') ? 'active' : '' }}" href="/membership">Membership</a>
                </li>


                    <li class="nav-item">

                        @auth
                        <a class="nav-link custom-navbar-text {{ Request::is('hire') ? 'active' : '' }}" href="{{ route('hire') }}">Hire</a>
                        @endauth

                        @guest
                        <a class="nav-link custom-navbar-text {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Hire</a>
                        {{-- <a class="nav-link" href="{{ route('login') }}">Hire</a> --}}

                        @endguest

                    </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-navbar-text" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="/photography">Photography</a></li>
                        <li><a class="dropdown-item" href="/videography">Videography</a></li>
                        <li><a class="dropdown-item" href="/meadiareporting">Media Reporting</a></li>
                        <li><a class="dropdown-item" href="/livestreaming">Live Streaming</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-navbar-text " href="#" role="button "
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SIGNUP
                    </a>

                    <ul class="dropdown-menu">
                        @auth
                        <li><a class="dropdown-item"
                            href="{{ url('/userdashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Dashboard
                        </a></li>
                    @else
                        <li><a class="dropdown-item"
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Login
                        </a></li>

                        @if (Route::has('register'))
                            <li><a class="dropdown-item"
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Register
                            </a></li>
                        @endif
                    @endauth
                    </ul>
                </li>











            </ul>
        </div>
    </div>
</nav>
