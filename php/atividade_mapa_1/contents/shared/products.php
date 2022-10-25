<div class="container-fluid py-5" id="products">
  <div class="container">
    <div class="py-5"><h2 class="display-5 text-uppercase fw-bold mb-0 text-center text-success">Conheça o cardápio</h2></div>
    <div class="row">
      <?php
        for($i= 0; $i<8; $i++){
          $idProduct = $i + 1;
          $nameProduct = $products[$i][0];
          $sizeProduct = $products[$i][1];    
          $priceProduct = $products[$i][2];
          $imageProduct = $products[$i][3];
          $ingredientsProduct = $products[$i][4];
      ?>
      <div class="col-lg-3 col-md-4 col-12 mb-5" v-show="show === '1'">
        <a href="product.php?id_product=<?php echo $idProduct ?>" class="d-grid gap-3 text-decoration-none">
          <figure class="overflow-hidden position-relative rounded shadow product-hover">
            <span class="go-view" title="Clique para ver mais detalhes"><i class="bi bi-eye display-6 text-white"></i></span>
            <span class="bg-warning fw-bold text-dark h5 mb-0 px-2 py-2 position-absolute bottom-0" style="border-top-right-radius:5px;">R$ <?php echo $priceProduct ?></span>
            <img src="<?php echo $imageProduct ?>" alt="<?php echo $nameProduct ?>" title="<?php echo $nameProduct ?>" class="img-fluid" />
          </figure>
          <span class="h5 mb-0 text-dark fw-bold"><?php echo $nameProduct ?></span>
          <span class="lead mt-0 text-success"><i class="bi bi-speedometer2"></i>&nbsp;<?php echo $sizeProduct ?></span>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
