<?php
  require_once('../models/Protocol.php');

  if($_POST){
    $requester = filter_input(INPUT_POST, "user_requester", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, "user_comment", FILTER_SANITIZE_STRING);

    $protocol_code = rand();
    $year = date('Y');
    $status = 1;
    $created_at = date('y-m-d');

    $create = new Protocol();
    $response = $create->createTicket($protocol_code, $requester, $description, $email, $year, $status, $created_at);

    if($response===true){
      header('location: ../../index.php?protocol_id='.$create->getProtocolCode().'&view=search_ticket&ticket=is_ticket&info=true');
    }else{
      echo '<script>alert("Falha ao tentar cadastrar o ticket!");</script>';
      header('location: ../../index.php');
    }

  }else{
    echo '<p class="alert alert-danger text-center"><strong>504 not found.</strong></p>';
  }
?>