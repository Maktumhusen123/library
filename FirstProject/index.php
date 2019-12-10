<?php
  require_once 'config.php';
  require_once 'db.php'
  $db=connect($DB_USERNAME,$DB_NAME,$DB_PASSWORD,$DB_HOST);
  if($db instanceof mysqli){
    echo "CLient info:". $db->client_info."\n";
  }

 ?>
