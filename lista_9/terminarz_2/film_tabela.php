<?php
include "baza.php";

$wynik=$baza->query("select * from filmy");

echo "<table>";
echo "<h2>Terminarz</h2>";
echo "<tr><th>Id<th>Początek</th><th>Czas trwania</th><th>Nazwa</th><th>Rodzaj</th>";
while($r= $wynik->fetchArray())
{   
	echo "<tr onclick=\"location='?id=$r[id]'\">
			<td>$r[id]</td>
			<td>$r[tytul]</td>
			<td>$r[rezyser]</td>
			<td>$r[gatunek]</td>
			<td>$r[opis]</td></tr>";
}
if($_SESSION['admin'])
	echo "<tr onclick=\"location='?id=dodaj'\">
		<td colspan=5>Dodaj nowe wydarzenie</td></tr>";
else
	echo "<tr onclick=\"location='?id=login'\">
		<td colspan=5>Zaloguj sie by edytować tabelę</td></tr>";

echo "</table>";
if($_SESSION['admin'])
   echo "<a href=?id=logout>Wyloguj się</a>";
