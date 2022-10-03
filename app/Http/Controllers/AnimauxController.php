<?php

namespace App\Http\Controllers;

use App\Models\Animaux;
use Illuminate\Http\Request;

class AnimauxController extends Controller
{

    public function Home(){
        $animal = Animaux::all();
        return view('home', compact('animal'));
    }

    public function store(Request $request){
        $animal = new Animaux;
        $animal -> espece = $request -> espece;
        $animal -> age = $request -> age;
        $animal -> save();
        return redirect('/');
    }

    public function destroy($id){
        $destroy = Animaux::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function show($id){
        $id_show = Animaux::find($id);
        return view('pages.AnimalEdit', compact('id_show'));
    }
}
