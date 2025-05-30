<?php
// function sum(int $num1, int $num2)
// {
//   return $num1 + $num2;
// }

$sum = fn(int $num1, $num2) => $num1 + $num2;

var_dump($sum);

// var_dump(sum(1, 2));
