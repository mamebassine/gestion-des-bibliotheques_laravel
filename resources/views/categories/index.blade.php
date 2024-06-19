<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des catégories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-outline-primary, .btn-outline-danger {
            border: 1px solid;
            padding: 5px 10px;
            font-size: 14px;
            margin-left: 10px;
        }

        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }

        .table-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions {
            margin-top: auto; /* Espacement en haut automatique */
            display: flex; /* Utiliser Flexbox */
            justify-content: space-between; /* Espacement entre les boutons */
            border-radius: 4px; /* Bordure arrondie */
            
           
        }
    </style>
</head>
<body>
    <h1>Liste des catégories</h1>
    
    <div class="table-container">
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une catégorie</a>

        @if ($categories->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->libelle }}</td>
                            <td>{{ $category->description }}</td>
                            <td class="actions">
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune catégorie n'a été trouvée.</p>
        @endif
        <a href="{{ route('livres.index') }}" class="btn btn-primary">Retour à la liste</a>
    </div>
</body>
</html>
