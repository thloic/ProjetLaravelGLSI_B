<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Criteres</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4f46e5;
            color: #fff;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 8px 12px;
            background-color: #4f46e5;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>
    <h1>Liste des Critères</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($criteres as $critere)
            <tr>
                <td>{{ $critere->name }}</td>
                <td>{{ $critere->description }}</td>
                <td>
                    <!-- Ajoutez ici les boutons pour modifier et supprimer -->
                    <button class="btn">Modifier</button>
                    <form action="{{ route('critereDestroy', $critere->id) }}" method="post">
                        @csrf
                        @method('delete')

                            <button class="danger" type="submit">Supprimer</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn">Retour au dashboard</button>
    </form>
</body>
</html>
