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
        </div>
      </section>
      <section class="buttom-verMais">
        <button type="button" onclick="abrir()" name="button">+</button>
      </section>
    </main>
 @include("includes/footer")
</body>
</html>
