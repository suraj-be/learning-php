<?php 
  $my_integer = 10;
  $my_float = 10.00;
  $my_boolean_val = true;
  $my_string_val = 'Suraj';
  define('MY_CONSTANT', 'SURAJ BERA');

  echo is_int($my_integer);
  echo is_float($my_float);
  echo is_bool($my_boolean_val);
  echo is_string($my_string_val);
  echo defined('MY_CONSTANT');

  /* Return value of these functions is either 0 or 1 */
?>