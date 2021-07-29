@extends('layouts.index')

@section('content')
    <div class="top_1">
        <div class="nome-porto">
            <h1>SARDINHA</h1>
        </div>
    </div>
    <div class="botao-v">
        <a class="btn btn-voltar" href="">VOLTAR</a>
    </div>
    <div class="container">
        <div class="detalhes mt-6 text-center">
            <div class="mb-5">

                <div class="porto">
                    <a href="#"> <img src="{{ url('assets/img/porto.png') }}" alt=""></a>
                </div>
                <div class="mt-2">
                    <h1>00:00:00</h1>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-in-geral" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    INFORMARÇÕES GERAIS
                </button>
                <div class="mt-3 precokg">
                    <span>€20,00 - KG</span>
                </div>
                <div class="mt-3 stock">
                    <h2>STOCK - 1170 KG</h2>
                </div>
                <div>
                    <span class="input-number-decrement">–</span>
                    <input class="input-number" type="number" value="1" min="0" max="10">
                    <span class="input-number-increment">+</span>
                </div>
                <div class="mt-3">
                    <button class="btn btn-comprar">COMPRAR</button>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title" id="exampleModalLabel">Informações Gerais</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="nome">
                                    <h1>SARDINHA</h1>
                                </div>
                                <div class="arte-pesca">
                                    <h4>ARTE DA PESCA</h4>
                                    <h6>REDE DE EMALHAR</h6>
                                </div>
                                <div class="tamanho">
                                    <h4>TAMANHO</h4>
                                    <h6>TAMANHO 3 (T3)</h6>
                                </div>
                                <div class="zona">
                                    <h4>ZONA DE PESCA</h4>
                                    <h6>TESTE</h6>
                                </div>
                                <div class="embarcação">
                                    <h4>EMBARCAÇÃO</h4>
                                    <h6>TESTE</h6>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">FECHAR</button>
                            </div>
                        </div>
                    </div>
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
            <button>FINALIZAR COMPRA</button>
        </div>
    </div>

@endsection
