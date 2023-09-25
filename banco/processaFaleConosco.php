<?php
require('conexao.php');
include_once('faleConosco.class.php');

$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$modalidade = $_POST['modalidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['obs'];
$cpf = $_POST['cpf'];

$faleConosco = new FaleConosco();
$faleConosco->setNome($nome);
$faleConosco->setEstado($estado);
$faleConosco->setCidade($cidade);
$faleConosco->setEmail($email);
$faleConosco->setTelefone($telefone);
$faleConosco->setModalidade($modalidade);
$faleConosco->setAssunto($assunto);
$faleConosco->setMensagem($mensagem);
$faleConosco->setCPF($cpf);


/*
Inserir os dados do formulário 
na tabela contato do banco agenda
*/
$sql = "INSERT INTO faleconosco
(nome,
estado,
cidade,
email,
telefone,
modalidade,
assunto,
mensagem,
cpf)VALUES
('" . $faleConosco->getNome() . "','" . $faleConosco->getEstado() . "','" . $faleConosco->getCidade() . "','" . $faleConosco->getEmail() . "','" . $faleConosco->getTelefone() . "','" . $faleConosco->getModalidade() . "','" . $faleConosco->getAssunto() . "','" . $faleConosco->getMensagem() . "','" . $faleConosco->getCPF() . "')";
if ($conn->query($sql) === true) {
	echo
		"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='../paginas/fale_conosco.html';</script>";
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