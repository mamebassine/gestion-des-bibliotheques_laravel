<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier le rayon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: #343a40;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #495057;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: #003366;
            border: 1px solid #003366;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            text-decoration: none;
        }
        /* .btn:hover {
            background-color: #0056b3;
            border-color: #004085;
        } */
        .link {
            display: block;
            margin-bottom: 20px;
            text-align: center;
            color: #003366;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Modifier le rayon</h1>
        <a class="link" href="{{ route('rayons.edit', $rayon->id) }}">Modifier</a>
        <form action="{{ route('rayons.update', $rayon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="libelle">Libellé :</label>
                <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $rayon->libelle }}" required>
            </div>
            <div class="form-group">
                <label for="partie">Partie :</label>
                <input type="text" name="partie" id="partie" class="form-control" value="{{ $rayon->partie }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
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
    <title>Modifier le rayon</title>
</head>
<body>
    <h1>Modifier le rayon</h1>
    <a href="{{ route('rayons.edit', $rayon->id) }}">Edit</a>

    <form action="{{ route('rayons.update', $rayon->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="libelle">Libellé :</label>
            <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $rayon->libelle }}" required>
        </div>
        <div class="form-group">
            <label for="partie">Partie :</label>
            <input type="text" name="partie" id="partie" class="form-control" value="{{ $rayon->partie }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</body>
</html> --}}
