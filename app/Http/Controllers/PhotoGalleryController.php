<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoGalleryController extends Controller
{
    public function listPhotos() {



        return view('gallery.index', ['photos' => Photo::all()]);
    }

    public function showPhotoForm() {
        return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request) {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'min:10',
            'photo' => 'required|image|max:8192'
        ]);

        $targetFolder = public_path('images/user_uploaded');
        $fileName = str_random(16).'.'.$validData['photo']->getClientOriginalExtension();

        $validData['photo']->move($targetFolder, $fileName);

        $photo = new Photo();
        $photo->fill(
            [
                'title'         => $validData['title'],
                'description'   => $validData['description'],
                'photo'         => $fileName
            ]
        );
        $photo->save();

        return redirect()->route('gallery.index');


    }
}
