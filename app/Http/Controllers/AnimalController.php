<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function store (Request $request) {
        $store= new Animal();
        $store->espece = $request->espece;
        $store->age = $request->age;
        $store->save();
        return redirect('/');
    }
    public function home (){
        $animals= Animal::all();
        return view('home', compact('animals'));
    }
    public function create (){
        return view ('pages.create');
    }
    public function show ($id){
        $animal= Animal::find($id);
        return view ('pages.show', compact('animal'));
    }
    public function delete ($id){
        $item= Animal::find($id);
        $item->delete();
        return redirect('/');
    }
    public function edit ($id){
        $edit= Animal::find($id);
        return view('pages.edit', compact('edit'));
    }
    public function update (Request $request, $id){
        $update= Animal::find($id);
        $update->espece= $request->espece;
        $update->age =$request->age;
        $update->save();
        return redirect('/');

    }
}
