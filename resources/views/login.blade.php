<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/entrar.css">
    <title>Login</title>
  </head>
  <body>
    <div class="lightbox">
      <div class="card-login">
        <div class="cancel">
           <a href="/">Voltar</a>
         </div>
        <div class="img2">
          <img src="/img/logo.png" alt="">
          <h3>Esta Vago</h3>
        </div>
      <hr>
      <div class="formulario">
        <h3>Login</h3>
        <form action="/login" method="post">
        @csrf
          <input type="email" name="email" placeholder="E-mail">
          <input type="password" name="senha" placeholder="Senha">
          <button type="submit" name="entrar">Entrar</button>
        </form>
        <div class="info-rodape">
          {{-- <a href="#">Esqueceu sua senha?</a> --}}
          <a id="cadastre-se" href="/cadastro">Cadastre-se</a>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
