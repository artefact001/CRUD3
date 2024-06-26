

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Ajouter un Livre</h1>
    <form action="{{ route('livres.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="col-md-6">
            <label for="date_de_publication" class="form-label">Date de Publication</label>
            <input type="date" class="form-control" id="date_de_publication" name="date_de_publication" required>
        </div>
        <div class="col-md-6">
            <label for="nombre_de_pages" class="form-label">Nombre de Pages</label>
            <input type="number" class="form-control" id="nombre_de_pages" name="nombre_de_pages" required>
        </div>
        <div class="col-md-6">
            <label for="auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="auteur" name="auteur" required>
        </div>
        <div class="col-md-6">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="col-md-6">
            <label for="editeur" class="form-label">Editeur</label>
            <input type="text" class="form-control" id="editeur" name="editeur" required>
        </div>
        <div class="col-md-6">
            <label for="rayon_id" class="form-label">Rayon</label>
            <select class="form-control" id="rayon_id" name="rayon_id" required>
                @foreach($rayons as $rayon)
                    <option value="{{ $rayon->id }}">{{ $rayon->libelle }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="categorie_id" class="form-label">Catégorie</label>
            <select class="form-control" id="categorie_id" name="categorie_id" required>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </div>
    </form>
</div>
@endsection

