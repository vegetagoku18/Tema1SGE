<?php
  $fibonacci1 = 0;
  $fibonacci2 = 1;
  $fibonacci3 = 0;
  $fin = 1000;
  echo $fibonacci1 ,"<br>";
  echo $fibonacci2 ,"<br>";
  while ($fibonacci2 + $fibonacci1 < $fin) {
    $fibonacci3 = $fibonacci2 + $fibonacci1;
    $fibonacci1=$fibonacci2;
    $fibonacci2=$fibonacci3;
    echo $fibonacci3 ,"<br>";
  }
?>