@extends('layouts.layout01')

@push('cssstyle')
{{-- code you css style on the push --}}

    <style>
        /* Carousel styling */

        #hero {
            position: relative;
            text-align: center;
            color: white;
        }

        #hero img {
            width: 100%;
            filter: brightness(0.6);
        }

        .hero-text {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .hero-title {
    font-size: 48px;
    font-weight: bold;
    color: black;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}

.hero-subtitle {
    font-size: 24px;
    color: black;
    margin-bottom: 20px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}



        .hero-text button {
            margin: 10px;
            padding: 10px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .hero-text .hire-btn {
            background-color: #007bff;
            color: white;
        }

        .hero-text .login-btn {
            background-color: #6c757d;
            color: white;
        }

        #events {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background-color: #ffffff;
            gap: 20px;
        }

        .event-card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            width: 300px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s ease;
            padding: 20px;
        }

        .event-card:hover {
            transform: scale(1.05);
        }

        .event-card img {
            width: 100%;
            border-radius: 8px 8px 0 0;
        }

        .event-card p {
            margin: 10px 0;
            font-size: 14px;
            color: #333;
        }

        .event-card h4 {
            margin: 10px 0;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .event-card small {
            font-size: 12px;
            color: #777;
        }

        .event-card .date {
            font-size: 14px;
            color: #e74c3c;
        }

        .event-card .read-more {
            margin-top: 10px;
            font-size: 14px;
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        .event-card .read-more:hover {
            text-decoration: underline;
        }

        #about {
            padding: 40px;
            text-align: center;
            background-color: #f5f5f5;
        }

        #about h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #about p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            color: #333;
        }

        footer {
            background-color: #022F56;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        footer p {
            margin: 10px 0;
        }
        .footer-stats {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 20px;

}

.footer-stats div {
    text-align: center;
    transition: color 0.3s ease;
}

.footer-stats svg {
    transition: transform 0.3s ease, fill 0.3s ease;
}

.footer-stats p {
    margin: 5px 0;
    font-size: 16px;
    color: which;
    font-weight: 600;
    transition: color 0.3s ease;
}

/* Hover effect */

.footer-stats div:hover {
    color: #007bff;
    transform: scale(1.05);

}

.footer-stats div:hover svg {
    fill: #007bff; /* Change icon color on hover */
    transform: scale(1.1); /* Slightly enlarge icon on hover */
}

.footer-stats div:hover p {
    color: #007bff; /* Change text color on hover */
}



        .contact-info p {
            margin: 0;
        }

        .contact-info {
            margin-top: 10px;
        }
        .review-section {
    text-align: center;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.review-section h1 {
    color: #2b3a4a;
    margin-bottom: 20px;
}

.review-card {
    padding: 20px;
    position: relative;
}

.name {
    font-weight: bold;
    margin-bottom: 10px;
}

.review-text {
    font-size: 1rem;
    color: #4a4a4a;
    margin-bottom: 20px;
}

.quote-icon {
    font-size: 2rem;
    color: #2b3a4a;
    margin-bottom: 20px;
}

.dots {
    display: flex;
    justify-content: center;
    align-items: center;
}

.dot {
    width: 10px;
    height: 10px;
    background-color: #ddd;
    border-radius: 50%;
    margin: 0 5px;
}

.dot.active {
    background-color: #2b3a4a;
}





    </style>



@endpush

    @section('slider')

    {{-- Devolop your all content on between this section in the Home page --}}

    <section id="hero">
    <img class="d-block w-100" src="{{ asset('images/mainHome.jpg') }}" alt="Hero Image" width="100%" height="715px">
     @endsection
    @section('content')
    <div class="hero-text">
    <h1 class="hero-title">Welcome to Infocure</h1>
    <p class="hero-subtitle">Moments captured with precision and passion</p>
        <button class="hire-btn"><a href="/hire" style="color: white;">Hire Us</a></button>
        <button class="login-btn" id="loginBtn">Login</button>
    </div>
</section>

<section id="events">
    <div class="event-card">
        <img src="{{ asset('public/images/nadagama.jpg') }}" alt="Event Image">
        <h4>Tharushi Karunarathne</h4>
        <p class="date">2024-08-03</p>
        <p>Historic Victory! After 28 years, Sri Lanka's sprint champion Aruna Dharshana has qualified for the semi-finals in the men's 400m event!</p>
        <a href="#" class="read-more">Read More</a>
    </div>
    <div class="event-card">
        <img src="{{ asset('public/images/nadagama.jpg') }}" alt="Event Image">
        <h4>Aruna Dharshana</h4>
        <p class="date">2024-08-03</p>
        <p>Historic Victory! Sri Lanka's sprint champion has qualified for the 400m event semi-finals!</p>
        <a href="#" class="read-more">Read More</a>
    </div>
    <div class="event-card">
        <img src="{{ asset('public/images/nadagama.jpg') }}" alt="Event Image">
        <h4>A Huge Win for Sri Lanka</h4>
        <p class="date">2024-08-07</p>
        <p>Sri Lanka defeated India in a bilateral ODI series for the first time in 27 years!</p>
        <a href="#" class="read-more">Read More</a>
    </div>
</section>

<section id="about">
    <h2>About Us</h2>

<p>Infocuor is the Photography Society of
faculty of Science, University Of Ruhuna
which mainly founded to inspire the undergraduates
to uplift the spirit by spreading and promoting creativity
and sports among university students and broadcast the talents
of University Students.</p>
</section>

<footer>
<div class="footer-stats">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
        </svg>
        <p>11,000+</p>
        <p>Facebook Likes</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
        <p>14,000+</p>
        <p>Facebook Followers</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-camera2" viewBox="0 0 16 16">
            <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4"/>
            <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.97 5.97 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1M2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0M14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0"/>
        </svg>
        <p>400+</p>
        <p>Events Covered</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        <p>40+</p>
        <p>Active Crew</p>
        </div>
        </div>

    <div class="contact-info">
        <p>Phone: (+94) 76 584 5651</p>
        <p>Email: infocour@usci.ruh.ac.lk</p>
        <p>Location: Wallamadama, Matara, Sri Lanka</p>
    </div>
</footer>

<section>
<div class="review-section">
        <h1>Reviews For Infocour</h1>
        <div class="review-card">
            <p class="name">Amayuru Viduranga</p>
            <p class="review-text">Thank You infocuor for  Coverage of throughtout inter Uni Games. </p><p></p>Wish Your All the Best</p>
            <div class="quote-icon">❞</div>
            <div class="dots">
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>










    @endsection
