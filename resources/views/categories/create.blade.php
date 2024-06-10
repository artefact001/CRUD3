@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Ajouter une Catégorie</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </div>
    </form>
</div>
@endsection

