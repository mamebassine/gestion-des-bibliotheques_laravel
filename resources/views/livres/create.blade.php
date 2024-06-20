
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un livre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" width="12" height="12" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.293 11.293a1 1 0 1 1 1.414-1.414L10 11.586l1.293-1.293a1 1 0 1 1 1.414 1.414l-2 2a1 1 0 0 1-1.414 0l-2-2z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            padding-right: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-outline-primary {
            background-color: transparent;
            color: #007bff;
            border: 1px solid #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
@section('content')
    <div class="container">
        <h1>Ajouter un livre</h1>
        <form action="{{ route('livres.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" value="{{ old('image') }}" required>
            </div>
            <div class="form-group">
                <label for="date_de_publication">Date de publication</label>
                <input type="date" name="date_de_publication" id="date_de_publication" class="form-control" value="{{ old('date_de_publication') }}" required>
            </div>
            <div class="form-group">
                <label for="nombre_de_page">Nombre de pages</label>
                <input type="number" name="nombre_de_page" id="nombre_de_page" class="form-control" value="{{ old('nombre_de_page') }}" required>
            </div>
            <div class="form-group">
                <label for="auteur">Auteur</label>
                <input type="text" name="auteur" id="auteur" class="form-control" value="{{ old('auteur') }}" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" id="isbn" class="form-control" value="{{ old('isbn') }}" required>
            </div>
            <div class="form-group">
                <label for="editeur">Editeur</label>
                <input type="text" name="editeur" id="editeur" class="form-control" value="{{ old('editeur') }}" required>
            </div>

            <div class="form-group">
                <label for="id_rayon">Rayon</label>
                <select name="id_rayon" id="id_rayon" class="form-control" required>
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}">{{ $rayon->libelle }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="id_categorie">Catégorie</label>
                <select name="id_categorie" id="id_categorie" class="form-control" required>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
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
    

@section('content')
    <h1>Ajouter un livre</h1>
    <form action="{{ route('livres.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ old('image') }}" required>
        </div>
        <div class="form-group">
            <label for="date_de_publication">Date de publication</label>
            <input type="date" name="date_de_publication" id="date_de_publication" class="form-control" value="{{ old('date_de_publication') }}" required>
        </div>
        <div class="form-group">
            <label for="nombre_de_page">Nombre de pages</label>
            <input type="number" name="nombre_de_page" id="nombre_de_page" class="form-control" value="{{ old('nombre_de_page') }}" required>
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur" class="form-control" value="{{ old('auteur') }}" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ old('isbn') }}" required>
        </div>
        <div class="form-group">
            <label for="editeur">Editeur</label>
            <input type="text" name="editeur" id="editeur" class="form-control" value="{{ old('editeur') }}" required>
        </div>
        <div class="form-group">
            <label for="id_rayon">Rayon</label>
            <select name="id_rayon" id="id_rayon" class="form-control" required>
                @foreach ($rayons as $rayon)
                    <option value="{{ $rayon->id }}">{{ $rayon->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_categorie">Catégorie</label>
            <select name="id_categorie" id="id_categorie" class="form-control" required>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>


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

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION BIBLIOTHÈQUE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter un livre</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/ajouter/livre-traitement" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titre">Titre:</label>
                                <input type="text" id="titre" name="titre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date_publication">Date de la publication:</label>
                                <input type="date" id="date_publication" name="date_publication" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nombre_page">Nombre de page:</label>
                                <input type="number" id="nombre_page" name="nombre_page" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="auteur">Auteur:</label>
                                <input type="text" id="auteur" name="auteur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN:</label>
                                <input type="text" id="isbn" name="isbn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="editeur">Editeur:</label>
                                <input type="text" id="editeur" name="editeur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Photo de couverture:</label>
                                <input type="text" id="image" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="disponibilite">Est-il disponible?</label>
                                <select id="disponibilite" name="disponibilite" class="form-control" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categorie_id">Categorie:</label>
                                <select id="categorie_id" name="categorie_id" class="form-control">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rayon_id">Section:</label>
                                <select id="rayon_id" name="rayon_id" class="form-control">
                                    @foreach ($rayons as $rayon)
                                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->section }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rayon_id">Partie:</label>
                                <select id="rayon_id" name="rayon_id" class="form-control">
                                    @foreach ($rayons as $rayon)
                                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->partie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <br>
                            <br>
                            <a href="/livres" class="btn btn-outline-primary btn-sm">Retour</a>
                        </form>







   


    {{-- <h1>Ajouter un Livre</h1>
    <form action="{{ route('livres.store') }}" method="POST">
        @csrf
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="titre">

        <label for="image">Image (URL)</label>
        <input type="text" name="image">

        <label for="date_de_publication">Date de Publication</label>
        <input type="date" name="date_de_publication" required>

        <label for="nombre_de_pages">Nombre de Pages</label>
        <input type="number" name="nombre_de_pages" required>

        <label for="auteur">Auteur</label>
        <input type="text" name="auteur" required>

        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" required>

        <label for="editeur">Éditeur</label>
        <input type="text" name="editeur" required>
        <button type="submit">Ajouter</button>
    </form> --}}

  --}}
