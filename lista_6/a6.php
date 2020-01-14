<?php
include "0begin.php";
?>
<h2 style="text-align: center">Lista wiadomości</h2>
<ul>
<?php

  $obrazki=scandir('news');


  foreach($obrazki as $plik)

  {if($plik[0]!='.')
     {
       include "news/$plik";
       echo "\n\n";
     }
  }
?>
</ul>
<?php
include "0end.php";