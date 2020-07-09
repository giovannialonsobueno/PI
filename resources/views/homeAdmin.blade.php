<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/homeAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>

      <div class="title">
        <h2>Painel Administrativo</h2>
      </div>

      <section class="box-card-opt">

        <div class="Card-opt">
          <a href="/userAdmin">
          <img src="icon-img/users.jpg" alt="">
          <h2>Usuarios</h2>
          </a>
        </div>

        <div class="Card-opt">
          <a href="/hotelAdmin">
          <img src="icon-img/hoteis.png" alt="">
          <h2>Hoteis</h2>
          </a>
        </div>

        <div class="Card-opt">
          <a href="/cadastroHotel">
          <img src="icon-img/cad-hotel.png" alt="">
          <h2>Cadastro de Hoteis</h2>
          </a>
        </div>

      </section>

      <section class="box-card-opt">

        <div class="Card-opt">
          <a href="#">
          <img src="icon-img/vendas.png" alt="">
          <h2>Vendas</h2>
          </a>
        </div>

        <div class="Card-opt">
          <a href="#">
          <img src="icon-img/cancelamento.jpg" alt="">
          <h2>Cacelamentos</h2>
          </a>
        </div>

        <div class="Card-opt">
          <a href="#">
          <img src="icon-img/feedback.jpg" alt="">
          <h2>Feedback</h2>
          </a>
        </div>

      </section>



    </main>


    </div>




  </body>
</html>
