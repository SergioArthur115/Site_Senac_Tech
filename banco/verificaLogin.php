<?php
include('conexao.php');
$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

$criptografia = MD5($senha);

if (isset($entrar)) {
	$verifica = mysqli_query($conn, "SELECT * FROM cadastro where nome = '$login' and senha = '$criptografia'") or die("Erro ao buscar do banco");
	if (mysqli_num_rows($verifica) <= 0) {
		echo "<script language='javascript' 
		type='text/javascript'>
		alert('O campo senha deve ser preenchido');
		window.location.href='../paginas/login.php';
		</script>";
		die();
	} else {
		session_start();
		$_SESSION['session_id'] = $login;
		header("Location: ../paginas/login.php");
	}
}
?>