@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Détails du Rayon</h1>
    <div class="card">
        <div class="card-header">
            {{ $rayon->libelle }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Partie: </strong>{{ $rayon->partie }}</p>
            <a href="{{ route('rayons.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection

