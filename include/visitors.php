<?php

  global $mysqli;

  $visitors_table = 'visitors';
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = $_SERVER['REQUEST_TIME'];
  $mysqldate = date("Y-m-d H:i:s",$timestamp);
 
  $str = "insert into $visitors_table (ip,date) values ('$ip','$mysqldate')";
  $mysqli->query($str);

  function get_num_visitors() {
    global $visitors_table;
    global $mysqli;

    $r = $mysqli->query("select distinct ip from $visitors_table");
    return($r->num_rows);
  }

?>

