<?php
$numbers = [1, 2, 3, 4, 5];


unset($numbers[2]);

var_dump(array_values($numbers));
