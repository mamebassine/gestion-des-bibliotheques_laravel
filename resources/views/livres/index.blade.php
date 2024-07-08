<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des bibliothèque</title>
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
            background-color: #003366;
            padding: 35px 0;
            color: #ffffff;
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
            padding: 10px 30px;
        }

        nav a:hover {
            background-color: #495057;
        }

        .banner {
            position: relative;
            background-image: url('images/bassine1.jpg');
            background-size: cover;
            padding: 250px 90px;
            background-color: rgba(0, 0, 0, 0.5);
           }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background-color: rgba(0, 0, 0, 0.5); Ajustez l'opacité selon vos besoins */
            z-index: 1;
        }

        .search-container {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            z-index: 2; /* Assurez-vous que le formulaire est au-dessus de l'overlay */
        }

        .search-container input {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .search-container .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            background-color: #003366;
            color: white;
            cursor: pointer;
        }

        .search-container .btn-primary:hover {
            background-color: #e0a800;
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
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
            background-color: #003366;
        }

        .btn-primary:hover {
            background-color: #e0a800;
        }

        .btn-info {
            background-color: #003366;
        }

        .btn-info:hover {
            background-color: #e0a800;
        }

        .btn-warning {
            background-color: #003366;
            color: white;
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
            justify-content: center;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header-container form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .titre1 {
            text-align: center;
            margin-bottom: 20px;
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
            <a href="{{ route('administrateurs.login') }}">Connexion</a>
        </nav>
    </header>

    <div class="banner">
        <div class="search-container">
            <form action="{{ route('livres.recherche') }}" method="GET">
                <input type="text" name="query" placeholder="Entrez le titre du livre" required>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>
        </div>
    </div>

    <h1 class="titre1">Liste des livres</h1>

    <div class="container">
        <div class="row">
            @foreach ($livres as $livre)
                <div class="card">
                    <img src="{{ $livre->image }}" alt="{{ $livre->titre }}" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Titre: {{ $livre->titre }}</h2>
                        <p class="card-text"><strong>Auteur: </strong> {{ $livre->auteur }}</p>
                        <p class="card-text"><strong>ISBN: </strong> {{ $livre->isbn }}</p>
                        <p class="card-text"><strong>Éditeur: </strong> {{ $livre->editeur }}</p>
                        <p class="card-text"><strong>Rayon: </strong> {{ $livre->rayon->partie }}</p>
                        <p class="card-text"><strong>Catégorie: </strong> {{ $livre->categorie->libelle }}</p>
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
