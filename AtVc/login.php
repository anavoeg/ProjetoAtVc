<?php
session_start();
require 'conn.php';
    if(isset($_SESSION['usuario']) && empty($_SESSION['usuario']) == false){
        header("Location: index.php");//se usuario tiver logado
        exit; //para que todo o codigo abaixo nao seja executado
    }

    if(isset($_POST['email']) && empty($_POST['email']) == FALSE){ // verificando se a filtragem foi bem sucedida.
            //filtrando por questões de segurança(SQL INJECTIONS) e armazenando os valores
        $email = addslashes($_POST['email']);
        
        $senha = addslashes($_POST['senha']);

        /*Valor retornado: Valor da requisitada variável em caso de sucesso, FALSE se o filtro falhar,
         ou NULL se o parâmetro variable_name é um variável não definida.*/
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql -> bindValue(":email", $email);
        
        $sql -> bindValue(":senha", md5($senha));
        $sql -> execute();
        //verificar se achou retorno
        if($sql -> rowCount() > 0){
            $sql = $sql->fetch();//pegando os dados
            $_SESSION['usuario'] = $sql['id'];
            // header("Location: index.php");
            echo "ENTROU";
            exit; //para que todo o codigo abaixo nao seja executado
        } else {
            echo "<script type='text/javascript'>alert('Usuário ou Senha Incorretos.')</script>";
        }
        
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="_assets/_css/meu.css" rel="stylesheet" type="text/css">
    <link href="_assets/_css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <!--Fonts Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--Icones e titulo -->
    <link rel="shortcut icon" href="_assets/_img/icon.png" />
    <title>Viagem Certa</title>
  </head>
  <body>
    <div class="container-fluid">
    <?php require('header.php');?>

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="POST">
			<fieldset>
				<h2>Login</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail">
				</div>
				<div class="form-group">
                    <input type="password" name="senha" id="password" class="form-control input-lg" placeholder="Senha">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Lembrar-me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Esqueceu sua senha?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="cadastro.php" class="btn btn-lg btn-primary btn-block">Cadastre-se</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>


    <?php require('footer.php');?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="_assets/_js/jquery-3.3.1.min.js"></script>
    <script src="_assets/_js/bootstrap.bundle.min.js"></script>
    <script src="_assets/_js/meu.js"></script>
    <script src="_assets/_js/bootstrap.min.js"></script>
  </body>
</html>