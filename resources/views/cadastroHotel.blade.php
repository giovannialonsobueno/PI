<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/cadastrarHotel.css">
    <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>

      <div class="title">
        <h2>Cadastrar Hotel</h2>
      </div>

      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <form action="/cadastroHotel" method="post" enctype="multipart/form-data">
            @csrf
            <p>Nome do Hotel</p>
            <input  type="text" name="nome" placeholder="name">
            @error ('nome')
              <span class="erro">Coloque um nome no hotel</span>
            @enderror
            <p>Endereço</p>
            <input  type="text" name="endereco" placeholder="adress">
            @error ('endereco')
              <span class="erro">Coloque um endereco no hotel</span>
            @enderror
            <p>E-mail</p>
            <input  type="email" name="email" placeholder="email">
            @error ('email')
              <span class="erro">Email inválido ou já em uso</span>
            @enderror
            <p>Cnpj</p>
            <input  type="number" name="cnpj" placeholder="cnpj">
            @error ('cnpj')
              <span class="erro">Forneça o cnpj do responsável legal do hotel</span>
            @enderror
            <div class="box-cep">

              <div class="cep">
                <p>Cep</p>
                <input  type="number" name="cep" placeholder="zip code">
                @error ('cep')
                  <span class="erro">forneça um cep válido</span>
                @enderror
              </div>
              <div class="cep">
                <p>Cidade</p>
                <input  type="text" name="cidade" placeholder="city">
                @error ('cidade')
                  <span class="erro">dê a cidade do local</span>
                @enderror
              </div>

              <div class="cep2">
                <p>Estado</p>
                <input  type="text" name="estado" placeholder="country">
                @error ('estado')
                  <span class="erro">dê o estado do local</span>
                @enderror
              </div>
            </div>

            <div class="box-cep">

              <div class="cep">
                <p>Telefone 1</p>
                <input  type="text" name="tel1" placeholder="phone number 1">
              </div>
              @error ('tel1')
                <span class="erro">forneça um telefone válido</span>
              @enderror
              <div class="cep">
                <p>Telefone 2</p>
                <input  type="text" name="tel2" placeholder="phone number 2">
                @error ('tel2')
                  <span class="erro">forneça um telefone valido</span>
                @enderror
              </div>

              <div class="cep2">
                <p>Celular</p>
                <input  type="text" name="celular" placeholder="cellphone">
              </div>
              @error ('celular')
                <span class="erro">forneça um celular válido</span>
              @enderror
            </div>

            <p>Descrição</p>
            <textarea name="descricao" rows="8" cols="80" placeholder="description"></textarea>
            @error ('descricao')
              <span class="erro">Dê uma descrição ao seu hotel</span>
            @enderror
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
                <input type="checkbox" name="" value="1">
                <p>Cancelamento Gratuito</p>
              </div>

              <div class="check-box">
                <select name="numEstrelas">
                  <option selected disabled>Estrelas</option>
                @for ($i=1; $i <= 5; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
                </select>
                <p>Classificação em Estrelas<i class="fas fa-star"></i></p>
              </div>
              @error ('numEstrelas')
                <span class="erro"></span>
              @enderror

            <div class="upload-image">
              <p>Selecionar Imagens</p>
              <input type="file" id="myFile" multiple size="50" name="fotos[]" onchange="myFunction()" >
              <p id="demo"></p>
              @error ('fotos')
                <span class="erro">Forneça ao mínimo uma foto para o hotel</span>
              @enderror
            </div>

            </div>

            <button type="submit" name="button">Cadastrar</button>

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
