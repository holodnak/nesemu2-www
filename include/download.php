<?php

  global $mysqli;

  $file = $_GET['download'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $count = 0;

  $r = $db->query("select * from `pages` order by `order`");
  

  $downCount = intval( file_get_contents("downCount") );
  $downCount++;
  file_put_contents("downCount",$downCount);

  header('Location: /download/' . $file);

?>
