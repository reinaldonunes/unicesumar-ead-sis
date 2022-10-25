<?php include('backend/data.php') ?>
<?php
  $id_product = $_GET['id_product'];

  $indexProduct = $id_product - 1;
  $nameProduct = $products[$indexProduct][0];
  $sizeProduct = $products[$indexProduct][1];
  $priceProduct = $products[$indexProduct][2]; 
  $urlProduct = $products[$indexProduct][3];
  $descriptionProduct = $products[$indexProduct][4];
  $ingredientsProduct = $products[$indexProduct][5];
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dona Rita marmitas saudáveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="assets/css/config.css" rel="stylesheet">
  </head>
  <body> 
    <?php include('contents/shared/header.html') ?>
    <div class="container py-5">
      <div class="row justify-content-between d-flex">
        <aside class="col-md-5 col-12 order-md-1 order-2">
          <figure class="overflow-hidden rounded">
            <img src="<?php echo $urlProduct ?>" alt="<?php echo $nameProduct ?>" title="<?php echo $nameProduct ?>" class="img-fluid" />
          </figure>
        </aside>

        <article class="col-md-6 col-12 order-md-2 order-1 mb-4">
          <div class="d-grid">
            <h1 class="h2 fw-bold text-success mb-4"><?php echo $nameProduct ?></h1>
            <p class="lead"><i class="bi bi-speedometer2"></i>&nbsp;<?php echo $sizeProduct ?></p>
            <p class="h6 fw-normal mb-5"><?php echo $descriptionProduct ?></p>

            <h2 class="h5 fw-semibold mb-3" style="color:#aaa;">INGREDIENTES</h2>
            <ul class="mb-4">
              <?php echo $ingredientsProduct ?>
            </ul>
            <span class="border rounded  px-4 py-2 btn-fit border-warning text-warning fw-bold h4 mb-4"><i class="bi bi-cart-plus"></i>&nbsp;&nbsp;R$ <?php echo $priceProduct ?></span>
            <a href="contact.php?id_product=<?php echo $id_product ?>" class="btn btn-sm px-4 py-3 btn-success text-white fw-bold"><i class="bi bi-bag-heart"></i>&nbsp;&nbsp;QUERO FAZER MINHA ENCOMENDA</a>
          </div>
        </article>
      </div>
    </div>
    <?php include('contents/shared/footer.html') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>