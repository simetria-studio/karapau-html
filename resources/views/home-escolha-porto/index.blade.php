@extends('layouts.index')

@section('content')
    <div class="top">
        <div class="logo">
            <img src="{{ url('assets/img/logo.svg') }}" alt="">
        </div>
    </div>
    <div class="botao-v">
        <a class="btn btn-voltar" href="">VOLTAR</a>
    </div>
    <div class="container">
        <div class="filtrar">
            <p>ESCOLHA UM <br> PORTO</p>
            <div>
                <button class="btn btn-filtro">FILTRAR</button>
            </div>
        </div>

        <div class="portos mt-4 text-center">
            <div class="row">
                {{-- @foreach ($portos as $porto) --}}
                <div class="col-6">
                    <div class="porto">
                        <a href="#"> <img src="{{ url('assets/img/porto.png') }}" alt=""></a>
                    </div>
                    <p>nome do porto</p>
                </div>
                <div class="col-6">
                    <div class="porto">
                        <a href="#"> <img src="#" alt=""></a>
                    </div>
                    <p>nome do porto</p>
                </div>
                <div class="col-6">
                    <div class="porto">
                        <a href="#"> <img src="#" alt=""></a>
                    </div>
                    <p>nome do porto</p>
                </div>
                <div class="col-6">
                    <div class="porto">
                        <a href="#"> <img src="#" alt=""></a>
                    </div>
                    <p>nome do porto</p>
                </div>


                {{-- @endforeach --}}
            </div>
        </div>
    </div>
@endsection
