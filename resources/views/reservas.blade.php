@include("includes/functions")
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/reserva.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title></title>
  </head>
  <body>
    <header>
      <img src="/img/logo.png" alt="">
      <h1>Esta Vago</h1>
    </header>

    <main>
      <section class="card-reserva">

        <div class="titulo">
          @php
            $quarto = call_pdt($_ID);
            extract($quarto["horario"]);
            extract($quarto["comodidades"]);
          @endphp
          <h1>{{$quarto["nome"]}}</h1>
          <p>{{$quarto["endereco"]}}</p>
        </div>

        <div class="card-info">

          <div class="img">
            <img src="/hoteis/{{$quarto["fotos"][0]}}" alt="">
          </div>

          <div class="info">
            <h1>Standart Room</h1>
            <p><span>Entrada:</span> <span> {{strftime('%A, %d de %B as %H:%Mh', strtotime($entrada))}}</span></p>
            <p><span>Saida:</span> <span> {{strftime('%A, %d de %B as %H:%Mh', strtotime($saida))}}</span></p>
            <p><span>Hospedes:</span> Max <span> 2 pessoas</span></p>
            @if ($cafe)<p><span>Alimentação:</span> Café da manha</p>@endif
            <p><span>{{$quarto['noites']}} Noites x R$ {{number_format($quarto['preco'], 2,',', '.')}} :</span> R$ {{number_format($quarto['preco'] *2, 2,',', '.')}}</p>
              @if (!$cancelar)
                <p><h4>Cancelamento Gratuito</h4></p>
              @else
                <p><span>Taxa de cancelamento: R$ {{number_format($cancelar, 2,',', '.')}} </span></p> @endif
            @if (!$taxa_reg)
            <p><h4>Sem taxa de registro</h4></p>
            @else
              <p><span>Taxa de registro: R$ {{number_format($taxa_reg, 2,',', '.')}}</span></p>
            @endif
          </div>
        </div>
        @php
        $total = $taxa_reg + ($quarto['preco'] * $quarto['hospedes']);
        @endphp
        <div class="total">
          <h1>Total: R$ {{number_format($total, 2,',', '.')}}</h1>
        </div>
        <hr>
        <h1>DADOS DA RESERVA</h1>
        <form class=""  method="post">
          <h2><span>Responsavel pelo Check-In</span></h2>
          <p>Nome completo do responsável do quarto</p>
          <input type="text" name="" value="" placeholder="nome">
          <p>Email do responsável do quarto</p>
          <input type="email" name="" value="" placeholder="Email">
          <div class="dados">
            <div class="cpf">
              <p>CPF</p>
              <input type="text" name="" value="" placeholder="xxx.xxx.xxx-xx">
            </div>
            <div class="cpf">
              <p>Celular</p>
              <input type="text" name="" value="" placeholder="(11)99999-9999">
            </div>
          </div>

          <hr>

          <h1>DADOS DE PAGAMENTO</h1>
          <div class="dados">
            <div class="cpf">
              <p>Numero do Cartão</p>
              <input type="text" name="" value="" placeholder="xxxx xxxx xxxx xxxx">
            </div>
            <div class="cpf">
              <p>Nome no cartão</p>
              <input type="text" name="" value="" placeholder="nome">
            </div>
          </div>

          <div class="dados">
            <div class="cpf">
              <p>Validade</p>
              <input type="text" name="" value="" placeholder="val">
            </div>
            <div class="cpf">
              <p>Cod Segurança</p>
              <input type="text" name="" value="" placeholder="cvv">
            </div>

          </div>

          <div class="dados">
            <div class="cpf">
              <p>CPF do titular</p>
              <input type="text" name="" value=""placeholder="xxx.xxx.xxx-xx" >
            </div>
            <div class="cpf">
              <p>Data de Nasc do titular</p>
              <input type="text" name="" value=""placeholder="dd/mm/aa">
            </div>
          </div>
          <p>Numero de Parcelas</p>

            <select>
              @for ($i=0; $i <= 12; $i++)
              <option value="{{$i}}">1</option>
              @endfor
            </select>

            <div class="termos">
              <div class="check">
                <input type="checkbox" name="" value=""placeholder="xxx.xxx.xxx-xx" >
              </div>
              <div class="cpf">
                <p>Deseja salvar os dados do cartão?</p>
              </div>
            </div>
            <hr>

            <div class="termos">
              <div class="check">
                <input type="checkbox" name="" value=""placeholder="xxx.xxx.xxx-xx" >
              </div>
              <div class="cpf">
                <p>Li e aceito as condições da  política de cancelamento, termos de uso, política de privacidade</p>
              </div>
            </div>
            <button type="button" name="button">Concluir</button>
        </form>
      </section>
    </main>
  </body>
</html>
