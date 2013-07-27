<?php

  global $mysqli;

  $r = $mysqli->query("select * from pages");

  if($r !== false) {
    $r->data_seek(0);
    while($row = $r->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      $file = $row['file'];
      print("id: $id, name: $name, file: $file<br/>\n");
    }
  }

?>
