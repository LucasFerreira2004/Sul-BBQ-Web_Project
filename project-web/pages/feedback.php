<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="icon" type="image/jpeg" href="../assets/sull-bbq-icon-page.jpg" />
  <link rel="stylesheet" href="../css/custom.css" />
  <title>Sul BBQ | Feedback</title>
</head>
<!-- Default Header | Final -->

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <a class="navbar-brand" href="../index.php">Sul BBQ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Visite-nos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./menu.php">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Seja bem-vindo!</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Header | Final -->

  <div class="container align-items-center pt-3">
    <p class="h3">Nos visitou? Então deixe o seu feedback!</p>
    <form action="../php/SendComment.php" method="POST">
      <div class="form-group mt-3">
        <label for="feedback-form-email">Seu nome</label>
        <input type="text" class="form-control" id="feedback-form-email" name="user_name" placeholder="Seu nome*" />
      </div>
      <div class="form-group mt-3">
        <label for="feedback-form-email">E-mail</label>
        <input type="text" class="form-control" id="feedback-form-email" name="user_email" placeholder="Seu e-mail*" />
      </div>
      <div class="form-group mt-3">
        <label for="feedback-form-comment">Comentário</label>
        <textarea class="form-control" id="feedback-form-comment" rows="3" name="comment" placeholder="Seu comentário*"></textarea>
      </div>

      <!-- type of comment -->
      <div class="form-check mt-3">
        <input class="form-check-input" type="radio" name="comment_type" id="type-comment" value="Elogio" />
        <label class="form-check-label" for="form-check-input">
          Um elogio
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="comment_type" id="type-comment" value="Crítica" />
        <label class="form-check-label" for="form-check-input">
          Uma crítica
        </label>
      </div>
      <div class="form-check mt-3">
        <input type="submit" class="btn btn-primary" value="Enviar comentário">
      </div>
    </form>
    <div class="comment-link mt-3">
      <a href="./comments.php" class="link-info">Aba de comentários</a>
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
              <a href="../admin/login.php" class="text-reset">Admin</a>
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
      <a class="text-reset fw-bold" href="./team.html">Sul BBQ | Dev Team</a>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>