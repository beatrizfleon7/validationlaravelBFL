<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Illustrator;

class ActionController extends Controller
{
    public function add_character(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->comic_name = $request->comic_name;
        $character->creation_year = $request->creation_year;
        $character->illustrator_id = $request->illustrator_id;
        $character->save();
        return redirect('/characters');
    }

    public function deleteCharacter(Request $request)
    {
       $character = Character::findOrFail($request->id);

       $character->delete();

       return redirect('/characters');

    }
    
    public function editCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->comic_name = $request->comic_name;
        $character->creation_year = $request->creation_year;
        $character->illustrator_id = $request->illustrator_id;
        $character->save();
        return redirect('/characters');

    }

    //********************Illustrators***********************

    public function  add_illustrator(Request $request)
    {
        $illustrator = new Illustrator;
        $illustrator->name = $request->name;
        $illustrator->birth_year = $request->birth_year;
        $illustrator->nationality = $request->nationality;
        $illustrator->save();
        return redirect('/illustrators');
    }

    public function deleteIllustrator(Request $request)
    {
       $illustrator = Illustrator::findOrFail($request->id);

       $illustrator->delete();

       return redirect('/illustrators');

    }

    
    
    
    
    
   

}
