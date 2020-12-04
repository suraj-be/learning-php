<?php 
  $my_array = [
    'Amit Agarwal',
    'Suraj Bera',
    'Ayush Devpura'
  ];
  unset($my_array);
  print_r($my_array); /* Undefined variable: my_array */

  /* I think unset() actually removes the variable itself from memory as if the variable was never created. */
?>