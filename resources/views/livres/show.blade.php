<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $livre->titre }}</h2>
            </div>
            <div class="card-body">
                <img src="{{ $livre->image }}" alt="Image de {{ $livre->titre }}" class="img-fluid mb-3" style="max-width: 200px;">
                <p><strong>Date de publication :</strong> {{ $livre->date_de_publication }}</p>
                <p><strong>Nombre de pages :</strong> {{ $livre->nombre_de_page }}</p>
                <p><strong>Auteur :</strong> {{ $livre->auteur }}</p>
                <p><strong>ISBN :</strong> {{ $livre->isbn }}</p>
                <p><strong>Editeur :</strong> {{ $livre->editeur }}</p>
                <p><strong>Rayon :</strong> {{ $livre->rayon->nom }}</p>
                <p><strong>Catégorie :</strong> {{ $livre->categorie->nom }}</p>
                <a href="{{ route('livres.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>


</body>
</html>


















