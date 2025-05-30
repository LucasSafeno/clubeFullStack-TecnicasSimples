<?php

$numbers = [1, 2, 3, 4, 5];

$key = array_search(3, $numbers);

// var_dump($key);
var_dump($numbers[$key]);

// foreach ($numbers as $number) {
//   var_dump('Encontrando' . $number);
//   if ($number === 3) {
//     var_dump('Encontrou o 3');
//     break;
//   }
// }
