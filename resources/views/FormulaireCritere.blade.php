<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Critère</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        button {
            background-color: #4f46e5;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        button:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>
    <h1>Ajouter un Critère</h1>
    <div class="container">
    <form action="{{route('CritereSave')}}" method="POST">
    @csrf
            <label for="name" >Nom du Critère :</label>
            <input type="text"id="name" name="name" required>
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <button type="submit">Ajouter</button>
        </form>
    </div>
    <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn">Retour au dashboard</button>
    </form>
</body>
</html>
