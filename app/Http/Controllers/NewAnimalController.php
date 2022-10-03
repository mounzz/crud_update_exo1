<?php

namespace App\Http\Controllers;

use App\Models\Animaux;
use Illuminate\Http\Request;

class NewAnimalController extends Controller
{
    public function NewAnimal(){
        $animals = Animaux::all();
        return view('pages.NewAnimal', compact('animals'));
    }

    public function update(Request $request, $id){
        $animals = Animaux::find($id);
        $animals -> espece = $request -> espece;
        $animals -> age = $request -> age;
        $animals -> save();
        return redirect()->back();
    }

}
