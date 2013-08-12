<?php

  global $mysqli;

  //some database helper functions
  function db_connect() {
    $db = new mysqli('localhost','nesemu2','nesemu2','nesemu2');
    if($db->connect_errno) {
      die("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);
    }
    return($db);
  }

  //return array of available pages
  function db_getpages($db) {
    $pages = array();
    $r = $db->query("select * from `pages` order by `order`");
    if($r !== false) {
      $r->data_seek(0);
      while($row = $r->fetch_assoc()) {
        $pages[$row['name']] = $row['file'];
      }
    }
    return($pages);
  }

  //connect to database
  $mysqli = db_connect();

?>