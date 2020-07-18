<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/cadastroQuartos.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>

      <div class="title">
        <h2>Cadastrar Quartos</h2>
      </div>



      <section class="box-cad-hotel">
        <div class="cad-info-hotel">



          <form class="" action="index.html" method="post" enctype="multipart/form-data">
            <p>Nome quarto</p>
            <input type="text" name="" value="" placeholder="room name">

            <div class="box-cep">

              <div class="cep">
                <p>Numero de Camas de Solteiro</p>
                <input type="text" name="" value="" placeholder="single">
              </div>

              <div class="cep">
                <p>Numero de Camas de Casal</p>
                <input type="text" name="" value="" placeholder="couple">
              </div>

              <div class="cep2">
                <p>Valor Diaria</p>
                <input type="text" name="" value="" placeholder="Value">
              </div>

            </div>



            <p>Descrição</p>
            <textarea name="name" rows="8" cols="80" placeholder="description"></textarea>




            <div class="upload-image">
              <p>Selecionar Imagens</p>
              <input type="file" id="myFile" multiple size="50" onchange="myFunction()" >
              <p id="demo"></p>

            </div>

            <button type="button" name="button">Cadastrar</button>

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
