<?php
include "0begin.php";
?>

<form method="POST">
    <input type="text" name="title" placeholder="Tytuł newsa" autocomplete="off">
    <br></br>
    <textarea type="text" name="text" placeholder="Treść newsa" autocomplete="off" rows="10" cols="70"></textarea>
    <input type="submit" value="Wyślij">
</form>

<?php
$pliki = scandir('news');
$i = 1;
foreach ($pliki as $news) { {
        if ($news[0] != '.') {
            $i++;
        }
    }
}
if (isset($_POST['title'], $_POST['text'])) {
    $tytul = $_POST['title'];
    $tresc = $_POST['text'];

    $plik = fopen("news/news$i.html", "a");

    fwrite($plik, "<h2>$tytul</h2>");
    fwrite($plik, $tresc);
    fclose($plik);
}
?>




<?php
include "0end.php";
