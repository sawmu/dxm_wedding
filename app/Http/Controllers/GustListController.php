<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gustList;
use Auth;
use Illuminate\Support\Carbon;

class GustListController extends Controller
{
    public function HomeGustList(){
      
        $gustLists = gustList::paginate(10);

        return view('admin.gustList.index',  compact('gustLists'));
    }

    public function AddGustList()
    {
        return view('admin.gustList.store');
    }

    public function StoreGustList(Request $request){


        // To add data
        gustList::insert([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'knowus' => $request->knowus,
            'no_guests' => $request->no_guests,
            'attending' => $request->attending,
            'table' => $request->table,
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.gustList')->with('success', 'Gust Inserted Successfull');
    }

    public function Edit($id){
            
        $gust = gustList::find($id);

        return view('admin.gustList.edit', compact('gust'));
    }

    public function Delete($id){
    
        $gust = gustList::find($id)->delete();
    
        return Redirect()->back()->with('success', 'Gust Deleted Successfull');
    } 
}
