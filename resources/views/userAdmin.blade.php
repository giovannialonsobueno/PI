<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/userAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin"); 

    <main>

      <div class="title">
        <h2>Usuarios</h2>
      </div>

      <section class="box-pesquisa-user">
        <p>Pesquisar Usuario</p>

        <div class="pesquisa-user">
          <form class="" action="index.html" method="post">
            <input type="text" name="" value="" placeholder="nome completo">
            <button type="button" name="button">Pesquisar</button>
          </form>
        </div>
      </section>

      <section class="box-return-users">

        <div class="users-title">

          <h2>Usuarios Cadastrados</h2>
          <h2 id="Nusuarios">65678</h2>

        </div>


        <div class="return-user-info">
          <div class="user-id">
            <p>User Id</p>
          </div>

          <div class="user-name">
            <p>User Name</p>
          </div>

          <div class="user-email">
            <p>User email</p>
          </div>

          <div class="user-ver-mais">
            <a href="#">User Info</a>

          </div>
        </div>


        <div class="return-user-info">
          <div class="user-id">
            <p>049384767574</p>
          </div>

          <div class="user-name">
            <p>Adoliram Barbosa</p>
          </div>

          <div class="user-email">
            <p>dodo@gmail.com</p>
          </div>

          <div class="user-ver-mais">
            <a href="#">Ver Informações</a>

          </div>
        </div>


      </section>
    </main>

  </body>
</html>
