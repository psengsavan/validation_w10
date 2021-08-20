@extends('layouts.base')
@section('title', 'Ajouter un Personnage')
@section('css', 'add')

@section('content')
<h1>Ajouter un Personnage</h1>
<div class="form-wrapper">
    <form action="addCharacter" method="post" class="lightgrey">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
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
            <input type="number" name="creation_year" id="creation_year">
        </div>
        <div>
            <label for="comic_name">Nom de la BD</label>
            <input type="text" name="comic_name" id="comic_name">
        </div>
        <div class="button">
            <input type="submit" value="Ajouter">
        </div>
    </form>
</div>
@endsection