@extends('layout')

@section('title', 'Carrinho')
@section('content')
<div class="container my-5">
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="fw-bold m-0">Meu Carrinho</h2>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{route('gamesPage')}}">
                <button class="btn btn-outline-success text-bg-primary" style="background: #123A8C">Continuar Comprando</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card p-4 mb-3 border-0" style="background: #123A8C">
                <div class="row">
                    <div class="col-lg-8" >
                        <h3 class="mb-3 text-white">Pedido</h3>
                    </div>
                    <div class="col-auto ms-auto">
                        <a class="text-decoration-none text-white" href="#">Limpar Carrinho</a>
                    </div>
                </div>
                    <hr>
                <div class="d-flex justify-content-between pb-2 mb-3">
                    <strong class="text-white">qtd</strong>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-8 justify-content-between ">
                        <h3 class="text-white">Subtotal</h3>
                    </div>
                    <div class="col-auto ms-auto">
                        <span class="text-white">Total</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm p-4 mb-3 border-0" style="background: #123A8C">
                <h3 class="mb-3 text-white">Resumo do Pedido</h3>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-white">Subtotal</span>

                        </div>
                    </div>

                    <div class="col-auto ms-auto">
                        <span class="text-white">Valor</span>
                    </div>
                </div>

                <hr>
                <div class="d-flex justify-content-between fw-bold mb-3">
                    <span class="text-white">Total</span>

                </div>
                <a href="#">
                    <button class="btn btn-success w-100 text-bg-primary border-0" style="background: #28A745">Finalizar Compra</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
