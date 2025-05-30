<?php
$string = ['Meu nome é, Lucas', 'Lucas, tem 30 anos'];
$replace = str_replace(
  [',', 'Lucas'],
  [';', 'Tenório'],
  $string
);

var_dump($replace);
