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
                    <span>EXTRACTO <br> DETALHES</span>
                </div>
            </div>
        </div>
    </header>
    <div class="card-1">
        <h1>PEDIDO</h1>
        <div class="codigo">
            <p>MTS - 1001 - 2407211726</p>
        </div>
        <div class="aguardando-pay">
            <span>AGUARDANDO PAGAMENTO</span>
        </div>
    </div>
    <div class="card-2">
        <div class="container">
            <h1>MORADA DE ENTREGA</h1>
            <div class="endereco">
                <p>Av. da República 12394430-204 Vila Nova de Gaia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="titulo">
            <h1>TOTAL DO PEDIDO + ENTREGA</h1>
        </div>
    </div>
    <div class="total">
        <div class="container">
            <div class="total-itens">
                <div class="itens">
                    <h1>ITENS (03)</h1>
                </div>
                <div class="preco">
                    <h1>€ 95,00</h1>
                </div>
                <div class="adicionar">
                    <a href="">
                        <img src="assets/img/adicionar.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="titulo">
            <h1>QUANTO VOCÊ VAI RECEBER</h1>
        </div>
    </div>
    <div class="c-o">
        <div class="container">
            <div class="comissao">
                <div>
                    <h1>COMISSÃO 2%</h1>
                </div>
                <div>
                    <h1>€ 1,90</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="c-o">
        <div class="container">
            <div class="comissao">
                <div>
                    <h1>VALOR POR ITEM( 3 )</h1>
                </div>
                <div>
                    <h1>€ 3,00</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="c-o">
        <div class="container">
            <div class="comissao">
                <div>
                    <h1>BÔNUS</h1>
                </div>
                <div>
                    <h1>€ 5,00</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="total">
        <div class="container">
            <div class="total-itens">
                <div class="itens">
                    <h1>TOTAL</h1>
                </div>
                <div class="preco">
                    <h1>€ 9,90</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
