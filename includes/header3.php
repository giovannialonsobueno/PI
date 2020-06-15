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
}

function fechar() {
  document.getElementById("lightbox").style.display = "none";
}

function abrirCadastro() {
document.getElementById("lightbox").style.display = "flex";
document.getElementById("cadastro").style.display = "flex";
}

function voltarLogin() {
  document.getElementById("login").style.display = "flex";
  document.getElementById("cadastro").style.display = "none";
}
</script>

<!-- <div id="lightbox">
    <link rel="stylesheet" href="../css/login.css">
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
</div> -->

  <header>
      <div class="header-A">
        <img src="img/logo.png" alt="">
        <h1><a href="#">ESTA VAGO</a></h1>
        <div class="espaco">
        </div>
        <button type="button" onclick="abrirCadastro()" name="cadastro">Cadastro</button>
        <button type="button" onclick="abrirLogin()" name="login">Login</button>
        <div class="espaco2">
        </div>
      </div>

      <div class="header-B">
        <form class="" action="index.html" method="post">
          <div class="input1">
            <label for="">Local</label>
            <input type="text" name="" value="">
          </div>
          <div class="input2">
            <label>Entrada</label>
            <input type="text" name="" value="">
          </div>
          <div class="input2">
            <label for="">Saida</label>
            <input type="text" name="" value="">
          </div>
          <div class="input3">
            <label>Hospedes</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                <select>
                  <?php for ($i=0; $i < 10; $i++) { ?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php } ?>
                </select>
                </div>
            </div>
          </div>
          <div class="input3">
            <label>Quartos</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                  <select>
                    <?php for ($i=0; $i < 10; $i++) { ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
          </div>
          <button type="button" name="button">Pesquisar</button>
        </form>
      </div>
    </header>

  <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
