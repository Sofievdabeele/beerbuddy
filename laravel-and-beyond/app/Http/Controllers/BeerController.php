<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function show()
    {
        return view ('beers');
    }
}
