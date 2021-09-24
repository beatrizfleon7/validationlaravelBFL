<?php

namespace App\Http\Controllers;


use App\Models\Character;
use App\Models\Illustrator;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view ('welcome');
    }
    //********************Characters***********************
    public function characters(){
        $characters= Character::all(); 
        
        return view ('characters', ['characters'=>$characters]);
    }
    
    public function addCharacter(){
        $illustrators= Illustrator::all()->sortBy('name'); 
        return view ('addCharacter', ['illustrators'=>$illustrators]);
    }

    public function modifyCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $illustrators = Illustrator::all()->sortBy('name');
        return view('editCharacter', ['character' => $character ,'illustrators' => $illustrators]);
    }

    //********************Illustrators***********************
    public function illustrators(){
        $illustrators= Illustrator::all(); 
        return view ('illustrators', ['illustrators'=>$illustrators]);
    }

    public function addIllustrator(){
        return view('addIllustrator');

    }
}
