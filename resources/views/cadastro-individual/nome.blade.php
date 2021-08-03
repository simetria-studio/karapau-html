@extends('layouts.registo.index')

@section('content')
<div class="container">
    <form action="">
        @csrf
        <div class="text-center">
            <div class="input-container mt-5">
                <input id="nome" class="input" type="text" pattern=".+" required />
                <label class="label" for="nome">NOME:</label>
            </div>

            <div class="input-container mt-5">
                <input id="sobrenome" class="input" type="text" pattern=".+" required />
                <label class="label" for="sobrenome">SOBRENOME:</label>
            </div>

            <div class="mb-3">
                <div class="next">
                    <button class="btn btn-next" type="submit">PRÓXIMA</button>
                </div>
            </div>

    </form>
</div>
@endsection

