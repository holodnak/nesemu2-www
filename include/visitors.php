<?php

  global $mysqli;

  $visitors_table = 'visitors';
  $ip = $_SERVER['REMOTE_ADDR'];

  $r = $mysqli->query("select * from $visitors_table where ip='$ip'");

  if($r === false) {
    $str = "insert into $visitors_table (ip) values ('$ip')";
    $mysqli->query($str);
  }

  function get_num_visitors() {
    global $visitors_table;
    global $mysqli;

    $r = $mysqli->query("select * from $visitors_table");
    return($r->num_rows);
  }

?>

