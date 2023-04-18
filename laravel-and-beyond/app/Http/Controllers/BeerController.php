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

    public function showPreviousBeer($id)
    {
        // dd($id);
        $currentBeer = Beer::findOrFail($id);
        $previousBeer = Beer::where('id', '<', $currentBeer->id)->orderBy('id','desc')->first();
        return to_route('beer', ['beer' => $previousBeer]);
    }

    public function showNextBeer($id)
    {
        $currentBeer = Beer::findOrFail($id);
        $nextBeer = Beer::where('id', '>', $currentBeer->id)->orderBy('id')->first();
        return to_route('beer', ['beer' => $nextBeer]);
    }
}
