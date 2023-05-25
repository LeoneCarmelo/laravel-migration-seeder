<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    //
    function index() {
        $trains = Train::all();
        //dd($trains);
        return view('home', compact('trains'));
    }
}
