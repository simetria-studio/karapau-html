@extends('layouts.index')

@section('content')
    {{-- Codigo do pedido --}}
    <div class="section-1">
        <div class="numero-pedido">
            <h3>MTS-1001-2407211726</h3>
        </div>
        <div class="botao-voltar text-center">
            <button class="btn btn-voltar btn-lg">VOLTAR</button>
        </div>
    </div>
    {{-- endereço de entrega --}}
    <div class="section-2">
        <div class="container">
            <div class="entrega">
                <h4>MORADA DE ENTREGA</h4>
            </div>
            <div class="morada">
                <p>Av. da República 12394430-204 Vila Nova de Gaia</p>
            </div>
        </div>
    </div>
    {{-- lista de itens e status --}}
    <div class="section-3 ">
        <div class="container">
            <div class="list-item">

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Item</span>
                    </div>
                    <div class="resposta">
                        <span>03</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Espécie:</span>
                    </div>
                    <div class="resposta">
                        <span>Carapau</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Tamanho:</span>
                    </div>
                    <div class="resposta">
                        <span>Tamanho 2 (T2)</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Peso:</span>
                    </div>
                    <div class="resposta">
                        <span>30 kg</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Quantidade:</span>
                    </div>
                    <div class="resposta">
                        <span>03</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Caixas:</span>
                    </div>
                    <div class="resposta">
                        <span>03</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Valor:</span>
                    </div>
                    <div class="resposta">
                        <span>€ 20,00</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Origem:</span>
                    </div>
                    <div class="resposta">
                        <span>Póvoa de Varzim</span>
                    </div>
                </div>

                <div class="item d-flex">
                    <div class="pergunta">
                        <span>Taxa de Entrega:</span>
                    </div>
                    <div class="resposta">
                        <span> € 5,00:</span>
                    </div>
                </div>
                <div>
                    <div class="wait">
                        <span class="btn wait-paying">AGUARDANDO PAGAMENTO</span>
                    </div>
                    {{-- STATUS DE PAGAMENTOS
                        <div class="wait">
                        <span class="btn wait-paying">EM PREPARAÇÃO</span>
                    </div>
                    <div class="wait">
                        <span class="btn wait-paying">SAIU PARA ENTREGA</span>
                    </div> --}}
                    <div class="info-receber">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn info-recebeu" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            INFORMAR RECEBIMENTO
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">RECEBIMENTO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">

                                            <div class="mt-3">
                                                <span>MERCADORIA CHEGOU FRESCA?</span>
                                            </div>

                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="mercadoria"
                                                        id="inlineRadio1">
                                                    <label class="form-check-label" for="inlineRadio1">SIM</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="mercadoria"
                                                        id="inlineRadio2">
                                                    <label class="form-check-label" for="inlineRadio2">NÃO</label>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <span>ENTREGADOR FOI CORDIAL?</span>
                                            </div>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="entregador"
                                                        id="inlineRadio3">
                                                    <label class="form-check-label" for="inlineRadio3">SIM</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="entregador"
                                                        id="inlineRadio4">
                                                    <label class="form-check-label" for="inlineRadio4">NÃO</label>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <span>AS CAIXAS FORAM DEVOLVIDAS AO ENTREGADOR?</span>
                                            </div>

                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="caixas"
                                                        id="inlineRadio5">
                                                    <label class="form-check-label" for="inlineRadio5">SIM</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="caixas"
                                                        id="inlineRadio6">
                                                    <label class="form-check-label" for="inlineRadio6">NÃO</label>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <span>QUER REGISTAR ALGUMA RECLAMAÇÃO OU ELOGIO?</span>
                                            </div>

                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-recebimento" data-bs-dismiss="modal">CONFIRMAR RECEBIMENTO</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="total-entrega">
        <div class="container">
            <div class="text-center">
                <h4>TOTAL DO PEDIDO + ENTREGA</h4>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <div class="preco-produtos">
                <div class="produtos-n">
                    <span>ITENS (03)</span>
                </div>
                <div class="preco-total">
                    <span>€ 95,00</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section-5">
        <div class="container">
            <div class="mb-3 mt-3">
                <input class="form-control form-control-lg comprovante" type="file">
            </div>
            <div>
                <button type="submit" class="btn btn-enviar">ENVIAR COMPROVANTE</button>
            </div>
        </div>
    </div>

@endsection
