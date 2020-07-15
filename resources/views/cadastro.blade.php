<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/entrar.css">
    <title>Entrar</title>
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
  <div class="formulario-Cad">
    <h3>Cadastro</h3>
    <form action="/cadastro" method="post">
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
          <a href="/cadastro">Já tem uma conta?</a>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
