<!DOCTYPE html>
<html>
  <head>
    <title> DigiCoop - Atendimento ao Cliente</title>
    <?php require_once("./config/metatags.php") ?>
    <?php require_once("./config/css.php") ?>
  </head>
  <body>
    <!-- tela inicial -->
    <div class="container min-vh-100 p-5 align-items-center d-flex">
      <div class="d-grid gap-3 m-auto w-50">
        <?php include("./public/components/logo.php") ?>

        <section id="third_step" class="size-default-box m-auto">
        <?php
          if($_GET['info']==='true'){
            echo '<span class="h6 fw-light text-dark w-100 d-block text-center mb-4">Acompanhe o status do ticket nº <strong>'.$_GET['protocol_id'].'</strong>:</span>';
          }else{
            echo '<span class="noprint h6 fw-light text-dark w-100 d-block text-center mb-4">Para consultar o ticket, insira o código de protocolo abaixo:</span>';
            include("./public/components/search.php");
          }
        ?>

        <?php $_GET['ticket']=='is_ticket' ? $this->info_ticket() : '' ?>
        
        <?php include("./public/components/footer.php") ?>
      </div>
    </div>

    <?php require_once("./config/javascript.php") ?>
  </body>
</html>