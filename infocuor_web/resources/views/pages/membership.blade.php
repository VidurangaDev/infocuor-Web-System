
@extends('layouts.layout01')



@push('cssstyle')
{{-- code you css style on the push --}}

    <style>
    
    
/* Hero Section */
.hero-section {
    background-size: cover;
    background-position: center;
  
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
   
}

  /* Banner and welcome message */
  .banner {
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
        padding: 15px;
        background: rgba(255, 0, 0, 0.8);
        color: white;
        font-size: 1.5em;
        font-weight: bold;
        z-index: 2;
    }

    .welcome-container {
        text-align: center;
        color: white;
        margin-top: 100px;
        padding: 0 20px;
    }


.hero-overlay {
    position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 20px;
            
 
}

.hero-overlay h1 {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 10px;
  
}

.hero-overlay h2 {
    font-size: 2rem;
    font-weight: normal;
    margin-bottom: 15px;
    margin-top: 80px;
    color:white;
    font-weight: bold;
    
}

.hero-overlay p {
    font-size: 0.9rem;
    max-width: 800px;
    margin-bottom: 40px;
}


body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        /* Style for the button */
        .btn-apply {
            background-color: #0066cc;
            color: white;
            padding: 10px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            width: 34%;
            align-items: center;
            margin-bottom: 50px;
            
        }

        .btn-apply:hover {
            background-color: yellowgreen;
        }

        /* Hidden application form */
        /* Membership button */
    .membership-btn {
        display: inline-block;
        padding: 15px 30px;
        font-size: 1em;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .membership-btn:hover {
        background-color: #0056b3;
    }

    /* Form modal styling */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 10;
        padding: 20px;
    }

    .modal-content {
        background: white;
        padding: 25px;
        border-radius: 10px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .modal-content h2 {
        margin-bottom: 5px;
        font-size: large;
        font-weight: bold;
    }

    .modal-content label {
        display: block;
        margin-bottom: 3px;
        text-align: left;
    }

    .modal-content input, .modal-content textarea {
        width: 100%;
        padding: 7px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .close-btn, .submit-btn {
        padding: 8px 13px;
        font-size: 1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 8px;
    }

    .close-btn {
        background-color: #f44336;
        color: white;
    }

    .submit-btn {
        background-color: #4CAF50;
        color: white;
    }

    /* Mobile responsiveness */
    @media (max-width: 600px) {
        .banner {
            font-size: 1.2em;
            padding: 10px;
        }

        .welcome-container h1 {
            font-size: 1.8em;
        }

        .welcome-container p {
            font-size: 1em;
        }

        .membership-btn {
            padding: 12px 25px;
            font-size: 0.9em;
        }
    }
        
/* General styling for the section */
.section {
    background-color: #f0f8ff    ; /* Light pink background */
    padding: 50px;
    text-align: center;
    position: relative;
    min-height: 100vh;
}

/* Styling for the Active Crew header */
.header h1 {
    font-size: 2.8rem;
    font-weight: bold;
    color: #4B2A2A; /* Dark brown text */
    margin-bottom: 70px;
    text-align: center;
}

/* Styling for the Advisory Board title */
.advisory-board h2 {
    font-size: 2.3rem;
    font-weight: bold;
    color: #4B2A2A;
    margin-bottom: 40px;
    text-align: left;
    padding-left: 50px;
}

/* Board members container */
.board-members {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 0 50px;
    flex-wrap: wrap; /* Ensures responsiveness */
}

/* Each member card */
.card {
    background-color: rgba(189, 154, 146, 0.3); /* Light transparent brownish */
    width: 200px;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    font-family: 'Arial', sans-serif;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease; /* Animation effect */
}

.card:hover {
    transform: translateY(-10px); /* Lift up on hover */
}

/* Member names */
.card p {
    font-size: 1rem;
    color: #4B2A2A; /* Dark brown color */
    
    margin: 0;
}

/*year*/

.section {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .header h1 {
            text-align: center;
        }
        .timeline {
            display: flex;
            justify-content: space-around;
            background-color: #f3e5e5;
            padding: 10px;
            margin-bottom: 20px;
        }
        .timeline span {
            cursor: pointer;
            color: #333;
            font-weight: bold;
        }
        .timeline span:hover {
            color: #007bff;
        }
        .advisory-board, .executive-board {
            margin-top: 20px;
        }
        .board-members {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .member .card {
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            width: 200px;
        }
        .member img {
            width: 100%;
            height: auto;
        }

/* Member roles */
.card span {
    font-size: 1rem;
    color: #4B2A2A;
    margin-top: 10px;
    font-weight: lighter;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .board-members {
        flex-direction: column;
    }
    .header h1 {
        font-size: 2.5rem;
    }
    .advisory-board h2 {
        font-size: 2rem;
    }
    .card {
        width: 200px;
        height: 300px;
    }
}


</style>
        @endpush


        @section('slider')
       
<section id="hero-section">

<img class="d-block w-100" src="{{ asset('images/memhome.jpeg') }}" alt="Hero Image" width="100%" height="750px">

    <div class="hero-overlay">
    <div class="banner">Inviting Applications for New Membership</div>
    <div class="welcome-container">
        <h2>Welcome to Infocour Commiunity</h2>
        <p>Embark on a creative journey with us and explore the exciting world of photography, videography, and fine arts. Discover new skills, unlock potential, and share your visual stories alongside a passionate community.</p>
        <button class="btn-apply" onclick="openModal()">Apply for Membership</button>
    </div>
    </div>
        
<!-- Membership Application Form (hidden by default) -->
<div id="membershipModal" class="modal">
        <div class="modal-content">
            <h2>Membership Application Form</h2>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="name"required>

                <label for="name">Department</label>
                <input type="text" name="event_name" id="event_name"   placeholder="Department" required>

                <label for="name">Student number</label>
                <input type="text" id="name" name="name" placeholder="student no"required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="phone no" required>

                <label for="message">Why do you want to join us?</label>
                <textarea id="message" name="message" rows="2" required></textarea>

                <button type="button" class="close-btn" onclick="closeModal()">Cancel</button>
                <button type="submit" class="submit-btn" >Submit Application</button>
                
            </form>
        </div>
    </div>
</section>
<!-- JavaScript to show the form -->
        
   
        <div class="section">
    <div class="header">
        <h1>Active Crew</h1>
    </div>

    <div class="advisory-board">
        <h2>Advisory Board</h2>
        <div class="board-members">
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/d.m.samarathunga.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. D.M Samarathunga</p>
                    <span>Chief Patron</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>
        </div>
    </div>


    <div class="advisory-board">
        <h2>Excecutive Board</h2>
        <div class="board-members">
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/d.m.samarathunga.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Amayuru viduranga</p>
                    <span>president</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Wishwajith shsjs</p><span>Treasure</span>
                    <span>Secratery</span>
                </div>
            </div>

            <var>
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Anupa Gunasekara</p>
                    <span>Secratery</span>
                </div>
            </div>
            </var>
        </div>
    </div>

    <div class="advisory-board">
        <h2>Advisory Board</h2>
        <div class="board-members">
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/d.m.samarathunga.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. D.M Samarathunga</p>
                    <span>Chief Patron</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>

            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>

            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>

            <div class="member">
                <div class="card">
                <img src="{{ asset('images/dr.nandani.png') }}" alt="Event Image2" width="200px" height="200px">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="header">
        <h1>History Of crew Members</h1>
    </div>

    <!-- Timeline -->
    <div class="timeline">
        <span onclick="showYearDetails(2015)">2015</span>
        <span onclick="showYearDetails(2016)">2016</span>
        <span onclick="showYearDetails(2017)">2017</span>
        <span onclick="showYearDetails(2018)">2018</span>
        <span onclick="showYearDetails(2019)">2019</span>
        <span onclick="showYearDetails(2020)">2020</span>
        <span onclick="showYearDetails(2022)">2022</span>
        <span onclick="showYearDetails(2023)">2023</span>
        <span onclick="showYearDetails(2024)">2024</span>
    </div>

    <!-- Advisory Board -->
    <div class="advisory-board">
    <h1>Active Crew</h1>
        <h2>Advisory Board</h2>
        <div class="board-members">
            <div class="member">
                <div class="card">
                    <img src="{{ asset('images/d.m.samarathunga.png') }}" alt="Dr. D.M Samarathunga">
                    <p>Dr. D.M Samarathunga</p>
                    <span>Chief Patron</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                    <img src="{{ asset('images/dr.nandani.png') }}" alt="Dr. E.J.K.P Nandani">
                    <p>Dr. E.J.K.P Nandani</p>
                    <span>Senior Treasurer</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Executive Board -->
    <div class="executive-board">
        <h2>Executive Board</h2>
        <div class="board-members">
            <div class="member">
                <div class="card">
                    <img src="{{ asset('images/d.m.samarathunga.png') }}" alt="Amayuru Viduranga">
                    <p>Amayuru Viduranga</p>
                    <span>President</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                    <img src="{{ asset('images/dr.nandani.png') }}" alt="Wishwajith Shsjs">
                    <p>Wishwajith Shsjs</p>
                    <span>Treasurer</span>
                    <span>Secretary</span>
                </div>
            </div>
            <div class="member">
                <div class="card">
                    <img src="{{ asset('images/dr.nandani.png') }}" alt="Anupa Gunasekara">
                    <p>Anupa Gunasekara</p>
                    <span>Secretary</span>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
        
    <!-- JavaScript to show form and display details -->
    <script>
       
    function openModal() {
        document.getElementById("membershipModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("membershipModal").style.display = "none";
    }

    window.onclick = function(event) {
        var modal = document.getElementById("membershipModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }


        // Handle form submission
        document.getElementById('applicationForm').onsubmit = function(event) {
            event.preventDefault(); // Prevent default form submission
            // Here you can handle the form data (e.g., send it to a server)
            alert('Application submitted!'); // Temporary feedback
            closeModal(); // Close modal after submission
        };
  // Function to show the "Active Crew" section when a year is clicked
  function showYearDetails(year) {
        // Get the Active Crew section by its ID
        var activeCrewSection = document.getElementById('active-crew');
        
        // Display the Active Crew section
        activeCrewSection.style.display = 'block';
        
        // Log the selected year (optional for debugging)
        console.log("Year selected:", year);
    }



          // Function to show Advisory and Executive Boards when a year is clicked
    function showYearDetails(year) {
        // Display both the Advisory and Executive Boards
        document.getElementById('advisory-board').style.display = 'block';
        document.getElementById('executive-board').style.display = 'block';
        
        // Log the selected year for confirmation (optional)
        console.log("Year selected:", year);
    }

    
       
    </script>
        @endsection