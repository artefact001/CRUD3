@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Liste des Rayons</h1>
    <a href="{{ route('rayons.create') }}" class="btn btn-primary mb-3">Ajouter un Rayon</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Partie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rayons as $rayon)
                <tr>
                    <td>{{ $rayon->libelle }}</td>
                    <td>{{ $rayon->partie }}</td>
                    <td>
                        <a href="{{ route('rayons.show', $rayon->id) }}" class="btn btn-info">Détails</a>
                        <a href="{{ route('rayons.edit', $rayon->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('rayons.destroy', $rayon->id) }}" method="POST" class="d-inline">
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
