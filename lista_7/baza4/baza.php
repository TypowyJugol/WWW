<?php
	$baza=new SQLite3('baza.db');
	$baza->query("create table if not exists filmy
		(id integer primary key autoincrement,
		tytul char(50),
		rezyser char(80),
		gatunek char(30),
		opis text
		)");
