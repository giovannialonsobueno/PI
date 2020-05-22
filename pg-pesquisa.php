<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-pesquisa.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <title>Pesquisa - Northeast Heat Turism</title>
</head>

<body>
  <header class="top_header">
    <nav>
      <div class="left_header">
        <img class="logo" src="icon-img/logo.png" alt="logo">
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
  <section class="container">
    <nav class="nav-da-pesquisa">
      <h3>Para onde deseja ir?</h3>
      <div class="bloco-all">
        <div class="bloco-lugar">
          <label for="Onde" class="label">Onde</label> <br>
          <input type="place" name="local" placeholder="Insira o lugar que gostaria de ir"> <br>
        </div>
        <div class="bloco-data">
          <label for="data" class="label">Datas</label> <br>
          <input type="date" class="data" name="data" placeholder="dd/mm/yy" required>
          <input type="date" class="data" name="data" placeholder="dd/mm/yy" required>
        </div>
        <div class="bloco-quartos">
          <label for="Room" class="label">Quartos</label><br>
          <input type="number" class="room">
        </div>
        <div class="bloco-pessoas">
          <label for="pessoas" class="label">Pessoas</label><br>
          <input type="number" class="pessoas">
        </div>
        <div class="bloco-procura">
          <button type="submit" name="botao-procura"><a href="#"></a> Procurar</button>
        </div>
      </div>
    </nav>
  </section>
  <section>
    <h2>Acomodações em Fortaleza</h2><br>
    <nav class="nav-filtros">
      <ul>
        <li><a href="#">Preço</a></li>
        <li><a href="#">Tipo de estadia</a></li>
        <li><a href="#">Mais filtros</a></li>
      </ul><br>
    </nav>
    <main>
      <div class="resultado-pesquisa">
        <img src="img-lugar/esmeralda-praia-hotel.jpg" alt="">
        <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quas officiis,
          consequuntur enim unde alias sint ipsam tenetur aliquam illo eius </p>
        <div class="rtn-i">
          <i class="fas fa-star"></i>
          <span class="rtn">4,5 <span class="comments">(30) <span class="price">R$ 1400,00</span></span></span>
        </div>
      </div>
      <hr>

      <div class="resultado-pesquisa">
        <img src="img-lugar/esmeralda-praia-hotel.jpg" alt="">
        <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quas officiis,
          consequuntur enim unde alias sint ipsam tenetur aliquam illo eius </p>
        <div class="rtn-i">
          <i class="fas fa-star"></i>
          <span class="rtn">4,5 <span class="comments">(30) <span class="price">R$ 1400,00</span></span></span>
        </div>
      </div>
      <hr>
      <div class="resultado-pesquisa">
        <img src="img-lugar/esmeralda-praia-hotel.jpg" alt="">
        <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quas officiis,
          consequuntur enim unde alias sint ipsam tenetur aliquam illo eius </p>
        <div class="rtn-i">
          <i class="fas fa-star"></i>
          <span class="rtn">4,5 <span class="comments">(30) <span class="price">R$ 1400,00</span></span></span>
        </div>
      </div>
      <hr>
      <div class="resultado-pesquisa">
        <img src="img-lugar/esmeralda-praia-hotel.jpg" alt="">
        <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quas officiis,
          consequuntur enim unde alias sint ipsam tenetur aliquam illo eius </p>
        <div class="rtn-i">
          <i class="fas fa-star"></i>
          <span class="rtn">4,5 <span class="comments">(30) <span class="price">R$ 1400,00</span></span></span>
        </div>
      </div>
      <hr>
    </main>
  </section>
  <footer>
    <a href="#">Northeast Heat Turism</a>
  </footer>
</body>