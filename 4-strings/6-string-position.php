<?php 
  $my_string = 'Courage is resistance to fear, mastery of fear, not absence of fear';
  echo strpos($my_string, 'fear');

  echo strpos($my_string, 'fear', 26) /* Find the next occurrence of the word 'fear' starting from length 25 */

  /* Return character for a not-found string is an empty string */
?>