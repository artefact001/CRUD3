@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Modifier le Rayon</h1>
    <form action="{{ route('rayons.update', $rayon->id) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $rayon->libelle }}" required>
        </div>
        <div class="col-md-12">
            <label for="partie" class="form-label">Partie</label>
            <input type="text" class="form-control" id="partie" name="partie" value="{{ $rayon->partie }}" required>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">Mettre à Jour</button>
        </div>
    </form>
</div>
@endsection
