@extends('layouts.registo.index')

@section('content')
    <div class="container">

        <form action="">
            @csrf

                <div class="input-container mt-5">
                    <input id="email" class="input" type="email" pattern=".+" required />
                    <label class="label" for="email">EMAIL</label>
                </div>

                <div class="input-container mt-5">
                    <input id="telemovel" class="input" type="text" pattern=".+" required />
                    <label class="label" for="telemovel">TELEMÓVEL</label>
                </div>

                <div class="mb-3 prev-next ">
                    <div class="prev">
                        <a class="btn btn-prev">VOLTAR</a>
                    </div>
                    <div class="next_1 ">
                        <button class="btn btn-next_1" type="submit">PRÓXIMA</button>
                    </div>
                </div>

        </form>
    </div>
@endsection
