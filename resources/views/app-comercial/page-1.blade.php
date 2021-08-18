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
                    <span>CADASTRO DE <br> COMPRADOR</span>
                </div>
            </div>
        </div>
    </header>
    <div class="cadastros">
        <div class="individual">
            <a href="">
                <img src="assets/img/individual.png" alt="">
                <h1>INDIVIDUAL</h1>
            </a>
        </div>
        <div class="coletivo">
            <a href="">
                <img src="assets/img/coletivo.png" alt="">
                <h1>COLETIVO</h1>
            </a>
        </div>
    </div>
@endsection
