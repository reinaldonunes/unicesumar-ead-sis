<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="utf-8" />
    <title>Atividade 01 - Programação Back-End I</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <style>
    html{ height:100%; margin:0; padding:0; }
    .bg-gradient-custom{
      background:#e8cbc086;
      background:-webkit-linear-gradient(to top, #636fa48a, #e8cbc09a);
      background:linear-gradient(to top, #636fa493, #e8cbc085); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
  </style>
  <?php
    $gasoline_price = 6.19;
    $etanol_price = 5.34;
    $fuel_total = 50;

    $final_price_gasoline = $fuel_total * $gasoline_price;
    $final_price_etanol = $fuel_total * $etanol_price;

    $percent_fuel = number_format(($etanol_price / $gasoline_price) * 100,"1");
  ?>
  <body class="bg-gradient-custom h-full">
      <div class="container-fluid p-5 ">
        <div class="container text-white text-center pt-2 mt-3">
          <div class="row">
            <div class="col-12">
              <h1 class="mb-3 fw-semibold text-dark">Olá, Juliana</h1>
              <p class="lead mb-2 text-dark">Confira as cotações dos combustíveis para essa semana.</p>
            </div>

            <div class="col-12 ps-5 pe-5 mt-5">
              <div class="d-flex justify-between w-full ps-5 pe-5 gap-4 mb-4 justify-content-center">
                <div class="card" style="width:200px;">
                  <div class="card-body">
                    <i class="text-primary mb-2 h2 bi bi-fuel-pump-fill"></i>
                    <h5 class="card-title text-primary">
                      Gasolina
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">R$ <?= $gasoline_price; ?></h6>
                  </div>
                </div>

                <div class="card" style="width:200px;">
                  <div class="card-body">
                    <i class="text-success mb-2 h2 bi bi-fuel-pump-fill"></i>
                    <h5 class="card-title text-success">
                      Etanol
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">R$ <?= $etanol_price; ?></h6>
                  </div>
                </div>
              </div>
              <span class="h6 text-primary fw-light">Valores atualizado dia <?= date("d/m/Y"); ?></span>
            </div>

            <div class="col-12 mt-5 pt-5 ps-5 pe-5">
              <div class="d-flex text-center w-full ps-5 pe-5">
                <h1 class="h3 text-dark m-auto">Vale a pena abaster com <strong>Álcool</strong> ou <strong>Gasolina</strong>?</h1>
              </div>
            </div>

            <div class="col-12 pt-5 ps-5 pe-5">
              <div class="d-flex text-center w-full ps-5 pe-5">
                <?php
                  if($percent_fuel > 70.0){
                ?>
                <div class="alert alert-info w-full" role="alert" style="width:100%";>
                  <i class="h1 bi bi-car-front"></i>
                  <p class="lead mb-0">
                    <span class="fw-bold">Juliana</span>, hoje está compensando abastecer com <strong>Gasolina</strong>.</span>
                    <br />
                    <span class="fw-light h6">A porcentagem do etanol hoje está acima de 0.70 e com isso você gastará <strong>R$ <?= $final_price_gasoline; ?></strong>
                  </p>
                </div>
                <?php }else{ ?>
                <div class="alert alert-success w-full" role="alert" style="width:100%";>
                  <i class="h1 bi bi-car-front"></i>
                  <p class="lead mb-0">
                    <span class="fw-bold">Juliana</span>, hoje está compensando abastecer com <strong>Etanol</strong>.</span>
                    <br />
                    <span class="fw-light h6">A porcentagem do etanol hoje está abaixo ou igual a 0.70 e com isso você gastará <strong>R$ <?= $final_price_etanol; ?></strong>
                  </p>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>