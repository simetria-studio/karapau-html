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
                <div class="text-center">
                    <div class="input-container my-4">
                        <input id="name" class="input" type="text" pattern=".+" required />
                        <label class="label" for="name">E-mail:</label>
                    </div>

                    <div class="input-container my-5">
                        <input id="password" class="input" type="password" pattern=".+" required />
                        <label class="label" for="password">Senha</label>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
