@extends('layouts.auth.index')

@section('content')
    <div class="top">
        <div class="logo">
            <img src="{{ url('assets/img/logo-img.svg') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="mt-5 login">
            <form action="">
                @csrf
                <div class="input-group mt-5">
                    <span class="input-group-text e-mail">E-mail</span>
                    <input class="form-control input-line" type="email" name="email" id="">
                </div>
                <div class="input-group mt-4">
                    <span class="input-group-text e-mail">Senha</span>
                    <input class="form-control input-line" type="password" name="email" id="">
                </div>
                <div class="mt-4">
                    <button class="btn btn-entrar" type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
    </div>

@endsection
