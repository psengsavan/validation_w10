@extends('layouts.base')
@section('title', 'Ajouter un Dessinateur')
@section('css', 'add')

@section('content')
<h1>Ajouter un Dessinateur</h1>
<div class="form-wrapper">
    <form action="addArtist" method="post" class="lightgrey">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="birth_year">Année de naissance</label>
            <input type="number" min="1900" max="2021" name="birth_year" id="birth_year" required>

        </div>
        <div>
            <label for="nationality">Nationalité</label>
            <input type="text" name="nationality" id="nationality" required>
        </div>
        <div class="button">
            <input type="submit" value="Ajouter">
        </div>
    </form>
</div>
@endsection