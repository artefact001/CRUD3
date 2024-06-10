@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Détails de la Catégorie</h1>
    <div class="card">
        <div class="card-header">
            {{ $categorie->libelle }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Description: </strong>{{ $categorie->description }}</p>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
