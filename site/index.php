<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }
?>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>MovieFlix</title>
  </head>
  <body>
    <div class="topo_site">
          <nav class="navbar navbar-expand-lg navbar-dark text-center" style="background-color: rgb(8, 5, 58)">
            <img src="img/logo.png" width="200"> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#novidades">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FILMES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ação</a>
                    <a class="dropdown-item" href="#">Clássicos</a>
                    <a class="dropdown-item" href="#">Comédia</a>
                    <a class="dropdown-item" href="#">Documentários</a>
                    <a class="dropdown-item" href="#">Dramas</a>
                    <a class="dropdown-item" href="#">Fantasia</a>
                    <a class="dropdown-item" href="#">Ficção científica/a>
                    <a class="dropdown-item" href="#">Infantil</a>
                    <a class="dropdown-item" href="#">Musicais</a>
                    <a class="dropdown-item" href="#">Premiados</a>
                    <a class="dropdown-item" href="#">Religioso</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Suspense e terror</a>
                  </div>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SÉRIES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ação</a>
                    <a class="dropdown-item" href="#">Asiáticos</a>
                    <a class="dropdown-item" href="#">Comédia</a>
                    <a class="dropdown-item" href="#">Documentários</a>
                    <a class="dropdown-item" href="#">Dramas</a>
                    <a class="dropdown-item" href="#">Fantasia</a>
                    <a class="dropdown-item" href="#">Ficção científica/a>
                    <a class="dropdown-item" href="#">Infantil</a>
                    <a class="dropdown-item" href="#">Mistério</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Teen</a>
                    <a class="dropdown-item" href="#">Suspense e terror</a>
                  </div>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ANIMES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Kodomo</a>
                    <a class="dropdown-item" href="#">Shounen</a>
                    <a class="dropdown-item" href="#">Shoujo</a>
                    <a class="dropdown-item" href="#">Seinen</a>
                    <a class="dropdown-item" href="#">Josei</a>
                  </div>
                  <li class="nav-item active">
                  <a class="nav-link" href="../login-cadastro/sair.php">SAIR<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="OK">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/thor.jpg" class="rounded mx-auto d-block" alt="Responsive image">
          </div>
          <div class="carousel-item">
            <img src="img/sandman.jpg" class="rounded mx-auto d-block" alt="Responsive image">
          </div>
          <div class="carousel-item">
            <img src="img/Continência ao amor_1.jpg" class="rounded mx-auto d-block" alt="Responsive image">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <br></br>

    <div class="container bg-info color1" id="novidades" >
        <h2>NOVIDADES</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="img/king.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/the summer i turned pretty.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/morbius.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/UNCHARTED KEY ART.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    <br></br>

    <div class="container bg-info">
        <h2>VISTO RECENTEMENTE</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="img/pll.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/The_Wolf_of_Wall_Street.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/suits.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </body>
</html>
