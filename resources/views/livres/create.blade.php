
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
            background-color: #003366;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* .btn-primary:hover {
            background-color: #0056b3;
        } */

        .btn-outline-primary {
            background-color: transparent;
            color: #003366;
            border: 1px solid #003366;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-outline-primary:hover {
            background-color: #003366;
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








