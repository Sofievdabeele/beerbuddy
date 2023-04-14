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

    public function store(StoreNewBeerRequest $request): RedirectResponse
    {
       
            $new_beer = new New_beer;
            $new_beer->name = $request->input('name');
            $new_beer->type = $request->input('type');
            $new_beer->country = $request->input('country');
            $new_beer->alcohol_percentage = $request->input('alcohol_percentage');
            $new_beer->brewery = $request->input('brewery');
            $new_beer->info = $request->input('info');

    
            $new_beer->save();
            
            return redirect('/beers')->with('status', 'Beer has been inserted'); 

     
    }
}
