@extends('layouts.registo.index')

@section('content')
    <div class="container">
        <form action="">
            @csrf
            <div class="text-center">
                <div class="input-container my-4">
                    <input id="cep" class="input" type="number" pattern=".+" required />
                    <label class="label" for="cep">CÓDIGO POSTAL</label>
                </div>

                <div class="input-container my-5">
                    <input id="morada" class="input" type="text" pattern=".+" required />
                    <label class="label" for="morada">MORADA</label>
                </div>
                <div class="input-container my-5">
                    <input id="casa" class="input" type="text" pattern=".+" required />
                    <label class="label" for="casa">NÚMERO DA PORTA</label>
                </div>
                <div class="input-container my-5">
                    <input id="regiao" class="input" type="text" pattern=".+" required />
                    <label class="label" for="regiao">REGIÃO</label>
                </div>
                <div class="input-container my-5">
                    <input id="distrito" class="input" type="text" pattern=".+" required />
                    <label class="label" for="distrito">DISTRITO</label>
                </div>
                <div class="input-container my-5">
                    <input id="conselho" class="input" type="text" pattern=".+" required />
                    <label class="label" for="conselho">CONSELHO</label>
                </div>
                <div class="input-container my-5">
                    <input id="freguesia" class="input" type="text" pattern=".+" required />
                    <label class="label" for="freguesia">FREGUESIA</label>
                </div>
                <div class="d-flex mb-3">
                    <div class="return">
                        <a class="btn btn-voltar_1" href="#">VOLTAR</a>
                    </div>
                    <div class="entrar">
                        <button class="btn btn-entrar" type="submit">ENTRAR</button>
                    </div>
                </div>

        </form>
    </div>
@endsection
