<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des universités et critères</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Liste des universités et critères</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Université</th>
                    <th scope="col">Qualité de l'enseignement</th>
                    <th scope="col">Infrastructures</th>
                    <th scope="col">Insertion professionnelle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Université de Lomé</td>
                    <td>4</td>
                    <td>5</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>IAI-TOGO</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Université de Kara</td>
                    <td>5</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn">Retour au dashboard</button>
    </form>
</html>
