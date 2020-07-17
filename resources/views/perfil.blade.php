<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
    <link rel="stylesheet" href="/css/footer.css">

    <title></title>
  </head>
  <body>
    @include('includes.header')

    <main>

      <div class="title">
        <h2>Perfil</h2>

      </div>


      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <div class="img-perfil">
            <img src="img\perfil.png" alt="">
          </div>

          <form class="" action="/atualizar" method="post" enctype="multipart/form-data">
          @csrf
            <p>Nome</p>
            <input type="text" name="nome" value="{{ auth()->user()->nome }}" placeholder="">

            <p>E-mail</p>
            <input type="text" name="email" value="{{ auth()->user()->email }}" placeholder="">

            <p>CPF</p>
            <input type="text" name="cpf" value="{{ auth()->user()->cpf }}" placeholder="cpf">

            <div class="box-cep">

              <div class="cep">
                <p>Data de Nascimento</p>
                <input type="date" name="dataNasc" value="{{ auth()->user()->data_nasc }}" placeholder="xx/xx/xxxx">
              </div>

              <div class="cep">
                <p>Cidade</p>
                <input type="text" name="cidade" value="{{ auth()->user()->cidade }}" placeholder="city">
              </div>

              <div class="cep2">
                <p>País</p>
                <input type="text" name="pais" value="{{ auth()->user()->pais }}" placeholder="country">
              </div>

            </div>

            <div class="box-cep">

              <div class="cep">
                <p>Telefone</p>
                <input type="text" name="tel" value="{{ auth()->user()->tel }}" placeholder="phone number">
              </div>


              <!-- <div class="cep2">
                <p>Celular</p>
                <input type="text" name="" value="" placeholder="cellphone">
              </div> -->

            </div>

            <div class="check-boxx">
              <input type="checkbox" name="receber_info" value="1" >
              <p>Deseja receber informações e promoções por email?</p>
            </div>

            <div class="alterar-senha">
              <a href="#" onclick="abrirSenha()">Alterar Senha</a>
            </div>



            <button type="submit" name="button">Salvar Alterações</button>

          </form>



        </div>

      </section>

    </main>



    @include('includes.footer')
  </body>
</html>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

function abrirSenha() {
  document.getElementById("lightbox2").style.display = "flex";
  document.getElementById("senha").style.display = "flex";

}

function fecharSenha() {
  document.getElementById("lightbox2").style.display = "none";
  document.getElementById("senha").style.display = "none";

}


</script>

<div id="lightbox2">
    <link rel="stylesheet" href="css/entrar.css">

<div id="senha">

  <div class="card-login">
    <div class="cancel">
      <button type="button" onclick="fecharSenha()"name="button">X</button>

    </div>
    <div class="img2">
      <img src="/img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario">
    <h3>ALTERAR SENHA</h3>
    <form class="" action="/atualizarSenha" method="post">
      @csrf
      <input type="password" name="senha" value="" placeholder="Nova Senha">
      <input type="password" name="confSenha" value="" placeholder="Confirmar Senha">
      <button type="submit" name="button">Alterar</button>

    </form>

    </div>
  </div>
</div>

</div>
