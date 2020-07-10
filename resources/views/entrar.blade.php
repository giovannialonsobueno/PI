<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entrar</title>
  </head>
  <body>

<div id="lightbox">
    <link rel="stylesheet" href="css/entrar.css">
<div id="login">

  <div class="card-login">
    <div class="cancel">

    </div>
    <div class="img2">
      <img src="/img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario">
    <h3>Login</h3>
    <form class="" action="/login" method="post">
    @csrf
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="senha" placeholder="Senha">
      <button type="submit" name="entrar">Entrar</button>
    </form>
    <div class="info-rodape">
      {{-- <a href="#">Esqueceu sua senha?</a> --}}
      <a id="cadastre-se" href="#" onclick="abrirCadastro()">Cadastre-se</a>
    </div>
    </div>
  </div>
</div>

<div id="cadastro">
  <div class="card-login">
    <div class="cancel">

    </div>
    <div class="img2">
      <img src="/img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario-Cad">
    <h3>Cadastro</h3>
    <form class="" action="/cadastro" method="post">
      @csrf
      <input type="text" name="nome" placeholder="Nome completo">

      <input type="email" name="email" placeholder="E-mail">

      <div class="box-senha">
            <div class="senha">
              <input type="password" name="senha" placeholder="Senha">
            </div>

            <div class="conf-senha">
              <input type="password" name="confirmar" placeholder="Confirme sua senha">
            </div>
          </div>
          <button type="submit" name="button">Cadastrar</button>
        </form>
        <div class="info-rodape-cad">
          <a href="#" onclick="abrirLogin()">Ja tem uma conta?</a>
        </div>
      </div>
      </div>
    </div>
    </div>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script>

      function abrirLogin() {
        document.getElementById("login").style.display = "flex";
        document.getElementById("cadastro").style.display = "none";
      }

      function abrirCadastro() {
        document.getElementById("login").style.display = "none";
        document.getElementById("cadastro").style.display = "flex";
      }
      </script>
  </body>
</html>
