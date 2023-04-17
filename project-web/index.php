<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="icon" type="image/jpeg" href="./assets/sull-bbq-icon-page.jpg" />
  <link rel="stylesheet" href="./css/custom.css">
  <title>Sul BBQ</title>
  <style>
    .container-main-dishes-1 {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .card-main-dishes-1 {
      max-width: 30rem;
      margin: 1rem auto;
      padding: 5px;
    }

    .card-main-dishes-1>img {
      border-radius: 5px;
    }

    .container-main-dishes-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 0;
    }

    .card-main-dishes-2 {
      max-width: 100%;
      margin: 0;
      padding: 5px;
    }

    .card-main-dishes-2>img {
      border-radius: 5px;
      margin: 1rem 0;
    }

    .card-main-dishes-2:nth-child(1) {
      margin: 0 0 1rem 0;
    }

    .card-main-dishes-2:nth-child(2) {
      margin: 0 0 1rem 0;
    }
  </style>
</head>
<!-- Default Header | Final -->

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <a class="navbar-brand" href="./index.php">Sul BBQ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Visite-nos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/menu.php">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Seja bem-vindo!</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Header | Final -->

  <!--Carrossel | Início -->
  <div class="container my-4 ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/first-page-images(1).png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/sulbbq-awards.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próxima</span>
      </button>
    </div>

    <!--Carrossel | Final -->

    <!-- Pratos principais | Início -->
    <h1 class="mt-5">Pratos principais</h1>
    <div class="container-main-dishes-1">
      <div class="card card-main-dishes-1">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
      <div class="card card-main-dishes-1">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text"> Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
      <div class="card card-main-dishes-1">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
    </div>

    <h1 class="mt-5">Pratos principais</h1>
    <div class="container-main-dishes-2">
      <div class="card card-main-dishes-2">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
      <div class="card card-main-dishes-2">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
      <div class="card card-main-dishes-2">
        <img class="card-img-top" src="./assets/first-page-images(1).png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        </div>
      </div>
    </div>

  
    <!-- Pratos principais | Final -->
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="<iframe width="727" height="409" src="https://www.youtube.com/embed/oWGiNIzYnv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      
    </iframe>" frameborder="0"></iframe>  
    </div>
  </div>
  <!-- Main | Final -->

  <footer class="text-center text-lg-start bg-light text-muted mt-3">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Redes sociais:</span>
      </div>
      <div>
        <a href="" class="me-4 text-reset">
          Facebook
        </a>
        <a href="" class="me-4 text-reset">
          Twitter
        </a>
        <a href="" class="me-4 text-reset">
          Google
        </a>
        <a href="" class="me-4 text-reset">
          Instagram
        </a>
        <a href="" class="me-4 text-reset">
          Linkedin
        </a>
        <a href="" class="me-4 text-reset">
          GitHub
        </a>
      </div>
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Sul BBQ
            </h6>
            <p>
              Trabalhamos a mais de 12 anos para agradar nossos clientes
              espalhados no Brasil e no mundo. Estamos atualmente em fase de
              desenvolvimento e logo mais estaremos lançando uma filial na sua
              cidade! Jajá chega aí!
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Produtos</h6>
            <p>
              <a href="#!" class="text-reset">Alimentícios</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Hotelaria</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Loja T-shirt</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Culinária</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Links úteis</h6>
            <p>
              <a href="#!" class="text-reset">Quem somos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Cookies</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Trabalhe conosco</a>
            </p>
            <p>
              <a href="./admin/login.php" class="text-reset">Admin</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
            <p>Av. Rosário Dimas, 805, Guiara - SP</p>
            <p>sulbbq@gmail.com</p>
            <p>WhatsApp: +55 11 937465728</p>
            <p>Telefone: +55 11 938273645</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="./pages/team.html">Sul BBQ | Dev Team</a>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>