<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class StoryController extends Controller
{
    public function HomeStory(){
        $storys = Story::latest()->get();
        

        return view('admin.story.index', compact('storys'));
    }

    public function AddStory()
    {
        return view('admin.story.store');
    }

    public function StoreStory(Request $request){
        

        // Image 1
        $s1_Image = $request->file('image1'); 

        $name_gen = hexdec(uniqid()).'.'.$s1_Image->getClientOriginalExtension();

        Image::make($s1_Image)->resize(510, 600)->save('images/story/'.$name_gen);

        $s1_Image = 'images/story/'.$name_gen;

        // Image 2
        $s2_Image = $request->file('image2'); 

        $name_gen = hexdec(uniqid()).'.'.$s2_Image->getClientOriginalExtension();

        Image::make($s2_Image)->resize(510, 600)->save('images/story/'.$name_gen);

        $s2_Image = 'images/story/'.$name_gen;

        // Image 3
        $s3_Image = $request->file('image3'); 

        $name_gen = hexdec(uniqid()).'.'.$s3_Image->getClientOriginalExtension();

        Image::make($s3_Image)->resize(510, 600)->save('images/story/'.$name_gen);

        $s3_Image = 'images/story/'.$name_gen;

       

        // To add data
        Story::insert([

            'SectionTitle' => $request->SectionTitle,
            'image1' => $s1_Image,
            'title1' => $request->title1,
            'date1' => $request->date1,
            'dec1' => $request->dec1,
            'image2' => $s2_Image,
            'title2' => $request->title2,
            'date2' => $request->date2,
            'dec2' => $request->dec2,
            'image3' => $s3_Image,
            'title3' => $request->title3,
            'date3' => $request->date3,
            'dec3' => $request->dec3,
         
            
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.story')->with('success', 'About Us Inserted Successfull');
    }

    public function Edit($id){
            
        $story = Story::find($id);
        // dd($stor);

        return view('admin.story.edit', compact('story'));
    }

    public function Update(Request $request, $id){
        // To add image
        $s1_Image = $request->file('image1'); 

        

        // Image 2
        $s2_Image = $request->file('image2'); 

        

        // Image 3
        $s3_Image = $request->file('image3'); 

        

        if( !empty($s1_Image) && !empty($s2_Image) && !empty($s3_Image)){

        $name_gen1 = hexdec(uniqid()).'.'.$s1_Image->getClientOriginalExtension();

        Image::make($s1_Image)->resize(510, 600)->save('images/story/'.$name_gen1);

        $s1_Image = 'images/story/'.$name_gen1;

        $name_gen2 = hexdec(uniqid()).'.'.$s2_Image->getClientOriginalExtension();

        Image::make($s2_Image)->resize(510, 600)->save('images/story/'.$name_gen2);

        $s2_Image = 'images/story/'.$name_gen2;

        $name_gen3 = hexdec(uniqid()).'.'.$s3_Image->getClientOriginalExtension();

        Image::make($s3_Image)->resize(510, 600)->save('images/story/'.$name_gen3);

        $s3_Image = 'images/story/'.$name_gen3;

            // To add data
        Story::find($id)->update([
            'SectionTitle' => $request->SectionTitle,
            'image1' => $s1_Image,
            'title1' => $request->title1,
            'date1' => $request->date1,
            'dec1' => $request->dec1,
            'image2' => $s2_Image,
            'title2' => $request->title2,
            'date2' => $request->date2,
            'dec2' => $request->dec2,
            'image3' => $s3_Image,
            'title3' => $request->title3,
            'date3' => $request->date3,
            'dec3' => $request->dec3,
         
            
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect('admin/design/story/edit/1')->with('success', 'About Us Updated Successfull');

        }else{

            Story::find($id)->update([
                'SectionTitle' => $request->SectionTitle,
                
                'title1' => $request->title1,
                'date1' => $request->date1,
                'dec1' => $request->dec1,
                
                'title2' => $request->title2,
                'date2' => $request->date2,
                'dec2' => $request->dec2,
               
                'title3' => $request->title3,
                'date3' => $request->date3,
                'dec3' => $request->dec3,
             
                
                'created_at' => Carbon::now(),
                
            ]);
    
            return Redirect('admin/design/story/edit/1')->with('success', 'About Us Updated Successfull');

        }

        
    
    } 

}
