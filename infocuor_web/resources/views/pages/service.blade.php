@extends('layouts.layout01')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background-image: {{asset('images/cover.jpeg')}}; background-size: cover; height: 400px; text-align: center; padding: 100px 0; color: white;">
    <div class="container">
        <h1>Experience Excellence Through</br> Our Tailored Services</h1>
        <p>Unlock unparalleled expertise by accessing our tailored services,</br> designed to elevate your experience and</br>meet your unique needs</p>
        <a href="#" class="btn btn-primary" style="padding: 10px 30px; background-color: #007bff;">Hire Us</a>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px;">
                    <img src="{{asset('images/photography.jpeg')}}" alt="photography" style="width:100%; height: 200px;">
                    <h3>Photography Coverage</h3>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px;">
                    <img src="{{asset('images/vediography.jpeg')}}" alt="videography" style="width:100%; height: 200px;">
                    <h3>Videography Coverage</h3>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px;">
                    <img src="{{asset('images/live streaming.jpeg')}}" alt="live streaming" style="width:100%; height: 200px;">
                    <h3>Live Streaming</h3>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="service-box" style="background-color: #f5f5f5; padding: 20px;">
                    <img src="{{asset('images/media.jpeg')}}" alt="media" style="width:100%; height: 200px;">
                    <h3>Media Reporting</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection