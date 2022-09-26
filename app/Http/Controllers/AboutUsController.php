<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class AboutUsController extends Controller
{
    public function HomeAboutUs(){
        $aboutus = AboutUs::latest()->get();

        return view('admin.aboutus.index', compact('aboutus'));
    }

    public function AddAboutUs()
    {
        return view('admin.aboutus.store');
    }

    public function StoreAboutUs(Request $request){
        

        $bride_Image = $request->file('brideImage'); 
        

        $name_gen = hexdec(uniqid()).'.'.$bride_Image->getClientOriginalExtension();

        Image::make($bride_Image)->resize(336, 336)->save('images/aboutus/'.$name_gen);

        $brideImage = 'images/aboutus/'.$name_gen;

        // Groom

        $groom_Image = $request->file('groomImage'); 

        $name_ge = hexdec(uniqid()).'.'.$groom_Image->getClientOriginalExtension();

        Image::make($groom_Image)->resize(336, 336)->save('images/aboutus/'.$name_ge);

        $groomImage = 'images/aboutus/'.$name_ge;

        // To add data
        AboutUs::insert([
            'brideName' => $request->brideName,
            'brideDesc' => $request->brideDesc,
            'brideImage' => $brideImage,
            'groomName' => $request->groomName,
            'groomDesc' => $request->groomDesc,
            'groomImage' => $groomImage,
            
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.aboutus')->with('success', 'About Us Inserted Successfull');
    }

    public function Edit($id){
            
        $aboutus = AboutUs::find($id);

        return view('admin.aboutus.edit', compact('aboutus'));
    }

    public function Update(Request $request, $id){
        // To add image

        $bride_Image = $request->file('brideImage'); 
        

        $name_gen = hexdec(uniqid()).'.'.$bride_Image->getClientOriginalExtension();

        Image::make($bride_Image)->resize(336, 336)->save('images/aboutus/'.$name_gen);

        $brideImage = 'images/aboutus/'.$name_gen;

        // Groom

        $groom_Image = $request->file('groomImage'); 

        $name_ge = hexdec(uniqid()).'.'.$groom_Image->getClientOriginalExtension();

        Image::make($groom_Image)->resize(336, 336)->save('images/aboutus/'.$name_ge);

        $groomImage = 'images/aboutus/'.$name_ge;

        // To add data
        Aboutus::find($id)->update([
            'brideName' => $request->brideName,
            'brideDesc' => $request->brideDesc,
            'brideImage' => $brideImage,
            'groomName' => $request->groomName,
            'groomDesc' => $request->groomDesc,
            'groomImage' => $groomImage,
            
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.aboutus')->with('success', 'About Us Updated Successfull');
    
    } 
    
    public function Delete($id){

       Aboutus::find($id)->delete();
    
        return Redirect()->back()->with('success', 'About Us Deleted Successfull');
    } 
   
}
