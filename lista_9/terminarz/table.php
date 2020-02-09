<?php
include "terminarz.php";

$wynik=$baza->query("select * from terminarz");

echo "<table>";
echo "<h2>Terminarz</h2>";
echo "<tr><th>Id<th></th>Początek<th>Czas trwania</th><th>Nazwa</th>";
while($r= $wynik->fetchArray())
{   
	echo "<tr onclick=\"location='?id=$r[id]'\">
			<td>$r[id]</td>
			<td>$r[poczatek]</td>
			<td>$r[czas]</td>
			<td>$r[nazwa]</td></tr>";
}

echo "<tr onclick=\"location='?id=dodaj'\">
	<td colspan=5>Dodaj nowe wydarzenie</td></tr>";


echo "</table>";