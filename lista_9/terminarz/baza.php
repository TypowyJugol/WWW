<?php
	$baza=new SQLite3('baza.db');
	$baza->query("create table if not exists terminarz
		(id integer primary key autoincrement,
		poczatek char(50),
		czas char(80),
		nazwa char(30),
		rodzaj char(30)
		)");
