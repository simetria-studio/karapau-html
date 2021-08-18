@extends('app-comercial.layouts.layout')

@section('content')
    <header>
        <div class="container">
            <div class="cabecalho">
                <a href="">
                    <img src="assets/img/voltar.png" alt="">
                    VOLTAR
                </a>
                <div>
                    <span>EXTRACTO</span>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="inicio">
            <div>
                <a class="btn btn-novos" href="">NOVOS</a>
            </div>
            <div>
                <a class="btn btn-concluido" href="">CONCLUÍDOS</a>
            </div>
        </div>
    </div>
    <div class="card">
        <h1>PEDIDO</h1>
        <div class="codigo">
            <p>MTS - 1001 - 2407211726</p>
        </div>
        <div class="aguardando-pay">
            <span>AGUARDANDO PAGAMENTO</span>
        </div>
        <div class="ver-detalhes">
            <button class="btn btn-success">VER DETALHES</button>
        </div>
    </div>
    <div class="card">
        <h1>PEDIDO</h1>
        <div class="codigo">
            <p>MTS - 1001 - 2407211726</p>
        </div>
        <div class="aguardando-pay">
            <span>AGUARDANDO PAGAMENTO</span>
        </div>
        <div class="ver-detalhes">
            <button class="btn btn-success">VER DETALHES</button>
        </div>
    </div>
    <div class="card">
        <h1>PEDIDO</h1>
        <div class="codigo">
            <p>MTS - 1001 - 2407211726</p>
        </div>
        <div class="aguardando-pay">
            <span>AGUARDANDO PAGAMENTO</span>
        </div>
        <div class="ver-detalhes">
            <button class="btn btn-success">VER DETALHES</button>
        </div>
    </div>
@endsection
