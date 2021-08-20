@extends('layouts.base')
@section('title', 'Modifier un Dessinateur')
@section('css', 'add')

@section('content')
<h1>Modifier un Dessinateur</h1>
<div class="form-wrapper">
    <form action="updateArtist/{{ $artist->id }}" method="post" class="lightgrey">
        @csrf
        <input type="hidden" name="id" value="{{ $artist->id }}">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{ $artist->name }}">
        </div>
        <div>
            <label for="creation_year">Année de Naissance</label>
            <input type="text" name="birth_year" id="birth_year" value="{{ $artist->birth_year }}">
        </div>
        <div>
            <label for="nationality">Nationalité</label>
            <input type="text" name="nationality" id="nationality" value="{{ $artist->nationality }}">
        </div>
        <div class="button">
            <input type="submit" value="Enregistrer les modifications">
        </div>
    </form>
</div>
@endsection