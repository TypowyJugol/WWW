<?php
include "0begin.php";
?>
<h2 style="text-align: center"> Czym się interesuję </h2>
<?php

$a = array("Piłka nożna", "Kolarstwo", "Motoryzacja i sporty motorowe", "Informatyka", "Gry komputerowe", "Polityka");

foreach ($a as $x)
    echo "<li>$x</li>";
?>
<?php
include "0end.php";
