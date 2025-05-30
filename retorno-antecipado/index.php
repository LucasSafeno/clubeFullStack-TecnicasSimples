<?php
function getStatus(int $isAdmin)
{
  if ($isAdmin) {
    // code..
    //return
    // executa verdadeiro e para, caso não, pula pro próximo return. Sem a necessidade do else
    return 'é admin';
  }
  return 'não é admin';
} //getStatus

var_dump(getStatus(1));
