<?php
namespace App\Http\Controllers\functionalities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryImage;

class GalleryImageController extends Controller
{
    public function addGalleryImagesView(){
        $images = GalleryImage::orderBy("created_at","desc")->get();
        return view("admin.gallery-images", compact("images"));
    }

    public function addGalleryImages(Request $request){
        $request->validate([
            'galleryImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $file = $request->file('galleryImage');
        $filename = time().'-'.$file->getClientOriginalName();
        $file->move(public_path('images/gallery-images'), $filename);

        $galleryImage = new GalleryImage;
        $galleryImage->filename = $filename;
        $galleryImage->save();

        return response()->json(['success' => $filename]);
    }
}
