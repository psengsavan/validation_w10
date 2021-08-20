<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function addArtist(Request $request){
        $character = new Artist;
        $character->name = $request->name;
        $character->birth_year = $request->birth_year;
        $character->nationality = $request->nationality;
        $character->save();

        return redirect('artists');
    }

    public function deleteArtist(Request $request){
        $artist = Artist::findOrFail($request->id);
        $artist->delete();

        return redirect('artists');
    }

    public function updateArtist(Request $request){
        $artist = Character::findOrFail($request->id);
        $artist->name = $request->name;
        $artist->birth_year = $request->birth_year;
        $artist->nationality = $request->nationality;
        $artist->save();

        return redirect('artists');
    }
}
