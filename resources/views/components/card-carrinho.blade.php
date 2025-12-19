@props([
'id',
'title' => 'Titulo do jogo',
'plataform' => 'Plataforma',
'price' => 0.00,
'original_price' => null,
'discount' => null,
'img' => asset('assets/images/defaultGame.jpg'),
])
<div class="card mb-3 rounded-lg hover-shadow border-0 d-flex flex-column" style="transition: all 0.3s ease-in-out;">
    <div class="d-flex align-items-start p-3 position-relative flex-grow-1">

        <img  class="rounded me-4 shadow-sm" style="width: 200px; height: 140px; object-fit: cover;" src="{{ $img }}"
            alt="{{$title}}" >
        <div class="flex-grow-1 d-flex flex-column ">

            <span class="mb-1 fw-bold text-dark fs-4">{{$title ?: 'Titulo do jogo'}}</span>
            <span class="small text-muted mb-0 fs-5">{{$plataform ?:'Plataforma'}}</span>

        </div>

        <div class="ms-3 d-flex flex-column align-items-end">
            <div class=" text-end">

                @if($original_price && $original_price > $price)
                <small class="text-muted text-decoration-line-through d-block fs-5">
                    R$ {{ number_format($original_price, 2, ',', '.') }}
                </small>
                @endif

                <div class="d-flex justify-content-between align-items-center ">

                    <span class="h5 mb-0 fw-bold text-success fs-4" >
                        R$ {{ number_format($price, 2, ',', '.') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 d-flex justify-content-end align-items-center ">
        <a href="{{ route('jogo.show', $id) }}"
                class="btn btn-sm btn-outline-primary rounded-pill px-3 btn-white-on-blue-hover me-2">
                    Ver
        </a>
        <form action="{{route('carrinho.remove', $id)}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger rounded-pill px-3">
                <i class="fa-solid fa-trash" style="color: white"></i>
                Remover
            </button>

        </form>
    </div>
</div>
