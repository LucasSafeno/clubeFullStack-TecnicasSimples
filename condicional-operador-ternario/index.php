<?php
function getStatus(int $isAdmin)
{

  return ($isAdmin) ? 'é admin' : 'Não é admin';
  // if ($isAdmin) {
  //   $message = 'é admin';
  // } else {
  //   $message = 'Não é admin';
  // }

  // return $message;
} //getStatus

var_dump(getStatus(1));
