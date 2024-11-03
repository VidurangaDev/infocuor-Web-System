@extends('layouts.serviceslayout')
@section('content')
<!-- Hero Section with Background Image -->
<section class="hero-section"
    style="background-image: url('{{asset('images/vediography.jpeg')}}'); 
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
            Videography
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
            Infocuor, the official camera club of our university, is a vibrant community
            where creativity meets technology. Our club brings together students passionate about
            videography and photography, providing a platform to explore, learn, and express
            through the lens. With regular workshops, hands-on projects, and collaborative shoots,
            we focus on honing skills in video editing, cinematography, and storytelling.
            Whether you're a beginner eager to explore or a seasoned videographer looking to perfect your craft,
            Infocuor offers a supportive space to capture moments, create stories, and inspire others.
            Join us and be part of a journey to frame the world, one shot at a time.
        </p>
    </div>
</section>
@endsection