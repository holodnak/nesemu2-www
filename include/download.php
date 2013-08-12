<?php

  global $mysqli;

  $count_downloads_table = 'downloads';

  $file = $_GET['download'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $count = 0;

  $r = $mysqli->query("select * from `$count_downloads_table` where ip = `$ip`");

  if($r !== false) { 
    print("has downloaded!");

  }

  else {
    print("not downlaoded (ip = '$ip'  file='$file'  count='$count'");
    $str = "insert into `$count_downloads_table` values (ip= `$ip`, count=`$count`, file=`$file`)";
    $mysqli->query($str);
  }

//  $r = $db->query("select * from `downloads` order by `order`");
  
//  $downCount = intval( file_get_contents("downCount") );
//  $downCount++;
//  file_put_contents("downCount",$downCount);

 // header('Location: /download/' . $file);

?>
