<?php
    $response = $this->listAllTickets();
    $protocols = json_decode($response);

    if(isset($protocols) && !empty($protocols)) {
?>
    <table class="table table-hover custom-table box-shadow rounded align-middle">
    <thead>
        <tr>
        <th scope="col">Nº Protocolo</th>
        <th scope="col">Solicitante</th>
        <th scope="col">Gerado em</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($protocols as $value){
        $url = "index.php?view=search_ticket&ticket=is_ticket&info=true&protocol_id=".$value->protocol_code;
    ?>
        <tr>
        <td><strong><?= $value->protocol_code; ?></strong></td>
        <td><?= $value->requester; ?></td>
        <td><?= $this->parse_date($value->created_at); ?></td>
        <td><?= $this->parse_status($value->status); ?></td>
        <td><a href="<?=$url;?>" class="btn btn-sm text-dark"><i class="bi bi-eye"></i></a></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
<?php
    }else{
        echo '<td colspan="3"><p class="alert alert-warning text-center mb-0">Nenhum ticket criado até o momento.</p></td>';
    }
?>