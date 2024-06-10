@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Liste des Catégories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une Catégorie</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->libelle }}</td>
                    <td>{{ $categorie->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-info">Détails</a>
                        <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" class="d-inline">
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
