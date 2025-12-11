@extends('layout')

@section('title', 'Catálogo')

@section('styles')

@endsection

@section('content')
<body>
    <div class="container mt-4">
        <h1>Catálogo</h1>

    </div>
    <section>
        <div class="container">

            <div class="row row-cols-md-3 p-4 ">
                @foreach ($jogos as $jogo)
                <div class="col-6 mb-3">
                    <x-card-catalogo
                    :id="$jogo->id_jogo"
                    :title="$jogo->nome_jogo"
                    :plataform="$jogo->plataforma"
                    :price="$jogo->final_price"
                    :original_price="$jogo->valor"
                    :discount="$jogo->discount"
                    :img="$jogo->imagem ?? asset('assets/images/defaultGame.jpg')"
                    />

                </div>
                @endforeach
            </div>
        </div>
    </section>

</body>

@endsection
