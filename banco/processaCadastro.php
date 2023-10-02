<?php
require('conexao.php');
include_once('cliente.class.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$criptografia = MD5($senha);

$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setTelefone($telefone);
$cliente->setEstado($estado);
$cliente->setCidade($cidade);
$cliente->setEmail($email);
$cliente->setSenha($criptografia);
$cliente->setCPF($cpf);

/*
Inserir os dados do formulário 
na tabela contato do banco agenda
*/
$sql = "INSERT INTO cadastro
(nome,
telefone,
estado,
cidade,
email,
senha,
cpf)VALUES
('" . $cliente->getNome() . "','" . $cliente->getTelefone() . "','" . $cliente->getEstado() . "','" . $cliente->getCidade() . "','" . $cliente->getEmail() . "','" . $cliente->getSenha() . "','" . $cliente->getCPF() . "')";
if ($conn->query($sql) === true) {
	echo
		"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='../paginas/cadastro.php';</script>";
	die();
} else {
	echo "Erro: " . $sql . "<br>"
		. $conn->error;
	echo "<br>";
	echo "Não foi possivel realizar 
	o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>