<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login - Northeast Heat Turism</title>
    <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
</head>
<body>
  <header class="top_header">
    <nav>
      <div class="left_header">
        <img class="logo" src="../icon-img/logo.png" alt="logo">
        <input class="search_bar" type="search" placeholder="Pesquisar">
        <button class="search_input" type="button" name="button">
          <i class="fa fa-search"></i></button>
      </div>
      <ul>
        <li><a href="#">Login | Cadastrar</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">BRL</a></li>
      </ul>
    </nav>
  </header>
    <div class="container-login">
      <form class="bloco-login" action="" method="post">
            <span class="faca-login">Faça login ou crie uma conta</span> <br>
            <img  class="logo login-logo" src="../icon-img/logo.png" alt="logo">
          <div class="form-group">
            <label class="label" for="email">Escreva seu E-mail:</label>
            <input type="email" name="email" placeholder="meunome@exemplo.com">
          </div>
          <div class="form-group">
            <label class="label" for="senha">Escreva sua senha:</label>
            <input type="password" name="senha" placeholder="senha123">
          </div>
            <button type="submit" class="primario">Registrar-se</button>
            <span class="faca-login">Ainda não tem uma conta?</span><br>
            <button class="secundario">Cadastre-se</button>
        </form>
      </div>
    <footer><a href="#">Northeast Heat Turism</a></footer>
  </body>
</html>