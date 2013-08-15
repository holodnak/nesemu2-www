<?php
  $mappers = file('nesemu2-mappers');

  if($mappers !== FALSE) {
    $ines = $mappers[0];
    $ines20 = $mappers[2];
    $unif = array();
    $mappers[0] = $mappers[1] = '';
    $mappers[2] = $mappers[3] = '';
    $mappers[4] = '';
    foreach($mappers as $board) {
      if(strlen(trim($board)))
        $unif[] = $board;
    }
    sort($unif);
    $totals = array_pop($unif);
    $internal = trim(substr(strstr($totals,"unif,"),5));

    $ines = trim(substr($ines,strpos($ines,':') + 1));
    $ines20 = trim(substr($ines20,strpos($ines20,':') + 1));

    $ines = explode(',',$ines);
    $ines20 = explode(',',$ines20);

    $ines_num = count($ines);
    $ines20_num = count($ines20);
    $unif_num = count($unif);
    }
?>
<p>Features:</p>
<ul>
  <li>Accurate CPU/PPU/APU emulation.</li>
  <li>Save states.</li>
  <li>Movie recording/playback.</li>
  <li>Zapper support.</li>
  <li>FDS and HLE FDS support for some games.</li>
  <li>Game Genie.</li>
  <li>NSF playback.</li>
  <li>NTSC/PAL/Dendy modes.</li>
  <li>Windows/Linux/OSX supported.</li>
  <?php if($mappers !== FALSE): ?>
    <li>
      Support for many mappers.  <?php print($internal); ?>
      <ul>
        <li><?php print($ines_num); ?> iNES mappers.</li>
        <li><?php print($ines20_num); ?> iNES 2.0 mappers.</li>
        <li><?php print($unif_num); ?> UNIF mappers.</li>
      </ul>
    </li>
  <?php endif; ?>
</ul>
