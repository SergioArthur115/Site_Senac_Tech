<?php
/*
A função require() do PHP tem a mesma funcionalidade da 
função include(), citada acima, com a diferença que se 
caso o arquivo que você está incluindo não exista 
(ou não seja encontrado), será gerado um Fatal Error 
(erro fatal), paralizando a execução de qualquer script 
que venha após a linha do require(); outra divergência 
é o fato desta função não aceitar parâmetros via GET 
para o arquivo chamado. Caso você utilize este parâmetro, 
ele será ignorado.

*/
require('conexao.php');//chamar o arquivo
include_once('aluno.class.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$data = $_POST['data'];
$estados = $_POST['estados'];

$aluno = new Aluno();
$aluno->setNome($nome);
$aluno->setEmail($email);
$aluno->setFone($fone);
$aluno->setData($data);
$aluno->setEstados($estados);


//inserir os dados do formulário na tabela contato do banco agenda
$sql = "INSERT INTO contato(nome, email, telefone, dataNascimento, estados)
VALUES('".$aluno->getNome()."','".$aluno->getEmail()."','".$aluno->getFone()."','".$aluno->getData()."','".$aluno->getEstados()."')";
//query($sql) - realiza uma consulta simples no banco
if ($conn->query($sql) === TRUE) {
    
	echo "<script language='javascript' type='text/javascript'>
			alert('Cadastro realizado com sucesso!');
			window.location.href='cadastra.php';</script>";			
			die();
	//die — Equivalente a exit()
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
	echo "<br />";
	echo "Não foi possível realizar o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>