@extends('layouts.index')

@section('content')
    <div class="top_1">
        <div class="nome-porto">
            <h1>MATOSINHOs</h1>
        </div>
    </div>
    <div class="botao-v">
        <a class="btn btn-voltar" href="">TROCAR</a>
    </div>
    <div class="container">
        <div class="filtrar_1 mt-4">
            <div>
                <button class="btn btn-filtro">FILTRAR</button>
            </div>
        </div>
        <div class="portos mt-4 text-center">
            <div class="row">
                {{-- @foreach ($portos as $porto) --}}
                <div class="col-6 mb-5">
                    <div class="porto">
                        <a href="#"> <img src="{{ url('assets/img/porto.png') }}" alt=""></a>
                    </div>
                    <div>
                        <p>nome do produto</p>
                    </div>
                    <div class="mt-2">
                        <p>00:00:00</p>
                    </div>
                    <div class="valor-monetario mt-2">
                        <span>€20,00 - KG</span>
                    </div>
                    <div class="valor-kg mt-2">
                        <span>STOCK -1170 KG</span>
                    </div>
                </div>
                <div class="col-6 mb-5">
                    <div class="porto">
                        <a href="#"> <img src="{{ url('assets/img/porto.png') }}" alt=""></a>
                    </div>
                    <div>
                        <p>nome do produto</p>
                    </div>
                    <div class="mt-2">
                        <p>00:00:00</p>
                    </div>
                    <div class="valor-monetario mt-2">
                        <span>€20,00 - KG</span>
                    </div>
                    <div class="valor-kg mt-2">
                        <span>STOCK -1170 KG</span>
                    </div>
                </div>

                {{-- @endforeach --}}

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
