<?php
include "0begin.php";
?>
<h1> Czym się interesuję </h1>
<?php

$a=array("Piłka nożna","Kolarstwo","Motoryzacja i sporty motorowe","Informatyka","Gry komputerowe","Polityka");

foreach($a as $x)
    echo "<li>$x</li>";
?>
<?php
include "0end.php";