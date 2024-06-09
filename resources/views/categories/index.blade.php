<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des catégories</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une catégorie</a>

    @if ($categories->count() > 0)
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item">
                    {{ $category->libelle }}
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-primary float-right mr-2">Modifier</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucune catégorie n'a été trouvée.</p>
    @endif

</body>
</html>
