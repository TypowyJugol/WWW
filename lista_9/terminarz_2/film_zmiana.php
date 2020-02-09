<?php
session_start();
if($_POST and $_SESSION['admin'])
{
	
	include "baza.php";
	foreach($_POST as $x=>$y)
		$r[$x]=$baza->escapeString($y);
	switch($_POST['co'])
	{
		case 'Usun':   
			$baza->query("delete from filmy where id='$r[id]'");
			break;
		case 'Zapisz': 
			$baza->query("update filmy 
						 set imie='$r[tytul]', 
						 nazwisko='$r[rezyser]', 
						 plec='$r[gatunek]', 
						 opis='$r[opis]'
						 where id='$r[id]'");
		break;
		case 'Dodaj': 
			$baza->query("insert into filmy (tytul,rezyser,gatunek,opis)
                          values('$r[tytul]', '$r[rezyser]', '$r[gatunek]', '$r[opis]')
						 ");
			break;
									 
	}
//	echo $baza->lastErrorMsg();
}
	header("location:.");
