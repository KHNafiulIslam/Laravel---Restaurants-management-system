<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fish;
class FishController extends Controller
{
    public function index()
    {
        $fishes = Fish::latest()->get();

        return view('fishes.index',[
            'fishes'=> $fishes,
            ]);
    }

    public function show($id)
    {
        $fish = Fish::findOrFail($id); 
        return view('fishes.show',['fish' => $fish]);
    }

    public function create()
    {
        return view('fishes.create');
    }
    public function store()
    {
        $fish = new Fish();

        $fish->cus_name = request('cus_name');
        $fish->address = request('address');
        $fish->phone_number = request('phone');
        $fish->name = request('name');
        $fish->type = request('type');
        $fish->save();
        return redirect('/')->with('msg','Thanks for your order!');
    }
    public function destroy($id)
    {
        $fish = Fish::findOrFail($id);
        $fish->delete();

        return redirect('/fishes');
    }
}
