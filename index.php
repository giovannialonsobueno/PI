<?php include("produtos/servicos.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Welcome - Home Page</title>
</head>
<body>
  <?php include("includes/header.php"); ?>
  <video width="100%" height="100%" muted autoplay loop>
    <source src="img/estaVago.mp4" type="video/mp4">
  </video>
    <h2 class="titulo-promocao">As melhores promoções para você</h2>
      <section class="grid-main">
        <?php foreach($servicos as $item):
        if ($item["desconto"]) {
        $valor = $item["preco"] - ( $item["desconto"]/100 * $item["preco"]);
        } else {
          $valor = $item["preco"];
        }
        switch ($item["servico"]) {
          case 1:
            $servico = "Hospedagem";
            $descricao_preco = "Diárias a partir de:";
            break;
          case 2:
            $servico = "Turismo";
            $descricao_preco = "Viajens a partir de:";
            break;
        }?>
      <div class="div"> <img src="fotos_locais/<?php echo $item["foto"];?>" alt="<?php echo $item["nome"];?>">
        <div class="info-bloco">
          <div class="produto">
            <span class="tipo-produto"><?php echo $servico;?></span>
            <p class="nome-produto"><?php echo $item["nome"];?></p>
          </div>
          <div class="rating-and-stars">
              <span class="number-rating"><?php echo $item["avaliacao"];?></span>
            <div class="star-rating">
              <?php for ($i=0; $i < 5; $i++){?>
                <?php if ($i < round($item["avaliacao"], 0, PHP_ROUND_HALF_DOWN)): ?>
                  <i>&#9733;</i>
                <?php else: ?>
                  <i>&#9734;</i>
                <?php endif; ?>
              <?php } ?>
            </div>
          </div>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco"><?php echo $descricao_preco; ?></p>
          <div class="preco-g">
          <p class="preco">R$<?php echo number_format($valor, 2, ',', '.');?></p>
        <?php if ($item["desconto"]): ?>
          <div class="promocao">
          <span class="valor-total">R$<?php echo number_format($item["preco"], 2, ',', '.');?></span>
          <span class="desconto">-<?php echo $item["desconto"];?>%</span>
          </div>
        <?php endif; ?>
          </div>
        </div>
        <a href="item.php?id=<?php echo $item["id"];?>" class="ver_mais">Ver mais</a>
      </div>
      <?php endforeach;?>
  </section>

<h2>Conheça o Brasil</h2>
<section class="brasil">
  <div class="card-brasil" style="background-image: url('destinos/brasil1.jpg');">
    <button type="button" name="button" style="background-color: #0ca879;">Fernando de Noronha</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil2.jpg');">
    <button type="button" name="button" style="background-color: #edbf18;">Florianopolis</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil3.jpg');">
    <button type="button" name="button" style="background-color: #2e5cbf;">Minas Gerais</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil5.jpg');">
    <button type="button" name="button" style="background-color: #b336a6;">Mato Grosso</button>
  </div>
</section>

<section class="box-info">
  <div class="card-info">
    <img src="icon-img/calendario2.png" alt="">
      <div class="box-texto">
        <h2>Cancelamento gratuito.</h2>
        <p>Cancele sua reserva com de forma rapida e facil.</p>

      </div>
  </div>

  <div class="card-info">
    <img src="icon-img/aviao.png" alt="">
    <div class="box-texto">
    <h2>Melhores opções</h2>
    <p>As melhores opções de destino para você e sua familia</p>
    </div>
  </div>

  <div class="card-info">
    <img src="icon-img/cadeado.png" alt="">
    <div class="box-texto">
    <h2>Segurança</h2>
    <p>Segurança e privacidade para as suas compras.</p>
    </div>
  </div>
</section>

<h2>Como foi a sua viagem?</h2>

  <section class="coments">
    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="destinos/P2.jpg" alt="foto">
          <span class="nome">Priscila Alcantara</span>
          <hr>
          <div class="comment-area">
          <span class="horario">1 semana atrás</span><br>
          <span class="comentario">Atendimento atencioso e solicitos de todos staff do hotel.
                                    Excelente café da manhã com produtos de qualidades e muita variedade.
                                    Quartos impecavelmente limpos.
                                    Ótima localização.
                                    Excelente ambiente digno de um hotel 58. </span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="destinos/P3.jpg" alt="foto">
          <span class="nome">Maria Clara</span>
          <hr>
          <div class="comment-area">
          <span class="horario">2 semana atrás</span><br>
          <span class="comentario">With spacious, modern and renovated rooms, this hotel is a classic in Rio de Janeiro. Arguably and the most elegant and traditional, with an excellent restaurant infrastructure and good leisure area, this hotel is a necessary experience for those who wish to enjoy the luxury of a hotel with a beach city in Brazil.

                                    Com quartos espaços, modernos e reformados, este hotel é um clássico do Rio de Janeiro. Indiscutivelmente e o mais elegante e tradicional, com uma excelente infraestrutura de restaurantes e boa área de lazer, tonam esse hotel uma experiencia necessária para aqueles que desejam usufruir o luxo de um hotel com uma cidade de praia do Brasil. </span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="destinos/P1.png" alt="foto">
          <span class="nome">Gabriel Martins</span>
          <hr>
          <div class="comment-area">
          <span class="horario">2 meses atrás</span><br>
          <span class="comentario">Estivemos em um final de semana com a familia - 6 apartamentos, e não posso deixar de agradecer o carrinho e a atenção do maitre Santos e do Gonçalves. Feijoada com roda de samba fantástica, atendimento sempre nota 10. A torta de Brie com damascos do Brunch mantém o padão....e os drinks na piscina são sempre maravilhosos. Parabéns!!! </span>
        </div>
      </div>
    </div>

    <div class="section-comentario">
        <div class="img-nome-horario">
          <img src="destinos/P4.jpeg" alt="foto">
          <span class="nome">joyce Mascarenhas</span>
          <hr>
          <div class="comment-area">
          <span class="horario">3 semana atrás</span><br>
          <span class="comentario">Ótima vista para o mar, a parte da piscina ótima estrutura, os quartos são aconchegante, não está tão em conta a diária como era com os antigos gestores, mas vale a pena ir pelo menos uma vez na vida rsrsrsrs.. </span>
        </div>
      </div>
    </div>
  </section>
 <?php include("includes/footer.php"); ?>
</body>
</html>
