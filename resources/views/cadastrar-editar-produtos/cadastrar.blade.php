@extends('layouts.index')

@section('content')
    <div class="top_1">
        <div class="nome-porto">
            <h1>ENDEREÇO</h1>
        </div>
    </div>
    <div class="botao-v">
        <a class="btn btn-voltar" href="">VOLTAR</a>
    </div>
    <div class="container">
        <div class="mt-5 mb-5 text-center">
            <div>
                <h2 class="titulo">MORADA ATUAL</h2>
            </div>
            <div class="endereco">
                <p>Você ainda não tem uma morada cadastrada</p>
                <div class="mt-3">
                    <button class="btn btn-cadastrar-morada">CADASTRAR MORADA</button>
                </div>
            </div>
        </div>
    </div>

    <div class="total">
        <div class="container">
            <div class="itens">
                <div>
                    <span>itens (10)</span>
                </div>
                <div>
                    <span>€200,00</span>
                </div>
            </div>
        </div>
        <div class="finalizar">
            <button>AVANÇAR</button>
        </div>
    </div>
@endsection
