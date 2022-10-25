<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dona Rita marmitas saudáveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="assets/css/config.css" rel="stylesheet">
    <?php include('backend/data.php') ?>
  </head>
  <body> 
    <?php include('contents/shared/header.html') ?>
    <div class="container py-5">
      <div class="row justify-content-between d-flex">
        <aside class="col-md-5 col-12 order-md-1 order-2">
          <figure class="overflow-hidden rounded">
            <img src="assets/img/dona-rita.jpg" alt="Dona Rita" title="Dona Rita" class="img-fluid" />
          </figure>
        </aside>

        <article class="col-md-6 col-12 order-md-2 order-1 mb-4">
          <h1 class="h2 fw-bold text-success mb-4">Oi, eu sou a Dona Rita :)</h1>
          <p class="lead">
            Maria Rita Souza, mais conhecida como Dona Rita, nasceu em 29 de junho de 1931, em Cascavel, PR. Seu amor pela gastronomia vem desde muito cedo, quando começou a trabalhar em restaurantes da cidade. viúva a 15 anos, precisou se reeinventar na era pós-pandemia.
          </p>
          <p class="lead">Como força de levar uma boa alimentação à todos, Dona Rita criou uma série de pratos deliciosos, leves e nutritivos, prezando pelo bem estar de seus clientes.</p>
          <p class="lead">Seu cardápio conta hoje com 8 diferentes pratos, disponível em porções variadas e atendendo a todos os públicos, desde os onívoros até os veganos.</p>
        </article>
      </div>
    </div>
    <?php include('contents/shared/footer.html') ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <script>
      const { createApp } = Vue

      createApp({
        data(){
          return{ }
        }
      }).mount("#app");
    </script>
  </body>
</html>