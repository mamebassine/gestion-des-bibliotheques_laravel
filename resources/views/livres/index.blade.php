<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliothèque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #6e7c8b;
            padding: 35px 0;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            padding-left: 20px;
        }

        .logo img {
            max-width: 50px;
            margin-right: 10px;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 30px; /* Augmenté de 20px à 30px */
        }

        nav a:hover {
            background-color: #495057;
        }

        .banner {
            background-image: url('images/image2.jpeg');
            background-size: cover;
            background-position: center;
            padding: 400px 20px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
            opacity: 300px;
        }

        .banner h1 {
    
    
margin-top: -10px; /* Augmentation de l'espace en haut */
margin-bottom: 0; /* Réduire l'espace en bas */
    font-size: 50px;
    text-align: center;
}

.banner p {
    font-size: 23px;
    
    
margin-top: 109px;
    margin-bottom: 2px; /* Ajout d'un peu d'espace en bas */
    
line-height: 1.25;
    max-width: 800px;
    margin: 5px auto 0 auto;
}


        footer {
            background-color: #6e7c8b;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            width: 100%;
            max-width: 300px;
        }

        .card-body {
            padding: 15px;
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
            height: 150px;
            object-fit: cover;
        }

        .btn-group {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: white;
        }

        .btn-primary {
            background-color: #2f9ffb;
        }

        .btn-primary:hover {
            background-color: #e0a800;
        }

        .btn-info {
            background-color: #9dc5f7f1;
        }

        .btn-info:hover {
            background-color: #e0a800;
        }

        .btn-warning {
            background-color: #9dc5f7f1;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #f5c7cb;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header-container h1 {
            flex-grow: 1;
            text-align: center;
            margin: 0;
        }

        .header-container .btn-primary {
            margin-left: 0;
        }
        

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="path/to/your/logo.png" alt="Logo">
        </div>
        <nav>
            <a href="{{ route('livres.index') }}">Accueil</a>
            <a href="{{ route('categories.index') }}">Catégories</a>
            <a href="{{ route('rayons.index') }}">Rayons</a>
        </nav>
    </header>

    <div class="banner">
        <h1>Bienvenue à la Bibliothèque</h1>
        <p>Explorez notre vaste collection de livres couvrant divers genres et sujets. Que vous soyez un passionné de fiction, un amateur de non-fiction, ou en quête de ressources académiques, notre bibliothèque a quelque chose à offrir à chaque lecteur. Plongez dans le monde des livres et découvrez des trésors littéraires qui éveilleront votre imagination et enrichiront vos connaissances.</p>
        
    </div>

    <div class="container">
        <div class="header-container">
            <a href="{{ route('livres.create') }}" class="btn btn-primary">Ajouter un livre</a>
            <h1>Liste des livres</h1>
        </div>
        <div class="row">
            @foreach ($livres as $livre)
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
            @endforeach
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bibliothèque. Tous droits réservés.</p>
    </footer>
</body>
</html>
