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

    public function showPreviousNewBeer($id)
    {
        $currentNewBeer = New_beer::findOrFail($id);
        $previousNewBeer = New_beer::where('id', '<', $currentNewBeer->id)->orderBy('id','desc')->first();
        return to_route('new-beer', ['newBeer' => $previousNewBeer]);
    }

    public function showNextNewBeer($id)
    {
        $currentNewBeer = New_beer::findOrFail($id);
        $nextNewBeer = New_beer::where('id', '>', $currentNewBeer->id)->orderBy('id')->first();
        return to_route('new-beer', ['newBeer' => $nextNewBeer]);
    }

    // Show the form for editing
    public function editNewBeer(New_beer $newBeer)
    {
        return view('edit-new-beer', ["newBeer"=>$newBeer]);
    }

    public function updateNewBeer(StoreNewBeerRequest $request, New_beer $newBeer)
    {
        $newBeer->name = $request->name;
        $newBeer->type = $request->type;
        $newBeer->country = $request->country;
        $newBeer->alcohol_percentage = $request->alcohol_percentage;
        $newBeer->brewery = $request->brewery;
        $newBeer->info = $request->info;
        
        // $newBeer->save();
        $newBeer->update();
        return redirect('/new-beers'); 
    }

    public function deleteNewBeer(New_beer $newBeer)
    {
        $newBeer->delete();
        return redirect('/new-beers'); 
    }
}
