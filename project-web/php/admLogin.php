<?php

$database_connect = mysqli_connect('localhost', 'root', '', 'storage_service');

if (!$database_connect) {
	echo "Connection failed: " . mysqli_connect_error();
}

$admEmail = $_POST['email'];
$admPass = $_POST['password'];

if (empty($admEmail) or empty($admPass)) {
	$Erros[] = "<h4>O campo de login está incompleto!</h4>";
} else {
	$query = "SELECT adm_email FROM admins WHERE adm_email = '$admEmail'";
	$res = mysqli_query($database_connect, $query);
	if (mysqli_num_rows($res) > 0) {
		$query = "SELECT * FROM admins WHERE adm_email='$admEmail' and user_pass='$admPass'";
		$res = mysqli_query($database_connect, $query);
		if (mysqli_num_rows($res) == 1) {
			$data = mysqli_fetch_array($res);
			mysqli_close($database_connect);
			session_start();
			$_SESSION['Logged'] = true;
			$_SESSION['userData'] = $data;
			header('Location: ../admin/dashboard.php');
		} else {
			$Erros[] = "<h4>Usuário e senha não conferem!</h4>";
			header('Location: ../admin/login.php'); //modifiquei aqui
		}
	} else {
		$Erros[] = "<h4>Você não está logado! Cadastre-se!</h4>";
	}
}
