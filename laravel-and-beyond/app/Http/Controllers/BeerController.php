<?php

namespace App\Http\Controllers;
use App\Models\Beer;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function show()
    {
        $beers = Beer::all();
        return view ('beers', ["beers"=>$beers]);
    }
    public function showdetail(Beer $beer)
    {
        return view ('beer', ["beer"=>$beer]);
    }
    // public function showPrevious(Beer $beer)
    // {

    //     $previous = Beer::where('id', '<', $beer->id)->orderBy('id','desc')->first();
    //     return view ('previous', ['previous '=> $previous]);
    // }
    // public function showNext(Beer $beer)
    // {
    //     $next = Beer::where('id', '>', $beer->id)->orderBy('id')->first();
    //     return view ('next');
    // }
}
