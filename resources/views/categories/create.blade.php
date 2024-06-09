<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une catégorie</title>
</head>
<body>
    
    <h1>Ajouter une catégorie</h1>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="libelle">Libellé :</label>
            <input type="text" name="libelle" id="libelle" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</body>
</html>
