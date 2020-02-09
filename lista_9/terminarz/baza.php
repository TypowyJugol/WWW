<?php
	$baza=new SQLite3('terminarz.db');
	$baza->query("create table if not exists terminarz
		(id integer primary key autoincrement,
		poczatek date,
		czas float,
		nazwa char(50),
		)");
