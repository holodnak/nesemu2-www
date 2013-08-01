<?php

  global $mysqli;

  $pages = db_getpages($mysqli);
  $page = isset($_GET['page']) ? $_GET['page'] : 'Home';

?>
<html>
  <head>
    <title>nesemu2 - <?php print($page); ?></title>
    <link rel="stylesheet" href="stylesheets/main.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <?php include('include/header.php'); ?>
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
        <?php include('pages/' . $pages[$page]); ?>
      </section>
    </div>
    <footer>
      <?php include('include/footer.php'); ?>
    </footer>
  </body>
</html>

