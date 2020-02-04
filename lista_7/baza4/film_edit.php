<?php
	include "baza.php";
	$id=intval($_GET['id']);
	$wynik=$baza->query("select * from filmy where id='$id'");
	$r=$wynik->fetchArray();
?>
<form method='post' action='film_zmiana.php'>
	<h2>Edycja filmy</h2>

	<input name='id' type=hidden value='<?=htmlentities($r['id'])?>'>
	<input name='tytul' placeholder='Tytuł' value='<?=htmlentities($r['tytul'])?>'>
	<input name='rezyser' placeholder='Reżyser'  value='<?=htmlentities($r['rezyser'])?>'>
	<input name='gatunek' placeholder='Gatunek'  value='<?=htmlentities($r['gatunek'])?>'>
	<textarea name='opis' placeholder='Opis'><?=htmlentities($r['opis'])?></textarea>

	<input type=submit name=co value='Zapisz'>
	<input type=submit name=co value='Usun'>
	<input type=submit name=co value='Anuluj'>
</form>
