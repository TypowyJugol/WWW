<?php
include "baza.php";

$wynik=$baza->query("select * from filmy");

echo "<table>";
echo "<h2>Lista filmów</h2>";
echo "<tr><th>Id<th>Tytuł</th><th>Reżyser</th><th>Gatunek</th><th>Opis</th>";
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
		<td colspan=5>Dodaj nowy film</td></tr>";
else
	echo "<tr onclick=\"location='?id=login'\">
		<td colspan=5>Zaloguj sie by edytować tabelę</td></tr>";

echo "</table>";
if($_SESSION['admin'])
   echo "<a href=?id=logout>Wyloguj się</a>";
