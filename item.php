<?php include("produtos/servicos.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/resultadoPesquisa.css">
  <title>Welcome - Home Page</title>
</head>
<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/login.php"); ?>
    <main>
    <?php  foreach($servicos as $a){if ($a["id"] == $_GET["id"]) {
      $item = $a;
    }}
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
    }
    ?>
      <div class="titulo">
        <div class="box-esq">
          <h1><?php echo $item["nome"]; ?></h1>
          <span>Rua dos patriotas, 857 - Santos</span>

          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>

        <div class="box-dir">
          <span><?php echo $descricao_preco; ?></span>

          <h1>R$<?php echo number_format($valor, 2, ',', '.');?></h1>
          <?php if ($item["desconto"]): ?>
            <span class="valor-total">R$<?php echo number_format($item["preco"], 2, ',', '.');?></span>
          <?php endif; ?>
          <button type="button" name="button">Ver quartos</button>
        </div>
      </div>

      <section class="img">
        <div class="box-img-esq">
          <img src="fotos_locais/<?php echo $item["foto"]; ?>" alt="">
        </div>

        <div class="box-img-dir">
          <div class="img-top">
            <img src="fotos_locais/<?php echo $item["foto"]; ?>" alt="">
          </div>
          <div class="img-down">
            <img src="fotos_locais/<?php echo $item["foto"]; ?>" alt="">
          </div>
        </div>
      </section>
      <section class="buttom-verMais">
        <button type="button" name="button">+</button>
      </section>

        <div class="card-info-hotel">
          <div class="box-titulo-hotel">
            <h1>Informações do Hotel</h1>
              <div class="titulo-dir">

                <div class="wi-fi">
                  <i class="fas fa-calendar-alt"></i>
                  <span>Entrada 15:00</span>
              </div>

              <div class="wi-fi">
                <i class="fas fa-calendar-alt"></i>
                <span>Saida 12:00</span>
              </div>
            </div>
          </div>
          <hr>
          <div class="info">
            <div class="info-esq">
              <p>Esta acomodação fica a 4 minutos a pé da praia. Estes apartamentos modernos, situados na pacífica cidade de Santos, ficam a apenas 1 quarteirão da Praia do Gonzaga e próximos a restaurantes, shoppings, cinema e mercados. 72 UHs Tipo Flat Sala, quarto, banheiro, cozinha americana. Ar condicionado, internet banda larga, TV a cabo e telefone automatizado. ÁREAS DO HOTEL: Restaurante – andar “R” Sala de reuniões climatizada e equipada. Estacionamento com manobristas. Piscina em área descoberta, com deck com vista para o mar – andar cobertura.</p>
            </div>

            <div class="info-dir">
              <h2>Taxas e impostos</h2>
              <p>Valores referentes a impostos e taxas administrativas já estão incluídos no momento da finalização da compra, no site do ESTA VAGO (não sendo necessário, após a finalização da compra, o pagamento de nenhum tipo de taxa).</p>
              <h2>Politicas de cancelamento</h2>
              <p>Viajante, aqui o cancelamento é GRATUITO!*
                  Isso mesmo: se acontecer algum imprevisto, você tem a facilidade de cancelar até duas semanas após a sua compra, sem qualquer multa ou cobrança extra.

                  *O cancelamento grátis é válido até 14 dias após a compra (com exceção do dia do check-in ou check-in em semanas de feriados). Após este prazo, será aplicada uma multa de 20%.

                  *Para semanas de feriados será cobrada multa de 50%.
                  *No dia do check-in ou posterior ao mesmo será cobrada multa de 100%.
                  *Se você optar pelos créditos para utilizar em futuras viagens, poderá efetuar o cancelamento gratuito (com exceção do dia do check-in e semanas de feriados) até a véspera do check-in - sem qualquer cobrança de multa.</p>

            </div>
          </div>
        </div>
    </main>
 <?php include("includes/footer.php"); ?>
</body>
</html>
