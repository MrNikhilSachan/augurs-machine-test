<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            "image" => "required|mimes:png,jpeg"
        ]);

        if($request->hasFile('image')){
            $image  = $request->file('image');
            $imagename = time()."-".$image->getClientOriginalName();
            $image->move('uploads/images/',$imagename);
        }

        return redirect()->back()->with(['msg'=>"Image Uploaded Successfully"]);
        
    }
}
