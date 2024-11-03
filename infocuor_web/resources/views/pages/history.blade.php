 @extends('layouts.historylayout')
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


 @push('cssstyle')


 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

 <style>


    .scroll-gallery {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 10px;
            padding: 20px;
        }

        .scroll-gallery::-webkit-scrollbar {
            width: 12px;
        }

        /* .scroll-gallery::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        } */

        .scroll-gallery img {
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            transition: transform .1s ease;
        }

        .scroll-gallery img:hover {
            transform: scale(1.05);
        }

        .left-arrow, .right-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1;
            width: 40px;  
            height: 40px; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left-arrow {
            left: 10px;
        }

        .right-arrow {
            right: 10px;
        }

        .gallery-container {
            position: relative;
        }
.poppins-font {
    font-family: 'Poppins', sans-serif;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
   
    background-color: rgba(0, 0, 0, 0);
    border-radius:80%;
    
}
.icon-shadow {
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
}

.slider-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 10;
}
.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.note {
    padding: 32px 20px;
    font-size: 4rem;
    margin-bottom: 50px;
    color: white;
    font-weight: bolder;
}

.slider-btn {

    padding: 0px 0px;
    font-size: 1.2rem;
    border-radius:90%;
}


.carousel-item img {
    height: 600px;
    width: 100%;
    object-fit: cover;
    position: relative;
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
/* .white-overlay1 {
    position: center;
    top: 50%;
    left: 50%;
    width: 60%;
    height: 75%;
    border-radius:5%;
    background-color: rgba(255, 255, 255, 0.3); 
    z-index: 50; 
} */
.note2{
    padding: 8px 16px;
      font-size: 1.10rem;
      color: black;
      font-weight: 30%;
}
.note3{
    padding: 32px 256px;
      font-size: 4rem;
      color: black;
      font-weight: bold;
}
.note4{
    padding: 32px 256px;
      font-size: 2rem;
      color: black;
      font-weight: bold;
}
.note5{
    padding: 64px 256px ;
    font-size: 1.3rem;
    color: black;
    font-weight: 30%;
}
.slider-overlay2  {
            display: flex;
            justify-content: center;
            height: 15vh; 
            text-align: center;
}
.slider-overlay3  {

            display: flex;
            justify-content: center;
            height: 10vh; 
            text-align: center;
}
.slider-overlay4 {
            padding: 0px 0px 300px;
            display: flex;
            justify-content: center;
            height: 0vh; 
            text-align: center;
}
.image-container {
    display: inline-block;
    text-align: center;
    margin-right: 10px;
}

.image-container img {
    width: 200px;
    display: block;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}

.image-caption {
    margin-top: 5px;
    font-size: 1rem;
    color: #555;
    font-weight: bolder;
    
}
/* Image grid */
.gallery img {
    width: 150px;
    margin: 10px;
    cursor: pointer;
    transition: transform 0.2s;
}

.gallery img:hover {
    transform: scale(1.05);
}

</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



 @endpush

 @section('content')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#slider').carousel({
            interval: 15000, 
            pause: 'hover'  
        });
    });
</script>

<div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <div class="slider-overlay poppins-font white-overlay1">
        <div class="text-shadow">
        <p class="note">LATEST EVENT</p>
        </div>
        <p class="note2">Knowing how to write a paragraph is incredibly important. It’s a basic aspect of writing, and it is something that everyone should know how to do. There is a specific structure that you have to follow when you’re writing a paragraph. This structure helps make it easier for the reader to understand what is going on. Through writing good paragraphs, a person can communicate a lot better through their writing.</p>
        <a href="/hiru-us" class="btn btn-primary slider-btn icon-shadow">Hire Us</a>
    </div>
    <div class="white-overlay"></div>
    </div>

   
     
    <a class="carousel-control-prev" href="#slider" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" ></span>
        <span class="visually-hidden" >Next</span>
    </a>
     
     
</div>
<div class="poppins-font">
<div class="slider-overlay2">
      <p class="note3 ">Frames of Legacy</p>
</div>

<div class="slider-overlay3">
<p class="note4 ">INFOCUOR Photographic Evolutiony</p>
</div>
<div class="slider-overlay4">
<p class="note5">A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you do that is longer than a few sentences should be organized into paragraphs. This is because paragraphs </p>
</div>
</div>


<div class="gallery-container text-shadow">

    <div class="scroll-gallery "  id="gallery" >
    <div class="image-container">
         <img src="{{ asset('storage/image1.jpg/') }}" onclick="openGallery(0)" alt="Gallery Image1">
         <p class="image-caption">2015</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image2.jpg/') }}" onclick="openGallery(1)" alt="Gallery Image2">
         <p class="image-caption">2016</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image3.jpg/') }}" onclick="openGallery(2)" alt="Gallery Image3">
         <p class="image-caption">2017</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image4.jpg/') }}" onclick="openGallery(3)" alt="Gallery Image4">
         <p class="image-caption">2018</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image5.jpg/') }}" onclick="openGallery(4)" alt="Gallery Image5">
         <p class="image-caption">2019</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image6.jpg/') }}" onclick="openGallery(5)" alt="Gallery Image6">
         <p class="image-caption">2020</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image7.jpg/') }}" onclick="openGallery(6)" alt="Gallery Image7">
         <p class="image-caption">2021</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image8.jpg/') }}" onclick="openGallery(7)" alt="Gallery Image8">
         <p class="image-caption">2022</p>
    </div>
    <div class="image-container">
         <img src="{{ asset('storage/image9.jpg/') }}" onclick="" alt="Gallery Image9">
         <p class="image-caption">2023</p>
    </div>
    
    <!-- <button class="carousel-control-prev-icon left-arrow"  onclick="scrollLeft()"></button> -->
    <button class="carousel-control-next-icon right-arrow" onclick="scrollRight()"></button>
</div>
<script>
  function scrollLeft() {
    var gallery = document.getElementById('gallery');
    if (gallery.scrollLeft === 0) {
        gallery.scrollLeft = gallery.scrollWidth;
    } else {
        gallery.scrollBy({
            top: 0,
            left: -300,
            behavior: 'smooth'
        });
    }
}

function scrollRight() {
    var gallery = document.getElementById('gallery');
    if (gallery.scrollLeft + gallery.clientWidth >= gallery.scrollWidth) {
        gallery.scrollLeft = 0;
    } else {
        gallery.scrollBy({
            top: 0,
            left: 300,
            behavior: 'smooth'
        });
    }
}
</script>

 @endsection