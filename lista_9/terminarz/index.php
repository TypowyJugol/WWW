
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


if($_GET['id']=='dodaj')
include "terminarz_dodaj.php";
else  if(intval($_GET['id']))
    include "terminarz_edit.php";
else 
include "terminarz_tabela.php";

?>
</body>
</html>
