<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$numbers = [];

for ($i=0; count($numbers) < 15; $i++) {
    $item = rand(1,50);

    if (!in_array($item,$numbers)){
        $numbers[]=$item;
    }
}

var_dump($numbers)

?>
