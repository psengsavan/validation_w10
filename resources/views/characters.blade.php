@extends('layouts.base')
@section('title', 'Personnages')
@section('css', 'characters')

@section('content')
<h1>Liste des Personnages</h1>
<div class="lightgrey">
    <table>
        <thead>
            <th>Nom</th>
            <th>BD</th>
            <th>Année de création</th>
            <th>Dessinateur</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->comic_name }}</td>
                    <td>{{ $character->creation_year }}</td>
                    <td>{{ $character->artist->name }}</td> 
                    <td >
                        <form action="updateCharacter" method="post" class="edit">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="image" src="img/pen_icon.png" alt="Submit" width="20" height="20">
                        </form>
                    </td>
                    <td >
                        <form action="deleteCharacter" method="post" class="delete">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="image" src="img/trash_icon.png" alt="Submit" width="25" height="25">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection