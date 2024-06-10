@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Liste des Livres</h1>
    <a href="{{ route('livres.create') }}" class="btn btn-primary mb-3">Ajouter un Livre</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>ISBN</th>
                <th>Editeur</th>
                <th>Rayon</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livres as $livre)
                <tr>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->auteur }}</td>
                    <td>{{ $livre->isbn }}</td>
                    <td>{{ $livre->editeur }}</td>
                    <td>{{ $livre->rayon->libelle }}</td>
                    <td>{{ $livre->categorie->libelle }}</td>
                    <td>
                        <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info">Détails</a>
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
