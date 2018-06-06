<?php

if (isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes(ucwords($_POST['email']));
    $senha = addslashes($_POST['senha']);
    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $bairro = addslashes($_POST['bairro']);
    $cidade = addslashes($_POST['cidade']);
	$estado = addslashes($_POST['estado']);
	$logradouro = addslashes($_POST['logradouro']);
	$numero = addslashes($_POST['numero']);
	$complemento = addslashes($_POST['complemento']);       
	
        $sql = $pdo->prepare("INSERT INTO usuarios SET email=:email, senha=:senha, nome=:nome, sobrenome=:sobrenome, bairro=:bairro, cidade=:cidade, estado=:estado, logradouro=:logradouro, numero=:numero, complemento=:complemento ;"); //pdo ja foi iniciado no conexao.php
        $sql -> bindValue(":email", $email);
		$sql -> bindValue(":senha", md5($senha));
		$sql -> bindValue(":nome", $nome);
		$sql -> bindValue(":sobrenome", $sobrenome);
		$sql -> bindValue(":bairro", $bairro);
		$sql -> bindValue(":cidade", $cidade);
		$sql -> bindValue(":estado", $estado);
		$sql -> bindValue(":logradouro", $logradouro);
		$sql -> bindValue(":numero", $numero);
		$sql -> bindValue(":complemento", $complemento);
		$sql -> execute();		
		
		if($sql->rowCount() > 0){
           header("Location: index.php"); //redirecionamento
        }else{
			echo "Deu erro";

        }		
        exit();

}