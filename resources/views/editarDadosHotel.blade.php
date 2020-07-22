<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/cadastrarHotel.css">
    <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>

      <div class="title">
        <h2>Atualizar informações</h2>
      </div>

      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <form class="" action="/cadastrarHotel" method="post" enctype="multipart/form-data">
            @csrf
            <p>Nome do Hotel</p>
            <input type="text" name="nome" value="" placeholder="name">

            <p>Endereço</p>
            <input type="text" name="endereco" value="" placeholder="adress">

            <p>E-mail</p>
            <input type="text" name="email" value="" placeholder="email">

            <p>Cnpj</p>
            <input type="text" name="cnpj" value="" placeholder="cnpj">

            <div class="box-cep">

              <div class="cep">
                <p>Cep</p>
                <input type="text" name="cep" value="" placeholder="zip code">
              </div>

              <div class="cep">
                <p>Cidade</p>
                <input type="text" name="cidade" value="" placeholder="city">
              </div>

              <div class="cep2">
                <p>Estado</p>
                <input type="text" name="estado" value="" placeholder="country">
              </div>

            </div>

            <div class="box-cep">

              <div class="cep">
                <p>Telefone 1</p>
                <input type="text" name="tel1" value="" placeholder="phone number 1">
              </div>

              <div class="cep">
                <p>Telefone 2</p>
                <input type="text" name="tel2" value="" placeholder="phone number 2">
              </div>

              <div class="cep2">
                <p>Celular</p>
                <input type="text" name="celular" value="" placeholder="cellphone">
              </div>

            </div>

            <p>Descrição</p>
            <textarea name="descricao" rows="8" cols="80" placeholder="description"></textarea>

            <div class="box-check-box">

              <div class="check-box">
                <input type="checkbox" name="wifi" value="1">
                <p>wi-fi</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="cafeDaManha" value="1">
                <p>Café da manha</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="piscina" value="1">
                <p>Piscina</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="sauna" value="1">
                <p>Sauna</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="permitePets" value="1">
                <p>Permite Pets</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="cancelamentoGratuito" value="1">
                <p>Cancelamento gratuito</p>
              </div>

              <div class="check-box">
                <select name="numEstrelas">
                @for ($i=1; $i <= 5; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
                </select>
                <p></i>Classificação em Estrelas</p>
              </div>

            </div>

            <hr>

            <div class="exibir-fotos">
                 <h2>Imagens</h2>

                 <div class="box-fotos">

                   <div class="card-fotos">
                     <img src="img-lugar/quarto.JPG" alt="">
                     <div class="lixo-icon">
                       <i class="fas fa-trash"></i>
                       <a href="#">Excluir </a>
                     </div>
                   </div>

                   <div class="card-fotos">
                     <img src="img-lugar/quarto.JPG" alt="">
                     <div class="lixo-icon">
                       <i class="fas fa-trash"></i>
                       <a href="#">Excluir </a>
                     </div>
                   </div>
            </div>


            <div class="upload-image">
              <hr>
              <h2>Adicionar Imagens</h2>
              <p>Selecionar Imagens</p>
              <input type="file" name="fotos[]" id="myFile" multiple size="50" onchange="myFunction()" >
              <p id="demo"></p>

            </div>

            <hr>



            <button type="submit"  name="button">ATUALIZAR</button>

          </form>



        </div>

      </section>




    </main>

    <script>
    function myFunction(){
      var x = document.getElementById("myFile");
      var txt = "";
      if ('files' in x) {
        if (x.files.length == 0) {
          txt = "Select one or more files.";
        } else {
          for (var i = 0; i < x.files.length; i++) {
            txt += "<br><strong>" + (i+1) + ". file</strong><br>";
            var file = x.files[i];
            if ('name' in file) {
              txt += "name: " + file.name + "<br>";
            }
            if ('size' in file) {
              txt += "size: " + file.size + " bytes <br>";
            }
          }
        }
      }
      else {
        if (x.value == "") {
          txt += "Select one or more files.";
        } else {
          txt += "The files property is not supported by your browser!";
          txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
      }
      document.getElementById("demo").innerHTML = txt;
    }
</script>

  </body>
</html>
