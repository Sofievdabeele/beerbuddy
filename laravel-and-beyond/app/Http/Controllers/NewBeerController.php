<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewBeerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\New_beer;
use Faker\Guesser\Name;


class NewBeerController extends Controller
{
    public function create(): View
    {
        return view('create');
    }

    public function store(StoreNewBeerRequest $request) 
    {
        $newBeer = new New_beer;
        $newBeer->name = $request->input('name');
        $newBeer->type = $request->input('type');
        $newBeer->country = $request->input('country');
        $newBeer->alcohol_percentage = $request->input('alcohol_percentage');
        $newBeer->brewery = $request->input('brewery');
        $newBeer->info = $request->input('info');
        
        $newBeer->save();
       
        return redirect('/new-beers'); 
    }
    public function show()
    {
        $newBeers = New_beer::all();
        
        return view('new-beers', ["newBeers"=>$newBeers]);
    }
    public function showdetail(New_beer $newBeer)
    {
        return view('new-beer', ["newBeer"=>$newBeer]);
    }
}
