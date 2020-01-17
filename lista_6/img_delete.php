<?php
include "0begin.php";
?>

<h2 style="text-align: center">Lista zdjęć</h2>


<form method="POST">
<select name="plik">
<?php
$pliki = scandir('img');
foreach ($pliki as $news) { {
        if ($news[0] != '.') {
            echo "<option value=$news>$news</option>";
        }
    }
}
?>
<select>
<input name="usun" type="submit" value="Usuń" onclick="return confirm('Czy na pewno chcesz usunąć ten element?')">
</form>

<?php
    if(isset($_POST['usun'])){
    $wybrany_plik = $_POST['plik'];
    rename("img/$wybrany_plik", "img/.$wybrany_plik");
    }
?>
<?php
include "0end.php";
