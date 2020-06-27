<?php include("produtos/db.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reserva.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title></title>
  </head>
  <body>
    <header>
      <img src="img/logo.png" alt="">
      <h1>Esta Vago</h1>
    </header>

    <main>

      <section class="card-reserva">

        <div class="titulo">
          <?php foreach($hoteis as $a){if ($a["id"] == $_GET["id"]) {
            $item = $a;}}
            extract($item["horario"]);?>
          <h1><?php echo $item["nome"];?></h1>
          <p><?php echo $item["endereco"];?></p>
        </div>

        <div class="card-info">

          <div class="img">
            <img src="img-lugar/quarto.JPG" alt="">
          </div>

          <div class="info">
            <h1>Standart Room</h1>
            <p><span>Entrada:</span> <span> <?php echo strftime('%A, %d de %B as %H:%Mh', strtotime($entrada)); ?> </span></p>
            <p><span>Saida:</span> <span> <?php echo strftime('%A, %d de %B as %H:%Mh', strtotime($saida)); ?> </span></p>
            <p><span>Hospedes:</span> Max <span> 2 pessoas</span></p>
            <p><span>Alimentação:</span> Café da manha </p>
            <p><span><?php echo $item['noites']?> Noites x R$ <?php echo number_format($item['preco'], 2,',', '.') ?> :</span> R$ <?php echo number_format($item['preco'] *2, 2,',', '.') ?> </p>
            <?php extract($item["comodidades"]);
                  if (!$cancelar): ?><p><h4>Cancelamento Gratuito</h4></p>
                <?php else: ?> <p><span>Taxa de cancelamento: R$ <?php echo number_format($cancelar, 2,',', '.'); ?> </span></p> <?php endif; ?>
            <?php if ($taxa_reg): ?><p><span>Taxa de registro: R$ <?php echo number_format($taxa_reg, 2,',', '.'); ?> </span></p>
              <?php else: ?><p><h4>Sem taxa de registro</h4></p> <?php endif; ?>
          </div>
        </div>
        <?php $total = $taxa_reg + ($item['preco'] * $item['hospedes']) ?>
        <div class="total">
          <h1>Total: R$ <?php echo number_format($total, 2,',', '.');  ?></h1>
        </div>

        <hr>
        <h1>DADOS DA RESERVA</h1>

        <form class=""  method="post">
          <h2><span>Responsavel pelo Check-In</span></h2>
          <p>Nome completo do responsável do quarto 1 | Quarto Duplo Econômico - Café da manhã</p>
          <input type="text" name="" value="" placeholder="nome">
          <p>Email do responsável do quarto 1 | Quarto Duplo Econômico - Café da manhã</p>
          <input type="email" name="" value="" placeholder="Email">
          <div class="dados">
            <div class="cpf">
              <p>CPF</p>
              <input type="text" name="" value="" placeholder="xxx.xxx.xxx-xx">
            </div>
            <div class="cpf">
              <p>Celular</p>
              <input type="text" name="" value="" placeholder="(11)99999-9999">
            </div>
          </div>

          <h1></h1>

          <hr>

          <h1>DADOS DE PAGAMENTO</h1>

          <div class="dados">
            <div class="cpf">
              <p>Numero do Cartão</p>
              <input type="text" name="" value="" placeholder="xxxx xxxx xxxx xxxx">
            </div>
            <div class="cpf">
              <p>Nome no cartão</p>
              <input type="text" name="" value="" placeholder="nome">
            </div>
          </div>

          <div class="dados">
            <div class="cpf">
              <p>Validade</p>
              <input type="text" name="" value="" placeholder="val">
            </div>
            <div class="cpf">
              <p>Cod Segurança</p>
              <input type="text" name="" value="" placeholder="cvv">
            </div>

          </div>

          <div class="dados">
            <div class="cpf">
              <p>CPF do titular</p>
              <input type="text" name="" value=""placeholder="xxx.xxx.xxx-xx" >
            </div>
            <div class="cpf">
              <p>Data de Nasc do titular</p>
              <input type="text" name="" value=""placeholder="dd/mm/aa">
            </div>
          </div>




          <p>Numero de Parcelas</p>

            <select>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>

            <div class="termos">
              <div class="check">
                <input type="checkbox" name="" value=""placeholder="xxx.xxx.xxx-xx" >
              </div>
              <div class="cpf">
                <p>Deseja salvar os dados do cartão?</p>

              </div>
            </div>


            <h1></h1>
            <hr>


            <div class="termos">
              <div class="check">
                <input type="checkbox" name="" value=""placeholder="xxx.xxx.xxx-xx" >
              </div>
              <div class="cpf">
                <p>Li e aceito as condições da  política de cancelamento, termos de uso, política de privacidade</p>

              </div>
            </div>



            <button type="button" name="button">Concluir</button>


        </form>







      </section>



    </main>

  </body>

</html>
