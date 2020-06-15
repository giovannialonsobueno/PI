<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
   $(function(){
    $('#entrada').datepicker({
                      buttonImage:"icon-img/calendario.png",
                      showOn: "button",
                      buttonImageOnly: true
            });
   });
$(function(){
$('#saida').datepicker({
                  buttonImage:"icon-img/calendario.png",
                  showOn: "button",
                  buttonImageOnly: true
        });
});

function abrirLogin() {
  document.getElementById("lightbox").style.display = "flex";
  document.getElementById("login").style.display = "flex";
  document.getElementById("cadastro").style.display = "none";
}

function fecharLogin() {
  document.getElementById("lightbox").style.display = "none";
  document.getElementById("login").style.display = "none";
  document.getElementById("cadastro").style.display = "none";
}

function abrirCadastro() {
  document.getElementById("lightbox").style.display = "flex";
  document.getElementById("login").style.display = "none";
  document.getElementById("cadastro").style.display = "flex";
}

function voltarLogin() {
  document.getElementById("login").style.display = "flex";
  document.getElementById("cadastro").style.display = "none";
}
</script>

<div id="lightbox" style="display=none;">
    <link rel="stylesheet" href="css/login.css">
<div id="login">
    <form action="" method="post">

  <div class="login-top">
    <h2>Login</h2>
    <button class="fechar" type="button" onclick="fecharLogin()">X</button>
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
    <span class="faca-login">Ainda não tem uma conta?</span><br>
</form>
  <button onclick="abrirCadastro()" class="secundario">Cadastrar</button>

</div>

<div id="cadastro">
  <span class="faca-login">Crie uma conta</span>
<form action="" method="post">
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
  <button onclick="voltarLogin()" class="secundario">Voltar</button>
</div>
</div>
