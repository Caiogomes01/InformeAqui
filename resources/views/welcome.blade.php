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

*{
    box-sizing: border-box;
}

body{
    font-size: 14px;
    font-family: 'Titillium Web', sans-serif;
    background-color:rgb(0,0,0);
    color:#FEFEFE;
    text-align:center;
}


h1{
    font-size:16px;
    font-weight: bolder;
}

header {
   border: solid 2px #52057b;
   margin: 30px;
   padding: 20px; 
}

nav a{
  padding: 5px;
  color: white;
}
nav a:hover{
  color:#FF0042;
  font-weight: bolder;
  text-decoration: none; 
}

#categorias a{
  padding: 5px;
  color: white;
  text-align:center;
}
#categorias a:hover{
  color:#FF0042;
  font-weight: bolder;
  text-decoration: none; 
}


#categorias h2{
  color:#FF0042;
  font-weight: bolder;
}

#destaque img {
     width: 350px;
     height: 250px;
     padding-left: 20px; 
     padding-top: 20px; 
     
}


footer {
    margin: 20px;
    padding: 20px;
    background-color: #52057b;
    text-align: center;
}

    </style>
</head>

<body>

 <div class="container">
    <header class="mb-5 d-flex">

<div>
            <a href="file:///C:/Users/monteiro.sergio/Downloads/Nova%20pasta/texto1.html" class="px-3" title="Informe Aqui!">
            <img data-perfmatters-preload="" src="https://w7.pngwing.com/pngs/568/379/png-transparent-technology-computer-icons-technology-electronics-text-logo.png" alt="Informe Aqui!" height="100" width="150">
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
        <section class="text-center" id="destaque">
            <h2>Destaque</h2>
            <!-- Incluir conteúdo em destaque (posts, notícias, etc.) -->

            <div class="card-group">

  @foreach($postagens as $value)


                <div class="card">
                <img src="data:image/png;base64,{{ $value->foto }}" class="text-center"/>

                  <div class="card-body">
                    <h5 class="card-title"><a href="https://www.adrenaline.com.br/microsoft/windows/melhorar-desempenho-em-jogos-windows-11/"><p style="text-align:center;">{{ $value->titulo }}</p></a></h5>
                    <h6></h6>
                    </div>
                  </div>
                  
               @endforeach     
                  
                </div>
        </section>


        <section id="categorias">

          <div class="card bg-transparent my-5 p-5 d-flex align-items-center">
            <h2>Categorias</h2>
            <!-- Lista de categorias -->
            
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

</div>  <!-- Fechando container -->

    <footer>
        <p>&copy; 2024 Informe Aqui. Todos os direitos reservados.</p>
    </footer>

    <!-- Incluir jQuery e Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


