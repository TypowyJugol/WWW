<?php
include "0begin.php";
?>
<h2 style="text-align: center">Tabliczka Mnożenia</h2>
<a href="?n=10">do 10</a>
<a href="?n=20">do 20</a>
<a href="?n=30">do 30</a>

<?php
if (!isset($_GET['n'])) {
    $n = 20;
} else {
    $n = $_GET["n"];
}
function mnozenie($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo ("<br>");
        for ($y = 0; $y <= 10; $y++) {
            echo "{$i}" . "*" . "{$y}" . "=" . $i * $y . '<br>';
        }
    }
}
mnozenie($n);
?>

<?php
include "0end.php";
