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


/* posts table's head  */
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
                    <li class="nav-item"><a href={{ url("/") }}>Inicio</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">InformeAqui</div>
        </div>

                <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Tudo</option>
                    <option value="Titles">Titulo</option>
                    <option value="Descriptions">Descrição</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
        </header>
    <div class="container">
        <!--Navigation-->
        <div class="navigate">
            <span><a href="">InformeAqui - Forums</a> >> <a href="">random subforum</a></span>
        </div>

        <!--Display posts table-->
        @foreach($postagens as $value)
            <div class="posts-table">
            <div class="table-head">
                <div class="status">Status</div>
                <div class="subjects">Subjects</div>
                <div class="replies">Respostas/Visualizações</div>
                <div class="last-reply">Ultima Resposta</div>
            </div>
            <div class="table-row">
                <div class="status"><img src="data:image/png;base64,{{ $value->foto }}"width="100" height="100" /></div>
                <div class="subjects">
                    <a href="{{ url('MostrarPostagem/' . $value->id) }}">{{ $value->titulo }}</a>
                    <br>
                    <span>Criado por <b><a href="">Alads</a></b> .</span>
                </div>
                <div class="replies">
                    9 Respostas <br> 180 Visualizações
                </div>
                <div class="last-reply">
                    <small class="text-muted">{{ $value->created_at }}</small>
                    <br>Criado por <b><a href="">TarcisoMoreira</a></b>
                </div>
            </div>
            @endforeach





{{--              --}}
            <!--ends here-->
        </div>
        <!--Pagination starts-->
            <div class="pagination">
                pages: <a href="">1</a><a href="">2</a><a href="">3</a>
            </div>
        <!--pagination ends-->
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



            {{-- <!--starts here-->
            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/ryzen7.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="forum.php">Vale a pena o Ryzen 7 5700x?</a>
                    <br>
                    <span>Feita por <b><a href="">DenisDenis</a></b> .</span>
                </div>
                <div class="replies">
                    3 Respostas <br> 120 Visualizações
                </div>

                <div class="last-reply">
                    13 Setembro 2021
                    <br>Criado por <b><a href="">Amanda1_</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/i9 9900k.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Compensa pegar Intel Core i9-9900K em 2023?</a>
                    <br>
                    <span>Criado por <b><a href="">KaykeGomes</a></b> .</span>
                </div>
                <div class="replies">
                    6 Respostas <br> 19 Visualizações
                </div>

                <div class="last-reply">
                    03 Maio 2023
                    <br>Criado por <b><a href="">SilvaGamer</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/duvida.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Qual vale mais a pena, Ryzen 5 5600x ou Intel I5 12400F?</a>
                    <br>
                    <span>Criado por <b><a href="">Kj1</a></b> .</span>
                </div>
                <div class="replies">
                    54 Respostas <br> 344 Visualizações
                </div>

                <div class="last-reply">
                    01 Janeiro 2019
                    <br>Criado por <b><a href="">LeozinVl</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/ryzen7.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Ryzen 7 5700x esquentando </a>
                    <br>
                    <span>Criado por <b><a href="">Reyna409</a></b> .</span>
                </div>
                <div class="replies">
                    5 Respostas <br> 24 Visualizações
                </div>

                <div class="last-reply">
                    10 Agosto 2023
                    <br>Criado por <b><a href="">FabioSouza</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/memoriaram.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Memória Ram não tá dando vídeo</a>
                    <br>
                    <span>Criado por <b><a href="">Wl_g2</a></b> .</span>
                </div>
                <div class="replies">
                    16 Respostas <br> 170 Visualizações
                </div>

                <div class="last-reply">
                    02 Julho 2020
                    <br>Criado por <b><a href="">Jean1</a></b>
                </div>
            </div>


            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/duvida.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href=""> MicroATX AM5 cabe GPU + Placa de Rede PCI-E?</a>
                    <br>
                    <span>Criado por <b><a href="">Harry205</a></b> .</span>
                </div>
                <div class="replies">
                    20 Respostas <br> 232 Visualizações
                </div>

                <div class="last-reply">
                    09 Abril 2018
                    <br>Criado por <b><a href="">cafezinho001</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/duvida.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Quando e onde comprar as peças pro meu PC?</a>
                    <br>
                    <span>Criado por <b><a href="">Salvio_12</a></b> .</span>
                </div>
                <div class="replies">
                    14 Respostas <br> 145 Visualizações
                </div>

                <div class="last-reply">
                    03 Fevereiro 2023
                    <br>Criado por <b><a href="">Luis2005</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/duvida.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Se eu ter 4 pentes de 8gb fica dualg channel?</a>
                    <br>
                    <span>Criado por <b><a href="">BillyThunder</a></b> .</span>
                </div>
                <div class="replies">
                    12 Respostas <br> 92 Visualizações
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>Criado por <b><a href="">zezintrem</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><img src="http://localhost/informeaqui/public/images/duvida.jpg" width="90" height="90"></div>
                <div class="subjects">
                    <a href="">Usar DDR5 Intel certificado em plataforma AMD/AM5 tem algum problema?</a>
                    <br>
                    <span>Criado por <b><a href="">Glas2009</a></b> .</span>
                </div>
                <div class="replies">
                    32 Respostas <br> 400 Visualizações
                </div>

                <div class="last-reply">
                    1 Março 2021
                    <br>Criado por <b><a href="">CuequinhaFreiada</a></b>
                </div>
            </div> --}}
