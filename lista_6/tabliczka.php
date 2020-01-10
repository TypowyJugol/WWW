<?php
include "0begin.php";
?>
<h2>Tabliczka Mnożenia</h2>
<a href = "?n=10">do 10</a>
<a href = "?n=20">do 20</a>
<a href = "?n=30">do 30</a>

<?php
$n=$_GET["n"];
if(!isset($n)) $n=20;
function mnozenie($n)
    {
        for($i = 1; $i <= $n; $i++)
        {
            echo("<br>");
            for($y = 0; $y <= 10; $y++)
            {
                echo "{$i}" . "*" . "{$y}" . "=" . $i * $y . '<br>';
            }
            
        }
    }
    mnozenie($n);
?>

<?php
include "0end.php";