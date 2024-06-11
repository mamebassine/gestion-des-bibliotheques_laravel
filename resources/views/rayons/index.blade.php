{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des rayons</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('rayons.create') }}" class="btn btn-primary mb-3">Ajouter un rayon</a>

    @if ($rayons->count() > 0)
        <ul class="list-group">
            @foreach ($rayons as $rayon)
                <li class="list-group-item">
                    {{ $rayon->libelle }} - {{ $rayon->partie }}
                    <a href="{{ route('rayons.edit', $rayon) }}" class="btn btn-sm btn-outline-primary float-right mr-2">Modifier</a>
                    <form action="{{ route('rayons.destroy', $rayon) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rayon ?')">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun rayon n'a été trouvé.</p>
    @endif

</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        .list-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 0;
            list-style: none;
        }

        .list-group-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: calc(100% / 3 - 40px);
            box-sizing: border-box;
            position: relative;
        }

        .list-group-item h2 {
            margin: 0;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .list-group-item p {
            margin: 0;
            margin-bottom: 10px;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Liste des rayons</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('rayons.create') }}" class="btn btn-primary mb-3">Ajouter un rayon</a>

    @if ($rayons->count() > 0)
        <ul class="list-group">
            @foreach ($rayons as $rayon)
                <li class="list-group-item">
                    <h2>{{ $rayon->libelle }}</h2>
                    <p>Partie: {{ $rayon->partie }}</p>
                    <div class="button-group">
                        <a href="{{ route('rayons.edit', $rayon) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
                        <form action="{{ route('rayons.destroy', $rayon) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rayon ?')">Supprimer</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun rayon n'a été trouvé.</p>
    @endif

</body>
</html>
