<?php
  $pagepath = 'pages/';
  $pages = array(
    "Home" => "home.php",
    "News" => "news.php",
    "Features" => "features.php",
    "Screenshots" => "screenshots.php",
    "Downloads" => "downloads.php"
    );

  $page = "Home";
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }

?>
<html>
  <head>
    <title>nesemu2</title>
    <link rel="stylesheet" href="stylesheets/main.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>nesemu2</h1>
        <p>Cycle accurate NES/Famicom emulator.</p>
        <ul>
          <li><a href="https://github.com/holodnak/nesemu2/zipball/master">Download <strong>ZIP File</strong></a></li>
          <li><a href="https://github.com/holodnak/nesemu2/tarball/master">Download <strong>TAR Ball</strong></a></li>
          <li><a href="https://github.com/holodnak/nesemu2">View On <strong>GitHub</strong></a></li>
        </ul>
      </header>
      <section>
        <?php
          $i = 0;
          foreach($pages as $name => $file) {
            if($i > 0)
              print(" - ");
            print("<a href=\"?page=$name\">$name</a>");
            $i++;
          }
        ?>
        <br/>
        <br/>
        <?php
          include($pagepath . $pages[$page]);
        ?>
      </section>
    </div>
    <footer>
      <p>Project maintained by <a href="https://github.com/holodnak">holodnak</a></p>
      <p>Theme based on a GitHub pages theme by <a href="https://github.com/orderedlist">orderedlist</a></p>
    </footer>
  </body>
</html>
