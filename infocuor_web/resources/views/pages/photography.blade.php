@extends('layouts.serviceslayout')

@section('content')
<!-- Hero Section with Background Image -->
<section class="hero-section"
    style="background-image: url('{{asset('images/photography.jpeg')}}'); 
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
            Photography
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
            Infocour offers professional photography services, capturing memorable moments for a wide range of events.
            Their expertise includes covering university convocations, sports events like SLUG, and ceremonies such as
            the SLUSA awards. They also document internal university events like Nadagama. Beyond event photography,
            Infocour conducts workshops to enhance the photography skills of its members and other students, fostering
            creativity and technical proficiency in the art of photography.
        </p>
    </div>
</section>
@endsection