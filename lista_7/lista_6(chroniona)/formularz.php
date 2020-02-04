<?php
include "0begin.php";
?>
<h2 style="text-align: center"> Formularz </h2>

<form method="GET">
    <input type="text" name="name" placeholder="Imie" autocomplete="off">
    <input type="text" name="surname" placeholder="Nazwisko" autocomplete="off">
    <input type="text" name="job" placeholder="Zawód" autocomplete="off">
    <input type="submit" value="Wyślij">
</form>

<?php
if (isset($_GET['name'], $_GET['surname'], $_GET['job'])) {
    $imie = $_GET['name'];
    $nazwisko = $_GET['surname'];
    $zawod = $_GET['job'];

    echo "<p>Imię: $imie</p>";
    echo "<p>Nazwisko: $nazwisko</p>";
    echo "<p>Zawód: $zawod</p>";
}
?>

<?php
include "0end.php";
