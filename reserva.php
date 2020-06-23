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
          <h1>Saint Patric Hotel</h1>
          <p>Rua 13 de maio Santos Dumont, Minas Gerais - 36240-000</p>

        </div>

        <div class="card-info">

          <div class="img">
            <img src="img-lugar/quarto.JPG" alt="">
          </div>

          <div class="info">
            <h1>Standart Room</h1>
            <h3></h3>
            <p> <span>Entrada:</span> qua <span> 12 de abril</span> as <span>12hs</span></p>
            <p> <span>Saida:</span> sex <span> 14 de abril</span> as <span>12hs</span></p>
            <p> <span>Hospedes:</span> Max <span> 2 pessoas</span> </p>
            <p> <span>Alimentação:</span> Café da manha </p>
            <p><span>2 Noites x R$ 200:</span> R$ 400.00 </p>
            <p><span>Taxas de reserva:</span> R$ 125.00 </p>
            <h4>Cancelamento Gratuito</h4>

          </div>

        </div>





        <div class="total">
          <h1>Total</h1>
          <h1 class="V2">R$ 525.00</h1>
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
