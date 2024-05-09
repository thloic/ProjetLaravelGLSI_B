<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Universités</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Universités</h2>
        <form method="POST" action="{{ route('submitRatings') }}">
            @csrf
            <div class="row">
                @foreach ($universites as $universite)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($universite->logo)
                            <img src="{{ asset('storage/logos/' . $universite->logo) }}" alt="{{ $universite->name }}" class="w-full h-40 object-cover mx-auto mb-4 rounded-md">
                        @else
                            <div class="w-full h-40 bg-gray-200"></div>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $universite->name }}</h5>
                            <p class="card-text">Site Web: <a href="{{ $universite->website }}" target="_blank">{{ $universite->website }}</a></p>
                            @foreach ($criteres as $critere)
                                <div class="form-group">
                                    <label for="rating{{ $universite->id }}{{ $critere->id }}">{{ $critere->name }}</label>
                                    <select class="form-control" id="rating{{ $universite->id }}{{ $critere->id }}" name="ratings[{{ $universite->id }}][{{ $critere->id }}]">
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label for="comment{{ $universite->id }}">Commentaire</label>
                                <textarea class="form-control" id="comment{{ $universite->id }}" name="comments[{{ $universite->id }}]" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Déplacer la vérification de session ici -->
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('submit') }}">
            @csrf
                <button type="submit" class="btn btn-primary mt-3">Valider</button>
            </form>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
