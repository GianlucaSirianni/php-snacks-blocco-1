<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$array = [];


while(count($array) < 15) {
    $num = rand(1, 100);
    if(!in_array($num, $array)){
      $array[] = $num;
    }
  } 

  echo "<pre>";
  var_dump($array);
  echo "</pre>";


?>

