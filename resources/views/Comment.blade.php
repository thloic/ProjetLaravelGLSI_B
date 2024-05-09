<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commentaires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Liste des commentaires</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Utilisateur</th>
                    <th scope="col">Université</th>
                    <th scope="col">Contenu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>thon</td>
                    <td>Universite de lome</td>
                    <td>j'adore cette universite</td>
                </tr>
                <tr>
                    <td>thon</td>
                    <td>IAI-TOGO</td>
                    <td>Quelle site web!!!</td>
                </tr>
                <tr>
                    <td>thon</td>
                    <td>Universite de kara</td>
                    <td>Assez interressant</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn">Retour au dashboard</button>
    </form>
</body>
</html>
