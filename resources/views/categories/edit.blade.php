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
    <h1>Modifier la catégorie</h1>
    
    <form action="{{ route('categories.update', $Categorie) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="libelle">Libellé :</label>
            <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $Categorie->libelle }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" id="description" class="form-control">{{ $Categorie->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection

</body>
</html>