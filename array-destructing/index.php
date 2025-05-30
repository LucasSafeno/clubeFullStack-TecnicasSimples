<?php
// $numbers = [1, 2, 3, 4, 5, 6, 7];

// [$num1, $num2,,,,, $num7] = $numbers;

// var_dump($num1, $num7);


['scheme' => $scheme, 'host' => $host] = parse_url('https://lucas.dev.br');

var_dump($scheme, $host);
