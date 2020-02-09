<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
	form {display:block;width:300px}
	input ,textarea,select {display:block;width:100%;margin:auto;box-sizing:border-box} 
	textarea {height:100px}
	input[type=submit] {width:25%;float:left}
	h2 {clear:both}
	table th,table td {border:1px solid;padding:5px}
	table {border-collapse:collapse}
</style>
</head>	
<body>
<?php

if($_GET['id']=='logout')
    $_SESSION['admin']=false;

if($_GET)
{
    if($_GET['id']=='dodaj' and $_SESSION['admin'])
	include "film_dodaj.php";
    else  if(intval($_GET['id']) and $_SESSION['admin'])
    	include "film_edit.php";
    else if($_GET['id']=='login')
	include "login.php";
    else 
	include "film_tabela.php";
}
 else
    include "film_tabela.php";
?>
</body>
</html>
