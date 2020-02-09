<?php

	
	include "terminarz.php";
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
						 where id='$r[id]'");
		break;
		case 'Dodaj': 
			$baza->query("insert into terminarz (poczatek,czas,nazwa)
                          values('$r[poczatek]', '$r[czas]', '$r[nazwa]')
						 ");
			break;
									 
	}
//	echo $baza->lastErrorMsg();

	header("location:.");
