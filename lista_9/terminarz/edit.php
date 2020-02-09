<?php
	include "terminarz.php";
	$id=intval($_GET['id']);
	$wynik=$baza->query("select * from terminarz where id='$id'");
	$r=$wynik->fetchArray();
?>
<form method='post' action='zmiana.php'>
	<h2>Edycja terminów</h2>

	<input name='id' type=hidden value='<?=htmlentities($r['id'])?>'>
	<input name='poczatek' placeholder='Początek' value='<?=htmlentities($r['poczatek'])?>'>
	<input name='czas' placeholder='Czas'  value='<?=htmlentities($r['czas'])?>'>
	<input name='nazwa' placeholder='Nazwa'  value='<?=htmlentities($r['nazwa'])?>'>

	<input type=submit name=co value='Zapisz'>
	<input type=submit name=co value='Usun'>
	<input type=submit name=co value='Anuluj'>
</form>
