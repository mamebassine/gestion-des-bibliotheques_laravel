<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des bibliothèque</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Police du texte */
            margin: 0; /* Enlever les marges par défaut */
            background-color: #f4f4f4; /* Couleur de fond */
        }

        .container {
            max-width: 1200px; /* Largeur maximale du conteneur */
            margin: 0 auto; /* Centrer le conteneur */
            padding: 20px; /* Espacement interne */
        }

        header {
            background-color: #6e7c8b; /* Couleur de fond de l'en-tête */
            padding: 35px 0; /* Espacement interne */
            color: rgb(255, 255, 255); /* Couleur du texte */
            display: flex; /* Utiliser Flexbox */
            justify-content: space-between; /* Espacement entre les éléments */
            align-items: center; /* Aligner les éléments au centre */
        }

        .logo {
            display: flex; /* Utiliser Flexbox */
            align-items: center; /* Aligner les éléments au centre */
            padding-left: 20px; /* Espacement à gauche */
        }

        .logo img {
            max-width: 50px; /* Largeur maximale de l'image */
            margin-right: 10px; /* Espacement à droite */
        }

        nav {
            display: flex; /* Utiliser Flexbox */
            justify-content: center; /* Centrer les éléments */
            flex-grow: 1; /* Permet à l'élément de croître */
        }

        nav a {
            color: white; /* Couleur du texte */
            text-decoration: none; /* Enlever la décoration de texte */
            padding: 10px 30px; /* Espacement interne */
        }

        nav a:hover {
            background-color: #495057; /* Couleur de fond au survol */
        }

        .banner {
            background-image: url('images/image13.jpg'); /* Image de fond */
            background-size: cover; /* Couvrir toute la surface */
            background-position: center; /* Centrer l'image */
            padding: 80px 20px; /* Espacement interne (réduit de 400px à 200px) */
            color: white; /* Couleur du texte */
            text-align: center; /* Texte centré */
            margin-bottom: 20px; /* Espacement en bas */
            opacity: 70px;
        }

        .banner h1 {
            margin-top: -10px; /* Espacement en haut */
            margin-bottom: 0; /* Enlever l'espacement en bas */
            font-size: 50px; /* Taille de la police */
            text-align: center; /* Texte centré */
            opacity: 14px;
        }

        .banner p {
            font-size: 23px; /* Taille de la police */
            margin-top: 109px; /* Espacement en haut */
            margin-bottom: 2px; /* Espacement en bas */
            line-height: 1.25; /* Hauteur de ligne */
            max-width: 800px; /* Largeur maximale */
            margin: 5px auto 0 auto; /* Centrer avec un peu d'espacement */
            opacity: 14px;
        }

        footer {
            background-color: #6e7c8b; /* Couleur de fond */
            color: white; /* Couleur du texte */
            text-align: center; /* Texte centré */
            padding: 20px 0; /* Espacement interne */
            /*position: fixed; /* Position fixe */
            bottom: 0; /* Placer en bas */
            width: 100%; /* Largeur totale */
        }

        .card {
            background-color: #ffffff; /* Couleur de fond */
            border-radius: 8px; /* Bordure arrondie */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ombre */
            margin-bottom: 20px; /* Espacement en bas */
            overflow: hidden; /* Cacher le débordement */
            width: 100%; /* Largeur totale */
            max-width: 300px; /* Largeur maximale */
        }

        .card-body {
            padding: 15px; /* Espacement interne */
            display: flex; /* Utiliser Flexbox */
            flex-direction: column; /* Orientation verticale */
            justify-content: space-between; /* Espacement entre les éléments */
        }

        .card-title {
            font-size: 18px; /* Taille de la police */
            margin-bottom: 10px; /* Espacement en bas */
            color: #333333; /* Couleur du texte */
        }

        .card-text {
            color: #666666; /* Couleur du texte */
        }

        .card-img {
            width: 100%; /* Largeur totale */
            height: 150px; /* Hauteur */
            object-fit: cover; /* Couvrir toute la surface */
        }

        .btn-group {
            margin-top: auto; /* Espacement en haut automatique */
            display: flex; /* Utiliser Flexbox */
            justify-content: space-between; /* Espacement entre les boutons */
        }

        .btn {
            padding: 8px 12px; /* Espacement interne */
            font-size: 14px; /* Taille de la police */
            border-radius: 4px; /* Bordure arrondie */
            transition: background-color 0.3s ease; /* Transition de la couleur de fond */
            text-decoration: none; /* Enlever la décoration de texte */
            color: white; /* Couleur du texte */
        }

        .btn-primary {
            background-color: #2f9ffb; /* Couleur de fond */
        }

        .btn-primary:hover {
            background-color: #e0a800; /* Couleur de fond au survol */
        }

        .btn-info {
            background-color: #9dc5f7f1; /* Couleur de fond */
        }

        .btn-info:hover {
            background-color: #e0a800; /* Couleur de fond au survol */
        }

        .btn-warning {
            background-color: #9dc5f7f1; /* Couleur de fond */
            color: white; /* Couleur du texte */
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Couleur de fond au survol */
        }

        .btn-danger {
            background-color: #dc3545; /* Couleur de fond */
        }

        .btn-danger:hover {
            background-color: #f5c7cb; /* Couleur de fond au survol */
        }

        .row {
            display: flex; /* Utiliser Flexbox */
            flex-wrap: wrap; /* Permettre le retour à la ligne */
            gap: 20px; /* Espacement entre les éléments */
            justify-content: space-around; /* Espacement entre les éléments */
        }

        .header-container {
            display: flex; /* Utiliser Flexbox */
            justify-content: space-between; /* Espacement entre les éléments */
            align-items: center; /* Aligner les éléments au centre */
            margin-bottom: 20px; /* Espacement en bas */
        }

        .header-container h1 {
            flex-grow: 1; /* Permet à l'élément de croître */
            text-align: center; /* Texte centré */
            margin: 0; /* Enlever les marges */
        }

        .header-container .btn-primary {
            margin-left: 0; /* Enlever l'espacement à gauche */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="path/to/your/logo.png" alt="Logo"> <!-- Logo de la bibliothèque -->
        </div>
        <nav>
            <a href="{{ route('livres.index') }}">Accueil</a> <!-- Lien vers la page d'accueil -->
            <a href="{{ route('categories.index') }}">Catégories</a> <!-- Lien vers les catégories -->
            <a href="{{ route('rayons.index') }}">Rayons</a> <!-- Lien vers les rayons -->
             <a href="{{ route('administrateurs.login') }}">Connexion</a> <!-- Lien vers les rayons -->
             {{-- <a href="{{ route('logout') }}">Deconnexion</a> <!-- deconnexion -->  --}}
             

             {{-- @auth
                <a href="{{ route('logout') }}">Déconnexion</a> <!-- Lien de déconnexion -->
            @else
                <a href="{{ route('administrateurs.login') }}">Connexion</a> <!-- Lien de connexion -->
            @endauth --}}
           
        
            
        </nav>
    </header>

    <div class="banner">
        <h1>Bienvenue à la Bibliothèque</h1> <!-- Titre de la bannière -->
        <p>Explorez notre vaste collection de livres couvrant divers genres et sujets. Que vous soyez un passionné de fiction, un amateur de non-fiction, ou en quête de ressources académiques, notre bibliothèque a quelque chose à offrir à chaque lecteur. Plongez dans le monde des livres et découvrez des trésors littéraires qui éveilleront votre imagination et enrichiront vos connaissances.</p> <!-- Description de la bibliothèque -->
    </div>
<h1>Liste des livres</h1> 
<div class="container">
    <div class="header-container">
       
        <form action="{{ route('livres.recherche') }}" method="GET">  <!-- recherche livre-->
            <input type="text" name="query" placeholder="Entrez le titre du livre" required>
            <button type="submit">Rechercher</button>
        </form>

</div>

<div class="row">
     @foreach ($livres as $livre)
            <div class="card">
                <img src="{{ $livre->image }}" alt="{{ $livre->titre }}" class="card-img"> <!-- Image du livre -->
                <div class="card-body">
                    <h2 class="card-title">Titre: {{ $livre->titre }}</h2> <!-- Titre du livre -->
                    <p class="card-text"><strong>Auteur: </strong> {{ $livre->auteur }}</p> <!-- Auteur du livre -->
                    <p class="card-text"><strong>ISBN: </strong> {{ $livre->isbn }}</p> <!-- ISBN du livre -->
                    <p class="card-text"><strong>Editeur: </strong> {{ $livre->editeur }}</p> <!-- Éditeur du livre -->
                    <p class="card-text"><strong>Rayon: </strong> {{ $livre->rayon->partie }}</p> <!-- Rayon du livre -->
                    <p class="card-text"><strong>Catégorie: </strong> {{ $livre->categorie->libelle}}</p> <!-- Catégorie du livre -->
                    <div class="btn-group">
                        <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info">Voir</a> <!-- Bouton pour voir le livre -->
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning">Modifier</a> <!-- Bouton pour modifier le livre -->
                        <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button> <!-- Bouton pour supprimer le livre -->
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>

    <footer>
        <p>&copy; 2024 Bibliothèque. Tous droits réservés.</p> <!-- Texte du pied de page -->
    </footer>
</body>
</html>
