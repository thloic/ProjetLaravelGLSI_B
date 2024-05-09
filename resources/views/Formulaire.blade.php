<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Création d'Université</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="file"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      background-color: #007bff;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Création d'Université</h2>

    <form action="{{route('FormulaireSave')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="universityName">Nom de l'Université:</label>
        <input type="text" id="universityName" name="name" required>
      </div>
      <div class="form-group">
        <label for="websiteLink">Lien du site web:</label>
        <input type="text" id="websiteLink" name="website" required>
      </div>
      <div class="form-group">
        <label for="image-upload" class="cursor-pointer flex items-center">Logo de l'Université:</label>
        <input type="file" name="logo" id="image-upload" class="form-control-file" accept="image/*" required onchange="previewImage(event)">
    </div>

      <!-- Bouton de soumission du formulaire principal -->
      <form action="{{ route('listUniv') }}" method="GET">
                <button type="submit" class="btn">Créer l'Université</button>
        </form>
    </form>
  </div>
  <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn">Retour au dashboard</button>
    </form>

</body>

</html>
