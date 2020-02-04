<?php
include "0begin.php";
?>
<h2 style="text-align: center">Ciąg fibonacciego</h2>


<?php
function fib($n)
{
    if ($n == 0) return 0;
    else if ($n == 1) return 1;
    else {
        return fib($n - 1) + fib($n - 2);
    }
}
?>
<ul>
    <?php
    for ($i = 0; $i <= 25; $i++) {
        echo ("<li>");
        echo fib($i);
        echo ("</li>");
    }
    ?>
</ul>

<?php
include "0end.php";
