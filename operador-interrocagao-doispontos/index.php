<?php

$name = 'Lucas';
var_dump($name ?? 'Tenório');
// thruty
// false
var_dump($name ?: 'Tenório');
// if (isset($name)) {
//   var_dump($name);
// } else {
//   var_dump('Lucas');
// }
