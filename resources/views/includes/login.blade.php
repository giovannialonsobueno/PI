
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
    <link rel="stylesheet" href="/css/login.css">
<div id="login">

  <div class="card-login">
    <div class="cancel">
      <button type="button" onclick="fechar()"name="button">X</button>

    </div>
    <div class="img">
      <img src="img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario">
    <h3>Login</h3>
    <form class="" action="" method="post">

      <input type="email" name="" value="" placeholder="E-mail">
      <input type="password" name="" value="" placeholder="Senha">
      <button type="button" name="button">Entrar</button>

    </form>
    <div class="info-rodape">
      <a href="#">Esqueceu sua senha?</a>
      <a id="cadastre-se"href="#" onclick="abrirCadastro()">Cadastre-se</a>
    </div>
  </div>
  </div>
</div>

<div id="cadastro">
  <div class="card-login">
    <div class="cancel">
      <button type="button" onclick="fechar()"name="button">X</button>
    </div>

    <div class="img">
      <img src="img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario-Cad">
    <h3>Cadastro</h3>
    <form class="" action="" method="post">
      <p>Nome Completo</p>
      <input type="text" name="" value="" placeholder="nome">

      <p>E-mail</p>
      <input type="email" name="" value="" placeholder="email">
      <div class="box-senha">
        <div class="senha">
          <p>Senha</p>
          <input type="text" name="" value="" placeholder="senha">
        </div>

        <div class="conf-senha">
          <p>Confirme a Senha</p>
          <input type="text" name="" value="" placeholder="confirmar senha">
        </div>
      </div>

      <button type="button" name="button">Cadastrar</button>
    </form>
    <div class="info-rodape-cad">
      <a href="#" onclick="abrirLogin()">Já tem uma conta?</a>
    </div>
  </div>
  </div>
</div>
</div>
