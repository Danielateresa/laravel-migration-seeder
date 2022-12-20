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
        <h1 class="text-center py-4 bg-white">Prossimi treni in partenza</h1>

        <div class="align-items-md-stretch">
            <div class="jumbo h-100 p-5 text-white">
                <h2>Viaggia con noi</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                    Then,
                    mix and match with additional component themes and more.</p>
                <button class="btn btn-danger" type="button">Example button</button>
            </div>
        </div>

        <div class="container pt-3">

            @forelse($trains as $train)
            <div class="d-flex border-bottom pt-4">
                <img src="https://assets.change.org/photos/4/ur/qz/PJurQzCeqciNvBO-800x800-noPad.jpg?1522795360" alt="">

                <div class="info ps-4 pb-4">
                    <h6><strong>Azienda: </strong>{{$train->azienda}}</h6>
                    <h6><strong>Parte da: </strong>{{$train->stazione_di_partenza}}</h6>
                    <h6><strong>Arrivo a: </strong>{{$train->stazione_di_arrivo}}</h6>
                    <h6><strong>Ora partenza: </strong>{{$train->orario_di_partenza}}</h6>
                    <h6><strong>Ora di arrivo: </strong>{{$train->orario_di_arrivo}}</h6>
                    <h6><strong>Codice: </strong>{{$train->codice_treno}}</h6>
                    <h6><strong>Numero carrozze: </strong>{{$train->numero_carrozze}}</h6>
                    @if($train->in_orario == 1)
                    <h6 class="text-success">Viaggia in orario</h6>
                    @else
                    <h6 class="text-danger">Previsto ritardo</h6>
                    @endif
                    @if($train->cancellato == 1)
                    <h6 class="text-danger">Treno cancellato</h6>
                    @else
                    <h6 class="text-success">Partenza confermata</h6>
                    @endif
                </div>
            </div>
            @empty
            <h3>No trains to show now</h3>
            @endforelse

        </div>
    </main>

</body>

</html>