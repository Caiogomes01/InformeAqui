


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
    <!-- imagens -->
    <style>
        .carousel-item img {
            /*width:  300px; /* Defina o tamanho máximo desejado */
            height: 400px;
            width: auto; Mantenha a largura automática para manter a proporção */
            display: block; /* Para centralizar a imagem */
            margin: 0 auto; /* Para centralizar a imagem */
        }



header {
    background-color: #6A5ACD; /* Purple */
    padding: 20px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

main {
    padding: 20px;
}

#destaque, #categorias {
    background-color: white;
    color: black;
    margin-bottom: 20px;
    padding: 20px;
}


    </style>
    <div class="container">

</head>
<body>
    <header class="mb-5 d-flex px-3">

            <a href="file:///C:/Users/monteiro.sergio/Downloads/Nova%20pasta/texto1.html" class="px-3" title="Informe Aqui!">
            <img data-perfmatters-preload="" src="https://w7.pngwing.com/pngs/568/379/png-transparent-technology-computer-icons-technology-electronics-text-logo.png" alt="Informe Aqui!" height="100" width="150">
            </a>
            <div>

        <h1>Informe Aqui!</h1>
        <nav>
            <ul>
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
                <img src="{{url('./images/compras.jpg')}}" class="d-block" alt="Imagem 3">
            </div>
            <div class="carousel-item">
                <img src="{{url('./images/console.jpg')}}" class="d-block" alt="Imagem 4">
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

    <main>
        <section id="destaque">
            <h2>Destaque</h2>
            <!-- Incluir conteúdo em destaque (posts, notícias, etc.) -->

            <div class="card-group">


            @foreach($postagens as $value)

                <div class="card">
                <img src="data:image/png;base64,{{ $value->foto }}" />

                  <div class="card-body">
                    <h5 class="card-title"><a href="https://www.adrenaline.com.br/microsoft/windows/melhorar-desempenho-em-jogos-windows-11/"><p style="text-align:center;">{{ $value->titulo }}</p></a></h5>
                   <!-- <p class="card-text">6 dicas para melhorar o desempenho do PC em jogos no Windows 11</p> -->
                    <h6></h6>
                    <p class="card-text"><small class="text-muted">{{ $value->created_at }}</small></p>
                  </div>
                </div>

            @endforeach








        </section>

        <section id="categorias">
            <h2>Categorias</h2>
            <!-- Lista de categorias -->
            <ul>
                <li><a href="#">Análises</a></li>
                <li><a href="#">Artigos</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Comparativos</a></li>
                <li><a href="#">Vídeos</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Informe Aqui. Todos os direitos reservados.</p>
    </footer>

    <!-- Incluir jQuery e Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>











{{-- @foreach ($postagens as $value)
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $value->titulo }}</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}</time>
										<a href="#" class="author"><span class="name">{{ $value->user->name }}</span><img src="{{ url('images/avatar.jpg') }}" alt="" /></a>
									</div>
								</header>
								<p>{!! $value->conteudo !!}</p>
								<footer>
									<ul class="stats">
										<li><a href="#">{{ $value->categoria->nome }}</a></li>
										<li><a href="" class="icon solid fa-heart">{{ $value->curtidas->count() }}</a></li>
										@auth
											<li><a href="{{ url('/blog/curtida/' . $value->id) }}" class="icon solid fa-heart">CURTIR</a></li>
										@endauth
										<li><a href="{{ url('/blog/postagem/' . $value->id) }}" class="icon solid fa-comment">{{ $value->comentarios->count() }} comenários</a></li>
									</ul>
								</footer>
							</article>
@endforeach--}}

