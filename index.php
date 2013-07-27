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

  $pagepath = 'pages/';

  $mysqli = db_connect();
  $pages = db_getpages($mysqli);
  $page = isset($_GET['page']) ? $_GET['page'] : 'Home';

?>
<html>
  <head>
    <title>nesemu2</title>
    <link rel="stylesheet" href="stylesheets/main.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <?php include('header.php'); ?>
      </header>
      <section>
        <?php
          $i = 0;
          foreach($pages as $name => $file) {
            if($name == "Admin")
              continue;
            if($i > 0)
              print(" - ");
            print("<a href=\"?page=$name\">$name</a>");
            $i++;
          }
        ?>
        <br/>
        <br/>
        <?php include($pagepath . $pages[$page]); ?>
      </section>
    </div>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
  </body>
</html>
