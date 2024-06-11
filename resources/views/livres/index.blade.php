<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            
        }

        .card {
             background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: 500%;
            width: 400px;
        }

        .card-body {
            padding: 15px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333333;
        }

        .card-text {
            color: #666666;
        }

        .card-img {
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            object-fit: cover;
            height: 150px;
        }

        .btn-group {
            margin-top: auto;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            margin-left: 5px;
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            
            background-color: #2f9ffb;
            color: #ffffff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #d39e00;
        }

        .btn-info {
            background-color: #add2fa;
            color: #ffffff;
            border: none;
        }

        .btn-info:hover {
            background-color: #add2fa;
        }

        .btn-warning {
            background-color: #add2fa;
            color: #ffffff;
            border: none;
        }

        .btn-warning:hover {
            background-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des livres</h1>
        <a href="{{ route('livres.create') }}" class="btn btn-primary">Ajouter un livre</a>
        <div class="row">
            @foreach ($livres as $livre)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $livre->image }}" alt="{{ $livre->titre }}" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">{{ $livre->titre }}</h2>
                        <p class="card-text"><strong>Auteur:</strong> {{ $livre->auteur }}</p>
                        <p class="card-text"><strong>ISBN:</strong> {{ $livre->isbn }}</p>
                        <p class="card-text"><strong>Editeur:</strong> {{ $livre->editeur }}</p>
                        <p class="card-text"><strong>Rayon:</strong> {{ $livre->rayon->nom }}</p>
                        <p class="card-text"><strong>Catégorie:</strong> {{ $livre->categorie->nom }}</p>
                        <div class="btn-group">
                            <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>