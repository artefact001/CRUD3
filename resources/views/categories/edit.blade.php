@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Modifier la Catégorie</h1>
    <form action="{{ route('categories.update', $categorie->id) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $categorie->libelle }}" required>
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $categorie->description }}</textarea>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">Mettre à Jour</button>
        </div>
    </form>
</div>
@endsection
