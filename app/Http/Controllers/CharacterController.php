<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class CharacterController extends Controller
{
    public function addCharacter(Request $request){
        $character = new Character;
        $character->name = $request->name;
        $character->artist_id = $request->artist_id;
        $character->creation_year = $request->creation_year;
        $character->comic_name = $request->comic_name;
        $character->save();

        return redirect('characters');
    }

    public function deleteCharacter(Request $request){
        $character = Character::findOrFail($request->id);
        $character->delete();

        return redirect('characters');
    }

    public function updateCharacter(Request $request){
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->artist_id = $request->artist_id;
        $character->creation_year = $request->creation_year;
        $character->comic_name = $request->comic_name;
        $character->save();

        return redirect('characters');
    }
}
