@extends('layouts.base')
@section('title', 'Artistes')
@section('css', 'characters')

@section('content')
<h1>Liste des Dessinateurs</h1>
<div class="lightgrey">
    <table>
        <thead>
            <th>Nom</th>
            <th>Année de naissance</th>
            <th>Nationalité</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->birth_year }}</td>
                    <td>{{ $artist->nationality }}</td>
                    <td >
                        <form action="updateArtist" method="post" class="edit">
                            @csrf
                            <input type="hidden" name="id" value="{{ $artist->id }}">
                            <input type="image" src="img/pen_icon.png" alt="Submit" width="20" height="20">
                        </form>
                    </td>
                    <td >
                        <form action="deleteArtist" method="post" class="delete">
                            @csrf
                            <input type="hidden" name="id" value="{{ $artist->id }}">
                            <input type="image" src="img/trash_icon.png" alt="Submit" width="25" height="25">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection