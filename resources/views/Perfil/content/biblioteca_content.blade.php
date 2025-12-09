<div class="mb-5 text-center text-md-start">
    <h3 class="h3 mb-2">Minha Biblioteca</h3>
    <p class="text-muted">Seus jogos e conteúdos adquiridos</p>
</div>
<section class="game-strip">
    @foreach ($jogos as $jogo)

        <x-card-biblioteca
            :title="$jogo->nome_jogo"
            :plataform="$jogo->plataforma"
            :price="$jogo->valor"
            :img="$jogo->imagem ?? ('assets/images/defaultGame.jpg')"
        />

    @endforeach
</section>
