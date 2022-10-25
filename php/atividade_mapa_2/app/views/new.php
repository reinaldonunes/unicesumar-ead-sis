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

        <section id="second_step">
            <span class="h6 fw-light text-dark w-100 d-block text-center mb-4">Para abrir um chamado, preencha os campos abaixo:</span>
            
            <form action="./app/mailers/form.post.php" method="post" id="register_protocol" class="bg-white p-4 rounded box-shadow mt-2">
            <div class="mb-3">
                <label for="user_requester" class="form-label"><i class="bi bi-person-fill"></i> Solicitante</label>
                <input type="text" class="form-control" name="user_requester" id="user_requester" required>
            </div>
            <div class="mb-3">
                <label for="user_emmail" class="form-label"><i class="bi bi-envelope-fill"></i> E-mail</label>
                <input type="email" class="form-control" name="user_email" id="user_email" required>
            </div>
            <div class="mb-3">
                <label for="user_comment" class="form-label"><i class="bi bi-chat-right-dots-fill"></i> Descrição</label>
                <textarea type="text" class="form-control resize-message" name="user_comment" id="user_comment" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar ticket</button>
            </form>
        </section>
        
        <?php include("./public/components/footer.php") ?>
      </div>
    </div>

    <?php require_once("./config/javascript.php") ?>
  </body>
</html>