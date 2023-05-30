<?php
/*
 // Dados do servidor 
 $servidor = 'localhost';
 $usuario = 'usuario_do_banco';
 $senha = 'senha';
 $banco = 'twiter2'; 

	// Carrega os dados da conexão!
	include("dados_conexao.php"); 
	
	if ($_GET) //Testa se existem parâmetros na URL.
	{
		try { // tenta fazer a conexão e executar o INSERT
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //instancia a classe PDO
			$conecta->exec("set names utf8"); // Permite caracteres latinos.
			$comandoSQL = "comando SQL aqui... INSERT, UPDATE ou DELETE";
			echo $comandoSQL; // Este echo serve apenas para teste.
			$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			$grava->execute(array()); 			
		} catch(PDOException $e) { // caso retorne erro
			echo('Deu erro: ' . $e->getMessage());  // Este echo também serve apenas para teste.
		}
	} 
*/




?>


