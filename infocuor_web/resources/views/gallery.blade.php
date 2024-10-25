<?php
 function showGallery()
{
    // Example images array for testing
    $images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg'];

    // Passing the $images array to the 'gallery' view
    return view('gallery', compact('images'));
}
