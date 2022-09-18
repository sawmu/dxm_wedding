<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gustList;

class GustListController extends Controller
{
    public function HomeGustList(){
        // $gustLists = gustList::latest()->get();

        return view('admin.gustList.index');
    }
}
