<?php 
  /* unset function is not specific just for arrays, it can be used on any variable type. */
  /* Here's how you can remove an item from an array in between. */

  $my_array = [
    'Amit Agarwal',
    'Suraj Bera',
    'Ayush Devpura'
  ];

  unset($my_array[0]);
  print_r($my_array);
?>