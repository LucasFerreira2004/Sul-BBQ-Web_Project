<?php

session_start();

require "../php/Employee.php";

if (!$_SESSION['Logged'] == true) {
	header('Location: ./login.php');
}

$userData = $_SESSION['userData'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel="icon" type="image/jpeg" href="./assets/sull-bbq-icon-page.jpg" />
	<link rel="stylesheet" href="./css/custom.css">
	<title>Sul BBQ</title>
</head>
<!-- Default Header | Final -->

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
		<a class="navbar-brand" href=""><?php echo $userData['username']; ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="./showEmployees.php">Tab. de funcionários</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./pages/menu.php">Cardápios</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Utilitários
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#"></a></li>
						<li><a class="dropdown-item" href="#">Alterar usuário</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="../php/admLogout.php"><span class="text-danger">Sair</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container mt-3">
		<h4>Administradores</h4>
		<table class="table table-striped table-hover">
			<thead>
				<th>ID</th>
				<th>E-mail</th>
				<th>Nome</th>
				<th>Função</th>
				<th>Salário</th>
			</thead>
			<tbody>
				<?php
					$empManipulation = new Employee();
					$employees = $empManipulation->getEmployees();
					var_dump($employees);
					foreach($employees as $emp) {
						echo "{$emp['id']}";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>