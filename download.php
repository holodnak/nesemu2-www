<?php

$downCount = intval( file_get_contents("downCount") );
$downCount++;
file_put_contents("downCount",$downCount);

header('Location: /download/nesemu2-0.6.zip');

?>
