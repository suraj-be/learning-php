<?php 
  $my_array = [
    'my_text' => 'Hello There',
    4 => true,
    "Mark Twain"
  ];

  echo array_key_exists('my_text', $my_array);
  echo array_key_exists(1, $my_array);

  /* 
    If the key does not exists, then this function returns an empty string, else returns 1
  */
?>