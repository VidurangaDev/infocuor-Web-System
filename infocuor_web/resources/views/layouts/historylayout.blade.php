<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    @include('libraries.boostrapstyle')

    <style>
        /* Full height for the body and html */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        /* Flexbox layout: full-page wrapper */
        .content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Full viewport height */
        }

        /* Main content that will take up remaining space */
        .main-content {
            padding-top: 25px;
            flex: 1;
            /* This makes sure the content expands to take up the space */
        }

    </style>
</head>

<body>

    <!-- Main content wrapper -->
    <div class="content-wrapper">
        <!-- Navbar -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

        @include('components.navbar')

        
        <!-- Main content -->
        <div class="container-flood  main-content  mt-5">
            @yield('content')
        </div>
        <!-- Footer fixed at the bottom -->
        @include('components.footer')
    </div>
    
    @include('libraries.boostrapscript')
</body>

</html>
