<?php 
  $my_string = 'To be or not to be is the question';
  echo str_replace('not', '\'why not\'', $my_string);

  echo str_replace('be', 'know', $my_string, $count);
  echo $count; /* 2 */
?>