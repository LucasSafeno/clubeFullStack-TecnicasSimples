<?php
// função recursiva é que chama ela prorpira


function checkNumber(int $number)
{
  if ($number === 10) {
    var_dump('Chegou a 10');
    return;
  }

  checkNumber($number + 1);
}

checkNumber(1);
