<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
   
    public function handleImage(Request $request){
        $request->validate([
            'image'=>['required'],
        ]);
        $request->image->storeAs('/images/new_image.jpg');
        return redirect()->route('success');
    }
    public function download(){
        return response()->download(storage_path('/app/public/images/new_image.jpg'));
    }
  
}
