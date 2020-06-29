<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/pesquisa.css">
    <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <main>
      <section>
        <div class="filtro">
            <h2>Filtros</h2>

            <h3>Categoria</h3>

            <form action="" method="get">

                <div class="star-rating">
                  <input type="checkbox" name="1-estrela" value="1">
                  <i class="fas fa-star"></i>
                </div>

                <div class="star-rating">
                  <input type="checkbox" name="2-estrela" value="2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>

                <div class="star-rating">
                  <input type="checkbox" name="3-estrela" value="3">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
                  </i>
                </div>

                <div class="star-rating">
                  <input type="checkbox" name="4-estrela" value="4">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
                  </i><i class="fas fa-star"></i>
                </div>

                <div class="star-rating">
                  <input type="checkbox" name="5-estrela" value="5">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
                  </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <!-- <input type="submit" value="Submit"> -->

                  <h3 id="titulo2">Selecione o valor</h3>

                  <div class="slidecontainer">
                    <p>Valor R$:<span id="demo"></span></p>
                    <input type="range" min="1" max="1000" value="500" class="slider" id="myRange">
                  </div>



                  <div class="opcionais">

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Cancelamento gratuito</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>WI-FI</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Café da manha</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Piscina</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Sauna</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Estacionamento</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Permite pets</span>
                    </div>

                    <div class="star-rating">
                      <input type="checkbox" name="5-estrela" value="5">
                      <span>Academia</span>
                    </div>

                  </div>
              </form>

        </div>




        <div class="pesquisa">
          <div class="card-pesquisa">
            <img src="destinos/Banff-AlbertaCanada.jpg" alt="">
            <div class="info">
              <h2>Hotel Bela Mar</h2>
              <h4>Santa Catarina - SC</h4>
              <div class="rating-and-stars">
                  <span class="number-rating">4.5</span>
                <div class="star-rating">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star">
                  </i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              </div>

              <div class="wifi">
                <div class="wi-fi">
                  <i class="fas fa-wifi"></i>
                <span>wi-fi</span>
              </div>

              <div class="wi-fi">
                <i class="fas fa-water"></i>
              <span>Piscina</span>
            </div>
              </div>

              <div class="cancel">
                <i class="fas fa-check-circle"></i>
              <span>Cancelamento Gratis</span>
            </div>


            <div class="localizacao">
              <i class="fas fa-thumbs-up"></i>
            <span>Excelente Localização</span>
          </div>

            </div>

            <div class="card-preco">
              <div class="preco">
                <p>Diarias a partir de R$345.00</p>

              </div>

              <div class="preco2">
                <p>R$200.00</p>
                <button type="button" name="button">Reservar</button>
              </div>


            </div>

          </div>

        </div>
      </section>
    </main>

    <script>
      var slider = document.getElementById("myRange");
      var output = document.getElementById("demo");
      output.innerHTML = slider.value;

      slider.oninput = function() {
        output.innerHTML = this.value;
      }
      </script>
  <?php include("includes/footer.php"); ?>
  </body>
</html>
