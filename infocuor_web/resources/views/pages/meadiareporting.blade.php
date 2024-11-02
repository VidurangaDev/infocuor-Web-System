@extends('layouts.layout01')

@section('content')
<!-- Hero Section with Background Image -->
<section class="hero-section"
    style="background-image: url('{{asset('images/media.jpeg')}}'); 
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
            Media Reporting
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
            Infocuor’s Media Reporting team is dedicated to capturing and sharing the heartbeat of our university
            through dynamic and insightful coverage. From campus events and club activities to student achievements
            and major announcements, our reporters and photographers work to bring stories to life with accuracy and creativity.
            With a commitment to showcasing the diversity and spirit of our campus,
            we create content that not only informs but also inspires.
            Follow our updates to stay in the loop and experience university life from unique perspectives,
            through the lenses and words of our passionate media team.
        </p>
    </div>
</section>
@endsection