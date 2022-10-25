<?php include('backend/data.php') ?>
<?php
  if(isset($_GET['id_product'])){
    $isProduct = true;

    $indexProduct = $_GET['id_product'] - 1;
    $nameProduct = $products[$indexProduct][0];
    $priceProduct = $products[$indexProduct][2]; 
    $urlProduct = $products[$indexProduct][3];
  }else{
    $isProduct = false;
  }
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça sua encomenda - Dona Rita marmitas saudáveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="assets/css/config.css" rel="stylesheet">
  </head>
  <body> 
    <?php include('contents/shared/header.html') ?>
    <div class="container py-5">
      <div class="row justify-content-between d-flex">
        <div class="col-md-6 col-12 d-flex flex-column">
          <h2 class="text-success fw-bold mb-4 h2">Comer bem e saudável é mais fácil do que você imagina!</h2>
          <span class="lead mb-4">Com as marmitas da Dona Rita você pode se alimentar bem, com ingredientes naturais e livres de agrotóxicos.</span>
          <span class="lead mb-4">Além de cuidar do seu bem estar, as marmitas da Dona Rita vão proporcionar saciedade, leveza e ótimos nutrientes.</span>
        </div>
        <div class="col-md-5 col-12 d-flex flex-column">
        <?php
            if($isProduct == true){
          ?>
        <span class="mt-4 h5 fw-semibold text-warning mb-4">Legal :) Vi que você solicitou este produto:</span>
          <button class="btn btn-outline-success btn-lg text-info mb-4" disabled>
            <i class="bi bi-bag-heart"></i>&nbsp;&nbsp;
            <span class="badge bg-info me-2">R$ <?php echo $priceProduct ?></span>
            <?php echo $nameProduct ?>
            </button>
          <?php 
            }
          ?>
          <span class="lead mb-4">Para solicitar sua encomenda, clique no botão abaixo:</span>
          
          <a href="#" class="btn btn-sm px-4 py-3 btn-success text-white fw-bold"><i class="bi bi-whatsapp"></i>&nbsp;&nbsp;ENCOMENDAR PELO WHATSAPP</a>
        </div>
      </div>
    </div>
    <?php include('contents/shared/footer.html') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>