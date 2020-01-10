<?php
include "0begin.php";
?>
<h1>Strona piąta</h1>
<ul>
<?php

  $obrazki=scandir('filmy');


  foreach($obrazki as $plik)

  {if($plik[0]!='.')
     echo "<video width='600' height='600'><source src='filmy/$plik' type='video/mp4></video>";
  }
?>
</ul>
<?php
include "0end.php";