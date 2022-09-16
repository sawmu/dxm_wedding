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

    public function StoreBanner(Request $request){

        $banner_image = $request->file('image'); 

        $name_gen = hexdec(uniqid()).'.'.$banner_image->getClientOriginalExtension();

        Image::make($banner_image)->resize(560, 741)->save('images/banner/'.$name_gen);

        $last_img = 'images/banner/'.$name_gen;

        // To add data
        Banner::insert([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'sign' => $request->sign,
            'subtitle' => $request->subtitle,
            'image' => $last_img,
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.banner')->with('success', 'Banner Inserted Successfull');
    }


}
