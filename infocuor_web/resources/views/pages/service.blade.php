@extends('layouts.serviceslayout')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/cover.jpeg') }}'); 
                background-size: cover; 
                background-position: center; 
                height: 400px; 
                color: white; 
                width: 100vw; 
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0; padding: 0; top: 0;">

    <div class="container" style="text-align: center;">
        <h1 style="margin: 0;">Experience Excellence Through</br> Our Tailored Services</h1>
        <p style="margin: 20px 0;">Unlock unparalleled expertise by accessing our tailored services,</br> designed to elevate your experience and</br>meet your unique needs</p>
        <a href="#" class="btn btn-primary" style="padding: 10px 30px; background-color: #007bff;">Hire Us</a>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center"> <!-- First tile in the first row -->
                <a href="/photography" style="text-decoration: none;">
                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                        <img src="{{asset('images/photography.jpeg')}}" alt="Photography" style="width:80%; height: 200px;">
                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Photography Coverage</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-6 text-center"> <!-- Second tile in the first row -->
                <a href="/videography" style="text-decoration: none;">
                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                        <img src="{{asset('images/vediography.jpeg')}}" alt="Videography" style="width:80%; height: 200px;">
                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Videography Coverage</h3>
                    </div>
                </a>
            </div>
        </div> <!-- End of first row -->

        <div class="row">
            <div class="col-md-6 text-center"> <!-- First tile in the second row -->
                <a href="/livestreaming" style="text-decoration: none;">
                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                        <img src="{{asset('images/live streaming.jpeg')}}" alt="Live Streaming" style="width:80%; height: 200px;">
                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Live Streaming</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-6 text-center"> <!-- Second tile in the second row -->
                <a href="/meadiareporting" style="text-decoration: none;">
                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                        <img src="{{asset('images/media.jpeg')}}" alt="Media Reporting" style="width:80%; height: 200px;">
                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Media Reporting</h3>
                    </div>
                </a>
            </div>
        </div> <!-- End of second row -->
    </div>
</section>

@endsection