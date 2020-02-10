<?php

if($_POST)
{
	
	include "baza.php";
	foreach($_POST as $x=>$y)
		$r[$x]=$baza->escapeString($y);
	switch($_POST['co'])
	{
		case 'Usun':   
			$baza->query("delete from terminarz where id='$r[id]'");
			break;
		case 'Zapisz': 
			$baza->query("update terminarz 
						 set poczatek='$r[poczatek]', 
						 czas='$r[czas]', 
						 nazwa='$r[nazwa]', 
						 rodzaj='$r[rodzaj]'
						 where id='$r[id]'");
		break;
		case 'Dodaj': 
			$baza->query("insert into terminarz (poczatek,czas,nazwa,rodzaj)
                          values('$r[poczatek]', '$r[czas]', '$r[nazwa]', '$r[rodzaj]')
						 ");
			break;
									 
	}
//	echo $baza->lastErrorMsg();
}
	header("location:.");
