<?php
//criar a conexão com o banco de dados
//nome do servidor
$host = 'localhost';
//nome do usuário
$user = 'root';
//senha do banco
$senha = '';
//nome do banco
$banco = 'inf4m212senactech';
/*
As funções mysql permitem acessar 
servidores de banco de dados 
mysql (i no final do mysql 
significa improved-melhorada)
*/
$conn = new mysqli
($host, $user, $senha, $banco);

if($conn->connect_error){
	die("Falha na conexão: "
	.$conn->connect_error);
}

?>