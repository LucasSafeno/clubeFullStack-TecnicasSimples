<?php
class Person
{
  public function getName()
  {
    return 'Lucas';
  }
}

var_dump((new Person)->getName());
