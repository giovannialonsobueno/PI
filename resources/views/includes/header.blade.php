<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/css/header.css">
  <header>
      <div class="header-A">
        <img src="/img/logo.png" alt="">
        <h1><a href="/">ESTAVAGO</a></h1>
        <div class="botoes_header">
          @auth
          <button><a href="/logout">Sair</a></button>
          @endauth
          @guest
          <button type="button" onclick="abrirCadastro()" name="cadastro">Cadastro</button>
          <button type="button" onclick="abrirLogin()" name="login">Entrar</button>
          @endguest
        </div>
      </div>

      <div class="header-B">
        <form action="/pesquisa" method="post">
          <div class="input1">
            <label for="">Local</label>
            <input type="text" name="" value="">
          </div>
          <div class="input2">
            <label>Entrada</label>
            <input type="date" id="saida" name="">
          </div>
          <div class="input2">
            <label for="">Saida</label>
            <input type="date" id="entrada" name="">
          </div>
          <div class="input3">
            <label>Hospedes</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                <select>
                    @for ($i=0; $i <= 9; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                </div>
            </div>
          </div>
          <div class="input3">
            <label>Quartos</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                  <select>
                    @for ($i=0; $i <= 9; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
            </div>
          </div>
          <button type="submit" name="button">Pesquisar</button>
        </form>
      </div>
    </header>
  <script>
var x, i, j, l, ll, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);

  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");

  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
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
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
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
document.addEventListener("click", closeAllSelect);
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

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
</script>

<div id="lightbox">
    <link rel="stylesheet" href="css/login.css">
<div id="login">

  <div class="card-login">
    <div class="cancel">
      <button type="button" onclick="fecharLogin()"name="button">X</button>

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
      <button type="button" onclick="fecharLogin()"name="button">X</button>

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
      <p>Nome Completo</p>
      <input type="text" name="nome" placeholder="nome">

      <p>E-mail</p>
      <input type="email" name="email" placeholder="email">

      <div class="box-senha">

        <div class="senha">
          <p>Senha</p>
          <input type="password" name="senha" placeholder="senha">
        </div>

        <div class="conf-senha">
          <p>Confirme a Senha</p>
          <input type="password" name="confirmar" placeholder="confirmar senha">
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
