<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Link css --}}
    <link rel="stylesheet" href="{{ url('assets/css/app-comercial//home/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app-comercial/media.min.css') }}">
    <title>Karapau</title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="/">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="usuario">
                    <div class="user-name">
                        <h1>Olá, Rufino</h1>
                    </div>
                    <div class="logout">
                        <button class="btn">
                            <img src="assets/img/logout.png" alt="">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="wallet">
                <div class="row">
                    <div class="seu-wallet col-9">
                        <img src="assets/img/wallet.png" alt="">
                        <h1>SEU WALLET</h1>
                    </div>
                    <div class="zoio col-3">
                        <span class="btn">
                            <img src="assets/img/zoio.png" alt="">
                        </span>
                    </div>
                    <div class="price col-9">
                        <span> € 9,90</span>
                    </div>
                </div>
            </div>
            <div class="ativos">
                <div class="row">
                    <div class="compradores col-9">
                        <img src="assets/img/joia.png" alt="">
                        <h1>COMPRADORES ATIVOS</h1>
                    </div>
                    <div class="price col-9">
                        <span> 0/100 </span>
                    </div>
                </div>
            </div>
            <div class="inativos">
                <div class="row">
                    <div class="cadastros col-9">
                        <img src="assets/img/negativo.png" alt="">
                        <h1>CADASTROS INATIVOS</h1>
                    </div>
                    <div class="price col-9">
                        <span> 0/100 </span>
                    </div>
                </div>
            </div>
            <div class="incompletos">
                <div class="row">
                    <div class="seu-wallet col-9">
                        <img src="assets/img/proibido.png" alt="">
                        <h1>CADASTROS INATIVOS</h1>
                    </div>
                    <div class="price col-9">
                        <span> 0/100 </span>
                    </div>
                </div>
            </div>
            <div class="icones">
                <div class="juntos">
                    <div class="cdc ">
                        <a href="">
                            <img src="assets/img/cdc.png" alt="">
                            <h1>CADASTRO DE COMPRADOR</h1>
                        </a>
                    </div>
                    <div class="extrato">
                        <a href="">
                            <img src="assets/img/extrato.png" alt="">
                            <h1>CADASTRO DE COMPRADOR</h1>
                        </a>
                    </div>
                </div>
                <div class="sozinho">
                    <div class="status">
                        <a href="">
                            <img src="assets/img/compradores.png" alt="">
                            <h1>STATUS DOS COMPRADORES</h1>
                        </a>

                    </div>
                </div>
                <div class="juntos">
                    <div class="ver-incompletos">
                        <a href="">
                            <img src="assets/img/incompletos.png" alt="">
                            <h1>VER INCOMPLETOS</h1>
                        </a>
                    </div>
                    <div class="cadastrar-lead ">
                        <a href="">
                            <img src="assets/img/lead.png" alt="">
                            <h1>CADASTRAR <br> LEAD</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </main>
    {{-- bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
