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
                    <div>
                        <label class="mdc-text-field mdc-text-field--filled mdc-text-field--no-label">
                            <span class="mdc-text-field__ripple"></span>
                            <input class="mdc-text-field__input" type="email" placeholder=" E-mail" aria-label="Label">
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>

                    <div class="mt-3">
                        <label class="mdc-text-field mdc-text-field--filled mdc-text-field--no-label">
                            <span class="mdc-text-field__ripple"></span>
                            <input class="mdc-text-field__input" type="password" placeholder=" Senha" aria-label="Label">
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
