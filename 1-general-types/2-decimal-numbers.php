<?php 
  $binaryNumber = 0b1000;
  $hexNumber = 0xffddaa;
  $octalNumber = 01234567;

  var_dump($binaryNumber);
  var_dump($octalNumber);
  var_dump($hexNumber);

  /* 
    - Prefix for octal: Nothing
    - Prefix for binary: 0b
    - Prefix for hexadecimal: 0x 
  */

  /* 
    - PHP can handle very large variables, depending on your platform, an integer in php for a 32-bit signed value can be about 2 billion( +/- 2E10 ). For a 64-bit platform, it can go up to '+/- 9E18(9 to the 18th power)',
    - PHP does not support unsigned integers. So what happen's when the integer goes larger than the value it's allowed? Well, PHP automatically converts it into float. 
  */
?>