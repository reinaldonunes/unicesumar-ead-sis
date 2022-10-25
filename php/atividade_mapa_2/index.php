<?php
  error_reporting(E_ERROR | E_PARSE);
  
  require_once("./app/controllers/protocolController.php");
  $controller = new protocolController();
  
  $action = !empty($_GET['view']) ? $_GET['view'] : 'default_view';
  $param_ticket = !empty($_GET['ticket']) ? $_GET['ticket'] : '';
  
  $controller->{$action}();
?>
