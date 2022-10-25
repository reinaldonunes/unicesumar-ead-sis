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
      <div class="d-grid gap-3 m-auto size-default-box">
        <?php include("./public/components/logo.php") ?>

        <h2>Sucesso! Ticket registrado em nossa base.</h2>

        <?php $this->info_ticket(); ?>
      
        <?php include("./public/components/footer.php") ?>
      </div>
    </div>

    <?php require_once("./config/javascript.php") ?>
  </body>
</html>