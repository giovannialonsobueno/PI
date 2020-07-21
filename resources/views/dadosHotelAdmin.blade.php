<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/dadosHotelAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>
      <div class="title">
        <h2>Informações do Hotel</h2>
      </div>

      <section class="box-info-hotel">
        <div class="titulo">
          <h1>Saint Patric Hotel</h1>
          <button type="button" name="button">Editar</button>
        </div>
        <div class="card-info">


          <div class="img">
            <img src="img-lugar/quarto.JPG" alt="">
          </div>

          <div class="info">


            <p> <span>Endereço:</span> Rua 13 de maio 987, Extrema - Minas Gerais - 36240-000</p>
            <p> <span>Email:</span> hotelparadise@hotel.com</p>
            <p> <span>CNPJ:</span> 21.054.056/0001-21</p>
            <p> <span>Telefone 1:</span>(13) 2346-5434</p>
            <p> <span>Telefone 2:</span> (13) 2346-5356 </p>
            <p><span>Celular:</span> N/C</p>
            <p><span>Wi-fi:</span> Sim </p>
            <p><span>Café da Manha:</span> Sim </p>
            <p><span>Piscina:</span> Sim </p>
            <p><span>Sauna:</span> Não </p>
            <p><span>Permite Pets:</span> Sim </p>
            <p><span>Cancelamento Gratuito:</span> Sim </p>
            <p><span>Descrição:</span> Esta acomodação fica a 4 minutos a pé da praia. Estes apartamentos modernos, situados na pacífica cidade de Santos, ficam a apenas 1 quarteirão da Praia do Gonzaga e próximos a restaurantes, shoppings, cinema e mercados. 72 UHs Tipo Flat Sala, quarto, banheiro, cozinha americana. Ar condicionado, internet banda larga, TV a cabo e telefone automatizado. ÁREAS DO HOTEL: Restaurante – andar “R” Sala de reuniões climatizada e equipada. Estacionamento com manobristas. Piscina em área descoberta, com deck com vista para o mar – andar cobertura. </p>


          </div>

          <div class="exibir-fotos">
               <h2>Imagens</h2>

               <div class="box-fotos">

                 <div class="card-fotos">
                   <img src="img-lugar/quarto.JPG" alt="">

                 </div>

                 <div class="card-fotos">
                   <img src="img-lugar/quarto.JPG" alt="">

                 </div>


               </div>



          </div>

        </div>

      </section>



    </main>

  </body>
</html>
