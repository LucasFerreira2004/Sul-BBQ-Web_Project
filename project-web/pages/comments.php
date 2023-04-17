<?php
$db_connection = mysqli_connect('localhost', 'root', '', 'storage_service');
if (!$db_connection) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>

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
    <nav class="navbar bg-light p-3">
        <div class="container-fluid justify-content-start">
            <a class="navbar-brand" href="../index.php">Sul BBQ</a>
            <a href="./feedback.php">
                <button class="btn btn-outline-dark me-2" type="button">Retornar</button>
            </a>
        </div>
    </nav>
    <!-- Header | Final -->
    <div class="container mt-3">
        <?php
        $res = mysqli_query($db_connection, "SELECT * FROM comments");

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<div class="card mt-3"><div class="card-body"><h5 class="card-title">' . $row['user_email'] . '</h5><h6 class="card-subtitle mb-2 text-muted">' . $row['comment_type'] . '</h6><p class="card-text max-lines">' . $row['user_comment'] . '</p></div></div>';
            }
        } else {
            echo '<p class="m-3">Seja o primeiro a comentar!</p>';
        }
        ?>
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