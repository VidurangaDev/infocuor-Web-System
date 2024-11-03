@extends('layouts.serviceslayout')

@section('content')
<!-- Hero Section with Background Image -->
<section class="hero-section"
    style="background-image: url('{{asset('images/live streaming.jpeg')}}'); 
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

    <!-- Centered content container -->
    <div class="text-center" style="text-align: center;">
        <!-- Photography Button -->
        <button style="font-size: 24px; padding: 10px 30px; background-color: #007bff; border: none; color: white; font-weight: bold; border-radius: 5px;">
            Live Streaming
        </button>

        <!-- Subheading Paragraph below the button -->
        <p style="margin-top: 20px;">Get amazing portraits in a matter of minutes.<br>Book 3 days prior.</p>
    </div>
</section>

<!-- Services Description Section -->
<section class="services-description" style="padding: 50px 0;">
    <div class="container text-center">
        <h2>Our Services</h2>
        <p style="max-width: 800px; margin: 0 auto;">
            Infocuor’s Live Streaming page brings the campus community closer to the action,
            no matter where you are. As part of our dedication to covering key events and sharing moments,
            we offer high-quality, real-time streaming of major university happenings,
            from cultural shows and sports events to guest lectures and special ceremonies.
            Our team of skilled videographers and tech enthusiasts work behind the scenes to ensure smooth,
            engaging broadcasts, capturing the excitement as it unfolds. Tune in to stay connected,
            experience events virtually, and join us in making memories accessible to everyone, anywhere.
        </p>
    </div>
</section>
@endsection