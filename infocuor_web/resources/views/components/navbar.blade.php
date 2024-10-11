<style>
    .navbar {
        background-color: #011F3F;
        /* Change this to your background color */
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




<nav class="navbar navbar-expand-md shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/infocuor_logo.png') }}" alt="Logo"
                style="width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active custom-navbar-text" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text" href="#">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text" href="#">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-text" href="#">Hire</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-navbar-text" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Photography</a></li>
                        <li><a class="dropdown-item" href="#">Videography</a></li>
                        <li><a class="dropdown-item" href="#">Media Reporting</a></li>
                        <li><a class="dropdown-item" href="#">Live Streaming</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
