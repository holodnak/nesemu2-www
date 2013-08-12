<?php

  global $mysqli;

  //database stuff
  include('include/database.php');

  //include visitor counter
  include('include/visitors.php');
  
  //check for special actions
  if(isset($_GET['download'])) {
    include('include/download.php');
  }

  //must be page action
  else {

    //default action is to show a page
    $pages = db_getpages($mysqli);
    $page = isset($_GET['page']) ? $_GET['page'] : 'Home';

    include('include/page.php');
  }

?>
