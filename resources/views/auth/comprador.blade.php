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
<<<<<<< Updated upstream
                    <div class="input-container my-4">
                        <input id="name" class="input" type="text" pattern=".+" required />
                        <label class="label" for="name">E-mail:</label>
                    </div>

                    <div class="input-container my-5">
                        <input id="password" class="input" type="password" pattern=".+" required />
                        <label class="label" for="password">Senha</label>
=======
                    <div>
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">E-mail</span>
                            <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id">
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>

                    <div class="mt-3">
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">Senha</span>
                            <input class="mdc-text-field__input" type="password" aria-labelledby="my-label-id">
                            <span class="mdc-line-ripple"></span>
                        </label>
>>>>>>> Stashed changes
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
