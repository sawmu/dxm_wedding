<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class BannerController extends Controller
{
    public function HomeDashboard(){
        return view('admin.index');
    }

    public function HomeBanner(){
        $banners = Banner::latest()->get();

        return view('admin.banner.index', compact('banners'));
    }

    // public function StoreBanner(Request $request){

    //     $banner_image = $request->file('image'); 

    //     $name_gen = hexdec(uniqid()).'.'.$banner_image->getClientOriginalExtension();

    //     Image::make($banner_image)->resize(560, 741)->save('images/banner/'.$name_gen);

    //     $last_img = 'images/banner/'.$name_gen;

    //     // To add data
    //     Banner::insert([
    //         'title_one' => $request->title_one,
    //         'title_two' => $request->title_two,
    //         'sign' => $request->sign,
    //         'subtitle' => $request->subtitle,
    //         'image' => $last_img,
    //         'created_at' => Carbon::now(),
            
    //     ]);

    //     return Redirect()->route('home.banner')->with('success', 'Banner Inserted Successfull');
    // }

    public function Update(Request $request, $id){
        // To add image
        $banner_image = $request->file('image'); //Need to Get the image from file field form FE
        $old_image = $request->old_image; //Need to Get the image from file field form FE
        if ($banner_image) {
           $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
           $img_ext = strtolower($banner_image->getClientOriginalExtension()); //Need to get the image extension
           $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
           $upload_path = 'images/slider/'; // Image file path
           $last_img = $upload_path.$img_name; // define the image path
           $banner_image->move($upload_path, $img_name); // Move the image to the path
           
        //   unlink($old_image); // Delete the old image
  
          $slider = Slider::find($id)->update([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'sign' => $request->sign,
            'subtitle' => $request->subtitle,
            'image' => $last_img,
            'created_at' => Carbon::now(),
          ]);
          
  
          return Redirect()->route('home.banner')->with('success', 'Slider Updated Successfull');
        } else {
           $slider = Slider::find($id)->update([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'sign' => $request->sign,
            'subtitle' => $request->subtitle,
            'image' => $last_img,
            'created_at' => Carbon::now(),
           ]);
          return Redirect()->route('home.banner')->with('success', 'Slider Updated Successfull');

        }

         
   }


}
