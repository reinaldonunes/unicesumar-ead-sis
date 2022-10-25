<?php
  $params_id = $_POST['protocol_id'] ? $_POST['protocol_id'] : $_GET['protocol_id'] ;
  
  if(isset($params_id) && !empty($params_id)){
    $response = $this->getCurrentTicket($params_id);
    $tickets = json_decode($response);
?>
<section id="display_step">
  <div class="bg-white rounded box-shadow p-4 mt-2 position-relative">

    <a href="javascript:window.print()" class="noprint btn btn-sm btn-outline-secondary position-absolute" style="top:24px;right:24px;" title="Imprimir ticket"><i class="bi bi-printer"></i></a>

    <?php
      foreach($tickets as $value){
    ?>
      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Protocolo:</span>
        <span class="lead fw-bold text-success"><?= $value->protocol_code ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Solicitante:</span>
        <span class="small-text text-dark"><?= $value->requester ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">E-mail:</span>
        <span class="small-text text-dark"><?= $value->email ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Ano:</span>
        <span class="small-text text-dark"><?= $value->year ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Descrição:</span>
        <span class="small-text text-dark"><?= $value->description ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Gerado em:</span>
        <span class="small-text text-dark"><?= $this->parse_date($value->created_at) ?></span>
      </article>

      <article class="mb-3 d-grid ">
        <span class="h6 mb-0">Status:</span>
        <span class="text-dark" style="width:fit-content"><?= $this->parse_status($value->status) ?></span>
      </article>
    <?php } ?>
    <?php
      if(count($tickets) < 1) echo '<p class="alert alert-warning mb-0 text-center">Sua busca não retornou nenhum registro. </p>';
    ?>
  </div>
</section>
<?php
  }else{
    echo '<p class="alert alert-danger text-center">Dados do parâmetro incorreto.</p>';
  }
?>