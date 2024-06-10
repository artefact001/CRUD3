@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Détails du Livre</h1>
    <div class="card">
        <div class="card-header">
            {{ $livre->titre }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Auteur: </strong>{{ $livre->auteur }}</p>
            <p class="card-text"><strong>ISBN: </strong>{{ $livre->isbn }}</p>
            <p class="card-text"><strong>Editeur: </strong>{{ $livre->editeur }}</p>
            <p class="card-text"><strong>Rayon: </strong>{{ $livre->rayon->libelle }}</p>
            <p class="card-text"><strong>Catégorie: </strong>{{ $livre->categorie->libelle }}</p>
            <p class="card-text"><strong>Date de Publication: </strong>{{ $livre->date_de_publication }}</p>
            <p class="card-text"><strong>Nombre de Pages: </strong>{{ $livre->nombre_de_pages }}</p>
            @if ($livre->image)
                <p class="card-text"><strong>Image: </strong></p>
                <img src="{{ asset('storage/' . $livre->image) }}" alt="{{ $livre->titre }}" class="img-fluid">
            @endif
            <a href="{{ route('livres.index') }}" class="btn btn-secondary mt-3">Retour</a>
        </div>
    </div>
</div>
@endsection
