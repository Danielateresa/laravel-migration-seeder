<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <h1>Trains info</h1>
        <div class="container">
            <div class="row">
                @forelse($trains as $train)
                <div class="col-4">
                    <div class="card p-2">
                        <img src="https://assets.change.org/photos/4/ur/qz/PJurQzCeqciNvBO-800x800-noPad.jpg?1522795360"
                            alt="">
                        <div class="card-body">
                            <h4><strong>Azienda: </strong>{{$train->azienda}}</h4>
                            <h4><strong>Parte da: </strong>{{$train->stazione_di_partenza}}</h4>
                            <h4><strong>Arrivo a: </strong>{{$train->stazione_di_partenza}}</h4>
                            <h4><strong>Ora partenza: </strong>{{$train->orario_di_partenza}}</h4>
                            <h4><strong>Ora di arrivo: </strong>{{$train->orario_di_arrivo}}</h4>
                            <h4><strong>Codice: </strong>{{$train->codice_treno}}</h4>
                            <h4><strong>Numero carrozze: </strong>{{$train->numero_carrozze}}</h4>
                            @if($train->in_orario == 1)
                            <h4>Viaggia in orario</h4>
                            @else
                            <h4>Previsto ritardo</h4>
                            @endif
                            @if($train->cancellato == 1)
                            <h4>Treno cancellato</h4>
                            @else
                            <h4>Partenza confermata</h4>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <h3>No trains to show now</h3>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>