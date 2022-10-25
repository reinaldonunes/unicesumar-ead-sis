<?php   
  class viewHelper{

    function parse_status($status){
      if($status==1){
        $parsed_status = '<span class="badge bg-warning text-dark">Sob análise</span>';
      }else{
        $parsed_status = '<span class="badge bg-success">Concluído</span>';
      }

      return $parsed_status;
    }

    function parse_date($date){
      $date = new DateTime($value->created_at);
      return $date->format('d/m/Y H:m:s');
    }
  }

?>