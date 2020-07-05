@include("includes/functions")
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/resultadoPesquisa.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <title>Hoteis</title>
</head>
<body>
  @include("includes/header")
    <main>
    @php
    $hotel = call_pdt($_ID);
    switch ($hotel["tipo"]) {
      case 1:
        $servico = "Hospedagem";
        $info_local = "Informações do hotel:";
        $horario = true;
        break;
      case 2:
        $servico = "Pousada";
        $info_local = "Informações da Pousada:";
        $horario = false;
        break;
    }
    @endphp
      <div class="titulo">
        <div class="box-esq">
          <h1>{{$hotel["nome"]}}</h1>
          <span>{{$hotel['endereco']}}</span>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>

        <div class="box-dir">
          <span>Diárias a partir de: </span>
          <h1>R$ {{number_format($hotel['preco'], 2, ',', '.')}}</h1>
          <button type="button" name="button">Ver quartos</button>
        </div>
      </div>

      <section class="img">
        <div class="box-img-esq">
          <img src="/hoteis/{{$hotel["fotos"][0]}}" alt="">
        </div>
        <div class="box-img-dir">
          <div class="img-top">
            <img src="/hoteis/{{$hotel["fotos"][1]}}" alt="">
          </div>
          <div class="img-down">
            <img src="/hoteis/{{$hotel["fotos"][2]}}" alt="">
          </div>
        <button type="button" class="button-verMais" onclick="abrir()" name="button"> <img src="/hoteis/{{$hotel["fotos"][3]}}" alt=""> <span>Ver mais</span> </button>
        </div>
      </section>
<div class="data">
  <div class="disponibilidade">
    <h1>Disponibilidade</h1>
    <p>Selecione da data da sua viagem</p>
  </div>

  <div class="set-data">

  <form class="" action="index.html" method="post">

    <div class="entrada">
      <p>Entrada</p>
      <input type="text" name="" value="">
    </div>

    <div class="entrada">
      <p>Saida</p>
      <input type="text" name="" value="">
    </div>

    <div class="hospedes">
      <p>Quartos</p>
      <select>
        @for ($i=0; $i <= 5; $i++)
          <option value="{{$i}}">{{$i}}</option>
        @endfor
      </select>
    </div>

    <div class="hospedes">
      <p>Hospedes</p>
      <select>
        @for ($i=0; $i <= 10; $i++)
          <option value="{{$i}}">{{$i}}</option>
        @endfor
      </select>
    </div>
    <button type="button" name="button">Consultar</button>
  </form>
  </div>
</div>
    </main>
{{-- banner rotativo --}}
<script>
function abrir() {
  document.getElementById("fundo").style.display = "block";
}
function fechar() {
  document.getElementById("fundo").style.display = "none";
}
</script>
<style>

.fundo{
z-index: -10;
position: fixed;
background-color: black;
width: 100%;
height: 100%;
object-fit: cover;
filter: brightness(50%);
}

</style>
<div id="fundo">
<img src="" alt="">
<h1>{{$hotel["nome"]}}</h1>
<div class="banners">
<button type="button" onclick="fechar()"  class="fechar" name="button"><i class="fa fa-times-circle"></i></button>
<body>

<div class="slider">
          @for ($i=0; $i < sizeof($hotel['fotos']); $i++)
            <img class="slides" src="/hoteis/{{$hotel["fotos"][$i]}}">
          @endfor
      <button class="slider_esquerda" onclick="plusDivs(-1);plusBG(-1)">&#10094;</button>
      <button class="slider_direita" onclick="plusDivs(1);plusBG(1)">&#10095;</button>
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName('slides');
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
  }
</script>
 @include("includes/footer")
</body>
</html>
