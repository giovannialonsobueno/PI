<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/headerAdmin.css">
    <link rel="stylesheet" href="/css/hotelAdmin.css">
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
          <h2>Quartos Cadastrados</h2>
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
            <p>Diária</p>
          </div>

          <div class="user-ver-mais">
            <a href="/hotelAdmin">Info</a>
          </div>
        </div>

        @foreach ($quartos as $quarto)
        <div class="return-user-info">
          <div class="user-id">
            <p>{{$quarto->id}}</p>
          </div>

          <div class="user-name">
            <p>{{$quarto->nome}}</p>
          </div>

          <div class="user-email">
            <p>{{$quarto->valorDiaria}}</p>
          </div>

          <div class="user-ver-mais">
            <a href="/dadosQuartosAdmin/{{$quarto->id}}">Ver Informações</a>
          </div>
        </div>
        @endforeach


      </section>
    </main>

  </body>
</html>
