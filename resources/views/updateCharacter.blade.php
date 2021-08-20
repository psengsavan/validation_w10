@extends('layouts.base')
@section('title', 'Modifier un Personnage')
@section('css', 'add')

@section('content')
<h1>Modifier un Personnage</h1>
<div class="form-wrapper">
    <form action="updateCharacter/{{ $character->id }}" method="post" class="lightgrey">
        @csrf
        <input type="hidden" name="id" value="{{ $character->id }}">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{ $character->name }}">
        </div>
        <div>
            <label for="author">Dessinateur</label>
            <select type="text" name="artist_id" id="artist_id" >
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="creation_year">Année de création</label>
            <input type="text" name="creation_year" id="creation_year" value="{{ $character->creation_year }}">
        </div>
        <div>
            <label for="comic_name">Nom de la BD</label>
            <input type="text" name="comic_name" id="comic_name" value="{{ $character->comic_name }}">
        </div>
        <div class="button">
            <input type="submit" value="Enregistrer les modifications">
        </div>
    </form>
</div>
@endsection