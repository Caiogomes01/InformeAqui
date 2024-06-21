<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Aqui! - Fórum de Tecnologia</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .carousel-item img {
            height: 400px;
            width: auto;
            display: block;
            margin: 0 auto;
                        
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-size: 14px;
            font-family: 'Titillium Web', sans-serif;
            background-color: rgb(0, 0, 0);
            color: #FEFEFE;
            text-align: center;
        }
        h1 {
            font-size: 16px;
            font-weight: bolder;
        }
        header {
            border: solid 2px #52057b;
            margin: 30px;
            padding: 20px;
        }
        nav a {
            padding: 5px;
            color: white;
        }
        nav a:hover {
            color: #FF0042;
            font-weight: bolder;
            text-decoration: none;
        }
        #categorias a {
            padding: 5px;
            color: white;
            text-align: center;
        }
        #categorias a:hover {
            color: #FF0042;
            font-weight: bolder;
            text-decoration: none;
        }
        #categorias h2 {
            color: #FF0042;
            font-weight: bolder;
        }
        #destaque img {
            width: 150px;
            height: 110px;
            padding-left: 5px;
            padding-top: 5px;
        }
        footer {
            margin: 20px;
            padding: 20px;
            background-color: #52057b;
            text-align: center;
        }
        .sidebar {
            background-color: #2c2c2c;
            padding: 20px;
            margin: 20px 0;
        }
        .sidebar h2 {
            color: #FF0042;
        }
        .sidebar a {
            color: white;
            display: block;
            margin: 5px 0;
        }
        .sidebar a:hover {
            color: #FF0042;
        }
        .sidebar .newsletter input,
        .sidebar .newsletter button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="mb-5 d-flex">
        <div>
            <a href="file:///C:/Users/monteiro.sergio/Downloads/Nova%20pasta/texto1.html" class="px-3" title="Informe Aqui!">
                <img src="https://w7.pngwing.com/pngs/568/379/png-transparent-technology-computer-icons-technology-electronics-text-logo.png" alt="Informe Aqui!" height="100" width="150">
            </a>
        </div>
        <div>
            <h1 class="display-4">Informe Aqui!</h1>
            <nav>
                <ul class="list-unstyled d-flex">
                    <li><a href="#">Início</a></li>
                    <li><a href="{{route('MostrarCategoria')}}">Categorias</a></li>
                    <li><a href="#">Notícias</a></li>
                    <li><a href="#">Análises</a></li>
                    <li><a href="#">Artigos</a></li>
                    <li><a href="#">Vídeos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Carrossel de Imagens -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('./images/memoria_corsair_16gb.jpg')}}" class="d-block" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/alexia_5.jpg')}}" class="d-block" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/ryzen7.jpg')}}" class="d-block" alt="Imagem 3">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/console.jpg')}}" class="d-block" alt="Imagem 4">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/placa_mae_aorus.jpg')}}" class="d-block" alt="Imagem 4">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/dual-channel.jpg')}}" class="d-block" alt="Imagem 4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        
    </div>
    
    <div class="row">
        <!-- Barra Esquerda -->
        <aside class="col-md-2 sidebar">
            <h2>Navegação</h2>
            <a href="#">Perfil</a>
            <a href="#">Mensagens</a>
            <a href="#">Configurações</a>
            <a href="#">Ajuda</a>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="col-md-8">
            <section class="text-center" id="destaque">
                <h2>Últimas publicações</h2>
                <!-- Incluir conteúdo em destaque (posts, notícias, etc.) -->
                <div class="card-group">
                    @foreach($postagens as $value)
                        <div class="card">
                            <img src="data:image/png;base64,{{ $value->foto }}" class="text-center"/>
                            <div class="card-body">
                                <h5 class="card-title"><a href=""><p style="text-align:center;">{{ $value->titulo }}</p></a></h5>
                            </div>
                        </div>
                    @endforeach     
                </div>
            </section>

            <section id="categorias">
                <div class="card bg-transparent my-5 p-5 d-flex align-items-center">
                    <h2>Categorias</h2>
                    <div class="mx-5">
                        <ul class="list-group list-group-horizontal list-unstyled p-3">
                            <li><a href="#">Análises</a></li>
                            <li><a href="#">Artigos</a></li>
                            <li><a href="#">Notícias</a></li>
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Comparativos</a></li>
                            <li><a href="#">Vídeos</a></li>
                        </ul> 
                    </div>
                </div>
            </section>
        </main>

        <!-- Barra Direita -->
        <aside class="col-md-2 sidebar">
            <h2>Recentes</h2>
            <a href="#">Notícia 1</a>
            <a href="#">Notícia 2</a>
            <a href="#">Notícia 3</a>
            <h2>Redes Sociais</h2>
            <a href="#">Facebook</a>
            <a href="#">Rede X</a>
            <a href="#">Instagram</a>
            <h2>Notícias</h2>
            <div class="newsletter">
                <form action="#">
                    <input type="email" placeholder="Seu e-mail">
                    <button type="submit">Inscreva-se</button>
                </form>
            </div>
        </aside>
    </div>
</div>  <!-- Fechando container -->

<footer>
    <p>&copy; 2024 Informe Aqui. Todos os direitos reservados.</p>
</footer>

<!-- Bootstrap JS -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></body>
</html>

