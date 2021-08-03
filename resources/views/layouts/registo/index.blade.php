<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- CSS --}}
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/registo/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/auth/auth.min.css') }}">


    <title>Karapau</title>
</head>

<body>
    <div class="quadrado">
        <img src="{{ url('assets/img/logo-img.svg') }}" alt="">
    </div>
    <div class="quadrado-2">
        <div class="container">
            <div class="d-flex">
                <div class="voltar">
                    <a href="#"> VOLTAR</a>
                </div>
                <div class="comprador">
                    <p>COMPRADOR <br> COLETIVO</p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        @yield('content')
    </main>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ url('assets/auth/js/script.js') }}"></script>
</body>

</html>
