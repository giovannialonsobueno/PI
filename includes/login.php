<?php
        //login
        // include_once("classes/Usuario.php");
        //
        // $loginOk = true;
        //
        // if($_POST) {
        //     $usuario = Usuario::login($_POST['email'],$_POST['senha']);
        //     if($usuario) {
        //         // Marcar o usuário como logado
        //         session_start();
        //         $_SESSION['logado'] = true;
        //
        //         // Redirecionar usuário para página interna
        //         header('location: index.php');
        //     } else {
        //         // Variável pare validação de campos
        //         $loginOk = false;
        //     }
        // }

        //cadastro
        // Testando para verificar o envio do formulário
        // if($_POST){
        //
        //     // Criar um objeto da classe usuário
        //     extract($_POST);
        //     $usuario = new Usuario($nome, $email, $senha);
        //
        //     // Salvar o objeto no banco de dados
        //     $usuario->save();
        //
        //     // Criar uma session para marcar o usuário como logado
        //     session_start();
        //     $_SESSION['logado'] = true;
        //
        //     // Direcionar ele para página interna
        //     header('location: feed.php');
        // }
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

function abrirLogin() {
  document.getElementById("lightbox").style.display = "flex";
  document.getElementById("login").style.display = "flex";
  document.getElementById("cadastro").style.display = "none";
}

function fechar() {
  document.getElementById("lightbox").style.display = "none";
  document.getElementById("login").style.display = "none";
  document.getElementById("cadastro").style.display = "none";
}

function abrirCadastro() {
  document.getElementById("lightbox").style.display = "flex";
  document.getElementById("login").style.display = "none";
  document.getElementById("cadastro").style.display = "flex";
}
</script>

<div id="lightbox">
    <link rel="stylesheet" href="css/login.css">
<div id="login">
    <form action="" method="post">
  <div class="login-top">
    <h2>Login</h2>
    <button class="fechar" type="button" onclick="fechar()">X</button>
  </div>
  <hr>
<div class="form-group">
  <label class="sub-titulo" for="email">Nome ou e-mail:</label>
  <input type="email" name="email" placeholder="meunome@gmail.com">
</div>
<div class="form-group">
  <label for="senha">Senha:</label>
  <input type="password" name="senha" placeholder="senha123">
</div>
  <button type="submit" class="primario">Entrar</button>
</form>
</div>

<div id="cadastro">
<form action="" method="post">
  <div class="login-top">
    <h2>Cadastro</h2>
    <button class="fechar" type="button" onclick="fechar()">X</button>
  </div>
  <hr>
<div class="form-group">
  <label for="nome">Nome</label><br>
  <input type="text" name="nome" placeholder="nome">
</div>
<div class="form-group">
  <label for="email">E-mail:</label><br>
  <input type="email" name="email" placeholder="meunome@gmail.com">
</div>
<div class="form-group">
  <label for="senha">Senha:</label><br>
  <input type="password" name="senha" placeholder="senha123">
</div>
<div class="form-group">
  <label for="senha">Confirmação de senha</label><br>
  <input type="password" name="senha" placeholder="senha123">
</div>
  <button type="submit" class="primario">Cadastrar</button>
</form>
</div>
</div>
