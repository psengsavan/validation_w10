<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Artist;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }

    public function characters(){
        $characters = Character::all();
        return view('characters', ['characters' => $characters]);
    }
    public function character($id){
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }
    public function addCharacter(){
        $artists = Artist::all()->sortBy('name');
        return view('addCharacter', ['artists' => $artists]);
    }
    public function updateCharacter(Request $request){
        $character = Character::findOrFail($request->id);
        $artists = Artist::all()->sortBy('name');
        return view('updateCharacter', ['character' => $character, 'artists' => $artists]);
    }


    public function artists(){
        $artists = Artist::all();
        return view('artists', ['artists' => $artists]);
    }
    public function artist($id){
        $artist = Artist::findOrFail($id);
        return view('artist', ['artist' => $artist]);
    }
    public function addArtist(){
        return view('addArtist');
    }
    public function updateArtist(Request $request){
        $artist = Artist::findOrFail($request->id);
        return view('updateArtist', ['artist' => $artist]);
    }

}
