<?php 
  $my_array = [ 'value-1', 'value-2', 'value-3', 'value-4' ];

  echo in_array('value-1', $my_array);
  echo in_array('value-11', $my_array); /* again returns an empty string */

  $my_array_2 = [
    'Charles',
    'Mike',
    'Jane',
    10
  ];

  echo in_array(10, $my_array_2, true);
  /* default value of 3rd argument in false */

  /* 
    Q) What the 3rd argument mean?
    Ans. We not only want to check the value, but also the type should be the same.
  */
?>