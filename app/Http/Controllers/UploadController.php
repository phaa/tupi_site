<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;

class UploadController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function show()
    {
        return view('test');
    }
     
    public function upload(Request $request)
    {
        request()->validate([
            'image' => 'required|image|max:10240'
        ]);

        $requestImage = request()->image;
        $newImageName = $requestImage->getClientOriginalName();

        $newImage = new Image();
        $newImage->filename = $newImageName;
        $newImage->alt_text = $request->input('alt_text');
        $newImage->save();
        
        $requestImage->move(public_path('images/uploads'), $newImageName);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$newImageName);
    }
}