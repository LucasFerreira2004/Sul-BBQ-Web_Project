<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel="icon" type="image/jpeg" href="./assets/sull-bbq-icon-page.jpg" />
	<link rel="stylesheet" href="../css/custom.css">
	<title>Sul BBQ</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-md">
			<a class="navbar-brand" href="../index.php">Sul BBQ | <span class="text-danger">Admin</span></a>
		</div>
	</nav>
	<div class="sized">
		<form action="../php/admLogin.php" method="POST">
			<div class="mb-3">
				<label for="email-v" class="form-label">E-mail</label>
				<input type="email" class="form-control" id="email-v" name="email">
				<div id="communicated" class="form-text">Se você não se lembra de suas credenciais, entre em contato com a central.</div>
			</div>
			<div class="mb-3">
				<label for="password-v" class="form-label">Senha</label>
				<input type="password" class="form-control" id="password-v" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Entrar</button>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>