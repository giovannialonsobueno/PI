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
          <form class="" method="post">
      <div class="all">
          <div class="lugar">
          <label for="Onde">Onde</label> <br>
          <input type="text" name="local" placeholder="Insira o lugar que gostaria de ir"><br>
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
      </form>
      <button id="cadastrar" onclick="openForm()"> <img src="icon-img/user.png" alt=""><span>Entrar</span></button>
        </div>
    </nav>
            <!-- <script>
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
  </header>
  <img class="banner" src="img/banner1.jpg" alt="">
  <section>
    <h2 class="titulo-promocao">As melhores promoções para você:</h2>
    <div class="grid-main">
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
      </div>
    </div>
  </section>

  <section>
      <div class="grid-main">
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
      </div>
    </div>
  </section>

  <section>
      <div class="grid-main">
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
      </div>
    </div>
  </section>

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
    <!-- <div class="receber-email">
      <hr>
      <div class="img-email">
        <img src="img-lugar/o-email.png" alt="">
      </div>
      <div class="bloco-receber-email">
        <span>Participe para receber ofertas exclusivas</span>
        <div class="input-button">
        <input type="text">
        <div class="btn-receber">
        <button>Receber</button>
       </div>
      </div>
      </div>
      <hr>
    </div> -->
  <footer>
    <a href="#">Northeast Heat Turism</a>
  </footer>
</body>
</html>
