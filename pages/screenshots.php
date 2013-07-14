<?php

function print_img($fn) {
  print("<img src=\"$fn\"/>\n");
}

$shotsdir = 'images/shots/';
$shots = array();

$d = dir($shotsdir);
while(false !== ($entry = $d->read())) {
  if($entry == '.' || $entry == '..')
    continue;
  print_img($shotsdir . $entry);
}
$d->close();

?>
