<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Welcome - Home Page </title>
</head>
<body>
  <script>
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
</script>
  <header class="container">
    <nav class="nav-da-pesquisa">
          <!-- <form class="" method="post"> -->
      <div class="all">
          <div class="lugar">
          <label for="local">Local</label> <br>
          <input type="text" name="local" placeholder="Onde quer ir?"><br>
        </div>
        <div class="calendario">
          <label for="entrada">Entrada</label><br>
          <input id="entrada" type="date" name="entrada">
        </div>
        <div class="calendario">
          <label for="saida">Saída</label><br>
          <input id="saida" type="date" name="saida">
        </div>
        <div>
          <label for="quartos">Quartos</label><br>
          <input type="number" id="quartos">
        </div>
        <div>
          <label for="hospedes">Hóspedes</label><br>
          <input type="number" id="hospedes">
        </div>
          <div class="procura">
          <button type="submit" name="botao-procura"> <img src="icon-img/procurar.png" alt=""> </button>
          </div>
      <button id="cadastrar" onclick="openForm()"> <img src="icon-img/user.png" alt=""><span>Entrar</span></button>
      <!-- </form> -->
        </div>
    </nav>
  </header>
    <!--  pop up do botão de cadastro a ser adicionado
            <script>
            function openForm() {
              document.getElementById("cadastrar").style.display = "block";
            }

            function closeForm() {
              document.getElementById("cadastrar").style.display = "none";
            }
            </script>
    <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->
  <img class="banner" src="img/banner1.jpg" alt="">
    <h2 class="titulo-promocao">As melhores promoções para você</h2>
    <section class="grid-main">
      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Fortaleza</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
          <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
          </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
      <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>
  </section>


      <section class="grid-main">
      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
          </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>
  </section>

<img class="banner" src="img/banner2.jpg" alt="">
      <section class="grid-main">
      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>

      <div class="div"> <img src="img-lugar\esmeralda-praia-hotel.jpg" alt="">
        <div class="info-bloco">
          <span class="tipo-produto">Hospedagem</span>
          <p class="nome-produto">Esmeralda Praia Hotel</p>
          <div class="rating-and-stars">
              <span class="number number-rating">4.5</span>
            <div class="star-rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
              </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          </div>
          <span class="nome-lugar">Natal</span>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Preço por noite a partir de:</p>
          <div class="preco-g">
          <span class="real">R$</span>
          <p class="preco">660,00</p>
          <span class="valor-total">R$980</span>
          <span class="desconto">-30%</span>
        </div>
        </div>
        <button class="ver_mais" type="button" name="ver_mais">Ver mais</button>
      </div>
  </section>

<h2>Como foi a sua viajem?</h2>

  <section class="coments">
    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="img-lugar/foto.jpg" alt="foto">
          <span class="nome">Gabriel Martins</span>
          <hr>
          <div class="comment-area">
          <span class="horario">1 semana atrás</span><br>
          <span class="comentario">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="img-lugar/foto.jpg" alt="foto">
          <span class="nome">Gabriel Martins</span>
          <hr>
          <div class="comment-area">
          <span class="horario">1 semana atrás</span><br>
          <span class="comentario">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="img-lugar/foto.jpg" alt="foto">
          <span class="nome">Gabriel Martins</span>
          <hr>
          <div class="comment-area">
          <span class="horario">1 semana atrás</span><br>
          <span class="comentario">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="img-lugar/foto.jpg" alt="foto">
          <span class="nome">Gabriel Martins</span>
          <hr>
          <div class="comment-area">
          <span class="horario">1 semana atrás</span><br>
          <span class="comentario">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer_info">
      <h3>conheça</h3>
    <a href="https://theuselessweb.com/" target="_blank">Quem somos</a>
    <a href="https://theuselessweb.com/" target="_blank">Trabalhe conosco</a>
    <a href="https://theuselessweb.com/" target="_blank"></a>
    </div>

    <div class="footer_info">
      <h3>viagens</h3>
    <a href="https://theuselessweb.com/" target="_blank">Hotéis</a>
    <a href="https://theuselessweb.com/" target="_blank">Passagens aéreas</a>
    </div>

    <div class="footer_info">
      <h3>fale conosco</h3>
      <a href="https://theuselessweb.com/" target="_blank">FAQ</a>
      <a href="https://theuselessweb.com/" target="_blank"></a>
    </div>

    <div id="social_info" class="footer_info">
      <h3>Redes sociais</h3>
      <a href="#"><img src="icon-img/facebook_logo.png" alt=""></a>
      <a href="#"><img src="icon-img/twitter_logo.png" alt=""> </a>
      <a href="#"><img src="icon-img/instagram_logo.png" alt=""> </a>
      <a href="#"><img src="icon-img/linkedin_logo.png" alt=""> </a>
      <a href="#"><img src="icon-img/youtube_logo.png" alt=""> </a>
    </div>
  </footer>
</body>
</html>
