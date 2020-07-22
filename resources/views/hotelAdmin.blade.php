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
            <p>Id</p>
          </div>

          <div class="user-name">
            <p>Nome</p>
          </div>

          <div class="user-email">
            <p>Endereço</p>
          </div>

          <div class="user-ver-mais">
            <a href="/hotelAdmin">Info</a>
          </div>
        </div>

        @foreach ($hoteis as $hotel)
        <div class="return-user-info">
          <div class="user-id">
            <p>{{$hotel->id}}</p>
          </div>

          <div class="user-name">
            <p>{{$hotel->nome}}</p>
          </div>

          <div class="user-email">
            <p>{{$hotel->endereco}}</p>
          </div>

          <div class="user-ver-mais">
            <a href="/dadosHotelAdmin/{{$hotel->id}}">Ver Informações</a>
          </div>
        </div>
        @endforeach


      </section>
    </main>

  </body>
</html>
