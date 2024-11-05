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
            top: 28%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .hero-title {
    font-size: 48px;
    font-weight: bold;
    color: white;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .hero-text span {
      display: inline-block;
      animation: bounce 1s ease infinite alternate;
    }

    .hero-text span:nth-child(1) {
      animation-delay: 0s;
    }

    .hero-text span:nth-child(2) {
      animation-delay: 0.1s;
    }

    .hero-text span:nth-child(3) {
      animation-delay: 0.2s;
    }

    .hero-text span:nth-child(4) {
      animation-delay: 0.3s;
    }

    .hero-text span:nth-child(5) {
      animation-delay: 0.4s;
    }

    .hero-text span:nth-child(6) {
      animation-delay: 0.5s;
    }

    .hero-text span:nth-child(7) {
      animation-delay: 0.6s;
    }

    @keyframes bounce {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-20px);
      }
    }

        .hero-subtitle {
    font-size: 24px;
    color: white;
    margin-bottom: 20px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 1.3);
    }



        .hero-text button {
            margin: 10px;
            padding: 10px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer; 
            
        }

       
        .button-container {
      display: center;
      gap: 1000px; /* Adds space between buttons */
        }
        
        .hire-btn:hover {
            background-color: #007bff;
            transform: scale(1.1); /* Make button slightly bigger on hover */
        }
        .login-btn:hover {
            background-color: #007bff;
            transform: scale(1.1);
        }
        .btn{
                margin: 20px;
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
            box-shadow: 0 8px 9px rgba(0,0,0,1);
            border-radius: 9px;
            width: 300px;
            margin: 1px;
            text-align: center;
            transition: transform 0.3s ease;
            padding: 15px;
        }

        .event-card:hover {
            transform: scale(1.15);
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
    
        .event-card .footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 900px;
    height: 0px;
}


        #about {
            padding: 50px;
            text-align: center;
            background-color: #f5f5f5;
        }

        #about h2 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 500px;
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
            padding: 18px 0;
          
        }

        footer p {
            margin: 10px 0;
        }
        .footer-stats {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 13px;

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
    transform: scale(1.25); /* Slightly enlarge icon on hover */
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
    margin-bottom: 14px;
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

/*image footer*/
.footer-media svg {
    transition: transform 0.3s ease, fill 0.3s ease;
}
.footer-media div:hover svg {
    fill: #007bff; /* Change icon color on hover */
    transform: scale(1.1); /* Slightly enlarge icon on hover */
}
.footer {
    background-color: black; /* Adjust based on your image */
    padding: 5px 10px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-content1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
   

}

.logo-img {
    width: 120px; /* Adjust size to your preference */
}

.footer-media {
    display: flex;
    gap: 25px;
    text-decoration: none;
    
}



.footer-bi-hand-thumbs-up {
    width: 40px; /* Size of the social media icons */
    transition: transform 0.3s;
}

.footer-bi-hand-thumbs-up:hover {
    transform: scale(1.2); /* Slight zoom on hover */
}
.con {
            width: 270px;
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .con .date {
            font-size: 11px;
            color: #333;
            display: flex;
            align-items: center;
        }

        .con .icon {
            margin-right: 5px;
        }

        .con h2 {
            font-size: 12px;
            margin-bottom: 5px;
            color: #000;
        }

        .con p {
            font-size: 9px;
            color: #555;
            line-height: 1;
        }

        .con a {
            color: red;
            text-decoration: none;
            font-weight: bold;
            font-size: 12px;
        }
/* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Container for the slider */
.slider {
    width: 100%;
    height: 715px;
    position: relative;
    overflow: hidden;
}

/* Container for the slides */
.slides {
    display: flex;
    width: 400%;
    height: 100%;
    animation: slideAnimation 20s infinite;
}

/* Individual slide styling */
.slide {
    width: 100%;
    transition: 0.6s ease;
}

.white-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.3); 
    z-index: 1; 
}

/* Hides all input radio buttons */
input[type="radio"] {
    display: none;
}

/* Manual navigation styling */
.navigation-manual {
    position: absolute;
    width: 100%;
    margin-top: -40px;
    display: flex;
    justify-content: center;
}

.manual-btn {
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
    margin: 0 10px;
}

.manual-btn:hover {
    background-color: #fff;
}

/* Automatic navigation styling */
.navigation-auto {
    position: absolute;
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: -50px;
}

.navigation-auto div {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #fff;
    margin: 0 5px;
    animation: move 20s infinite;
}

/* Keyframes for the automatic sliding */
@keyframes slideAnimation {
    0% { margin-left: 0; }
    20% { margin-left: 0; }
    25% { margin-left: -100%; }
    45% { margin-left: -100%; }
    50% { margin-left: -200%; }
    70% { margin-left: -200%; }
    75% { margin-left: -300%; }
    95% { margin-left: -300%; }
    100% { margin-left: 0; }
}

/* Keyframes for automatic navigation dots */
@keyframes move {
    0%, 20% { background-color: #fff; }
    25%, 45% { background-color: #fff; }
    50%, 70% { background-color: #fff; }
    75%, 100% { background-color: #fff; }
}

/* Targeting checked input states to control manual slide change */
#radio1:checked ~ .slides {
    margin-left: 0;
}
#radio2:checked ~ .slides {
    margin-left: -100%;
}
#radio3:checked ~ .slides {
    margin-left: -200%;
}
#radio4:checked ~ .slides {
    margin-left: -300%;
}

/* Automatically change the radio buttons */
@keyframes changeRadio {
    0%, 20% { background-color: #fff; }
    25%, 45% { background-color: #fff; }
    50%, 70% { background-color: #fff; }
    75%, 100% { background-color: #fff; }
   
}
.review-section {
    text-align: center;
    padding: 50px;
    background-color: white;
   
}

.review-section h1 {
    color: #2b3a4a;
    margin-bottom: 20px;
}
        .reviews-container {
            width: 60%;
            margin: auto;
            background-color: white;
            border-radius: 10px;
           
            padding: 20px;
        }

        .review {
            display: none;
            font-size: 1.2em;
        }

        .review.active {
            display: block;
        }

        .reviewer {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .pagination {
            margin-top: 10px;
            align-items: center;
            display: flex;
    justify-content: center;
   
 }

        .dot {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            
        }

        .dot.active {
            background-color: #333;
        }

          /* Initially hide the paragraph */
          #myParagraph {
            display: none;
        font-size: 10px;
        color: #333;
        margin-top: 10px;
        }
        .con button {
        padding: 5px 10px;
        font-size: 13px;
        color: #fff;
        background-color: skyblue;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .con button:hover {
            background-color: #007bff;
            transform: scale(1.1);
        }

    </style>



@endpush

    @section('slider')

    {{-- Devolop your all content on between this section in the Home page --}}
   
  

    <section id="hero">
   

    <div class="slider">
        <div class="slides">
            <!-- Radio buttons for navigation (optional) -->
            <input type="radio" name="radio-btn" id="radio1" checked>
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            

            <!-- Slide images -->
            <div class="slide first" >
                
            <img class="d-block w-100" src="{{ asset('images/mainHome1.jpeg') }}" alt="Image 1" width="100%" height="685px">
            </div>
            <div class="slide">
            <img class="d-block w-100" src="{{ asset('images/mainHome.jpg') }}" alt="Image 2" width="100%" height="685px">
            </div>
            <div class="slide">
            <img class="d-block w-100" src="{{ asset('images/mainHome2.jpeg') }}" alt="Image 3" width="100%" height="685px">
              
            </div>
            <div class="slide">
            <img class="d-block w-100" src="{{ asset('images/mainHome5.jpeg') }}" alt="Image 4" width="100%" height="685px">
                
            </div>
          
           

            <!-- Navigation for manual selection -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
        
        <!-- Automatic navigation dots -->
        <!-- <div class="navigation-auto"> -->
            <!-- <div class="auto-btn1"></div> -->
            <!-- <div class="auto-btn2"></div> -->
            <!-- <div class="auto-btn3"></div> -->
            <!-- <div class="auto-btn4"></div> -->
        <!-- </div> -->

    </div>

    
    
    <div class="hero-text">
    <h1 class="hero-title">

    <span>W</span>
    <span>E</span>
    <span>L</span>
    <span>C</span>
    <span>O</span>
    <span>M</span>
    <span>E</span>
    <span>  </span>
    </h1>
    <h1 class="hero-title">
   TO
   
    </h1>
    <h1 class="hero-title">
        I 
        N 
        F 
        O 
        C 
        O 
        U 
        R 
        
   

    </h1>
    
    <p class="hero-subtitle">Moments captured with precision and passion</p>
      <div class="button-container">
        @auth
      <a href="{{ route('hire') }}" class="btn btn-primary slider-btn icon-shadow hire-btn {{ Request::is('hire') ? 'active' : '' }}">Hire Us</a>
      @endauth  
      @guest
      <a href="{{ route('login') }}" class="btn btn-primary slider-btn icon-shadow hire-btn {{ Request::is('login') ? 'active' : '' }}">Hire Us</a>
      @endguest
      <a href="{{ route('login') }}" class="btn btn-primary slider-btn icon-shadow login-btn">Login</a>
       </div>
      
    </div>
   
</section>

@endsection


@section('content')





<section id="events">
    <div class="event-card">
        <img src="{{ asset('images/tharushi .jpeg') }}" alt="Event Image1" width="3%" height="4%">

        <footer class="footer">
        
        <div class="footer-content1">
        <!-- Logo section -->
        <div class="logo_m">
            <img src="{{ asset('images/infocuor_logo.png') }}" alt="Infocuor Logo" class="logo-img" style="width: 60px;">
        </div>

        <!-- Social Media Icons -->
        
        <div class="footer-media">
        <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/infocuor_lk?igsh=MXdjNjk0Yjg1anE4ZQ==" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.196h.03V6.17h-2.4c.03.615 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
        </div>
    </div>
</footer>

<div class="con">
    <div class="date">
        <span class="icon">📅</span> <!-- Example calendar icon -->
        <span>2024-08-03</span>
    </div>
    <h2>Historic Victory!</h2>
    <p>
        After 28 years, Sri Lanka's sprint champion Aruna Darshana has qualified for the semi-finals in the men's 400m event!
    </p>
    <button onclick="toggleParagraph()">Read More</button>
    <p id="myParagraph">Tharushi Karunaratne is a talented Sri Lankan middle-distance runner specializing in the 800 meters. Known for her strong finishing kick and impressive endurance, she has emerged as a promising figure in South Asian athletics. Tharushi gained widespread recognition with her outstanding performances in regional competitions, showcasing her dedication and disciplined training. Her achievements have inspired many young athletes in Sri Lanka, as she continues to raise the profile of Sri Lankan athletics on the international stage.</p>
   
</div>
        
    </div>
    <div class="event-card">
        <img src="{{ asset('images/aruna.jpeg') }}" alt="Event Image2" width="3%" height="4%">
        <footer class="footer">
        
        <div class="footer-content1">
        <!-- Logo section -->
        <div class="logo_m">
            <img src="{{ asset('images/infocuor_logo.png') }}" alt="Infocuor Logo" class="logo-img" style="width: 60px;">
        </div>

        <!-- Social Media Icons -->
        
        <div class="footer-media">
    
                <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/infocuor_lk?igsh=MXdjNjk0Yjg1anE4ZQ==" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.196h.03V6.17h-2.4c.03.615 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
       
          
        </div>
    </div>
</footer>
        
        <div class="con">
    <div class="date">
        <span class="icon">📅</span> <!-- Example calendar icon -->
        <span>2024-08-03</span>
    </div>
    <h2>Historic Victory!</h2>
    <p>
        After 28 years, Sri Lanka's sprint champion Aruna Darshana has qualified for the semi-finals in the men's 400m event!
    </p>
    <button onclick="toggleParagraph()">Read More</button>
  
    </div>
 </div>

    <div class="event-card">
        <img src="{{ asset('images/cricket.jpeg') }}" alt="Event Image3" width="3%" height="4%">
        <footer class="footer">
        
        <div class="footer-content1">
        <!-- Logo section -->
        <div class="logo_m">
            <img src="{{ asset('images/infocuor_logo.png') }}" alt="Infocuor Logo" class="logo-img" style="width: 60px;">
        </div>

        <!-- Social Media Icons -->
        
        <div class="footer-media">
        <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/infocuor_lk?igsh=MXdjNjk0Yjg1anE4ZQ==" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/infocuor" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.196h.03V6.17h-2.4c.03.615 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
        </div>
    </div>
</footer>
       
        <div class="con">
    <div class="date">
        <span class="icon">📅</span> <!-- Example calendar icon -->
        <span>2024-08-03</span>
    </div>
    <h2>Historic Victory!</h2>
    <p>
        After 28 years, Sri Lanka's sprint champion Aruna Darshana has qualified for the semi-finals in the men's 400m event!
    </p>
    <button onclick="toggleParagraph()">Read More</button>
    <p id="myParagraph">Tharushi Karunaratne is a talented Sri Lankan middle-distance runner specializing in the 800 meters. Known for her strong finishing kick and impressive endurance, she has emerged as a promising figure in South Asian athletics. Tharushi gained widespread recognition with her outstanding performances in regional competitions, showcasing her dedication and disciplined training. Her achievements have inspired many young athletes in Sri Lanka, as she continues to raise the profile of Sri Lankan athletics on the international stage.</p>
   
  
    </div>
        
    </div>
    
</section>
<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> -->
    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
    <!-- <span class="visually-hidden">Previous</span> -->
  <!-- </button> -->
  <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> -->
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
    <!-- <span class="visually-hidden">Next</span> -->
  <!-- </button> -->
</div>

<section id="about" style="padding-top: 100px;">
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
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
        </svg>
        <p>11,000+</p>
        <p>Facebook Likes</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
        <p>14,000+</p>
        <p>Facebook Followers</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-camera2" viewBox="0 0 16 16">
            <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.97 5.97 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1M2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0M14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0"/>
        </svg>
        <p>400+</p>
        <p>Events Covered</p>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        <p>40+</p>
        <p>Active Crew</p>
        </div>
        </div>

</footer>

<section>
<div class="review-section">
<h1>Reviews For Infocour</h1>

    <div class="reviews-container">
        <!-- Slide 1 -->
        <div class="review active">
            <p class="reviewer">Amayuru Viduranga</p>
            <p>Thank You infocuor for Coverage of throughout inter Uni Games.<br>
               Wish You All the Best</p>
        </div>

        <!-- Slide 2 -->
        <div class="review">
            <p class="reviewer">Kasun Silva</p>
            <p>Excellent work by Infocuor at the last university convocation. Great photography and videography!</p>
        </div>

        <!-- Slide 3 -->
        <div class="review">
            <p class="reviewer">Ruwan Perera</p>
            <p>Thank you Infocuor for capturing the best moments during SLUG! Great job!</p>
        </div>

        <!-- Pagination dots -->
        <div class="pagination">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</div>

</section>

<script>
     // JavaScript to enable auto-slide
     let slideIndex = 0;
        const slides = document.querySelectorAll(".review");
        const dots = document.querySelectorAll(".dot");

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.style.display = "none";
                dots[index].classList.remove("active");
            });

            slideIndex++;
            if (slideIndex > slides.length) { 
                slideIndex = 1; 
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].classList.add("active");
            setTimeout(showSlides, 3000); // Change every 3 seconds
        }

        showSlides(); // Start the slide show

        //button click
        function toggleParagraph() {
            var paragraph = document.getElementById("myParagraph");
            if (paragraph.style.display === "none") {
                paragraph.style.display = "block"; // Show paragraph
            } else {
                paragraph.style.display = "none"; // Hide paragraph
            }
        }
</script>

    @endsection
