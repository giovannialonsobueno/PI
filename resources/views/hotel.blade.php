<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/hotelAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");
    <main>

      <div class="title">
        <h2>Hoteis</h2>
      </div>

      <section class="box-pesquisa-user">
        <p>Pesquisar Hotel</p>

        <div class="pesquisa-user">
          <form class="" action="index.html" method="post">
            <input type="text" name="" value="" placeholder="nome do hotel">
            <button type="button" name="button">Pesquisar</button>
          </form>
        </div>
      </section>

      <section class="box-return-users">

        <div class="users-title">

          <h2>Hoteis Cadastrados</h2>
          <h2 id="Nusuarios">1289</h2>

        </div>


        <div class="return-user-info">
          <div class="user-id">
            <p>Hotel Id</p>
          </div>

          <div class="user-name">
            <p>Hotel Name</p>
          </div>

          <div class="user-email">
            <p>Hotel address</p>
          </div>

          <div class="user-ver-mais">
            <a href="#">Hotel Info</a>

          </div>
        </div>


        <div class="return-user-info">
          <div class="user-id">
            <p>049384767574</p>
          </div>

          <div class="user-name">
            <p>Saint Patrick Hotel</p>
          </div>

          <div class="user-email">
            <p>Rua São Patricio, 324 - Santos</p>
          </div>

          <div class="user-ver-mais">
            <a href="#">Ver Informações</a>

          </div>
        </div>


      </section>
    </main>

  </body>
</html>
