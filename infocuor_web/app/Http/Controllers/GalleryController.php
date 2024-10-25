<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showGallery()
{
    $images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg'];

    dd($images);  // Dump and die to check if $images is available
}

}
