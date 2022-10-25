<?php
  require_once("./app/models/Protocol.php");
  require_once("./app/controllers/applicationController.php");

   class protocolController extends applicationController{
    private $model;
    private $base;

    function __construct(){
        $this->model = new Protocol();
        $this->base = new applicationController();
    }


    /* list tickets */

    public function listAllTickets(){
      return $data_query = $this->model->listAllTickets();
    }

    public function getCurrentTicket($protocol_params){
      return $data_query = $this->model->getCurrentTicket($protocol_params);
    }

   }
?>