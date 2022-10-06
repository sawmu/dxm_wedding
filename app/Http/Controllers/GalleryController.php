<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class GalleryController extends Controller
{
    public function HomeGallery(){
        $gallerys = Gallery::paginate(10);

        return view('admin.gallery.index', compact('gallerys'));
    }

    public function AddGallery()
    {
        return view('admin.gallery.store');
    }

    public function StoreGallery(Request $request){

        $gallery_image = $request->file('image'); 

        $name_gen = hexdec(uniqid()).'.'.$gallery_image->getClientOriginalExtension();

        Image::make($gallery_image)->resize(700, 700)->save('images/gallery/'.$name_gen);

        $last_img = 'images/gallery/'.$name_gen;

        // To add data
        Gallery::insert([
            'image' => $last_img,
            'created_at' => Carbon::now(),     
        ]);

        return Redirect()->route('home.gallery')->with('success', 'Banner Inserted Successfull');
    }

    public function Edit($id){
            
        $gallery = Gallery::find($id);

        return view('admin.gallery.edit', compact('gallery'));
    }

    public function Update(Request $request, $id){

        $gallery_image = $request->file('image'); 

        $name_gen = hexdec(uniqid()).'.'.$gallery_image->getClientOriginalExtension();

        Image::make($gallery_image)->resize(700, 700)->save('images/gallery/'.$name_gen);

        $last_img = 'images/gallery/'.$name_gen;
       
        // To add data
        Gallery::find($id)->update([
            'image' => $last_img,
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.gallery')->with('success', 'Image Updated Successfull');
   
   }

    public function Delete($id){

        $image = Gallery::find($id);
     
    
    
        $gallery = Gallery::find($id)->delete();
    
        return Redirect()->back()->with('success', 'Image Deleted Successfull');
    }
}
