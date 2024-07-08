<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <style>
        /* Style global pour le corps de la page */
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Couleur de fond */
        }

        /* Style pour la barre de navigation verticale */
        .navbar-vertical {
            width: 200px; /* Largeur réduite */
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #003366;
            padding-top: 10px; /* Espacement réduit en haut */
            color: white;
            overflow-y: auto; /* Permet le défilement si nécessaire */
        }

        /* Style pour les liens de la navbar */
        .navbar-vertical a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
        }

        /* Effet au survol des liens de la navbar */
        .navbar-vertical a:hover {
            background-color: #0056b3;
        }

        /* Style pour le conteneur du contenu principal */
        .content {
            margin-left: 250px; /* Marge ajustée pour laisser de l'espace à la navbar */
            padding: 30px;
            width: calc(100% - 200px);
        }

        /* Style pour le conteneur des cartes */
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px; /* Espacement accru entre les cartes */
        }

        /* Style pour chaque carte */
        .card {
            width: 200px;
            height: 200px;
            background-color: #ffffff;
            border-radius: 50%; /* Changement en forme de cercle */
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Style pour le titre de la carte */
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style pour le pourcentage */
        .percentage {
            font-size: 24px;
            font-weight: bold;
            color: #003366; /* Couleur principale */
        }

        /* Style pour le bouton Ajouter un livre */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #003366;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }

        /* Effet au survol du bouton */
        .btn:hover {
            background-color: #002244;
        }

        /* Style pour le titre principal */
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #003366; /* Couleur principale */
        }
    </style>
</head>
<body>
    <!-- Navbar verticale -->
    <nav class="navbar-vertical">
        <div>
            <!-- Liens de navigation -->
            <a class="navbar-brand" href="#">Ma Bibliothèque</a>
            <a class="nav-link" href="{{ route('livres.index') }}">Accueil</a>
            <a class="nav-link" href="{{ route('administrateurs.login') }}">Connexion</a>
            <a class="nav-link" href="{{ route('livres.create') }}">Ajouter un livre</a>
            <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="content">
        <section>
            <h1>Bienvenue dans le tableau de bord</h1>
            
            <!-- Conteneur des cartes -->
            <div class="card-container">
                <!-- Carte Livres ajoutés -->
                <div class="card">
                    <div class="card-title">Livres ajoutés</div>
                    <div class="percentage">75%</div>
                </div>
    
                <!-- Carte Catégories -->
                <div class="card">
                    <div class="card-title">Catégories</div>
                    <div class="percentage">60%</div>
                </div>
    
                <!-- Carte Rayons -->
                <div class="card">
                    <div class="card-title">Rayons</div>
                    <div class="percentage">85%</div>
                </div>
    
                <!-- Carte Autre statistique -->
                <div class="card">
                    <div class="card-title">Autre statistique</div>
                    <div class="percentage">45%</div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
