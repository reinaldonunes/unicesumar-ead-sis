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
      <div class="d-grid gap-3 m-auto">
        <?php include("./public/components/logo.php") ?>

        <section class="d-grid text-center">
          <span class="h4 fw-semibold text-success">Olá cliente, seja bem vindo.</span>
          <span class="h6 fw-light text-dark">Consulte o status do seu ticket ou crie um novo.</span>
          <section class="mt-3">
            <a href="index.php?view=new_ticket" class="btn btn-primary btn-default-size">Gerar ticket</a>
            <a href="index.php?view=search_ticket" class="btn btn-secondary btn-default-size">Consultar ticket</a>
          </section>            
        </section>
        
        <?php include("./app/views/shared/list.php") ?>
        
        <?php include("./public/components/footer.php") ?>
      </div>
    </div>

    <?php require_once("./config/javascript.php") ?>
  </body>
</html>