<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniRank Togo</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6; /* Ajout d'une couleur de fond */
            color: #4b5563; /* Couleur principale du texte */
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 0 20px;
            text-align: center;
        }
        .title {
            font-size: 3rem;
            font-weight: 700;
            margin-top: 3rem;
            margin-bottom: 1rem;
            color: #111827; /* Couleur du titre */
        }
        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            color: #6b7280; /* Couleur du sous-titre */
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4f46e5; /* Couleur du bouton */
            color: #fff; /* Couleur du texte du bouton */
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #4338ca; /* Couleur au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Bienvenue sur UniRank Togo</h1>
        <p class="subtitle">Votre guide pour explorer et évaluer les universités du Togo</p>
        @if (Route::has('login'))
            <div>
                @auth
                    <!-- Le bouton du tableau de bord est conditionnellement visible pour les utilisateurs authentifiés -->
                    @if(!Route::has('dashboard'))
                        <a href="{{ url('/dashboard') }}" class="btn">Tableau de bord</a>
                    @endif
                @else
                    <!-- Le bouton de connexion est toujours visible pour les utilisateurs non authentifiés -->
                    <a href="{{ route('login') }}" class="btn">Se connecter</a>
                    @if (Route::has('register'))
                        <!-- Le bouton d'inscription est toujours visible pour les utilisateurs non authentifiés -->
                        <a href="{{ route('register') }}" class="btn">S'inscrire</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
