<?php include("includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/resultadoPesquisa.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <title>Welcome - Home Page</title>
</head>
<body>
  <?php include("includes/header.blade.php"); ?>
    <main>
    <?php $hotel = call_pdt($_GET['id']);
    switch ($hotel["tipo"]) {
      case 1:
        $servico = "Hospedagem";
        $descricao_preco = "Diárias a partir de:";
        $info_local = "Informações do hotel:";
        $horario = true;
        break;
      case 2:
        $servico = "Turismo";
        $descricao_preco = "Viajens a partir de:";
        $info_local = "Informações para sua viagem:";
        $horario = false;
        break;
    }
    ?>
      <div class="titulo">
        <div class="box-esq">
          <h1><?php echo $hotel["nome"]; ?></h1>
          <span>Rua dos patriotas, 857 - Santos</span>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>

        <div class="box-dir">
          <span><?php echo $descricao_preco; ?></span>
          <h1>R$<?php echo number_format($hotel['preco'], 2, ',', '.');?></h1>
          <button type="button" name="button">Ver quartos</button>
        </div>
      </div>

      <section class="img">
        <div class="box-img-esq">
        <?php for ($i=0; $i < 3; $i++){}?>
          <img src="hoteis/<?php echo $hotel["fotos"][0]; ?>" alt="">
        </div>
        <div class="box-img-dir">
          <div class="img-top">
            <img src="hoteis/<?php echo $hotel["fotos"][1]; ?>" alt="">
          </div>
          <div class="img-down">
            <img src="hoteis/<?php echo $hotel["fotos"][2]; ?>" alt="">
          </div>
        </div>
      </section>
      <section class="buttom-verMais">
        <button type="button" onclick="abrir()" name="button">+</button>
      </section>
    </main>
 <?php include("includes/footer.blade.php"); ?>
</body>
</html>
