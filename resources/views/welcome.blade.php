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
                <div class="row g-0">
                    <div class="col-6 p-4">
                        <h2>Viaggia con noi</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione quaerat accusamus veniam
                            porro
                            asperiores aperiam distinctio magni cum aliquam, ab deserunt, voluptate fugit quam
                            recusandae rerum
                            molestias exercitationem adipisci tenetur? Et beatae repellendus ut voluptas porro aperiam,
                            adipisci
                            blanditiis mollitia maxime. Placeat commodi dolores accusamus veniam eaque illum laborum
                            exercitationem molestias ipsum.</p>
                        <button class="btn btn-danger" type="button">Scopi di più</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="container pt-3">

            @forelse($trains as $train)
            <div class="d-flex border-bottom pt-4">
                <div class="left d-flex justify-content-between">
                    <img src="https://assets.change.org/photos/4/ur/qz/PJurQzCeqciNvBO-800x800-noPad.jpg?1522795360"
                        alt="">

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
                <button class="acquista btn btn-danger ms-auto mt-auto mb-4" type="button">Acquista</button>
            </div>

            @empty
            <h3>No trains to show now</h3>
            @endforelse

        </div>
    </main>

</body>

</html>