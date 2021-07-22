<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class GalleryController extends Controller
{
    public function show(Request $request)
    {
        $images = Image::latest()->paginate(3);
        $context = [
            'images' => $images
        ];
        return view('gallery', $context);
    }
}
