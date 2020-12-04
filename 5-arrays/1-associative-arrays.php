<?php 
  $my_array = [
    'my_text' => 'Hello There',
    4 => true,
    "Mark Twain"
  ];

  /* This is a valid associative array, if no key is assigned to a value, then php will automatically insert it(10 + 1)  */
  print_r($my_array);
?>

<!-- Unlike JS, php assigns key to an indexed array. -->