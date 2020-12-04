<?php 
  $my_array = [
    'Amit Agarwal',
    'Suraj Bera',
    'Ayush Devpura'
  ];

  unset($my_array[0], $my_array[1]);
  print_r($my_array);

  /* Multiple items can be removed using unset() */
?>