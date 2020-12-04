<?php
  function add_new_line() {
    echo "<br>";
  }

  $my_string = 'There is no great genius without a mixture of madness';
  echo str_shuffle($my_string); /* doesn't mutate the original string */
  add_new_line();
  echo str_repeat($my_string, 2);
  add_new_line();
  echo strlen($my_string);
?>