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
}
