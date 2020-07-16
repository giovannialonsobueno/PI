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
      <input required type="text" name="nome" placeholder="Nome completo (Mínimo de 10 caracteres)" value="{{ old('nome') }}">
      @error ('nome')<span>Nome muito curto</span>@enderror
      <input required type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
      @error ('email')<span>Email já em uso</span>@enderror
      <div class="box-senha">
            <div class="senha">
              <input required type="password" name="senha" placeholder="Senha (Mínimo 6 caracteres)">
            </div>

            <div class="conf-senha">
              <input required type="password" name="confirmar" placeholder="Confirme sua senha">
            </div>
          </div>
          @error ('senha')<span>Senha curta ou validação incorreta</span>@enderror
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
