@extends('layouts.home')

@section('content')
    <div class="header-top">
    </div>
    <div class="headertop1"></div>



    <div class="container">

        <div class="buyer-number">
            <div class="comprador">
                <p>NÚMERO DE <br> COMPRADOR</p>
            </div>
            <div class="numero">
                <p>10000</p>
            </div>
        </div>

        <div class="title">
            <p>Olá, </p>
            <a href="">SAIR</a>
        </div>
    </div>
    <div class="top mt-3">
        <div class="container">
            <div class="center">
                <div class="titulo">
                    <h1>ENCOMENDAS</h1>
                </div>
            </div>
            <div class="text-center">
                <div class="botao-voltar">
                    <button class="btn btn-voltar btn-lg">VOLTAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="top_1">
        <div class="container">
            <div class="center">
                <div class="titulo">
                    <h2>ENCOMENDAS</h2>
                </div>
                <div class="numero-pedido">
                    <h3>MTS - 1001 - 2407211726</h3>
                </div>
                <div class="aguardando-pagamento">
                    <h1>AGUARDANDO PAGAMENTO</h1>
                </div>
            </div>
            <div class="text-center">
                <div class="botao-ver-detalhes">
                    <button class="btn btn-detalhes btn-lg">VER DETALHES</button>
                </div>
            </div>
        </div>
    </div>


@endsection
