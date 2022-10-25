<?php

    require_once("./app/helpers/view.helper.php");
    
    class applicationController extends viewHelper{

      function default_view(){
        require_once("./app/views/default.php");
      }
      
      function show_ticket(){
        require_once("./app/views/show.php");
      }

      function new_ticket(){
        require_once("./app/views/new.php");
      }

      function search_ticket(){
        require_once("./app/views/search.php");
      }

      function info_ticket(){
        require_once("./app/views/shared/info.php");
      }

   }
?>