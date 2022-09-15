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
}
