
<?php 
require 'conn.php'; 
require 'tratamento.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="_assets/_css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
<form class="needs-validation" novalidate method="POST">
<div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationCustomUsername" name="email" placeholder="E-mail" aria-describedby="inputGroupPrepend" required>
        <div class="input-group-prepend">
        </div>
        <div class="invalid-feedback">
          Por favor, Insira um E-mail Válido.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Senha</label>
      <input type="password" class="form-control" id="validationCustom01" name="senha" placeholder="Senha" required>
      <div class="valid-feedback">
        Parece Bom!
      </div>
      <div class="invalid-feedback">
          Por favor, Insira Sua Senha.
        </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Confirmar Senha</label>
      <input type="password" class="form-control" id="validationCustom02" name="confirmar senha" placeholder="Confirmar Senha" required>
      <div class="valid-feedback">
        Parece Bom!
      </div>
      <div class="invalid-feedback">
          Por favor, Confirme Sua Senha.
        </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome" required>
      <div class="valid-feedback">
        Parece Bom!
      </div>
    </div>
    <div class="col-md-6 mb-5">
      <label for="validationCustom02">Sobrenome</label>
      <input type="text" class="form-control" id="validationCustom02" name="sobrenome" placeholder="Sobrenome" required>
      <div class="valid-feedback">
        Parece Bom!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Bairro</label>
      <input type="text" class="form-control" id="validationCustom03" name="bairro" placeholder="Bairro" required>
      <div class="invalid-feedback">
        Por favor, Forneça um Bairro Válido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Cidade</label>
      <input type="text" class="form-control" id="validationCustom04" name="cidade" placeholder="Cidade" required>
      <div class="invalid-feedback">
        Por favor, Forneça uma Cidade Válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Estado</label>
      <input type="text" class="form-control" id="validationCustom05" nome="estado" placeholder="Estado" required>
      <div class="invalid-feedback">
        Por favor, Forneça um Estado Válido.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Logradouro</label>
      <input type="text" class="form-control" id="validationCustom03" name="logradouro" placeholder="Logradouro" required>
      <div class="invalid-feedback">
        Por favor, Forneça um Logradouro.
      </div>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationCustom03">Número</label>
      <input type="text" class="form-control" id="validationCustom03" name="numero" placeholder="Número" required>
      <div class="invalid-feedback">
        Por favor, Forneça um Número
      </div>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationCustom03">Complemento</label>
      <input type="text" class="form-control" id="validationCustom03" name="complemento" placeholder="Complemento" required>
      <div class="invalid-feedback">
        Por favor, Forneça o Complemento
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordar com os termos e condições.
      </label>
      <div class="invalid-feedback">
        Você deve concordar antes de enviar.
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-10">
  <button class="btn btn-primary" type="submit">Enviar Formulário</button>
  </div>
  <div class="col-sm-2 ">
  <button class="btn btn-default" type="reset">Limpar Formulário</button>
  </div>
  </div>
</form>
        </div>
    <?php require('footer.php');?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="_assets/_js/jquery-3.3.1.min.js"></script>
    <script src="_assets/_js/bootstrap.bundle.min.js"></script>
    <script src="_assets/_js/bootstrap.min.js"></script>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  </body>
</html>