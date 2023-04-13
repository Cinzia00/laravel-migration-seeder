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
        <div class="container">
            <div class="row py-5 text-center">
                <h4 class="py-5">Elenco treni in partenza:</h4>
                @foreach($trains as $train)
                    <div class="col-3">
                        <h5>{{ $train->azienda }}</h5>
                        <p>Stazione di partenza: {{ $train->stazione_di_partenza }}</p>
                        <p>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</p>
                        <p>Data di partenza: {{ $train->orario_di_partenza }}</p>
                        <p>Numero totali posti: {{ $train->numero_totale_posti }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>


</html>