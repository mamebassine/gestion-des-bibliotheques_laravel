<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container div {
            margin-bottom: 15px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #003366;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #002244;
        }
        .form-container p {
            text-align: center;
        }
        .form-container p a {
            color: #003366;
            text-decoration: none;
        }
        .form-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Connexion</h2>
        <form method="POST" action="{{ route('authenticate') }}">
            @csrf
            @method('POST')
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="mot_passe">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Connexion</button>
            <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
        </form>
    </div>
</body>
</html>
