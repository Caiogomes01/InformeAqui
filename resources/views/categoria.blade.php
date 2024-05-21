<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link href="{{ url('assets/css/inicio.css') }}" rel="stylesheet" type="text/css" media="all">
    <style>

*{
    box-sizing: border-box;
}

html{
    font-size: 14px;
    font-family: 'Titillium Web', sans-serif;
    background-color:rgb(0,0,0);
    color:#FEFEFE;
}

a{
    color:#FF0042;
    font-weight: bolder;
    text-decoration: none;
}

h1{
    font-size:16px;
    font-weight: bolder;
}

.container{
    margin: 20px;
    padding: 20px;
}

.subforum{
    margin-top:20px;
}

.subforum-title{
    background-color:#292B2E;
    padding: 5px;
    border-radius: 5px;
    margin:4px;
}

.subforum-row{
    display: grid;
    grid-template-columns: 7% 60% 13% 20%;
}

.subforum-column{
    padding: 10px;
    margin:4px;
    border-radius: 5px;
    background-color:#111314;
}

.subforum-description *{
    margin-block: 0;
}

.center{
    display: flex;
    justify-content: center;
    align-items: center;
}

.subforum-icon i{
    font-size: 45px;
}

.subforum-devider{
    display: none;   
}


/* For the smartphones */
@media screen and (max-width: 460px) {
    .container{
        margin: 10px;
        padding: 10px;
    }

    .subforum-row{
        display: grid;
        grid-template-columns: 25% 75%;
        grid-template-rows: 65% 35%;
    }

    .subforum-devider{
        display: block;
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(190, 190, 190, 0), rgba(255, 255, 255, 0.75), rgba(190, 190, 190, 0));
    }

    

  }

/* For the tablets */
@media screen and (min-width: 460px) and (max-width: 1024px) {
    .container{
        margin: 15px;
        padding: 15px;
    }

    .subforum-row{
        display: grid;
        grid-template-columns: 10% 60% 10% 20%;
    }

    .subforum-icon i{
        font-size: 35px;
    }

    html{
        font-size: 14px;
    }

    h1{
        font-size: 16px;
    }

  }
/*   Header Section    */

header{
    margin-inline: 10px;
}
  /* Nav Bar styles */
.navbar{
    display:flex;
    align-items: center;
}
.navigation{
    background-color:#52057b;
    padding: 10px;
    width: 65%;
    display: inline-block;
    border-radius: 5px;
    max-height: 80px;
    margin-right:10px;
}

.close-icon i{
    font-size:60px;
    float: left;
    cursor: pointer;
}

.nav-list{
    list-style-type:none;
    overflow: hidden;
}

.nav-item a{
    float: right;
    display:block;
    text-align: center;
    margin-inline: 20px;
    font-size: 20px;
    padding: 10px;
    color:#fff;
}

.nav-item a:hover{
    background-color: rgb(0,0,0,0.1);
}

.hide{
    display: none;
}

.bar-icon{
    font-size: 60px;
    display: inline-block;
    margin-right:10px;
    color: #fff;
    cursor: pointer;
}

@font-face {
    font-family:aquire;
    src:url(aquire.otf);
}

.brand{
    font-size:60px;
    display: inline-block;
    font-family:aquire;
}

/*Navbar for the smartphones*/
@media screen and (max-width: 460px){
    .navigation{
        max-height: auto;
    }
    
    .close-icon i{
        font-size:30px;
    }
    
    .nav-item a{
        float:left;
        display:inline;
        margin-inline: 3px;
        font-size: 10px;
        padding: 5px;
    }
    
    
    .bar-icon{
        font-size: 30px;
    }
 
    .brand{
        font-size:20px;
    }
}

  /* Search Box styles */
.search-box{
    border: solid 1px #52057b;
    margin-top: 20px;
    padding: 40px;
    display:flex;
    justify-content: center;
    box-shadow:1px 2px 3px #52057b;
}

.search-box select{
    padding: 10px;
}

.search-box input{
    padding: 10px;
}

.search-box button{
    padding: 10px;
    background-color:#fff;
    color:#000000;
}

.search-box button:hover{
    background-color: #000000;
    color: #fff;
    box-shadow: 1px 2px 3px #fff;
}

/* search box for smrtphones */
@media screen and (max-width: 460px){
    .search-box input, .search-box button, .search-box select{
        min-width: 300px;
        margin-top: 5px;
    }    

}

/* forum info Styling */
.forum-info{
    padding: 20px;
    background-color: #111314;
}

.chart{
    font-size:20px;
    font-weight:bold;
}
/* Footer Styling */

footer{
    margin-top: 20px;
    padding: 20px;
    background-color:  #52057b;
    display: block;
    text-align: center;
}


.table-head{
    display: flex;
}

.table-head div{
    padding: 5px;
    margin: 2px;
    background-color: #2C2C2C;
    font-weight: bold;
}

.table-head .status{
    flex: 5%;
}

.table-head .subjects{
    flex: 70%;
}

.table-head .replies{
    flex: 10%;
}

.table-head .last-reply{
    flex: 15%;
}

/* posts table's body  */

.table-row{
    display: flex;
}

.table-row .status, .table-row .subjects, .table-row .replies, .table-row .last-reply{
    padding: 5px;
    margin: 2px;
    background-color: #131415;
}

.table-row .status{
    flex: 5%;
    font-size: 30px;
    text-align: center;
}

.table-row .subjects{
    flex: 70%;
}

.table-row .replies{
    flex: 10%;
}

.table-row .last-reply{
    flex: 15%;
}

/* navigation path*/
.navigate{
    margin-block: 20px;
    font-weight: lighter;
    font-size: 24px;
}

.navigate a{
    color: #fff;
}

.navigate a:hover{
    color:#FF0042;
    font-weight: bolder;
}

/* Pagination*/

.pagination{
    padding: 20px;
    font-size: 15px;
}

.pagination a{
    color: #fff;
    margin-inline: 5px;
    padding: 5px 10px;
    border: solid 0.5px #fff;
}

.pagination a:hover{
    opacity: 0.5;
}

.note{
    background-color:#111314;
    padding: 20px;
    display: block;
}

.note span{
    font-size: 20px;
    margin-block: 5px;
}


.head{
    display: flex;
    background-color: #2C2C2C;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
}

.authors{
    flex: 20%;
}

.content{
    flex: 80%;
}

.body{
    display: flex;
    background-color: #131415;
    padding: 10px;
    margin-top: 5px;
}

.body .authors .username{
    font-size: 20px;
}

.body .authors img{
    max-width: 50px;
    max-height: 80px;
}

.body .content .comment button{
    border:none;
    padding:10px;
    font-weight: bolder;
    box-shadow: 4px 6px #fff;
    cursor: pointer;
    float: right;
}

/* comment section */
.comment-area{
    margin-bottom:50px;
}

.comment-area textarea{
    width: 100%;
    min-height: 100px;
    padding: 10px;
    margin-block: 10px;
}

.comment-area input{
    float: right;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.comment-area input:hover{
    border: solid 1px #000000;
}
</style>

</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forum.php">Autor</a></li>
                    <li class="nav-item"><a href="posters.php">Categoria</a></li>
                    <li class="nav-item"><a href="inicio.php">Inicio</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">InformeAqui</div>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Hardware</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                <img src="http://localhost/informeaqui/public/images/i5 7400.jpg" width="95" height="95">                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="posters.php">PROCESSADOR</a></h4>
                    <p>O processador, ou CPU, é o cérebro do computador, responsável por executar instruções, realizar cálculos e coordenar operações. Sua eficiência depende da velocidade de clock, do número de núcleos, da capacidade de execução de instruções e da memória cache. A velocidade de clock indica a rapidez das operações, núcleos múltiplos permitem multitarefa, a capacidade de execução influencia a eficiência e a cache agiliza o acesso a dados frequentemente usados.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posters | 70 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo poster</a></b> by <a href="perfil-usuario1.html">DenisDenis</a> 
                    <br>on <small>1 Maio 2023</small>
                </div>
            </div>
        </div>
        <!--More-->
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>Outros Hardware</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="http://localhost/informeaqui/public/images/placadevideo.jpg" heigth="95" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Placa de Vídeo</a></h4>
                    <p>A placa de vídeo, ou GPU, é crucial para gráficos intensivos em computadores, como jogos e edição de vídeo. Sua função principal é processar e renderizar gráficos, aliviando a carga da CPU. A qualidade depende da VRAM, arquitetura da GPU, largura de banda da memória e velocidade do clock. A VRAM armazena dados gráficos, a arquitetura influencia a eficiência, e a largura de banda afeta a transferência de dados. Tecnologias como DirectX e OpenGL são suportadas, e recursos como ray tracing podem estar presentes em modelos mais recentes.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posters | 130 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo poster</a></b> by <a href="">Dumel1</a> 
                    <br>on <small>2 Janeiro 2024</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="http://localhost/informeaqui/public/images/memoriaram.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Memória RAM</a></h4>
                    <p> A memória RAM (Random Access Memory) é um componente crucial em computadores, oferecendo armazenamento temporário de alta velocidade para dados e instruções ativos durante a execução de programas. É volátil, rápida e permite leitura e escrita eficientes. Sua temporariedade significa que os dados são perdidos quando o computador é desligado.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>64 Posters | 200 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo poster</a></b> by <a href="">Snay12</a> 
                    <br>on <small>12 Agosto 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="http://localhost/informeaqui/public/images/placa_mae_aorus.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Placa Mãe Gigabyte B550M AORUS Elite</a></h4>
                    <p>A placa-mãe é a base do computador, conectando e permitindo a comunicação entre diferentes componentes, como processador, memória RAM, placas de expansão e dispositivos de armazenamento. Ela possui soquete para o processador, slots para memória RAM e placas adicionais, além de oferecer conectividade para periféricos. A escolha da placa-mãe impacta na compatibilidade e desempenho geral do sistema.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>13 Posters | 36 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo posters</a></b> by <a href="">Ferzer2</a> 
                    <br>on <small>7 Fevereiro 2022</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="http://localhost/informeaqui/public/images/ssd_500gb_kingston.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">SSD Kingston NV2 500GB</a></h4>
                    <p>O SSD Kingston NV2 500GB é uma unidade de armazenamento de alta velocidade com capacidade de 500GB. Utilizando a tecnologia NVMe, oferece desempenho rápido e eficiente em comparação com discos rígidos tradicionais, sendo adequado para armazenamento de dados, sistemas operacionais e aplicativos.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>2 Posters | 8 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo posters</a></b> by <a href="">antonio2silva</a> 
                    <br>on <small>29 Setembro 2023</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="http://localhost/informeaqui/public/images/fonte_msi_650w.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Fonte</a></h4>
                    <p>A fonte de computador, também conhecida como fonte de alimentação, converte a energia elétrica da tomada em uma forma utilizável pelo computador. Ela fornece energia estável para todos os componentes do computador, como a placa-mãe, processador e dispositivos de armazenamento. As fontes de computador vêm em diferentes capacidades de potência, medidas em watts, e geralmente incluem conectores para diversos componentes internos. Elas desempenham um papel crítico na estabilidade e no funcionamento adequado de um sistema computacional.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>32 Posts | 78 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo posters</a></b> by <a href="">Rodrigao202</a> 
                    <br>on <small>22 Agosto 2022</small>
                </div>
            </div>
        </div>
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>Eletronicos</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="img/tv_40_britania.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Smart Tv</a></h4>
                    <p>Uma Smart TV é uma televisão com recursos avançados de conectividade, permitindo acesso à Internet, streaming de conteúdo, execução de aplicativos e interação com dispositivos externos. Geralmente possui um sistema operacional próprio e suporta tecnologias como Wi-Fi e HDMI para proporcionar uma experiência de entretenimento mais ampla e personalizada.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Posts | 15 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo posters</a></b> by <a href="">Darius292</a> 
                    <br>on <small>13 Março 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="img/s20_128gb.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Smartphone</a></h4>
                    <p>Um smartphone é um dispositivo móvel que combina funções de telefone, câmera, navegador da web, reprodutor de música e outras aplicações em um único dispositivo. Além das capacidades de comunicação, os smartphones oferecem acesso a aplicativos, conectividade à internet, e muitos recursos avançados, como GPS, sensores de movimento e assistentes virtuais. São projetados para fornecer uma ampla gama de funcionalidades em um formato compacto e portátil.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>182 Posters | 350 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo posters</a></b> by <a href="">teemo2939</a> 
                    <br>on <small>14 Outubro 2023</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="img/caixa_de_som.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Caixa De Som</a></h4>
                    <p>Uma caixa de som é um dispositivo de áudio projetado para amplificar e reproduzir som. Pode ser conectada a dispositivos como smartphones, computadores, ou players de música via cabo ou conexão sem fio. As caixas de som variam em tamanho, potência e características, oferecendo uma maneira versátil de desfrutar de áudio em diferentes ambientes.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>4 Posters | 0 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo poster</a></b> by <a href="">Sage2009</a> 
                    <br>on <small>12 Novembro 2021</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <img src="img/console.jpg" alt="Nome do Produto" style="width: 100px; height: 100px;">
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Console</a></h4>
                    <p>Um console de jogos é um dispositivo eletrônico dedicado ao entretenimento, especialmente projetado para executar e reproduzir videogames. Ele inclui hardware específico, como processadores, memória e gráficos, otimizados para oferecer uma experiência de jogo imersiva. Consoles são conectados a uma televisão e geralmente acompanham controladores para interação do usuário. Exemplos populares incluem o PlayStation, Xbox e Nintendo Switch. Esses dispositivos desempenham um papel fundamental na indústria de jogos, proporcionando uma plataforma única para os jogadores desfrutarem de uma ampla variedade de títulos.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>1 Posters | 2 Comentarios</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Ultimo poster</a></b> by <a href="">Jorginho2111</a> 
                    <br>on <small>1 Abril 2022</small>
                </div>
            </div>

           
        </div>
    
    </div>

    <footer>
        <span>&copy;  © 2023 - 2024. Todos direitos reservados InformeAqui</span>
    </footer>
    <script>
    
    //NavBar
function hideIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    navigation.classList.remove("hide");
}

function showIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}

//Comment
function showComment(){
    var commentArea = document.getElementById("comment-area");
    commentArea.classList.remove("hide");
}

//Reply
function showReply(){
    var replyArea = document.getElementById("reply-area");
    replyArea.classList.remove("hide");
}
    </script>
</body>
</html>