<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/livres/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $livre->titre }}</h1>
    <p><strong>Titre:</strong> {{ $livre->titre }}</p>
    <p><strong>Image:</strong> <img src="{{ $livre->image }}" alt="{{ $livre->titre }}"></p>
    <p><strong>Date de publication:</strong> {{ $livre->date_de_publication }}</p>
    <p><strong>Nombre de pages:</strong> {{ $livre->nombre_de_page }}</p>
    <p><strong>Auteur:</strong> {{ $livre->auteur }}</p>
    <p><strong>ISBN:</strong> {{ $livre->isbn }}</p>
    <p><strong>Editeur:</strong> {{ $livre->editeur }}</p>
    <p><strong>Rayon:</strong> {{ $livre->rayon->nom }}</p>
    <p><strong>Catégorie:</strong> {{ $livre->categorie->nom }}</p>
    <a href="{{ route('livres.index') }}" class="btn btn-secondary">Retour à la liste</a>
    <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
@endsection

</body>
</html>
































{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <h1>{{ $livre->titre }}</h1>
    <p><strong>Auteur:</strong> {{ $livre->auteur }}</p>
    <p><strong>Date de Publication:</strong> {{ $livre->date_de_publication }}</p>
    <p><strong>Nombre de Pages:</strong> {{ $livre->nombre_de_pages }}</p>
    <p><strong>Éditeur:</strong> {{ $livre->editeur }}</p>
    <p><strong>ISBN:</strong> {{ $livre->isbn }}</p>
    <p><strong>Catégorie:</strong> {{ $livre->categorie->nom }}</p>
    <p><strong>Rayon:</strong> {{ $livre->rayon->nom }}</p>
    @if($livre->image)
        <p><img src="{{ $livre->image }}" alt="{{ $livre->titre }}"></p>
    @endif
    <a href="{{ route('livres.index') }}">Retour à la liste</a>


</body>
</html> --}}