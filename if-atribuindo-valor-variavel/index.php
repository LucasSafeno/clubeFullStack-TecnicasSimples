<?php
if (class_exists($class = 'app\\library\\Teste')) {
  // $class = 'app\\library\\Teste';
  $instantce = new $class;
  $instance->teste();
}
