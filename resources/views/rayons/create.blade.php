<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter d'un rayon</title>
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
            background-color: #007bff;
            border: 1px solid #007bff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ajouter d'un rayon</h1>
        <form action="{{ route('rayons.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="libelle">Libelle:</label>
                <input type="text" class="form-control" id="libelle" name="libelle" required>
            </div>
            <div class="form-group">
                <label for="partie">Partie:</label>
                <input type="text" class="form-control" id="partie" name="partie" required>
            </div>
            <button type="submit" class="btn">Soumettre</button>
        </form>
    </div>
</body>
</html>



















{{-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter d'un rayon</title>
</head>
<body>
    
    <h1>Ajouter d'un rayon</h1>
    
    <form action="{{ route('rayons.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="libelle">Libelle:</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="form-group">
            <label for="partie">Partie:</label>
            <input type="text" class="form-control" id="partie" name="partie" required>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
    

</body>
</html> --}}
