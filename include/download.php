<?php

  global $mysqli;

  $downloads_table = 'downloads';

  function get_num_downloads($file) {
    global $downloads_table;
    global $mysqli;

    $r = $mysqli->query("select * from $downloads_table where filename='$file'");
    return($r->num_rows);
  }

  if(isset($_GET['download'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = $_SERVER['REQUEST_TIME'];
    $mysqldate = date("Y-m-d H:i:s",$timestamp);
    $file = $_GET['download'];

    $str = "insert into $downloads_table (ip,filename,date) values ('$ip','$file','$mysqldate')";
    $mysqli->query($str);

    header('Location: /downloads/' . $file);
  }

?>
